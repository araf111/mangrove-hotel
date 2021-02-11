
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
                <h1 class="m-0 text-dark">Project</h1>
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
                    <li class="breadcrumb-item active">Project</li>
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
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <div class="card-header">
                        <h3 class="card-title">Update project - <b><?php echo e($projectObj->name); ?></b></h3>
                    </div>
                    <form method="POST" action="<?php echo e(route('admin.projects.update', [$projectObj->id])); ?>">
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>
                    <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group">
                                <label>Project Name</label>                                
                                <input type="text" name="name" value="<?php echo e($projectObj->name); ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Project Code</label>                                
                                <input type="text" name="code" value="<?php echo e($projectObj->code); ?>" class="form-control">                                
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" value="<?php echo e($projectObj->address); ?>">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" name="description" ><?php echo e($projectObj->description); ?></textarea>
                            </div>
                            <div class="form-group">
                                <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    <?php echo e(Form::close()); ?>

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Project list</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Project Name</th>
                                    <th>Code</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($project->id); ?></td>
                                    <td><?php echo e($project->name); ?></td>
                                    <td><?php echo e($project->code); ?></td>
                                    <td><?php echo e($project->address); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('admin.projects.edit', $project->id)); ?>">
                                            <button type="button" onclick="return confirm('Are you sure?You want to Delete?')" class="btn btn-tool"  data-toggle="tooltip" title="Remove">
                                                <i class="far fa-edit"></i>
                                            </button>
                                        </a>                                     
                                    
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
    <script>

        <?php if(Session::has('success')): ?>
            toastr.success("<?php echo e(Session::get('success')); ?>")
        <?php endif; ?>

         <?php if(Session::has('info')): ?>
            toastr.info("<?php echo e(Session::get('info')); ?>")
        <?php endif; ?>
        <?php if(Session::has('warning')): ?>
            toastr.warning("<?php echo e(Session::get('warning')); ?>")
        <?php endif; ?>
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/dev.mangrove-hotel/resources/views/admin/settings/project/edit.blade.php ENDPATH**/ ?>