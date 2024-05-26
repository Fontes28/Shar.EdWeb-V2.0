<?php

class Database{
 
    // specify your own database credentials
    private $host = "143.106.241.3:3306";            //Server
    private $db_name = "cl202236";       //Database Name
    private $username = "cl202236";             //UserName of Phpmyadmin
    private $password = "DDTL/2508";                 //Password associated with username
    public $conn;
 
    
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>