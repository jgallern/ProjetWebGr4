<?php

require_once '../models/connect_model.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //$id = $_POST['id_connection'];
//$password = $_POST['password_connection'];

    if ($_POST['id_connection'] == null | $_POST['password_connection'] == null) {
            header("Location: ../views/auth/login.php?login=missingfields");
    } else {
        $dtb->set_Idpersonne($_POST['id_connection']);//'teste');
        //$_POST['id_connection']);
        $dtb->set_passwordpersonne($_POST['password_connection']); //'teste');

        $dtb->set_bddconnection($bdd);
        //$dtb->Montrer_Tables();
        if ($dtb->Login() == true) {
            setcookie("connected", true);
            header("Location: ../views/page_accueil_ss_connexion.php");
        } else {
            setcookie("connected", false);
            header("Location: ../views/auth/login.php?login=false");

        }
    }
}