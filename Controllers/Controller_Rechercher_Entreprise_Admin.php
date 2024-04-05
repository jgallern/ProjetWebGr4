<?php
require_once "../models/Entreprise.php";
// Start session if you are using session variables
session_start();

// Instantiate the Entreprise model
$entrepriseModel = new Entreprise();

// Check if the search form was submitted
if (isset($_POST['submit-search'])) {
    // Retrieve form data
    $searchName = $_POST['search_name'] ?? null;
    $searchVille = $_POST['search_ville'] ?? '';
    $searchNumeroRue = $_POST['search_numero-rue'] ?? '';
    $searchNomRue = $_POST['search_nom-rue'] ?? '';
    $searchSector = $_POST['search_sector'] ?? null;

    // Perform the search
    $entreprises = $entrepriseModel->Rechercher_Entreprise($searchName, $searchSector, $searchVille, $searchNumeroRue, $searchNomRue);

    // Handle the case where no results are found
    if (empty($entreprises)) {
        $noResultsMessage = "Aucun résultat trouvé pour les critères de recherche spécifiés.";
    }

    // Store results in a session variable or pass directly to the view
    $_SESSION['searchResults'] = $entreprises;
    $_SESSION['noResultsMessage'] = $noResultsMessage ?? ''; // If not set, default to an empty string

    // In the controller, right before redirection

    // Redirect to the search results page or back to the form with results
    // Adjust the redirect location as needed
    header('Location: ../views/view_admin/gestion_entreprise_admin.php');
    exit;
} else {
    // Redirect back to the form if the search wasn't initiated properly
    header('Location: ../views/view_admin/gestion_entreprise_admin.php');
    exit;
}



// Note: You will need to handle displaying the search results or the no results message in your search results or form page.
// You can access them using the session variables $_SESSION['searchResults'] and $_SESSION['noResultsMessage'], respectively.