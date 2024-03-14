<!doctype html>
<h1>nous traitons vos données...</h1>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//$id = $_POST['id_connection'];
//$password = $_POST['password_connection'];



$dtb = new Connection();
$dtb->set_Idpersonne('teste');
    //$_POST['id_connection']);
$dtb->set_passwordpersonne('teste');//$_POST['password_connection']);
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
            echo "connection à la database réussie\n";
        } catch (PDOException $e) {
            echo "Erreur de connexion à la base de données : " . $e->getMessage();
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
            echo "l'utilisateur ". $row['Login'] . " existe\n";
            $this->testerpassword($row['Login']);
            return true;
            }
            else {}


    }
}
    function testerpassword($idquiexiste){
        $tables = $this->connection->query("select Password from Personne where Login='$idquiexiste'");
        foreach ($tables as $row) {
            if ($row["Password"]== $this->passwordpersonne){
            echo "le mot de passe correspond et est :". $row['Password'] . " \n";
            }}}
}
?>