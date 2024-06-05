<?php
$email=$_COOKIE['email'];
if(isset($email)){
    require('./feed.html');
}
else{
    
    $msg='Login Expirado';
    setcookie('msg', $msg, time()+600, '/');
    require('./auxPages/error.php');
}
?>