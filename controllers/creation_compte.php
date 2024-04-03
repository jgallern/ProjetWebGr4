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
    $secteur = $_POST["search-sector"];
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


require_once '../models/personne_model.php';
require_once '../models/promo_model.php';

$prs = new Etudiant();
$prmo = new Promo();
$prmo->set_bddconnection($bdd);
$prs->set_bddconnection($bdd);
$prs->set_Nom($nom);
$prs->set_Prenom($prenom);
$prs->set_ID_Centre($secteur);
$prmo->set_name($promo);
echo "<p>".$prmo->get_name()."<p>";
echo "<p>".$prmo->get_ID()."<p>";
$prs->set_ID_Promotion($prmo->get_ID());
$prs->set_Login($login);
$prs->set_Password($password);

$creation = $prs->creer_personne();

if ($creation == true) {
    echo "création réussie";
} else {
    echo "test".$creation;
}