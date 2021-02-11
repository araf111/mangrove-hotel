<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Mangrove')); ?></title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('front/css/front.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldPushContent('css'); ?>
</head>
<body class="invest-body">
    <header class="invest-header d-flex justify-content-between">
        <a href="/"><img src="images/logo-w.png" alt=""></a>
        <div class="d-flex align-items-start">
            <a class="policy-btn mr-2" href="/registration">Register</a>
        </div>
    </header>

    <div id="app">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('front/js/investor.js')); ?>"></script>
 
</body>
</html>
<?php /**PATH /home/vagrant/dev.mangrove-hotel/resources/views/front/layouts/front.blade.php ENDPATH**/ ?>