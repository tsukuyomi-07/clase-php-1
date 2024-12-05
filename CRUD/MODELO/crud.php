<?php

include "../conexion.php";

$names = $_POST['names'];
$lastnames = $_POST['lastnames'];
$document = $_POST['document'];
$phone = $_POST['phone'];
$email = $_POST['email'];


$insert = $conexion->query("INSERT INTO users VALUES (NULL, '$names', '$lastnames', '$phone', '$email', '$document' ) ");





if($insert){
    header("location:../VIEW/listar.php");
}



?>
