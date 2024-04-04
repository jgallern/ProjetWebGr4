<?php

require_once 'Model.php';

class Wishlist extends Model {

public function ajouterAWishlist($idOffre, $idEtudiant) {
    $sql = "INSERT INTO Wishlist (ID_Offre, ID_Etudiant) VALUES (?, ?)";
    $stmt = $this->getBDD()->prepare($sql);
    $stmt->execute([$idOffre, $idEtudiant]);
}

public function getWishlist($idEtudiant) {
    $sql = "SELECT Offre.* FROM Offre JOIN Wishlist ON Offre.ID_Offre = Wishlist.ID_Offre WHERE Wishlist.ID_Etudiant = ?";
    $stmt = $this->getBDD()->prepare($sql);
    $stmt->execute([$idEtudiant]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

public function supprimerDeWishlist($idWishlist, $idEtudiant) {
    $sql = "DELETE FROM Wishlist WHERE ID_Wishlist = ? AND ID_Etudiant = ?";
    $stmt = $this->getBDD()->prepare($sql);
    $stmt->execute([$idWishlist, $idEtudiant]);
}
}
?>