<?php
include"../conexion.php";
$consulta = $conexion->query("SELECT * FROM users")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Lista de usuarios</h1>

<table border="1">
    <thead>
        <th>Nombres</th>
        <th>Documentos</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </thead>
    <tbody>
    <?php 
    while($user=$consulta->fetch_object()):
    ?>

    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <?php 
    endwhile;
    ?>
    </tbody>
</table>

</body>
</html>