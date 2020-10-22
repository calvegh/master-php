<?php
echo "<h1>Ejercicio 4!</h1>";

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    $suma = $numero1+$numero2;
    $resta = $numero1-$numero2;
    echo '<h2>La suma entre '.$numero1.' y '.$numero2." es ".$suma.'<h2>';
    echo '<h2>La resta entre '.$numero1.' y '.$numero2." es ".$resta.'<h2>';
    echo '<h2>El multiplo entre '.$numero1.' y '.$numero2." es ".($numero1*$numero2).'<h2>';
    echo '<h2>La división entre '.$numero1.' y '.$numero2." es ".($numero1/$numero2).'<h2>';
    echo '<h2>El resto entre '.$numero1.' y '.$numero2." es ".($numero1%$numero2).'<h2>';


}else{
    echo "<h1>Introduce los números correctamente</h1>";
}
