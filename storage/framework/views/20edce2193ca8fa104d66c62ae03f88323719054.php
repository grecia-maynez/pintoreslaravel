<nav>
<?php $__env->startSection('navbar'); ?>
    <div id="header">
        <ul class="nav">
            <li><a href="">Inicio</a></li>
            <li><a href="">Pintores</a>
                <ul>
                    <li><a href="<?php echo e(action('EstructurasDeControl@nh')); ?>">Naoto Hattori</a></li>
                    <li><a href="<?php echo e(action('EstructurasDeControl@car')); ?>">Caravaggio</a></li>
                    <li><a href="<?php echo e(action('EstructurasDeControl@rm')); ?>">Rene Magritte</a></li>
                    <li><a href="<?php echo e(action('EstructurasDeControl@v')); ?>">Vergvoktre</a></li>
                    <li><a href="<?php echo e(action('EstructurasDeControl@fk')); ?>">Frida Kahlo</a></li>
                </ul>
            </li>
            <li> <a href="https://mymodernmet.com/es/mejores-pintores-historia/">Recomendaciones</a></li>
            <li><a href="">Otros</a>
            <ul> 
                <li><a href="mailto:gpmayneze@gmail.com">Contacto</a>
                <li><a href="https://culturainquieta.com/es/arte/pintura/item/14107-el-arte-siniestro-oscuro-e-infernal-del-misterioso-artista-ruso-vergvoktre.html">Más Información</a>
            </ul>
            </li>
        </ul>
    </div>
<?php echo $__env->yieldSection(); ?>  
</nav><?php /**PATH C:\laragon\www\repaso\resources\views/includes/navbar.blade.php ENDPATH**/ ?>