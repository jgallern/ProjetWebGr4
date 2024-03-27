<?php

include_once "../models/header.php";

if(isset($dtb)){
    $dtb->disconnect();
}

header("Location: page_accueil_ss_connexion.php");
exit;