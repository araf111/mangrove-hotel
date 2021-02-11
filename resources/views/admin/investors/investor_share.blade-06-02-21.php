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
        <a href="{{route('admin.investors.show',$investor->id)}}" class="btn btn-primary btn-block mb-3">View Profile</a>
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item ptb-10">
                            Project Name
                            <span class="float-right">{{$investor->project_name}}</span>
                        </li>
                        <li class="nav-item ptb-10">
                            Investment ID
                            <span class="float-right">{{$investor->investor_id}}</span>
                        </li>
                        <li class="nav-item ptb-10">
                            Total Share
                            <span class="float-right">{{$investor['shares']->count()}}</span>
                        </li>
                        <li class="nav-item ptb-10">
                            Grand Total Price
                            <span class="float-right">৳{{$investor['shares']->sum('grand_total')}}</span>
                        </li>
                        <li class="nav-item ptb-10">
                            Investor Status
                            <span class="bg-primary float-right" style="margin-left: 20px; padding: 5px;border-radius: 5px;">Active</span>
                            &nbsp;
                            &nbsp;
                            <!-- OR -->
                            <span class="bg-secondary float-right" style=" padding: 5px;border-radius: 5px;">Disable</span>
                        </li>
                    </ul>
                </div>
            </div>
            <button type="button" class="btn bg-primary float-right" data-toggle="modal" data-target="#addShare">
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
                        @foreach ($investor['shares'] as $share)
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
                                href="#custom-tabs-three-profile-{{$share->id}}" role="tab"
                                aria-controls="custom-tabs-three-profile" aria-selected="false">{{$share->share_id}}</a>
                        </li>
                        @endforeach
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
                                        @php
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
                                        @endphp
                                        <tr>
                                            <td>1</td>
                                            <td>{{ '--' }}</td>
                                            <td>Not yet</td>
                                            <td>{{$totalDuePayment}} </td>
                                            <td> -- </td>
                                            <td class="project-state">
                                                <span class="badge badge-warning">Due</span>
                                            </td>
                                            <td class="py-0 align-middle text-center">
                                                <div class="btn-group btn-group-sm">
                                                   <a href="" class="btn btn-primary"><i class="fas fa-eye"></i></a>

