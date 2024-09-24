<?php
include_once '../config/db.php';
include_once '../objects/User.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

$id = isset($_GET['id']) ? $_GET['id'] : die('ID não encontrado.');

$user->id = $id;

if($user->deleteUser()){
    echo "Usuário Deletado com Sucesso.";
    exit;
} else {
    echo "Falha ao Deletar.";
}
?>