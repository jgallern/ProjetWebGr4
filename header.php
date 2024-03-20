<?php
$host = "localhost";
$dbname = "test";
$dbuser = "phpmyadmin";
$dbpassword = "phpmyadmin";

try {
$bdd = new PDO("mysql:host=$host; dbname=$dbname", $dbuser, $dbpassword);
}
catch (PDOException $e) {
    echo '<p>'.$e->getMessage().'</p>';
    exit();
}

$dtb = new Connection();
class Connection{
    private $host;
    private $bddconnection;
    private $Idpersonne;
    private $passwordpersonne;

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
        $login->bindParam(':idquiexiste', $this->Idpersonne);
        $login->bindParam(':password', $this->passwordpersonne);
        $login->execute();

        if ($login->rowCount() > 0) {
            echo "<p>Connection réussie</p>";
            setcookie("connected", true);
            setcookie("name", $this->Idpersonne);
            header("Location: page_accueil_ss_connexion.php");
        } else {
            echo "<p>mot de passe ou nom d'utilisateur incorrect</p>";
            setcookie("connected", false);
        }

        // if (empty($login)){echo "test";}
        // else{
        // echo "<p>mot de passe ou nom d'utilisateur incorrect</p>";
        // }
    }
    function disconnect()
    {
        setcookie("connected", false);
        header("Location: page_accueil_ss_connexion.php");
    }
}

class Compte{
    private $idpersonne;
    private $nom;
    private $prenom;
    private $centre;
    private $login;
    private $password;
    private $statut;
    private $id_wishlist;
    private $photoprofile;
    private $promotion;
    private $bddconnection; 

    function __construct(){}
    
    function set_bddconnection($bddconnection){
        $this->bddconnection = $bddconnection;
    }
    function set_nom($nom){
        $this->nom = $nom;
    }

    function set_prenom($prenom){
        $this->prenom = $prenom;
    }

    function set_centre($centre){
        $this->centre = $centre;
    }

    function set_login($login){
        $this->login = $login;
    }

    function set_Password($password){
        $this->password = $password;
    }

    function set_statut($statut){
        $this->statut = $statut;
    }

    function set_promotion($promotion){
        $this->promotion = $promotion;
    }



    function Creer_compte()
    {
        $this->statut = "etudiant";
        if (isset ($this->statut)) {
            if ($this->statut == "etudiant") {
                $create = $this->bddconnection->prepare("
                    INSERT INTO Personne (nom, prenom, centre, Login, Password) 
                    VALUES (:nom, :prenom, :centre, :login, :password); 
                    -- Récupérer l'ID de la personne nouvellement insérée \
                    SET @id_personne = LAST_INSERT_ID(); 
                    -- Insérer une nouvelle wishlist \
                    INSERT INTO Wishlist (ID_wishlist) VALUES (NULL); 
                    -- Récupérer l'ID de la wishlist nouvellement insérée \
                    SET @ID_Wishlist = LAST_INSERT_ID(); 
                    SELECT ID_Promotion INTO @ID_Promotion from Promotion INNER JOIN Pilote ON Promotion.ID_Pilote = Pilote.ID_Pilote where Promotion.Nom_Promo = 'A2'; 
                    -- Insérer l'étudiant correspondant dans la table Etudiant
                    INSERT INTO Etudiant (ID_Personne, ID_Wishlist, ID_Promotion) 
                    VALUES (@id_personne, @ID_Wishlist, @ID_Promotion);");
                   }

            if ($this->statut == "pilote") {
                $create = $this->bddconnection->prepare("
                INSERT INTO Personne (nom, prenom, centre, Login, Password) 
                VALUES (:nom, :prenom, :centre, :login, :password); 
                SET @id_personne = LAST_INSERT_ID(); 
                INSERT INTO Pilote (ID_Personne) Values (@id_personne);
                ");
            }
            try {
                $create->execute();
                //echo "création du compte réussie\n";
                $id = $this->bddconnection->prepare("SELECT LAST_INSERT_ID() AS Nv_ID;");
                $id->execute();

                foreach ($id as $row) {
                    $this->idpersonne = $row['Nv_ID'];
                }
                
            } catch (PDOException $e) {
                echo "" . $e->getMessage() . "";
            }
        }
    }
    function Supprimer_compte()
    {
        try {
            // Début d'une transaction
            $this->bddconnection->beginTransaction();

            // Suppression des données liées dans la table Etudiant
            $delete_etudiant_query = $this->bddconnection->prepare("DELETE FROM Etudiant WHERE ID_Personne = :id");
            $delete_etudiant_query->bindParam(':id', $this->idpersonne, PDO::PARAM_INT);
            $delete_etudiant_query->execute();

            // Suppression des données liées dans la table Wishlist
           // $delete_wishlist_query = $this->bddconnection->prepare("DELETE FROM Wishlist WHERE ID_Personne = :id");
           // $delete_wishlist_query->bindParam(':id', $this->idpersonne, PDO::PARAM_INT);
           // $delete_wishlist_query->execute();

            // Suppression du compte dans la table Personne
            $delete_personne_query = $this->bddconnection->prepare("DELETE FROM Personne WHERE ID_Personne = :id");
            $delete_personne_query->bindParam(':id', $this->idpersonne, PDO::PARAM_INT);
            $delete_personne_query->execute();

            // Validation de la transaction
            $this->bddconnection->commit();

            echo "Le compte et les données associées ont été supprimés avec succès.\n";
        } catch (PDOException $e) {
            // En cas d'erreur, annuler la transaction
            $this->bddconnection->rollBack();
            echo "Erreur lors de la suppression du compte : " . $e->getMessage();
        }
    }
}


