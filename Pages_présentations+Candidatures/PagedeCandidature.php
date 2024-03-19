<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_3.css">
    <title>Candidature</title>
</head>

<body>

<header>
    <img src="logo_png.png" alt="Logo" id="logo">
    <button id="deconnexion">Déconnexion</button>
</header>

<main>
    <h1>Tu y es presque !</h1>
    <form id="candidature-form" action="" method="POST" enctype="multipart/form-data">
        <div class="input-container">
            <label for="cv">Ton CV</label>
            <input type="file" id="cv" name="cv">
        </div>
        <div class="input-container">
            <label for="motivation">Ta lettre de motivation</label>
            <input type="file" id="motivation" name="motivation">
        </div>
        <button type="submit">ENVOYER</button>
    </form>

</main>



</body>
</html>

<?php
global$bdd;
try{
    require_once "header.php";
}
catch(Exception $e){
    echo 'petit problème'.$e->getMessage().'';
}

// Utilisation

$app = new Application();
$app->set_bddconnection($bdd);
if (isset($_FILES['cv']) && isset($_FILES['motivation'])) {
    $app->handleUpload($_FILES['cv'], $_FILES['motivation']);
} else {
    echo "";
}

?>

