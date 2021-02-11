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
                <h1 class="m-0 text-dark">Footer</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Web Content</a></li>
                    <li class="breadcrumb-item active">Footer</li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content-header --><!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="progress" style="display: none;">
                    <div class="progress-bar" role="progressbar" aria-valuenow=""
                         aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                        0%
                    </div>
                    <div id="success">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <form method="post" class="footer" action="{{ route('admin.homeTextUpdate') }}" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" value="{{isset($footerSectionList['corporateAddress']['address']['id'])?$footerSectionList['corporateAddress']['address']['id']:''}}">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Corporate address</h3>
                            </div>
                            <!-- /.card-header -->
                                <!-- form start -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="nid">Area</label>
                                                <textarea  class="form-control" id="corporateAddress" name="content" placeholder="H# 222, Plot# 3633, R# 120, Vill# XYZ">{{isset($footerSectionList['corporateAddress']['address']['content'])?$footerSectionList['corporateAddress']['address']['content']:''}}</textarea>

                                                <label for="nid">Phone1</label>
                                                <input  class="form-control"  name="corporateAddress_phone1" placeholder="Enter contact number" value="{{isset($footerSectionList['corporateAddress']['corporateAddress_phone1']['content'])?$footerSectionList['corporateAddress']['corporateAddress_phone1']['content']:''}}" />

                                                <label for="nid">Phone2</label>
                                                <input  class="form-control"  name="corporateAddress_phone2" placeholder="Enter contact number" value="{{isset($footerSectionList['corporateAddress']['corporateAddress_phone2']['content'])?$footerSectionList['corporateAddress']['corporateAddress_phone2']['content']:''}}" />

                                                <label for="nid">Email</label>
                                                <input  class="form-control"  name="corporateAddress_email" placeholder="Enter Email" value="{{isset($footerSectionList['corporateAddress']['corporateAddress_email']['content'])?$footerSectionList['corporateAddress']['corporateAddress_email']['content']:''}}" />

                                                <input type="hidden" name="parent_section_name" value="footer">
                                                <input type="hidden" name="sectionName" value="corporateAddress">
                                                <input type="hidden" name="section_type" value="content">
                                                <input type="hidden" name="contentType" value="address">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div class="card-footer" style="background: none !important; box-shadow: none !important;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary float-right">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
                <!-- /.card -->
                <form method="post" class="footer" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id_to_display" value="bottomRightBanner">
                    <input type="hidden" name="id" value="{{isset($footerSectionList['projectAddress']['address']['id'])?$footerSectionList['projectAddress']['address']['id']:''}}">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Projet address</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nid">Area</label>
                                        <textarea  class="form-control" id="projectAddress" name="content" placeholder="H# 222, Plot# 3633, R# 120, Vill# XYZ">{{isset($footerSectionList['projectAddress']['address']['content'])?$footerSectionList['projectAddress']['address']['content']:''}}</textarea>
                                        <input type="hidden" name="parent_section_name" value="footer">
                                        <input type="hidden" name="sectionName" value="projectAddress">
                                        <input type="hidden" name="section_type" value="content">
                                        <input type="hidden" name="content_type" value="address">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-primary" style="background: none !important; box-shadow: none !important;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary float-right">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- /.card -->
                <form method="post" class="footer" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id_to_display" value="bottomRightBanner">
                    <input type="hidden" name="id" value="{{isset($footerSectionList['projectCompletionText']['address']['id'])?$footerSectionList['projectCompletionText']['address']['id']:''}}">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Project Completion Text</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nid">Text</label>
                                        <textarea  class="form-control" id="projectAddress" name="content" placeholder="Enter Project Completion Text">{{isset($footerSectionList['projectCompletionText']['address']['content'])?$footerSectionList['projectCompletionText']['address']['content']:''}}</textarea>
                                        <input type="hidden" name="parent_section_name" value="footer">
                                        <input type="hidden" name="sectionName" value="projectCompletionText">
                                        <input type="hidden" name="section_type" value="content">
                                        <input type="hidden" name="content_type" value="address">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-primary" style="background: none !important; box-shadow: none !important;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary float-right">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- /.card -->
                <form method="post" class="footer" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id_to_display" value="bottomRightBanner">
                    <input type="hidden" name="id" value="{{isset($footerSectionList['copyRightText']['address']['id'])?$footerSectionList['copyRightText']['address']['id']:''}}">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Copyright Text</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nid">Text</label>
                                        <textarea  class="form-control" id="projectAddress" name="content" placeholder="Enter Copyright Text">{{isset($footerSectionList['copyRightText']['address']['content'])?$footerSectionList['copyRightText']['address']['content']:''}}</textarea>
                                        <input type="hidden" name="parent_section_name" value="footer">
                                        <input type="hidden" name="sectionName" value="copyRightText">
                                        <input type="hidden" name="section_type" value="content">
                                        <input type="hidden" name="content_type" value="address">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-primary" style="background: none !important; box-shadow: none !important;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary float-right">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Quote</h3>
                    </div>
                    <!-- /.card-header -->
                    <form method="post" class="footer" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id_to_display" value="footer_quote">
                        <input type="hidden" name="id" value="{{isset($footerSectionList['quote']['image1']['id'])?$footerSectionList['quote']['image1']['id']:''}}">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="adminThumb">
                                        <img class="img-fluid"  id="footer_quote" src="{{isset($footerSectionList['quote']['image1']['image'])?$footerSectionList['quote']['image1']['image']!=''?asset('uploads/img/'.$footerSectionList['quote']['image1']['image']):'':asset( 'backend/img/default/no-image.png')}}" alt="User profile picture">
                                    </div>
                                        <div class="input-group">

                                        <div class="custom-file">
                                            <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose Banner Image (.jpg)</label>
                                            <input type="hidden" name="parent_section_name" value="footer">
                                            <input type="hidden" name="sectionName" value="quote">
                                            <input type="hidden" name="section_type" value="image">
                                            <input type="hidden" name="content_type" value="image1">
                                        </div>
                                        <div class="input-group-append">
                                            <button class="input-group-text"  type="submit">Upload</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="form-group">
                                    <textarea class="form-control" rows="3" placeholder="Enter the Text"></textarea>
                                </div> -->
                            </div>
                    </form>
                    <!-- /.card-body -->
                </div>
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Footer Bakground</h3>
                    </div>
                    <form method="post" class="footer" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id_to_display" value="footerBackGround">
                        <input type="hidden" name="id" value="{{isset($footerSectionList['footerBackGround']['image1']['id'])?$footerSectionList['footerBackGround']['image1']['id']:''}}">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="adminThumb">
                                        <img class="img-fluid"  id="footerBackGround" src="{{isset($footerSectionList['footerBackGround']['image1']['image'])?$footerSectionList['footerBackGround']['image1']['image']!=''?asset('uploads/img/'.$footerSectionList['footerBackGround']['image1']['image']):'':asset( 'backend/img/default/no-image.png')}}" alt="User profile picture">
                                    </div>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"  name="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose Banner Image (.jpg)</label>
                                            <input type="hidden" name="parent_section_name" value="footer">
                                            <input type="hidden" name="sectionName" value="footerBackGround">
                                            <input type="hidden" name="section_type" value="image">
                                            <input type="hidden" name="content_type" value="image1">
                                        </div>
                                        <div class="input-group-append">
                                            <button class="input-group-text"  type="submit">Upload</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <textarea class="form-control" rows="3" placeholder="Enter the Text"></textarea>
                                </div> -->
                            </div>
                    </form>
                    <!-- /.card-body -->
                </div>
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Complete Project</h3>
                    </div>
                    <form method="post" class="footer" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id_to_display" value="completeProject">
                        <input type="hidden" name="id" value="{{isset($footerSectionList['completeProject']['image1']['id'])?$footerSectionList['completeProject']['image1']['id']:''}}">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="adminThumb">
                                        <img class="img-fluid"  id="completeProject" src="{{isset($footerSectionList['completeProject']['image1']['image'])?$footerSectionList['completeProject']['image1']['image']!=''?asset('uploads/img/'.$footerSectionList['completeProject']['image1']['image']):'':asset( 'backend/img/default/no-image.png')}}" alt="User profile picture">
                                    </div>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"  name="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose Banner Image (.jpg)</label>
                                            <input type="hidden" name="parent_section_name" value="footer">
                                            <input type="hidden" name="sectionName" value="completeProject">
                                            <input type="hidden" name="section_type" value="image">
                                            <input type="hidden" name="content_type" value="image1">
                                        </div>
                                        <div class="input-group-append">
                                            <button class="input-group-text"  type="submit">Upload</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <textarea class="form-control" rows="3" placeholder="Enter the Text"></textarea>
                                </div> -->
                            </div>
                    </form>
                    <!-- /.card-body -->
                </div>
            </div>
            <!--/.col (left) -->
        </div>

        <!-- /.row -->
    </div>
</section>
@endsection

@push('scripts')
@endpush
