
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
                <h1 class="m-0 text-dark">Settings</h1>
                <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Settings</a></li>
                    <li class="breadcrumb-item active">Users</li>
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
    <!-- /.card-header -->
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="card card-primary card-outline card-tabs">
                <div class="card-header p-0 pt-1 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                     
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Edit User</a>
                        </li>
                    </ul>
                </div>
                
                            
                        <div class="tab-pane fade show active " id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
                            <form method="POST" role="form" action="<?php echo e(route('admin.users.update', [$user->id])); ?>" enctype="multipart/form-data">
                            <?php echo method_field('PUT'); ?>
                            <?php echo csrf_field(); ?> 
                            <div class="row">
                                <div class="col-12 col-sm-4">
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h3 class="card-title">User Login Info</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                                                           
                                            <div class="card-body">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-user-cog"></i></span>
                                                    </div>
                                                    <input type="text" name="name" value="<?php echo e($user->name); ?>" class="form-control" placeholder="User Name">
                                                    <?php if($errors->has('name')): ?>
                                                    <p class="help-block">
                                                        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                                    </p>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                    </div>
                                                    <input type="Number" name="mobile" value="<?php echo e($user->mobile); ?>" class="form-control" placeholder="Phone Number">
                                                    <?php if($errors->has('mobile')): ?>
                                                    <p class="help-block">
                                                        <span class="text-danger"><?php echo e($errors->first('mobile')); ?></span>
                                                    </p>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                    </div>
                                                    <input type="email" name="email" value="<?php echo e($user->email); ?>" class="form-control" placeholder="User Email">
                                                    <?php if($errors->has('email')): ?>
                                                    <p class="help-block">
                                                        <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                                    </p>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-user-lock"></i></span>
                                                    </div>
                                                    <input type="password" name="password" class="form-control" placeholder="Change Password">
                                                    <?php if($errors->has('password')): ?>
                                                    <p class="help-block">
                                                        <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                                    </p>
                                                    <?php endif; ?>
                                                </div>

		                                        <div class="input-group mb-3">
			                                        <select name="status" id="status" class="custom-select"> 
			                                            
			                                            <option value="1" <?php if($user->active == 1): ?> selected="selected" <?php endif; ?>>Active</option>  

			                                            <?php if(!$user->hasRole('superAdmin')): ?>
			                                            <option value="1" <?php if($user->active == 0): ?> selected="selected" <?php endif; ?>>InActive</option> 
			                                            <?php endif; ?>
		                                            </select> 
		                                        </div>
                                                
                                                <div class="form-group">
                                                    <?php if(!empty(Auth::user()->photo)): ?>
            <img src="<?php echo e(asset( $user->photo )); ?>" class="img-circle elevation-2" alt="User Image">
            <?php endif; ?>
                                     
                                                    <div class="input-group">
                                                                           <div class="custom-file">
                                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                            <input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
                                                        </div>
                                                        
                                                    </div>
                                                </div>                                               

                                            </div>
                                            <!-- /.card-body -->
                                       
                                    </div>
                                </div>
                                <div class="col-12 col-sm-2">
                                    <div class="card card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">Choose Role</h3>
                                        </div>  
                                      
                                        <?php if($user->hasRole('superAdmin')): ?> 

                                        <input type="hidden" name="role[]" value="<?php echo e($user->hasRole('superAdmin')); ?>">

                                        <?php endif; ?>                                      
                                        <div class="card-body">
                                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="form-group clearfix">
                                                <div class="icheck-primary d-inline">
                                                    <input type="checkbox" name="role[]" value="<?php echo e($role->id); ?>" id="role<?php echo e($role->id); ?>" <?php if($user->hasRole($role->name)): ?> checked="checkid" <?php endif; ?> <?php if($user->hasRole('superAdmin') && $role->name == 'superAdmin'): ?> disabled="disabled" <?php endif; ?>>
                                                    <label for="role<?php echo e($role->id); ?>">
                                                        <?php echo e($role->name); ?>

                                                    </label>
                                                </div>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($errors->has('role')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('role')); ?></span>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="card card-warning">
                                        <div class="card-header">
                                            <h3 class="card-title">Choose Department and </h3>
                                        </div>
                                        <div class="card-body">                                            
                                            <select name="department_id" id="department_id" class="custom-select">
                                                <option value="">Please Select..</option>
                                            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($key); ?>" <?php if($user->department_id == $key): ?> selected="selected" <?php endif; ?>><?php echo e($department); ?></option>  
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                            </select> 
                                            <?php if($errors->has('department_id')): ?>
                                            <p class="help-block">
                                                <span class="text-danger"><?php echo e($errors->first('department_id')); ?></span>
                                            </p>
                                            <?php endif; ?>                                          
                                        </div>

                                        <div class="card-body">                                            
                                            <select name="designation_id" id="designation_id" class="custom-select">    
                                                <?php $__currentLoopData = $designations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$designation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($user->designation_id == $key): ?>
                                                <option value="<?php echo e($key); ?>"  selected="selected"><?php echo e($designation); ?></option>  
                                                <?php endif; ?>
                                            	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                            </select> 
                                            <?php if($errors->has('designation_id')): ?>
                                            <p class="help-block">
                                                <span class="text-danger"><?php echo e($errors->first('designation_id')); ?></span>                                            
                                            </p>
                                            <?php endif; ?>                                          
                                        </div>

                                    </div>
                                </div>
                                
                            </div>
                            <div class="card-footer clearfix">                                
                                <button type="submit" class="btn btn-info float-right">Save Changes</button>
                            </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
Users
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>


<script type="text/javascript">    
$("#department_id").change(function(){
    $.ajax({
        url: "/admin/settings/designations/get_by_department/" + $(this).val(),
        method: 'GET',
        success: function(data) {
            $('#designation_id').html(data.html);
        }
    });
});
</script>


<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\mangrove-hotel\resources\views/admin/settings/users/edit.blade.php ENDPATH**/ ?>