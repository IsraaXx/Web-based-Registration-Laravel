<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title', 'Default Title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/Signing.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
    <?php echo $__env->yieldContent('head-extra'); ?>
</head>
<body>
<?php echo $__env->make('header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<div style="height: 100px;"></div>

<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</body>
</html>
<?php /**PATH C:\Users\user\Downloads\Web-Laravel\IS333_Web-based-laravel_User-Registration-webpage\resources\views/master.blade.php ENDPATH**/ ?>