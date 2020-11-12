
<?php $__env->startSection('title', 'Principal'); ?>
    <?php $__env->startSection('header'); ?>
        <br>
            <h1>Inicio sesion</h1>
        <br>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('navbar'); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
        <form action="<?php echo e(action('EstructurasDeControl@validarlogin')); ?>" method="post">
            <?php echo e(csrf_field()); ?>

            <label for="user">User</label>
            <input type="text" name="user">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password">
            <br>
            <label for="key">Key</label>
            <input type="text" name="key">
            <br>
            <input type="submit" value="submit">
        </form>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('footer'); ?>
        ##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\repaso\resources\views/login.blade.php ENDPATH**/ ?>