<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo "Connexion échouée: " . $e->getMessage();
}


class Wishlist {
    private $bddconnection;

    public function set_connection($bddconnection) {
        $this->bddconnection = $bddconnection;
    }

    public function fetchWishlistOffers($idWishlist) {
        try {
            $stmt = $this->bddconnection->prepare("SELECT o.* FROM Offre o INNER JOIN contenir c ON o.ID_Offre = c.ID_Offre WHERE c.ID_Wishlist = ?");
            $stmt->execute([$idWishlist]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo"Erreur lors de la récupération des offres: ". $e->getMessage();
            return [];
        }
    }
    
    public function removeOfferFromWishlist($idWishlist, $idOffre) {
        try {
            $stmt = $this->bddconnection->prepare("DELETE FROM contenir WHERE ID_Offre = ? AND ID_Wishlist = ?");
            $stmt->execute([$idOffre, $idWishlist]);
            return $stmt->rowCount() > 0;
        } catch (PDOException $e) {
            echo "Erreur lors de la suppression de l'offre: ". $e->getMessage();
            return false;
        }
    }
}    
?>