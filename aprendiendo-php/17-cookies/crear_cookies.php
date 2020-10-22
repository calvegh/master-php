<?php 
/*Cookie fiche que se almacena en el ordenar del usuario que visita la web, 
con el fin de recordar datos o rastrear el comportamiento del usuario en la web
*/

//Crea cookie básica
setcookie("migalleta","El valor de mi galleta");

//Cookie con expiración
setcookie("ayear","Valor de mi cookie 365 días",time()+(60*60*24*365));
?>

<a href="ver_cookies.php">Ver las galletas</a>
<br>
<a href="borrar_cookies.php">Eliminar cookies</a>