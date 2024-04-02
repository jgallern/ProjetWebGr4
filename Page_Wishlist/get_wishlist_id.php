<?php
session_start ();
require_once 'headerw.php';

$userId = $_SESSION['user_id'];

$query = $bdd->prepare("SELECT ID_Wishlist FROM Etudiant WHERE ID_Personne = ?");
$query->execute([$userId]);
$result = $query->fetch();

$idWishlist = $result ? $result['ID_Wishlist'] : null;
?>