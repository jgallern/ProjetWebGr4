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

    public function Recherher_Entreprise()
    {

    }
}
