<?php 
include "../conexion.php";
$user= $conexion->query("SELECT * FROM users WHERE id = $_REQUEST[userId]");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label,input{display: block;}
        a{color: black; text-decoration: none;}
    </style>
</head>
<body>

                

<h1>Actualizar usuario</h1>
    <button><a href="index.php" >Regresar</a></button>
    <form action="actualizar.php" method="post">
        <label>actualice su Nombre</label>
        <input type="text" name="names"  value= "<?=$user->names?>">
        
        <label for="lastname">Apellidos</label>
        <input type="text" name="lastNames" id="lastname" value="<?=$user->lastnames?>" >
 
        <label for="email">Correo</label>
        <input type="email" name="email" id="imail">
    
        <label>actualice su telefono</label>
        <input type="number" name="phone" value="<?=$user->phone?>">

        <label>actualice su Documento</label>
        <input type="number" name="document" value="<?=$user->document?>" readonly>
        <input type="hidden" name="userId" value="<?=$ser->id?>">
        <button name="botonActualizar" type="submit">Guardar cambios</button>
    </form> 


</body>
</html>