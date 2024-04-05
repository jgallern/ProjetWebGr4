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
    public function Creer_Entreprise($nom, $description, $secteur, $logoFile, $numeroRue, $nomRue, $ville) {
        // Ensure the upload directory exists
        if (!file_exists($this->uploadDirectory) && !mkdir($this->uploadDirectory, 0777, true) && !is_dir($this->uploadDirectory)) {
            throw new RuntimeException(sprintf('Directory "%s" was not created', $this->uploadDirectory));
        }

        $this->getBDD()->beginTransaction();

        try {
            $stmtAdresse = $this->getBDD()->prepare("INSERT INTO Adresse (Numero_rue, Nom_rue, Ville) VALUES (?, ?, ?)");
            $stmtAdresse->execute([$numeroRue, $nomRue, $ville]);
            $idAdresse = $this->getBDD()->lastInsertId();

            $logoPath = ""; // Default to an empty string if no file is uploaded

            // Check if a file was uploaded without errors
            if ($logoFile && $logoFile['error'] === UPLOAD_ERR_OK) {
                $logoPath = $this->getUniqueFilePath($logoFile['name']);
                if (!move_uploaded_file($logoFile['tmp_name'], $logoPath)) {
                    throw new RuntimeException("Failed to move the uploaded file.");
                }
            } elseif ($logoFile['error'] !== UPLOAD_ERR_NO_FILE) {
                // Handle file upload errors, except the case where no file is uploaded
                throw new RuntimeException("File upload error code: " . $logoFile['error']);
            }

            $stmtEntreprise = $this->getBDD()->prepare("INSERT INTO Entreprise (nom, description, secteur, logo, ID_Adresse) VALUES (?, ?, ?, ?, ?)");
            $stmtEntreprise->execute([$nom, $description, $secteur, $logoPath, $idAdresse]);

            $this->getBDD()->commit();
            return ["success" => true, "message" => "Entreprise created successfully."];
        } catch (Exception $e) {
            // Make sure to rollback if there was a problem
            $this->getBDD()->rollback();
            if (!empty($logoPath)) {
                // Attempt to delete the uploaded file if the operation fails
                @unlink($logoPath);
            }
            return ["success" => false, "message" => "Error creating enterprise: " . $e->getMessage()];
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

    public function Rechercher_Entreprise_Etudiant($searchName, $searchSector, $searchVille) {
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

    public function getEntrepriseDetailsById($entrepriseId) {
        // Prepare the SQL query to fetch entreprise details along with its address
        $sql = "SELECT e.ID_Entreprise, e.nom, e.description, e.secteur, e.logo, 
                   a.Numero_rue, a.Nom_rue, a.Ville 
            FROM Entreprise e
            JOIN Adresse a ON e.ID_Adresse = a.ID_Adresse
            WHERE e.ID_Entreprise = ?";

        try {
            // Prepare the SQL statement
            $stmt = $this->getBDD()->prepare($sql);

            // Execute the statement with the entreprise ID as parameter
            $stmt->execute([$entrepriseId]);

            // Fetch and return the single result
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Handle the error appropriately
            error_log('Error in getEntrepriseDetailsById: ' . $e->getMessage());
            return null; // Return null to indicate failure
        }
    }

    private $uploadDirectory = __DIR__ . "/../assets/Uploads/";


// Integrated unique file path generator
    private function getUniqueFilePath($filename) {
        $filePath = $this->uploadDirectory . basename($filename);
        $fileInfo = pathinfo($filePath);
        $fileExtension = $fileInfo['extension'] ?? '';
        $filenameWithoutExt = $fileInfo['filename'];
        $counter = 1;

        while (file_exists($filePath)) {
            $newFilename = $filenameWithoutExt . "_" . $counter . '.' . $fileExtension;
            $filePath = $this->uploadDirectory . $newFilename;
            $counter++;
        }

        return $filePath;
    }

// Updated method to handle entreprise update including logo upload
    public function updateEntreprise($entrepriseId, $nom, $description, $secteur, $numeroRue, $nomRue, $ville, $logoFile) {
        // Begin database transaction
        $this->getBDD()->beginTransaction();

        try {
            $logoPath = null; // Initialize logoPath as null

            // If a new logo file is uploaded successfully
            if ($logoFile['error'] === UPLOAD_ERR_OK) {
                $logoPath = $this->getUniqueFilePath($logoFile['name']);
                if (!move_uploaded_file($logoFile['tmp_name'], $logoPath)) {
                    throw new Exception("Failed to upload logo.");
                }
            }

            // Update Adresse
            $stmtAdresse = $this->getBDD()->prepare("UPDATE Adresse SET Numero_rue = ?, Nom_rue = ?, Ville = ? WHERE ID_Adresse = (SELECT ID_Adresse FROM Entreprise WHERE ID_Entreprise = ?)");
            $stmtAdresse->execute([$numeroRue, $nomRue, $ville, $entrepriseId]);

            // Prepare SQL for updating Entreprise. If a new logo was not uploaded, skip updating the logo column
            $sqlEntreprise = "UPDATE Entreprise SET nom = ?, description = ?, secteur = ?" . ($logoPath ? ", logo = ?" : "") . " WHERE ID_Entreprise = ?";
            $stmtEntreprise = $this->getBDD()->prepare($sqlEntreprise);
            $parameters = [$nom, $description, $secteur];
            if ($logoPath) {
                $parameters[] = $logoPath; // Include new logo path if present
            }
            $parameters[] = $entrepriseId;
            $stmtEntreprise->execute($parameters);

            $this->getBDD()->commit();
            return ["success" => true, "message" => "Entreprise updated successfully."];
        } catch (Exception $e) {
            $this->getBDD()->rollback();
            if (isset($logoPath)) {
                @unlink($logoPath); // Attempt to delete the uploaded file if the update fails
            }
            return ["success" => false, "message" => "Failed to update entreprise: " . $e->getMessage()];
        }
    }



}
