<?php

require_once 'Model.php';

class Offre extends Model {

    private $uploadDirectory = "../assets/Uploads/"; // Make sure this directory exists and has the correct permissions


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
    public function handleUpload($cvFile, $motivationFile, $idEtudiant = 2) {
        // Validate file upload presence
        if (!$cvFile || !$motivationFile) {
            return ["success" => false, "message" => "Erreur : Fichiers non fournis."];
        }

        $cvPath = $this->getUniqueFilePath($cvFile['name']);
        $motivationPath = $this->getUniqueFilePath($motivationFile['name']);

        // Attempt to move uploaded files to target directory
        $cvUploadSuccess = move_uploaded_file($cvFile['tmp_name'], $cvPath);
        $motivationUploadSuccess = move_uploaded_file($motivationFile['tmp_name'], $motivationPath);

        if ($cvUploadSuccess && $motivationUploadSuccess) {
            $stmt = $this->getBDD()->prepare("INSERT INTO Candidature (CV, lettremotiv, ID_Etudiant) VALUES (?, ?, ?)");
            $stmt->execute([$cvPath, $motivationPath, $idEtudiant]);

            return ["success" => true, "message" => "Fichiers téléchargés et enregistrés avec succès dans la base de données."];
        } else {
            // Cleanup if one of the uploads failed but the other succeeded
            if ($cvUploadSuccess) unlink($cvPath);
            if ($motivationUploadSuccess) unlink($motivationPath);

            return ["success" => false, "message" => "Erreur lors du téléchargement des fichiers."];
        }
    }

}