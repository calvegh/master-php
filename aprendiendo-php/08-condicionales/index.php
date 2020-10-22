<?php

/*
//Condicionales
IF:
    if(condicion){
        intrucciones
    }else{
        otras instrucciones
    }

// OPERADORES DE COMPARACIÓN

== exactamente igual
=== identico, el mismo tipo de dato concreto
!= distinto
<> distinto
!== no identico
< menor que
> mayor que 
<= menor o igual que
>= mayor o igual que


//OPERADORES LOGICOS

&& = and
|| = or 
! = no
and, or
*/
//Ejemplo 1
$color = "verde";

if($color == "rojo"){
    echo "el color es rojo";
}else{
    echo "el color NO es rojo";
}
echo "<br>";

//Ejemplo 2
$year = 2019;
if($year>=2019){
    echo "estamos de 2019 hacia delante";
}else{
    echo "año anterior a 2019";
}

//Ejemplo 3

$nombre = "David Silva";
$edad = 42;
$mayoria_edad = 18;
$ciudad = "Madrid";
$continente = "Asi";

if($edad>=$mayoria_edad){
    echo "<h1>".$nombre." es mayor de edad </h1>";
    if($continente=="Europa"){
        echo "<h2> Y es de".$ciudad."</h2>";
    }else{
        echo "no es europeo";
    }
    
}else{
    echo "<h2>$nombre no es mayor edad</h2>";
}

echo "<br><hr>";
//Ejemplo 4

$dia = 3;
if ($dia ==1){
    echo "Es Lunes";
}elseif($dia ==2){
    echo "Es Martes";
}elseif($dia=3){
    echo "Es Miércoles";
}elseif($dia=4){
    echo "Es jueves";
}elseif($dia=5){
    echo "Es viernes";
}else{
    echo "Es fin de semana";
}
echo "<hr>";

//SWITCH
$dia = 1;
switch($dia){
    case 1:
        echo "LUNES";
    break;
    case 2:
        echo "MARTES";
    break;
    case 3:
        echo "MIÉRCOLES";
    break;
    case 4:
        echo "JUEVES";
    break;
    case 5:
        echo "VIERNES";
    break;
    default:
        echo "FINDESEMANA";
}
echo "<hr>";
//Ejemplo 5

$edad1 = 18;
$edad2 = 64;

$edad_persona = 17;

if($edad_persona>=$edad1 && $edad_persona<=$edad2){
    echo "La persona puede trabajar";
}else{
    echo "No puede trabajar";
}
echo "<hr>";
$pais = "Francia";
if($pais == "Mexico" || $pais == "España" || $pais == "Colombia"){
    echo "En este país se habla español";
}else{
    echo "En este pais no se habla español";
}
echo "<hr>";
//GOTO

goto marca;
echo "<h3>Intrucción 1</h3>";
echo "<h3>Intrucción 2</h3>";
echo "<h3>Intrucción 3</h3>";
echo "<h3>Intrucción 4</h3>";
marca:
echo "<h1>Me he saltado 4 echos</h1>";
?>