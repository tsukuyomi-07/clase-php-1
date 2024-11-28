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
    <form action="../modelo/crud.php" method="post">
        <label>Ingrese sus Nombres</label>
        <input type="text" name="names" >

        <label>Ingrese su Documento</label>
        <input type="number" name="document" >
        <button name="registrar" type="submit">Guardar registro</button>
    </form>
    
</body>
</html>