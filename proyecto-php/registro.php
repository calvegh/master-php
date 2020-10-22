<?php
//Conexion a la base de datos
if(isset($_POST)){
    require_once 'includes/conexion.php';
    
    session_start();

    
    $nombre = isset($_POST['nombre']) ? pg_escape_string($_POST['nombre']):false;
    $apellidos = isset($_POST['apellidos']) ? pg_escape_string($_POST['apellidos']):false;
    $email = isset($_POST['email']) ? pg_escape_string(trim($_POST['email'])):false;
    $password = isset($_POST['password']) ? pg_escape_string($_POST['password']):false;

    // array de errores:
    $errores = array();

    // Validar datos:
    //Validar campo nombre:
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/",$nombre)){
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es valido";
    }
    
    //Validar campo apellidos
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/",$apellidos)){
        $apellido_validado = true;
    }else{
        $apellido_validado = false;
        $errores['apellidos'] = "Los apellidos no son validos";
    }
    //Validar campo email
    if(!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)){
        $email_validado = true;
    }else{
        $email_validado = false;
        $errores['email'] = "El email no es valido";
    }
    //Validar campo password
    if(!empty($password)){
        $password_validado = true;
    }else{
        $passoword_validado = false;
        $errores['password'] = "La contraseña esta vacia";
    }
    $guardar_usuario = false;
    if(count($errores)==0){
        
        $guardar_usuario= true;
        //cifrar la contraseñana
        $opciones = ['cost'=>4,];
        $password_segura = password_hash($password, PASSWORD_BCRYPT, $opciones);
        //INSERTAR USUARIO
        $sql = "INSERT INTO usuarios VALUES(default,'$nombre','$apellidos','$email','$password_segura', CURRENT_DATE)";
        $guardar = pg_query($db,$sql);
        #var_dump($_SESSION['errores']);
        #die();
        if($guardar){
            $_SESSION['completado'] = "El registro se ha completado con exito";
        }else{
            $_SESSION['errores']['general'] = "Fallo al guardar el usuario";
            
        }
    }else{
        $_SESSION['errores'] = $errores;
    }
}
header('Location: index.php');