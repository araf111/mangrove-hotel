
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
                <h1 class="m-0 text-dark">Share</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Settings</a></li>
                    <li class="breadcrumb-item active">Share</li>
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
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add Share for Investor</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?php echo e(Form::model(request()->old(),array('route' => array('admin.shares.store'),'class'=>'','novalidate'=>'novalidate','files'=>false))); ?>

                            <div class="card-body">
                                <div class="form-group">
                                    <label>Select project for Share</label>
                                    <select name="project_id" class="custom-select">
                                        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($project->id); ?>"><?php echo e($project->name); ?>-<?php echo e($project->code); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Grand Total Price <span class="small">Including utility & operational Charges</span></label>
                                    
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">BDT</span>
                                        </div>
                                        <input type="number" name="grand_total" class="form-control" placeholder="200000.00">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                    <?php if($errors->has('grand_total')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('grand_total')); ?></span>
                                    <?php endif; ?>
                                </div>                                                              
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Booking Money</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">BDT</span>
                                        </div>
                                        <input type="number" name="booking_amount" class="form-control" placeholder="50000.00">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                    <?php if($errors->has('booking_amount')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('booking_amount')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Installment Amount- Per Month</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">BDT</span>
                                        </div>
                                        <input type="number" name="installment_amount" class="form-control" placeholder="5000.00">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                    <?php if($errors->has('installment_amount')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('installment_amount')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="inword">Installment Number(EMI)</label>
                                    <input type="number" class="form-control" name="installment_number" id="installment_number" placeholder="12">
                                    <?php if($errors->has('installment_number')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('installment_number')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label>Payment Type</label>
                                    <div class="form-group clearfix">
                                        <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="checkboxPrimary1">
                                            <label for="checkboxPrimary1">
                                                Brac
                                            </label>
                                        </div>
                                        <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="checkboxPrimary2">
                                            <label for="checkboxPrimary2">
                                                Online
                                            </label>
                                        </div>
                                        <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="checkboxPrimary3">
                                            <label for="checkboxPrimary3">
                                                Cash
                                            </label>
                                        </div>
                                    </div>
                                    <?php if($errors->has('continue')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('continue')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="continue" class="custom-select">
                                        <option value="1">Activate</option>
                                        <option value="0">Deactivate</option>
                                    </select>
                                    <?php if($errors->has('continue')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('continue')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <div class="card-footer">
                                    <button type="submit" class="btn btn-primary float-right">Add Share</button>
                                    </div>
                                </div>
                            </div>
                       
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Share list</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Project Name</th>
                                    <th>Grand Total</th>
                                    <th>Booking money</th>
                                    <th>Installment Amount</th>
                                    <th>Installment Number</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $shares; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $share): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($share->id); ?></td>
                                    <td><?php echo e($share['project']->name ?? ''); ?>-<?php echo e($share['project']->code ?? ''); ?></td>
                                    <td><?php echo e($share->grand_total); ?> BDT</td>
                                    <td><?php echo e($share->booking_amount); ?> BDT</td>
                                    <td><?php echo e($share->installment_amount); ?> BDT</td>
                                    <td><?php echo e($share->installment_number); ?></td>
                                    <td><?php if($share->continue==1): ?> <b>Continue</b> <?php else: ?> Disabled <?php endif; ?></td>
                                    <td>
                                        <a href="<?php echo e(route('admin.shares.edit',$share->id)); ?>">
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Edit">
                                                <i class="fas fa-edit"></i></button>
                                            </div>
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\mangrove-hotel\resources\views/admin/settings/share/index.blade.php ENDPATH**/ ?>