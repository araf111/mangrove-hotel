<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <?php echo $__env->yieldPushContent('css'); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->

        <!-- /.navbar -->

        <!-- /.sidebar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!-- /.content-wrapper -->

    </div>

    <!-- ./wrapper -->
    <?php echo $__env->make('admin.layouts.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH /home/vagrant/sites/dev.mangrove-hotel/resources/views/admin/layouts/pdf.blade.php ENDPATH**/ ?>