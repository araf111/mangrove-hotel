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
                        <h3 class="card-title">Login Section</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="row">
                        <div class="col-md-6">
                        <form method="post" class="loginImage" action="<?php echo e(route('admin.homeSectionUpdate')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id_to_display" value="login_shareHolderLogo">
                            <input type="hidden" name="id" value="<?php echo e($loginSectionList['shareHolderbanner']['image1']['id']); ?>">
                                <div >
                                    <div class="card-body">
                                        <div class="text-center mb-4">
                                            <img class="profile-user-img img-fluid" id="login_shareHolderLogo" src="<?php echo e($loginSectionList['shareHolderbanner']['image1']['image']!=''?asset('uploads/img/'.$loginSectionList['shareHolderbanner']['image1']['image']):asset( 'backend/img/photo1.png')); ?>" alt="User profile picture">

                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose Info Image (.jpg)</label>
                                                    <input type="hidden" name="parent_section_name" value="login">
                                                    <input type="hidden" name="sectionName" value="shareHolderbanner">
                                                    <input type="hidden" name="section_type" value="image">
                                                    <input type="hidden" name="content_type" value="image1">
                                                </div>
                                                <div class="input-group-append">
                                                    <button class="input-group-text" type="submit">Upload</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
                                            <textarea class="form-control" rows="3" placeholder="Enter the Text"></textarea>
                                        </div> -->
                                    </div>
                                </div>
                        </form>
                        </div>

                        <div class="col-md-6">
                        <form method="post" class="loginImage" action="<?php echo e(route('admin.homeSectionUpdate')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id_to_display" value="login_rightSideImage">
                            <input type="hidden" name="id" value="<?php echo e($loginSectionList['rightsidebanner']['image1']['id']); ?>">
                                <div >
                                    <div class="card-body">
                                        <div class="text-center mb-4">
                                            <img class="profile-user-img img-fluid" id="login_rightSideImage" src="<?php echo e($loginSectionList['rightsidebanner']['image1']['image']!=''?asset('uploads/img/'.$loginSectionList['rightsidebanner']['image1']['image']):asset( 'backend/img/photo1.png')); ?>" alt="User profile picture">
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file"  name="file"  class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose Banner Image (.jpg)</label>
                                                    <input type="hidden" name="parent_section_name" value="login">
                                                    <input type="hidden" name="sectionName" value="rightsidebanner">
                                                    <input type="hidden" name="section_type" value="image">
                                                    <input type="hidden" name="content_type" value="image1">
                                                </div>
                                                <div class="input-group-append">
                                                    <button class="input-group-text"  type="submit">Upload</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
                                            <textarea class="form-control" rows="3" placeholder="Enter the Text"></textarea>
                                        </div> -->
                                    </div>
                                </div>
                        </form>
                        </div>
                        </div>

                    <div class="row">
                        <div class="col-md-6">
                            <form method="post" class="loginImage" action="<?php echo e(route('admin.homeSectionUpdate')); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id_to_display" value="login_shareHolderLogo">
                                <input type="hidden" name="id" value="<?php echo e($loginSectionList['shareHolderbanner']['image1']['id']); ?>">
                                <div >
                                    <div class="card-body">

                                        <div class="form-group">
                                            <textarea class="form-control" name="content" placeholder="Enter Login label"><?php echo e(isset($loginSectionList['loginLabel']['label']['content'])?$loginSectionList['loginLabel']['label']['content']:''); ?></textarea>
                                            <input type="hidden" name="parent_section_name" value="login">
                                            <input type="hidden" name="sectionName" value="loginLabel">
                                            <input type="hidden" name="section_type" value="content">
                                            <input type="hidden" name="content_type" value="label">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-info float-right" type="submit">save</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-6">
                            <form method="post" class="loginImage" action="<?php echo e(route('admin.homeSectionUpdate')); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id_to_display" value="login_shareHolderLogo">
                                <input type="hidden" name="id" value="<?php echo e($loginSectionList['shareHolderbanner']['image1']['id']); ?>">
                                <div >
                                    <div class="card-body">
                                        <div class="form-group">
                                            <textarea class="form-control" name="content"  placeholder="Enter Availale Features List"><?php echo e(isset($loginSectionList['loginFeatues']['features']['content'])?$loginSectionList['loginFeatues']['features']['content']:''); ?></textarea>
                                            <input type="hidden" name="parent_section_name" value="login">
                                            <input type="hidden" name="sectionName" value="loginFeatues">
                                            <input type="hidden" name="section_type" value="content">
                                            <input type="hidden" name="content_type" value="features">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-info float-right" type="submit">save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\mangrove-hotel\resources\views/admin/cmsfront/login.blade.php ENDPATH**/ ?>