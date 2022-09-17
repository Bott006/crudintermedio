<?php $__env->startSection('title', 'Facturación'); ?>
<?php $__env->startSection('content_header'); ?>
<h1>INDEX Pacientes</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('facturas')->html();
} elseif ($_instance->childHasBeenRendered('eCgRjPA')) {
    $componentId = $_instance->getRenderedChildComponentId('eCgRjPA');
    $componentTag = $_instance->getRenderedChildComponentTagName('eCgRjPA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('eCgRjPA');
} else {
    $response = \Livewire\Livewire::mount('facturas');
    $html = $response->html();
    $_instance->logRenderedChild('eCgRjPA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
        

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vicen\Documents\Laravel\crudintermedio\resources\views/livewire/facturas/index.blade.php ENDPATH**/ ?>