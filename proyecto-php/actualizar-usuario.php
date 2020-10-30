<?php
//Conexion a la base de datos
if(isset($_POST)){
    require_once 'includes/conexion.php';
    
    // Recoger los valores del formulario de actualización
    $nombre = isset($_POST['nombre']) ? pg_escape_string($_POST['nombre']):false;
    $apellidos = isset($_POST['apellidos']) ? pg_escape_string($_POST['apellidos']):false;
    $email = isset($_POST['email']) ? pg_escape_string(trim($_POST['email'])):false;
    
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
    $guardar_usuario = false;
    if(count($errores)==0){
        $usuario = $_SESSION['usuario'];
        $guardar_usuario= true;
        // COMPROBAR SI EL EMAIL YA EXISTE
        $sql = "SELECT id,email FROM usuarios WHERE email = '$email'">
        $isset_email = pg_query($db, $sql);
        $isset_user = pg_fetch_assoc($isset_email);
        if($isset_user['id']==$usuario['id'] || empty($isset_user)){
            //ACTUALIZAR USUARIO
            $usuario = $_SESSION['usuario'];

            $sql = "UPDATE usuarios SET ".
                "nombre = '$nombre',".
                "apellidos = '$apellidos',".
                "email = '$email' ".
                "WHERE id = ".$usuario['id'] ;
            $guardar = pg_query($db,$sql);

            if($guardar){
                $_SESSION['usuario']['nombre'] = $nombre;
                $_SESSION['usuario']['apellidos'] = $apellidos;
                $_SESSION['usuario']['email'] = $email;
                $_SESSION['completado'] = "Tus datos se han actualizado con exito";
            }else{
                $_SESSION['errores']['general'] = "Fallo al actualizar el usuario";
                
            }
        }else{
            $_SESSION['errores']['general'] = "El usuario ya existe!";
        }
    }else{
        $_SESSION['errores'] = $errores;
    }
}
header('Location: mis-datos.php');