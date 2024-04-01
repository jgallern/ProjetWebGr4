<?php

require_once 'Model.php';

class Offre extends Model {
    private $uploadDirectory;

    public function __construct() {
        parent::__construct();
        $this->uploadDirectory = __DIR__ . "../assets/uploads"; // Use absolute path

        // Ensure upload directory exists and is writable
        if (!file_exists($this->uploadDirectory) && !mkdir($this->uploadDirectory, 0755, true) && !is_dir($this->uploadDirectory)) {
            throw new RuntimeException(sprintf('Directory "%s" was not created', $this->uploadDirectory));
        }
    }

    private function getUniqueFilePath($filename) {
        $filePath = $this->uploadDirectory . basename($filename);
        $fileInfo = pathinfo($filePath);
        $fileExtension = isset($fileInfo['extension']) ? '.' . $fileInfo['extension'] : '';
        $filenameWithoutExt = $fileInfo['filename'];
        $counter = 1;

        // Ensure file path is unique to avoid overwriting existing files
        while (file_exists($filePath)) {
            $filePath = $this->uploadDirectory . $filenameWithoutExt . "_" . $counter . $fileExtension;
            $counter++;
        }

        return $filePath;
    }

    public function handleUpload($cvFile, $motivationFile, $idEtudiant = 7) {
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
