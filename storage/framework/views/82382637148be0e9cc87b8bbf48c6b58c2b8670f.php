
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
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Login</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Web Content</a></li>
                    <li class="breadcrumb-item active">Login</li>
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
                        <h3 class="card-title">Login Banner</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="text-center mb-4">
                                    <img class="profile-user-img img-fluid" src="<?php echo e(asset( 'backend/img/photo1.png')); ?>" alt="User profile picture">
                                    <button type="button" class="btn img-bordered-sm" data-toggle="tooltip" title="Remove">
                                          <i class="far fa-trash-alt"></i></button>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose Info Image (.jpg)</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <textarea class="form-control" rows="3" placeholder="Enter the Text"></textarea>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="text-center mb-4">
                                    <img class="profile-user-img img-fluid" src="<?php echo e(asset( 'backend/img/photo1.png')); ?>" alt="User profile picture">
                                    <button type="button" class="btn img-bordered-sm" data-toggle="tooltip" title="Remove">
                                          <i class="far fa-trash-alt"></i></button>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose Banner Image (.jpg)</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <textarea class="form-control" rows="3" placeholder="Enter the Text"></textarea>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary float-right">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mangrovehotel/dev.mangrove-hotel.com/resources/views/admin/cmsfront/login.blade.php ENDPATH**/ ?>