<?php
$host = "localhost";
$dbname = "test";
$dbuser = "phpmyadmin";
$dbpassword = "phpmyadmin";

$bdd = new PDO("mysql:host=$host; dbname=$dbname", $dbuser, $dbpassword);

class Connection{
    public $host;
    public $bddconnection;
    public $Idpersonne;
    public $passwordpersonne;

    function __construct()
    {
    }

    function set_Idpersonne($id)
    {
        $this->Idpersonne = $id;

    }

    function set_bddconnection($bddconnection){
        $this->bddconnection = $bddconnection;
    }

    function set_passwordpersonne($password){
        $this->passwordpersonne = $password;
    }


//    function Montrer_Tables(){
//        $tables = $this->connection->query("select * from Personne");
//        foreach($tables as $row) {
//            echo "<li>".$row['Login']."</li>";
//        }
//    }
    function Login(){
        //$this->connection->query();
        $login = $this->bddconnection->prepare("select * from Personne where Login= :idquiexiste && Password = :password");
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