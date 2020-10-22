<?php

//Iniciar Sesion
session_start();

//Variable local
$variable_normal = "Soy una cadena de texto";

//Variable sesion
$_SESSION['variable_persistente'] = "Hola soy una sesión activa";

echo $variable_normal."<br>";
echo $_SESSION['variable_persistente'];


?>