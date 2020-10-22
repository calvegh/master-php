<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Imprimir por pantalla - Master en PHP</title>
</head>
<body>
    <h1>Master en PHP -  Carlos Vega</h1>
    <?="Bienvenido a php"?>
    <?php
        //Titular de la sección
        echo "<h3>Listado de videojuegos</h3>";

        /*Esta es una lista de 
        videojuegos
        moderna
        */

        echo "<ul>".
            "<li>"."GTA"."</li>".
            "<li>"."FIFA"."</li>".
            "<li>"."MARIO BROS"."</li>".
            "</ul>";
        //Parrafo explicativo
        echo "<p>Esta es toda"." - "."lista de juegos"."</p>";
    ?>

</body>
</html>