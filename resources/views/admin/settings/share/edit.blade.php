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
                <h1 class="m-0 text-dark">Share</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Settings</a></li>
                    <li class="breadcrumb-item active">Share</li>
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
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Update Share for Investor</h3>
                    </div>
    
                    <!-- /.card-header -->
                    <div class="card-body">
                        {{ Form::model(request()->old(),array('route' => array('admin.shares.update', $share->id),'class'=>'','novalidate'=>'novalidate','files'=>false)) }}
                        @method('PUT')
                        @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Select project for Share</label>
                                    <select name="project_id" class="custom-select">
                                        @foreach($projects as $project)
                                        <option value="{{$project->id}}">{{$project->name}}-{{$project->code}}</option>
                                        @endforeach 
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Grand Total Price <span class="small">Including utility & operational Charges</span></label>
                                    
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">BDT</span>
                                        </div>
                                        <input type="number" name="grand_total" value="{{$share->grand_total}}" class="form-control" placeholder="200000.00">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                    @if ($errors->has('grand_total'))
                                    <span class="text-danger">{{ $errors->first('grand_total') }}</span>
                                    @endif
                                </div>                                                              
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Booking Money</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">BDT</span>
                                        </div>
                                        <input type="number" name="booking_amount" value="{{$share->booking_amount}}" class="form-control" placeholder="50000.00">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                    @if ($errors->has('booking_amount'))
                                    <span class="text-danger">{{ $errors->first('booking_amount') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Installment Amount- Per Month</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">BDT</span>
                                        </div>
                                        <input type="number" name="installment_amount" value="{{$share->installment_amount}}" class="form-control" placeholder="5000.00">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                    @if ($errors->has('installment_amount'))
                                    <span class="text-danger">{{ $errors->first('installment_amount') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="inword">Installment Number(EMI)</label>
                                    <input type="number" class="form-control" value="{{$share->installment_number}}" name="installment_number" id="installment_number" placeholder="12">
                                    @if ($errors->has('installment_number'))
                                    <span class="text-danger">{{ $errors->first('installment_number') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="continue" class="custom-select">
                                        <option value="1" @if($share->continue == 1) selected="selected" @endif>Activate</option>
                                        <option value="0" @if($share->continue == 0) selected="selected" @endif>Deactivate</option>
                                    </select>
                                    @if ($errors->has('continue'))
                                    <span class="text-danger">{{ $errors->first('continue') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="card-footer">
                                    <button type="submit" class="btn btn-primary float-right">Save Share</button>
                                    </div>
                                </div>
                            </div>
                       {{--  </form> --}}
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Share list</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Project Name</th>
                                    <th>Grand Total</th>
                                    <th>Booking money</th>
                                    <th>Installment Amount</th>
                                    <th>Installment Number</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $shares as $share)
                                <tr>
                                    <td>{{$share->id}}</td>
                                    <td>{{$share['project']->name ?? ''}}-{{$share['project']->code ?? ''}}</td>
                                    <td>{{$share->grand_total}} BDT</td>
                                    <td>{{$share->booking_amount}} BDT</td>
                                    <td>{{$share->installment_amount}} BDT</td>
                                    <td>{{$share->installment_number}}</td>
                                    <td>@if($share->continue==1) <b>Continue </b> @else Disabled @endif</td>
                                    <td>
                                        <a href="{{route('admin.shares.edit',$share->id)}}">
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Edit">
                                                <i class="fas fa-edit"></i></button>
                                            </div>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        
    </div>
</section>
<!-- /.content -->
@endsection

@section('content')
Users
@endsection

@push('scripts')
    <script>

        @if(Session::has('success'))
            toastr.success("{{Session::get('success')}}")
        @endif

         @if(Session::has('info'))
            toastr.info("{{Session::get('info')}}")
        @endif
        @if(Session::has('warning'))
            toastr.warning("{{Session::get('warning')}}")
        @endif

    </script>
@endpush
