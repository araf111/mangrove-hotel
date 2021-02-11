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
                <h1 class="m-0 text-dark">Investor Profile</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Investor Profile</li>
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
    <div class="card card-solid">
        <div class="mailbox-controls with-border text-center">
            <!-- /.btn-group -->
            <a type="button" href="{{route('admin.investors.edit',$investor->id)}}" class="btn btn-default btn-sm"
                data-toggle="tooltip" data-container="body" title="Profile edit">
                <i class="fas fa-user-edit"></i>
            </a>
            <a type="button" href="{{route('admin.investor.share',$investor->id)}}" class="btn btn-default btn-sm"
                data-toggle="tooltip" data-container="body" title="Investor share">
                <i class="fas fa-coins"></i>
            </a>
            <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Investment Details">
                <i class="fas fa-coins"></i>
            </button>
            <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                <i class="fas fa-print"></i>
            </button>
        </div>
        <div class="card-body pb-0">
            <div class="row d-flex align-items-stretch">
                <div class="col-12 col-sm-6 col-md-4 align-items-stretch">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">

                                @php
                                if(!empty($investor->picture)){
                                $profile_picture ='storage/'.$investor->picture;
                                }else{
                                $profile_picture = asset( 'backend/img/user7-128x128.jpg');
                                }
                                @endphp
                                <img class="profile-user-img img-fluid img-circle" src="{{asset($profile_picture)}}"
                                    alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center">{{ $investor->name}}</h3>
                            <p class="text-center">
                                <b>{{ $investor->designation}}</b> at <b>{{ $investor->company_name}}</b><br>
                                <span>{{ $investor->occupation}}</span>
                            </p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Address</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Mailing Address</b>
                                    <p>Khondokar shorak, Vatara Dhaka, Khondokar </p>
                                </li>
                                <li class="list-group-item">
                                    <b>Office Address</b>
                                    <p>Khondokar shorak, Vatara Dhaka</p>
                                </li>
                                <li class="list-group-item">
                                    <b>Permanent Address</b>
                                    <p>Khondokar shorak, Vatara Dhaka, Khondokar shorak, Vatara Dhaka</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-8 align-items-stretch">
                    <div class="card card-warning card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Personal Information</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <b>Phone (Res)</b>
                                    <p>{{$investor->phone}}</p>
                                </div>
                                <div class="col-md-4">
                                    <b>Mobile</b>
                                    <p>{{$investor->mobile}}</p>
                                </div>
                                <div class="col-md-4">
                                    <b>Emergency Contact</b>
                                    <p>{{$investor->emergency_contact}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <b>Email</b><span class="small"> Primary</span>
                                    <p>{{$investor->email_primary}}</p>
                                </div>
                                <div class="col-md-4">
                                    <b>Email</b><span class="small"> Seondery</span>
                                    <p>{{$investor->email_secondary}}</p>
                                </div>
                                <div class="col-md-4">
                                    <b>Date of Birth</b>
                                    <p>{{$investor->date_of_birth}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <b>NID/Passport</b>
                                    <p>{{$investor->identification_number}}</p>
                                </div>
                                <div class="col-md-4">
                                    <b>Religion</b>
                                    <p>{{$investor->religion}}</p>
                                </div>
                                <div class="col-md-4">
                                    <b>Nationality</b>
                                    <p>{{$investor->nationality}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <b>Father's Name</b>
                                    <p>{{$investor->father_name}}</p>
                                </div>
                                <div class="col-md-4">
                                    <b>Mother's Name</b>
                                    <p>{{$investor->mother_name}}</p>
                                </div>
                                <div class="col-md-4 offset-md-4">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <b>Spouse's Name</b>
                                    <p>{{$investor->spouse_name}}</p>
                                </div>
                                <div class="col-md-4">
                                    <b>Date of Birth</b>
                                    <p>{{$investor->spouse_date_of_birth}}</p>
                                </div>
                                <div class="col-md-4 offset-md-4">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <b>Nominee's Name</b>
                                    <p>{{$investor->nominee_name}}</p>
                                </div>
                                <div class="col-md-4">
                                    <b>Relation</b>
                                    <p>{{$investor->relation}}</p>
                                </div>
                                <div class="col-md-4 offset-md-4">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <b>Nominee's Id</b>
                                    <p>{{$investor->nominee_identity_number}}</p>
                                </div>
                                <div class="col-md-4">
                                    <b>Mobile</b>
                                    <p>{{$investor->nominee_mobile}}</p>
                                </div>
                                <div class="col-md-4 offset-md-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-12">
                <a type="button" class="btn btn-primary float-right" style="margin-right: 5px;" href="{{route('admin.investor.generateInvoice', $investor->id)}}"><i class="fas fa-download"></i>Print Invoice</a>
            </div>
        </div>
    </div>
    {{ Form::close() }} <!-- /.container-fluid -->


</section>
<!-- /.content -->
@endsection
