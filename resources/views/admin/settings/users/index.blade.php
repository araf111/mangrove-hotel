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
                    <li class="breadcrumb-item active">Users</li>
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
    <!-- /.card-header -->
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="card card-primary card-outline card-tabs">
                <div class="card-header p-0 pt-1 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link @if (!$errors->any()) active @endif" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">User List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if ($errors->any()) active @endif" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Add User</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-two-tabContent">
                        <div class="tab-pane fade @if (!$errors->any()) show active @endif" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Responsive Hover Table</h3>
                                            <div class="card-tools">
                                              <div class="input-group input-group-sm" style="width: 150px;">
                                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                  <!-- /.card-header -->
                                        <div class="card-body table-responsive p-0">
                                            <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>User Name</th>
                                                <th>User ID</th>
                                                <th>Designation</th>
                                                <th>Department</th>
                                                <th>Role</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                            <tr>
                                               
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>
                                               
                                                    @if($user->designation_id)
                                                    {{ $departments->get($user->designation_id)}}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($user->department_id)
                                                    {{ $designations->get($user->department_id) }}
                                                    @else
                                                    NA
                                                    @endif
                                                </td>
                                                <td>
                                                @if($user->roles->isNotEmpty())
                                                    {{ $user->roles->implode('label',',')  }}
                                                @else
                                                    NA
                                                @endif
                                                </td>
                                                <!-- <td><span class="tag tag-success">Enable</span></td> -->
                                                <td>
                                                    @if($user->is_active)
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" checked="checked" class="custom-control-input" id="customSwitch{{$user->id}}">
                                                        <label class="custom-control-label" for="customSwitch{{$user->id}}"></label>
                                                    </div>
                                                    @else
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input" id="customSwitch{{$user->id}}">
                                                        <label class="custom-control-label" for="customSwitch{{$user->id}}"></label>
                                                    </div>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="card-tools">
                                                        <a href="{{ route('admin.users.edit', $user->id) }}">
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
                                        <div class="card-footer clearfix">
                                            <ul class="pagination pagination-sm m-0 float-right">
                                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                <!-- /.card -->
                                </div>
                            </div> 
                        </div>
                            
                        <div class="tab-pane fade @if ($errors->any()) show active @endif" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
                            <form method="POST" role="form" action="{{ route('admin.users.store') }}">
                            @method('POST')
                            @csrf 
                            <div class="row">
                                <div class="col-12 col-sm-4">
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h3 class="card-title">User Login Info</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                                                           
                                            <div class="card-body">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-user-cog"></i></span>
                                                    </div>
                                                    <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="User Name">
                                                    @if ($errors->has('name'))
                                                    <p class="help-block">
                                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                                    </p>
                                                    @endif
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                    </div>
                                                    <input type="Number" name="mobile" value="{{ old('mobile') }}" class="form-control" placeholder="Phone Number">
                                                    @if ($errors->has('mobile'))
                                                    <p class="help-block">
                                                        <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                                    </p>
                                                    @endif
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                    </div>
                                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="User Email">
                                                    @if ($errors->has('email'))
                                                    <p class="help-block">
                                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                                    </p>
                                                    @endif
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-user-lock"></i></span>
                                                    </div>
                                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                                    @if ($errors->has('password'))
                                                    <p class="help-block">
                                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                                    </p>
                                                    @endif
                                                </div>
                                                
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                            <input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
                                                        </div>                                                       
                                                    </div>
                                                </div>                                               

                                            </div>
                                            <!-- /.card-body -->
                                       
                                    </div>
                                </div>
                                <div class="col-12 col-sm-2">
                                    <div class="card card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">Choose Role</h3>
                                        </div>                                        
                                        <div class="card-body">
                                            @foreach ($roles as $role)
                                            <div class="form-group clearfix">
                                                <div class="icheck-primary d-inline">
                                                    <input type="checkbox" name="role[]" value="{{$role->id}}" id="role{{$role->id}}">
                                                    <label for="role{{$role->id}}">
                                                        {{$role->name}}
                                                    </label>
                                                </div>
                                            </div>
                                            @endforeach
                                            @if ($errors->has('role'))
                                            <span class="text-danger">{{ $errors->first('role') }}</span>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="card card-warning">
                                        <div class="card-header">
                                            <h3 class="card-title">Choose Department and </h3>
                                        </div>
                                        <div class="card-body">                                            
                                            <select name="department_id" id="department_id" class="custom-select">
                                                <option value="">Please Select..</option>
                                            @foreach ($departments as $key=>$department)
                                                <option value="{{ $key }}">{{$department}}</option>  
                                            @endforeach 
                                            </select> 
                                            @if ($errors->has('department_id'))
                                            <p class="help-block">
                                                <span class="text-danger">{{ $errors->first('department_id') }}</span>
                                            </p>
                                            @endif                                          
                                        </div>

                                        <div class="card-body">                                            
                                            <select name="designation_id" id="designation_id" class="custom-select">    
                                                <option value="">Please Select..</option>
                                            </select> 
                                            @if ($errors->has('designation_id'))
                                            <p class="help-block">
                                                <span class="text-danger">{{ $errors->first('designation_id') }}</span>                                            
                                            </p>
                                            @endif                                          
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="card-footer clearfix">                                
                                <button type="submit" class="btn btn-info float-right">Save & Create New User</button>
                            </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection

@section('content')
Users
@endsection

@push('scripts')


<script type="text/javascript">    
$("#department_id").change(function(){
    $.ajax({
        url: "/admin/settings/designations/get_by_department/" + $(this).val(),
        method: 'GET',
        success: function(data) {
            $('#designation_id').html(data.html);
        }
    });
});
</script>


@endpush
