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
    <?php if($errors->any()): ?>
        <ul class="alert alert-danger">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
    <?php echo e(Form::model($investor,array('method'=>'PUT','route' => array('admin.investors.update',$investor->iid),'class'=>'','novalidate'=>'novalidate','files'=>true,'enctype'=>'multipart/form-data'))); ?>

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
                                    src="<?php echo e(asset('storage/'.$investor->picture)); ?>" alt="User profile picture">
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
                              <!-- <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
                                <?php echo e(Form::password('password', array('class' => "form-control",'id'=>'exampleInputPassword1','placeholder'=>'Password', 'required' => 'required', 'maxlength' => '20'))); ?>

                         </div>
                            <div class="form-group">

                                <?php echo e(Form::hidden('share_id',$investorsharedata['id'], array('class' => "form-control",'id'=>'investor_share_id', 'maxlength' => '20'))); ?>


                                <?php echo e(Form::hidden('share_payment_id',$investorsharepaymentdata['id'], array('class' => "form-control",'id'=>'investor_share_id', 'maxlength' => '20'))); ?>


                                <label for="membership_type">Membership Type</label>
                                <?php
                                    $arr = array('Bronze','Silver','Gold','Platinum');
                                ?>
                                <select name="membership_type" class="form-control">
                                    <option value="">Select Membership Type</option>
                                    <?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e($member_type == $investorsharedata['membership_type'] ? 'selected' : ''); ?> value="<?php echo e($member_type); ?>"><?php echo e($member_type); ?></option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php if($errors->has('membership_type')): ?>
                                <span class="text-danger"><?php echo e($errors->first('membership_type')); ?></span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group">
                                <label for="room_type">Room Type</label>
                                 <?php echo e(Form::text('room_type', $investorsharedata['room_type'], array('class' => "form-control",'id'=>'room_type','placeholder'=>'Room Type', 'required' => 'required', 'maxlength' => '50'))); ?>

                                <?php if($errors->has('room_type')): ?>
                                <span class="text-danger"><?php echo e($errors->first('room_type')); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="payment_method">Mode Of Payment</label>
                                <?php
                                    $pay_arr = array('Cash Payment','Visa Card','Master Card','AMEX Card','Cheque Payment','City Bank Deposit','NRBC Bank Deposit');

                                ?>
                                <select name="payment_method" class="form-control">
                                    <option value="">Select payment Mode</option>
                                    <?php $__currentLoopData = $pay_arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mode_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e($mode_type == $investorsharepaymentdata['payment_method'] ? 'selected' : ''); ?> value="<?php echo e($mode_type); ?>"><?php echo e($mode_type); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php if($errors->has('payment_method')): ?>
                                <span class="text-danger"><?php echo e($errors->first('payment_method')); ?></span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group">
                                <label for="bank_transation_id">Bank Transation Id</label>
                                 <?php echo e(Form::text('bank_transation_id', $investorsharepaymentdata['bank_transation_id'], array('class' => "form-control",'id'=>'bank_transation_id', 'required' => 'required', 'maxlength' => '50'))); ?>

                                <?php if($errors->has('bank_transation_id')): ?>
                                <span class="text-danger"><?php echo e($errors->first('bank_transation_id')); ?></span>
                                <?php endif; ?>
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
                                <div class="col-md-6">
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
                                            <label for="peradd">Permanent Address</label>
                                            <?php echo e(Form::text('peraddress', null, array('class' => "form-control",'id'=>'','placeholder'=>'H# 222, Plot# 3633, R# 120, Vill# XYZ', 'required' => 'required', 'maxlength' => '150'))); ?>


                                            <?php if($errors->has('peraddress')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('peraddress')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="officeaddress">Mailing Address</label>
                                            <?php echo e(Form::text('mailing_address', null, array('class' => "form-control",'id'=>'','placeholder'=>'H# 222, Plot# 3633, R# 120, Vill# XYZ', 'required' => 'required', 'maxlength' => '150'))); ?>


                                            <?php if($errors->has('mailing_address')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('mailing_address')); ?></span>
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
        <fieldset class="card">
            <h3 class="heading text-center text-white bg-success p-1">For Offical Use Only</h3>
            <div class="" style="padding:10px;">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="col-12" style="padding:0;">
                            <div class="form-group">
                                <?php
                                    $payment_mode_arr = array('On Time Payment','EMI');
                                ?>
                                <label for="payment_shedule_mode">Payment Shedule Mode</label>
                                <select name="payment_shedule_mode" class="form-control">
                                    <option value="">Select Membership Type</option>
                                    <?php $__currentLoopData = $payment_mode_arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modetype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option  <?php echo e($modetype == $investor->payment_shedule_mode ? 'selected' : ''); ?> value="<?php echo e($modetype); ?>"><?php echo e($modetype); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>
                                <?php if($errors->has('payment_shedule_mode')): ?>
                                <span class="text-danger"><?php echo e($errors->first('payment_shedule_mode')); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <div class="form-group">
                                    <label for="slotshareno">No. of Slots/Shares</label>
                                    <?php echo e(Form::text('num_slot_share', null, array('class' => "form-control",'id'=>'','placeholder'=>'Number Of Sloat & Share', 'required' => 'required', 'maxlength' => '20'))); ?>


                                    <?php if($errors->has('num_slot_share')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('num_slot_share')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-7">
                                <label>Stay Facility</label>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <?php echo e(Form::number('stay_day', null, array('class' => "form-control",'id'=>'','placeholder'=>'Days', 'required' => 'required', 'maxlength' => '20'))); ?>

                                            <!-- <label for="dob">Days</label> -->
                                            <?php if($errors->has('stay_day')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('stay_day')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <?php echo e(Form::number('stay_night', null, array('class' => "form-control",'id'=>'','placeholder'=>'Night', 'required' => 'required', 'maxlength' => '20'))); ?>

                                            <!-- <label for="dob">Nights</label> -->
                                            <?php if($errors->has('stay_night')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('stay_night')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <div class="form-group">
                                    <label for="downpayment">Down Payment</label>
                                    <?php echo e(Form::text('down_payment', null, array('class' => "form-control",'id'=>'','placeholder'=>'Down Payment', 'required' => 'required', 'maxlength' => '100'))); ?>


                                    <?php if($errors->has('down_payment')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('down_payment')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="emino">No. of EMI</label>
                                            <?php echo e(Form::text('emi_number', null, array('class' => "form-control",'id'=>'','placeholder'=>'No. of EMI', 'required' => 'required', 'maxlength' => '20'))); ?>

                                            <?php if($errors->has('emi_number')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('emi_number')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="emiamount">EMI Amount</label>
                                            <?php echo e(Form::text('emi_amount', null, array('class' => "form-control",'id'=>'','placeholder'=>'EMI Amount', 'required' => 'required', 'maxlength' => '20'))); ?>

                                            <?php if($errors->has('emi_amount')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('emi_amount')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="moneyreeipno">Money Receipt No.</label>
                                    <?php echo e(Form::text('money_receipt_no', null, array('class' => "form-control",'id'=>'','placeholder'=>'Money Receipt No', 'required' => 'required', 'maxlength' => '100'))); ?>


                                    <?php if($errors->has('money_receipt_no')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('money_receipt_no')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="installmentdate">Installment Date</label>
                                    <?php echo e(Form::date('installment_date', null, array('class' => "form-control",'id'=>'number', 'required' => 'required','placeholder'=>'DD/MM/YY'))); ?>

                                    <?php if($errors->has('installment_date')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('installment_date')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="dealingperson">Marketing person's Name(Dealing Person)</label>
                                    <?php echo e(Form::text('dealing_person', null, array('class' => "form-control",'id'=>'','placeholder'=>'Dealing Person', 'required' => 'required', 'maxlength' => '100'))); ?>


                                    <?php if($errors->has('dealing_person')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('dealing_person')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="dealingpersondesignation">Designation</label>
                                    <?php echo e(Form::text('dealing_person_designation', null, array('class' => "form-control",'id'=>'','placeholder'=>'Designation', 'required' => 'required', 'maxlength' => '100'))); ?>


                                    <?php if($errors->has('dealing_person_designation')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('dealing_person_designation')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="dealingpersonofficeid">Office Id</label>
                                    <?php echo e(Form::text('dealing_person_office_id', null, array('class' => "form-control",'id'=>'number', 'required' => 'required','placeholder'=>'Office Id','maxlength' => '100'))); ?>

                                    <?php if($errors->has('dealing_person_office_id')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('dealing_person_office_id')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group">
                            <label for="dealingpersonofficeid">Owner In No.</label>
                            <?php echo e(Form::text('owner_id_no', null, array('class' => "form-control",'id'=>'owner_id_no', 'required' => 'required','placeholder'=>'Owner Id No.','maxlength' => '100'))); ?>

                            <?php if($errors->has('owner_id_no')): ?>
                            <span class="text-danger"><?php echo e($errors->first('owner_id_no')); ?></span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label for="dealingpersonofficeid">Special Note</label>
                            <?php echo e(Form::textarea('special_note', null, array('class' => "form-control",'id'=>'special_note', 'required' => 'required','placeholder'=>'Type Special Note Here','maxlength' => '100'))); ?>

                            <?php if($errors->has('special_note')): ?>
                            <span class="text-danger"><?php echo e($errors->first('special_note')); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <!-- <a href="#" id="resetForm" class="btn btn-secondary">Cancel</a> -->
                </div>
                <div class="col-6">
                    <input type="submit" value="Update Information" class="btn btn-success float-right">
                </div>
            </div>
        <fieldset>
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\mangrove-hotel\resources\views/admin/investors/edit.blade.php ENDPATH**/ ?>