
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Stage En Bref</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <link rel="icon" href="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png" type="image/png">


</head>
<body>
    <div id="bienvenue">
        <a href="page_accueil_ss_connexion.php"><img id="logo_connexion" alt="logo SEB" src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"></a>

            <?php
            if (isset ($_COOKIE["connected"])) {
                if ($_COOKIE["connected"] == true) {
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

    <form id="fenetre_login" class="police_texte" method="post" action="connect.php">
        <h2>Qui es tu ?</h2>
        <input id="id_connection" name="id_connection" class="input_connexion" type="text" placeholder="Identifiant"><br><br>
        <h2>Ton mot de passe ? <span style="font-size: 0.7em;">(promis je garde ça secret)</span></h2>
        <input id="password_connection" name="password_connection" class="input_connexion" type="password" placeholder="Mot de passe"><br>
        <div id="boutons">
            <input id="oubli_mdp" type="button" value="Pardon, j'ai oublié mon mot de passe">
            <input id="submit" type="submit" value="Se connecter">
<?php


require_once 'header.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //$id = $_POST['id_connection'];
//$password = $_POST['password_connection'];

    if ($_POST['id_connection'] == null | $_POST['password_connection'] == null) {
        echo "<p>veuillez renseigner tous les champs de connection<p>";
    } else {
        $dtb->set_Idpersonne($_POST['id_connection']);//'teste');
        //$_POST['id_connection']);
        $dtb->set_passwordpersonne($_POST['password_connection']); //'teste');

        $dtb->set_bddconnection($bdd);
        echo 'test';
        //$dtb->Montrer_Tables();
        $dtb->Login();

        //$bdd = new PDO("mysql:host=$host; dbname=$dbname", $dbuser, $dbpassword);
//$bdd->query("use test;");
//
//$test = $bdd->query("show tables;");
//
//
//foreach($test as $row) {
//    echo "<li>".$row['Tables_in_test']."<li>";
//}
    }
}


?>
</div>
</form>



</body>

<footer class="police_texte">&copy; Stage En Bref. <br> Tous droits réservés

</footer>

</html>

