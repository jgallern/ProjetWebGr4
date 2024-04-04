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



Class Promo{

    public $id;
    public $name;
    public $bddconnection;

    function set_bddconnection($bdd)
    {
        $this->bddconnection = $bdd;
    }
    function set_name($name) {
        $this->name = 'A5 BTP';
    }
    function set_id($id) {
        $this->id = $id;    
    }
    function get_ID()
    {
        try {
            $getid = $this->bddconnection->prepare("SELECT ID_Promotion FROM Promotion WHERE Nom_Promo = :nomprmo");
            $getid->bindParam(':nomprmo', $this->name);
            $getid->execute();

            $result = $getid->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                $this->id = $result['ID_Promotion'];
                return $this->id;
            } else {
                return "Aucun résultat trouvé";
            }
        } catch (PDOException $e) {
            
            return "erreur";
        }

    }

    function get_Name()
    {
        try {
            $getnom = $this->bddconnection->prepare("SELECT Nom_Promo FROM Promotion WHERE ID_Promotion = :idprmo");
            $getnom->bindParam(':idprmo', $this->id);
            $getnom->execute();

            $result = $getnom->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                $this->name = $result['Nom_Promo'];
                return $result['Nom_Promo'];
            } else {
                return "Aucun résultat trouvé";
            }
        } catch (PDOException $e) {

            return "erreur";
        }
    }
}