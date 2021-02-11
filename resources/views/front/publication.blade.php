@extends('front.layouts.publication')

@section('content')

    <div class="about-wrap">
        <section class="about-banner d-block">
            <img class="img-fluid" id="banner" src="{{ isset($gallerySectionList['banner']['image1']['image'])?$gallerySectionList['banner']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['banner']['image1']['image']):'':asset( 'publicationsPath/images/banner.png')  }}" alt="">
            <div class="about-banner-in">
                <div class="banner-text">
                    <img class="img-fluid" id="banner-text" src="{{ isset($gallerySectionList['banner-text']['image1']['image'])?$gallerySectionList['banner-text']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['banner-text']['image1']['image']):'':asset('publicationsPath/images/banner-text.png')  }}" alt="">  alt="">
                </div>
                <div class="banner-shape">
                    <img src="{{ asset('publicationsPath/images/banner-shape.png')}}" alt="">
                </div>
            </div>
        </section>

        <section class="about-banner-btm d-block">

            <img class="img-fluid" id="banner-bottom" src="{{ isset($gallerySectionList['banner-bottom']['image1']['image'])?$gallerySectionList['banner-bottom']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['banner-bottom']['image1']['image']):'':asset( 'publicationsPath/images/banner-btm.png')  }}" alt="">
            <div class="about-banner-btm-in d-flex flex-column">
                <div class="banner-btm-text-1 text-center mt-5">
                    <img class="img-fluid" id="banner-bottom-text-1" src="{{ isset($gallerySectionList['banner-bottom-text-1']['image1']['image'])?$gallerySectionList['banner-bottom-text-1']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['banner-bottom-text-1']['image1']['image']):'':asset( 'backend/img/default/banner-btm-text-1.png')  }}" alt="">
                </div>
                <div class="banner-btm-text-2 text-center mt-5">
                    <img class="img-fluid" id="banner-bottom-text-2" src="{{ isset($gallerySectionList['banner-bottom-text-2']['image1']['image'])?$gallerySectionList['banner-bottom-text-2']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['banner-bottom-text-2']['image1']['image']):'':asset( 'publicationsPath/images/banner-btm-text-2.png')  }}" alt="">
                </div>
            </div>
        </section>
        <section class="bullet-wrap text-center">
            <img class="img-fluid" id="bullet1" src="{{ isset($gallerySectionList['bullet1']['image1']['image'])?$gallerySectionList['bullet1']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['bullet1']['image1']['image']):'':asset( 'publicationsPath/images/bullet-1.png')  }}" alt="User profile picture">

            <img class="img-fluid" id="bullet1" src="{{ isset($gallerySectionList['bullet2']['image1']['image'])?$gallerySectionList['bullet2']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['bullet2']['image1']['image']):'':asset( 'publicationsPath/images/bullet-2.png')  }}" alt="User profile picture">

            <img class="img-fluid" id="bullet1" src="{{ isset($gallerySectionList['bullet3']['image1']['image'])?$gallerySectionList['bullet3']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['bullet3']['image1']['image']):'':asset( 'publicationsPath/images/bullet-3.png')  }}" alt="User profile picture">

            <img class="img-fluid" id="bullet1" src="{{ isset($gallerySectionList['bullet4']['image1']['image'])?$gallerySectionList['bullet4']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['bullet4']['image1']['image']):'':asset( 'publicationsPath/images/bullet-4.png')  }}" alt="User profile picture">

        </section>

        <section class="bullet-btm flex-wrap">
            <div class="col-5 bullet-btm-left">
                <div class="bullet-btm-top">
                    <img src="{{ asset('publicationsPath/images/bullet-btm-left-top.png')}}" alt="">
                </div>
                <div class="bullet-btm-btm">
                    <img src="{{ asset('publicationsPath/images/bullet-btm-left-btm.png')}}" alt="">
                </div>
            </div>

            <div class="col-7 bullet-btm-right">
                <img src="{{ asset('publicationsPath/images/bullet-btm-img.png')}}" alt="">
            </div>
        </section>
        <section class="blog mt-5 mx-5">
            <h2 id="publication-id" class="text-center display-4 font-weight-bold mb-5" style="font-family: 'Oxygen', sans-serif;">Our Publications</h2>
            <div class="blog-content">
{{--                <div class="row">--}}

{{--                    @foreach($galleryList as $key=>$item)--}}
{{--                        <div class="col col-md-6">--}}
{{--                            <div class="first-cont text-light" style="background-image: url(<?php  echo asset('/uploads/img/'.$item->content) ?>);--}}
{{--                                background-repeat: no-repeat;--}}
{{--                                background-position: center;--}}
{{--                                background-size: cover;--}}
{{--                                padding: 50px;">--}}
{{--                                <h5 class="mb-2"><u><a href="{{route('publicationDetails',['id'=>$item->id])}}">{{$item->title}}</a></u></h5>--}}
{{--                                <P>{{$item->created_at->format('D M,Y H:i:s')}}</P>--}}
{{--                                {{$item->description}}--}}
{{--                                <div class="mt-4"><a class="blog-btn" href="{{route('publicationDetails',['id'=>$item->id])}}">Abstract</a></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                    <div class="col col-md-6">--}}
{{--                        <div class="first-cont text-light">--}}
{{--                            <h5 class="mb-2"><u><a href="publication-details.html">GENERAL</a></u></h5>--}}
{{--                            <P>October 30, 2020</P>--}}
{{--                            <h3>Explaining Foderal Budgeting Through <br> Privillege Economy</h3>--}}
{{--                            <p class="mb-2">Arjun Guttja</p>--}}
{{--                            <p>The American federal budget, contrary to all common-sense <br>proclamations, if not created ex, nihilo each year. In fact, <br> less...</p>--}}
{{--                            <div class="mt-4"><a class="blog-btn" href="">Abstract</a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col col-md-6">--}}
{{--                        <div class="secound-cont text-light">--}}
{{--                            <h5 class="mb-2"><u><a href="publication-details.html">GENERAL</a></u></h5>--}}
{{--                            <P>October 30, 2020</P>--}}
{{--                            <h3>Explaining Foderal Budgeting Through <br> Privillege Economy</h3>--}}
{{--                            <p class="mb-2">Arjun Guttja</p>--}}
{{--                            <p>The American federal budget, contrary to all common-sense <br>proclamations, if not created ex, nihilo each year. In fact, <br> less...</p>--}}
{{--                            <div class="mt-4"><a class="blog-btn" href="">Abstract</a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}


                <div class="row mt-5">

                    @foreach($galleryList as $key=>$item)

                        <div class="col col-md-4">
                            <div class="blog-3-section">
                                <div class="blog-hf-img">
                                    <img src="{{ asset('/uploads/img/'.$item->content)}}" alt="">
                                </div>
                                <h3><u><a href="{{route('publicationDetails',['id'=>$item->id])}}">General</a></u></h3>
                                <p class="blog-p">{{$item->created_at->format('D M,Y H:i:s')}}</p>
                                <h2><a href="{{route('publicationDetails',['id'=>$item->id])}}">{{$item->title}}</a></h2>
{{--                                <p class="blog-p">Lawrence Bowdish</p>--}}
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
        </section>
        <!-- bootstrap js -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <style type="text/css">
            .about-banner-btm-in, .about-banner-in {
                width: 100%;
                height: 100%;
                /* position: absolute; */
                left: 0;
                top: 0;
            }
        </style>
@endsection
