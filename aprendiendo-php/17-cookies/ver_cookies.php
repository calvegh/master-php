<?php

if(isset($_COOKIE['migalleta'])){
    echo "<H1>".$_COOKIE['migalleta']."</H1>";
}else{
    echo "<h1>No existe las cookies</h1>";
}

if(isset($_COOKIE['ayear'])){
    echo "<H1>".$_COOKIE['ayear']."</H1>";
}else{
    echo "<h1>No existe las cookies</h1>";
}
?>
<a href="ver_cookies.php">Ver las galletas</a>
<br>
<a href="borrar_cookies.php">Eliminar cookies</a>
