<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdd_projetweb";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch(PDOException $e) {
    echo "Connexion échouée: " . $e->getMessage();
}


class Offre {
    private $bddconnection;
    private $uploadDirectory = "uploads\\"; // Make sure this directory exists and has the correct permissions

    function set_bddconnection($bddconnection) {
        $this->bddconnection = $bddconnection;
    }

    // Integrated unique file path generator
    private function getUniqueFilePath($filename) {
        $filePath = $this->uploadDirectory . basename($filename);
        $fileInfo = pathinfo($filePath);
        $fileExtension = isset($fileInfo['extension']) ? $fileInfo['extension'] : '';
        $filenameWithoutExt = $fileInfo['filename'];
        $counter = 1;

        while (file_exists($filePath)) {
            $newFilename = $filenameWithoutExt . "_" . $counter . '.' . $fileExtension;
            $filePath = $this->uploadDirectory . $newFilename;
            $counter++;
        }

        return $filePath;
    }

    // Method to handle file uploads and insert details into the database
    public function handleUpload($cvFile, $motivationFile, $idEtudiant = 7) {
        if ($cvFile && $motivationFile) {
            $cvPath = $this->getUniqueFilePath($cvFile['name']);
            $motivationPath = $this->getUniqueFilePath($motivationFile['name']);

            $cvUploadSuccess = move_uploaded_file($cvFile['tmp_name'], $cvPath);
            $motivationUploadSuccess = move_uploaded_file($motivationFile['tmp_name'], $motivationPath);

            if ($cvUploadSuccess && $motivationUploadSuccess) {
                $stmt = $this->bddconnection->prepare("INSERT INTO Candidature (CV, lettremotiv, ID_Etudiant) VALUES (?, ?, ?)");
                $stmt->execute([$cvPath, $motivationPath, $idEtudiant]);

                echo "Fichiers téléchargés et enregistrés avec succès dans la base de données.";
            } else {
                echo "Erreur lors du téléchargement des fichiers.";
            }
        } else {
            echo "Erreur : Fichiers non fournis.";
        }
    }
}





class Entreprise
{
    private $bddconnection;

    public function __construct()
    {

    }
    function set_bddconnection($bddconnection){
        $this->bddconnection = $bddconnection;
    }

    public function Evaluer_Entreprise($rating, $comment)
    {
        if (isset($rating) && isset($comment)) {
            try {
                $stmt = $this->bddconnection->prepare("INSERT INTO Notes (Note, Commentaire) VALUES (?, ?)");
                $stmt->execute([$rating, $comment]);
                echo "Nouvel enregistrement créé avec succès";
            } catch (PDOException $e) {
                echo "Erreur lors de l'ajout de la note: " . $e->getMessage();
            }
        } else {
            echo "Note ou commentaire non fourni.";
        }
    }

    public function Creer_Entreprise($nom, $description, $secteur, $logoPath, $numeroRue, $nomRue, $ville) {
        try {
            // Step 1: Insert address into the Adresse table
            $stmtAdresse = $this->bddconnection->prepare("INSERT INTO Adresse (Numero_rue, Nom_rue, Ville) VALUES (?, ?, ?)");
            $stmtAdresse->execute([$numeroRue, $nomRue, $ville]);
            $idAdresse = $this->bddconnection->lastInsertId(); // Retrieve the ID of the newly inserted address

            // Step 2: Insert entreprise information into the Entreprise table, including the new ID_Adresse
            $stmtEntreprise = $this->bddconnection->prepare("INSERT INTO Entreprise (nom, description, secteur, logo, ID_Adresse) VALUES (?, ?, ?, ?, ?)");
            $stmtEntreprise->execute([$nom, $description, $secteur, $logoPath, $idAdresse]);

            echo "Entreprise créée avec succès.";
        } catch (PDOException $e) {
            echo "Erreur lors de la création de l'entreprise: " . $e->getMessage();
        }
    }

    public function Rechercher_Entreprise($name = null, $sector = null, $ville = null, $numeroRue = null, $nomRue = null) {
        $query = "SELECT Entreprise.* FROM Entreprise 
              JOIN Adresse ON Entreprise.ID_Adresse = Adresse.ID_Adresse 
              WHERE 1=1";
        $params = [];

        if ($name) {
            $query .= " AND Entreprise.Nom LIKE ?";
            $params[] = "%" . $name . "%";
        }
        if ($sector) {
            $query .= " AND Entreprise.Sector = ?"; // Adjust based on your actual column name
            $params[] = $sector;
        }
        if ($ville) {
            $query .= " AND Adresse.Ville LIKE ?";
            $params[] = "%" . $ville . "%";
        }
        if ($numeroRue) {
            $query .= " AND Adresse.Numero_Rue = ?";
            $params[] = $numeroRue;
        }
        if ($nomRue) {
            $query .= " AND Adresse.Nom_Rue LIKE ?";
            $params[] = "%" . $nomRue . "%";
        }

        $stmt = $this->bddconnection->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }



    public function FetchRandomEntreprises() {
        try {
            $stmt = $this->bddconnection->query("SELECT * FROM Entreprise ORDER BY RAND() LIMIT 5"); // Adjust table name and limit as needed
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération des entreprises: " . $e->getMessage();
            return [];
        }
    }


}
