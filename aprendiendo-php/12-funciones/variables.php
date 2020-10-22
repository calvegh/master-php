<?php

/* Variables locales: se definen dentro de una función y no pueden ser usadas fuera de la función
Variables globales: se declaran fuera de una función y estan disponibles fuera y dentro de la función.

*/

//variable global
$frase = "Ni los genios son tan genios, ni los mediocres tan medicores";

echo $frase;

function holaMundo(){
    global $frase;
    echo "<h1>".$frase."</h1>";
    $year = 2019;
    echo "<h1>".$year."</h1>";
}

echo $year;

holaMundo();

echo "<hr>";

//Funciones variables

function buenosDias(){
    return "Hola! Buenos dias:)";
}

function buenasTardes(){
    return "Hey! que tal ha ido la comida?";
}

function buenasNoches(){
    return "Te vas a dormir?";
}

$horario = "buenosDias";
$horario_2 = "buenasTardes";

echo $horario();
echo "<hr>";
echo $horario_2();