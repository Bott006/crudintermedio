<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

	<title><?php if (! empty(trim($__env->yieldContent('title')))): ?> <?php echo $__env->yieldContent('title'); ?> | <?php endif; ?> <?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
	 <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body>
    <div id="app">
        

        <main class="py-2">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
    <?php echo \Livewire\Livewire::scripts(); ?>

<script type="text/javascript">
	window.livewire.on('closeModal', () => {
		$('#createDataModal').modal('hide');
	});
</script>
</body>
</html>
<?php /**PATH C:\Users\vicen\Documents\Laravel\crudintermedio\resources\views/layouts/app.blade.php ENDPATH**/ ?>