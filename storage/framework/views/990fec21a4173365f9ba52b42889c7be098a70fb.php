
<?php $__env->startSection('title', 'Mangrove Dashboard'); ?>
<?php $__env->startSection('script'); ?>
    ##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo e(asset( 'backend/lib/jqvmap/jqvmap.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('navbar'); ?>
    ##parent-placeholder-c63e3c1cfa2ff651ad4cfadea3e21265ffcf8ca3##
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="card">
                </div>
                <!--/.direct-chat -->

                <!-- TO DO List -->
                <div class="card">
                </div>
                <!-- /.card -->
            </section>
            <!-- /.Left col -->

            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo e(asset( 'backend/js/pages/dashboard.js')); ?>"></script>
    <!-- ChartJS -->
    <script src="<?php echo e(asset( 'backend/lib/chart.js/Chart.min.js')); ?>"></script>
    <!-- Sparkline -->
    <script src="<?php echo e(asset( 'backend/lib/sparklines/sparkline.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/sites/dev.mangrove-hotel/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>