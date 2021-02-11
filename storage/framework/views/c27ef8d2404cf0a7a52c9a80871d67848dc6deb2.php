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
                <h1 class="m-0 text-dark">Home Section</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Web Content</a></li>
                    <li class="breadcrumb-item active">Overview</li>
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
        <div class="card card-primary card-outline">
            <div class="card-body">

                <div class="row">
                    <div class="col-5 col-sm-3">
                        <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="vert-tabs-overview-1-tab" data-toggle="pill" href="#vert-tabs-overview-1" role="tab" aria-controls="vert-tabs-overview-1" aria-selected="true">Top Left Banner</a>
                            <a class="nav-link" id="vert-tabs-overview-2-tab" data-toggle="pill" href="#vert-tabs-overview-2" role="tab" aria-controls="vert-tabs-overview-2" aria-selected="false">Top Right Banner</a>
                            <a class="nav-link" id="vert-tabs-overview-3-tab" data-toggle="pill" href="#vert-tabs-overview-3" role="tab" aria-controls="vert-tabs-overview-3" aria-selected="false">Bottom Left Banner</a>
                            <a class="nav-link" id="vert-tabs-overview-4-tab" data-toggle="pill" href="#vert-tabs-overview-4" role="tab" aria-controls="vert-tabs-overview-4" aria-selected="false">Bottom Right Banner</a>
                            <a class="nav-link" id="vert-tabs-overview-5-tab" data-toggle="pill" href="#vert-tabs-overview-5" role="tab" aria-controls="vert-tabs-overview-5" aria-selected="false">Cover Story</a>
                        </div>
                    </div>
                    <div class="col-7 col-sm-9">
                        <div class="tab-content" id="vert-tabs-tabContent">

                            <div class="tab-pane text-left fade show active" id="vert-tabs-overview-1" role="tabpanel" aria-labelledby="vert-tabs-overview-1-tab">
                              <div class="card-body">
                                 <div class="row" style="margin-bottom: 20px; padding-bottom: 20px"; >
                                    <div class="col-4">
                                        <h2 class="lead">Upload Banner</h2>
                                        <p class="cs-text-desc">N.B: Recommended size = </p>
                                    </div>
                                    <div class="col-8">
                                        <form method="post" class="overview" action="<?php echo e(route('admin.homeSectionUpdate')); ?>" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="id_to_display" value="overview_topleftbanner">
                                            <input type="hidden" name="id" value="<?php echo e($overviewSectionList['Top left banner']['image1']['id']); ?>">
                                            <div class="adminThumb">
                                                <img class="img-fluid" id="overview_topleftbanner" src="<?php echo e($overviewSectionList['Top left banner']['image1']['image']!=''?asset('uploads/img/'.$overviewSectionList['Top left banner']['image1']['image']):asset( 'backend/img/default/no-image.png')); ?>" alt="User profile picture">
                                            </div>
                                            <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                <input type="file" name="file" class="custom-file-input" >
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                <input type="hidden" name="parent_section_name" value="overview">
                                                <input type="hidden" name="sectionName" value="Top left banner">
                                                <input type="hidden" name="section_type" value="image">
                                                <input type="hidden" name="content_type" value="image1">

                                            </div>
                                            <button type="submit" class="btn btn-info btn-150" >Upload Banner
                                            </button>
                                        </form>
                                    </div>
                                 </div>
                              </div>
                            </div>

                            <div class="tab-pane fade" id="vert-tabs-overview-2" role="tabpanel" aria-labelledby="vert-tabs-overview-2-tab">
                              <div class="card-body">
                                 <div class="row" style="margin-bottom: 20px; padding-bottom: 20px"; >
                                    <div class="col-4">
                                        <h2 class="lead">Upload Banner</h2>
                                        <p class="cs-text-desc">N.B: Recommended size = </p>
                                    </div>
                                    <div class="col-8">
                                        <form method="post" class="overview" action="<?php echo e(route('admin.homeSectionUpdate')); ?>" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="id_to_display" value="overview_toprightbanner">
                                            <input type="hidden" name="id" value="<?php echo e($overviewSectionList['Top right banner']['image1']['id']); ?>">
                                            <div class="form-group">
                                                <textarea class="form-control" name="description" rows="3" placeholder="Enter the Text"><?php echo e($overviewSectionList['Top right banner']['image1']['description']); ?></textarea>
                                            </div>
                                            <div class="adminThumb">
                                                <img class="img-fluid"  id="overview_toprightbanner" src="<?php echo e($overviewSectionList['Top right banner']['image1']['image']!=''?asset('uploads/img/'.$overviewSectionList['Top right banner']['image1']['image']):asset( 'backend/img/default/no-image.png')); ?>" alt="User profile picture">
                                            </div>
                                            <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                <input type="file" name="file" class="custom-file-input" >
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                <input type="hidden" name="parent_section_name" value="overview">
                                                <input type="hidden" name="sectionName" value="Top right banner">
                                                <input type="hidden" name="section_type" value="image">
                                                <input type="hidden" name="content_type" value="image1">

                                            </div>
                                            <button type="submit" class="btn btn-info btn-150">Upload Banner
                                            </button>
                                        </form>
                                    </div>
                                 </div>
                              </div>
                            </div>

                            <div class="tab-pane fade" id="vert-tabs-overview-3" role="tabpanel" aria-labelledby="vert-tabs-overview-3-tab">
                              <div class="card-body">
                                 <div class="row" style="margin-bottom: 20px; padding-bottom: 20px"; >
                                    <div class="col-4">
                                        <h2 class="lead">Upload Banner</h2>
                                        <p class="cs-text-desc">N.B: Recommended size = </p>
                                    </div>
                                    <div class="col-8">
                                        <form method="post" class="overview" action="<?php echo e(route('admin.homeSectionUpdate')); ?>" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="id_to_display" value="bottomLeftBanner">
                                            <input type="hidden" name="id" value="<?php echo e($overviewSectionList['Bottom left banner']['image1']['id']); ?>">
                                                <div class="adminThumb">
                                                    <img class="img-fluid" id="bottomLeftBanner" src="<?php echo e($overviewSectionList['Bottom left banner']['image1']['image']!=''?asset('uploads/img/'.$overviewSectionList['Bottom left banner']['image1']['image']):asset( 'backend/img/default/no-image.png')); ?>" alt="User profile picture">
                                                </div>
                                                <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                    <input type="file" name="file" class="custom-file-input" >
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                    <input type="hidden" name="parent_section_name" value="overview">
                                                    <input type="hidden" name="sectionName" value="Bottom left banner">
                                                    <input type="hidden" name="section_type" value="image">
                                                    <input type="hidden" name="content_type" value="image1">
                                                </div>
                                                <button type="submit" class="btn btn-info btn-150">Upload Banner
                                                </button>
                                        </form>
                                    </div>
                                 </div>
                              </div>
                            </div>

                            <div class="tab-pane fade" id="vert-tabs-overview-4" role="tabpanel" aria-labelledby="vert-tabs-overview-4-tab">
                              <div class="card-body">
                                 <div class="row" style="margin-bottom: 20px; padding-bottom: 20px"; >
                                    <div class="col-4">
                                        <h2 class="lead">Upload Banner</h2>
                                        <p class="cs-text-desc">N.B: Recommended size = </p>
                                    </div>
                                    <div class="col-8">
                                        <form method="post" class="overview" action="<?php echo e(route('admin.homeSectionUpdate')); ?>" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="id_to_display" value="bottomRightBanner">
                                            <input type="hidden" name="id" value="<?php echo e($overviewSectionList['Bottom right banner']['image1']['id']); ?>">
                                            <div class="form-group">
                                                <input class="form-control" name="description" value="<?php echo e($overviewSectionList['Bottom right banner']['image1']['description']); ?>"  placeholder="Enter the url"/>
                                            </div>
                                            <div class="adminThumb">
                                                <img class="img-fluid" id="bottomRightBanner" src="<?php echo e($overviewSectionList['Bottom right banner']['image1']['image']!=''?asset('uploads/img/'.$overviewSectionList['Bottom right banner']['image1']['image']):asset( 'backend/img/default/no-image.png')); ?>" alt="User profile picture">
                                            </div>
                                            <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                <input type="file" name="file" class="custom-file-input" >
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                <input type="hidden" name="parent_section_name" value="overview">
                                                <input type="hidden" name="sectionName" value="Bottom right banner">
                                                <input type="hidden" name="section_type" value="image">
                                                <input type="hidden" name="content_type" value="image1">
                                            </div>
                                            <button type="submit" class="btn btn-info btn-150">Upload Banner </button>
                                        </form>
                                    </div>
                                 </div>
                              </div>
                            </div>

                            <div class="tab-pane fade" id="vert-tabs-overview-5" role="tabpanel" aria-labelledby="vert-tabs-overview-5-tab">
                                <div class="card-body">
                                    <div class="row" style="margin-bottom: 20px; padding-bottom: 20px"; >
                                        <div class="col-4">
                                            <h2 class="lead">Upload Banner</h2>
                                            <p class="cs-text-desc">N.B: Recommended size = </p>
                                        </div>
                                        <div class="col-8">
                                            <form method="post" class="overview" action="<?php echo e(route('admin.homeSectionUpdate')); ?>" enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="id_to_display" value="coverStory">
                                                <input type="hidden" name="id" value="<?php echo e(isset($overviewSectionList['coverStory']['image1']['id'])?$overviewSectionList['coverStory']['image1']['id']:''); ?>">

                                                <div class="adminThumb">
                                                    <img class="img-fluid" id="coverStory" src="<?php echo e(isset($overviewSectionList['coverStory']['image1']['image'])?$overviewSectionList['coverStory']['image1']['image']!=''?asset('uploads/img/'.$overviewSectionList['coverStory']['image1']['image']):'':asset( 'backend/img/default/no-image.png')); ?>" alt="User profile picture">
                                                </div>
                                                <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                    <input type="file" name="file" class="custom-file-input" >
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                    <input type="hidden" name="parent_section_name" value="overview">
                                                    <input type="hidden" name="sectionName" value="coverStory">
                                                    <input type="hidden" name="section_type" value="image">
                                                    <input type="hidden" name="content_type" value="image1">
                                                </div>
                                                <button type="submit" class="btn btn-info btn-150">Upload Banner </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\mangrove-hotel\resources\views/admin/cmsfront/overview.blade.php ENDPATH**/ ?>