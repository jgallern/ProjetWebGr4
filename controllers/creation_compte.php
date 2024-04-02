<?php

echo "ceci sera la page pour chercher un pilote";

if (isset($_POST["search-name"])) {
    $nom = $_POST["search-name"];
}
if (isset($_POST["search-prenom"])) {
    $prenom = $_POST["search-prenom"];
}
if (isset($_POST["search-sector"])) {
    $secteur = $_POST["search-sector"];
}
if (isset($_POST["promo"])) {
    $promo = $_POST["promo"];
}

echo $nom."".$prenom."".$secteur.$promo;