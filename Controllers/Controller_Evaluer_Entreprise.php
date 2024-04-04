<?php

session_start();

require_once "../models/Entreprise.php"; // Adjust the path as necessary.
// controllers/OffreController.php
class ControllerEvaluerEntreprise {
    private $entrepriseModel;

    public function __construct() {
        $this->entrepriseModel = new Entreprise();
    }

    public function showOffreDetails() {
        // Any necessary logic to fetch offre details goes here
        // For now, let's assume we're just showing the static page

        // Potentially fetch entreprise details to pass to the view
        // $entrepriseDetails = $this->entrepriseModel->getDetails();

        // Display the view
        require '../views/Page_Candidature+PresentationOffre-Entreprise/PagePresentationOffre.php'; // Adjust the path as necessary
    }

    public function evaluateOffre() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['rating'], $_POST['commentaire'])) {
            $result = $this->entrepriseModel->Evaluer_Entreprise($_POST['rating'], $_POST['commentaire']);

            // Store result in a session for feedback
            $_SESSION['feedback'] = $result['message']; // Ensure your model returns a message

            // Redirect to prevent form resubmission, adjust URL as needed
            header("Location: ../views/Page_Candidature+PresentationOffre-Entreprise/PagePresentationOffre.php");
            var_dump($_POST);
            var_dump($result);
            exit();
        }

    }

}

// Instantiate the controller
$controller = new ControllerEvaluerEntreprise();

// Example call to handle form submission
$controller->evaluateOffre();

// Show the offre details page by default
$controller->showOffreDetails();
