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
            <h1 class="m-0 text-dark">Home Section</h1>
         </div>
         <!-- /.col -->
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Web Content</a></li>
               <li class="breadcrumb-item active">Home Section</li>
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
         <div class="card-body">
             <div class="row">
                 <div class="col-12 col-sm-12">

                 </div>
             </div>

            <div class="row">
               <div class="col-5 col-sm-3">
                  <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link active" id="vert-tabs-logo-tab" data-toggle="pill" href="#vert-tabs-logo" role="tab" aria-controls="vert-tabs-logo" aria-selected="true">General</a>
                     <a class="nav-link" id="vert-tabs-banner-tab" data-toggle="pill" href="#vert-tabs-banner" role="tab" aria-controls="vert-tabs-banner" aria-selected="false">Banner</a>
                     <a class="nav-link" id="vert-tabs-social-tab" data-toggle="pill" href="#vert-tabs-social" role="tab" aria-controls="vert-tabs-social" aria-selected="false">Social</a>
{{--                     <a class="nav-link" id="vert-tabs-phone-tab" data-toggle="pill" href="#vert-tabs-phone" role="tab" aria-controls="vert-tabs-phone" aria-selected="false">Phone</a>--}}
                     <a class="nav-link" id="vert-tabs-tomorrow-tab" data-toggle="pill" href="#vert-tabs-tomorrow" role="tab" aria-controls="vert-tabs-tomorrow" aria-selected="false">Tomorroe's Call</a>
                     <a class="nav-link" id="vert-tabs-events-tab" data-toggle="pill" href="#vert-tabs-events" role="tab" aria-controls="vert-tabs-events" aria-selected="false">Events</a>
                  </div>
               </div>
               <div class="col-7 col-sm-9">
                  <div class="tab-content" id="vert-tabs-tabContent">
                     <div class="tab-pane text-left fade show active" id="vert-tabs-logo" role="tabpanel" aria-labelledby="vert-tabs-logo-tab">
                        <div class="card-body">
                           <div class="row" style="margin-bottom: 20px; padding-bottom: 20px"; >
                              <div class="col-4">
                                 <h2 class="lead">Upload Logo</h2>
                                 <p class="cs-text-desc">N.B: Recommended size = 245x75</p>
{{--                                 <div class="bootstrap-switch-null bootstrap-switch-undefined bootstrap-switch-undefined bootstrap-switch-undefined bootstrap-switch-undefined bootstrap-switch-undefined bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-focused bootstrap-switch-animate bootstrap-switch-off bootstrap-switch-on" style="width: 88px;">--}}
{{--                                    <div class="bootstrap-switch-container" style="width: 129px; margin-left: -43px;"><span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 43px;">Show</span><span class="bootstrap-switch-label" style="width: 43px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 43px;">Hide</span><input type="checkbox" name="my-checkbox" checked="" data-bootstrap-switch=""></div>--}}
{{--                                 </div>--}}
                              </div>
                              <div class="col-8">

                                  <form method="post" class="homeSection" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                      @csrf
                                      <input type="hidden" name="id_to_display" value="logo">
                                      <input type="hidden" name="id" value="{{$generaSectionList['logo']['id']}}">
                                     <div class="adminThumb">
                                        <img class="img-fluid" id="logo" src="
                                        {{  $generaSectionList['logo']['image']!=''?asset( 'uploads/img/'.$generaSectionList['logo']['image']):asset( 'backend/img/default/no-image.png')  }}" alt="User profile picture">
                                     </div>

                                      <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                          <input type="file" name="file" class="custom-file-input" id="customFile">
                                          <label class="custom-file-label" for="customFile">Choose file</label>
                                          <input type="hidden" name="parent_section_name" value="home">
                                          <input type="hidden" name="sectionName" value="General">
                                          <input type="hidden" name="section_type" value="image">
                                          <input type="hidden" name="content_type" value="logo">
                                          <input type="hidden" name="file_size_width" value="245">
                                          <input type="hidden" name="file_size_height" value="75">

                                      </div>
                                     <button type="submit" class="btn btn-info btn-150" >Upload Logo
                                     </button>
                                  </form>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-4">
                                 <h2 class="lead">Upload Favicon</h2>
                                 <p class="cs-text-desc">N.B: Recommended size = 36x36 px</p>
                                 <p class="cs-text-desc">N.B: File format = .ico</p>
                              </div>
                              <div class="col-8">
                                  <form method="post" class="homeSection" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                      @csrf
                                      <input type="hidden" name="id_to_display" value="favicon">
                                      <input type="hidden" name="id" value="{{$generaSectionList['icon']['id']}}">
                                         <div  style="width: 97px; height: 32px; border: 1px solid #c3c3c3">
                                            <img class="img-fluid" id="favicon" src="{{  $generaSectionList['icon']['image']!=''?asset( 'uploads/img/'.$generaSectionList['icon']['image']):asset( 'backend/img/default/no-image.png')  }}" alt="User profile picture">
                                         </div>
                                          <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                              <input type="file" name="file" class="custom-file-input" >
                                              <label class="custom-file-label" for="customFile">Choose file</label>
                                              <input type="hidden" name="parent_section_name" value="home">
                                              <input type="hidden" name="sectionName" value="General">
                                              <input type="hidden" name="section_type" value="image">
                                              <input type="hidden" name="content_type" value="icon">
                                              <input type="hidden" name="file_size_width" value="36">
                                              <input type="hidden" name="file_size_height" value="36">
                                          </div>
                                         <button type="submit" class="btn btn-info btn-150" >Upload Fav icon
                                         </button>
                                  </form>
                              </div>
                           </div>
                        </div>
                     </div>
<!-- BANNER -->
                     <div class="tab-pane fade" id="vert-tabs-banner" role="tabpanel" aria-labelledby="vert-tabs-banner-tab">
                        <div class="card-body">
                           <div class="row" style="margin-bottom: 20px; padding-bottom: 20px"; >
                                <div class="col-5">
{{--                                    <div class="form-group clearfix">--}}
{{--                                        <div class="icheck-primary d-inline">--}}
{{--                                            <input type="radio" id="radioPrimary1" name="r1" checked="">--}}
{{--                                            <label for="radioPrimary1">--}}
{{--                                                <h2 class="lead">Upload Image</h2>--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <p class="cs-text-desc">N.B: Recommended
                                        <br> Size = (1920 x 1080) px
                                        <br> Format = .jpeg
                                    </p>
                                </div>
                                <div class="col-7">
                                    <form method="post" class="homeSection" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                        @csrf
                                            <input type="hidden" name="id_to_display" value="banner">
                                            <input type="hidden" name="id" value="{{$generaSectionList['banner']['id']}}">
                                            <div class="adminThumb">
                                                <img class="img-fluid" id="banner" src="
                                                {{  $generaSectionList['banner']['image']!=''?asset( 'uploads/img/'.$generaSectionList['banner']['image']):asset( 'backend/img/default/no-image.png')  }}" alt="User profile picture">
                                            </div>
                                            <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                                <input type="file" name="file" class="custom-file-input" >
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                <input type="hidden" name="parent_section_name" value="home">
                                                <input type="hidden" name="sectionName" value="Banner">
                                                <input type="hidden" name="section_type" value="image">
                                                <input type="hidden" name="content_type" value="banner">
                                                <input type="hidden" name="file_size_width" value="1920">
                                                <input type="hidden" name="file_size_height" value="1080">

                                            </div>
                                            <button type="submit" class="btn btn-info btn-150">Upload Image</button>
                                    </form>
                                </div>
                           </div>
                           <div class="row" style="margin-bottom: 20px; padding-bottom: 20px";>
                                <div class="col-5">
{{--                                    <div class="form-group clearfix">--}}
{{--                                        <div class="icheck-primary d-inline">--}}
{{--                                            <input type="radio" id="radioPrimary2" name="r1">--}}
{{--                                            <label for="radioPrimary2">--}}
{{--                                                <h2 class="lead">Upload Video</h2>--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <p class="cs-text-desc">N.B: Recommended
                                        <br> Ratio = 16:9
                                        <br> Format = mp4
                                        <br> File Size = 5mb
                                    </p>
                                </div>
                                <div class="col-7">
                                    <form method="post" class="homeSection" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id_to_display" value="video1">
                                        <input type="hidden" name="id" value="{{$generaSectionList['video1']['id']}}">
                                        <div class="adminThumb">
                                            <video class="img-fluid" id="video1" src=" {{  $generaSectionList['video1']['video']!=''?asset( 'uploads/video/'.$generaSectionList['video1']['video']):asset( 'backend/img/default/default-video.jpg')  }}" alt="User profile picture" />
                                        </div>
                                        <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                            <input type="file" name="file" class="custom-file-input" >
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                            <input type="hidden" name="parent_section_name" value="home">
                                            <input type="hidden" name="sectionName" value="Banner">
                                            <input type="hidden" name="section_type" value="video">
                                            <input type="hidden" name="content_type" value="video1">
                                            <input type="hidden" name="file_size_width" value="16">
                                            <input type="hidden" name="file_size_height" value="9">
                                        </div>
                                        <button type="submit" class="btn btn-info btn-150">Upload Video</button>
                                    </form>
                                </div>
                           </div>
                            <div class="row" style="margin-bottom: 20px; padding-bottom: 20px";>
                                <div class="col-5">
                                    {{--                                    <div class="form-group clearfix">--}}
                                    {{--                                        <div class="icheck-primary d-inline">--}}
                                    {{--                                            <input type="radio" id="radioPrimary2" name="r1">--}}
                                    {{--                                            <label for="radioPrimary2">--}}
                                    {{--                                                <h2 class="lead">Upload Video</h2>--}}
                                    {{--                                            </label>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    <p class="cs-text-desc">N.B: Recommended
                                        <br> Ratio = 16:9
                                        <br> Format = mp4
                                        <br> File Size = 5mb
                                    </p>
                                </div>
                                <div class="col-7">
                                    <form method="post" class="homeSection" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id_to_display" value="video2">
                                        <input type="hidden" name="id" value="{{$generaSectionList['video2']['id']}}">
                                        <div class="adminThumb">
                                            <video class="img-fluid" id="video2" src=" {{  $generaSectionList['video2']['video']!=''?asset( 'uploads/video/'.$generaSectionList['video2']['video']):asset( 'backend/img/default/default-video.jpg')  }}" alt="User profile picture" />
                                        </div>
                                        <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                            <input type="file" name="file" class="custom-file-input" >
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                            <input type="hidden" name="parent_section_name" value="home">
                                            <input type="hidden" name="sectionName" value="Banner">
                                            <input type="hidden" name="section_type" value="video">
                                            <input type="hidden" name="content_type" value="video2">
                                            <input type="hidden" name="file_size_width" value="16">
                                            <input type="hidden" name="file_size_height" value="9">
                                        </div>
                                        <button type="submit" class="btn btn-info btn-150">Upload Video</button>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    {{--                                    <div class="form-group clearfix">--}}
                                    {{--                                        <div class="icheck-primary d-inline">--}}
                                    {{--                                            <input type="radio" id="radioPrimary2" name="r1">--}}
                                    {{--                                            <label for="radioPrimary2">--}}
                                    {{--                                                <h2 class="lead">Upload Video</h2>--}}
                                    {{--                                            </label>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    <p class="cs-text-desc">N.B: Recommended
                                        <br> Ratio = 16:9
                                        <br> Format = mp4
                                        <br> File Size = 5mb
                                    </p>
                                </div>
                                <div class="col-7">
                                    <form method="post" class="homeSection" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id_to_display" value="video3">
                                        <input type="hidden" name="id" value="{{$generaSectionList['video3']['id']}}">
                                        <div class="adminThumb">
                                            <video class="img-fluid" id="video3" src=" {{  $generaSectionList['video3']['video']!=''?asset( 'uploads/video/'.$generaSectionList['video3']['video']):asset( 'backend/img/default/default-video.jpg')  }}" alt="User profile picture" />
                                        </div>
                                        <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                            <input type="file" name="file" class="custom-file-input" >
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                            <input type="hidden" name="parent_section_name" value="home">
                                            <input type="hidden" name="sectionName" value="Banner">
                                            <input type="hidden" name="section_type" value="video">
                                            <input type="hidden" name="content_type" value="video3">
                                            <input type="hidden" name="file_size_width" value="16">
                                            <input type="hidden" name="file_size_height" value="9">
                                        </div>
                                        <button type="submit" class="btn btn-info btn-150">Upload Video</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                     </div>
<!-- SOCIAL -->
                     <div class="tab-pane fade" id="vert-tabs-social" role="tabpanel" aria-labelledby="vert-tabs-social-tab">
                        <div class="row">
                            <div class="col-4">
                                <h2 class="lead">Social Name & Link</h2>
                            </div>
                            <div class="col-8">
                                <form method="post" id="socialLink" action="{{ route('admin.homeTextUpdate') }}">
                                    @csrf
                                    <input type="hidden" name="facebookId" value="{{$generaSectionList['facebook_link']['id']}}">
                                    <input type="hidden" name="linkdlnId" value="{{$generaSectionList['linkdln_link']['id']}}">
                                    <input type="hidden" name="youtbeId" value="{{$generaSectionList['youtube_link']['id']}}">
                                    <input type="hidden" name="parent_section_name" value="home">
                                    <input type="hidden" name="contentType" value="social"/>
                                    <input type="hidden" name="sectionName" value="social">
                                    <input type="hidden" name="section_type" value="social_link">
                                    <input type="hidden" name="content_type" value="link">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="pasteSL" class="col-sm-2 col-form-label">Facebook</label>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <input type="checkbox" name="facebookContent_status" value="true"  {{isset($generaSectionList['facebook_link']['status'])?($generaSectionList['facebook_link']['status']==1?'checked':''):''}}>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="facebookContent" class="form-control"  placeholder="Write facebook link" value="{{isset($generaSectionList['facebook_link']['social_link'])?$generaSectionList['facebook_link']['social_link']:''}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="pasteSL" class="col-sm-2 col-form-label">LinkedIn</label>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <input type="checkbox" name="linkdlnContent_status" value="true" {{isset($generaSectionList['linkdln_link']['status'])?($generaSectionList['linkdln_link']['status']==1?'checked':''):''}}>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="linkdlnContent" class="form-control" placeholder="Write linkdln link" value="{{isset($generaSectionList['linkdln_link']['social_link'])?$generaSectionList['linkdln_link']['social_link']:''}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="pasteSL" class="col-sm-2 col-form-label">Youtube</label>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <input type="checkbox" name="youtubeContent_status" value="true" {{isset($generaSectionList['youtube_link']['status'])?($generaSectionList['youtube_link']['status']==1?'checked':''):''}}>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="youtubeContent" class="form-control"  placeholder="Write youtube link" value="{{isset($generaSectionList['youtube_link']['social_link'])?$generaSectionList['youtube_link']['social_link']:''}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-info float-right">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                     </div>
<!-- Phone -->
                     <div class="tab-pane fade" id="vert-tabs-phone" role="tabpanel" aria-labelledby="vert-tabs-phone-tab">
                         <div class="row">
                            <form method="POST" role="form" action="{{ route('admin.users.store') }}">
                            @method('PUT')
                            @csrf
                             <div class="col-8">
                                 <div class="card-body">
                                     <div class="form-group row">
                                         <label for="pasteSL" class="col-sm-2 col-form-label">Phone 1</label>
                                         <div class="col-sm-10">
                                             <div class="input-group">
                                                 <div class="input-group-prepend">
                                                     <span class="input-group-text">
                                                         <input type="radio">
                                                     </span>
                                                 </div>
                                                 <input type="text" class="form-control" id="pasteSL" placeholder="Paste Social Link">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="card-body">
                                     <div class="form-group row">
                                         <label for="pasteSL" class="col-sm-2 col-form-label">Phone 2</label>
                                         <div class="col-sm-10">
                                             <div class="input-group">
                                                 <div class="input-group-prepend">
                                                     <span class="input-group-text">
                                                         <input type="radio">
                                                     </span>
                                                 </div>
                                                 <input type="text" class="form-control" id="pasteSL" placeholder="Paste Social Link">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                            </form>
                         </div>
                             <div class="card-footer">
                                 <button type="submit" class="btn btn-info float-right">Update</button>
                             </div>
                     </div>
                      <!-- Tomorrow's Content -->
                     <div class="tab-pane fade" id="vert-tabs-tomorrow" role="tabpanel" aria-labelledby="vert-tabs-tomorrow-tab">
                         <div class="row">
                             <div class="col-4">
                                 <h2 class="lead">Tomorrow's Content</h2>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-4">
                             </div>
                             <div class="col-8">
                                 <form method="post" id="tomorrowsContnet" action="{{ route('admin.homeTextUpdate') }}" enctype="multipart/form-data">
                                     @csrf
                                     <input type="hidden" name="parent_section_name" value="home">
                                     <input type="hidden" name="contentType" value="tomorrowsCall"/>
                                     <input type="hidden" name="sectionName" value="tomorrowsCall">
                                     <input type="hidden" name="section_type" value="list">
                                     <input type="hidden" name="content_type" value="text">
                                     <input type="hidden" name="tomorrowText_id" id="tomorrowText_id"  value="">

                                     <div style="width: 100%;">
                                         <div style="float: left;width: 75%;margin-right: 20px;margin-left: 21px;">
                                             <input type="text" name="tomorrowText" id="tomorrowText" class="form-control" placeholder="Write Here">
                                         </div>
                                         <div style="float: left">
                                             <button type="submit" id="btnTomorrowText" class="btn btn-primary">Add New</button>
                                         </div>
                                    </div>
                                 </form>

                             </div>
                         </div>
                         <div class="row">
                            <div class="col-4">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                   <div class="card-body p-0">
                                      <table class="table">
                                         <tbody>
                                         @foreach($tomorrowsCallSection as $key=>$item)
                                            <tr>
                                               <td id="tomorrowCallText_{{$item->id}}">
                                                {{$item->content}}
                                               </td>
                                               <td class="text-right py-0 align-middle">
                                                  <div class="btn-group btn-group-sm">
                                                     <a href="javascript:void(0)" onclick="editCall({{$item->id}})" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                                  </div>
                                               </td>
                                            </tr>
                                            @endforeach

                                         </tbody>
                                      </table>
                                   </div>
                                </div>
                            </div>
                        </div>
                     </div>
<!-- Greetings -->
                     <div class="tab-pane fade" id="vert-tabs-events" role="tabpanel" aria-labelledby="vert-tabs-events-tab">
                        <div class="row">
                            <div class="col-4">
                                <form method="post" class="homeSection" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                        @csrf
                                    <input type="hidden" name="id_to_display" value="greetings">
                                    <input type="hidden" name="parent_section_name" value="home">
                                    <input type="hidden" name="sectionName" value="Events">
                                    <input type="hidden" name="section_type" value="image">
                                    <input type="hidden" name="content_type" value="greetings">
                                    <h2 class="lead">Greetings</h2>
                                    <div class="adminThumb" style="height: 118px;">
                                         <img class="img-fluid" id="greetings" src="{{  $generaSectionList['greetings']['image']!=''?asset( 'uploads/img/'.$generaSectionList['greetings']['image']):asset( 'backend/img/default/no-image.png')  }}" alt="User profile picture">
                                     </div>
                                    <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                        <input type="file" name="file" class="custom-file-input" >
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                     <button type="submit" class="btn btn-info btn-150" >Upload</button>
                                </form>
                            </div>
                            <div class="col-8">
                                <form method="post" id="uploadBrochure" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id_to_display" value="brochure">
                                    <input type="hidden" name="parent_section_name" value="home">
                                    <input type="hidden" name="sectionName" value="Events">
                                    <input type="hidden" name="section_type" value="file">
                                    <input type="hidden" name="content_type" value="file">
                                    <h2 class="lead">Brochure</h2>
                                    <div class="adminThumb" style="height: 116px;">
                                        <a href="{{  $generaSectionList['file']['file']!=''?asset( 'uploads/file/'.$generaSectionList['file']['file']):asset( 'backend/img/default/no-image.png')  }}" id="brochure">Open Brochure</a>
                                    </div>
                                    <div class="custom-file login-box"  style="margin-bottom: 10px; display: block;">
                                        <input type="file" name="file" class="custom-file-input" >
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-150" >Upload</button>
                                </form>
                            </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- /.card -->
      </div>
   </div>
   <!-- /.container-fluid -->

   <!-- /.Media Library Modal -->
   <div class="modal fade" id="homeModal">
      <div class="modal-dialog modal-xl">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
             <form method="post" id="media_file" action="{{ route('admin.homeSectionUpdate') }}" enctype="multipart/form-data">
                 @csrf
                <div class="modal-body">
                   <div class="card-outline-tabs">
                      <div class="card-header p-0 pt-1">
                         <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Upload File</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Library</a>
                            </li>
                         </ul>
                      </div>
                      <div class="card-body">
                         <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                <div class="custom-file login-box"  style="margin: 0 auto;display: block;">
                                    <input type="file" name="file" class="custom-file-input" >
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                <br />
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow=""
                                         aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                        0%
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                               sfgfdgfd
                            </div>
                         </div>
                      </div>
                      <!-- /.card -->
                   </div>
                </div>
                <div class="modal-footer">
                   <button type="button" class="btn btn-primary" id="homesection_select" style="display: none">Select</button>
                   <button type="submit" class="btn btn-primary" id="homesection_upload">Upload</button>
                </div>
             </form>

         </div>
         <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
   </div>
   <!-- /.Tomorrow Content Modal -->
   <div class="modal fade" id="tomorrowModal">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="card-outline-tabs">
                  <div class="card-body">
                     <div class="tab-content" id="custom-tabs-one-tabContent">
                        <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Write Here">
                            </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.card -->
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-primary">Select</button>
            </div>
         </div>
         <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
   </div>
   <!-- /.modal -->
</section>
@endsection
@push('scripts')
@endpush
