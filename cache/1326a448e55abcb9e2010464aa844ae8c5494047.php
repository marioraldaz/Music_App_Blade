<?php $__env->startSection('titulo', 'Añadir Nuevo Interprete'); ?>

<?php $__env->startSection('contenido'); ?>
    <form action="" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\mio\Examen\views/viewInsertarInterprete.blade.php ENDPATH**/ ?>