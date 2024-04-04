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

    public function ajouter_offre() {
        $sql = "INSERT INTO Offre (Dureestage, Baseremuneration, dateoffre, nbplaces, nbdejapostule, Competence, Destination_promotion, ID_Adresse, ID_Entreprise) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->bdd->prepare($sql);
        $stmt->execute([$this->Dureestage, $this->Baseremuneration, $this->Dateoffre, $this->Nbplaces, $this->Nbdejapostule, $this->Competence, $this->Destination_promotion, $this->ID_Adresse, $this->ID_Entreprise]);
    }

    public function supprimer_offre($ID_Offre) {
        $sql = "DELETE FROM Offre WHERE ID_Offre = ?";
        $stmt = $this->bdd->prepare($sql);
        $stmt->execute([$ID_Offre]);
    }

    public function rechercher_offre($critere) {
        // Exemple de recherche par critère, ajustez selon vos besoins
        $sql = "SELECT * FROM Offre WHERE Competence LIKE ?";
        $stmt = $this->bdd->prepare($sql);
        $stmt->execute(['%' . $critere . '%']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function modifier_offre($ID_Offre) {
        $sql = "UPDATE Offre SET Dureestage = ?, Baseremuneration = ?, dateoffre = ?, nbplaces = ?, nbdejapostule = ?, Competence = ?, Destination_promotion = ?, ID_Adresse = ?, ID_Entreprise = ? WHERE ID_Offre = ?";
        $stmt = $this->bdd->prepare($sql);
        $stmt->execute([$this->Dureestage, $this->Baseremuneration, $this->Dateoffre, $this->Nbplaces, $this->Nbdejapostule, $this->Competence, $this->Destination_promotion, $this->ID_Adresse, $this->ID_Entreprise, $ID_Offre]);
    }