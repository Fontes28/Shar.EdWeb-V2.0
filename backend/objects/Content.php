<?php
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "contents";
 
    // object properties
    public $id;
    public $userId;
    public $title;
    public $description;
    public $post;
    public $subjectId;
    public $themeId;
    public $created;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    //user post method
    function post(){
    
        /*if($this->isAlreadyExist()){
            return false;
        }*/
        // query to insert record of new user post
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    userId=:userId, post=:post, title=:title, description=:description, subjectId=:subjectId, themeId=:themeId, created=:created";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        
        $this->title=htmlspecialchars(strip_tags($this->title));
        $this->description=htmlspecialchars(strip_tags($this->description));
        $this->created=htmlspecialchars(strip_tags($this->created));
    
        // bind values
        $stmt->bindParam(":userId", $this->userId);
        $stmt->bindParam(":post", $this->post);
        $stmt->bindParam(":subjectId", $this->subjectId);
        $stmt->bindParam(":themeId", $this->themeId);
        $stmt->bindParam(":title", $this->title);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":created", $this->created);
    
        // execute query
        if($stmt->execute()){
            $this->id = $this->conn->lastInsertId();
            return true;
        }
    
        return false;
        
    }

    // login user method
    function login(){
        // select all query with user inputed username and password
        $query = "SELECT
                    `id`, `name`, `email`, `password`, `created`
                FROM
                    " . $this->table_name . " 
                WHERE
                    email='".$this->email."' AND password='".$this->password."'";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
    }

    function load(){
        // select all query with user inputed username and password
        $query = "SELECT
                    `id`, `name`, `areaId`
                FROM
                    'subject' 
                WHERE
                    'inactive' = 0";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
    }

    
}