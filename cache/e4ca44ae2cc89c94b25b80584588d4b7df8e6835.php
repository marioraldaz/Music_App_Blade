<?php $__env->startSection('titulo', 'Add New Song'); ?>

<?php $__env->startSection('contenido'); ?>
    <form action="" method="post">
        <label for="nombre">Name:</label><br>
        <input type="text" id="titulo" name="nombre" /><br>

        <input type="submit" name="submit" value="Submit" />
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\mio\Examen\views/viewInsertarGenero.blade.php ENDPATH**/ ?>