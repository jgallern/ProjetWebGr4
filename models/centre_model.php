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

Class Centre{
    public $Nom;
    public $ID;
    public $ID_Pilote;
    public $bddconnection;

    function __construct($bdd){
        $this->bddconnection = $bdd;
    }
    function set_bddconnection($bddconnection) {
        $this->bddconnection = $bddconnection;
    }

    function set_Nom($Nom) {
        $this->Nom = $Nom;
    }
    function get_ID() {
        try {
            $getid = $this->bddconnection->prepare("SELECT ID_Centre FROM Centre WHERE Nom_centre = :nomcntr");
            $getid->bindParam(':nomcntr', $this->Nom);
            $getid->execute();

            $result = $getid->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                $this->ID = $result['ID_Centre'];
                return $this->ID;
            } else {
                return "Aucun résultat trouvé";
            }
        } catch (PDOException $e) {
            
            return "erreur";
        }
    }
}