<?php

//BUCLE WHILE

//EJEMPLO 1
$numero = 0;
while($numero <=100){
    echo $numero;
    if($numero!=100){
        echo ", ";
    }
    $numero++;
}

echo "<hr>";
//EJEMPLO 2

if(isset($_GET['numero'])){
    //Cambiar tipo de dato
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del numero ".$numero."</h1>";

$contador = 0;

while ($contador<=10){
    echo $numero."x".$contador. "= ".($numero*$contador)."<br>";
    $contador++;
}
echo "<hr>";

//DO WHILE
$contador = 1;
$edad = 17;
do{
    echo "Tienes acceso al bar $contador<br>";
    $contador++;
}while($edad>=18 && $contador<=10);