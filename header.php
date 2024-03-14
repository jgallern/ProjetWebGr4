<?php
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