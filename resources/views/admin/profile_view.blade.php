@extends('admin.layouts.app')
@section('title', 'Mangrove Investors')

@section('navbar')
@parent
<!-- Left navbar links -->
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
</ul>
@endsection
@section('content')
<style>
	.ptb-10{
		margin-top:5px !important;
		margin-bottom:5px !important;
	}
	.w-100{
		width:100%
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
            <a href="compose.html" class="btn btn-primary btn-block mb-3">View Profile</a>
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item ptb-10">
                            Project Name
                            <span class="float-right">Kuakata</span>
                        </li>
                        <li class="nav-item ptb-10">
                            Investment ID
                            <span class="float-right">5219599605</span>
                        </li>
                        <li class="nav-item ptb-10">
                            Total Share
                            <span class="float-right">02</span>
                        </li>
                        <li class="nav-item ptb-10">
                        	Grand Total Price
                        	<span class="float-right">৳20000000</span>
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
                            <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Monthly Instalment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">MK107861-02</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false">MK107861-01</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-three-tabContent">
                        <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
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
                                        <tr>
                                            <td>5</td>
                                            <td>20-04-2020</td>
                                            <td>Not yet</td>
                                            <td>10000</td>
                                            <td> -- </td>
                                            <td class="project-state">
                                                <span class="badge badge-warning">Due</span>
                                            </td>
                                            <td class="py-0 align-middle text-center">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                                    <a href="" class="btn btn-info"><i class="far fa-credit-card"></i> Pay now</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>20-03-2020</td>
                                            <td>05-04-2020</td>
                                            <td>10000</td>
                                            <td>Cash</td>
                                            <td class="project-state">
                                                <span class="badge badge-info">Pending</span>
                                            </td>
                                            <td class="py-0 align-middle text-center">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>01-05-2020</td>
                                            <td>25-05-2020</td>
                                            <td>10000</td>
                                            <td>Cash</td>
                                            <td class="project-state">
                                                <span class="badge badge-success">Paid</span>
                                            </td>
                                            <td class="py-0 align-middle text-center">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>01-05-2020</td>
                                            <td>25-05-2020</td>
                                            <td>10000</td>
                                            <td>Cash</td>
                                            <td class="project-state">
                                                <span class="badge badge-success">Paid</span>
                                            </td>
                                            <td class="py-0 align-middle text-center">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>01-05-2020</td>
                                            <td>25-05-2020</td>
                                            <td>10000</td>
                                            <td>Cash</td>
                                            <td class="project-state">
                                                <span class="badge badge-success">Paid</span>
                                            </td>
                                            <td class="py-0 align-middle text-center">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>01-05-2020</td>
                                            <td>25-05-2020</td>
                                            <td>10000</td>
                                            <td>Cash</td>
                                            <td class="project-state">
                                                <span class="badge badge-success">Paid</span>
                                            </td>
                                            <td class="py-0 align-middle text-center">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- /.table -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item ptb-10">
                                    <div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
                                        <label class="btn btn-default text-center bg-info">
                                        <span class="text-xl">5</span>
                                        <br />
                                        Current Instalment
                                        </label>
                                        <label class="btn btn-default text-center">
                                        <span class="text-xl">31</span>
                                        <br />
                                        Remaining Instalment
                                        </label>
                                        <label class="btn btn-default text-center">
                                        <span class="text-xl">36</span>
                                        <br />
                                        Total Instalment
                                        </label>
                                    </div>
                                </li>
                                <li class="nav-item ptb-10">
                                    Share Price
                                    <span class="float-right">৳500000</span>
                                </li>
                                <li class="nav-item ptb-10">
                                    Booking money
                                    <span class="float-right">৳50000</span>
                                </li>
                                <li class="nav-item ptb-10">
                                    Total Paid
                                    <span class="float-right">৳25000</span>
                                </li>
                                <li class="nav-item ptb-10">
                                    Installment Amount/Month
                                    <span class="float-right">৳5000</span>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item ptb-10">
                                    <div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
                                        <label class="btn btn-default text-center bg-info">
                                        <span class="text-xl">5</span>
                                        <br />
                                        Current Instalment
                                        </label>
                                        <label class="btn btn-default text-center">
                                        <span class="text-xl">31</span>
                                        <br />
                                        Remaining Instalment
                                        </label>
                                        <label class="btn btn-default text-center">
                                        <span class="text-xl">36</span>
                                        <br />
                                        Total Instalment
                                        </label>
                                    </div>
                                </li>
                                <li class="nav-item ptb-10">
                                    Share Price
                                    <span class="float-right">৳500000</span>
                                </li>
                                <li class="nav-item ptb-10">
                                    Booking money
                                    <span class="float-right">৳50000</span>
                                </li>
                                <li class="nav-item ptb-10">
                                    Total Paid
                                    <span class="float-right">৳25000</span>
                                </li>
                                <li class="nav-item ptb-10">
                                    Installment Amount/Month
                                    <span class="float-right">৳5000</span>
                                </li>
                            </ul> 
                        </div>
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
          <div class="modal-body">
            <div class="form-group">
                              <label>Select Share date</label>

                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="far fa-calendar-alt"></i>
                                  </span>
                                </div>
                                <input type="text" class="form-control float-right" id="reservation">
                              </div>
                              <!-- /.input group -->
                            </div>
                            <div class="form-group">
                              <label for="inword">Installment Number(EMI)</label>
                              <input type="number" class="form-control" name="installment_number" id="installment_number" placeholder="12">
                            </div>
                            <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">BDT</span>
                                                                    </div>
                                                                    <input type="number" name="installment_amount" class="form-control" placeholder="5000.00">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text">.00</span>
                                                                    </div>
                                                                </div>
          </div>
          
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>


</section>
<!-- /.content -->

@endsection
@push('scripts')

@endpush