

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


<!DOCTYPE html>
<html lang="en" class="dark">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Calculo</title>
  <link rel="icon" href="favicon.ico">
  <link href="style.css" rel="stylesheet">
</head>

<body class="dark:bg-black">
  <header class="header bg-transparent absolute top-0 left-0 z-40 w-full flex items-center">
    <div class="container">
      <div class="flex mx-[-16px] items-center justify-between relative">
        
        <div class="flex px-4 justify-between items-center w-full">
          <div>
            <button id="navbarToggler" aria-label="Mobile Menu" class="block absolute right-4 top-1/2 translate-y-[-50%] lg:hidden focus:ring-2 ring-primary px-3 py-[6px] rounded-lg">
              <span class="relative w-[30px] h-[2px] my-[6px] block bg-dark dark:bg-white"></span>
              <span class="relative w-[30px] h-[2px] my-[6px] block bg-dark dark:bg-white"></span>
              <span class="relative w-[30px] h-[2px] my-[6px] block bg-dark dark:bg-white"></span>
            </button>
            <nav id="navbarCollapse" class="absolute py-5 lg:py-0 lg:px-4 xl:px-6 bg-white dark:bg-dark lg:dark:bg-transparent lg:bg-transparent shadow-lg rounded-lg max-w-[250px] w-full lg:max-w-full lg:w-full right-4 top-full hidden lg:block lg:static lg:shadow-none">
            <!-----  <ul class="block lg:flex">
                <li class="relative group">
                  <a href="/#home" class="menu-scroll text-base text-dark dark:text-white group-hover:opacity-70 py-2 lg:py-6 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0">Home
                  </a>
                </li>
                <li class="relative group">
                  <a href="/#about" class="menu-scroll text-base text-dark dark:text-white group-hover:opacity-70 py-2 lg:py-6 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0 lg:ml-8 xl:ml-12">About
                  </a>
                </li>
                <li class="relative group">
                  <a href="/#pricing" class="menu-scroll text-base text-dark dark:text-white group-hover:opacity-70 py-2 lg:py-6 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0 lg:ml-8 xl:ml-12">Pricing
                  </a>
                </li>
                <li class="relative group">
                  <a href="/#contact" class="menu-scroll text-base text-dark dark:text-white group-hover:opacity-70 py-2 lg:py-6 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0 lg:ml-8 xl:ml-12">Support
                  </a>
                </li>
                <li class="relative group submenu-item">
                  <a href="javascript:void(0)" class="text-base text-dark dark:text-white group-hover:opacity-70 py-2 lg:py-6 lg:inline-flex lg:pl-0 lg:pr-4 flex mx-8 lg:mr-0 lg:ml-8 xl:ml-12 relative after:absolute after:w-2 after:h-2 after:border-b-2 after:border-r-2 after:border-current after:rotate-45 lg:after:right-0 after:right-1 after:top-1/2 after:translate-y-[-50%] after:mt-[-2px]">Pages
                  </a>
                  <div class="submenu hidden relative lg:absolute w-[250px] top-full lg:top-[110%] left-0 rounded-md lg:shadow-lg p-4 lg:block lg:opacity-0 lg:invisible group-hover:opacity-100 lg:group-hover:visible lg:group-hover:top-full bg-white dark:bg-dark transition-[top] duration-300">
                    <a href="about.html" class="block text-sm rounded py-[10px] px-4 text-dark dark:text-white hover:opacity-70">About
                      Page </a>
                    <a href="contact.html" class="block text-sm rounded py-[10px] px-4 text-dark dark:text-white hover:opacity-70">Contact
                      Page </a>
                    <a href="blog-grids.html" class="block text-sm rounded py-[10px] px-4 text-dark dark:text-white hover:opacity-70">Blog Grid
                      Page </a>
                    <a href="blog-sidebar.html" class="block text-sm rounded py-[10px] px-4 text-dark dark:text-white hover:opacity-70">Blog
                      Sidebar Page </a>
                    <a href="blog-details.html" class="block text-sm rounded py-[10px] px-4 text-dark dark:text-white hover:opacity-70">Blog
                      Details Page </a>
                    <a href="signin.html" class="block text-sm rounded py-[10px] px-4 text-dark dark:text-white hover:opacity-70">Sign In
                      Page </a>
                    <a href="signup.html" class="block text-sm rounded py-[10px] px-4 text-dark dark:text-white hover:opacity-70">Sign Up
                      Page </a>
                    <a href="404.html" class="block text-sm rounded py-[10px] px-4 text-dark dark:text-white hover:opacity-70">404 Page
                    </a>
                  </div>
                </li>
              </ul>

              ---->
            </nav>
          </div>
          <div class="flex justify-end items-center pr-16 lg:pr-0">
            
            <div>
              <label for="darkToggler" class="cursor-pointer w-9 h-9 md:w-14 md:h-14 rounded-full flex items-center justify-center bg-gray-2 dark:bg-dark-bg text-black dark:text-white">
                <input type="checkbox" name="darkToggler" id="darkToggler" class="sr-only" aria-label="darkToggler" />
                <svg viewBox="0 0 23 23" class="stroke-current dark:hidden w-5 h-5 md:w-6 md:h-6" fill="none">
                  <path d="M9.55078 1.5C5.80078 1.5 1.30078 5.25 1.30078 11.25C1.30078 17.25 5.80078 21.75 11.8008 21.75C17.8008 21.75 21.5508 17.25 21.5508 13.5C13.3008 18.75 4.30078 9.75 9.55078 1.5Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <svg viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="hidden dark:block w-5 h-5 md:w-6 md:h-6">
                  <mask id="path-1-inside-1_977:1934" fill="white">
                    <path d="M12.0508 16.5C10.8573 16.5 9.71271 16.0259 8.8688 15.182C8.02489 14.3381 7.55078 13.1935 7.55078 12C7.55078 10.8065 8.02489 9.66193 8.8688 8.81802C9.71271 7.97411 10.8573 7.5 12.0508 7.5C13.2443 7.5 14.3888 7.97411 15.2328 8.81802C16.0767 9.66193 16.5508 10.8065 16.5508 12C16.5508 13.1935 16.0767 14.3381 15.2328 15.182C14.3888 16.0259 13.2443 16.5 12.0508 16.5ZM12.0508 18C13.6421 18 15.1682 17.3679 16.2934 16.2426C17.4186 15.1174 18.0508 13.5913 18.0508 12C18.0508 10.4087 17.4186 8.88258 16.2934 7.75736C15.1682 6.63214 13.6421 6 12.0508 6C10.4595 6 8.93336 6.63214 7.80814 7.75736C6.68292 8.88258 6.05078 10.4087 6.05078 12C6.05078 13.5913 6.68292 15.1174 7.80814 16.2426C8.93336 17.3679 10.4595 18 12.0508 18ZM12.0508 0C12.2497 0 12.4405 0.0790176 12.5811 0.21967C12.7218 0.360322 12.8008 0.551088 12.8008 0.75V3.75C12.8008 3.94891 12.7218 4.13968 12.5811 4.28033C12.4405 4.42098 12.2497 4.5 12.0508 4.5C11.8519 4.5 11.6611 4.42098 11.5205 4.28033C11.3798 4.13968 11.3008 3.94891 11.3008 3.75V0.75C11.3008 0.551088 11.3798 0.360322 11.5205 0.21967C11.6611 0.0790176 11.8519 0 12.0508 0V0ZM12.0508 19.5C12.2497 19.5 12.4405 19.579 12.5811 19.7197C12.7218 19.8603 12.8008 20.0511 12.8008 20.25V23.25C12.8008 23.4489 12.7218 23.6397 12.5811 23.7803C12.4405 23.921 12.2497 24 12.0508 24C11.8519 24 11.6611 23.921 11.5205 23.7803C11.3798 23.6397 11.3008 23.4489 11.3008 23.25V20.25C11.3008 20.0511 11.3798 19.8603 11.5205 19.7197C11.6611 19.579 11.8519 19.5 12.0508 19.5ZM24.0508 12C24.0508 12.1989 23.9718 12.3897 23.8311 12.5303C23.6905 12.671 23.4997 12.75 23.3008 12.75H20.3008C20.1019 12.75 19.9111 12.671 19.7705 12.5303C19.6298 12.3897 19.5508 12.1989 19.5508 12C19.5508 11.8011 19.6298 11.6103 19.7705 11.4697C19.9111 11.329 20.1019 11.25 20.3008 11.25H23.3008C23.4997 11.25 23.6905 11.329 23.8311 11.4697C23.9718 11.6103 24.0508 11.8011 24.0508 12ZM4.55078 12C4.55078 12.1989 4.47176 12.3897 4.33111 12.5303C4.19046 12.671 3.99969 12.75 3.80078 12.75H0.800781C0.601869 12.75 0.411103 12.671 0.270451 12.5303C0.129799 12.3897 0.0507813 12.1989 0.0507812 12C0.0507813 11.8011 0.129799 11.6103 0.270451 11.4697C0.411103 11.329 0.601869 11.25 0.800781 11.25H3.80078C3.99969 11.25 4.19046 11.329 4.33111 11.4697C4.47176 11.6103 4.55078 11.8011 4.55078 12ZM20.5363 3.5145C20.6769 3.65515 20.7559 3.84588 20.7559 4.04475C20.7559 4.24362 20.6769 4.43435 20.5363 4.575L18.4153 6.6975C18.3455 6.76713 18.2628 6.82235 18.1717 6.86C18.0806 6.89765 17.983 6.91699 17.8845 6.91692C17.6855 6.91678 17.4947 6.83758 17.354 6.69675C17.2844 6.62702 17.2292 6.54425 17.1915 6.45318C17.1539 6.36211 17.1345 6.26452 17.1346 6.16597C17.1348 5.96695 17.214 5.77613 17.3548 5.6355L19.4758 3.5145C19.6164 3.3739 19.8072 3.29491 20.006 3.29491C20.2049 3.29491 20.3956 3.3739 20.5363 3.5145ZM6.74678 17.304C6.88738 17.4446 6.96637 17.6354 6.96637 17.8342C6.96637 18.0331 6.88738 18.2239 6.74678 18.3645L4.62578 20.4855C4.48433 20.6221 4.29488 20.6977 4.09823 20.696C3.90158 20.6943 3.71347 20.6154 3.57442 20.4764C3.43536 20.3373 3.35648 20.1492 3.35478 19.9526C3.35307 19.7559 3.42866 19.5665 3.56528 19.425L5.68628 17.304C5.82693 17.1634 6.01766 17.0844 6.21653 17.0844C6.4154 17.0844 6.60614 17.1634 6.74678 17.304ZM20.5363 20.4855C20.3956 20.6261 20.2049 20.7051 20.006 20.7051C19.8072 20.7051 19.6164 20.6261 19.4758 20.4855L17.3548 18.3645C17.2182 18.223 17.1426 18.0336 17.1443 17.8369C17.146 17.6403 17.2249 17.4522 17.3639 17.3131C17.503 17.1741 17.6911 17.0952 17.8877 17.0935C18.0844 17.0918 18.2738 17.1674 18.4153 17.304L20.5363 19.425C20.6769 19.5656 20.7559 19.7564 20.7559 19.9552C20.7559 20.1541 20.6769 20.3449 20.5363 20.4855ZM6.74678 6.6975C6.60614 6.8381 6.4154 6.91709 6.21653 6.91709C6.01766 6.91709 5.82693 6.8381 5.68628 6.6975L3.56528 4.575C3.49365 4.50582 3.43651 4.42306 3.39721 4.33155C3.3579 4.24005 3.33721 4.14164 3.33634 4.04205C3.33548 3.94247 3.35445 3.84371 3.39216 3.75153C3.42988 3.65936 3.48557 3.57562 3.55598 3.5052C3.6264 3.43478 3.71014 3.37909 3.80232 3.34138C3.89449 3.30367 3.99325 3.2847 4.09283 3.28556C4.19242 3.28643 4.29083 3.30712 4.38233 3.34642C4.47384 3.38573 4.5566 3.44287 4.62578 3.5145L6.74678 5.6355C6.81663 5.70517 6.87204 5.78793 6.90985 5.87905C6.94766 5.97017 6.96712 6.06785 6.96712 6.1665C6.96712 6.26515 6.94766 6.36283 6.90985 6.45395C6.87204 6.54507 6.81663 6.62783 6.74678 6.6975Z" />
                  </mask>
                  <path d="M12.0508 16.5C10.8573 16.5 9.71271 16.0259 8.8688 15.182C8.02489 14.3381 7.55078 13.1935 7.55078 12C7.55078 10.8065 8.02489 9.66193 8.8688 8.81802C9.71271 7.97411 10.8573 7.5 12.0508 7.5C13.2443 7.5 14.3888 7.97411 15.2328 8.81802C16.0767 9.66193 16.5508 10.8065 16.5508 12C16.5508 13.1935 16.0767 14.3381 15.2328 15.182C14.3888 16.0259 13.2443 16.5 12.0508 16.5ZM12.0508 18C13.6421 18 15.1682 17.3679 16.2934 16.2426C17.4186 15.1174 18.0508 13.5913 18.0508 12C18.0508 10.4087 17.4186 8.88258 16.2934 7.75736C15.1682 6.63214 13.6421 6 12.0508 6C10.4595 6 8.93336 6.63214 7.80814 7.75736C6.68292 8.88258 6.05078 10.4087 6.05078 12C6.05078 13.5913 6.68292 15.1174 7.80814 16.2426C8.93336 17.3679 10.4595 18 12.0508 18ZM12.0508 0C12.2497 0 12.4405 0.0790176 12.5811 0.21967C12.7218 0.360322 12.8008 0.551088 12.8008 0.75V3.75C12.8008 3.94891 12.7218 4.13968 12.5811 4.28033C12.4405 4.42098 12.2497 4.5 12.0508 4.5C11.8519 4.5 11.6611 4.42098 11.5205 4.28033C11.3798 4.13968 11.3008 3.94891 11.3008 3.75V0.75C11.3008 0.551088 11.3798 0.360322 11.5205 0.21967C11.6611 0.0790176 11.8519 0 12.0508 0V0ZM12.0508 19.5C12.2497 19.5 12.4405 19.579 12.5811 19.7197C12.7218 19.8603 12.8008 20.0511 12.8008 20.25V23.25C12.8008 23.4489 12.7218 23.6397 12.5811 23.7803C12.4405 23.921 12.2497 24 12.0508 24C11.8519 24 11.6611 23.921 11.5205 23.7803C11.3798 23.6397 11.3008 23.4489 11.3008 23.25V20.25C11.3008 20.0511 11.3798 19.8603 11.5205 19.7197C11.6611 19.579 11.8519 19.5 12.0508 19.5ZM24.0508 12C24.0508 12.1989 23.9718 12.3897 23.8311 12.5303C23.6905 12.671 23.4997 12.75 23.3008 12.75H20.3008C20.1019 12.75 19.9111 12.671 19.7705 12.5303C19.6298 12.3897 19.5508 12.1989 19.5508 12C19.5508 11.8011 19.6298 11.6103 19.7705 11.4697C19.9111 11.329 20.1019 11.25 20.3008 11.25H23.3008C23.4997 11.25 23.6905 11.329 23.8311 11.4697C23.9718 11.6103 24.0508 11.8011 24.0508 12ZM4.55078 12C4.55078 12.1989 4.47176 12.3897 4.33111 12.5303C4.19046 12.671 3.99969 12.75 3.80078 12.75H0.800781C0.601869 12.75 0.411103 12.671 0.270451 12.5303C0.129799 12.3897 0.0507813 12.1989 0.0507812 12C0.0507813 11.8011 0.129799 11.6103 0.270451 11.4697C0.411103 11.329 0.601869 11.25 0.800781 11.25H3.80078C3.99969 11.25 4.19046 11.329 4.33111 11.4697C4.47176 11.6103 4.55078 11.8011 4.55078 12ZM20.5363 3.5145C20.6769 3.65515 20.7559 3.84588 20.7559 4.04475C20.7559 4.24362 20.6769 4.43435 20.5363 4.575L18.4153 6.6975C18.3455 6.76713 18.2628 6.82235 18.1717 6.86C18.0806 6.89765 17.983 6.91699 17.8845 6.91692C17.6855 6.91678 17.4947 6.83758 17.354 6.69675C17.2844 6.62702 17.2292 6.54425 17.1915 6.45318C17.1539 6.36211 17.1345 6.26452 17.1346 6.16597C17.1348 5.96695 17.214 5.77613 17.3548 5.6355L19.4758 3.5145C19.6164 3.3739 19.8072 3.29491 20.006 3.29491C20.2049 3.29491 20.3956 3.3739 20.5363 3.5145ZM6.74678 17.304C6.88738 17.4446 6.96637 17.6354 6.96637 17.8342C6.96637 18.0331 6.88738 18.2239 6.74678 18.3645L4.62578 20.4855C4.48433 20.6221 4.29488 20.6977 4.09823 20.696C3.90158 20.6943 3.71347 20.6154 3.57442 20.4764C3.43536 20.3373 3.35648 20.1492 3.35478 19.9526C3.35307 19.7559 3.42866 19.5665 3.56528 19.425L5.68628 17.304C5.82693 17.1634 6.01766 17.0844 6.21653 17.0844C6.4154 17.0844 6.60614 17.1634 6.74678 17.304ZM20.5363 20.4855C20.3956 20.6261 20.2049 20.7051 20.006 20.7051C19.8072 20.7051 19.6164 20.6261 19.4758 20.4855L17.3548 18.3645C17.2182 18.223 17.1426 18.0336 17.1443 17.8369C17.146 17.6403 17.2249 17.4522 17.3639 17.3131C17.503 17.1741 17.6911 17.0952 17.8877 17.0935C18.0844 17.0918 18.2738 17.1674 18.4153 17.304L20.5363 19.425C20.6769 19.5656 20.7559 19.7564 20.7559 19.9552C20.7559 20.1541 20.6769 20.3449 20.5363 20.4855ZM6.74678 6.6975C6.60614 6.8381 6.4154 6.91709 6.21653 6.91709C6.01766 6.91709 5.82693 6.8381 5.68628 6.6975L3.56528 4.575C3.49365 4.50582 3.43651 4.42306 3.39721 4.33155C3.3579 4.24005 3.33721 4.14164 3.33634 4.04205C3.33548 3.94247 3.35445 3.84371 3.39216 3.75153C3.42988 3.65936 3.48557 3.57562 3.55598 3.5052C3.6264 3.43478 3.71014 3.37909 3.80232 3.34138C3.89449 3.30367 3.99325 3.2847 4.09283 3.28556C4.19242 3.28643 4.29083 3.30712 4.38233 3.34642C4.47384 3.38573 4.5566 3.44287 4.62578 3.5145L6.74678 5.6355C6.81663 5.70517 6.87204 5.78793 6.90985 5.87905C6.94766 5.97017 6.96712 6.06785 6.96712 6.1665C6.96712 6.26515 6.94766 6.36283 6.90985 6.45395C6.87204 6.54507 6.81663 6.62783 6.74678 6.6975Z" fill="black" stroke="white" stroke-width="2" mask="url(#path-1-inside-1_977:1934)" />
                </svg>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section class="relative overflow-hidden z-10 pt-[180px] pb-[120px]">
    <div class="container">
      <div class="flex flex-wrap mx-[-16px]">
        <div class="w-full px-4">
          <div class="max-w-[500px] mx-auto bg-primary bg-opacity-5 dark:bg-dark rounded-md p-12 sm:p-[60px]">
            <h3 class="font-bold text-black dark:text-white text-2xl sm:text-3xl mb-3 text-center">Bienvenido
              Administrador</h3>
            
           <!---- <button class="w-full flex items-center justify-center p-3 bg-white dark:bg-[#242B51] text-body-color hover:text-primary dark:text-body-color text-base font-medium dark:hover:text-white rounded-md shadow-one dark:shadow-signUp mb-6">
              <span class="mr-3">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_95:967)">
                    <path d="M20.0001 10.2216C20.0122 9.53416 19.9397 8.84776 19.7844 8.17725H10.2042V11.8883H15.8277C15.7211 12.539 15.4814 13.1618 15.1229 13.7194C14.7644 14.2769 14.2946 14.7577 13.7416 15.1327L13.722 15.257L16.7512 17.5567L16.961 17.5772C18.8883 15.8328 19.9997 13.266 19.9997 10.2216" fill="#4285F4" />
                    <path d="M10.2042 20.0001C12.9592 20.0001 15.2721 19.1111 16.9616 17.5778L13.7416 15.1332C12.88 15.7223 11.7235 16.1334 10.2042 16.1334C8.91385 16.126 7.65863 15.7206 6.61663 14.9747C5.57464 14.2287 4.79879 13.1802 4.39915 11.9778L4.27957 11.9878L1.12973 14.3766L1.08856 14.4888C1.93689 16.1457 3.23879 17.5387 4.84869 18.512C6.45859 19.4852 8.31301 20.0005 10.2046 20.0001" fill="#34A853" />
                    <path d="M4.39911 11.9777C4.17592 11.3411 4.06075 10.673 4.05819 9.99996C4.0623 9.32799 4.17322 8.66075 4.38696 8.02225L4.38127 7.88968L1.19282 5.4624L1.08852 5.51101C0.372885 6.90343 0.00012207 8.4408 0.00012207 9.99987C0.00012207 11.5589 0.372885 13.0963 1.08852 14.4887L4.39911 11.9777Z" fill="#FBBC05" />
                    <path d="M10.2042 3.86663C11.6663 3.84438 13.0804 4.37803 14.1498 5.35558L17.0296 2.59996C15.1826 0.901848 12.7366 -0.0298855 10.2042 -3.6784e-05C8.3126 -0.000477834 6.45819 0.514732 4.8483 1.48798C3.2384 2.46124 1.93649 3.85416 1.08813 5.51101L4.38775 8.02225C4.79132 6.82005 5.56974 5.77231 6.61327 5.02675C7.6568 4.28118 8.91279 3.87541 10.2042 3.86663Z" fill="#EB4335" />
                  </g>
                  <defs>
                    <clipPath id="clip0_95:967">
                      <rect width="20" height="20" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </span>
              Nuestra Cuenta de Google

            </button>---->
            <div class="flex items-center justify-center mb-8">
              <span class="hidden sm:block max-w-[70px] w-full h-[1px] bg-body-color"></span>
              <p class="w-full px-5 text-body-color text-center text-base font-medium">BIOLOGIA</p>
              <span class="hidden sm:block max-w-[70px] w-full h-[1px] bg-body-color"></span>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="Post">
              <div class="mb-8">
                <label for="email" class="block text-sm font-medium text-dark dark:text-white mb-3">PESO PROMEDIO GRAMOS </label>
                <input min="0" step="0.100" type="number" name="num1"value="<?php echo $numero12?>" placeholder="Ingrese el peso promedio" class="w-full border border-transparent dark:bg-[#242B51] rounded-md shadow-one dark:shadow-signUp py-3 px-6 text-body-color text-base placeholder-body-color outline-none focus-visible:shadow-none focus:border-primary" />
              </div>
              <div class="mb-8">
                <label for="password" class="block text-sm font-medium text-dark dark:text-white mb-3">CANTIDAD DE PECES
                </label>
                <input type="number" name="num2"value="<?php echo $numero2?>" placeholder="Ingrese la cantidad de peces" class="w-full border border-transparent dark:bg-[#242B51] rounded-md shadow-one dark:shadow-signUp py-3 px-6 text-body-color text-base placeholder-body-color outline-none focus-visible:shadow-none focus:border-primary" />
              </div>
              <div class="flex items-center justify-between mb-8">
                
                
                <div class="mb-8">
                <label for="email" class="block text-sm font-medium text-dark dark:text-white mb-3">Biomasa KG </label>
                <input type="text"aria-label="Disabled input example" value="<?php echo $resultado?>"disabled readonly   placeholder="Resultado" class="w-full border border-transparent dark:bg-[#242B51] rounded-md shadow-one dark:shadow-signUp py-3 px-6 text-body-color text-base placeholder-body-color outline-none focus-visible:shadow-none focus:border-primary" />
              </div>


              <div class="mb-8 ">
                <label for="email" class="block text-sm font-medium text-dark dark:text-white mb-3">Ración Alimenticia  </label>
                <input type="text" value="<?php echo $sumarr."  KG"?>"   disabled readonly placeholder="Resultado" class="w-full border border-transparent dark:bg-[#242B51] rounded-md shadow-one dark:shadow-signUp py-3 px-6 text-body-color text-base placeholder-body-color outline-none focus-visible:shadow-none focus:border-primary" />
              </div>


             

                

              </div>
               <!-----------RACION ALIMENTATARIA EN LA MAÑANA Y EN LA NOCHE ---------->



               <div class="mb-8">
                <label for="email" class="block text-sm font-medium text-dark dark:text-white mb-3">R.A. En la mañana</label>
                <input type="text"aria-label="Disabled input example" value="<?php echo $mañana."  KG"?>"disabled readonly   placeholder="Resultado" class="w-full border border-transparent dark:bg-[#242B51] rounded-md shadow-one dark:shadow-signUp py-3 px-6 text-body-color text-base placeholder-body-color outline-none focus-visible:shadow-none focus:border-primary" />
              </div>


              <div class="mb-8 ">
                <label for="email" class="block text-sm font-medium text-dark dark:text-white mb-3">R.A. En la tarde</label>
                <input type="text" value="<?php echo $mañana."  KG"?>"   disabled readonly placeholder="Resultado" class="w-full border border-transparent dark:bg-[#242B51] rounded-md shadow-one dark:shadow-signUp py-3 px-6 text-body-color text-base placeholder-body-color outline-none focus-visible:shadow-none focus:border-primary" />
              </div>


                     <!-----------RACION ALIMENTATARIA EN LA MAÑANA Y EN LA NOCHE ---------->
              <div class="mb-6">
                <button class="w-full flex items-center justify-center text-base font-medium text-white bg-primary py-4 px-9 hover:shadow-signUp hover:bg-opacity-80 transition duration-300 ease-in-out rounded-md">Calcular Resultado
                </button>
              </div>
            </form>
            <div id="AvanzaModal" class="mb-6">
                <button  class="w-full flex items-center justify-center text-base font-medium text-white bg-primary py-4 px-9 hover:shadow-signUp hover:bg-opacity-80 transition duration-300 ease-in-out rounded-md">Limpiar Calculo
                </button>
              </div>
            <p class="font-medium text-base text-body-color text-center">
            &copy; ¡Elaborado por ! 
              <a href="https://www.facebook.com/alexis.torre.144" target="_blank" class="text-primary hover:underline">Raúl Jr & </a>
              <a href="https://www.facebook.com/kevin.araujopalomino" target="_blank" class="text-primary hover:underline">Jhonatan Araujo</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="absolute top-0 left-0 z-[-1]">
      <svg width="1440" height="969" viewBox="0 0 1440 969" fill="none" xmlns="http://www.w3.org/2000/svg">
        <mask id="mask0_95:1005" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="1440" height="969">
          <rect width="1440" height="969" fill="#090E34" />
        </mask>
        <g mask="url(#mask0_95:1005)">
          <path opacity="0.1" d="M1086.96 297.978L632.959 554.978L935.625 535.926L1086.96 297.978Z" fill="url(#paint0_linear_95:1005)" />
          <path opacity="0.1" d="M1324.5 755.5L1450 687V886.5L1324.5 967.5L-10 288L1324.5 755.5Z" fill="url(#paint1_linear_95:1005)" />
        </g>
        <defs>
          <linearGradient id="paint0_linear_95:1005" x1="1178.4" y1="151.853" x2="780.959" y2="453.581" gradientUnits="userSpaceOnUse">
            <stop stop-color="#4A6CF7" />
            <stop offset="1" stop-color="#4A6CF7" stop-opacity="0" />
          </linearGradient>
          <linearGradient id="paint1_linear_95:1005" x1="160.5" y1="220" x2="1099.45" y2="1192.04" gradientUnits="userSpaceOnUse">
            <stop stop-color="#4A6CF7" />
            <stop offset="1" stop-color="#4A6CF7" stop-opacity="0" />
          </linearGradient>
        </defs>
      </svg>
    </div>
  </section>


  
  <a href="javascript:void(0)" class="hidden items-center justify-center bg-primary text-white w-10 h-10 rounded-md fixed bottom-8 right-8 left-auto z-[999] hover:shadow-signUp hover:bg-opacity-80 transition duration-300 ease-in-out back-to-top shadow-md">
    <span class="w-3 h-3 border-t border-l border-white rotate-45 mt-[6px]"></span>
  </a>
  <script defer src="bundle.js"></script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vef91dfe02fce4ee0ad053f6de4f175db1715022073587" integrity="sha512-sDIX0kl85v1Cl5tu4WGLZCpH/dV9OHbA4YlKCuCiMmOQIk4buzoYDZSFj+TvC71mOBLh8CDC/REgE0GX0xcbjA==" data-cf-beacon='{"rayId":"88b1c6871e141b25","r":1,"version":"2024.4.1","token":"9a6015d415bb4773a0bff22543062d3b"}' crossorigin="anonymous"></script>
  <script>
    jQuery(document).ready(function(){
 
	jQuery('#AvanzaModal').on('hidden.bs.modal', function (e) {
	    jQuery(this).removeData('bs.modal');
	    jQuery(this).find('.modal-content').empty();
	})
 
    })
</script>

</body>

</html>