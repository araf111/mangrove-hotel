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
                    <h1 class="m-0 text-dark">Publications</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Web Content</a></li>
                        <li class="breadcrumb-item active">Publications</li>
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
                <div class="col-sm-6">
                    <h4 class="m-0 text-dark">Publications Contents</h4>
                    <br/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-6">
                                    <div class="col-4">
                                        <h2 class="lead">Upload Banner Image</h2>
                                        <p class="cs-text-desc">N.B: Recommended size = 1101x783 px</p>
                                    </div>
                                    <div class="col-8">
                                        <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id_to_display" value="banner">
                                            <input type="hidden" name="id" value="{{isset($gallerySectionList['banner']['image1']['id'])?$gallerySectionList['banner']['image1']['id']:''}}">
                                            <div  class="adminThumb">
                                                <img class="img-fluid" id="banner" src="{{ isset($gallerySectionList['banner']['image1']['image'])?$gallerySectionList['banner']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['banner']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="User profile picture">
                                            </div>
                                            <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                <input type="file" name="file" class="custom-file-input" >
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                <input type="hidden" name="parent_section_name" value="publication">
                                                <input type="hidden" name="sectionName" value="banner">
                                                <input type="hidden" name="section_type" value="image">
                                                <input type="hidden" name="content_type" value="image1">
                                            </div>
                                            <button type="submit" class="btn btn-info btn-150" >Upload Banner Image </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="col-4">
                                        <h2 class="lead">Upload  Banner Text image</h2>
                                        <p class="cs-text-desc">N.B: Recommended size =130x143 px</p>
                                    </div>
                                    <div class="col-8">
                                        <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id_to_display" value="banner-text">
                                            <input type="hidden" name="id" value="{{isset($gallerySectionList['banner-text']['image1']['id'])?$gallerySectionList['banner-text']['image1']['id']:''}}">
                                            <div  class="adminThumb">
                                                <img class="img-fluid" id="banner-text" src="{{ isset($gallerySectionList['banner-text']['image1']['image'])?$gallerySectionList['banner-text']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['banner-text']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="User profile picture">
                                            </div>
                                            <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                <input type="file" name="file" class="custom-file-input" >
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                <input type="hidden" name="parent_section_name" value="publication">
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
                                    <div class="col-4">
                                        <h2 class="lead">Upload Banner Bottom Image</h2>
                                        <p class="cs-text-desc">N.B: Recommended size = 1887x845 px</p>
                                    </div>
                                    <div class="col-8">
                                        <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id_to_display" value="banner-bottom">
                                            <input type="hidden" name="id" value="{{isset($gallerySectionList['banner-bottom']['image1']['id'])?$gallerySectionList['banner-bottom']['image1']['id']:''}}">
                                            <div  class="adminThumb">
                                                <img class="img-fluid" id="banner-bottom" src="{{ isset($gallerySectionList['banner-bottom']['image1']['image'])?$gallerySectionList['banner-bottom']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['banner-bottom']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="User profile picture">
                                            </div>
                                            <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                <input type="file" name="file" class="custom-file-input" >
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                <input type="hidden" name="parent_section_name" value="publication">
                                                <input type="hidden" name="sectionName" value="banner-bottom">
                                                <input type="hidden" name="section_type" value="image">
                                                <input type="hidden" name="content_type" value="image1">
                                            </div>
                                            <button type="submit" class="btn btn-info btn-150" >Upload Banner Image </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="col-4">
                                        <h2 class="lead">Upload  Banner Bottom Text 1 image</h2>
                                        <p class="cs-text-desc">N.B: Recommended size = 200x87 px</p>
                                    </div>
                                    <div class="col-8">
                                        <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id_to_display" value="banner-bottom-text-1">
                                            <input type="hidden" name="id" value="{{isset($gallerySectionList['banner-bottom-text-1']['image1']['id'])?$gallerySectionList['banner-bottom-text-1']['image1']['id']:''}}">
                                            <div  class="adminThumb">
                                                <img class="img-fluid" id="banner-bottom-text-1" src="{{ isset($gallerySectionList['banner-bottom-text-1']['image1']['image'])?$gallerySectionList['banner-bottom-text-1']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['banner-bottom-text-1']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="User profile picture">
                                            </div>
                                            <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                <input type="file" name="file" class="custom-file-input" >
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                <input type="hidden" name="parent_section_name" value="publication">
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
                                    <div class="col-4">
                                        <h2 class="lead">Upload Banner Bottom Text 2 Image</h2>
                                        <p class="cs-text-desc">N.B: Recommended size = 959x250 px</p>
                                    </div>
                                    <div class="col-8">
                                        <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id_to_display" value="banner-bottom-text-2">
                                            <input type="hidden" name="id" value="{{isset($gallerySectionList['banner-bottom-text-2']['image1']['id'])?$gallerySectionList['banner-bottom-text-2']['image1']['id']:''}}">
                                            <div  class="adminThumb">
                                                <img class="img-fluid" id="banner-bottom-text-2" src="{{ isset($gallerySectionList['banner-bottom-text-2']['image1']['image'])?$gallerySectionList['banner-bottom-text-2']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['banner-bottom-text-2']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="User profile picture">
                                            </div>
                                            <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                <input type="file" name="file" class="custom-file-input" >
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                <input type="hidden" name="parent_section_name" value="publication">
                                                <input type="hidden" name="sectionName" value="banner-bottom-text-2">
                                                <input type="hidden" name="section_type" value="image">
                                                <input type="hidden" name="content_type" value="image1">
                                            </div>
                                            <button type="submit" class="btn btn-info btn-150" >Upload Banner Image </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="col-4">
                                        <h2 class="lead">Upload Bullet 1 image</h2>
                                        <p class="cs-text-desc">N.B: Recommended size = 96X96 px</p>
                                    </div>
                                    <div class="col-8">
                                        <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id_to_display" value="bullet1">
                                            <input type="hidden" name="id" value="{{isset($gallerySectionList['bullet1']['image1']['id'])?$gallerySectionList['bullet1']['image1']['id']:''}}">
                                            <div  class="adminThumb">
                                                <img class="img-fluid" id="bullet1" src="{{ isset($gallerySectionList['bullet1']['image1']['image'])?$gallerySectionList['bullet1']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['bullet1']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="User profile picture">
                                            </div>
                                            <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                <input type="file" name="file" class="custom-file-input" >
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                <input type="hidden" name="parent_section_name" value="publication">
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
                                    <div class="col-4">
                                        <h2 class="lead">Upload Bullet 2 image</h2>
                                        <p class="cs-text-desc">N.B: Recommended size = 96X96 px</p>
                                    </div>
                                    <div class="col-8">
                                        <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id_to_display" value="bullet2">
                                            <input type="hidden" name="id" value="{{isset($gallerySectionList['bullet2']['image1']['id'])?$gallerySectionList['bullet2']['image1']['id']:''}}">
                                            <div  class="adminThumb">
                                                <img class="img-fluid" id="bullet2" src="{{ isset($gallerySectionList['bullet2']['image1']['image'])?$gallerySectionList['bullet2']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['bullet2']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="User profile picture">
                                            </div>
                                            <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                <input type="file" name="file" class="custom-file-input" >
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                <input type="hidden" name="parent_section_name" value="publication">
                                                <input type="hidden" name="sectionName" value="bullet2">
                                                <input type="hidden" name="section_type" value="image">
                                                <input type="hidden" name="content_type" value="image1">
                                            </div>
                                            <button type="submit" class="btn btn-info btn-150" >Upload Bullet2 Image </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="col-4">
                                        <h2 class="lead">Upload Bullet 3 image</h2>
                                        <p class="cs-text-desc">N.B: Recommended size =  96X96 px</p>
                                    </div>
                                    <div class="col-8">
                                        <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id_to_display" value="bullet3">
                                            <input type="hidden" name="id" value="{{isset($gallerySectionList['bullet3']['image1']['id'])?$gallerySectionList['bullet3']['image1']['id']:''}}">
                                            <div  class="adminThumb">
                                                <img class="img-fluid" id="bullet3" src="{{ isset($gallerySectionList['bullet3']['image1']['image'])?$gallerySectionList['bullet3']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['bullet3']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="User profile picture">
                                            </div>
                                            <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                <input type="file" name="file" class="custom-file-input" >
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                <input type="hidden" name="parent_section_name" value="publication">
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
                                    <div class="col-4">
                                        <h2 class="lead">Upload Bullet 4 image</h2>
                                        <p class="cs-text-desc">N.B: Recommended size = 96X96 px</p>
                                    </div>
                                    <div class="col-8">
                                        <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id_to_display" value="bullet4">
                                            <input type="hidden" name="id" value="{{isset($gallerySectionList['bullet4']['image1']['id'])?$gallerySectionList['bullet4']['image1']['id']:''}}">
                                            <div  class="adminThumb">
                                                <img class="img-fluid" id="bullet4" src="{{ isset($gallerySectionList['bullet4']['image1']['image'])?$gallerySectionList['bullet4']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['bullet4']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="User profile picture">
                                            </div>
                                            <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                <input type="file" name="file" class="custom-file-input" >
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                <input type="hidden" name="parent_section_name" value="publication">
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
                                        <h2 class="lead">Upload  Bullet Bottom left image </h2>
                                        <p class="cs-text-desc">N.B: Recommended size = 1101x783 px</p>
                                    </div>
                                    <div class="col-8">
                                        <form method="post" class="notGallery" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id_to_display" value="bullet-bottom-left">
                                            <input type="hidden" name="id" value="{{isset($gallerySectionList['bullet-bottom-left']['image1']['id'])?$gallerySectionList['bullet-bottom-left']['image1']['id']:''}}">
                                            <div  class="adminThumb">
                                                <img class="img-fluid" id="bullet-bottom-left" src="{{ isset($gallerySectionList['bullet-bottom-left']['image1']['image'])?$gallerySectionList['bullet-bottom-left']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['bullet-bottom-left']['image1']['image']):'':asset( 'backend/img/default/no-image.png')  }}" alt="User profile picture">
                                            </div>
                                            <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                <input type="file" name="file" class="custom-file-input" >
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                <input type="hidden" name="parent_section_name" value="publication">
                                                <input type="hidden" name="sectionName" value="bullet-bottom-left">
                                                <input type="hidden" name="section_type" value="image">
                                                <input type="hidden" name="content_type" value="image1">
                                            </div>
                                            <button type="submit" class="btn btn-info btn-150" >Upload Banner Image </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <br/>
                    <br/>
                    <h4 class="m-0 text-dark">Publication List</h4>
                    <br/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-footer">
                            <a  class="btn btn-warning float-right" href="{{route('admin.cms.publications')}}">Add New Publication</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <ul class="todo-list ui-sortable" data-widget="todo-list">
                    @foreach($galleryList as $key=>$item)
                        <li>
                            <div class="card card-default">
                                <div class="card-header">
                            <span class="handle ui-sortable-handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                            </span>
                                    <span class="text">{{$item->title}}</span>
                                    <!-- <h3 class="card-title">Select2 (Bootstrap4 Theme)</h3> -->
                                    <div class="card-tools">
                                        <a type="button" class="btn btn-tool"  href="{{route('admin.cms.removePublications',['id'=>$item->id])}}" onclick="return confirm('Are you sure?')"><i class="far fa-trash-alt"></i></a>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body" style="display: block;">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="inputName"> Title:{{$item->title}}</label>

                                                </div>
                                                <div class="form-group">
                                                    <label for="inputDescription"> Description:{{$item->description}}</label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="profile-user-img img-fluid" id="gallery_image1" src="{{ asset('uploads/img/'.$item->content) }}" alt="User profile picture">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /.row -->
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- /.row -->
        </div>
    </section>
@endsection

@push('scripts')
@endpush
