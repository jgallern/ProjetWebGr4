<?php


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

$prs = new Etudiant();

$prs->set_bddconnection($bdd);
$donnees = $prs->chercher_personne();

$prmo = new Promo();

foreach ($donnees as $personne) {
    $nom = $personne['nom'];
    $prenom = $personne['prenom'];
    $promo = $prmo->get_name($personne['ID_Promotion']);

    // Affichage de l'image, du nom et de la promo
    echo "<div>";
    //echo "<img src='chemin/vers/image/{$nom}_{$prenom}.jpg' alt='Photo de {$prenom} {$nom}'><br>";
    echo "$nom ";
    echo "$prenom<br>";
    echo "Promo:".$promo."<br>";
    echo "</div>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
}

