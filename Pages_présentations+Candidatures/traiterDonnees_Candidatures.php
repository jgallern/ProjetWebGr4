<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdd_projetweb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_FILES['cv']) && isset($_FILES['motivation'])) {
        $cvFile = $_FILES['cv'];
        $motivationFile = $_FILES['motivation'];
        $uploadDirectory = "uploads\\"; // Assurez-vous que ce répertoire existe et a les permissions adéquates

        // Fonction pour générer un nouveau chemin de fichier si le fichier existe déjà
        function getUniqueFilePath($uploadDirectory, $filename) {
            $filePath = $uploadDirectory . basename($filename);
            $fileInfo = pathinfo($filePath);
            $fileExtension = $fileInfo['extension'];
            $filenameWithoutExt = $fileInfo['filename'];
            $counter = 1; // Compteur pour ajouter un suffixe au fichier si nécessaire

            // Boucle jusqu'à ce qu'un nom de fichier unique soit trouvé
            while (file_exists($filePath)) {
                $newFilename = $filenameWithoutExt . "_" . $counter . '.' . $fileExtension;
                $filePath = $uploadDirectory . $newFilename;
                $counter++;
            }

            return $filePath;
        }

        // Générer des chemins de fichiers uniques
        $cvPath = getUniqueFilePath($uploadDirectory, $cvFile['name']);
        $motivationPath = getUniqueFilePath($uploadDirectory, $motivationFile['name']);
        $idEtudiant = 7; // Supposons que cet ID est dynamiquement déterminé ou récupéré d'une autre manière

        // Déplacer les fichiers téléchargés vers leur emplacement final
        $cvUploadSuccess = move_uploaded_file($cvFile['tmp_name'], $cvPath);
        $motivationUploadSuccess = move_uploaded_file($motivationFile['tmp_name'], $motivationPath);

        if ($cvUploadSuccess && $motivationUploadSuccess) {

            $stmt = $conn->prepare("INSERT INTO Candidature (CV, lettremotiv, ID_Etudiant) VALUES (?, ?, ?)");
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
