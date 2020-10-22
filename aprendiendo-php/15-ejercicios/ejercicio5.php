<?php

$tabla = array(
    "ACCION" => array("GTA 5", "Call of Duty", "PUGB"),
    "AVENTURA" => array("Assasins Creed", "Crassh Badicoot", "Prince of Persia"),
    "DEPORTES" => array("FIFA","PES","MOTO GP")
);

$categorias = array_keys($tabla);
?>

<table border="1">
    <?php require_once('filas/columnas.php') ?>
    <?php require_once('filas/fila1.php') ?>
    <?php require_once('filas/fila2.php') ?>
    <?php require_once('filas/fila3.php') ?>

</table>