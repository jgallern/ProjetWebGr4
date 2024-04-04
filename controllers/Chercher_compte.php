<?php

require_once '../models/personne_model.php';
require_once '../models/promo_model.php';
require_once '../models/centre_model.php';

$prs = new Etudiant($bdd);
$prmo = new Promo($bdd);
$cntr = new Centre($bdd);


if (isset($_POST["search-name"])) {
    $nom = $_POST["search-name"];
    $prs->set_Nom($nom);
    //echo $nom;
}
if (isset($_POST["search-prenom"])) {
    $prenom = $_POST["search-prenom"];
    $prs->set_Prenom($prenom);
    //echo $prenom;
}
if (isset($_POST["search-sector"])) {
    $secteur = "CESI ".$_POST["search-sector"];
    $cntr->set_Nom($secteur);
    //$prs->set_ID_Centre($cnt->get_ID());
    //echo $secteur;
}
if (isset($_POST["promo"])) {
    $promo = $_POST["promo"];
    //echo $promo;
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

