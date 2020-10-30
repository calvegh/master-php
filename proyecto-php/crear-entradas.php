<?php require_once 'includes/redireccion.php';?>
<?php require_once 'includes/header.php';?> 
<?php require_once 'includes/lateral.php';?>


<!-- Caja PRINCIPAL -->
<div id="principal">
    <h1>Crear Entradas</h1>
    <form action="guardar-entradas.php" method="POST">
    <p>Añade nuevas entradas al blog para que los usuarios puedan leerlas y disfrutar de su contenido</p>
    <br>
    <label for="titulo">Titulo:</label>
    <input type="text" name="titulo">
    <?php echo isset($_SESSION['errores_entradas']) ? mostrarError($_SESSION['errores_entradas'],'titulo') : ''; ?>
    <label for="descripcion">Descripcion:</label>
    <textarea name="descripcion"></textarea>
    <?php echo isset($_SESSION['errores_entradas']) ? mostrarError($_SESSION['errores_entradas'],'descripcion') : ''; ?>
    <label for="categoria">Categoria:</label>
    <select name="categoria" id="">
        <?php 
        $categorias = conseguirCategorias($db);
        if(!empty($categorias)):
            while($categoria = pg_fetch_assoc($categorias)):
        ?>
    <option value="<?=$categoria['id']?>">
        <?=$categoria['nombre']?>
    </option>
        <?php
            endwhile;
        endif;
        ?> 
    </select>
    <?php echo isset($_SESSION['errores_entradas']) ? mostrarError($_SESSION['errores_entradas'],'categoria') : ''; ?>
    <input type="submit" value="Guardar">
    </form>
    <?php borrarErrores();?>
</div>

<?php require_once 'includes/pie.php';?>