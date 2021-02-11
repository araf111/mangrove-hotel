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

                            <div class="col-sm-4 invoice-col pr-3">
                                <span>From</span><br />
                                <span><strong>{{$investor->projectName}}</strong></span><br />
                                <span>{{$investor->projectAddress}}</span><br />
                                {!! $investor->projectDescription !!}
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col pr-3">
                                <span>To</span><br />
                                <span><strong>{{$investor->investor_name}}</strong></span><br />
                                <span>{{$investor->address}}</span><br />
                                <span>Mobile: {{$investor->mobile}}</span><br />
                                <span>Email: {{$investor->email_primary}}</span>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col pr-3">
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item ptb-10 mb-2">
                                        Invoice
                                        <span class="float-right">#{{$investor->invoiceNo}}</span>
                                    </li>
                                    <li class="nav-item ptb-10 mb-2">
                                        Project Name
                                        <span class="float-right">{{$investor->projectName}}</span>
                                    </li>
                                    <li class="nav-item ptb-10 mb-2">
                                        Your ID
                                        <span class="float-right">{{$investor->investor_own_id}}</span>
                                    </li>
                                    <li class="nav-item ptb-10 mb-2">
                                        Order ID
                                        <span class="float-right">{{$investor->investor_share_payments_id}}-{{$investor->investor_share_id}}</span>
                                    </li>
{{--                                    <li class="nav-item ptb-10 mb-2">--}}
{{--                                        Payment Due--}}
{{--                                        <span class="float-right">02-04-2020</span>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item ptb-10 mb-2">--}}
{{--                                        Account--}}
{{--                                        <span class="float-right">968-34567</span>--}}
{{--                                    </li>--}}
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
                                        <td style="text-align:center;">{{$investor->installment}}</td>
                                        <td>{{$investor->investor_share_id}}</td>
                                        <td style="text-align:right;">{{$investor->amount}}</td>
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
                                <span><b>Cash</b></span><br/>
                                <span><b>Bank</b></span><br/>
                                <span><b>Online</b></span>

{{--                                <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">--}}
{{--                                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.--}}
{{--                                </p>--}}
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <th style="width: 50%;">Subtotal:</th>
                                            <td style="text-align:right;">{{$investor->amount}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tax (9.3%)</th>
                                            <td style="text-align:right;">{{($investor->amount*(9.3/100))}}</td>
                                        </tr>
                                        <tr>
                                            <th>Total:</th>
                                            <td style="text-align:right;">{{$investor->amount+($investor->amount*(9.3/100))}}</td>
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

                                <button type="button" class="btn bg-success float-right" data-toggle="modal" data-target="#makePayment"><i class="far fa-credit-card"></i> Make Payment</button>
                                <a type="button" class="btn btn-primary float-right" style="margin-right: 5px;" href="{{route('admin.invoice.generatePDF',['id'=>$investor->investor_share_payments_id])}}" ><i class="fas fa-download"></i> Generate PDF</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="makePayment">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Payment</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    {{ Form::model(request()->old(),array('route' => array('admin.investors.share.store'),'class'=>'','novalidate'=>'novalidate','files'=>true,'id'=>'frmInvestor')) }}

                    <div class="modal-body">

                        <div class="card-body" style="padding-top:0px;">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Payment Amount</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">BDT</span>
                                    </div>
                                    {{Form::text('grand_total', null, array('class' => "form-control",'id'=>'grand_total','placeholder'=>'', 'required' => 'required', 'maxlength' => '50'))}}
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                                @if ($errors->has('grand_total'))
                                    <span class="text-danger">{{ $errors->first('grand_total') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="payment_method">Mode Of Payment</label>
                                <select name="payment_method" class="form-control">
                                    <option value="">Select payment Mode</option>
                                    <option value="Cash Payment">Cash Payment</option>
                                    <option value="Visa Card">Visa Card</option>
                                    <option value="Master Card">Master Card</option>
                                    <option value="AMEX Card">AMEX Card</option>
                                    <option value="Cheque Payment">Cheque Payment</option>
                                    <option value="MCity Bank Deposit">City Bank Deposit</option>
                                    <option value="NRBC Bank Deposit">NRBC Bank Deposit</option>
                                </select>
                                @if ($errors->has('payment_method'))
                                <span class="text-danger">{{ $errors->first('payment_method') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="radio-button-selections" data-toggle-element-value="po">
                                    <div class="row">
                                        <div class="col-md-6">
                                            {{Form::text('bank_name', null, array('class' => "form-control",'id'=>'','placeholder'=>'Bank Name', 'required' => 'required', 'maxlength' => '50'))}}
                                        </div>
                                        <div class="col-md-6">
                                            {{Form::text('branch_name', null, array('class' => "form-control",'id'=>'','placeholder'=>'Branch Name', 'required' => 'required', 'maxlength' => '50'))}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="bank_transation_id">Bank Transation Id</label>
                                 {{Form::text('bank_transation_id', null, array('class' => "form-control",'id'=>'bank_transation_id','placeholder'=>'Transation Id', 'required' => 'required', 'maxlength' => '50'))}}
                                @if ($errors->has('bank_transation_id'))
                                <span class="text-danger">{{ $errors->first('bank_transation_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="share_id">Share Id *</label>
                                <select name="share_id" id="share_id" class="form-control">
                                    <option value="">Select Share Id</option>
                                    @foreach($allShare as $share)
                                    <option value="{{$share->id}}">{{$share->share_id}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('share_id'))
                                <span class="text-danger">{{ $errors->first('share_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="emi_id">EMI *</label>
                                <select name="emi_id[]" id="emi_id" class="form-control select2" multiple="multiple">
                                    <option value="">Select EMI</option>
                                </select>
                                @if ($errors->has('emi_id[]'))
                                <span class="text-danger">{{ $errors->first('emi_id[]') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Confirm Payment</button>
                    </div>
                    {{ Form::close() }}

                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.row -->
    </section>

@endsection
@push('scripts')
<script>
    $(document).on('change','#share_id',function(e){
    e.preventDefault();
    var shareId = $("#share_id").val();
    // console.log(shareId);
    $.ajax({
        type : 'GET',
        url : "{{route('admin.findemi')}}",
        data : {id : shareId},
        dataType: 'json',
        success : function(data){
            // console.log(data);
        var keyvar;
        var selOpts = "";
        var i = 0;
         for (keyvar in data)
            {
                selOpts += "<option value='"+data[i].id+"'>"+data[i].created_emi+"</option>";
                i++;
            }
            $('#emi_id').html(selOpts);

        },
        error: function(data)
        {
            console.log(data);
        }
    })
});
</script>
<script>
    $(".select2").select2();
</script>

@endpush

