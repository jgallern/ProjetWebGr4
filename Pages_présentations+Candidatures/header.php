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

class FileManager {
    private $uploadDirectory = "uploads\\"; // Assurez-vous que ce répertoire existe et a les permissions adéquates

    public function getUniqueFilePath($filename) {
        $filePath = $this->uploadDirectory . basename($filename);
        $fileInfo = pathinfo($filePath);
        $fileExtension = $fileInfo['extension'];
        $filenameWithoutExt = $fileInfo['filename'];
        $counter = 1;

        while (file_exists($filePath)) {
            $newFilename = $filenameWithoutExt . "_" . $counter . '.' . $fileExtension;
            $filePath = $this->uploadDirectory . $newFilename;
            $counter++;
        }

        return $filePath;
    }
}

class Application {
    private $bddconnection;
    private $fileManager;

    public function __construct()
    {
        $this->fileManager = new FileManager();
    }
    function set_bddconnection($bddconnection){
        $this->bddconnection = $bddconnection;
    }

    public function handleUpload($cvFile, $motivationFile, $idEtudiant = 7) {
        if ($cvFile && $motivationFile) {
            $cvPath = $this->fileManager->getUniqueFilePath($cvFile['name']);
            $motivationPath = $this->fileManager->getUniqueFilePath($motivationFile['name']);

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


class RatingManager
{
    private $bddconnection;

    public function __construct()
    {

    }
    function set_bddconnection($bddconnection){
        $this->bddconnection = $bddconnection;
    }

    public function addRating($rating, $comment)
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
}



