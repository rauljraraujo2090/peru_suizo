<?php

class Auto{

public $carro;
public $color;
public $año;
public $kilometraje;

function arrancar(){
    return "el auto  esta en marcha";


}


function acelerar($kilometraje){

return "el auto acelero a ".$kilometraje."km por hora";
}


}

$result=new Auto();
?>