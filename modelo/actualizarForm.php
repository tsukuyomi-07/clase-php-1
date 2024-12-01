<?php 
include "../conexion.php";
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

<?php
 
  $actualizacion = $conexion->query(("SELECT * FROM users
                        where id ='$_REQUEST[idUpdate]'")); 
                        
                        
                        

                     
if ($reg = mysqli_fetch_array($actualizacion)) {
    ?>
    




<h1>Actualizar usuario</h1>
    <button><a href="index.php" >Regresar</a></button>
    <form action="actualizar.php" method="post">
        <label>actualice su Nombre</label>
        <input type="text" name="UpdateNames"  value= "<?php echo $reg['names'] ?>">
        <input type="hidden" name="namesold" value="<?php echo $reg['names'] ?>">
        
 
    

        <label>actualice su Documento</label>
        <input type="number" name="Updatedocument" value="<?php echo $reg['document'] ?>">
        <input type="hidden" name="documentold" value="<?php echo $reg['document'] ?>">
        <button name="botonActualizar" type="submit">Guardar cambios</button>
    </form> 
<?php    
}else{}

?>
   





</body>
</html>