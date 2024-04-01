<?php

require_once "Models/Offre.php"; // Adjust the path as necessary.

class ControllerOffre {
    private $offreModel;

    public function __construct() {
        $this->offreModel = new Offre();
    }

    // Entry point for showing the form.
    public function showForm() {
        // This might include preloading any data required for the form.
        include '../views/Page_Candidature/PagedeCandidature.php';
    }

    public function handleFormSubmission() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['cv'], $_FILES['motivation'])) {
            $response = $this->offreModel->handleUpload($_FILES['cv'], $_FILES['motivation']);
            $_SESSION['message'] = $response['message'];

            // Redirect to a route that displays the form again or to a success page
            $this->redirect('your_route_here'); // Adjust the redirection path to fit your routing strategy
        } else {
            // Handle the case where the method is called incorrectly.
            $_SESSION['message'] = 'Invalid request method.';
            $this->redirect('your_error_route_here'); // Adjust as needed
        }
    }

    private function redirect($route) {
        header('Location: ' . $route);
        exit();
    }
}

