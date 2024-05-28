<!DOCTYPE html>
<html>
<head>
	<title>Sumar números en php</title>
</head>
<body>

<?php
$resultado='';
if(!empty($_POST['num1']) && !empty($_POST['num2'])){

	$resultado = $_POST['num1'] * $_POST['num2']/1000;
}
?>

<form action="" method="post">
<h4>PESO PROMEDIO GRAMOS</h4>
<input type="number" required name="num1" value="<?php echo $_POST['num1'];?>">
<h4>CANTIDAD DE PECES</h4>
<input type="number" required name="num2" value="<?php echo $_POST['num2'];?>">
<br><br>
<button>Sumar</button>
</form>
<br><br>

<?php 
if($resultado!=''){
	echo "BIOMASA (KG): ".$resultado;
}
echo"<br>";
echo"<br>";

 if($_POST['num1']>=1  &&  $_POST['num1']<=5){
	$sumarr=$resultado* 0.15;
	echo "RACION ALIMENTICIA DIARIA KG: ".$sumarr;

}else if($_POST['num1']>=6  &&  $_POST['num1']<=50){
	$sumarr=$resultado* 0.1;
	echo "RACION ALIMENTICIA DIARIA KG: ".$sumarr;


	

		
	}else{

		echo"no hay datos";
	}
	

	

?>
</body>
</html>