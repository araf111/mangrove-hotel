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
                <h1 class="m-0 text-dark">Modern Living</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Web Content</a></li>
                    <li class="breadcrumb-item active">Modern Living</li>
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
                <div class="progress" style="display: none;">
                    <div class="progress-bar" role="progressbar" aria-valuenow=""
                         aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                        0%
                    </div>
                    <div id="success">
                    </div>
                </div>
            </div>
        </div>
		<div class="row">
			<div class="col-md-12">
				<div class="card card-primary">
	                <div class="card-header">
	                    <h3 class="card-title">Left Banner</h3>
	                </div>
	                <!-- /.card-header -->
	                <!-- form start -->
	                <div class="card-body">
	                	<div class="text-center">
    	                  	<img class="profile-user-img img-fluid" id="img_modernLiving_leftbanner" src="<?php echo e($modernLivingList['leftbanner']['image1']['image']!=''?asset('uploads/img/'.$modernLivingList['leftbanner']['image1']['image']):asset( 'backend/img/default/no-image.png')); ?>" alt="User profile picture">
                            <button type="button" class="btn img-bordered-sm" data-toggle="tooltip" title="Remove">
                                  <i class="far fa-trash-alt"></i></button>
    	                </div>
                        <form method="post" class="modernLiving" action="<?php echo e(route('admin.homeSectionUpdate')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id_to_display" value="img_modernLiving_leftbanner">
                            <input type="hidden" name="id" value="<?php echo e($modernLivingList['leftbanner']['image1']['id']); ?>">
		                    <div class="card-body">
		                        <div class="form-group">
		                            <div class="input-group">
		                                <div class="custom-file">
		                                    <input type="file" name="file"  class="custom-file-input" >
		                                    <label class="custom-file-label" for="exampleInputFile">Choose Image (.jpg)</label>
                                            <input type="hidden" name="parent_section_name" value="modernliving">
                                            <input type="hidden" name="sectionName" value="leftbanner">
                                            <input type="hidden" name="section_type" value="image">
                                            <input type="hidden" name="content_type" value="image1">


		                                </div>
		                                <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary float-right input-group-text">Uploads</button>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <!-- /.card-body -->
		                </form>
	            	</div>
	            </div>
			</div>
		</div>
	    <div class="row">
	        <!-- left column -->
	        <div class="col-md-6">
	            <!-- /.card -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Room Banner</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                    	<div class="text-center">
    	                  	<img class="profile-user-img img-fluid" id="img_modernLiving_roombanner" src="<?php echo e($modernLivingList['roombanner']['image1']['image']!=''?asset('uploads/img/'.$modernLivingList['roombanner']['image1']['image']):asset( 'backend/img/default/no-image.png')); ?>" alt="User profile picture">
                            <button type="button" class="btn img-bordered-sm" data-toggle="tooltip" title="Remove">
                                  <i class="far fa-trash-alt"></i></button>
    	                </div>
                        <form method="post" class="modernLiving" action="<?php echo e(route('admin.homeSectionUpdate')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id_to_display" value="img_modernLiving_roombanner">
                            <input type="hidden" name="id" value="<?php echo e($modernLivingList['roombanner']['image1']['id']); ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose Image (.jpg)</label>
                                            <input type="hidden" name="parent_section_name" value="modernliving">
                                            <input type="hidden" name="sectionName" value="roombanner">
                                            <input type="hidden" name="section_type" value="image">
                                            <input type="hidden" name="content_type" value="image1">


                                        </div>
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary float-right input-group-text">Uploads</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </form>
                    </div>
                </div>
                <!-- /.card -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Entertainment Banner</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                    	<div class="text-center">
    	                  	<img class="profile-user-img img-fluid" id="img_modernLiving_entertainmentbanner" src="<?php echo e($modernLivingList['dinebanner']['image1']['image']!=''?asset('uploads/img/'.$modernLivingList['dinebanner']['image1']['image']):asset( 'backend/img/default/no-image.png')); ?>" alt="User profile picture">
                            <button type="button" class="btn img-bordered-sm" data-toggle="tooltip" title="Remove">
                                  <i class="far fa-trash-alt"></i></button>
    	                </div>
                        <form method="post" class="modernLiving" action="<?php echo e(route('admin.homeSectionUpdate')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id_to_display" value="img_modernLiving_entertainmentbanner">
                            <input type="hidden" name="id" value="<?php echo e($modernLivingList['dinebanner']['image1']['id']); ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose Image (.jpg)</label>
                                            <input type="hidden" name="parent_section_name" value="modernliving">
                                            <input type="hidden" name="sectionName" value="entertainmentbanner">
                                            <input type="hidden" name="section_type" value="image">
                                            <input type="hidden" name="content_type" value="image1">


                                        </div>
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary float-right input-group-text">Uploads</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </form>
                    </div>
                </div>
                <!-- /.card -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Gym Banner</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                    	<div class="text-center">
    	                  	<img class="profile-user-img img-fluid" id="img_modernLiving_gymbanner" src="<?php echo e($modernLivingList['entertainmentbanner']['image1']['image']!=''?asset('uploads/img/'.$modernLivingList['entertainmentbanner']['image1']['image']):asset( 'backend/img/default/no-image.png')); ?>" alt="User profile picture">
                            <button type="button" class="btn img-bordered-sm" data-toggle="tooltip" title="Remove">
                                  <i class="far fa-trash-alt"></i></button>
    	                </div>
                        <form method="post" class="modernLiving" action="<?php echo e(route('admin.homeSectionUpdate')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id_to_display" value="img_modernLiving_gymbanner">
                            <input type="hidden" name="id" value="<?php echo e($modernLivingList['entertainmentbanner']['image1']['id']); ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose Image (.jpg)</label>
                                            <input type="hidden" name="parent_section_name" value="modernliving">
                                            <input type="hidden" name="sectionName" value="gymbanner">
                                            <input type="hidden" name="section_type" value="image">
                                            <input type="hidden" name="content_type" value="image1">


                                        </div>
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary float-right input-group-text">Uploads</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </form>
                    </div>
                </div>
	        </div>
	        <div class="col-md-6">
                <!-- /.card -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Dine Banner</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                    	<div class="text-center">
    	                  	<img class="profile-user-img img-fluid" id="img_modernLiving_dinebanner" src="<?php echo e($modernLivingList['poolbanner']['image1']['image']!=''?asset('uploads/img/'.$modernLivingList['poolbanner']['image1']['image']):asset( 'backend/img/default/no-image.png')); ?>" alt="User profile picture">
                            <button type="button" class="btn img-bordered-sm" data-toggle="tooltip" title="Remove">
                                  <i class="far fa-trash-alt"></i></button>
    	                </div>
                        <form method="post" class="modernLiving" action="<?php echo e(route('admin.homeSectionUpdate')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id_to_display" value="img_modernLiving_dinebanner">
                            <input type="hidden" name="id" value="<?php echo e($modernLivingList['poolbanner']['image1']['id']); ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose Image (.jpg)</label>
                                            <input type="hidden" name="parent_section_name" value="modernliving">
                                            <input type="hidden" name="sectionName" value="dinebanner">
                                            <input type="hidden" name="section_type" value="image">
                                            <input type="hidden" name="content_type" value="image1">


                                        </div>
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary float-right input-group-text">Uploads</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </form>
                    </div>
                </div>
                <!-- /.card -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Pool Banner</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                    	<div class="text-center">
    	                  	<img class="profile-user-img img-fluid" id="img_modernLiving_poolbanner" src="<?php echo e($modernLivingList['gymbanner']['image1']['image']!=''?asset('uploads/img/'.$modernLivingList['gymbanner']['image1']['image']):asset( 'backend/img/default/no-image.png')); ?>" alt="User profile picture">
                            <button type="button" class="btn img-bordered-sm" data-toggle="tooltip" title="Remove">
                                  <i class="far fa-trash-alt"></i></button>
    	                </div>
                        <form method="post" class="modernLiving" action="<?php echo e(route('admin.homeSectionUpdate')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id_to_display" value="img_modernLiving_poolbanner">
                            <input type="hidden" name="id" value="<?php echo e($modernLivingList['gymbanner']['image1']['id']); ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose Image (.jpg)</label>
                                            <input type="hidden" name="parent_section_name" value="modernliving">
                                            <input type="hidden" name="sectionName" value="poolbanner">
                                            <input type="hidden" name="section_type" value="image">
                                            <input type="hidden" name="content_type" value="image1">


                                        </div>
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary float-right input-group-text">Uploads</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </form>
                    </div>
                </div>
	        </div>
	        <!--/.col (left) -->
	    </div>

	</div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/dev.mangrove-hotel/resources/views/admin/cmsfront/modernliving.blade.php ENDPATH**/ ?>