<?php

class connect{
    public $server;
    public $user;
    public $password;
    public $dbName;

    public function __construct(){
        $this->server ="frwahxxknm9kwy6c.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $this->user = "y6q5ervonoiaycha";
        $this->password = "m5uvrhzq0gqhr6a8";
        $this->dbName = "n4fj4jroy4j14r47";
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
