<?php
$numero12=$_POST['num1'];
$numero2=$_POST['num2'];
$resultado='';
if(!empty($numero12) && !empty($numero2)){

	$resultado = $numero12* $numero2/1000;
}

if($resultado!=''){
	echo "BIOMASA (KG): ".$resultado;
}
echo"<br>";
echo"<br>";
$variable12=$_POST['num1'];

 if($variable12>=1  &&  $variable12<=5){
	$sumarr=$resultado* 0.15;
	echo "RACION ALIMENTICIA DIARIA KG: ".$sumarr;

}else if($variable12>=6  &&  $variable12<=50){
	$sumarr=$resultado* 0.1;
	echo "RACION ALIMENTICIA DIARIA KG: ".$sumarr;


}else if($variable12>=51  &&  $variable12<=100){
	$sumarr=$resultado* 0.05;
	echo "RACION ALIMENTICIA DIARIA KG: ".$sumarr;

	
	
}else if($variable12>=101  &&  $variable12<=200){
	$sumarr=$resultado* 0.03;
	echo "RACION ALIMENTICIA DIARIA KG: ".$sumarr;





}else if($variable12>=2001 &&  $variable12<=300){
	$sumarr=$resultado* 0.02;
	echo "RACION ALIMENTICIA DIARIA KG: ".$sumarr;




}else if($variable12>=301  &&  $variable12<=500){
	$sumarr=$resultado* 0.018;
	echo "RACION ALIMENTICIA DIARIA KG: ".$sumarr;




}else if($variable12>=501  &&  $variable12<=750){
	$sumarr=$resultado* 0.015;
	echo "RACION ALIMENTICIA DIARIA KG: ".$sumarr;


}else if($variable12>=751  &&  $variable12<=1000){
	$sumarr=$resultado* 0.01;
	echo "RACION ALIMENTICIA DIARIA KG: ".$sumarr;

	}
	

	

