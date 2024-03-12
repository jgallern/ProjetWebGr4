<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdd_projetweb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Ensure POST data exists before using it
    if(isset($_POST['rating']) && isset($_POST['commentaire'])) {
        $note = $_POST['rating'];
        $commentaire = $_POST['commentaire'];

        // Use prepared statements for inserting data
        $stmt = $conn->prepare("INSERT INTO Notes (Note, Commentaire) VALUES (?, ?)");
        $stmt->execute([$note, $commentaire]);
        echo "Nouvel enregistrement créé avec succès";
    } else {
        echo "";
    }
} catch(PDOException $e) {
    echo "Connexion échouée: " . $e->getMessage();
}

// No need to explicitly close the connection in PDO
$conn = null;
?>
