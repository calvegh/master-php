<?php require_once 'includes/header.php';?> 
<?php require_once 'includes/lateral.php';?>
    <!-- Caja Principal -->
    <div id ="principal">
            <h1>Ultimas Entradas</h1>
            <?php
                $entradas = conseguirUltimasEntradas($db);
                if(!empty($entradas)):
                    while($entrada = pg_fetch_assoc($entradas)):
                        ?>
                        <article class="entrada">
                        <a href="">
                            <h2><?=$entrada['titulo']?></h2>
                            <span class='fecha'><?=$entrada['categoria'].' | '.$entrada['fecha']?></span>
                            <p>
                                <?=substr($entrada['descripcion'],0,180)."..."?>
                            </p>
                        </a>
                    </article>
            <?php
                    endwhile;
                endif;
            ?>
           
            <div id="ver-todas">
            <a href="">Ver todas las entradas</a>
        </div>
        </div><!--fin principal-->
        
    <?php require_once 'includes/pie.php';?>