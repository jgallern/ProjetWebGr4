<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Stage En Bref</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <link rel="icon" href="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png" type="image/png">


</head>
<body>
    <div id="bienvenue">
        <a href="page_accueil_ss_connexion.html"><img id="logo_connexion" alt="logo SEB" src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"></a>
        <h1 class="police_texte" id="titre_bienvenue">salut</h1>
    </div>

    <form id="fenetre_login" class="police_texte" method="post" action="">
        <h2>Qui es tu ?</h2>
        <input id="id_connection" name="id_connection" class="input_connexion" type="text" placeholder="Identifiant"><br><br>
        <h2>Ton mot de passe ? <span style="font-size: 0.7em;">(promis je garde ça secret)</span></h2>
        <input id="password_connection" name="password_connection" class="input_connexion" type="password" placeholder="Mot de passe"><br>
        <div id="boutons">
            <input id="oubli_mdp" type="button" value="Pardon, j'ai oublié mon mot de passe">
            <input id="submit" type="submit" value="Se connecter">
        </div>  
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

//$id = $_POST['id_connection'];
//$password = $_POST['password_connection'];

if ( $_POST['id_connection'] == null | $_POST['password_connection']==null){
    echo "<p>veuillez renseigner tous les champs de connection<p>";
}

else {
$dtb = new Connection();
$dtb->set_Idpersonne($_POST['id_connection']);//'teste');
    //$_POST['id_connection']);
$dtb->set_passwordpersonne($_POST['password_connection']); //'teste');

$dtb->stringconection();
//$dtb->Montrer_Tables();
$dtb->trouverUser();

//$bdd = new PDO("mysql:host=$host; dbname=$dbname", $dbuser, $dbpassword);
//$bdd->query("use test;");
//
//$test = $bdd->query("show tables;");
//
//
//foreach($test as $row) {
//    echo "<li>".$row['Tables_in_test']."<li>";
//}
}
}

class Connection{
    public $host="localhost";
    public $dbname = "test";
    public $dbuser = "phpmyadmin";
    public $dbpassword = "phpmyadmin";
    public $connection;
    public $Idpersonne;
    public $passwordpersonne;

    function set_Idpersonne($id){
        $this->Idpersonne = $id;
    }

    function set_passwordpersonne($password){
        $this->passwordpersonne = $password;
    }

    function stringconection(){
        try {
            $bdd = new PDO("mysql:host=$this->host; dbname=$this->dbname", $this->dbuser, $this->dbpassword);
            $bdd->query("use test;");
            $this->connection= $bdd;
            //echo "connection à la database réussie\n";
        } catch (PDOException $e) {
            //echo "Erreur de connexion à la base de données : " . $e->getMessage();
        }
        
    }
//    function Montrer_Tables(){
//        $tables = $this->connection->query("select * from Personne");
//        foreach($tables as $row) {
//            echo "<li>".$row['Login']."</li>";
//        }
//    }
    function trouverUser(){
        //$this->connection->query();
        $Personne = $this->connection->query("select Login from Personne");
        foreach ($Personne as $row) {
            if ($row["Login"]== $this->Idpersonne){
            //echo "<p>l'utilisateur ". $row['Login'] . " existe</p>";
            $this->testerpassword($row['Login']);
            return true;
            }
        }
        echo "<p>mot de passe ou nom d'utilisateur incorrect</p>";
}
    function testerpassword($idquiexiste){
        $tables = $this->connection->prepare("select Password from Personne where Login= :idquiexiste");
        $tables->bindParam(':idquiexiste',$idquiexiste);
        $tables->execute();
        foreach ($tables as $row) {
            if ($row["Password"]== $this->passwordpersonne){
            echo "<p>Connection réussie</p>";
            return true;
            }
        echo "<p>mot de passe ou nom d'utilisateur incorrect</p>";
        }}
}
?>

</body>

<footer class="police_texte">&copy; Stage En Bref. <br> Tous droits réservés</footer>

</html>

