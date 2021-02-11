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
                <h1 class="m-0 text-dark">Gallery</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Web Content</a></li>
                    <li class="breadcrumb-item active">Gallery</li>
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
            <div class="col-sm-6">
                <h4 class="m-0 text-dark">Gallery Contents</h4>
                <br/>
            </div>


        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row" style="margin-bottom: 20px; padding-bottom: 20px"; >
                            <div class="col-4">
                                <h2 class="lead">Created Text</h2>
                            </div>
                            <div class="col-8">
                                <form method="post" class="notGallery" action="<?php echo e(route('admin.homeSectionUpdate')); ?>" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="id" value="<?php echo e(isset($gallerySectionList['createdBy']['text']['id'])?$gallerySectionList['createdBy']['text']['id']:''); ?>">
                                    <div class="form-group">
                                        <textarea class="form-control" name="content" rows="3" placeholder="Enter the Text"><?php echo e(isset($gallerySectionList['createdBy']['text']['description'])?$gallerySectionList['createdBy']['text']['description']:''); ?></textarea>
                                    </div>
                                    <input type="hidden" name="parent_section_name" value="gallery">
                                    <input type="hidden" name="sectionName" value="createdBy">
                                    <input type="hidden" name="section_type" value="text">
                                    <input type="hidden" name="content_type" value="text">
                                    <button type="submit" class="btn btn-info btn-150" >Save</button>
                                </form>
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 20px; padding-bottom: 20px"; >
                            <div class="col-4">
                                <h2 class="lead">Upload Image</h2>
                                <p class="cs-text-desc">N.B: Recommended size = 216x98</p>
                            </div>
                            <div class="col-8">
                                <form method="post" class="notGallery" action="<?php echo e(route('admin.homeSectionUpdate')); ?>" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="id_to_display" value="logo">
                                    <input type="hidden" name="id" value="<?php echo e(isset($gallerySectionList['studio']['logo']['id'])?$gallerySectionList['studio']['logo']['id']:''); ?>">
                                    <div class="adminThumb">
                                        <img class="img-fluid" id="logo" src="
                                        <?php echo e(isset($gallerySectionList['studio']['logo']['image'])?$gallerySectionList['studio']['logo']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['studio']['logo']['image']):'':asset( 'backend/img/default/no-image.png')); ?>" alt="User profile picture">
                                    </div>

                                    <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                        <input type="file" name="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                        <input type="hidden" name="parent_section_name" value="gallery">
                                        <input type="hidden" name="sectionName" value="studio">
                                        <input type="hidden" name="section_type" value="image">
                                        <input type="hidden" name="content_type" value="logo">

                                    </div>
                                    <button type="submit" class="btn btn-info btn-150" >Upload Image
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <h2 class="lead">Upload Image</h2>
                                <p class="cs-text-desc">N.B: Recommended size = 146x115 px</p>
                            </div>
                            <div class="col-8">
                                <form method="post" class="notGallery" action="<?php echo e(route('admin.homeSectionUpdate')); ?>" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="id_to_display" value="favicon">
                                    <input type="hidden" name="id" value="<?php echo e(isset($gallerySectionList['3D']['logo']['id'])?$gallerySectionList['3D']['logo']['id']:''); ?>">
                                    <div  class="adminThumb">
                                        <img class="img-fluid" id="favicon" src="<?php echo e(isset($gallerySectionList['3D']['logo']['image'])?$gallerySectionList['3D']['logo']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['3D']['logo']['image']):'':asset( 'backend/img/default/no-image.png')); ?>" alt="User profile picture">
                                    </div>
                                    <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                        <input type="file" name="file" class="custom-file-input" >
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                        <input type="hidden" name="parent_section_name" value="gallery">
                                        <input type="hidden" name="sectionName" value="3D">
                                        <input type="hidden" name="section_type" value="image">
                                        <input type="hidden" name="content_type" value="logo">
                                    </div>
                                    <button type="submit" class="btn btn-info btn-150" >Upload Image </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <br/>
                <br/>
                <h4 class="m-0 text-dark">Gallery Slider Images</h4>
                <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-footer">
                        <a  class="btn btn-warning float-right" href="<?php echo e(route('admin.cms.gallery')); ?>">Add New Image</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <ul class="todo-list ui-sortable" data-widget="todo-list">
                <?php $__currentLoopData = $galleryList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <div class="card card-default">
                        <div class="card-header">
                            <span class="handle ui-sortable-handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                            </span>
                            <span class="text"><?php echo e($item->title); ?></span>
                            <!-- <h3 class="card-title">Select2 (Bootstrap4 Theme)</h3> -->
                            <div class="card-tools">
                                <a type="button" class="btn btn-tool"  href="<?php echo e(route('admin.cms.removeGallery',['id'=>$item->id])); ?>" onclick="return confirm('Are you sure?')"><i class="far fa-trash-alt"></i></a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="display: block;">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="inputName">Image Title:<?php echo e($item->title); ?></label>

                                                </div>
                                                <div class="form-group">
                                                    <label for="inputDescription">Image Description:<?php echo e($item->description); ?></label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="profile-user-img img-fluid" id="gallery_image1" src="<?php echo e(asset('uploads/img/'.$item->content)); ?>" alt="User profile picture">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            <!-- /.row -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

        <!-- /.row -->
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\mangrove-hotel\resources\views/admin/cmsfront/galleryList.blade.php ENDPATH**/ ?>