<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdd_projetweb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_FILES['cv']) && isset($_FILES['motivation'])) {
        echo implode(',', $_FILES);
        $cvFile = $_FILES['cv'];
        $motivationFile = $_FILES['motivation'];
        $uploadDirectory = "uploads\\";

        $cvPath = $uploadDirectory . basename($cvFile['name']);
        $motivationPath = $uploadDirectory . basename($motivationFile['name']);
        $idEtudiant = 7;

        // Valider et déplacer les fichiers
        $cvUploadSuccess = move_uploaded_file($cvFile['tmp_name'], $cvPath);
        $motivationUploadSuccess = move_uploaded_file($motivationFile['tmp_name'], $motivationPath);

        if ($cvUploadSuccess && $motivationUploadSuccess) {
            // Préparer la requête SQL pour insérer les chemins des fichiers et l'ID de l'étudiant
            $stmt = $conn->prepare("INSERT INTO Candidature (CV, lettremotiv, ID_Etudiant) VALUES (?, ?,?)");
            $stmt->execute([$cvPath, $motivationPath, $idEtudiant]);

            echo "Fichiers téléchargés et enregistrés avec succès dans la base de données.";
        } else {
            echo "Erreur lors du téléchargement des fichiers.";
        }
    } else {
        echo "Erreur : Fichiers non fournis.";
    }
} catch(PDOException $e) {
    echo "Connexion échouée: " . $e->getMessage();
}

$conn = null;
?>
