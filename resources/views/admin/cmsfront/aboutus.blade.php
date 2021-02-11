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
                <h1 class="m-0 text-dark">About Us</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Web Content</a></li>
                    <li class="breadcrumb-item active">About Us</li>
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
                        <h3 class="card-title">About Us Section</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="col-12">
                                                <h2 class="lead">Upload Banner Image</h2>
                                                <p class="cs-text-desc">N.B: Recommended size = 1101x783 px</p>
                                            </div>
                                            <div class="col-12">
                                                <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id_to_display" value="banner">
                                                    <input type="hidden" name="id" value="{{isset($gallerySectionList['banner']['image1']['id'])?$gallerySectionList['banner']['image1']['id']:''}}">
                                                    <div  class="adminThumb">
                                                        <img class="img-fluid" id="banner" src="{{ isset($gallerySectionList['banner']['image1']['image'])?$gallerySectionList['banner']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['banner']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="">
                                                    </div>
                                                    <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                        <input type="file" name="file" class="custom-file-input" >
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                        <input type="hidden" name="parent_section_name" value="aboutus">
                                                        <input type="hidden" name="sectionName" value="banner">
                                                        <input type="hidden" name="section_type" value="image">
                                                        <input type="hidden" name="content_type" value="image1">
                                                    </div>
                                                    <button type="submit" class="btn btn-info btn-150" >Upload Banner Image </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="col-12">
                                                <h2 class="lead">Upload  Banner Text image</h2>
                                                <p class="cs-text-desc">N.B: Recommended size =130x143 px</p>
                                            </div>
                                            <div class="col-12">
                                                <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id_to_display" value="banner-text">
                                                    <input type="hidden" name="id" value="{{isset($gallerySectionList['banner-text']['image1']['id'])?$gallerySectionList['banner-text']['image1']['id']:''}}">
                                                    <div  class="adminThumb">
                                                        <img class="img-fluid" id="banner-text" src="{{ isset($gallerySectionList['banner-text']['image1']['image'])?$gallerySectionList['banner-text']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['banner-text']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="">
                                                    </div>
                                                    <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                        <input type="file" name="file" class="custom-file-input" >
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                        <input type="hidden" name="parent_section_name" value="aboutus">
                                                        <input type="hidden" name="sectionName" value="banner-text">
                                                        <input type="hidden" name="section_type" value="image">
                                                        <input type="hidden" name="content_type" value="image1">
                                                    </div>
                                                    <button type="submit" class="btn btn-info btn-150" >Upload Banner Image </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="col-12">
                                                <h2 class="lead">Upload Banner Bottom Image</h2>
                                                <p class="cs-text-desc">N.B: Recommended size = 1887x845 px</p>
                                            </div>
                                            <div class="col-12">
                                                <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id_to_display" value="banner-bottom">
                                                    <input type="hidden" name="id" value="{{isset($gallerySectionList['banner-bottom']['image1']['id'])?$gallerySectionList['banner-bottom']['image1']['id']:''}}">
                                                    <div  class="adminThumb">
                                                        <img class="img-fluid" id="banner-bottom" src="{{ isset($gallerySectionList['banner-bottom']['image1']['image'])?$gallerySectionList['banner-bottom']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['banner-bottom']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="">
                                                    </div>
                                                    <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                        <input type="file" name="file" class="custom-file-input" >
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                        <input type="hidden" name="parent_section_name" value="aboutus">
                                                        <input type="hidden" name="sectionName" value="banner-bottom">
                                                        <input type="hidden" name="section_type" value="image">
                                                        <input type="hidden" name="content_type" value="image1">
                                                    </div>
                                                    <button type="submit" class="btn btn-info btn-150" >Upload Banner Image </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="col-12">
                                                <h2 class="lead">Upload  Banner Bottom Text 1 image</h2>
                                                <p class="cs-text-desc">N.B: Recommended size = 200x87 px</p>
                                            </div>
                                            <div class="col-12">
                                                <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id_to_display" value="banner-bottom-text-1">
                                                    <input type="hidden" name="id" value="{{isset($gallerySectionList['banner-bottom-text-1']['image1']['id'])?$gallerySectionList['banner-bottom-text-1']['image1']['id']:''}}">
                                                    <div  class="adminThumb">
                                                        <img class="img-fluid" id="banner-bottom-text-1" src="{{ isset($gallerySectionList['banner-bottom-text-1']['image1']['image'])?$gallerySectionList['banner-bottom-text-1']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['banner-bottom-text-1']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="">
                                                    </div>
                                                    <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                        <input type="file" name="file" class="custom-file-input" >
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                        <input type="hidden" name="parent_section_name" value="aboutus">
                                                        <input type="hidden" name="sectionName" value="banner-bottom-text-1">
                                                        <input type="hidden" name="section_type" value="image">
                                                        <input type="hidden" name="content_type" value="image1">
                                                    </div>
                                                    <button type="submit" class="btn btn-info btn-150" >Upload Banner Image </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="col-12">
                                                <h2 class="lead">Upload Banner Bottom Text 2 Image</h2>
                                                <p class="cs-text-desc">N.B: Recommended size = 959x250 px</p>
                                            </div>
                                            <div class="col-12">
                                                <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id_to_display" value="banner-bottom-text-2">
                                                    <input type="hidden" name="id" value="{{isset($gallerySectionList['banner-bottom-text-2']['image1']['id'])?$gallerySectionList['banner-bottom-text-2']['image1']['id']:''}}">
                                                    <div  class="adminThumb">
                                                        <img class="img-fluid" id="banner-bottom-text-2" src="{{ isset($gallerySectionList['banner-bottom-text-2']['image1']['image'])?$gallerySectionList['banner-bottom-text-2']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['banner-bottom-text-2']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="">
                                                    </div>
                                                    <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                        <input type="file" name="file" class="custom-file-input" >
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                        <input type="hidden" name="parent_section_name" value="aboutus">
                                                        <input type="hidden" name="sectionName" value="banner-bottom-text-2">
                                                        <input type="hidden" name="section_type" value="image">
                                                        <input type="hidden" name="content_type" value="image1">
                                                    </div>
                                                    <button type="submit" class="btn btn-info btn-150" >Upload Banner Image </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="col-12">
                                                <h2 class="lead">Upload Bullet 1 image</h2>
                                                <p class="cs-text-desc">N.B: Recommended size = 96X96 px</p>
                                            </div>
                                            <div class="col-12">
                                                <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id_to_display" value="bullet1">
                                                    <input type="hidden" name="id" value="{{isset($gallerySectionList['bullet1']['image1']['id'])?$gallerySectionList['bullet1']['image1']['id']:''}}">
                                                    <div  class="adminThumb">
                                                        <img class="img-fluid" id="bullet1" src="{{ isset($gallerySectionList['bullet1']['image1']['image'])?$gallerySectionList['bullet1']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['bullet1']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="">
                                                    </div>
                                                    <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                        <input type="file" name="file" class="custom-file-input" >
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                        <input type="hidden" name="parent_section_name" value="aboutus">
                                                        <input type="hidden" name="sectionName" value="bullet1">
                                                        <input type="hidden" name="section_type" value="image">
                                                        <input type="hidden" name="content_type" value="image1">
                                                    </div>
                                                    <button type="submit" class="btn btn-info btn-150" >Upload Bullet1 Image </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="col-12">
                                                <h2 class="lead">Upload Bullet 2 image</h2>
                                                <p class="cs-text-desc">N.B: Recommended size = 96X96 px</p>
                                            </div>
                                            <div class="col-12">
                                                <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id_to_display" value="bullet2">
                                                    <input type="hidden" name="id" value="{{isset($gallerySectionList['bullet2']['image1']['id'])?$gallerySectionList['bullet2']['image1']['id']:''}}">
                                                    <div  class="adminThumb">
                                                        <img class="img-fluid" id="bullet2" src="{{ isset($gallerySectionList['bullet2']['image1']['image'])?$gallerySectionList['bullet2']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['bullet2']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="">
                                                    </div>
                                                    <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                        <input type="file" name="file" class="custom-file-input" >
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                        <input type="hidden" name="parent_section_name" value="aboutus">
                                                        <input type="hidden" name="sectionName" value="bullet2">
                                                        <input type="hidden" name="section_type" value="image">
                                                        <input type="hidden" name="content_type" value="image1">
                                                    </div>
                                                    <button type="submit" class="btn btn-info btn-150" >Upload Bullet2 Image </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="col-12">
                                                <h2 class="lead">Upload Bullet 3 image</h2>
                                                <p class="cs-text-desc">N.B: Recommended size =  96X96 px</p>
                                            </div>
                                            <div class="col-12">
                                                <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id_to_display" value="bullet3">
                                                    <input type="hidden" name="id" value="{{isset($gallerySectionList['bullet3']['image1']['id'])?$gallerySectionList['bullet3']['image1']['id']:''}}">
                                                    <div  class="adminThumb">
                                                        <img class="img-fluid" id="bullet3" src="{{ isset($gallerySectionList['bullet3']['image1']['image'])?$gallerySectionList['bullet3']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['bullet3']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="">
                                                    </div>
                                                    <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                        <input type="file" name="file" class="custom-file-input" >
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                        <input type="hidden" name="parent_section_name" value="aboutus">
                                                        <input type="hidden" name="sectionName" value="bullet3">
                                                        <input type="hidden" name="section_type" value="image">
                                                        <input type="hidden" name="content_type" value="image1">
                                                    </div>
                                                    <button type="submit" class="btn btn-info btn-150" >Upload Bullet3 Image </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="col-12">
                                                <h2 class="lead">Upload Bullet 4 image</h2>
                                                <p class="cs-text-desc">N.B: Recommended size = 96X96 px</p>
                                            </div>
                                            <div class="col-12">
                                                <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id_to_display" value="bullet4">
                                                    <input type="hidden" name="id" value="{{isset($gallerySectionList['bullet4']['image1']['id'])?$gallerySectionList['bullet4']['image1']['id']:''}}">
                                                    <div  class="adminThumb">
                                                        <img class="img-fluid" id="bullet4" src="{{ isset($gallerySectionList['bullet4']['image1']['image'])?$gallerySectionList['bullet4']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['bullet4']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="">
                                                    </div>
                                                    <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                        <input type="file" name="file" class="custom-file-input" >
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                        <input type="hidden" name="parent_section_name" value="aboutus">
                                                        <input type="hidden" name="sectionName" value="bullet4">
                                                        <input type="hidden" name="section_type" value="image">
                                                        <input type="hidden" name="content_type" value="image1">
                                                    </div>
                                                    <button type="submit" class="btn btn-info btn-150" >Upload bullet4 Image </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="col-4">
                                                <h2 class="lead">Upload  Bullet Bottom left Top image </h2>
                                                <p class="cs-text-desc">N.B: Recommended size = 227x114 px</p>
                                            </div>
                                            <div class="col-8">
                                                <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id_to_display" value="bullet-bottom-left-top">
                                                    <input type="hidden" name="id" value="{{isset($gallerySectionList['bullet-bottom-left-top']['image1']['id'])?$gallerySectionList['bullet-bottom-left-top']['image1']['id']:''}}">
                                                    <div  class="adminThumb">
                                                        <img class="img-fluid" id="bullet-bottom-left-top" src="{{ isset($gallerySectionList['bullet-bottom-left-top']['image1']['image'])?$gallerySectionList['bullet-bottom-left-top']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['bullet-bottom-left-top']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="">
                                                    </div>
                                                    <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                        <input type="file" name="file" class="custom-file-input" >
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                        <input type="hidden" name="parent_section_name" value="aboutus">
                                                        <input type="hidden" name="sectionName" value="bullet-bottom-left-top">
                                                        <input type="hidden" name="section_type" value="image">
                                                        <input type="hidden" name="content_type" value="image1">
                                                    </div>
                                                    <button type="submit" class="btn btn-info btn-150" >Upload Image </button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="col-12">
                                                <h2 class="lead">Upload  Bullet Bottom left Bottom image </h2>
                                                <p class="cs-text-desc">N.B: Recommended size = 227x114 px</p>
                                            </div>
                                            <div class="col-12">
                                                <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id_to_display" value="bullet-bottom-left-bottom">
                                                    <input type="hidden" name="id" value="{{isset($gallerySectionList['bullet-bottom-left-bottom']['image1']['id'])?$gallerySectionList['bullet-bottom-left-bottom']['image1']['id']:''}}">
                                                    <div  class="adminThumb">
                                                        <img class="img-fluid" id="bullet-bottom-left-bottom" src="{{ isset($gallerySectionList['bullet-bottom-left-bottom']['image1']['image'])?$gallerySectionList['bullet-bottom-left-bottom']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['bullet-bottom-left-bottom']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="">
                                                    </div>
                                                    <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                        <input type="file" name="file" class="custom-file-input" >
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                        <input type="hidden" name="parent_section_name" value="aboutus">
                                                        <input type="hidden" name="sectionName" value="bullet-bottom-left-bottom">
                                                        <input type="hidden" name="section_type" value="image">
                                                        <input type="hidden" name="content_type" value="image1">
                                                    </div>
                                                    <button type="submit" class="btn btn-info btn-150" >Upload Image </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="col-12">
                                                <h2 class="lead">Upload  Bullet Bottom right image </h2>
                                                <p class="cs-text-desc">N.B: Recommended size = 733x521 px</p>
                                            </div>
                                            <div class="col-12">
                                                <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id_to_display" value="bullet-bottom-right">
                                                    <input type="hidden" name="id" value="{{isset($gallerySectionList['bullet-bottom-right']['image1']['id'])?$gallerySectionList['bullet-bottom-right']['image1']['id']:''}}">
                                                    <div  class="adminThumb">
                                                        <img class="img-fluid" id="bullet-bottom-right" src="{{ isset($gallerySectionList['bullet-bottom-right']['image1']['image'])?$gallerySectionList['bullet-bottom-right']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['bullet-bottom-right']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="">
                                                    </div>
                                                    <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                        <input type="file" name="file" class="custom-file-input" >
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                        <input type="hidden" name="parent_section_name" value="aboutus">
                                                        <input type="hidden" name="sectionName" value="bullet-bottom-right">
                                                        <input type="hidden" name="section_type" value="image">
                                                        <input type="hidden" name="content_type" value="image1">
                                                    </div>
                                                    <button type="submit" class="btn btn-info btn-150" >Upload Image </button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <!-- /.row -->
    </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Management Section</h3>
                    </div>
                    <div class="card-body">
                    <!-- /.card-header -->
                         <div class="row">
                            <div class="col-md-12">
                                <div class="card card-secondary">
                                    <div class="card-header">
                                        <h2 class="lead">Upload Management One Information</h2>

                                    </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-6">
                                                <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="id_to_display" value="management1">
                                                            <input type="hidden" name="id" value="{{isset($gallerySectionList['management1']['image1']['id'])?$gallerySectionList['management1']['image1']['id']:''}}">
                                                            <div class="form-group">
                                                                <input class="form-control" name="title" placeholder="Title" value="{{isset($gallerySectionList['management1']['image1']['title'])?$gallerySectionList['management1']['image1']['title']:''}}" />
                                                            </div>
                                                            <div class="form-group">
                                                                <input class="form-control" name="designation" placeholder="Designation" value="{{isset($gallerySectionList['management1']['image1']['designation'])?$gallerySectionList['management1']['image1']['designation']:''}}" />
                                                            </div>
                                                            <div class="form-group">
                                                                <textarea class="form-control" name="description" placeholder="Description">{{isset($gallerySectionList['management1']['image1']['description'])?$gallerySectionList['management1']['image1']['description']:''}}</textarea>
                                                            </div>
                                                            <div  class="adminThumb">
                                                                <img class="img-fluid" id="management1" src="{{ isset($gallerySectionList['management1']['image1']['image'])?$gallerySectionList['management1']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['management1']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="">
                                                                <p class="cs-text-desc">N.B: Recommended size = 637X429 px</p>
                                                            </div>
                                                            <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                                <input type="file" name="file" class="custom-file-input" >
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                                <input type="hidden" name="parent_section_name" value="aboutus">
                                                                <input type="hidden" name="sectionName" value="management1">
                                                                <input type="hidden" name="section_type" value="image">
                                                                <input type="hidden" name="content_type" value="image1">
                                                            </div>
                                                            <button type="submit" class="btn btn-info btn-150" >Save</button>
                                                        </form>
                                            </div>
{{--                                            <div class="col-6">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <h2 class="lead">Upload Signature</h2>--}}
{{--                                                    <p class="cs-text-desc">N.B: Recommended size = 150X30 px</p>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">--}}
{{--                                                        @csrf--}}
{{--                                                        <input type="hidden" name="id_to_display" value="management1-signature">--}}
{{--                                                        <input type="hidden" name="id" value="{{isset($gallerySectionList['management1-signature']['image1']['id'])?$gallerySectionList['management1-signature']['image1']['id']:''}}">--}}
{{--                                                        <div  class="adminThumb">--}}
{{--                                                            <img class="img-fluid" id="management1-signature" src="{{ isset($gallerySectionList['management1-signature']['image1']['image'])?$gallerySectionList['management1-signature']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['management1-signature']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">--}}
{{--                                                            <input type="file" name="file" class="custom-file-input" >--}}
{{--                                                            <label class="custom-file-label" for="customFile">Choose file</label>--}}
{{--                                                            <input type="hidden" name="parent_section_name" value="aboutus">--}}
{{--                                                            <input type="hidden" name="sectionName" value="management1-signature">--}}
{{--                                                            <input type="hidden" name="section_type" value="image">--}}
{{--                                                            <input type="hidden" name="content_type" value="image1">--}}
{{--                                                        </div>--}}
{{--                                                        <button type="submit" class="btn btn-info btn-150" >Upload Signature </button>--}}
{{--                                                    </form>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

                                        </div>

                                    </div>
                                </div>
                            </div>
                         </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-secondary">
                                    <div class="card-header">
                                        <h2 class="lead">Upload Management two Information</h2>

                                    </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-6">
                                                <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id_to_display" value="management2">
                                                    <input type="hidden" name="id" value="{{isset($gallerySectionList['management2']['image1']['id'])?$gallerySectionList['management2']['image1']['id']:''}}">
                                                    <div class="form-group">
                                                        <input class="form-control" name="title" placeholder="Title" value="{{isset($gallerySectionList['management2']['image1']['title'])?$gallerySectionList['management2']['image1']['title']:''}}" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control" name="designation" placeholder="Designation" value="{{isset($gallerySectionList['management2']['image1']['designation'])?$gallerySectionList['management2']['image1']['designation']:''}}" />
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="description" placeholder="Description">{{isset($gallerySectionList['management2']['image1']['description'])?$gallerySectionList['management2']['image1']['description']:''}}</textarea>
                                                    </div>
                                                    <div  class="adminThumb">
                                                        <img class="img-fluid" id="management2" src="{{ isset($gallerySectionList['management2']['image1']['image'])?$gallerySectionList['management2']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['management2']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="">
                                                        <p class="cs-text-desc">N.B: Recommended size = 412X410 px</p>
                                                    </div>
                                                    <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                        <input type="file" name="file" class="custom-file-input" >
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                        <input type="hidden" name="parent_section_name" value="aboutus">
                                                        <input type="hidden" name="sectionName" value="management2">
                                                        <input type="hidden" name="section_type" value="image">
                                                        <input type="hidden" name="content_type" value="image1">
                                                    </div>
                                                    <button type="submit" class="btn btn-info btn-150" >Save </button>
                                                </form>
                                            </div>
                                            <div class="col-6">
                                                <div class="col-12">
                                                    <h2 class="lead">Upload Signature</h2>
                                                    <p class="cs-text-desc">N.B: Recommended size = 150X30 px</p>
                                                </div>
                                                <div class="col-12">
                                                    <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="id_to_display" value="management2-signature">
                                                        <input type="hidden" name="id" value="{{isset($gallerySectionList['management2-signature']['image1']['id'])?$gallerySectionList['management2-signature']['image1']['id']:''}}">
                                                        <div  class="adminThumb">
                                                            <img class="img-fluid" id="management2-signature" src="{{ isset($gallerySectionList['management2-signature']['image1']['image'])?$gallerySectionList['management2-signature']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['management2-signature']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="">
                                                        </div>
                                                        <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                            <input type="file" name="file" class="custom-file-input" >
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                            <input type="hidden" name="parent_section_name" value="aboutus">
                                                            <input type="hidden" name="sectionName" value="management2-signature">
                                                            <input type="hidden" name="section_type" value="image">
                                                            <input type="hidden" name="content_type" value="image1">
                                                        </div>
                                                        <button type="submit" class="btn btn-info btn-150" >Upload Signature </button>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-secondary">
                                    <div class="card-header">
                                        <h2 class="lead">Upload Management three Information</h2>

                                    </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-6">
                                                <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id_to_display" value="management3">
                                                    <input type="hidden" name="id" value="{{isset($gallerySectionList['management3']['image1']['id'])?$gallerySectionList['management3']['image1']['id']:''}}">
                                                    <div class="form-group">
                                                        <input class="form-control" name="title" placeholder="Title" value="{{isset($gallerySectionList['management3']['image1']['title'])?$gallerySectionList['management3']['image1']['title']:''}}" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control" name="designation" placeholder="Designation" value="{{isset($gallerySectionList['management3']['image1']['designation'])?$gallerySectionList['management3']['image1']['designation']:''}}" />
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="description" placeholder="Description">{{isset($gallerySectionList['management3']['image1']['description'])?$gallerySectionList['management3']['image1']['description']:''}}</textarea>
                                                    </div>
                                                    <div  class="adminThumb">
                                                        <img class="img-fluid" id="management3" src="{{ isset($gallerySectionList['management3']['image1']['image'])?$gallerySectionList['management3']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['management3']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="">
                                                        <p class="cs-text-desc">N.B: Recommended size = 412X410 px</p>
                                                    </div>
                                                    <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                        <input type="file" name="file" class="custom-file-input" >
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                        <input type="hidden" name="parent_section_name" value="aboutus">
                                                        <input type="hidden" name="sectionName" value="management3">
                                                        <input type="hidden" name="section_type" value="image">
                                                        <input type="hidden" name="content_type" value="image1">
                                                    </div>
                                                    <button type="submit" class="btn btn-info btn-150" >Save </button>
                                                </form>
                                            </div>
                                            <div class="col-6">
                                                <div class="col-12">
                                                    <h2 class="lead">Upload Signature</h2>
                                                    <p class="cs-text-desc">N.B: Recommended size = 150X30 px</p>
                                                </div>
                                                <div class="col-12">
                                                    <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="id_to_display" value="management3-signature">
                                                        <input type="hidden" name="id" value="{{isset($gallerySectionList['management3-signature']['image1']['id'])?$gallerySectionList['management1-signature']['image1']['id']:''}}">
                                                        <div  class="adminThumb">
                                                            <img class="img-fluid" id="management3-signature" src="{{ isset($gallerySectionList['management3-signature']['image1']['image'])?$gallerySectionList['management3-signature']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['management3-signature']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="">
                                                        </div>
                                                        <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                            <input type="file" name="file" class="custom-file-input" >
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                            <input type="hidden" name="parent_section_name" value="aboutus">
                                                            <input type="hidden" name="sectionName" value="management3-signature">
                                                            <input type="hidden" name="section_type" value="image">
                                                            <input type="hidden" name="content_type" value="image1">
                                                        </div>
                                                        <button type="submit" class="btn btn-info btn-150" >Upload Signature </button>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-secondary">
                                    <div class="card-header">
                                        <h2 class="lead">Upload Management four Information</h2>

                                    </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-6">
                                                <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id_to_display" value="management4">
                                                    <input type="hidden" name="id" value="{{isset($gallerySectionList['management4']['image1']['id'])?$gallerySectionList['management4']['image1']['id']:''}}">
                                                    <div class="form-group">
                                                        <input class="form-control" name="title" placeholder="Title" value="{{isset($gallerySectionList['management4']['image1']['title'])?$gallerySectionList['management4']['image1']['title']:''}}" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control" name="designation" placeholder="Designation" value="{{isset($gallerySectionList['management4']['image1']['designation'])?$gallerySectionList['management4']['image1']['designation']:''}}" />
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="description" placeholder="Description">{{isset($gallerySectionList['management4']['image1']['description'])?$gallerySectionList['management4']['image1']['description']:''}}</textarea>
                                                    </div>
                                                    <div  class="adminThumb">
                                                        <img class="img-fluid" id="management4" src="{{ isset($gallerySectionList['management4']['image1']['image'])?$gallerySectionList['management4']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['management4']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="">
                                                        <p class="cs-text-desc">N.B: Recommended size = 412X410 px</p>
                                                    </div>
                                                    <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                        <input type="file" name="file" class="custom-file-input" >
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                        <input type="hidden" name="parent_section_name" value="aboutus">
                                                        <input type="hidden" name="sectionName" value="management4">
                                                        <input type="hidden" name="section_type" value="image">
                                                        <input type="hidden" name="content_type" value="image1">
                                                    </div>
                                                    <button type="submit" class="btn btn-info btn-150" >Save </button>
                                                </form>
                                            </div>
                                            <div class="col-6">
                                                <div class="col-12">
                                                    <h2 class="lead">Upload Signature</h2>
                                                    <p class="cs-text-desc">N.B: Recommended size = 150X30 px</p>
                                                </div>
                                                <div class="col-12">
                                                    <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="id_to_display" value="management4-signature">
                                                        <input type="hidden" name="id" value="{{isset($gallerySectionList['management4-signature']['image1']['id'])?$gallerySectionList['management1-signature']['image1']['id']:''}}">
                                                        <div  class="adminThumb">
                                                            <img class="img-fluid" id="management4-signature" src="{{ isset($gallerySectionList['management4-signature']['image1']['image'])?$gallerySectionList['management4-signature']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['management4-signature']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="">
                                                        </div>
                                                        <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                            <input type="file" name="file" class="custom-file-input" >
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                            <input type="hidden" name="parent_section_name" value="aboutus">
                                                            <input type="hidden" name="sectionName" value="management4-signature">
                                                            <input type="hidden" name="section_type" value="image">
                                                            <input type="hidden" name="content_type" value="image1">
                                                        </div>
                                                        <button type="submit" class="btn btn-info btn-150" >Upload Signature </button>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-secondary">
                                    <div class="card-header">
                                        <h2 class="lead">Upload Management five Information</h2>

                                    </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-6">
                                                <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id_to_display" value="management5">
                                                    <input type="hidden" name="id" value="{{isset($gallerySectionList['management5']['image1']['id'])?$gallerySectionList['management5']['image1']['id']:''}}">
                                                    <div class="form-group">
                                                        <input class="form-control" name="title" placeholder="Title" value="{{isset($gallerySectionList['management5']['image1']['title'])?$gallerySectionList['management5']['image1']['title']:''}}" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control" name="designation" placeholder="Designation" value="{{isset($gallerySectionList['management5']['image1']['designation'])?$gallerySectionList['management5']['image1']['designation']:''}}" />
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="description" placeholder="Description">{{isset($gallerySectionList['management5']['image1']['description'])?$gallerySectionList['management5']['image1']['description']:''}}</textarea>
                                                    </div>
                                                    <div  class="adminThumb">
                                                        <img class="img-fluid" id="management5" src="{{ isset($gallerySectionList['management5']['image1']['image'])?$gallerySectionList['management1']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['management5']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="">
                                                        <p class="cs-text-desc">N.B: Recommended size = 412X410 px</p>
                                                    </div>
                                                    <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                        <input type="file" name="file" class="custom-file-input" >
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                        <input type="hidden" name="parent_section_name" value="aboutus">
                                                        <input type="hidden" name="sectionName" value="management5">
                                                        <input type="hidden" name="section_type" value="image">
                                                        <input type="hidden" name="content_type" value="image1">
                                                    </div>
                                                    <button type="submit" class="btn btn-info btn-150" >Save </button>
                                                </form>
                                            </div>
                                            <div class="col-6">
                                                <div class="col-12">
                                                    <h2 class="lead">Upload Signature</h2>
                                                    <p class="cs-text-desc">N.B: Recommended size = 150X30 px</p>
                                                </div>
                                                <div class="col-12">
                                                    <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="id_to_display" value="management5-signature">
                                                        <input type="hidden" name="id" value="{{isset($gallerySectionList['management5-signature']['image1']['id'])?$gallerySectionList['management5-signature']['image1']['id']:''}}">
                                                        <div  class="adminThumb">
                                                            <img class="img-fluid" id="management5-signature" src="{{ isset($gallerySectionList['management5-signature']['image1']['image'])?$gallerySectionList['management5-signature']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['management5-signature']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="">
                                                        </div>
                                                        <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                            <input type="file" name="file" class="custom-file-input" >
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                            <input type="hidden" name="parent_section_name" value="aboutus">
                                                            <input type="hidden" name="sectionName" value="management5-signature">
                                                            <input type="hidden" name="section_type" value="image">
                                                            <input type="hidden" name="content_type" value="image1">
                                                        </div>
                                                        <button type="submit" class="btn btn-info btn-150" >Upload Signature </button>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection

@push('scripts')
@endpush
