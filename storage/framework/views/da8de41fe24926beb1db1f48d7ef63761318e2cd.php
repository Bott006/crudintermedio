

<?php $__env->startSection('title', 'Edición'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Dashboard</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h1>Edición</h1>
<form action="/articulos/<?php echo e($articulo->id); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>;
    <div>
        <label for="" class="form-label">Código</label>
        <input id="codigo" name="codigo" type="text" class="form-control" value="<?php echo e($articulo->codigo); ?>" tabindex="1">
    </div>
    <div>
        <label for="" class="form-label">Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" value="<?php echo e($articulo->descripcion); ?>" tabindex="2">
    </div>
    <div>
        <label for="" class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="number" class="form-control" value="<?php echo e($articulo->cantidad); ?>" tabindex="3">
    </div>
    <div>
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" step="any" value="0.00" type="number" value="<?php echo e($articulo->precio); ?>" class="form-control" tabindex="4">
    </div>
    
    <a href="/articulos" tabindex="5">Cancelar</a>
    <button type="submit" tabindex="6">Guardar</a>
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vicen\Documents\Laravel\crudintermedio\resources\views/articulos/edit.blade.php ENDPATH**/ ?>