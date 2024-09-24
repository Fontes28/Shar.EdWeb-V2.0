<?php


class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "users";
 
    // object properties
    public $id;
    public $name;
    public $email;
    public $password;
    public $created;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    //user signup method
    function signup(){
    
        if($this->isAlreadyExist()){
            return false;
        }
        // query to insert record of new user signup
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    email=:email, password=:password, name=:name, created=:created";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->password=htmlspecialchars(strip_tags($this->password));
        $this->created=htmlspecialchars(strip_tags($this->created));
    
        // bind values
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", $this->password);
        $stmt->bindParam(":name", $this->name);
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
                    `id`, `name`, `email`, `password`, `created`,`type`
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

    //Notify if User with given username Already exists during SignUp
    function isAlreadyExist(){
        $query = "SELECT *
            FROM
                " . $this->table_name . " 
            WHERE
                email='".$this->email."'";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return true;
        }
        else{
            return false;
        }
    }

    function selectUsers()
{
    $query = "SELECT * FROM " . $this->table_name . "";
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    $users = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $user = new User($this->conn);
        $user->id = $row['id'];
        $user->name = $row['name'];
        $user->email = $row['email'];
        $user->password = $row['password'];
        $user->created = $row['created'];
        $users[] = $user; 
    }
    return $users;
}

function deleteUser(){
    $query = "DELETE FROM " . $this->table_name . " WHERE id=:id";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(":id", $this->id);
    if($stmt->execute()){
        return true;
    }
    return false;
}
}