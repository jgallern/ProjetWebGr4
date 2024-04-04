<?php

require_once "../models/Entreprise.php";

class SecteurController {
    private $model;

    public function __construct() {
        $this->model = new Entreprise();
    }

    // Fetches and outputs all sectors in JSON format
    public function fetchSectors() {
        header('Content-Type: application/json');
        try {
            $secteurs = $this->model->fetchAllSecteurs();
            echo json_encode(['success' => true, 'secteurs' => $secteurs]);
        } catch (Exception $e) {
            echo json_encode(['success' => false, 'message' => "Error fetching sectors: " . $e->getMessage()]);
        }
        exit;
    }

    // Handles the addition of a new sector
    public function handleAddSecteur() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nom_secteur'])) {
            $nomSecteur = trim($_POST['nom_secteur']);
            if (empty($nomSecteur)) {
                $_SESSION['flash_message'] = "Sector name is required.";
                header('Location: ../views/Page_Gestions/gestion_entreprise_pilote_admin.php');
                exit;
            }

            $result = $this->model->addSecteur($nomSecteur);
            if ($result['success']) {
                $_SESSION['success_message'] = "Sector added successfully.";
            } else {
                $_SESSION['error_message'] = "Failed to add sector: " . $result['message'];
            }
            header('Location: ../views/Page_Gestions/gestion_entreprise_pilote_admin.php');
            exit;
        }
    }
}

// Instantiate and route based on action parameter
$model = new Entreprise();
$controller = new SecteurController($model);

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'fetch':
            $controller->fetchSectors();
            break;
        case 'add':
            $controller->handleAddSecteur();
            break;
        default:
            header('HTTP/1.0 404 Not Found');
            echo "Action not recognized";
            break;
    }
} else {
    header('HTTP/1.0 404 Not Found');
    echo "Action parameter is missing";
}

