<?php

/*
FUNCIONES:
*/

//EJEMPLO:

function muestraNombres(){
    echo "Carlos Vega<br>";
    echo "Adriana Vega<br>";
    echo "Marta Hernández<br>";
    echo "Victoria Oporto<br>";
    echo "<hr>";
}

muestraNombres();
muestraNombres();
muestraNombres();

//EJEMPLO 2:
/*
function tabla($numero){
    echo "<h3>Tabla de multplicar del numero: ".$numero."</h3>";
    for($i = 1; $i<=10; $i++){
        $operacion = $numero * $i;
        echo "$numero x $i = $operacion<br>";
    }
}
if(isset($_GET['numero'])){
    tabla($_GET['numero']);
}else{
    echo "No hay numero para mostrar";
}

for($i=1; $i<=10; $i++){
    tabla($i);
}
*/
//EJEMPLO 3:

function calculadora($numero1,$numero2,$negrita = false){
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;

    $cadena_texto = "";

    if($negrita!=false){
        $cadena_texto.="<h1>";
        
    }
    $cadena_texto.= "Suma: ".$suma."<br>";
    $cadena_texto.= "Resta: ".$resta."<br>";
    $cadena_texto.= "Multiplicacion: ".$multiplicacion."<br>";
    $cadena_texto.= "Division: ".$division."<br>";
    $cadena_texto.= "<hr>";
    if($negrita!=false){
        $cadena_texto.= "</h1>";
    }
    return $cadena_texto;
}

echo calculadora (1,2,true);
echo calculadora (1000,2);

//Ejemplo 4
function getNombre($nombre){
    $texto = "El nombre es: ".$nombre;
    return $texto;
}

function getApellidos($apellidos){
    $texto = "Los apellidos son:  ".$apellidos;
    return $texto;
}

function devuelveNombre($nombre,$apellidos){
    $texto = getNombre($nombre)."<br>".getApellidos($apellidos);
    return $texto;
}

echo devuelveNombre("Carlos", "Vega");
