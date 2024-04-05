<?php

require_once "../models/Entreprise.php";

class CreateEnterpriseController
{
    private $entrepriseModel;

    public function __construct()
    {
        $this->entrepriseModel = new Entreprise();
    }

    public function handleRequest()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Extract data from POST request
            $nom = $_POST['nom'] ?? null;
            $description = $_POST['description'] ?? null;
            $secteur = $_POST['secteur'] ?? null;
            $numeroRue = $_POST['numero_rue'] ?? null;
            $nomRue = $_POST['nom_rue'] ?? null;
            $ville = $_POST['ville'] ?? null;

            // Validate required fields
            if (!$nom || !$description || !$secteur || !$numeroRue || !$nomRue || !$ville || !isset($_FILES['logo'])) {
                // Handle missing data, perhaps set a flash message or redirect back with an error
                $_SESSION['flash_message'] = "All fields, including the logo, are required.";
                header('Location: ../views/Page_Gestions/gestion_entreprise_pilote_admin.php');
                exit();
            }

            // Handling logo upload separately
            $logoFile = $_FILES['logo'];

            // Attempt to create the enterprise with logo file array
            $result = $this->entrepriseModel->Creer_Entreprise($nom, $description, $secteur, $logoFile, $numeroRue, $nomRue, $ville);

            if ($result['success']) {
                // Store a success message in the session
                $_SESSION['success_message'] = "Entreprise created successfully!";
                header('Location: ../views/view_admin/gestion_entreprise_admin.php');
                exit();
            } else {
                // Handle failure case as before
                $_SESSION['error_message'] = $result['message'];
                header('Location: ../views/viewError.php');
                exit();
            }
        } else {
            // If not a POST request, maybe redirect to the form or show an error
            header('Location: ../views/viewError.php');
        }
    }
}

$controller = new CreateEnterpriseController();
$controller->handleRequest();
