<?php
if (!isset($bdd)) {
    $host = "localhost";
    $dbname = "test";
    $dbuser = "root";
    $dbpassword = "";


    try {
        $bdd = new PDO("mysql:host=$host; dbname=$dbname", $dbuser, $dbpassword);
    } catch (PDOException $e) {
        echo '<p>' . $e->getMessage() . '</p>';
        exit();
    }
}

$prs = new Personne();
class Personne{
    private $host;
    private $bddconnection;
    private $loginPersonne;
    private $passwordpersonne;

    function __construct()
    {
    }

    function set_loginPersonne($id)
    {
        $this->loginPersonne = $id;

    }

    function set_bddconnection($bddconnection){
        $this->bddconnection = $bddconnection;
    }

    function set_passwordpersonne($password)
    {
        $this->passwordpersonne = $password;
    }


    //    function Montrer_Tables(){
//        $tables = $this->connection->query("select * from Personne");
//        foreach($tables as $row) {
//            echo "<li>".$row['Login']."</li>";
//        }
//    }
    function Login()
    {
        //$this->connection->query();
        $login = $this->bddconnection->prepare("select * from Personne where Login= :idquiexiste && Password = :password");
        $login->bindParam(':idquiexiste', $this->loginPersonne);
        $login->bindParam(':password', hash('SHA256',$this->passwordpersonne ));
        $login->execute();

        if ($login->rowCount() > 0) {

            return true;
        } else {
            return false;
        }

         // if (empty($login)){echo "test";}
        // else{
        // echo "<p>mot de passe ou nom d'utilisateur incorrect</p>";
        // }
    }

    function GetName(){
        $name = $this->bddconnection->prepare('select prenom from Personne where Login = :login');
        $name->bindParam(':login', $this->loginPersonne);
        $name->execute();
        foreach ($name->fetchAll() as $row) {
            return $row['prenom'];
        }

    }

}
