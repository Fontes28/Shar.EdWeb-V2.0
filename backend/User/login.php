<?php
// include database and object files
include_once '../config/db.php';
include_once '../objects/User.php';
 

// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$user = new User($db);

// set ID property of user to be edited
$user->email = isset($_POST['email']) ? $_POST['email'] : die();
$user->password = base64_encode(isset($_POST['password']) ? $_POST['password'] : die());  

// read the details of user to be edited
$stmt = $user->login();
if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // create array
    $user_arr=array(
        "status" => true,
        "message" => "Successfully Login!",
        "id" => $row['id'],
        "email" => $row['email']
        
    );
    setcookie('name',$row['name'],time()+3600,'/');
    setcookie('email',$row['email'],time()+ 3600,'/');
    setcookie('type',$row['type'],time()+ 3600,'/');
    header('Location: ../../frontend/pages/feed.php');
}
else{
    $user_arr=array(
        "status" => false,
        "message" => "Email ou Senha Incorretos",
    );
    setcookie('msg',$user_arr['message'],time()+600,'/');
    header('Location: ../../frontend/pages/login.php');
}
// make it json format
print_r(json_encode($user_arr));
?>