{{--                                                    {{ Form::model(request()->old(),array('route' => array('admin.investors.share.payment'),'class'=>'','novalidate'=>'novalidate','files'=>true,'id'=>'frmInvestor')) }}--}}
{{--                                                    <button type="submit" class="btn btn-info"><i class="far fa-credit-card"></i>--}}
{{--                                                        Pay now</button>--}}
{{--                                                    <input type="hidden" name="payment_share_ids" value="{{ json_encode($paymentShareIds) }}">--}}
{{--                                                    {{ Form::close() }}--}}
                                                </div>

                                            </td>
                                        </tr>
                                        @php
                                            $i = 2;
                                        @endphp
                                        @foreach ($sharePaymentPaidList as $item)
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-M-Y')}}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->updated_at)->format('d-M-Y')}}</td>
                                            <td>{{$item->amount}}</td>
                                            <td>{{$item->payment_type}}</td>
                                            <td class="project-state">
                                                <span class="badge badge-success">{{$item->status}}</span>
                                            </td>
                                            <td class="py-0 align-middle text-center">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                                </div>
                                                <div class="btn-group btn-group-sm">
                                                    <a href="{{route('admin.invoice.show',$item->id)}}" class="btn btn-primary">View As Invoice</a>
                                                </div>
                                            </td>
                                        </tr>
                                        @php
                                            $i++;
                                        @endphp
                                        @endforeach

                                        {{-- <tr>
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
                                        </tr> --}}

                                    </tbody>
                                </table>
                                <!-- /.table -->
                            </div>
                        </div>

                        @foreach ($investor['shares'] as $share)
                        <div class="tab-pane fade" data-anchor="custom-tabs-three-profile-{{$share->id}}"  id="custom-tabs-three-profile-{{$share->id}}" role="tabpanel"
                            aria-labelledby="custom-tabs-three-profile-tab">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item ptb-10">
                                    <div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
                                        <label class="btn btn-default text-center bg-info">

                                            <span
                                                class="text-xl">{{ $share['payments']->where('installment','<>','0')->where('status','Paid')->count()}}</span>
                                            <br />
                                            Current Instalment
                                        </label>
                                        <label class="btn btn-default text-center">
                                            <span
                                                class="text-xl">{{$share->installment_number - $share['payments']->where('installment','<>',0)->where('status','<>','Due')->count()}}</span>
                                            <br />
                                            Remaining Instalment
                                        </label>
                                        <label class="btn btn-default text-center">
                                            <span class="text-xl">{{$share->installment_number}}</span>
                                            <br />
                                            Total Instalment
                                        </label>
                                    </div>
                                </li>
                                <li class="nav-item ptb-10">
                                    Share Price
                                    <span class="float-right">৳{{$share->grand_total}}</span>
                                </li>
                                <li class="nav-item ptb-10">
                                    Booking money
                                    <span class="float-right">{{$share->booking_amount}}</span>
                                </li>
                                <li class="nav-item ptb-10">
                                    Installment Amount/Month
                                    <span class="float-right">{{$share->installment_amount}}</span>
                                </li>
                                <li class="nav-item ptb-10">
                                    Total Paid
                                    <span class="float-right">
                                        {{$share['payments']->where('status','<>','Due')->where('installment','<>','0')->sum('amount')}}.00
                                    </span>
                                </li>
                            </ul>
                        </div>
                        @endforeach
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
                {{ Form::model(request()->old(),array('route' => array('admin.investors.share.store'),'class'=>'','novalidate'=>'novalidate','files'=>true,'id'=>'frmInvestor')) }}

                    <div class="modal-body">
                        <div class="form-group">
                            {{ Form::label('Select Project') }}
                            {{ Form::select('project_id', $projects, null, array('class'=>'custom-select', 'placeholder'=>'Please select ...')) }}

                            @if ($errors->has('project_id'))
                            <span class="text-danger">{{ $errors->first('project_id') }}</span>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Grand Total Price <span class="small">Including utility
                                        & operational Charges</span></label>
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
                                <label for="inword">In Words</label>
                                <input type="text" class="form-control" id="inword" placeholder="Amount in words">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Payment Selection</label>
                                <br>
                                {{Form::radio('payment_method', 'Cash', true, array('class' => "d-inline",'id'=>'','placeholder'=>'','data-toggle-element'=>'.radio-button-selections', 'required' => 'required'))}}
                                Cash
                                {{Form::radio('payment_method', 'Bank', false, array('class' => "d-inline",'id'=>'','placeholder'=>'','data-toggle-element'=>'.radio-button-selections', 'required' => 'required'))}}
                                Bank
                                {{Form::radio('payment_method', 'Online', false, array('class' => "d-inline",'id'=>'','placeholder'=>'','data-toggle-element'=>'.radio-button-selections', 'required' => 'required'))}}
                                Online
                                @if ($errors->has('payment_method'))
                                <span class="text-danger">{{ $errors->first('payment_method') }}</span>
                                @endif
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
                                            {{Form::text('bank_name', null, array('class' => "form-control",'id'=>'','placeholder'=>'Bank Name', 'required' => 'required', 'maxlength' => '50'))}}
                                        </div>
                                        <div class="col-md-6">
                                            {{Form::text('branch_name', null, array('class' => "form-control",'id'=>'','placeholder'=>'Branch Name', 'required' => 'required', 'maxlength' => '50'))}}
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
                                    {{Form::text('booking_amount', null, array('class' => "form-control",'id'=>'booking_amount','placeholder'=>'', 'required' => 'required', 'maxlength' => '150'))}}

                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                    @if ($errors->has('booking_amount'))
                                    <span class="text-danger">{{ $errors->first('booking_amount') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="share_id">Share Id *</label>
                                {{Form::text('share_id', null, array('class' => "form-control",'id'=>'share_id','placeholder'=>'Share Id', 'required' => 'required', 'maxlength' => '150'))}}
                                @if ($errors->has('share_id'))
                                    <span class="text-danger">{{ $errors->first('share_id') }}</span>
                                @endif
                            </div>
{{--                            {{Form::hidden('share_id', null, array('class' => "form-control",'id'=>'share_id'))}}--}}
                            {{Form::hidden('installment_amount', null, array('class' => "form-control",'id'=>'installment_amount'))}}
                            {{Form::hidden('installment_number', null, array('class' => "form-control",'id'=>'installment_number'))}}
                            {{Form::hidden('investor_id', $investor->id, array('class' => "form-control",'id'=>'installment_number'))}}
                        </div>
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add share</button>
                    </div>
                {{ Form::close() }}

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


</section>
<!-- /.content -->

@endsection
@push('scripts')
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
        url : "{{route('admin.ajaxRequest')}}",
        data : {id : projectId},
        dataType: 'json',
        success : function(data){
            $('#grand_total').attr('value', data.grand_total);
            $('#booking_amount').attr('value', data.booking_amount);
            // $('#share_id').attr('value', data.id);
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
    @if(Session::has('success'))
        toastr.success("{{Session::get('success')}}")
    @endif

    @if(Session::has('info'))
        toastr.info("{{Session::get('info')}}")
    @endif
</script>
@endpush
