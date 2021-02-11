
<?php $__env->startSection('title', 'Mangrove Investors'); ?>

<?php $__env->startSection('navbar'); ?>
##parent-placeholder-c63e3c1cfa2ff651ad4cfadea3e21265ffcf8ca3##
<!-- Left navbar links -->
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo e(route('admin.investors.index')); ?>" class="nav-link btn btn-block btn-outline-success">Inquiry</a>
    </li>
</ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Inquiry</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Investor</li>
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
        <div class="card card-primary card-outline">
            <!-- /.card-header -->
            <div class="card-body">
         
                    <table class="table table-striped">
                        <thead>
                            <tr>                               
                                <th>
                                    #
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Mobile
                                </th>
                                <th>
                                    Email
                                </th>                              
                                <th>
                                    Inquery Time
                                </th>   
                                <th>
                                    Follow Up By
                                </th>                              
                                <th class="text-center">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sl =1;
                            ?>
                            <?php $__currentLoopData = $inquiries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inquiry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>                                
                                <td><?php echo e($sl); ?></td>
                                <td><?php echo e($inquiry->name); ?></td>
                                <td><?php echo e($inquiry->mobile); ?></td>
                                <td><?php echo e($inquiry->email); ?></td>  
                                <td><?php echo e($inquiry->created_at->format('D M,Y H:i:s')); ?></td>
                                <td>
                                	<?php if($inquiry->user_id): ?>
                                		<?php echo e($inquiry->user->name); ?>

                                	<?php else: ?>
                                		Not Yet
                                	<?php endif; ?>

                                </td>   
                                                          
                                <td> 
                                	<div class="card-tools">
                                		<form method="POST" action="<?php echo e(route('admin.inquiry.followup')); ?>">
                                        <?php echo method_field('POST'); ?>
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="id" value="<?php echo e($inquiry->id); ?>">
                                            <button type="submit" class="btn btn-tool"  data-toggle="tooltip" title="Follow UP">
                                                <i class="fa fa-check"></i>
                                            </button>                                          
                                        </form>                                		                                      
                                           
                                    </div>                           
                                </td>
                            </tr>
                            <?php $sl++; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <!-- /.table -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer p-0">
                <div class="mailbox-controls">
                    <div class="float-right">
                        1-50/200
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm"><i
                                    class="fas fa-chevron-left"></i></button>
                            <button type="button" class="btn btn-default btn-sm"><i
                                    class="fas fa-chevron-right"></i></button>
                        </div>
                        <!-- /.btn-group -->
                    </div>
                    <!-- /.float-right -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?><?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/dev.mangrove-hotel/resources/views/admin/inquiries/index.blade.php ENDPATH**/ ?>