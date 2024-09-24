<?php
// include database and object files
include_once '../config/db.php';
include_once '../objects/User.php';


// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare user object
$user = new User($db);

$lista = $user->selectUsers();

// make it json format
$json_lista = json_encode($lista);
setcookie("lista", $json_lista, time()+3600, "/")

?>