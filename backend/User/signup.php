<?php
 
// get database connection
include_once '../config/db.php';
 
// instantiate user object
include_once '../objects/user.php';
 
$database = new Database();
$db = $database->getConnection();
 
$user = new User($db);
 
// set user property values
$user->email = $_POST['email'];
$user->name = $_POST['name'];
$user->password = base64_encode($_POST['password']);
$user->created = date('Y-m-d H:i:s');
 
// create the user
if($user->signup()){
    $user_arr=array(
        "status" => true,
        "message" => "Successfully Signup!",
        "id" => $user->id,
        "email" => $user->email
    );
    header('Location: ../../frontend/pages/login.html');
    unset($_POST);
}
else{
    $user_arr=array(
        "status" => false,
        "message" => "Email já está cadastrado no sistema"
    );
}
print_r(json_encode($user_arr));
?>