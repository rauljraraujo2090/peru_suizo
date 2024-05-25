<?php 
include('../conexion.php');


//recibimos la informacion

$nombre=$_POST['elnombre'];
$descripcion=$_POST['ladescripcion'];


$consulta="INSERT INTO detalles_curso   (nombre,descripcion)
VALUES('$nombre','$descripcion')";

$query=mysqli_query($conn,$consulta);


if ($query) {
    echo "Registro exitoso";
}else {
    echo "Registro Fallido";

}

mysqli_close($conn);
?> 