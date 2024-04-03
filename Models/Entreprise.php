<?php

require_once 'Model.php';

class Entreprise extends Model
{
    // Evaluate an enterprise with a rating and a comment
    public function Evaluer_Entreprise($rating, $comment)
    {
        if (empty($rating) || empty($comment)) {
            return ["success" => false, "message" => "Note ou commentaire non fourni."];
        }

        try {
            $stmt = $this->getBDD()->prepare("INSERT INTO Notes (Note, Commentaire) VALUES (?, ?)");
            $stmt->execute([$rating, $comment]);
            setcookie("caca", 'Ca marche', time()+3600, "/");
            return ["success" => true, "message" => "Nouvel enregistrement créé avec succès"];
        } catch (PDOException $e) {
            setcookie("caca", "AN error : ". $e->getMessage(), time()+3600, "/");

            // Log the error or handle it as needed
            return ["success" => false, "message" => "Erreur lors de l'ajout de la note: " . $e->getMessage()];
        }
    }

    // Create a new enterprise with detailed information
    public function Creer_Entreprise($nom, $description, $secteur, $logoPath, $numeroRue, $nomRue, $ville)
    {
        try {
            $stmtAdresse = $this->getBDD()->prepare("INSERT INTO Adresse (Numero_rue, Nom_rue, Ville) VALUES (?, ?, ?)");
            $stmtAdresse->execute([$numeroRue, $nomRue, $ville]);
            $idAdresse = $this->getBDD()->lastInsertId();

            $stmtEntreprise = $this->getBDD()->prepare("INSERT INTO Entreprise (nom, description, secteur, logo, ID_Adresse) VALUES (?, ?, ?, ?, ?)");
            $stmtEntreprise->execute([$nom, $description, $secteur, $logoPath, $idAdresse]);

            return ["success" => true, "message" => "Entreprise créée avec succès."];
        } catch (PDOException $e) {
            return ["success" => false, "message" => "Erreur lors de la création de l'entreprise: " . $e->getMessage()];
        }
    }

    // Search for enterprises based on multiple criteria
    public function Rechercher_Entreprise($name = null, $sector = null, $ville = null, $numeroRue = null, $nomRue = null)
    {
        $query = "SELECT Entreprise.* FROM Entreprise 
              JOIN Adresse ON Entreprise.ID_Adresse = Adresse.ID_Adresse 
              WHERE 1=1";
        $params = [];

        // Dynamically building the query based on provided parameters
        if ($name) $query .= " AND Entreprise.Nom LIKE ?" and $params[] = "%" . $name . "%";
        if ($sector) $query .= " AND Entreprise.Sector = ?" and $params[] = $sector;
        if ($ville) $query .= " AND Adresse.Ville LIKE ?" and $params[] = "%" . $ville . "%";
        if ($numeroRue) $query .= " AND Adresse.Numero_Rue = ?" and $params[] = $numeroRue;
        if ($nomRue) $query .= " AND Adresse.Nom_Rue LIKE ?" and $params[] = "%" . $nomRue . "%";

        $stmt = $this->getBDD()->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Fetch a random selection of enterprises
    public function FetchRandomEntreprises()
    {
        try {
            $stmt = $this->getBDD()->query("SELECT * FROM Entreprise ORDER BY RAND() LIMIT 5");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Log the error or handle as needed
            return ["success" => false, "message" => "Erreur lors de la récupération des entreprises: " . $e->getMessage()];
        }
    }
}
