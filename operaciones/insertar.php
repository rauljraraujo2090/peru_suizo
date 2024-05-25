<?php 
include('../conexion.php');


//recibimos la informacion

$modulo=$_POST['elmodulos'];
$nombre=$_POST['elnombre'];
$descripcion=$_POST['ladescripcion'];


$consulta="INSERT INTO suizo(modulo,nombre,descripcion)
VALUES('$modulo','$nombre','$descripcion')";

$query=mysqli_query($conn,$consulta);


if ($query) {
    echo "Registro exitoso";
}else {
    echo "Registro Fallido";

}

mysqli_close($conn);
?> 