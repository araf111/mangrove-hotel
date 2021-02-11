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
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add Share for user</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        {{ Form::model(request()->old(),array('route' => array('admin.shares.store'),'class'=>'','novalidate'=>'novalidate','files'=>false)) }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Select project for Share</label>
                                    <select name="project_id" class="custom-select">
                                        @foreach($projects as $project)
                                        <option value="{{$project->id}}">{{$project->name}}</option>
                                        @endforeach 
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Grand Total Price <span class="small">Including utility & operational Charges</span></label>
                                    
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">BDT</span>
                                        </div>
                                        <input type="text" name="grand_total" class="form-control" placeholder="200000">
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
                                    <input type="text" class="form-control" id="inword" placeholder="Investor Full Name">
                                </div>

                                <div class="form-group">
                                    <label for="inputName">Payment Selection</label>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary3">
                                                <label for="checkboxPrimary3">
                                                    Cash
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary3">
                                                <label for="checkboxPrimary3">
                                                    Brac Bank
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary3">
                                                <label for="checkboxPrimary3">
                                                    Online
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Booking Money</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">BDT</span>
                                        </div>
                                        <input type="text" name="booking_amount" class="form-control" placeholder="5000">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                    @if ($errors->has('booking_amount'))
                                    <span class="text-danger">{{ $errors->first('booking_amount') }}</span>
                                    @endif
                                </div>
                            </div>
                       {{--  </form> --}}
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
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
                                    <th>Project name</th>
                                    <th>Grand total (BDT)</th>
                                    <th>Booking money (BDT)</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $shares as $share)
                                <tr>
                                    <td>{{$share->id}}</td>
                                    <td>{{$share['project']->name ?? ''}}</td>
                                    <td>{{$share->grand_total}}</td>
                                    <td>{{$share->booking_amount}}</td>
                                    <td>
                                        {{-- <form action="{{route('admin.shares.destroy',$share->id)}}" method="POST">
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Edit">
                                                <i class="fas fa-edit"></i></button>
                                            </div>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure?You want to Delete?')" class="btn btn-tool"  data-toggle="tooltip" title="Remove">
                                                <i class="far fa-trash-alt"></i></button>                                 
                                        </form> --}}
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
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary float-right">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
        {{ Form::close() }}
        <!-- /.row -->
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
