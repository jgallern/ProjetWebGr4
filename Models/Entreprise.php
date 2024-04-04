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

    public function Rechercher_Entreprise($searchName, $searchSector, $searchVille, $searchNumeroRue, $searchNomRue) {
        // Prepare the base SQL query
        $sql = "SELECT e.*, a.Numero_rue, a.Nom_rue, a.Ville 
            FROM Entreprise e
            JOIN Adresse a ON e.ID_Adresse = a.ID_Adresse";

        // Initialize an array to hold the parameters for the prepared statement
        $params = [];

        // Initialize an array to hold conditions for the WHERE clause
        $conditions = [];

        // Add conditions based on provided search criteria
        if (!empty($searchName)) {
            $conditions[] = "e.nom LIKE ?";
            $params[] = "%$searchName%";
        }
        if (!empty($searchSector)) {
            $conditions[] = "e.secteur LIKE ?";
            $params[] = "%$searchSector%";
        }
        if (!empty($searchVille)) {
            $conditions[] = "a.Ville LIKE ?";
            $params[] = "%$searchVille%";
        }
        if (!empty($searchNumeroRue)) {
            $conditions[] = "a.Numero_rue = ?";
            $params[] = $searchNumeroRue;
        }
        if (!empty($searchNomRue)) {
            $conditions[] = "a.Nom_rue LIKE ?";
            $params[] = "%$searchNomRue%";
        }

        // If there are any conditions, append them to the query
        if (count($conditions) > 0) {
            $sql .= " WHERE " . implode(' AND ', $conditions);
        }

        try {
            // Prepare the SQL statement
            $stmt = $this->getBDD()->prepare($sql);

            // Execute the statement with the parameters
            $stmt->execute($params);

            // Fetch and return the results
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Handle the error appropriately
            error_log('Error in Rechercher_Entreprise: ' . $e->getMessage());
            return []; // Return an empty array to indicate failure
        }
    }



    public function fetchAllSecteurs() {
        try {
            $stmt = $this->getBDD()->query("SELECT ID_secteur, nom_secteur FROM secteuractivite");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Handle error appropriately
            return ["error" => "Erreur lors de la récupération des secteurs : " . $e->getMessage()];
        }
    }

    public function addSecteur($nomSecteur) {
        try {
            $stmt = $this->getBDD()->prepare("INSERT INTO secteuractivite (nom_secteur) VALUES (?)");
            $stmt->execute([$nomSecteur]);
            $secteurId = $this->getBDD()->lastInsertId();

            return [
                'success' => true,
                'message' => 'Sector added successfully.',
                'secteurId' => $secteurId
            ];
        } catch (PDOException $e) {
            return [
                'success' => false,
                'message' => "Error adding sector: " . $e->getMessage()
            ];
        }
    }
}
