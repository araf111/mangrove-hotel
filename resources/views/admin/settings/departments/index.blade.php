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
                <h1 class="m-0 text-dark">Department</h1>
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
                    <li class="breadcrumb-item active">Department</li>
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
                        <h3 class="card-title">Add Department for user</h3>
                    </div>
                    <form method="POST" action="{{ route('admin.departments.store') }}">
                    @method('POST')
                    @csrf
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group">
                            <label>Department Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Write the Department ...">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="3" name="description" placeholder="Enter Details...">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Add Department</button>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Department list</h3>                        
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">                    
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Department Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($departments as $department)
                                <tr>
                                    <td>{{$department->id}}</td>
                                    <td>{{$department->name}}</td>
                                    <td>
                                        <div class="card-tools">
                                            <a href="{{ route('admin.departments.edit', $department->id) }}">
                                                <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </button> 
                                            </a>                                            
                                            
                                            <form method="POST" action="{{ route('admin.departments.destroy', $department->id) }}">
                                            @method('DELETE')
                                            @csrf
                                                <button type="submit" class="btn btn-tool"  data-toggle="tooltip" title="Remove">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>                                          
                                            </form>
                                        </div>
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

@endpush
