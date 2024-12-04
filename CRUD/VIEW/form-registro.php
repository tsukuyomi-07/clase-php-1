<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>

    <h1>Registrar Usuario</h1>

    <a href="listar.php">Lista de usuarios</a>
    <form action="../MODELO/crud.php" method="post">

        <label >Nombres</label>
        <input type="text" name="names">

        <label >Apellidos</label>
        <input type="text" name="lastnames">

        <label >Documento</label>
        <input type="text" name="document" id="document">

        <label >Telefono</label>
        <input type="text" name="phone" id="phone">

        <label >Email</label>
        <input type="email" name="email" id="email">

        <button type="submit">Registrar</button>

    </form>

</body>
</html>