<?php
session_start();
require_once "../../models/Entreprise.php";
$entrepriseModel = new Entreprise();

$message = '';
$entrepriseDetails = null;

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process the form submission
    $entrepriseId = $_POST['id_entreprise'];
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $secteur = $_POST['secteur']; // Assuming this is a text input
    $numeroRue = $_POST['numero_rue'];
    $nomRue = $_POST['nom_rue'];
    $ville = $_POST['ville'];
    $logo = $_FILES['logo']; // This is how you access the uploaded file

    // Validation here...

    // Update entreprise details in the database
    $result = $entrepriseModel->updateEntreprise($entrepriseId, $nom, $description, $secteur, $numeroRue, $nomRue, $ville, $logo);
    if ($result) {
        $message = "Entreprise updated successfully.";
    } else {
        $message = "Failed to update entreprise.";
    }
} else if (isset($_GET['id'])) {
    // If not a form submission, fetch the entreprise details for editing
    $entrepriseId = $_GET['id'];
    $entrepriseDetails = $entrepriseModel->getEntrepriseDetailsById($entrepriseId);
}

if (!empty($message)) {
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Entreprise</title>
</head>
<body>
<?php if ($message): ?>
    <p><?= $message ?></p>
<?php endif; ?>

<?php if ($entrepriseDetails): ?>
    <form action="edit_entreprise.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_entreprise" value="<?= $entrepriseDetails['ID_Entreprise'] ?>">

        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($entrepriseDetails['nom']) ?>">

        <label for="description">Description:</label>
        <textarea id="description" name="description"><?= htmlspecialchars($entrepriseDetails['description']) ?></textarea>

        <label for="secteur">Secteur:</label>
        <input type="text" id="secteur" name="secteur" value="<?= htmlspecialchars($entrepriseDetails['secteur']) ?>">

        <label for="logo">Logo:</label>
        <input type="file" id="logo" name="logo">
        <p>Current logo: <?= htmlspecialchars($entrepriseDetails['logo']) ?></p>

        <label for="numero_rue">Numéro de rue:</label>
        <input type="text" id="numero_rue" name="numero_rue" value="<?= htmlspecialchars($entrepriseDetails['Numero_rue']) ?>">

        <label for="nom_rue">Nom de rue:</label>
        <input type="text" id="nom_rue" name="nom_rue" value="<?= htmlspecialchars($entrepriseDetails['Nom_rue']) ?>">

        <label for="ville">Ville:</label>
        <input type="text" id="ville" name="ville" value="<?= htmlspecialchars($entrepriseDetails['Ville']) ?>">

        <button type="submit">Update Entreprise</button>
    </form>
<?php else: ?>
    <?php header('Location: ../Page_Gestions/gestion_entreprise_pilote_admin.php'); ?>
<?php endif; ?>
</body>
</html>

