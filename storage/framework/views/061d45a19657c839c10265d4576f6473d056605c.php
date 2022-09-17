<?php $__env->startSection('title', 'Pacientes'); ?>
<?php $__env->startSection('content_header'); ?>
<h1>INDEX Pacientes</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('pacientes')->html();
} elseif ($_instance->childHasBeenRendered('xZEk54E')) {
    $componentId = $_instance->getRenderedChildComponentId('xZEk54E');
    $componentTag = $_instance->getRenderedChildComponentTagName('xZEk54E');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('xZEk54E');
} else {
    $response = \Livewire\Livewire::mount('pacientes');
    $html = $response->html();
    $_instance->logRenderedChild('xZEk54E', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
        

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vicen\Documents\Laravel\crudintermedio\resources\views/livewire/pacientes/index.blade.php ENDPATH**/ ?>