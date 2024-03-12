<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_3.css">
    <script src="script.js"></script>
</head>

<body>

<header>
    <img src="logo_png.png" alt="Logo" id="logo">
    <button id="deconnexion">Déconnexion</button>
</header>

<main>
    <h1>Tu y es presque !</h1>
    <form id="candidature-form">
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
require_once "CV_Lettre.php";
?>