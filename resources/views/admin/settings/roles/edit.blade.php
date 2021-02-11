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
                <h1 class="m-0 text-dark">Role</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Settings</a></li>
                    <li class="breadcrumb-item active">Role</li>
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
            <div class="col-md-5">
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">Edit role <b>"{{$role->label}}"</b></h3>
                  </div>
                  <!-- /.card-header -->
                  <form method="POST" action="{{ route('admin.roles.update', [$role->id]) }}">
                  @method('PUT')
                  @csrf
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
                           <label>Role Name</label>
                           <input type="text" class="form-control" name="name" value="{{ $role->name }}" placeholder="Write the Role ...">
                     </div>
                     <div class="form-group">
                           <label>Display Name</label>
                           <input type="text" class="form-control" name="label" value="{{ $role->label }}" placeholder="Display Name...">
                     </div>
                     <!-- Minimal style -->
                     <div class="row">
                        <div class="col-sm-4 col-md-12">
                           <div class="card-header">
                              <h3 class="card-title">Permissions</h3>
                           </div>
                           <div class="card-body">
                              <div class="form-group">
                                    @foreach ($permissions as $permission)
                                    <div class="icheck-primary d-inline col-md-4">
                                       <input type="checkbox" name="permission[]" value="{{$permission->id}}" id="checkboxPrimary{{$permission->id}}" @if(in_array($permission->id,$role->permissions->pluck('id')->toArray())) checked="checkid" @endif>
                                       <label for="checkboxPrimary{{$permission->id}}">
                                          {{$permission->label}}
                                       </label>
                                    </div>                                 
                                    @endforeach
                              </div>                          
                           </div>
                        </div>
                              
                     </div>
                     <div class="form-group">
                        <div class="card-footer">
                              <button type="submit" class="btn btn-primary float-right">Save Changes</button>
                        </div>
                     </div>
                                        
                  </div>    
                  </form>  
               </div>               
            </div>
            <!-- /.col -->
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Role list</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Role Name</th>
                                    <th>Permissions</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles_permissions as $role_permission)
                                 
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$role_permission->label}}</td>
                                    <td>
                                        @if($role_permission->permissions->isNotEmpty())
                                            {{ $role_permission->permissions->implode('label',',')  }}
                                        @else
                                            All Access
                                        @endif
                                    
                                    </td>
                                    <td>
                                        <div class="card-tools">
                                            <a href="{{ route('admin.roles.edit', $role_permission->id) }}">
                                            <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Edit">
                                                <i class="fas fa-edit"></i></button>
                                            </a>
                                            
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
        <!-- /.row -->

       
</section>
<!-- /.content -->
@endsection

@section('content')
Users
@endsection

@push('scripts')

@endpush
