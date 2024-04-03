
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Stage En Bref</title>
  <link rel="stylesheet" href="../../assets/css/style.css">
  <script src="script.js"></script>
  <link rel="icon" href="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png" type="image/png">


</head>
<body>
    <div id="bienvenue">
        <a href="../../Old%20Files_If_Needed/page_accueil_ss_connexion.php"><img id="logo_connexion" alt="logo SEB" src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"></a>

            <?php
            if (isset ($_COOKIE["connected"])) {
                if ($_COOKIE["connected"] == 1) {
                ?>
            <form method="post" action="disconnect.php">
                <input type="submit" value="Se déconnecter">
            </form>

                <?php
                } 
            }

?>



        <h1 class="police_texte" id="titre_bienvenue">salut</h1>
    </div>

    <form id="fenetre_login" class="police_texte" method="post" action="../../controllers/auth_controller.php">
        <h2>Qui es tu ?</h2>
        <input id="id_connection" name="id_connection" class="input_connexion" type="text" placeholder="Identifiant"><br><br>
        <h2>Ton mot de passe ? <span style="font-size: 0.7em;">(promis je garde ça secret)</span></h2>
        <input id="password_connection" name="password_connection" class="input_connexion" type="password" placeholder="Mot de passe"><br>

    <div id="boutons">
        <input id="oubli_mdp" type="button" value="Pardon, j'ai oublié mon mot de passe">
        <input id="submit" type="submit" value="Se connecter">
<?php
    $erreur = $_GET['login'];
    if ($erreur == 'false') {
        echo "<p>mot de passe ou nom d'utilisateur incorrect</p>";
    }
    elseif ($erreur == 'missingfields') {
        echo "<p>Veuillez entrer tous les champs de connection</p>";
    }

    ?>
</div>
</form>




</body>

<footer class="police_texte">&copy; Stage En Bref. <br> Tous droits réservés

</footer>

</html>
