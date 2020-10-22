<?php
if($_COOKIE["migalleta"]){
    #unset($_COOKIE["migalleta"]);
    setcookie("migalleta","",time()-100);
    echo "eliminada correctamente en teoria";
}else{
    echo $_COOKIE['migalleta'];
}

header('Location:ver_cookies.php');
?>
<a href="ver_cookies.php">Ver las galletas</a>
<br>
<a href="borrar_cookies.php">Eliminar cookies</a>
