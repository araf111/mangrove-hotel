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
                <h1 class="m-0 text-dark">Publication</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Web Content</a></li>
                    <li class="breadcrumb-item active">Publication</li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content-header --><!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12">

            </div>
        </div>
        <form method="post" class="gallery" action="<?php echo e(route('admin.homeSectionUpdate')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
                <div class="card-body">
                    <ul class="todo-list ui-sortable" data-widget="todo-list">
                        <li>
                            <div class="card card-default">
                                <div class="card-header">
                                    <span class="handle ui-sortable-handle">
                                        <i class="fas fa-ellipsis-v"></i>
                                        <i class="fas fa-ellipsis-v"></i>
                                    </span>
                                    <span class="text">Publication <?php echo e($galleryCount); ?></span>

                                </div>
                                <!-- /.card-header -->
                                <div class="card-body" style="display: block;">

                                        <input type="hidden" name="id_to_display" value="gallery_image">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="inputName"> Title</label>
                                                            <input type="text" id="inputName" name="title" placeholder="Enter title" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputDescription"> Description</label>
                                                            <textarea id="inputDescription" name="description" placeholder="Enter description" class="form-control" rows="4"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card-body">
                                                        <div class="text-center">
                                                            <img class="profile-user-img img-fluid" id="gallery_image" src="<?php echo e(asset( 'backend/img/photo1.png')); ?>" alt="User profile picture">
                                                        </div>
                                                            <div class="card-body">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="custom-file">
                                                                            <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                                                                            <label class="custom-file-label" for="exampleInputFile">Choose Image (.jpg)</label>
                                                                            <input type="hidden" name="parent_section_name" value="publicationBlog">
                                                                            <input type="hidden" name="sectionName" value="publication<?php echo e($galleryCount); ?>">
                                                                            <input type="hidden" name="section_type" value="image">
                                                                            <input type="hidden" name="content_type" value="publication">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /.card-body -->

                                                    </div>
                                                </div>
                                            </div>

                                    <!-- /.row -->
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right">Save </button>
                            </div>
                        </div>
                    </div>
                </div>

        </form>
        <!-- /.row -->
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/sites/dev.mangrove-hotel/resources/views/admin/cmsfront/publication.blade.php ENDPATH**/ ?>