<?php

//FOR

$resultado = 0;

for($i = 0; $i<=100; $i++){
    if($resultado ==45){
        echo "no se puede mostrar";
    break;
    }
    $resultado += $i;
    echo "<p>".$resultado."</p>";
    
}
echo "<h1> El resultado es: $resultado </br>"; 
?>