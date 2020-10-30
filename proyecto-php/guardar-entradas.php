<?php
if(isset($_POST)){
    // Conexión a la base de dato
    require_once 'includes/conexion.php';
    
    $titulo = isset($_POST['titulo']) ? pg_escape_string($db, $_POST['titulo']) : false;
    $descripcion = isset($_POST['descripcion']) ? pg_escape_string($db, $_POST['descripcion']) : false;
    $categoria = isset($_POST['categoria']) ? (int)$_POST['nombre']+1 : false;
    $usuario = $_SESSION['usuario']['id'];
    
    
    // Array de errores:
    $errores = array();

    // Validar datos:
    //Validar campo nombre:
    if(empty($titulo)){
        $errores['titulo'] = "El título no es válido";
    }

    if(empty($descripcion)){
        $errores['descripcion'] = "La descripcion no es válida";
    }

    if(empty($categoria) && !is_numeric($categoria)){
        $errores['categoria'] = "La categoria no es válida";
    }
    if(count($errores)==0){
        $sql = "INSERT INTO entradas VALUES (default, $usuario, $categoria,'$titulo','$descripcion',current_date);";
        $guardar = pg_query($db, $sql);
        header("Location: index.php");
    }else{
        $_SESSION['errores_entradas'] = $errores;
        header("Location: crear-entradas.php");
    }
}
