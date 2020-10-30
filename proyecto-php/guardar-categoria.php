<?php
if(isset($_POST)){
    // Conexión a la base de dato
    require_once 'includes/conexion.php';
    
    $nombre = isset($_POST['nombre']) ? pg_escape_string($db, $_POST['nombre']) : false;

    // Array de errores:
    $errores = array();

    // Validar datos:
    //Validar campo nombre:
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/",$nombre)){
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es valido";
    }

    if(count($errores)==0){
        $sql = "INSERT INTO categorias VALUES (default,'$nombre');";
        $guardar = pg_query($db, $sql);
    }
}
header("Location: index.php");