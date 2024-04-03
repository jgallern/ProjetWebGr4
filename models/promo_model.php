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
    function get_ID()
    {
        try {
            setcookie('test', $this->name, time() + 3600,'/');
            $getid = $this->bddconnection->prepare("SELECT ID_Promotion FROM Promotion WHERE Nom_Promo = :nomprmo");
            $getid->bindParam(':nomprmo', $this->name);
            $getid->execute();

            $result = $getid->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                $this->id = $result['ID_Promotion'];
                setcookie('idprmo', $this->id, time() + 3600, "/");
                return $this->id;
            } else {
                setcookie('idprmo', "error", time() + 3600, "/");
                return "Aucun résultat trouvé";
            }
        } catch (PDOException $e) {
            
            setcookie('idprmo', "error".$e->getMessage() , time() + 3600, "/");
            return "erreur";
        }

    }

    function get_name()
    {
        return $this->name;
    }
}