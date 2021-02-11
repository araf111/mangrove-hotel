@extends('admin.layouts.app')
@section('title', 'Mangrove Investors')

@section('navbar')
    @parent
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('admin.investors.index') }}" class="nav-link btn btn-block btn-outline-success">Investor</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('admin.investors.create') }}" class="nav-link">Add Investor</a>
        </li>
    </ul>
@endsection
@section('content')
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
                                <img class="profile-user-img img-fluid img-circle" src="{{ asset( 'backend/img/investor/user4-128x128.jpg') }}" alt="User profile picture">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Max Size: 2MB</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose Photo</label>
                                    </div>
                                </div>
                            </div>
                        <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 align-items-stretch">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Identity</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Full Name</label>
                                    <input type="email" class="form-control" id="inputName" placeholder="Investor Full Name">
                                </div><!-- 
                                <div class="form-group">
                                    <label>Investor ID</label>
                                    <input type="text" class="form-control" placeholder="Auto Generate" disabled="">
                                </div> -->
                                <div class="form-group">
                                    <label for="projectname">Select Project</label>
                                    <select class="custom-select">
                                        <option id="projectname">Mangrove Eco Resort Kuakata (MERK)</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 align-items-stretch">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">User Access</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 align-items-stretch">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">Application for booking of Shares / Slots</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Grand Total Price <span class="small">Including utility & operational Charges</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">BDT</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="200000">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inword">In Words</label>
                                    <input type="text" class="form-control" id="inword" placeholder="Investor Full Name">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Payment Selection</label>
                                    <br>
                                    <input class="d-inline" type="radio" name="radio-buttons" value="cash" data-toggle-element=".radio-button-selections" /> Cash
                                    <input class="d-inline" type="radio" name="radio-buttons" value="po" data-toggle-element=".radio-button-selections"/> PO
                                    <input class="d-inline" type="radio" name="radio-buttons" value="dd" data-toggle-element=".radio-button-selections"/> DD
                                    <input class="d-inline" type="radio" name="radio-buttons" value="cheque" data-toggle-element=".radio-button-selections"/> Cheque
                                    <input class="d-inline" type="radio" name="radio-buttons" value="online" data-toggle-element=".radio-button-selections"/> Online
                                    <hr />
                                    <div class="radio-button-selections" data-toggle-element-value="cash">

                                    </div>
                                    <div class="radio-button-selections" data-toggle-element-value="po">
                                        <div class="row">
                                            <div class="col-md-6  mb-input-5">
                                                <input type="text" class="form-control" placeholder="No. of PO">
                                            </div>
                                            <div class="col-md-6  mb-input-5">
                                                <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false" placeholder="31 March 2020"     disabled>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Bank Name">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Branch Name">
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
                                        <input type="text" class="form-control" placeholder="5000">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-8 align-items-stretch">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Investor Personal Information</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="number">Phone (Res)</label>
                                            <input type="number" class="form-control" id="number" placeholder="+880-XXXX-YYY-ZZZ">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="number">Mobile</label>
                                            <input type="number" class="form-control" id="number" placeholder="+880-XXXX-YYY-ZZZ">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="number">Emergency Contact</label>
                                            <input type="number" class="form-control" id="number" placeholder="+880-XXXX-YYY-ZZZ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email <span class="small">Primary</span></label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email  <span class="small">Seondery</span></label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="dob">Date of Birth</label>
                                            <input type="number" class="form-control" id="number" placeholder="DD/MM/YY">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nid">NID/Passport</span></label>
                                            <input type="text" class="form-control" id="nid" placeholder="Identification Number">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="religion">Religion</label>
                                            <input type="text" class="form-control" id="religion" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="dob">Nationality</label>
                                            <select class="form-control">
                                                <option>Bangladesh</option>
                                                <option>India</option>
                                                <option>USA</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nid">Father's Name</label>
                                            <input type="text" class="form-control" id="nid" placeholder="Type of engagement activity">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="religion">Mother's Name</label>
                                            <input type="text" class="form-control" id="religion" placeholder="What is your position">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="spname">Spouse's Name</label>
                                            <input type="text" class="form-control" id="spname" placeholder="Spouse's Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="dob">Date of Birth</label>
                                            <input type="number" class="form-control" id="number" placeholder="DD/MM/YY">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nid">Occupation</label>
                                            <input type="text" class="form-control" id="nid" placeholder="Type of engagement activity">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="religion">Designation</label>
                                            <input type="text" class="form-control" id="religion" placeholder="What is your position">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="dob">Company Name</label>
                                            <input type="text" class="form-control" id="religion" placeholder="Name of your company">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="nid"><b>Office Address</b></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="nid">Select Country</label>
                                            <select class="form-control select2bs4" style="width: 100%";>
                                                <option selected="selected">Bangladesh</option>
                                                <option>India</option>
                                                <option>USA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="nid">Select District</label>
                                            <select class="form-control select2bs4" style="width: 100%";>
                                                <option selected="selected">Bangladesh</option>
                                                <option>India</option>
                                                <option>USA</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="nid">Select Thana</label>
                                            <select class="form-control select2bs4" style="width: 100%";>
                                                <option selected="selected">Bangladesh</option>
                                                <option>India</option>
                                                <option>USA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="nid">Area</label>
                                            <input type="text" class="form-control" id="religion" placeholder="H# 222, Plot# 3633, R# 120, Vill# XYZ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="nid"><b>Mailing Address</b></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="nid">Select Country</label>
                                            <select class="form-control select2bs4" style="width: 100%";>
                                                <option selected="selected">Bangladesh</option>
                                                <option>India</option>
                                                <option>USA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="nid">Select District</label>
                                            <select class="form-control select2bs4" style="width: 100%";>
                                                <option selected="selected">Bangladesh</option>
                                                <option>India</option>
                                                <option>USA</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="nid">Select Thana</label>
                                            <select class="form-control select2bs4" style="width: 100%";>
                                                <option selected="selected">Bangladesh</option>
                                                <option>India</option>
                                                <option>USA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="nid">Area</label>
                                            <input type="text" class="form-control" id="religion" placeholder="H# 222, Plot# 3633, R# 120, Vill# XYZ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="nid"><b>Permanent Address</b></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="nid">Select Country</label>
                                            <select class="form-control select2bs4" style="width: 100%";>
                                                <option selected="selected">Bangladesh</option>
                                                <option>India</option>
                                                <option>USA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="nid">Select District</label>
                                            <select class="form-control select2bs4" style="width: 100%";>
                                                <option selected="selected">Bangladesh</option>
                                                <option>India</option>
                                                <option>USA</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="nid">Select Thana</label>
                                            <select class="form-control select2bs4" style="width: 100%";>
                                                <option selected="selected">Bangladesh</option>
                                                <option>India</option>
                                                <option>USA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="nid">Area</label>
                                            <input type="text" class="form-control" id="religion" placeholder="H# 222, Plot# 3633, R# 120, Vill# XYZ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nid">Nominee's Name</label>
                                            <input type="text" class="form-control" id="nid" placeholder="Nominee's Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="religion">Relation</label>
                                            <input type="text" class="form-control" id="religion" placeholder="Relation between Investor">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="spname">Nominee's Id</label>
                                            <input type="text" class="form-control" id="spname" placeholder="Nominee's identity">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="dob">Mobile</label>
                                            <input type="number" class="form-control" id="number" placeholder="Mobile number">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="#" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Save Information" class="btn btn-success float-right">
            </div>
        </div>
    </div>
            <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
@push('scripts')

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
@endpush
