<?php
include_once 'header.php';

$test = new Compte();

$test->set_bddconnection($bdd);
$test->Creer_compte();
//$test->Supprimer_compte();