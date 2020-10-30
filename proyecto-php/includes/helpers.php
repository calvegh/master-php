<?php
function mostrarError($errores,$campo){
    $alerta = '';
    if(isset($errores[$campo]) && !empty($campo)){
        $alerta = "<div class= 'alerta alerta-error'>".$errores[$campo]."</div>";
    }
    return $alerta;
}

function borrarErrores(){
    $borrado = false;
    if(isset($_SESSION['errores'])){
        $_SESSION['errores'] = null;
        
    }
    if(isset($_SESSION['completado'])){
        $_SESSION['completado'] = null;
        $borrado = true;
    }
    if(isset($_SESSION['errores_entradas'])){
        $_SESSION['errores_entradas'] = null;
        $borrado = true;
    }
    return $borrado;
}

function conseguirCategorias($conexion){
    $sql = "SELECT * FROM categorias ORDER BY id ASC";
    $categorias = pg_query($conexion,$sql);
    $result = array();
    if($categorias && pg_num_rows($categorias)>=1){
        $result = $categorias;
    }
    return $result;
}

function conseguirUltimasEntradas($conexion){
    $sql = "SELECT e.*,c.nombre as categoria FROM entradas e ".
    "INNER JOIN categorias c ON e.categoria_id = c.id ".
    "ORDER BY e.id DESC LIMIT 4";
    $entradas = pg_query($conexion,$sql);
    $result = array();
    if($entradas && pg_num_rows($entradas)){
        $result = $entradas;
    }
    return $entradas;

}