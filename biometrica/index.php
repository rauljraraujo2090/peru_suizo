

<?php


if(isset($_POST['num1']) && $_POST['num2']) {

$numero12=$_POST['num1'];
$numero2=$_POST['num2'];
}
$resultado='';


if(!empty($numero12) && !empty($numero2)){

	$resultado = $numero12* $numero2/1000;
}

if($resultado!=''){
	//echo "BIOMASA (KG): ".$resultado;
}
echo"<br>";
echo"<br>";

$sumarr='';
$mañana='';
if(isset($_POST['num1']) ) {
$variable12=$_POST['num1'];

 if($variable12>=1  &&  $variable12<=5){
	$sumarr=$resultado* 0.15;
  $mañana=$sumarr/2;
	//echo "RACION ALIMENTICIA DIARIA KG: ".$sumarr;

}else if($variable12>=6  &&  $variable12<=50){
	$sumarr=$resultado* 0.1;
  $mañana=$sumarr/2;
//	echo "RACION ALIMENTICIA DIARIA KG: ".$sumarr;


}else if($variable12>=51  &&  $variable12<=100){
	$sumarr=$resultado* 0.05;
  $mañana=$sumarr/2;
//	echo "RACION ALIMENTICIA DIARIA KG: ".$sumarr;

	
	
}else if($variable12>=101  &&  $variable12<=200){
	$sumarr=$resultado* 0.03;+
  $mañana=$sumarr/2;
	//echo "RACION ALIMENTICIA DIARIA KG: ".$sumarr;





}else if($variable12>200 &&  $variable12<301){
	$sumarr=$resultado* 0.02;
  $mañana=$sumarr/2;
	//echo "RACION ALIMENTICIA DIARIA KG: ".$sumarr;




}else if($variable12>=301  &&  $variable12<=500){
	$sumarr=$resultado* 0.018;
  $mañana=$sumarr/2;
	//echo "RACION ALIMENTICIA DIARIA KG: ".$sumarr;




}else if($variable12>=501  &&  $variable12<=750){
	$sumarr=$resultado* 0.015;
  $mañana=$sumarr/2;
	//echo "RACION ALIMENTICIA DIARIA KG: ".$sumarr;


}else if($variable12>=751  &&  $variable12<=1000){
	$sumarr=$resultado* 0.01;
  $mañana=$sumarr/2;
	//echo "RACION ALIMENTICIA DIARIA KG: ".$sumarr;

	}
	
}
	

?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css"rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Calculo biometrico</title>
</head>

<body>

    <!-- blue circle background -->
    <div class="d-none d-md-block ball login bg-primary bg-gradient position-absolute rounded-circle"></div>

    <!-- logo name -->
    <div class="position-absolute top-0 start-0 p-3">
        <a href="https://www.youtube.com/channel/UCRv_tLsJllG18IhDkpNzh_w" class="text-decoration-none fw-bold fs-5">Calculo biometrico</a>
    </div>

    <!-- Login Section -->
    <div class="container login__form active">
        <div class="row vh-100 w-100 align-self-center">
            <div class="col-12 col-lg-6 col-xl-6 ">
                <div class="row vh-100">
                    <div class="col align-self-center p-5 w-100">
                       <h3 class="fw-bolder">BIENVENIDO !</h3>


                        
               <div > 
                        <marquee behavior="" direction=""><img src="pes.png"  id="pes" alt="">Cálculo Biométrico</marquee>
                        
                        </div>
                       <!-- form login section  <p class="fw-lighter fs-6">Don't have an account, <span id="signUp" role="button" class="text-primary">Sign Up</span></p>-->
                        <!-- form login section -->
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="Post" class="mt-5 ">
                            <div class="mb-3">
                                <label for="username" class="form-label">PESO PROMEDIO GRAMOS</label>
                                <input  min="0" step="0.100" type="number" name="num1"value="<?php echo $numero12?>" placeholder="Ingrese el peso promedio" class="form-control text-indent shadow-sm bg-grey-light border-0 rounded-pill fw-lighter fs-7 p-3" placeholder="">
                            </div>
                            

                            <div class="mb-3">
                                <label for="username" class="form-label">CANTIDAD DE PECES</label>
                                <div class="d-flex position-relative">
                                    <input type="number" min="0" step="0.100"name="num2"value="<?php echo $numero2?>" placeholder="Ingrese la cantidad de peces" class="form-control text-indent auth__password shadow-sm bg-grey-light border-0 rounded-pill fw-lighter fs-7 p-3">
                                   
                                </div>
                            </div>
                            



                            <div class="row text-center">


                                <div class="col mt-3">
                                    <label for="username" class="form-label">Biomasa KG</label>
                                    <div class="d-flex position-relative">
                                    <input type="text" value="<?php echo $resultado."  KG"?>" placeholder="KG"class="form-control text-indent auth__password shadow-sm bg-grey-light border-0 rounded-pill fw-lighter fs-7 p-3">  
                                    </div>
                                </div>


                                <div class="col mt-3">
                                    <label for="username" class="form-label">R.A.D KG</label>
                                    <div class="d-flex position-relative">
                                    <input type="text"value="<?php echo $sumarr."  KG"?>"   placeholder="KG"class="form-control text-indent auth__password shadow-sm bg-grey-light border-0 rounded-pill fw-lighter fs-7 p-3">  
                                    </div>
                                </div>



                            </div>


                            <div class="col text-center">
                                <button  class="btn btn-outline-dark btn-lg rounded-pill mt-4 w-100">Calcular</button>
                            </div>


                            <div class="row text-center">


                                <div class="col mt-3">
                                    <label for="username" class="form-label">R.A - mañana</label>
                                    <div class="d-flex position-relative">
                                    <input type="text" value="<?php echo $mañana."  KG"?>" placeholder="KG" class="form-control text-indent auth__password shadow-sm bg-grey-light border-0 rounded-pill fw-lighter fs-7 p-3">  
                                    </div>
                                </div>


                                <div class="col mt-3">
                                    <label for="username" class="form-label">R.A - tarde</label>
                                    <div class="d-flex position-relative">
                                    <input type="text" value="<?php echo $mañana."  KG"?>"placeholder="KG" class="form-control text-indent auth__password shadow-sm bg-grey-light border-0 rounded-pill fw-lighter fs-7 p-3">  
                                    </div>
                                </div>



                            </div>




                        </form>

                        
    <!-- Register Section 
                        <p class="mt-5 text-center">Or Sign in with social platforms</p>
                        <div class="row text-center">
                            <div class="col mt-3">
                                <a href="" class="btn btn-outline-dark border-2 rounded-circle"><i class="bi bi-facebook fs-5"></i></a>
                            </div>
                            <div class="col mt-3">
                                <a href="" class="btn btn-outline-dark border-2 rounded-circle"><i class="bi bi-linkedin fs-5"></i></a>
                            </div>
                            <div class="col mt-3">
                                <a href="" class="btn btn-outline-dark border-2 rounded-circle"><i class="bi bi-twitter fs-5"></i></a>
                            </div>
                            <div class="col my-3">
                                <a href="" class="btn btn-outline-dark border-2 rounded-circle"><i class="bi bi-google fs-5"></i></a>
                            </div>
                        </div>
