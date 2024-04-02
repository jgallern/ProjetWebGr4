<?php
// Session start should be at the entry point or controller, not here
// Assuming session_start() is already called in a centralized location

// Retrieve and clear session messages
$message = isset($_SESSION['message']) ? htmlspecialchars($_SESSION['message']) : '';
unset($_SESSION['message']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ensure the path to the stylesheet is correct -->
    <link rel="stylesheet" href="/GitHub/ProjetWebGr4/assets/css/style_3.css">
    <title>Candidature</title>
</head>

<body>

<header>
    <!-- Ensure the path to the logo is correct -->
    <img src="/assets/images/logo_png.png" alt="Logo" id="logo">
    <!-- Logout functionality should be properly handled -->
    <button id="deconnexion" onclick="window.location.href='/logout';">Déconnexion</button>
</header>

<main>
    <h1>Tu y es presque !</h1>
    <!-- The form action should point to the correct MVC route -->
    <!-- For instance, if "/submit-candidature" is routed to the handleFormSubmission method -->
    <form id="candidature-form" action="/controllers/ControllerOffre.php" method="POST" enctype="multipart/form-data">
        <?php if ($message): ?>
            <div class="alert"><?php echo $message; ?></div>
        <?php endif; ?>
        <div class="input-container">
            <label for="cv">Ton CV</label>
            <input type="file" id="cv" name="cv" required>
        </div>
        <div class="input-container">
            <label for="motivation">Ta lettre de motivation</label>
            <input type="file" id="motivation" name="motivation" required>
        </div>
        <button type="submit">ENVOYER</button>
    </form>
</main>

</body>
</html>
