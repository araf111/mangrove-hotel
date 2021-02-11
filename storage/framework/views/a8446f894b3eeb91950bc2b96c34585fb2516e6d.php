
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
                <h1 class="m-0 text-dark">Department</h1>
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
                    <li class="breadcrumb-item active">Department</li>
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
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add Department for user</h3>
                    </div>
                    <form method="POST" action="<?php echo e(route('admin.departments.store')); ?>">
                    <?php echo method_field('POST'); ?>
                    <?php echo csrf_field(); ?>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label>Department Name</label>
                            <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" placeholder="Write the Department ...">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="3" name="description" placeholder="Enter Details..."><?php echo e(old('description')); ?></textarea>
                        </div>
                        <div class="form-group">
                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Add Department</button>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Department list</h3>                        
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">                    
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Department Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($department->id); ?></td>
                                    <td><?php echo e($department->name); ?></td>
                                    <td>
                                        <div class="card-tools">
                                            <a href="<?php echo e(route('admin.departments.edit', $department->id)); ?>">
                                                <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </button> 
                                            </a>                                            
                                            
                                            <form method="POST" action="<?php echo e(route('admin.departments.destroy', $department->id)); ?>">
                                            <?php echo method_field('DELETE'); ?>
                                            <?php echo csrf_field(); ?>
                                                <button type="submit" class="btn btn-tool"  data-toggle="tooltip" title="Remove">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>                                          
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        
    </div>
</section>
<!-- /.content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
Users
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/sites/dev.mangrove-hotel/resources/views/admin/settings/departments/index.blade.php ENDPATH**/ ?>