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
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
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
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-header">
                        <h3 class="card-title">Add Project for user</h3>
                    </div>
                    <form method="POST" action="{{ route('admin.projects.store') }}">
                    @method('POST')
                    @csrf
                    <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group">
                                <label>Project Name</label>                                
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Write the project name...">
                            </div>
                            <div class="form-group">
                                <label>Project Code</label>                                
                                <input type="text" name="code" value="{{ old('code') }}" class="form-control" placeholder="Write the project code...">                                
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" rows="3" name="address" placeholder="Write the Address ...">{{ old('address')}}</textarea>                                
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" name="description" placeholder="Write the Description ...">{{ old('description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right">Add Project</button>
                                </div>
                            </div>
                        </div>
                    {{ Form::close() }}
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
                                    <th>Code</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($projects as $project)
                                <tr>
                                    <td>{{$project->id}}</td>
                                    <td>{{$project->name}}</td>
                                    <td>{{$project->code}}</td>
                                    <td>{{$project->address}}</td>
                                    <td>
                                        <a href="{{ route('admin.projects.edit', $project->id) }}">
                                            <button type="button"  class="btn btn-tool"  data-toggle="tooltip" title="Remove">
                                                <i class="far fa-edit"></i>
                                            </button>
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
