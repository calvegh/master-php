<?php
$error = "falta valores.";
if(!empty($_POST['name']) && !empty($_POST['apellido']) && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass'])){
    $error = 'ok';
    $nombre = $_POST['name'];
    $apellidos =$_POST['apellido'];
    $edad = (int) $_POST['edad'];
    $email =$_POST['email'];
    $pass = $_POST['pass'];
    //Validar el nombre
    if(!is_string($nombre) || preg_match('/[0-9]+/',$nombre)){
        $error = 'falta el nombre';
    }
    if(!is_string($apellidos) || preg_match('/[0-9]+/',$apellidos)){
        $error = 'error al validar el apellido';
    }
    if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
        $error = 'error al validar la edad';
    }
    if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = 'error al validar el email';
    }
    if(empty($pass) || strlen($pass)<5){
        $error = 'error al validar la password';
    }
}else{
    $error = "falta valores.";
    
}
/*
var_dump($_POST);
var_dump($error);
die();
*/
if($error != 'ok'){
    header("Location:index.php?error=$error");
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Validación de formularios</title>
    </head>
    <body>
    <h1>Datos validados corectamente</h1>
    <?php if($error=="ok"):?>
    <p><?=$nombre?></p>
    <p><?=$apellidos?></p>
    <p><?=$edad?></p>
    <p><?=$email?></p>
    <?php endif;?>
    </body>
</html>