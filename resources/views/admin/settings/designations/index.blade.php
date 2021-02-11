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
                <h1 class="m-0 text-dark">Settings</h1>
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
                    <li class="breadcrumb-item active">Designation</li>
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
                        <h3 class="card-title">Add Designation for user</h3>
                    </div>
                    <form method="POST" action="{{ route('admin.designations.store') }}">
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
                            <label>Designation Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Write the Designation ...">
                        </div>
                        <div class="form-group">
                            <label for="nid">Department</label>
                            <select class="form-control select2bs4" name="department_id">
                                <option value="" selected="selected">Select Department</option>
                                @foreach ($departments as $department)
                                <option value="{{ $department->id }}" @if($department->id == old('department_id')) selected="selected" @endif >{{$department->name}}</option>
                                @endforeach 
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nid">Top Designation </label>
                            <select class="form-control select2bs4" name="top_designation_id">
                                <option value="" selected="selected">Select Top Designation</option>
                                @foreach ($designations as $designation)
                                <option value="{{ $designation->id }}" @if($designation->id == old('top_designation_id')) selected="selected" @endif >{{ $designation->name }}</option>
                                @endforeach     
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Add Designation</button>
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
                        <h3 class="card-title">Designation list</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Designation Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($designations as $designation)
                                <tr>
                                    <td>{{$designation->id}}</td>
                                    <td>{{$designation->name}}</td>
                                    <td>
                                        <div class="card-tools">
                                            <a href="{{ route('admin.designations.edit', $designation->id) }}">
                                                <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </a>
                                            <form method="POST" action="{{ route('admin.designations.destroy', $designation->id) }}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-tool"  data-toggle="tooltip" title="Remove">
                                                    <i class="far fa-trash-alt"></i></button>
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
