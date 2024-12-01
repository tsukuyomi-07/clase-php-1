<?php

include "../conexion.php";


if(isset($_POST['botonActualizar'])){
    $conexion->query("UPDATE users
    set names ='$_REQUEST[UpdateNames]' 
  where names = '$_REQUEST[namesold]'");


    $conexion->query("UPDATE users
    set document ='$_REQUEST[Updatedocument]' 
  where document = '$_REQUEST[documentold]'");

header('location:../view/index.php'); 
        
}else?>