<?php

//Creo el array
$numeros = array();
for($i=0;$i<=10;$i++){
    $numeros[]=rand(10,40);
}

//Muestro el array
echo "<h1> Recorrer y mostrar</h1>";
foreach($numeros as $numero){
    echo $numero."<br>";
}
echo "<hr>";

//Ordeno el array
echo "<h1> Ordenar y mostrar</h1>";
sort($numeros);
foreach($numeros as $numero){
    echo $numero."<br>";
}
echo "<hr>";

//Muestro su longitud
echo "El array tiene: ".count($numeros)." elementos";
echo "<hr>";

//Busco algun elemento
function search($array,$value){
    $resultado = array_search($value,$array);
    if($resultado!=''){
        $output =  "El valor existe y esta en la posición: ".$resultado;
    }else{
        $output = "El resultado no existe";
    }
    return $output;
}
if(isset($_GET['numero'])){
    echo search($numeros,$_GET['numero']);
}


//Otra forma de hacer las primeras dos formas
function mostrarArray($array,$sort=false){
    $output = "";
    if($sort==true){
        sort($array);
    }
    foreach($array as $numero){
        $output= $output.$numero."<br>";
}
return $output;
}

echo "<h1> Recorrer y mostrar 2</h1>";
echo mostrarArray($numeros);
echo "<h1> Ordenar y mostrar 2</h1>";
echo mostrarArray($numeros,true);