<?php

require_once 'Wishlist.php';
require_once 'Offre.php'; // Si vous avez besoin d'accéder directement aux informations des offres

class WishlistController {
    private $wishlistModel;
    private $offreModel;

    public function __construct() {
        $this->wishlistModel = new Wishlist();
        $this->offreModel = new Offre();
    }

    public function afficherWishlist() {
        $idEtudiant = $_SESSION['user_id']; // Assurez-vous que l'utilisateur est bien authentifié
        $wishlist = $this->wishlistModel->getWishlist($idEtudiant);
        
        // Convertir les ID des offres en informations détaillées sur les offres
        $offresDetails = array_map(function ($offre) {
            return $this->offreModel->getOffreDetails($offre['ID_Offre']);
        }, $wishlist);

        include 'views/wishlistView.php'; // Chemin vers votre fichier de vue
    }

    public function rechercherDansWishlist() {
        $idEtudiant = $_SESSION['user_id'];
        $critere = $_POST['recherche_wishlist'];
        
        // Supposons que vous avez une méthode dans votre modèle pour rechercher dans la wishlist
        $resultats = $this->wishlistModel->rechercherDansWishlist($idEtudiant, $critere);
        
        include 'views/wishlistSearchResultsView.php'; // Vue pour afficher les résultats de la recherche
    }

    public function supprimerDeWishlist() {
        $idEtudiant = $_SESSION['user_id'];
        $idWishlist = $_POST['idWishlist']; // Assurez-vous de passer correctement l'ID de l'offre
        
        $this->wishlistModel->supprimerDeWishlist($idWishlist, $idEtudiant);
        
        // Redirection vers la wishlist après la suppression
        header('Location: wishlist.php?action=afficherWishlist');
    }
    
}
