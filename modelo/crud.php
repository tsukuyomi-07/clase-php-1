<?php

include "../conexion.php";



if(isset($_POST['registrar'])){

$conexion->query("INSERT INTO users VALUES(
    null, '$_POST[names]', $_POST[document], 1
)");
}
else{
    $conexion->query("DELETE FROM users WHERE id = '$_POST[id]'");
}

header('location:../view/index.php');




