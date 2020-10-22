<?php


//Debuguear
$nombre = "Carlos Vega";
var_dump($nombre);
echo "<hr>";

//Fechas
$fecha = date('d-m-Y');
echo $fecha;
echo "<hr>";

//Timestamp
echo time();
echo "<hr>";

//Matematicas
echo "Raiz Cuadrada: ".sqrt(10)."<br>";
echo "Numero Aleatorio: ".rand(10,40)."<br>";
echo "Numero PI: ".pi()."<br>";
echo "Numero redondeado: ".round(7.819234,2);
echo "<hr>";

//Otras funciones generales:
//Tipos
echo gettype($nombre)."<br>";
if(is_string($nombre)){
    echo "Esta variable es string<br>";
}
if(!is_float($nombre)){
    echo "No es un número con decimales<br>";
}

echo "<hr>";

//LIMPIAR espacios
$frase = "      mi     fraseee    eess   ";
var_dump(trim($frase));
echo "<hr>";

//Eliminar variables 
$year = 2019;
unset($year);
var_dump($year);
echo "<hr>";

//Comprobar variable vacia:
$texto = "";
if(empty($texto)){
    echo "La variable texto esta vacia";
}else{
    echo "la variables es $texto";
}
echo "<hr>";

//contar caracterese de un string
$cadena = "12345";
echo strlen($cadena);
echo "<hr>";

//Encontrar caracter
$frase = "La vida es bella";
echo strpos($frase,"bella");
echo "<hr>";

//Reemplazar contenido
$frase = str_replace('bella','fea',$frase);
echo $frase;
echo "<hr>";

//MAYUSCULAS y minusculas:
echo strtolower($frase)."<br>";
echo strtoupper($frase);