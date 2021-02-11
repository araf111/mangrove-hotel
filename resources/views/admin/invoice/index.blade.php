@extends('admin.layouts.app')
@section('title', 'Mangrove Invoice')

@section('navbar')
@parent
<!-- Left navbar links -->
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
{{--    <li class="nav-item d-none d-sm-inline-block">--}}
{{--        <a href="{{ route('admin.investors.index') }}" class="nav-link btn btn-block btn-outline-success">Invoice</a>--}}
{{--    </li>--}}
{{--    <li class="nav-item d-none d-sm-inline-block">--}}
{{--        <a href="{{ route('admin.investors.create') }}" class="nav-link">Add Investor</a>--}}
{{--    </li>--}}
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
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
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

                                    <div class="pagination float-right"> {!! $investors->appends(['search' => Request::get('search')])->render() !!} </div>

                            </div>
                        </div>
                    </div>
{{--                    <div class="card-header row">--}}
{{--                        <div class="col-12">--}}
{{--                            <div class="float-right">--}}
{{--                                <div class="btn-group">--}}
{{--                                    <a style="color: #fff" href="{{route('admin.invoice.create')}}" class="btn btn-primary">Create Invoice</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
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
                            @php
                            $sl =1;
                            @endphp
                            @foreach($investors as $investor)
                            <tr>

                                <td>{{$sl}}</td>

                                <td><img alt="Avatar" class="table-avatar"
                                        src="{{asset("storage/".$investor->picture)}}"></td>

                                <td class="t-payment">
                                    {{$investor->invoiceNo}}

                                </td>

                                <td>@php $string = substr($investor->investor_id,0,10);@endphp {{$string}}</td>
                                <td class="t-payment">
                                    {{$investor->investor_share_id}}

                                </td>
                                <td>{{$investor->projectName}}</td>
                                <td> <a href="{{route('admin.investors.show',$investor->investors_account_id)}}">&nbsp;{{$investor->name}}</a>&nbsp;</td>

                                <td class="text-right">{{$investor->amount}}</td>
                                <td class="project-state t-payment " style="color: {{$investor->status=='Due'?'#dc3545':'#5DA846'}} ">
                                    {{$investor->status}}
                                </td>
                                <td class="py-0 align-middle text-center">
                                    <div class="btn-group btn-group-sm">
                                        <a href="{{route('admin.invoice.show',$investor->investor_share_payments_id)}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>&nbsp;&nbsp;
{{--                                        <a href="{{route('admin.investors.edit',$investor->id)}}"--}}
{{--                                            class="btn btn-info"><i class="fas fa-edit"></i></a>&nbsp;&nbsp;--}}

{{--                                        <form style="float: left;" action="{{ route('admin.investors.destroy',['investor' => $investor->id]) }}" method="POST" onclick="return confirm('Are sure you want to delete?')">--}}

{{--                                            @csrf--}}

{{--                                            @method('DELETE')--}}

{{--                                            <button type="submit" name="insert" class="btn  btn-danger btn-flat" > <i class="far fa-trash-alt"></i></button>--}}



{{--                                        </form>--}}
{{--                                        <a href="#" class="btn btn-warning"><i class="fas fa-download"></i></a>--}}
                                        <!-- <a href="#" class="btn btn-danger"><i class="far fa-trash-alt"></i></a> -->
                                    </div>
                                </td>
                            </tr>
                            @php $sl++; @endphp
                            @endforeach

                        </tbody>
                    </table>
                    <div style="width: 100%; text-align: center;margin-top: 20px">
                        <div class="pagination" style="width: 300px;margin: 0 auto;"> {!! $investors->appends(['search' => Request::get('search')])->render() !!} </div>
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
<script>
    @if(Session::has('success'))
        toastr.success("{{Session::get('success')}}")
    @endif

     @if(Session::has('info'))
        toastr.info("{{Session::get('info')}}")
    @endif

</script>
@endpush
