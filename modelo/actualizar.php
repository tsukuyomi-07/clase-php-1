<?php

include "../conexion.php";


if(isset($_POST['botonActualizar'])){
    $conexion->query("UPDATE users
    set 
    names ='$_REQUEST[names]' ,
    lastNames ='$_REQUEST[lastNames]',
    phone = '$_REQUEST[phone]',
    email = '$_REQUEST[email]'
  where id = '$_REQUEST[userId]'");


   

header('location:../view/index.php'); 
        
}else?>