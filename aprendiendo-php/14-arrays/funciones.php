<?php
$cantantes = ['2pac','zoe','drake','Corey Taylor'];
$numeros = [1,2,6,4,89,2];


//Añadir elementos array
array_push($cantantes,"Roger Water");
$cantantes[]="Miguel";
$cantantes[]="Jorge Gonzalez";

//Ordenar elementoss array
arsort($cantantes); //ordean por sentido alfabetico inverso, no es necesario redefinir la función o agregar un inplace
asort($cantantes); //ordena por sentido alfabetico
sort($numeros);

//Eliminar elementos array:
#array_pop($cantantes);
#unset($cantantes[3]);
echo "<hr>";

//Aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];
echo "<hr>";

//dar la vuelta el array
var_dump(array_reverse($numeros));
echo "<hr>";

//buscar dentro de un array
$resultados = array_search('Miguel',$cantantes);
var_dump($resultados);
echo $cantantes[$resultados];
echo "<hr>";

//Contar
echo count($cantantes);