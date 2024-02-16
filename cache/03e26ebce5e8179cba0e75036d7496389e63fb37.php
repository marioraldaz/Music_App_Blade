<?php $__env->startSection('titulo', 'Add New Song'); ?>

<?php $__env->startSection('contenido'); ?>
    <form action="" method="post">
        <label for="titulo">Titulo:</label><br>
        <input type="text" id="titulo" name="titulo"><br>

        <label for="idgenero">Género:</label><br>
        <select id="idgenero" name="idgenero">
            <option value="">Selecciona Género</option>
            <?php $__currentLoopData = $generos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($genero['id']); ?>"><?php echo e($genero['nombre']); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select><br>

        <label for="idinterprete">interprete:</label><br>

        <select id="idinterprete" name="idinterprete">
            <option value="">Selecciona interprete</option>
            <?php $__currentLoopData = $interpretes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $interprete): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($interprete['id']); ?>"><?php echo e($interprete['nombre']); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select><br>

        <input type="submit" name="submit" value="Submit">
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\mio\Examen\views/viewInsertarCancion.blade.php ENDPATH**/ ?>