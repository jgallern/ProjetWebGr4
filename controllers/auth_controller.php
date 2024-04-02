<?php

require_once '../models/personne_model.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //$id = $_POST['id_connection'];
//$password = $_POST['password_connection'];

    if ($_POST['id_connection'] == null | $_POST['password_connection'] == null) {
            header("Location: ../views/auth/login.php?login=missingfields");
    } else {
        $prs->set_Login($_POST['id_connection']);//'teste');
        //$_POST['id_connection']);
        $prs->set_Password($_POST['password_connection']); //'teste');

        $prs->set_bddconnection($bdd);

        $name = $prs->GetName();
        $statut = $prs->GetStatus();
        //$dtb->Montrer_Tables();
        if ($prs->Login() == true) {
            setcookie("connected", true,time()+3600, "/");
            setcookie("prenom", $name ,time()+ 3600 ,"/");
            setcookie("statut", $statut ,time()+ 3600 ,"/");
            if ($statut == "Étudiant") {
                header("Location: ../views/page_accueil_etudiant");
            }
            else if ($statut == "Pilote") {
                header("Location: ../views/page_accueil_pilote.php");
            }
            else if ($statut == "Administrateur") {
                header("Location: ../views/page_accueil_admin.php");
            }
            else if ($statut == "Non défini") {
                header("Location: ../views/page_accueil_ss_connexion.php");
            }

        } else {
            setcookie("connected", false);
            header("Location: ../views/auth/login.php?login=false");

        }
    }
}