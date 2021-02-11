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
                            <a class="nav-link active" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Edit User</a>
                        </li>
                    </ul>
                </div>
                
                            
                        <div class="tab-pane fade show active " id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
                            <form method="POST" role="form" action="{{ route('admin.users.update', [$user->id]) }}" enctype="multipart/form-data">
                            @method('PUT')
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
                                                    <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="User Name">
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
                                                    <input type="Number" name="mobile" value="{{ $user->mobile }}" class="form-control" placeholder="Phone Number">
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
                                                    <input type="email" name="email" value="{{ $user->email }}" class="form-control" placeholder="User Email">
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
                                                    <input type="password" name="password" class="form-control" placeholder="Change Password">
                                                    @if ($errors->has('password'))
                                                    <p class="help-block">
                                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                                    </p>
                                                    @endif
                                                </div>

		                                        <div class="input-group mb-3">
			                                        <select name="status" id="status" class="custom-select"> 
			                                            
			                                            <option value="1" @if($user->active == 1) selected="selected" @endif>Active</option>  

			                                            @if(!$user->hasRole('superAdmin'))
			                                            <option value="1" @if($user->active == 0) selected="selected" @endif>InActive</option> 
			                                            @endif
		                                            </select> 
		                                        </div>
                                                
                                                <div class="form-group">
                                                    @if(!empty(Auth::user()->photo))
            <img src="{{ asset( $user->photo ) }}" class="img-circle elevation-2" alt="User Image">
            @endif
                                     
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
                                      
                                        @if($user->hasRole('superAdmin')) 

                                        <input type="hidden" name="role[]" value="{{$user->hasRole('superAdmin')}}">

                                        @endif                                      
                                        <div class="card-body">
                                            @foreach ($roles as $role)
                                            <div class="form-group clearfix">
                                                <div class="icheck-primary d-inline">
                                                    <input type="checkbox" name="role[]" value="{{$role->id}}" id="role{{$role->id}}" @if($user->hasRole($role->name)) checked="checkid" @endif @if($user->hasRole('superAdmin') && $role->name == 'superAdmin') disabled="disabled" @endif>
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
                                                <option value="{{ $key }}" @if($user->department_id == $key) selected="selected" @endif>{{$department}}</option>  
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
                                                @foreach ($designations as $key=>$designation)
                                                @if($user->designation_id == $key)
                                                <option value="{{ $key }}"  selected="selected">{{$designation}}</option>  
                                                @endif
                                            	@endforeach 
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
                                <button type="submit" class="btn btn-info float-right">Save Changes</button>
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
