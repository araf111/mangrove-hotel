@extends('admin.layouts.app')
@section('title', 'Mangrove Investors')

@section('navbar')
@parent
<!-- Left navbar links -->
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('admin.investors.index') }}" class="nav-link btn btn-block btn-outline-success">Inquiry</a>
    </li>
</ul>
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Inquiry</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Investor</li>
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
            <div class="card-body">
         
                    <table class="table table-striped">
                        <thead>
                            <tr>                               
                                <th>
                                    #
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Mobile
                                </th>
                                <th>
                                    Email
                                </th>                              
                                <th>
                                    Inquery Time
                                </th>   
                                <th>
                                    Follow Up By
                                </th>                              
                                <th class="text-center">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $sl =1;
                            @endphp
                            @foreach($inquiries as $inquiry)
                            <tr>                                
                                <td>{{$sl}}</td>
                                <td>{{$inquiry->name}}</td>
                                <td>{{$inquiry->mobile}}</td>
                                <td>{{$inquiry->email}}</td>  
                                <td>{{$inquiry->created_at->format('D M,Y H:i:s')}}</td>
                                <td>
                                	@if($inquiry->user_id)
                                		{{$inquiry->user->name}}
                                	@else
                                		Not Yet
                                	@endif

                                </td>   
                                                          
                                <td> 
                                	<div class="card-tools">
                                		<form method="POST" action="{{ route('admin.inquiry.followup')}}">
                                        @method('POST')
                                        @csrf
                                        <input type="hidden" name="id" value="{{$inquiry->id}}">
                                            <button type="submit" class="btn btn-tool"  data-toggle="tooltip" title="Follow UP">
                                                <i class="fa fa-check"></i>
                                            </button>                                          
                                        </form>                                		                                      
                                           
                                    </div>                           
                                </td>
                            </tr>
                            @php $sl++; @endphp
                            @endforeach
                        </tbody>
                    </table>
                    <!-- /.table -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer p-0">
                <div class="mailbox-controls">
                    <div class="float-right">
                        1-50/200
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm"><i
                                    class="fas fa-chevron-left"></i></button>
                            <button type="button" class="btn btn-default btn-sm"><i
                                    class="fas fa-chevron-right"></i></button>
                        </div>
                        <!-- /.btn-group -->
                    </div>
                    <!-- /.float-right -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection

@push('scripts')@endpush