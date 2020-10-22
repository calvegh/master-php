<!DOCTYPE html>
<html lang="s">
    <head>
        <meta charset="UTF-8">
        <title>Validación de formularios</title>
    </head>
    <body>
        <h1>Validar formularios en php</h1>

        <?php
            if(isset($_GET['error'])){
                $error = $_GET['error'];
                if($error == 'falta el nombre'){
                    echo '<strong style="color:red">Introduce bien el nombre</strong>';
                }
                if($error == 'error al validar el apellido'){
                    echo '<strong style="color:red">Los apellidos no son correctos';
                }
                if($error == 'error al validar la edad'){
                    echo '<strong style="color:red">Introduce una edad valida</strong>';
                }
                if($error == 'error al validar el email'){
                    echo '<strong style="color:red">Introduce un email válido</strong>';
                }
                if($error == 'error al validar la password'){
                    echo '<strong style="color:red">Introduce una contraseña con más de 5 caracteres</strong>';
                }
            }
        ?>

        <form method="POST" action="procesar_formulario.php">
            <label for="name">Nombre</label><br>
            <input type="text" name="name" ><br>

            <label for="apellido">Apellidos</label><br>
            <input type="text" name="apellido" ><br>

            <label for="edad">Edad</label><br>
            <input type="number" name="edad"><br>

            <label for="email">Email</label><br>
            <input type="text" name="email"><br>

            <label for="pass">Contraseña</label><br>
            <input type="password" name="pass"><br>

            <input type="submit" value="Enviar" required="required"><br>
        </form>
    </body>
</html>