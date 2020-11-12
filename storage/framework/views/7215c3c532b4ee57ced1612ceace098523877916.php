
<?php $__env->startSection('title', 'inicio'); ?>
    <?php $__env->startSection('header'); ?>
        <br>
            <h1>Pagina principal</h1>
        <br>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('navbar'); ?>
    <div>
    <table >
        <tr>
            <td> <a href="<?php echo e(action('EstructurasDeControl@nh')); ?>"><img src="../images/nhinicio.png" alt="" class="c"></a></td>
            <td></td>
            <td><a href="<?php echo e(action('EstructurasDeControl@car')); ?>"><img src="../images/cinicio.png" alt="" class="c"></a></td>
            <td><a href="<?php echo e(action('EstructurasDeControl@rm')); ?>"><img src="../images/rminicio.png" alt="" class="c"></a></td>
            <td><a href="<?php echo e(action('EstructurasDeControl@v')); ?>"><img src="../images/vinicio.png" alt="" class="c"></a></td>
            <td><a href="<?php echo e(action('EstructurasDeControl@fk')); ?>"><img src="../images/fkinicio.png" alt="" class="c"></a></ul></td>
        </tr>
    </table>
    </div>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('footer'); ?>
        ##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\repaso\resources\views/inicio.blade.php ENDPATH**/ ?>