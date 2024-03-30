<?php

class Offre extends Model
{
    private $uploadDirectory = "uploads\\"; // Make sure this directory exists and has the correct permissions


// Incremente fichier, si existe deja
    private function getUniqueFilePath($filename)
    {
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
    public function handleUpload($cvFile, $motivationFile, $idEtudiant = 7)
    {

        if ($cvFile && $motivationFile) {
            $cvPath = $this->getUniqueFilePath($cvFile['name']);
            $motivationPath = $this->getUniqueFilePath($motivationFile['name']);

            $cvUploadSuccess = move_uploaded_file($cvFile['tmp_name'], $cvPath);
            $motivationUploadSuccess = move_uploaded_file($motivationFile['tmp_name'], $motivationPath);

            if ($cvUploadSuccess && $motivationUploadSuccess) {
                $stmt = $this->getBDD()->prepare("INSERT INTO Candidature (CV, lettremotiv, ID_Etudiant) VALUES (?, ?, ?)");
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