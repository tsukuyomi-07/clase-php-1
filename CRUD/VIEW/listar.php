<?php
include"../conexion.php";
$consulta = $conexion->query("SELECT * FROM users");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <h1>Lista de usuarios</h1>

    <a href="form-registro.php">Registrar Usuario</a>
    
    <table border="1" >
        <thead>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Documento</th>
            <th>Telefono</th>
            <th>email</th>
            <th>ver</th>
            <th>Editar</th>
            <th>eliminar</th>
        </thead>
        <tbody>
            <?php  
            //while($user = $consulta->fetch_object()):  
                foreach ($consulta as $user ):
            ?>

                <tr>
                    <td> <?=$user['names'];?> </td>
                    <td> <?=$user['lastnames'];?> </td>
                    <td> <?=$user['document'];?> </td>
                    <td> <?=$user['phone'];?> </td>
                    <td> <?=$user['email'];?> </td>

                    <td>
                    <form action="show.php" method="get">
                    <input type="hidden" name="user_id" value="<?=$user['id']?>">
                    <button type="submit">ver</button></form>
                    </td>

                    <td>
                    <form action="editar.php" method="get">
                            <input type="hidden" name="user_id" id="id" value="<?=$user['id']?>">
                            <button type="submit">Editar</button>
                        </form>
                    </td>
                    <td>
                    <form action="../MODELO/eliminar-user.php" method="get">
                            <input type="hidden" name="user_id" id="id" value="<?=$user['id']?>">
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>

            <?php  endforeach;
            //endwhile; 
            ?>
        </tbody>
    </table>
</body>
</html>