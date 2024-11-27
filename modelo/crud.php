<?php

include "../conexion.php";

$conexion->query("INSERT INTO users VALUES(
    null, '$_POST[names]', $_POST[document], 1
)");
?>

<html>
<button><a href="http://localhost/clase-php-1/view/index.php">Regresar al inicio</a></button>
</html>
