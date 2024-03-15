<?php
class Connection{
    public $host;
    public $dbname;
    public $dbuser;
    public $dbpassword;
    public $connection;
    public $Idpersonne;
    public $passwordpersonne;

    function __construct()
    {
        $this->host = "localhost";
        $this->dbname = "test";
        $this->dbuser = "phpmyadmin";
        $this->dbpassword = "phpmyadmin";
    }

    function set_Idpersonne($id)
    {
        $this->Idpersonne = $id;

    }

    function set_passwordpersonne($password){
        $this->passwordpersonne = $password;
    }

    function stringconection()
    {
        try {
            $bdd = new PDO("mysql:host=$this->host; dbname=$this->dbname", $this->dbuser, $this->dbpassword);
            $bdd->query("use test;");
            $this->connection = $bdd;
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
    function Login(){
        //$this->connection->query();
        $login = $this->connection->prepare("select * from Personne where Login= :idquiexiste && Password = :password");
        $login->bindParam(':idquiexiste',$this->Idpersonne);
        $login->bindParam(':password',$this->passwordpersonne);
        $login-> execute();

       if ($login->rowCount()> 0){
            echo "<p>Connection réussie</p>";
            setcookie("connected",true);
       }
       else {
        echo "<p>mot de passe ou nom d'utilisateur incorrect</p>";
            setcookie("connected",false);
       }

       // if (empty($login)){echo "test";}
       // else{
       // echo "<p>mot de passe ou nom d'utilisateur incorrect</p>";
       // }
}
}