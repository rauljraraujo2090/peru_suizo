<?php
include("../conexion.php");


$id = $_GET['id'];


$sql = "DELETE FROM detalle_cursos WHERE id='$id'";
if(mysqli_query($conn,$sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro eliminado exitósamente");';
	echo 'window.location="formulario.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error eliminando registro!");';
	echo 'window.location="formulario.php";';
	echo '</script>';
}
?>