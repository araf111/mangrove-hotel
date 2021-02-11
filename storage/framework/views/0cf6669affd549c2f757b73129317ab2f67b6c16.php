<?php $__env->startSection('title', 'Mangrove Investors'); ?>

<?php $__env->startSection('navbar'); ?>
##parent-placeholder-c63e3c1cfa2ff651ad4cfadea3e21265ffcf8ca3##
<!-- Left navbar links -->
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo e(route('admin.investors.index')); ?>" class="nav-link btn btn-block btn-outline-success">Investor</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo e(route('admin.investors.create')); ?>" class="nav-link">Add Investor</a>
    </li>
</ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Investor</h1>
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
    <?php echo e(Form::model($investor,array('method'=>'PUT','route' => array('admin.investors.update',$investor->investor_id),'class'=>'','novalidate'=>'novalidate','files'=>true,'enctype'=>'multipart/form-data'))); ?>

    <div class="card card-solid">
        <div class="card-body pb-0">
            <div class="row d-flex align-items-stretch">
                <div class="col-12 col-sm-6 col-md-4 align-items-stretch">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Upload Picture</h3>
                        </div>

                        <div class="card-body box-profile">
                            <div class="text-center">

                                <img class="profile-user-img img-fluid img-circle preview"
                                    src="<?php echo e(asset("storage/".$investor->picture)); ?>" alt="User profile picture">
                            </div>
                            <input type="hidden" name="old_picture" value="<?php echo e($investor->picture); ?>">
                            <div class="form-group">
                                <label for="exampleInputFile">Max Size: 2MB</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="picture" class="custom-file-input newPics"
                                            id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose Photo</label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Identity</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Full Name</label>
                                <?php echo e(Form::text('name', null, array('class' => "form-control",'id'=>'inputName','placeholder'=>'Investor Full Name', 'required' => 'required', 'maxlength' => '150'))); ?>

                            </div>
                            <!--
                            <div class="form-group">
                                <label>Investor ID</label>
                                <input type="text" class="form-control" placeholder="Auto Generate" disabled="">
                            </div> -->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <?php echo e(Form::email('email', null, array('class' => "form-control",'id'=>'inputEmail','placeholder'=>'Enter email','readonly', 'required' => 'required', 'maxlength' => '150'))); ?>

                            </div>

                            <div class="form-group">
                                <label for="inputName">Investor ID</label>
                                <?php echo e(Form::text('investor_id', null, array('class' => "form-control",'id'=>'investorId','placeholder'=>'Investor ID', 'required' => 'required', 'maxlength' => '150'))); ?>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password">
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-8 align-items-stretch">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Update Investor Personal Information</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="number">Phone (Res)</label>
                                        <?php echo e(Form::number('phone', null, array('class' => "form-control",'id'=>'number','placeholder'=>'+880-XXXX-YYY-ZZZ', 'required' => 'required', 'maxlength' => '20'))); ?>

                                        <?php if($errors->has('phone')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('phone')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="number">Mobile</label>
                                        <?php echo e(Form::number('mobile', null, array('class' => "form-control",'id'=>'number','readonly','placeholder'=>'+880-XXXX-YYY-ZZZ', 'required' => 'required', 'maxlength' => '20'))); ?>


                                        <?php if($errors->has('mobile')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('mobile')); ?></span>
                                        <?php endif; ?>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="number">Emergency Contact</label>
                                        <?php echo e(Form::number('emergency_contact', null, array('class' => "form-control",'id'=>'number','placeholder'=>'+880-XXXX-YYY-ZZZ', 'required' => 'required', 'maxlength' => '20'))); ?>


                                        <?php if($errors->has('emergency_contact')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('emergency_contact')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email <span class="small">Primary</span></label>
                                        <?php echo e(Form::email('email_primary', null, array('class' => "form-control",'id'=>'exampleInputEmail1','placeholder'=>'Enter email', 'required' => 'required', 'maxlength' => '150'))); ?>


                                        <?php if($errors->has('email_primary')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('email_primary')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email <span
                                                class="small">Seondery</span></label>
                                        <?php echo e(Form::email('email_secondary', null, array('class' => "form-control",'id'=>'exampleInputEmail1','placeholder'=>'Enter secondary email', 'maxlength' => '150'))); ?>


                                        <?php if($errors->has('email_secondary')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('email_secondary')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="dob">Date of Birth</label>
                                        <?php echo e(Form::date('date_of_birth', null, array('class' => "form-control",'id'=>'number', 'required' => 'required','placeholder'=>'DD/MM/YY'))); ?>


                                        <?php if($errors->has('date_of_birth')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('date_of_birth')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nid">NID/Passport</span></label>
                                        <?php echo e(Form::text('identification_number', null, array('class' => "form-control",'id'=>'nid','placeholder'=>'Identification Number', 'required' => 'required', 'maxlength' => '150'))); ?>


                                        <?php if($errors->has('identification_number')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('identification_number')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="religion">Religion</label>
                                        <?php echo e(Form::text('religion', null, array('class' => "form-control",'id'=>'religion','placeholder'=>'Enter religion', 'maxlength' => '150'))); ?>


                                        <?php if($errors->has('religion')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('religion')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="dob">Nationality</label>
                                        <select name="nationality" class="form-control">
                                            <option value="<?php echo e($investor->nationality); ?>" <?php if($investor->nationality ==
                                                $investor->nationality): ?> selected
                                                <?php endif; ?>><?php echo e($investor->nationality); ?></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nid">Father's Name</label>
                                        <?php echo e(Form::text('father_name', null, array('class' => "form-control",'id'=>'','placeholder'=>'Enter fathers name', 'maxlength' => '150'))); ?>


                                        <?php if($errors->has('father_name')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('father_name')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="religion">Mother's Name</label>
                                        <?php echo e(Form::text('mother_name', null, array('class' => "form-control",'id'=>'','placeholder'=>'Enter mother name', 'maxlength' => '150'))); ?>

                                        <?php if($errors->has('mother_name')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('mother_name')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="spname">Spouse's Name</label>
                                        <?php echo e(Form::text('spouse_name', null, array('class' => "form-control",'id'=>'spname','placeholder'=>'Spouse\'s Name', 'maxlength' => '150'))); ?>


                                        <?php if($errors->has('spouse_name')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('spouse_name')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dob">Date of Birth</label>
                                        <?php echo e(Form::date('spouse_date_of_birth', null, array('class' => "form-control",'id'=>'number', 'required' => 'required','placeholder'=>'DD/MM/YY'))); ?>

                                        <?php if($errors->has('spouse_date_of_birth')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('spouse_date_of_birth')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nid">Occupation</label>
                                        <?php echo e(Form::text('occupation', null, array('class' => "form-control",'id'=>'spname','placeholder'=>'Enter Occupation', 'required' => 'required', 'maxlength' => '150'))); ?>


                                        <?php if($errors->has('occupation')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('occupation')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="religion">Designation</label>
                                        <?php echo e(Form::text('designation', null, array('class' => "form-control",'id'=>'','placeholder'=>'Enter Designation', 'required' => 'required', 'maxlength' => '150'))); ?>


                                        <?php if($errors->has('designation')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('designation')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="dob">Company Name</label>
                                        <?php echo e(Form::text('company_name', null, array('class' => "form-control",'id'=>'','placeholder'=>'Name of your company', 'required' => 'required', 'maxlength' => '150'))); ?>


                                        <?php if($errors->has('company_name')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('company_name')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>





                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nid">Select Country</label>
                                        <select class="form-control select2bs4" name="country"
                                            style="width: 100%" ;>
                                            <option selected="selected" value="1">Bangladesh</option>
                                            <option value="2">India</option>
                                            <option>USA</option>
                                        </select>
                                    </div>
                                </div>

























































                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nid">Address</label>
                                        <?php echo e(Form::text('address', null, array('class' => "form-control",'id'=>'','placeholder'=>'H# 222, Plot# 3633, R# 120, Vill# XYZ', 'required' => 'required', 'maxlength' => '150'))); ?>


                                        <?php if($errors->has('address')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('address')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>



















































































































































                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nid">Nominee's Name</label>
                                        <?php echo e(Form::text('nominee_name', null, array('class' => "form-control",'id'=>'','placeholder'=>'Nominee\'s Name', 'required' => 'required', 'maxlength' => '150'))); ?>


                                        <?php if($errors->has('nominee_name')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('nominee_name')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="religion">Relation</label>
                                        <?php echo e(Form::text('relation', null, array('class' => "form-control",'id'=>'','placeholder'=>'Relation between Investor', 'required' => 'required', 'maxlength' => '150'))); ?>


                                        <?php if($errors->has('relation')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('relation')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="spname">Nominee's Id</label>
                                        <?php echo e(Form::text('nominee_identity_number', null, array('class' => "form-control",'id'=>'','placeholder'=>'Nominee\'s identity', 'required' => 'required', 'maxlength' => '150'))); ?>


                                        <?php if($errors->has('nominee_identity_number')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('nominee_identity_number')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dob">Mobile</label>
                                        <?php echo e(Form::number('nominee_mobile', null, array('class' => "form-control",'id'=>'','placeholder'=>'Nominee mobile number', 'required' => 'required', 'maxlength' => '150'))); ?>


                                        <?php if($errors->has('nominee_mobile')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('nominee_mobile')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <input type="submit" value="Update Information" class="btn btn-success float-right">
            </div>
        </div>

    </div>
    <?php echo e(Form::close()); ?> <!-- /.container-fluid -->
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
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('change','.custom-select',function(e){

            e.preventDefault();

            var projectId = $(this).find(":selected").val();
            //alert(projectId);

            $.ajax({
                type : 'GET',
                url : "<?php echo e(route('admin.ajaxRequest')); ?>",
                data : {id : projectId},
                dataType: 'json',
                success : function(data){
                    console.log(data)

                    //$('#grand_total').val(data['grand_total']);
                    //alert(data)
                    $('#grand_total').attr('value', data.grand_total);
                    $('#booking_amount').attr('value', data.booking_amount);

                    //
                },
                error: function(data)
                {
                 //handle errors
                 //alert(data);
                 console.log(data);
                }
            })


        });

   ////////////////////////////////////
   $('.newPics').change(function(){
    var img = this.files[0];
    //console.log('img',img);
    //var imgType = img['type'];
    //console.log(imgType);
    //var img['type'] = imgType.toLowerCase();
    //console.log(imgTolower);
    if(img['type'] != "image/jpeg" && img['type'] != "image/jpg" &&  img['type'] != "image/png"){
        $(".newPics").val("");
        alert("OPPS!error..image should be jpeg or jpg or png")

    }else if(img['size'] > 2000000){
        $(".newPics").val("");
        alert("OPPS!error..image size should be under 2MB")


    }else{
        var dataImage = new FileReader;
        dataImage.readAsDataURL(img);
        $(dataImage).on('load',function(event){
            var rootImage = event.target.result;
            $('.preview').attr('src',rootImage);
        });
    }
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/sites/dev.mangrove-hotel/resources/views/admin/investors/edit.blade.php ENDPATH**/ ?>