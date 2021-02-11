
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
                <h1 class="m-0 text-dark">Role</h1>
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
                    <li class="breadcrumb-item active">Role</li>
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
            <div class="col-md-5">
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">Add role for user</h3>
                  </div>
                  <!-- /.card-header -->
                  <form method="POST" action="<?php echo e(route('admin.roles.store')); ?>">
                  <?php echo method_field('POST'); ?>
                  <?php echo csrf_field(); ?>
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
                           <label>Role Name</label>
                           <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" placeholder="Write the Role ...">
                     </div>
                     <div class="form-group">
                           <label>Display Name</label>
                           <input type="text" class="form-control" name="label" value="<?php echo e(old('label')); ?>" placeholder="Display Name...">
                     </div>
                     <!-- Minimal style -->
                     <div class="row">
                        <div class="col-sm-4 col-md-12">
                           <div class="card-header">
                              <h3 class="card-title">Permissions</h3>
                           </div>
                           <div class="card-body">
                              <div class="form-group">
                                    <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="icheck-primary d-inline col-md-4">
                                       <input type="checkbox" name="permission[]" value="<?php echo e($permission->id); ?>" id="checkboxPrimary<?php echo e($permission->id); ?>">
                                       <label for="checkboxPrimary<?php echo e($permission->id); ?>">
                                          <?php echo e($permission->label); ?>

                                       </label>
                                    </div>                                 
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </div>                          
                           </div>
                        </div>
                              
                     </div>
                     <div class="form-group">
                        <div class="card-footer">
                              <button type="submit" class="btn btn-primary float-right">Add Role</button>
                        </div>
                     </div>
                                        
                  </div>    
                  </form>  
               </div>               
            </div>
            <!-- /.col -->
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Role list</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Role Name</th>
                                    <th>Permissions</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $roles_permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role_permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($role_permission->label); ?></td>
                                    <td>
                                        <?php if($role_permission->permissions->isNotEmpty()): ?>
                                            <?php echo e($role_permission->permissions->implode('label',',')); ?>

                                        <?php else: ?>
                                            All Access
                                        <?php endif; ?>
                                    
                                    </td>
                                    <td>
                                        <div class="card-tools">
                                            <a href="<?php echo e(route('admin.roles.edit', $role_permission->id)); ?>">
                                                <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </a>                                            
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
        <!-- /.row -->

       
</section>
<!-- /.content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
Users
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/sites/dev.mangrove-hotel/resources/views/admin/settings/roles/index.blade.php ENDPATH**/ ?>