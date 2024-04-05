<?php
if (!isset($bdd)) {
    $host = "localhost";
    $dbname = "test";
    $dbuser = "root";
    $dbpassword = "";


    try {
        $bdd = new PDO("mysql:host=$host; dbname=$dbname", $dbuser, $dbpassword);
    } catch (PDOException $e) {
        echo '<p>' . $e->getMessage() . '</p>';
        exit();
    }
}

class Wishlist {
    // Attributs correspondant aux colonnes de la table wishlist
    private $idOffre;
    private $idWishlist;

    // Constructeur
    public function __construct($idOffre, $idWishlist) {
        $this->idOffre = $idOffre;
        $this->idWishlist = $idWishlist;
    }

    // Méthodes pour accéder et modifier les attributs
    public function getIdOffre() {
        return $this->idOffre;
    }

    public function setIdOffre($idOffre) {
        $this->idOffre = $idOffre;
    }

    public function getIdWishlist() {
        return $this->idWishlist;
    }

    public function setIdWishlist($idWishlist) {
        $this->idWishlist = $idWishlist;
    }

    // Méthode pour enregistrer la wishlist dans la base de données
    public function add_offre($id_offre) {
        $bdd->prepare("UPDATE wishlist SET ID_Offre = :numero WHERE wishlist.ID_Wishlist = :idwishlist");

    }

    // Méthode pour supprimer une entrée de wishlist de la base de données
    public function delete_offre() {
        // Code pour supprimer la wishlist de la base de données
        // (Utilisez votre logique de suppression des données ici)
    }

    // Méthode pour récupérer toutes les offres dans la wishlist
    public static function getWishlistByUserId($userId) {
        // Code pour récupérer toutes les offres dans la wishlist pour un utilisateur donné
        // (Utilisez votre logique de récupération des données ici)
    }
}