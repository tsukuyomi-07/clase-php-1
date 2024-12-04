<?php

include "../conexion.php";

$user = $conexion->query("SELECT * FROM users WHERE id = '$_REQUEST[user_id]'")->fetch_object();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="listar.php">inicio</a>
    <h1>usuario seleccionado</h1>

    <b>Nombres:</b> <?= $user->names;?>
</body>
</html>