<?php
// Iniciar la sesión y la conexion a db
require_once 'includes/conexion.php';


// Borrar error antiguo

// Recoger los datos del formulario
if(isset($_POST)){
    if(isset($_SESSION['error_login'])){
        $_SESSION['error_login'] = null;
        session_unset($_SESSION['error_login']); #Esto no esta funcionando
    }
    //Recojo datos del formulario
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    // Consulta para comprobar las credenciales
    $sql = "SELECT * FROM usuarios where email = '$email'";
    $login = pg_query($db,$sql);
    
    if($login && pg_num_rows($login)==1){
        $usuario = pg_fetch_assoc($login);
       
        // Comprobar la contraseñan
        $verify = password_verify($password,$usuario['password']);
        if($verify){
            // Utilizar una sesión para guarda los datos del usuario loguead
            $_SESSION['usuario'] = $usuario;
            
            
        }
        // Si algo falla enviar una sesión con el fallo
        else{
            $_SESSION['error_login'] = "Login incorrecto";
        }

    }else{
        $_SESSION['error_login'] = "Login incorrecto";
    }

}
// Rederigir al index.php
header('Location: index.php');