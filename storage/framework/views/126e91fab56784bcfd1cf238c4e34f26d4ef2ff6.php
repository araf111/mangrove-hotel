<?php $__env->startSection('title', 'Mangrove Invoice'); ?>

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
                <h1 class="m-0 text-dark">Invoice</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                    <li class="breadcrumb-item active">Invoice</li>
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
            <div class="card-body p-0">
                <div class="fc fc-ltr fc-bootstrap">
                    <div class="card-header row">
                        <div class="col-md-2">
                            <div class="form-group clearfix">
                                <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="checkboxPrimary">
                                    <label for="checkboxPrimary">
                                        Paid
                                    </label>
                                </div>
                                <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="checkboxPrimary1">
                                    <label for="checkboxPrimary1">
                                        Due
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control float-right" id="reservation">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="float-right">

                                    <div class="pagination float-right"> <?php echo $investors->appends(['search' => Request::get('search')])->render(); ?> </div>

                            </div>
                        </div>
                    </div>










                </div>
                <div class="table-responsive mailbox-messages text-center">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>

                                <th style="width: 2%">
                                    #
                                </th>
                                <th style="width: 6%">
                                    Picture
                                </th>
                                <th style="width: 10%">
                                    Invoice No
                                </th>

                                <th style="width: 8%">
                                    Investor ID
                                </th>
                                <th style="width: 10%">
                                    Share ID
                                </th>
                                <th style="width: 15%">
                                    Project Name
                                </th>
                                <th style="width: 13%">
                                    Investor Name
                                </th>


                                <th style="width: 9%" class="text-center">
                                    Amount
                                </th>
                                <th style="width:4%" class="text-center">
                                    Status
                                </th>
                                <th style="width: 16%;" class="text-center">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sl =1;
                            ?>
                            <?php $__currentLoopData = $investors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $investor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>

                                <td><?php echo e($sl); ?></td>

                                <td><img alt="Avatar" class="table-avatar"
                                        src="<?php echo e(asset("storage/".$investor->picture)); ?>"></td>

                                <td class="t-payment">
                                    <?php echo e($investor->invoiceNo); ?>


                                </td>

                                <td><?php $string = substr($investor->investor_id,0,10);?> <?php echo e($string); ?></td>
                                <td class="t-payment">
                                    <?php echo e($investor->investor_share_id); ?>


                                </td>
                                <td><?php echo e($investor->projectName); ?></td>
                                <td> <a href="<?php echo e(route('admin.investors.show',$investor->investors_account_id)); ?>">&nbsp;<?php echo e($investor->name); ?></a>&nbsp;</td>

                                <td class="text-right"><?php echo e($investor->amount); ?></td>
                                <td class="project-state t-payment " style="color: <?php echo e($investor->status=='Due'?'#dc3545':'#5DA846'); ?> ">
                                    <?php echo e($investor->status); ?>

                                </td>
                                <td class="py-0 align-middle text-center">
                                    <div class="btn-group btn-group-sm">
                                        <a href="<?php echo e(route('admin.invoice.show',$investor->investor_share_payments_id)); ?>" class="btn btn-primary"><i class="fas fa-eye"></i></a>&nbsp;&nbsp;















                                        <!-- <a href="#" class="btn btn-danger"><i class="far fa-trash-alt"></i></a> -->
                                    </div>
                                </td>
                            </tr>
                            <?php $sl++; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                    <div style="width: 100%; text-align: center;margin-top: 20px">
                        <div class="pagination" style="width: 300px;margin: 0 auto;"> <?php echo $investors->appends(['search' => Request::get('search')])->render(); ?> </div>
                    </div>

                    <!-- /.table -->
                </div>

                <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer p-0">
                <div class="mailbox-controls">

                    <!-- /.float-right -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<script>
    $(function () {
        //Enable check and uncheck all functionality
        $('.checkbox-toggle').click(function () {
          var clicks = $(this).data('clicks')
          if (clicks) {
            //Uncheck all checkboxes
            $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
            $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
          } else {
            //Check all checkboxes
            $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
            $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
          }
          $(this).data('clicks', !clicks)
        })
      })
</script>

<script type="text/javascript">
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
        ranges   : {
            'Today'       : [moment(), moment()],
            'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month'  : [moment().startOf('month'), moment().endOf('month')],
            'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
        },
        function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
    )
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/sites/dev.mangrove-hotel/resources/views/admin/invoice/index.blade.php ENDPATH**/ ?>