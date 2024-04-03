<?php
if (!isset($bdd)) {
    $host = "localhost";
    $dbname = "test";
    $dbuser = "phpmyadmin";
    $dbpassword = "phpmyadmin";


    try {
        $bdd = new PDO("mysql:host=$host; dbname=$dbname", $dbuser, $dbpassword);
    } catch (PDOException $e) {
        echo '<p>' . $e->getMessage() . '</p>';
        exit();
    }
}

class Personne{

    protected $nom;
    protected $prenom;
    protected $Login;
    protected $Password;
    protected $ID_Centre;
    protected $bddconnection;

    function __construct()
    {
    }

    function set_Login($id)
    {
        $this->Login = $id;

    }

    function set_bddconnection($bddconnection){
        $this->bddconnection = $bddconnection;
    }

    function set_Password($password)
    {
        $this->Password = hash('SHA256',$password);
    }

    function set_Nom($nom){
        $this->nom = $nom;
    }
    function set_Prenom($prenom){
        $this->prenom = $prenom;
    }
    function set_ID_Centre($ID_Centre){ 
        $this->ID_Centre = $ID_Centre;
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
        $login->bindParam(':idquiexiste', $this->Login);
        $login->bindParam(':password', $this->Password);
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
        $name->bindParam(':login', $this->Login);
        $name->execute();
        foreach ($name->fetchAll() as $row) {
            return $row['prenom'];
        }

    }

    function GetStatus(){
        $status = $this->bddconnection->prepare("SELECT 
        Per.*,
        CASE
            WHEN Etu.ID_Personne IS NOT NULL THEN 'Etudiant'
            WHEN Pil.ID_Personne IS NOT NULL THEN 'Pilote'
            WHEN Adm.ID_Personne IS NOT NULL THEN 'Administrateur'
            ELSE 'Non défini'
        END AS Type_de_personne
    FROM 
        Personne Per
    LEFT JOIN 
        Etudiant Etu ON Per.ID_Personne = Etu.ID_Personne
    LEFT JOIN 
        Pilote Pil ON Per.ID_Personne = Pil.ID_Personne
    LEFT JOIN 
        Administrateur Adm ON Per.ID_Personne = Adm.ID_Personne
    WHERE 
        Per.Login = :Login;");
        $status->bindParam(":Login", $this->Login);
        $status->execute();
        foreach ($status->fetchAll() as $row) {
            return $row["Type_de_personne"];
        }
    }
    function creer_personne(){
        $creation= $this->bddconnection->prepare("INSERT INTO personne (ID_Centre,Login,nom,Password,prenom)
        VALUES (:idcentre, :login , :nom , :motdepasse , :prenom)");
        
        $creation->bindParam(":login", $this->Login);
        $creation->bindParam(":idcentre", $this->ID_Centre);
        $creation->bindParam(":nom", $this->nom);
        $creation->bindParam(":motdepasse", $this->Password);
        $creation->bindParam(":prenom", $this->prenom);

    }
    function chercher_personne() {  
        try {
            $select= $this->bddconnection->prepare("Select * from Personne");
            $select->execute();
            $result = $select->fetchAll();
            return $result;
        }
        catch(PDOException $e) {


    }
}
}


class Etudiant extends Personne {
    private $ID_Promotion;

    function __construct(){}
    function set_ID_Promotion($id_Promotion) {
        $this->ID_Promotion=$id_Promotion;
    }
    function creer_personne(){
        try {
            $creation = $this->bddconnection->prepare("INSERT INTO Personne (ID_Centre,Login,nom,Password,prenom)
        VALUES (:idcentre, :login , :nom , :motdepasse , :prenom);
        SET @ID_pers = LAST_INSERT_ID();
        INSERT INTO Wishlist (ID_Offre) VALUES (null);
        SET @ID_wishlist = LAST_INSERT_ID();
        INSERT INTO Etudiant (photoprofil, ID_Wishlist, ID_Promotion, ID_Personne) values (:photoprofile, @ID_wishlist, :ID_Promo, @ID_pers)");

            $creation->bindParam(":login", $this->Login);
            $creation->bindParam(":idcentre", $this->ID_Centre);
            $creation->bindParam(":nom", $this->nom);
            $creation->bindParam(":motdepasse", $this->Password);
            $creation->bindParam(":prenom", $this->prenom);
            $creation->bindParam(":photoprofile", $this->prenom);
            $creation->bindParam(":ID_Promo", $this->ID_Promotion);
            $creation->execute();
            return "true";
        }
        catch(PDOException $e) {
            return "erreur".$e->getMessage();
        }
    }
    function chercher_personne()
    {
        try {
            $select = $this->bddconnection->prepare("Select * from Personne inner join Etudiant on Personne.ID_Personne=Etudiant.ID_Personne");
            $select->execute(); 
            $result = $select->fetchAll();
            return $result;
        } catch (PDOException $e) {

        }  
    }

}


class Pilote extends Personne {
    function creer_personne(){

    }
}