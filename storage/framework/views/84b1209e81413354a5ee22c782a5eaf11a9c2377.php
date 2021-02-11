<?php $__env->startSection('title', 'Mangrove Investors'); ?>
<?php $__env->startSection('navbar'); ?>
    ##parent-placeholder-c63e3c1cfa2ff651ad4cfadea3e21265ffcf8ca3##
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12">

            </div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Job Application </h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Web Content</a></li>
                    <li class="breadcrumb-item active">Job Application </li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Job Application List </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="row">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                   Description
                                </th>
                                <th>
                                    Application Date
                                </th>
                                <th>
                                    Attach Document (CV)
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $sl =1;
                            ?>
                            <?php $__currentLoopData = $findaJobSectionList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($sl); ?></td>
                                    <td><?php echo e($item->title); ?></td>
                                    <td><?php echo e($item->email); ?></td>
                                    <td><?php echo e($item->description); ?></td>
                                    <td><?php echo e($item->created_at->format('D M,Y H:i:s')); ?></td>

                                    <td><a href="<?php echo e(asset( 'uploads/file/'.$item->content)); ?>" target="_blank"> Download CV</a></td>

                                </tr>
                                <?php $sl++; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                    </div>

                    <!-- /.card-body -->
                </div>
            </div>
        </div>

        <!-- /.row -->
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\mangrove-hotel\resources\views/admin/cmsfront/findajobs.blade.php ENDPATH**/ ?>