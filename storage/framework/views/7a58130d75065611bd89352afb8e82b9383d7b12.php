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
<style>
    .ptb-10 {
        margin-top: 5px !important;
        margin-bottom: 5px !important;
    }

    .w-100 {
        width: 100%
    }
</style>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Instalment Share</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Invesment Share</li>
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
    <div class="row">
        <div class="col-md-3">
        <a href="<?php echo e(route('admin.investors.show',$investor->id)); ?>" class="btn btn-primary btn-block mb-3">View Profile</a>
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item ptb-10">
                            Project Name
                            <span class="float-right"><?php echo e($investor->project_name); ?></span>
                        </li>
                        <li class="nav-item ptb-10">
                            Investment ID
                            <span class="float-right"><?php echo e($investor->investor_id); ?></span>
                        </li>
                        <li class="nav-item ptb-10">
                            Total Share
                            <span class="float-right"><?php echo e($investor['shares']->count()); ?></span>
                        </li>
                        <li class="nav-item ptb-10">
                            Grand Total Price
                            <span class="float-right">৳<?php echo e($investor['shares']->sum('grand_total')); ?></span>
                        </li>
                        <li class="nav-item ptb-10">
                            Investor Status
                            <span class="bg-primary float-right">Active</span>
                            <!-- OR -->
                            <span class="bg-secondary float-right">Disable</span>
                        </li>
                    </ul>
                </div>
            </div>
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#addShare">
                Add Share
            </button>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="card card-primary card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill"
                                href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home"
                                aria-selected="true">Monthly Instalment</a>
                        </li>
                        <?php $__currentLoopData = $investor['shares']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $share): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
                                href="#custom-tabs-three-profile-<?php echo e($share->id); ?>" role="tab"
                                aria-controls="custom-tabs-three-profile" aria-selected="false"><?php echo e($share->id); ?>

                                MK107861-02</a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-three-tabContent">
                        <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel"
                            aria-labelledby="custom-tabs-three-home-tab">
                            <div class="table-responsive mailbox-messages">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Number</th>
                                            <th>Created Date</th>
                                            <th>Paid Date</th>
                                            <th>Amount</th>
                                            <th>Payment Type</th>
                                            <th>Status</th>
                                            <th style="text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $totalDuePayment = 0;
                                        $paymentShareIds = [];
                                        foreach ($investor['shares'] as $share) {
                                            foreach ($share['payments'] as $payment) {
                                                if($payment->status == 'Due'){
                                                    $paymentShareIds[] = $share->id;
                                                    $totalDuePayment += $payment->amount;
                                                }
                                            }
                                        }
                                        ?>
                                        <tr>
                                            <td>1</td> 
                                            <td><?php echo e('--'); ?></td>
                                            <td>Not yet</td>
                                            <td><?php echo e($totalDuePayment); ?> </td>
                                            <td> -- </td>
                                            <td class="project-state">
                                                <span class="badge badge-warning">Due</span>
                                            </td>
                                            <td class="py-0 align-middle text-center">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                                    <?php echo e(Form::model(request()->old(),array('route' => array('admin.investors.share.payment'),'class'=>'','novalidate'=>'novalidate','files'=>true,'id'=>'frmInvestor'))); ?>

                                                    <button type="submit" class="btn btn-info"><i class="far fa-credit-card"></i>
                                                        Pay now</button>
                                                    <input type="hidden" name="payment_share_ids" value="<?php echo e(json_encode($paymentShareIds)); ?>">
                                                    <?php echo e(Form::close()); ?>    
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                            $i = 2;
                                        ?>
                                        <?php $__currentLoopData = $sharePaymentPaidList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($i); ?></td> 
                                            <td><?php echo e(\Carbon\Carbon::parse($item->created_at)->format('d-M-Y')); ?></td>
                                            <td><?php echo e(\Carbon\Carbon::parse($item->updated_at)->format('d-M-Y')); ?></td>
                                            <td><?php echo e($item->amount); ?></td>
                                            <td><?php echo e($item->payment_type); ?></td>
                                            <td class="project-state">
                                                <span class="badge badge-success"><?php echo e($item->status); ?></span>
                                            </td>
                                            <td class="py-0 align-middle text-center">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                            $i++;
                                        ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       
                                        

                                    </tbody>
                                </table>
                                <!-- /.table -->
                            </div>
                        </div>

                        <?php $__currentLoopData = $investor['shares']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $share): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="tab-pane fade" id="custom-tabs-three-profile-<?php echo e($share->id); ?>" role="tabpanel"
                            aria-labelledby="custom-tabs-three-profile-tab">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item ptb-10">
                                    <div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
                                        <label class="btn btn-default text-center bg-info">
                                           
                                            <span
                                                class="text-xl"><?php echo e($share['payments']->where('installment','<>','0')->where('status','Paid')->count()); ?></span>
                                            <br />
                                            Current Instalment
                                        </label>
                                        <label class="btn btn-default text-center">
                                            <span
                                                class="text-xl"><?php echo e($share->installment_number - $share['payments']->where('installment','<>',0)->where('status','<>','Due')->count()); ?></span>
                                            <br />
                                            Remaining Instalment
                                        </label>
                                        <label class="btn btn-default text-center">
                                            <span class="text-xl"><?php echo e($share->installment_number); ?></span>
                                            <br />
                                            Total Instalment
                                        </label>
                                    </div>
                                </li>
                                <li class="nav-item ptb-10">
                                    Share Price
                                    <span class="float-right">৳<?php echo e($share->grand_total); ?></span>
                                </li>
                                <li class="nav-item ptb-10">
                                    Booking money
                                    <span class="float-right"><?php echo e($share->booking_amount); ?></span>
                                </li>
                                <li class="nav-item ptb-10">
                                    Installment Amount/Month
                                    <span class="float-right"><?php echo e($share->installment_amount); ?></span>
                                </li>
                                <li class="nav-item ptb-10">
                                    Total Paid
                                    <span
                                        class="float-right"><?php echo e($share['payments']->where('status','<>','Due')->sum('amount')); ?>.00</span>
                                </li>
                            </ul>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <!-- /.card -->
            </div>

        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="modal fade" id="addShare">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Share</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php echo e(Form::model(request()->old(),array('route' => array('admin.investors.share.store'),'class'=>'','novalidate'=>'novalidate','files'=>true,'id'=>'frmInvestor'))); ?>


                    <div class="modal-body">
                        <div class="form-group">
                            <?php echo e(Form::label('Select Project')); ?>

                            <?php echo e(Form::select('project_id', $projects, null, array('class'=>'custom-select', 'placeholder'=>'Please select ...'))); ?>


                            <?php if($errors->has('project_id')): ?>
                            <span class="text-danger"><?php echo e($errors->first('project_id')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Grand Total Price <span class="small">Including utility
                                        & operational Charges</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">BDT</span>
                                    </div>
                                    <?php echo e(Form::text('grand_total', null, array('class' => "form-control",'id'=>'grand_total','placeholder'=>'', 'required' => 'required', 'maxlength' => '50'))); ?>

                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                                <?php if($errors->has('grand_total')): ?>
                                <span class="text-danger"><?php echo e($errors->first('grand_total')); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="inword">In Words</label>
                                <input type="text" class="form-control" id="inword" placeholder="Investor Full Name">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Payment Selection</label>
                                <br>
                                <?php echo e(Form::radio('payment_method', 'Cash', true, array('class' => "d-inline",'id'=>'','placeholder'=>'','data-toggle-element'=>'.radio-button-selections', 'required' => 'required'))); ?>

                                Cash
                                <?php echo e(Form::radio('payment_method', 'Bank', false, array('class' => "d-inline",'id'=>'','placeholder'=>'','data-toggle-element'=>'.radio-button-selections', 'required' => 'required'))); ?>

                                Bank
                                <?php echo e(Form::radio('payment_method', 'Online', false, array('class' => "d-inline",'id'=>'','placeholder'=>'','data-toggle-element'=>'.radio-button-selections', 'required' => 'required'))); ?>

                                Online
                                <?php if($errors->has('payment_method')): ?>
                                <span class="text-danger"><?php echo e($errors->first('payment_method')); ?></span>
                                <?php endif; ?>
                                <hr />
                                <div class="radio-button-selections" data-toggle-element-value="cash">

                                </div>
                                <div class="radio-button-selections" data-toggle-element-value="po">
                                    <div class="row">
                                        <div class="col-md-6  mb-input-5">
                                            <input type="text" class="form-control" placeholder="No. of PO">
                                        </div>
                                        <div class="col-md-6  mb-input-5">
                                            <input type="text" class="form-control" data-inputmask-alias="datetime"
                                                data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false"
                                                placeholder="31 March 2020" disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?php echo e(Form::text('bank_name', null, array('class' => "form-control",'id'=>'','placeholder'=>'Bank Name', 'required' => 'required', 'maxlength' => '50'))); ?>

                                        </div>
                                        <div class="col-md-6">
                                            <?php echo e(Form::text('branch_name', null, array('class' => "form-control",'id'=>'','placeholder'=>'Branch Name', 'required' => 'required', 'maxlength' => '50'))); ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="radio-button-selections" data-toggle-element-value="dd">DD</div>
                                <div class="radio-button-selections" data-toggle-element-value="cheque">Cheque</div>
                                <div class="radio-button-selections" data-toggle-element-value="online">Online</div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Booking Payment</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">BDT</span>
                                    </div>
                                    <?php echo e(Form::text('booking_amount', null, array('class' => "form-control",'id'=>'booking_amount','placeholder'=>'', 'required' => 'required', 'maxlength' => '150'))); ?>


                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                    <?php if($errors->has('booking_amount')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('booking_amount')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php echo e(Form::hidden('share_id', null, array('class' => "form-control",'id'=>'share_id'))); ?>

                            <?php echo e(Form::hidden('installment_amount', null, array('class' => "form-control",'id'=>'installment_amount'))); ?>

                            <?php echo e(Form::hidden('installment_number', null, array('class' => "form-control",'id'=>'installment_number'))); ?>

                            <?php echo e(Form::hidden('investor_id', $investor->id, array('class' => "form-control",'id'=>'installment_number'))); ?>

                        </div>
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                <?php echo e(Form::close()); ?>


            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


</section>
<!-- /.content -->

<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).on('change','.custom-select',function(e){
    e.preventDefault();
    var projectId = $(this).find(":selected").val(); 
    $.ajax({
        type : 'GET',
        url : "<?php echo e(route('admin.ajaxRequest')); ?>",
        data : {id : projectId},
        dataType: 'json',
        success : function(data){
            $('#grand_total').attr('value', data.grand_total);
            $('#booking_amount').attr('value', data.booking_amount);
            $('#share_id').attr('value', data.id);
            $('#installment_amount').attr('value', data.installment_amount);
            $('#installment_number').attr('value', data.installment_number);
        },
        error: function(data)
        {
            console.log(data);
        }
    })  
});
</script>

<script>
    <?php if(Session::has('success')): ?>
        toastr.success("<?php echo e(Session::get('success')); ?>")
    <?php endif; ?>

    <?php if(Session::has('info')): ?>
        toastr.info("<?php echo e(Session::get('info')); ?>")
    <?php endif; ?>
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mangrovehotel/dev.mangrove-hotel.com/resources/views/admin/investors/investor_share.blade.php ENDPATH**/ ?>