-->

                    </div>
                </div>
            </div>
            <div class="d-none d-lg-block col-lg-6 col-xl-6 p-5">
                <div class="row vh-100 p-5">
                    <div class="col align-self-center p-5 text-center">
                        <img src="pes.png" class="bounce"  id="pesgrande"alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>

#pesgrande{

            width: 58rem;
        }

    #pes{

width: 5rem !important;
}
    </style>
    <!-- Register Section -->
    <div class="container register__form">
        <div class="row vh-100 w-100 align-self-center">
            <div class="d-none d-lg-block col-lg-6 col-xl-6 p-5">
                <div class="row vh-100 p-5">
                    <div class="col align-self-center p-5 text-center">
                        <img src="assets/img/register.png" class="bounce" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-6 px-5">
                <div class="row vh-100">
                    <div class="col align-self-center p-5 w-100">
                        <h3 class="fw-bolder">REGISTER HERE !</h3>
                        <p class="fw-lighter fs-6">Have an account, <span id="signIn" role="button" class="text-primary">Sign In</span></p>
                        <!-- form register section -->
                        <form action="" class="mt-5">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control text-indent shadow-sm bg-grey-light border-0 rounded-pill fw-lighter fs-7 p-3" placeholder="name1">
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Email</label>
                                <input type="email" class="form-control text-indent shadow-sm bg-grey-light border-0 rounded-pill fw-lighter fs-7 p-3" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Password</label>
                                <div class="d-flex position-relative">
                                    <input type="password" class="form-control text-indent auth__password shadow-sm bg-grey-light border-0 rounded-pill fw-lighter fs-7 p-3">
                                    <span class="password__icon text-primary fs-4 fw-bold bi bi-eye-slash"></span>
                                </div>
                            </div>
                            <div class="col text-center">
                                <button type="submit" class="btn btn-outline-dark btn-lg rounded-pill mt-4 w-100">Sign Up</button>
                            </div>
                        </form>
                        <p class="mt-5 text-center">Or Sign in with social platforms</p>
                        <div class="row text-center">
                            <div class="col mt-3">
                                <a href="" class="btn btn-outline-dark border-2 rounded-circle"><i class="bi bi-facebook fs-5"></i></a>
                            </div>
                            <div class="col mt-3">
                                <a href="" class="btn btn-outline-dark border-2 rounded-circle"><i class="bi bi-linkedin fs-5"></i></a>
                            </div>
                            <div class="col mt-3">
                                <a href="" class="btn btn-outline-dark border-2 rounded-circle"><i class="bi bi-twitter fs-5"></i></a>
                            </div>
                            <div class="col my-3">
                                <a href="" class="btn btn-outline-dark border-2 rounded-circle"><i class="bi bi-google fs-5"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bootstrap/js/bootstrap.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>