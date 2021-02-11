<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>

    <?php echo $__env->make('admin.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldPushContent('css'); ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <?php $__env->startSection('navbar'); ?>
            <?php echo $__env->yieldSection(); ?>

            <?php echo $__env->make('admin.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <div class="brand-item">
                <a href="index.html">
                    <img src="<?php echo e(asset( 'backend/img/admin-logo.png')); ?>" alt="Mangrove Logo" class="brand-image"
                    style="opacity: .8">
                </a>
            </div>
            <?php echo $__env->make('admin.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </aside>
        <!-- /.sidebar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php echo $__env->make('admin.layouts.flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!-- /.content-wrapper -->
        <?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- ./wrapper -->
    <?php echo $__env->make('admin.layouts.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH /home/vagrant/dev.mangrove-hotel/resources/views/admin/layouts/app.blade.php ENDPATH**/ ?>