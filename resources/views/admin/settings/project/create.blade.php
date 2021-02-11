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
                <h1 class="m-0 text-dark">Project</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Settings</a></li>
                    <li class="breadcrumb-item active">Project</li>
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
                        <h3 class="card-title">Add Project for user</h3>
                    </div>
                    {{ Form::model(request()->old(),array('route' => array('admin.projects.store'),'class'=>'','novalidate'=>'novalidate','files'=>false)) }}
                    <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group">
                                <label>Add Project</label>
                                
                                <input type="text" name="name" class="form-control" placeholder="Write the project name...">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
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
                        </div>
                    {{-- {{ Form::close() }} --}}
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Project list</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Project Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($projects as $project)
                                <tr>
                                    <td>{{$project->id}}</td>
                                    <td>{{$project->name}}</td>
                                    <td>

                                     {{-- <form action="{{route('admin.projects.destroy',$project->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i></button>
                                        </div>
                                        
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
        <!-- /.row -->
        {{ Form::close() }}
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
