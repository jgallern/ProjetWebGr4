<?php

require_once "../models/Offre.php"; // Adjust the path as necessary.
// controllers/OffreController.php

class OffreController {
    private $model;

    public function __construct() {
        $this->model = new Offre();
    }

    public function handleFormSubmission() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['cv'], $_FILES['motivation'])) {
            $result = $this->model->handleUpload($_FILES['cv'], $_FILES['motivation']);

            // Prepare message based on result
            $message = $result ? "Candidature envoyée avec succès." : "Erreur lors de l'envoi de la candidature.";

            // Store message in session or pass directly to view
            $_SESSION['message'] = $message;

            // Redirect back to form or to a confirmation page
            header("Location: /views/Page_Candidature/PagedeCandidature.php");
            exit();
        }
    }
}

// Instantiate and call the method
$controller = new OffreController();
$controller->handleFormSubmission();

