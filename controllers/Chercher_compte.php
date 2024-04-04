<?php
if (isset($_POST["search-name"])) {
    $nom = $_POST["search-name"];
    //echo $nom;
}
if (isset($_POST["search-prenom"])) {
    $prenom = $_POST["search-prenom"];
    //echo $prenom;
}
if (isset($_POST["search-sector"])) {
    $secteur = "CESI ".$_POST["search-sector"];
    //echo $secteur;
}
if (isset($_POST["promo"])) {
    $promo = $_POST["promo"];
    //echo $promo;
}
if (isset($_POST["login"])) {
    $login = $_POST["login"];
}
if (isset($_POST["password"])) {
    $password = $_POST["password"];
}
else {
    echo "test";
}



//if (isset($_POST["search-name"])) {
//    $nom = $_POST["search-name"];
//}
//if (isset($_POST["search-prenom"])) {
//    $prenom = $_POST["search-prenom"];
//}
//if (isset($_POST["search-sector"])) {
//    $secteur = $_POST["search-sector"];
//}
//if (isset($_POST["promo"])) {
//    $promo = $_POST["promo"];
//}

require_once '../models/personne_model.php';
require_once '../models/promo_model.php';

$prs = new Etudiant();
$prmo = new Promo();

$prs->set_bddconnection($bdd);
$prmo->set_bddconnection($bdd);
$donnees = $prs->chercher_personne();


foreach ($donnees as $personne) {
    $nom = $personne['nom'];
    $prenom = $personne['prenom'];
    $prmo->set_id($personne['ID_Promotion']);
    $promo = $prmo->get_Name();

    // Affichage de l'image, du nom et de la promo
    echo "<div>";
    //echo "<img src='chemin/vers/image/{$nom}_{$prenom}.jpg' alt='Photo de {$prenom} {$nom}'><br>";
    echo "$nom ";
    echo "$prenom<br>";
    echo $promo."<br>";
    echo "</div>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
}

