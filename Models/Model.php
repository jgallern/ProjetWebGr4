<?php

abstract class Model
{

    private static $_bdd;

    public function __construct()
    {
    }

    private static function setBDD()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bdd_projetweb";

        self::$_bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    //Recupere la connexion a la BDD
    protected function getBDD()
    {
        if (self::$_bdd == null)
            self::setBDD();
        return self::$_bdd;
    }

    protected function getAll($table, $obj)
    {
        $var = [];
        $req = $this->getBDD()->prepare('SELECT * FROM'. $table. 'ORDER BY id desc');
        $req->execute();
        while ($data = $req-> fetch(PDO::FETCH_ASSOC)){
            $var[] = new $obj($data);
        }
        $req->closeCursor();
        return $var;

    }
}
