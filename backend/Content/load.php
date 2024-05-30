<?php
// include database and object files
include_once '../config/db.php';
include_once '../objects/Content.php';
 

// get database connection
$database = new Database();
$db = $database->getConnection();


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
    header('Location: ../../frontend/pages/feed.php');
}
else{
    $user_arr=array(
        "status" => false,
        "message" => "Invalid Username or Password!",
    );
    setcookie('msg',$user_arr['message'],time()+600,'/');
    header('Location: ../../frontend/pages/auxPages/error.php');
}
// make it json format
print_r(json_encode($user_arr));
?>