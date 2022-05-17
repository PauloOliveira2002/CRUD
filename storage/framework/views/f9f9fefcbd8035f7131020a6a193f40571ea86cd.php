<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('styles'); ?>

</head>
<body>

<?php $__env->startComponent('master.header'); ?>
<?php if (isset($__componentOriginal661375f12d1c5a73f2f163e0562459069f6d7e6e)): ?>
<?php $component = $__componentOriginal661375f12d1c5a73f2f163e0562459069f6d7e6e; ?>
<?php unset($__componentOriginal661375f12d1c5a73f2f163e0562459069f6d7e6e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<main class="shadow rounded">
    <?php echo $__env->yieldContent('content'); ?>
</main>

<?php $__env->startComponent('master.footer'); ?>
<?php if (isset($__componentOriginald05ce9d8d01af187aa2403d4e02ae189359a481e)): ?>
<?php $component = $__componentOriginald05ce9d8d01af187aa2403d4e02ae189359a481e; ?>
<?php unset($__componentOriginald05ce9d8d01af187aa2403d4e02ae189359a481e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<!-- Scripts -->
<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
<?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>

<?php /**PATH C:\Users\Paulo\Desktop\curso\laravel\exercicio_reformados\resources\views/master/main.blade.php ENDPATH**/ ?>