<?php

class connect{
    public $server;
    public $user;
    public $password;
    public $dbName;

    public function __construct(){
        $this->server ="co28d739i4m2sb7j.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $this->user = "vg42pkqm9yn4o2lu";
        $this->password = "nmshjmn5myrl4pvl";
        $this->dbName = "x88i7mdt3wcoth32";
    }

    function connectToMySQL():mysqli{
        $conn_my = new mysqli($this->server,$this->user,$this->password,$this->dbName);
        if($conn_my->connect_error) {
            die("Fail!".$conn_my->connect_error);
        }
        else{

        }
        return $conn_my;
    }
    function connectToPDO():PDO{
        try{
            $conn_pdo = new PDO("mysql:host=$this->server;dbname=$this->dbName",$this->user,$this->password);
            $conn_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            die("Failed $e");
        }
        return $conn_pdo;
    }
}


?>
