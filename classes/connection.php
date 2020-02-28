<?php

class Connection{
    private $host = "localhost";
    private $user = "dimitry";
    private $pwd = "azerty";
    private $dbName = "becode";


    public function connect(){

        $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbName;
        $pdo = new PDO($dsn,$this->user,$this->pwd);


        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return$pdo;
    }

    public function setPost(){

    }
}
