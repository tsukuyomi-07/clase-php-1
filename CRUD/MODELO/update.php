<?php

include "../conexion.php";



    $conexion->query("UPDATE users
    set 
    names ='$_REQUEST[names]' ,
    lastNames ='$_REQUEST[lastnames]',
    phone = '$_REQUEST[phone]',
    email = '$_REQUEST[email]'
  where id = '$_REQUEST[user_id]' ");


   

header("location: ../VIEW/listar.php");
        
