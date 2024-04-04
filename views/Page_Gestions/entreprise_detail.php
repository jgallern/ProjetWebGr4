<?php
require_once "../../models/Entreprise.php";
// Start the session and include necessary files
session_start();

$entrepriseModel = new Entreprise();

// Get the entreprise ID from the URL
$entrepriseId = isset($_GET['id']) ? $_GET['id'] : null;

$entrepriseDetails = null;

// Fetch the entreprise details from the database
if ($entrepriseId) {
    $entrepriseDetails = $entrepriseModel->getEntrepriseDetailsById($entrepriseId);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Entreprise Details</title>
    <link rel="stylesheet" href="../path/to/your/css/style.css"> <!-- Update this path to your CSS file -->
</head>
<body>
<div class="entreprise-details">
    <?php if ($entrepriseDetails): ?>
        <h1><?= htmlspecialchars($entrepriseDetails['nom']) ?></h1>
        <p>Description: <?= htmlspecialchars($entrepriseDetails['description']) ?></p>
        <p>Secteur: <?= htmlspecialchars($entrepriseDetails['secteur']) ?></p>
        <p>Adresse: <?= htmlspecialchars($entrepriseDetails['Numero_rue']) . " " . htmlspecialchars($entrepriseDetails['Nom_rue']) . ", " . htmlspecialchars($entrepriseDetails['Ville']) ?></p>
        <!-- Display other details as needed -->
        <!-- Example Edit Link or Button (adjust as necessary) -->
        <a href="edit_entreprise.php?id=<?= urlencode($entrepriseId) ?>" class="edit-button">Modifier Entreprise</a>
    <?php else: ?>
        <p>Entreprise details not found.</p>
    <?php endif; ?>
</div>
</body>
</html>
