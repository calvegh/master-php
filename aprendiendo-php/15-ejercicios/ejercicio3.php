<?php

$hola = "";
if(!$hola){
    $hola = "que sucede";
    echo "<strong>".strtoupper($hola)."</strong>";
}else{
    echo "Tiene contenido";
}