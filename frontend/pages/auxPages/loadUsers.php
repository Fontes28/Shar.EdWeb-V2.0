<?php
include_once '../../../backend/config/db.php';
include_once '../../../backend/objects/User.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

$lista = $user->selectUsers();


if ($lista) {
    $json_lista = json_encode($lista);
    $lista = json_decode($json_lista, true);

    if ($lista !== null) {
        $user_list_html = "<h1>Lista de Usuários</h1>";
        $user_list_html .= "<ul class='user-list'>";
        foreach ($lista as $user) {
            $user_list_html .= "<li class='user-item'>";
            $user_list_html .= "<strong>ID:</strong> " . htmlspecialchars($user['id']) . "<br>";
            $user_list_html .= "<strong>Nome:</strong> " . htmlspecialchars($user['name']) . "<br>";
            $user_list_html .= "<strong>Email:</strong> " . htmlspecialchars($user['email']);
            $user_list_html .= "</li>";
        }
        $user_list_html .= "</ul>";

        $user_list_html .= "<form action='../../../backend/User/delete.php' method='get'>";
        $user_list_html .= "<label for='id' style='font-weight: bold; margin-right: 10px;'>Selecione o ID para deletar:</label>";
        $user_list_html .= "<select id='id' name='id' style='padding: 5px; border: 1px solid #ccc; border-radius: 5px;'>";
        foreach ($lista as $user) {
            $user_list_html .= "<option value='" . $user['id'] . "'>" . $user['id'] . "</option>";
        }
        $user_list_html .= "</select>";
        $user_list_html .= "<button type='submit' style='background-color: #ff3333; color: #fff; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer;'>Delete</button>";
        $user_list_html .= "</form>";
    } else {
        $error_message = "Json errado";
    }
} else {
    $error_message = "Nenhum usuário.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        .user-list {
            list-style-type: none;
            padding: 0;
        }
        .user-item {
            background: #fff;
            margin: 10px 0;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .user-item strong {
            color: #555;
        }
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
if (isset($user_list_html)) {
    echo $user_list_html;
} else {
    echo "<p class='error'>$error_message</p>";
}
?>

</body>
</html>