<?php require_once 'includes/redireccion.php';?>
<?php require_once 'includes/header.php';?> 
<?php require_once 'includes/lateral.php';?>


<!-- Caja PRINCIPAL -->
<div id="principal">
    <h1>Crear Categoria</h1>
    <form action="guardar-categoria.php" method="POST">
    <p>Añade nuevas categorias al blog para que los usuarios puedad usarlas al crear sus entradas</p>
    <br>
    <label for="nombre">Nombre de la categoria</label>
    <input type="text" name="nombre">
    <input type="submit" value="Guardar">
    </form>
</div>

<?php require_once 'includes/pie.php';?>