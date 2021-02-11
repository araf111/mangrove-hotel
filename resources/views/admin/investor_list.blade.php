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
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Invoice Share</li>
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
        <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="invoice p-5 mb-3">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-12 mb-3">
                            <img src="{{ asset( 'backend/img/logo-g.png') }}">
                            <h4 class="float-right">Date: 9/5/2020 </h4>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info mb-3">
                        <div class="col-sm-4 invoice-col pr-3">
                        	<span>From</span><br />
                        	<span><strong>Mangrove</strong></span><br />
                        	<span>House 4/A Plot 4, 3rd Floor, Dhanmondi Tower Road 27 (Old), Dhanmondi, Dhaka 1207.</span><br />
                        	<span>Mobile: 01718140623</span><br />
                        	<span>Email: abds@gmail.com</span>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col pr-3">
                            <span>To</span><br />
                        	<span><strong>Mehedi</strong></span><br />
                        	<span>House 4/A Plot 4, 3rd Floor, Dhanmondi Tower Road 27 (Old), Dhanmondi, Dhaka 1207.</span><br />
                        	<span>Mobile: 01718140623</span><br />
                        	<span>Email: abds@gmail.com</span>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col pr-3">
                        	<ul class="nav nav-pills flex-column">
                        	    <li class="nav-item ptb-10 mb-2">
                        	        Invoice
                        	        <span class="float-right">#007612</span>
                        	    </li>
                        	    <li class="nav-item ptb-10 mb-2">
                        	        Project Name
                        	        <span class="float-right">Kuakata</span>
                        	    </li>
                        	    <li class="nav-item ptb-10 mb-2">
                        	        Your ID 
                        	        <span class="float-right">MK107861</span>
                        	    </li>
                        	    <li class="nav-item ptb-10 mb-2">
                        	        Order ID
                        	        <span class="float-right">4F3S8J</span>
                        	    </li>
                        	    <li class="nav-item ptb-10 mb-2">
                        	        Payment Due
                        	        <span class="float-right">02-04-2020</span>
                        	    </li>
                        	    <li class="nav-item ptb-10 mb-2">
                        	    	Account
                        	    	<span class="float-right">968-34567</span>
                        	    </li>
                        	</ul>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Table row -->
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Qty</th>
                                        <th style="text-align:center;">Instalment Number</th>
                                        <th>Share ID</th>
                                        <th style="text-align:right;">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td style="text-align:center;">01</td>
                                        <td>MK107861-01</td>
                                        <td style="text-align:right;">5000</td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td style="text-align:center;">01</td>
                                        <td>MK107861-02</td>
                                        <td style="text-align:right;">5000</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-8">
                            <p class="lead">Payment Methods:</p>
                            <img style="width:30px;" src="{{ asset( 'backend/img/money.png') }}" alt="Cash" />
                            <img style="width:30px;" src="{{ asset( 'backend/img/money.png') }}" alt="B" />
                            <img style="width:30px;" src="{{ asset( 'backend/img/money.png') }}" alt="" />

                            <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                            </p>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th style="width: 50%;">Subtotal:</th>
                                            <td style="text-align:right;">10000</td>
                                        </tr>
                                        <tr>
                                            <th>Tax (9.3%)</th>
                                            <td style="text-align:right;">100</td>
                                        </tr>
                                        <tr>
                                            <th>Total:</th>
                                            <td style="text-align:right;">10100</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- this row will not appear when printing -->
                    <div class="row no-print">
                        <div class="col-12">
                            <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                            <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit Payment</button>
                            <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;"><i class="fas fa-download"></i> Generate PDF</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->

@endsection
@push('scripts')

@endpush