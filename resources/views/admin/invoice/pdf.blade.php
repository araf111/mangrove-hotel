@extends('admin.layouts.pdf')
@section('title', 'Mangrove Invoice')


@section('content')
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline" id="pdfContent">
                    <div class="invoice p-5 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12 mb-3">
                                <img src="{{ asset( 'backend/img/logo-g.png') }}">
                                <h4 class="float-right">Date: {{date('d/m/Y',strtotime($investor->created_at))}} </h4>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info mb-3">
                            <table>
                                <tr>
                                    <td>
                                        <div class="col-sm-4 invoice-col pr-3">
                                            <span>From</span><br />
                                            <span><strong>{{$investor->projectName}}</strong></span><br />
                                            <span>{{$investor->projectAddress}}</span><br />
                                            {!! $investor->projectDescription !!}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-sm-4 invoice-col pr-3">
                                            <span>To</span><br />
                                            <span><strong>{{$investor->investor_name}}</strong></span><br />
                                            <span>{{$investor->address}}</span><br />
                                            <span>Mobile: {{$investor->mobile}}</span><br />
                                            <span>Email: {{$investor->email_primary}}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <table style="width: 100%; text-align: right; float: right">
                                            <tr style="width: 100%">
                                                <td style="text-align:left;width: 40%;border-bottom: 1px solid rgba(0, 0, 0, 0.125);">Invoice</td>
                                                <td style="text-align: right;border-bottom: 1px solid rgba(0, 0, 0, 0.125);">#{{$investor->invoiceNo}}</td>
                                            </tr >
                                            <tr style="width: 100%">
                                                <td style="text-align:left;width: 45%;border-bottom: 1px solid rgba(0, 0, 0, 0.125);">Project Name</td>
                                                <td style="text-align: right;border-bottom: 1px solid rgba(0, 0, 0, 0.125);">{{$investor->projectName}}</td>
                                            </tr>
                                            <tr style="width: 100%">
                                                <td style="text-align:left;width: 40%;border-bottom: 1px solid rgba(0, 0, 0, 0.125);">Your ID</td>
                                                <td style="text-align: right;border-bottom: 1px solid rgba(0, 0, 0, 0.125);">{{$investor->investor_own_id}}</td>
                                            </tr>
                                            <tr style="width: 100%">
                                                <td style="text-align:left;width: 40%;border-bottom: 1px solid rgba(0, 0, 0, 0.125);">Order ID</td>
                                                <td style="text-align: right;border-bottom: 1px solid rgba(0, 0, 0, 0.125);">{{$investor->investor_share_payments_id}}-{{$investor->investor_share_id}}</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                            <!-- /.col -->

                            <!-- /.col -->

                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- Table row -->

                                <table width="100%" style="margin-top: 30px;">
                                    <thead>
                                    <tr style="border-top: 1px solid #dee2e6;padding: 100px">
                                        <th width="25%" style="text-align:left;padding-bottom: 10px;border-top: 1px solid #dee2e6;">Qty</th>
                                        <th width="25%" style="text-align:center;padding-bottom: 10px;border-top: 1px solid #dee2e6;">Instalment Number</th>
                                        <th width="25%" style="text-align:center;padding-bottom: 10px;border-top: 1px solid #dee2e6;">Share Id</th>
                                        <th width="25%" style="text-align:right;padding-bottom: 10px;border-top: 1px solid #dee2e6;">Subtotal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr style="background-color: rgba(0, 0, 0, 0.05);">
                                        <td style="padding: 10px;">01</td>
                                        <td style="text-align:center;padding: 10px;">{{$investor->installment}}</td>
                                        <td style="text-align:center;padding: 10px;">{{$investor->investor_share_id}}</td>
                                        <td style="text-align:right;padding: 10px;">{{$investor->amount}}</td>
                                    </tr>


                                    </tbody>
                                </table>

                        <!-- /.row -->

                        <div class="row" >
                            <!-- accepted payments column -->
                            <table width="100%" style="margin-top: 30px;">
                                <tr>
                                    <td width="50%">
                                        <div >
                                            <p class="lead">Payment Methods:</p>
                                            <span><b>{{$investor->payment_method}}</b></span><br/>

                                        </div>
                                    </td>
                                    <td width="50%" style="text-align: right">
                                        <table class="table" style="float: right">
                                            <tbody>
                                            <tr>
                                                <th style="text-align:left;width: 50%;border-top: 1px solid #dee2e6;">Subtotal:</th>
                                                <td style="text-align:right;border-top: 1px solid #dee2e6;">{{$investor->amount}}</td>
                                            </tr>
                                            <tr>
                                                <th style="text-align:left;border-top: 1px solid #dee2e6;">Tax (9.3%)</th>
                                                <td style="text-align:right;border-top: 1px solid #dee2e6;">{{($investor->amount*(9.3/100))}}</td>
                                            </tr>
                                            <tr>
                                                <th style="text-align:left;border-top: 1px solid #dee2e6;">Total:</th>
                                                <td style="text-align:right;border-top: 1px solid #dee2e6;">{{$investor->amount+($investor->amount*(9.3/100))}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </table>


                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
    <footer class="main-footer" style="margin-top: 50px;">
        <strong>Copyright &copy; 2020<a href="http://mangrove-hotel.com"> Mangrove-hotel</a>.</strong> All rights reserved.
    </footer>
@endsection
@push('scripts')

@endpush

