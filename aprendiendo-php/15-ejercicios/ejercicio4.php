<?php
$array = ["hola","chao","quine"];
$string = "que pasa";
$int = 12;
$verdad = true;

if(is_array($array)){
    echo "<h1>El array es un array</h1>";
}
if(is_string($string)){
    echo "<h1>".$string."s</h1>";
}
if(is_integer($int)){
    echo "<h1>".$int."</h1>";
}
if(is_bool($verdad)){
    echo "<h1>El array es un array</h1>";
}
?>