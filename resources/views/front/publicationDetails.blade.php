@extends('front.layouts.publication')

@section('content')
    <div class="about-wrap">
        <section style="background-color:#FAFAFA;padding:30px; margin-top: 85px;">
            <div class="container-1">
                <div class="single-title">
                    <h1>{{$publicationDetails->title}}</h1>
                </div>
                <p><a href="/publication">Back to all Publications</a></p>
            </div>
        </section>
        <section class="blog-des">
            <div class="container-1">
                <div class="row">
                    <div class="col col-md-3">
                        <div class="blog-social">
                            <p>SHARE ON</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href=""><i class="fab fa-facebook-square text-dark scl-icon"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fab fa-linkedin text-dark scl-icon"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-md-9">
                        <div class="blog-details-2">
                            <img src="{{ asset('/uploads/img/'.$publicationDetails->content)}}" alt="">
                            <div class="blg-p text-justify">
                                {{$publicationDetails->description}}
                            </div>
                            <div class="blog-social">
                                <ul class="list-inline">
                                    <li class="list-inline-item mr-4"><p>SHARE ON</p></li>
                                    <li class="list-inline-item"><a href=""><i class="fab fa-facebook-square text-dark scl-icon"></i></a></li>
                                    <li class="list-inline-item"><a href=""><i class="fab fa-linkedin text-dark scl-icon"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Recent story start here -->
        <section class="rcnt-story">
            <div class="container">
                <hr style="width: 5%;height:0px;border:1px solid #EC4169;">
                <h2>Recent Stories.</h2>
                <div class="blog-btm-post row mt-5">
                    @foreach($gallerySectionListData as $key=>$item)

                    <div class="col col-md-4 blog-bg">
                        <div class="btm-cnt">
                            <h4><a href="{{route('publicationDetails',['id'=>$item->id])}}">{{$item->title}}</a></h4>
                            <div>
                                {{$item->title}}
                            </div>
                        </div>
                        <div class="overlay"></div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Recent story end -->



        <div style="margin-bottom:100px;"></div>

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
