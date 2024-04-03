<?php


setcookie("connected", false,time()+3600, "/");
setcookie("prenom", false ,time()+3600, "/");

header("Location: ../views/page_accueil_ss_connexion.php");
exit;