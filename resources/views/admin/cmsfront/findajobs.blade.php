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
        <div class="row">
            <div class="col-12 col-sm-12">

            </div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Job Application </h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Web Content</a></li>
                    <li class="breadcrumb-item active">Job Application </li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Job Application List </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="row">

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
                                    Email
                                </th>
                                <th>
                                   Description
                                </th>
                                <th>
                                    Application Date
                                </th>
                                <th>
                                    Attach Document (CV)
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $sl =1;
                            @endphp
                            @foreach($findaJobSectionList as $item)
                                <tr>
                                    <td>{{$sl}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->created_at->format('D M,Y H:i:s')}}</td>

                                    <td><a href="{{asset( 'uploads/file/'.$item->content)}}" target="_blank"> Download CV</a></td>

                                </tr>
                                @php $sl++; @endphp
                            @endforeach
                            </tbody>
                        </table>

                    </div>

                    <!-- /.card-body -->
                </div>
            </div>
        </div>

        <!-- /.row -->
    </div>
</section>

@endsection

@push('scripts')
@endpush
