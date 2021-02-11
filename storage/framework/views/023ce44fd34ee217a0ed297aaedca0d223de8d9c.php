<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Mangrove')); ?></title>
    <link rel="icon" href="<?php echo e(asset('images/favicon.ico')); ?> ">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="user-scalable=no, width=device-width, target-densityDpi=device-dpi" />
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="<?php echo e(asset('front/css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('publicationsPath/css/style.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldPushContent('css'); ?>
</head>
<body style="overflow: auto">
<div id="app">
    <div class="main-menu d-flex justify-content-between flex-wrap align-items-center">
        <div class="mobile-menu w-100 justify-content-between align-items-center">
            <h3 class="invest-toggle"><span>Investment</span></h3>
            <a class="openclose" href="javascript:;">MENU <i></i></a>
        </div>
        <div class="white-logo" data-menuanchor="banner">
            <a href="<?php echo url('/');?>#banner"><img src="../images/logo-w.png" alt=""></a>
        </div>

        <ul id="menu">
            <li class="d-lg-none" data-menuanchor="Overview">
                <a class="link-1" href="<?php echo url('/');?>#banner">Home</a>
                <span></span>
            </li>
            <li data-menuanchor="Overview">
                <a class="link-1" href="<?php echo url('/');?>#Overview">Overview</a>
                <span></span>
            </li>
            <li data-menuanchor="Modernliving">
                <a class="link-2" href="<?php echo url('/');?>#Modernliving">Modernliving</a>
                <span></span>
            </li>
            <li data-menuanchor="Gallery">
                <a class="link-3" href="<?php echo url('/');?>#Gallery">Gallery</a>
                <span></span>
            </li>
            <li data-menuanchor="Map">
                <a class="link-4" href="<?php echo url('/');?>#Map">Map</a>
                <span></span>
            </li>
            <li data-menuanchor="Login">
                <a class="link-5" href="<?php echo url('/');?>#Login">Login</a>
                <span></span>
            </li>
            <li data-menuanchor="contact_us">
                <a class="link-6" href="<?php echo url('/');?>#contact_us">Contact us</a>
                <span></span>
            </li>
        </ul>
    </div> <!-- header menu-->

    <header class="header">
        <div class="header-icon-1">
            <img src="<?php echo e(asset('images/share.png')); ?>">
            <div class="social-link">
                <a class="facebook" href="https://www.facebook.com/MangroveHRL"><i class="fab fa-facebook-square"></i></a>
                <a class="youtube" href="https://www.youtube.com/channel/UCgfmo-nssj3VmYsSSJWqhIA?view_as=subscriber"><i class="fab fa-youtube"></i></a>
                <a class="instagram" href="https://www.instagram.com/mangroveHRL"><i class="fab fa-instagram-square"></i></a>
                <a class="twitter" href="https://twitter.com/MangroveHRL"><i class="fab fa-twitter"></i></a>
                <a class="linkedin" href="https://www.linkedin.com/company/mangrove-hotel-and-resort-ltd/"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>



        <div class="invesment">
            <a href="<?php echo e(route('investment')); ?>"><span>investment</span></a>
        </div>

        <!-- <a class="header-icon-2" href="#"></a> -->
        <div class="header-icon-1 header-icon-2">
            <img src="<?php echo e(asset('images/phone.png')); ?>">
            <div class="social-link">
                <a href="#"><i>+88 01988444555</i></a>
            </div>
        </div>

    </header>

    <div id="pagepiling">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

</div>

<script src="<?php echo e(asset('front/js/app.js')); ?> "></script>

<?php echo $__env->yieldPushContent('script'); ?>
</body>
</html>
<?php /**PATH /home/vagrant/sites/dev.mangrove-hotel/resources/views/front/layouts/publication.blade.php ENDPATH**/ ?>