<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mangrove') }}</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }} ">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="user-scalable=no, width=device-width, target-densityDpi=device-dpi" />
        <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('front/css/jquery.scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/app.css')}}" />

    <style>

        #fullwidth-video{height: 50vw; min-height:50vh; position: relative;}
        #fullwidth-video .fullwidth-video-bg {
        position: absolute; z-index: 1; top: 0px; left: 0px; bottom:
        0px; right: 0px; overflow: hidden;
        background-size: cover; background-color: transparent; background-repeat: no-repeat;
        background-position: 0% 50%; background-image:url (../images/bg/myvideobg.jpg);
        }
        .sldtext {z-index: 2;}
        #fullwidth-video video {
        margin: auto; position: absolute; z-index: 1; top: 50%; left: 0%;
        transform: translate(0%, -50%); visibility: visible;
        opacity: 1; width: 100%; height: 100%; object-fit: cover;
        }

        /** For Edge**/
        @supports (-ms-ime-align:auto){ #fullwidth-video video
        { object-fit:none; margin:none;position:inherit;z-index:1;
        top:50%;left:0%;transform:translate(0%, -50%);height:auto;width:100%; } }


        .download-area {
          margin: 15px 0;
          display: inline-block;
          font-size: 1.15em;
          position: relative;
          text-align: center;
          padding: 0.5em 1em;
          background: linear-gradient(45deg, #59adeb, #40c3af);
          color: #fff;
          box-shadow: 0 0.2em 0.2em rgba(0,0,0,0.25);
          border-radius: 0.2em;
          transition: box-shadow 0.2s ease-in-out;
          cursor: pointer;
        }
        .download-area:active {
          background-color: #ccc;
          box-shadow: 0 0 6px rgba(0,121,238,0.6);
          transition: box-shadow 0.1s ease-in-out;
        }
        .download-area:after {
          content: "\0021e7";
          position: absolute;
          top: -0.4em;
          left: 0;
          right: 0;
          display: block;
          transform: rotate(180deg);
          font-size: 5em;
          opacity: 0;
          text-shadow: 0 0 1em #000;
          transition: opacity 0.3s ease-in-out, font-size 0.3s ease-in-out, top 0.3s ease-in-out;
          box-sizing: border-box;
          text-align: center;
          color: #fff;
        }
        .download-area:active:after {
          font-size: 1em;
          opacity: 1;
          transition: none;
          top: 0.3em;
        }
        .download-area:hover {
          box-shadow: 0 0.1em 0.25em rgba(0,0,0,0.25);
        }

        /*Footer*/

        .h-23 {
            height: 23%!important;
        }
        .h-80 {
            height: 80%!important;
        }
        .foot-content{
            background:url(images/footer-bg.jpg) no-repeat right;
            background-size:70%;
        }

        /*Subscription*/
        .form__group {
          position: relative;
          padding: 15px 0 0;
          margin: 0 auto;
          text-align: center;
          width: 80%;
        }

        .form__field {
          font-family: inherit;
          width: 100%;
          border: 0;
          border-bottom: 1px solid #009a4c;
          outline: 0;
          font-size: 1.2rem;
          color: var(--dark);
          padding: 5px 0;
          background: transparent;
          transition: border-color 0.2s;
        }
        .form__field::placeholder {
          color: transparent;
        }
        .form__field:placeholder-shown ~ .form__label {
              font-size: 1.0rem;
            cursor: text;
            top: 26px;
        }

        .form__label {
          position: absolute;
          top: 0;
          display: block;
          transition: 0.2s;
          font-size: .9rem;
          color: #999999;
        }

        .form__field:focus {
          padding-bottom: 6px;
          font-weight: 700;
          border-width: 3px;
          border-image: linear-gradient(to right, #11998e, #38ef7d);
          border-image-slice: 1;
        }
        .form__field:focus ~ .form__label {
          position: absolute;
          top: 0;
          display: block;
          transition: 0.2s;
          font-size: 1rem;
          color: #11998e;
          font-weight: 700;
        }

        /* reset input */
        .form__field:required, .form__field:invalid {
          box-shadow: none;
        }


        .subcript-align{
            background: #e2e3e8;
            margin-bottom: 20px;
        }
        .subscribe {
            margin-top: 80px;
        }
        .subscribe h2 {
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            color: #14a54a;
        }
        .subscribe form {
            background: #fff;
            padding: 5px 5px;
            border-radius: 4px;
        }
        .newsletter-submit{
            width:100%
        }
        .newsletter-submit button{
            margin:0 auto;
            text-align:center;
            display:block;
        }
        .log-section{
            background:#f1f4f9;
        }


/*logi Form*/


        .login-form .form {
              display: block;
              width: 350px;
              height: 310px;
              padding: 2em;
              xbackground-color: #EBECF0;
              border-radius: 13px;
              xbox-shadow: 3px 3px 5px #BABECC,  -5px -5px 10px #FFF;
        }

        .login-form .margin-wrap1 {
              margin-bottom: 20px;
        }

        .login-form .margin-wrap2 {
              margin-bottom: 30px;
        }

        .login-form .group {
            width: 100%;
            height: auto;
        }

        .login-content {
            width: 100%;
            padding-left: calc(42vw - ((100vw - 100%)/2));
            margin: auto;
        }

        .login-form .group__label {
            display: block;
            padding-left: 10px;
            font-size: 20px;
            letter-spacing: 0.05em;
            color: #61677C;
            text-shadow: 1px 1px 0 #cdf3f9;
            margin-bottom: 10px;
        }
        .login-form .group__input {
            display: block;
            -moz-appearance: none;
            -webkit-appearance: none;
            appearance: none;
            width: 100%;
            background-color: #7eccd9;
            font-size: 16px;
            color: #2e3038;
            padding: 10px;
            outline: none;
            border: none;
            border-radius: 30px;
            box-shadow: inset 2px 2px 5px #7db2bb, inset -5px -5px 10px #6fb9c5;
            transition: all 0.2s ease-in-out;
        }
        .login-form .group__input:focus {
              box-shadow: inset 1px 1px 2px #71abb5, inset -1px -1px 2px #cdf3f9;
        }

        .login-form .button {
              background-color: #7eccd9;
            color: #ffffff;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 0.07em;
            padding: 10px 21px;
            border: 0;
            border-radius: 30px;
            box-shadow: 3px 3px 5px #71abb5, -4px -4px 10px #cdf3f9;
            outline: 0;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            width: 100%;
        }
        .login-form .button:hover {
              box-shadow: -2px -2px 5px #cdf3f9, 2px 2px 5px #71abb5;
        }
        .login-form .button:active {
              box-shadow: inset 2px 2px 3px #71abb5, inset -2px -2px 3px #cdf3f9;
        }
        .login-form {
            padding-top: calc(34vw - ((100vw - 100%)/2));
        }

    </style>

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('front/fonts/custom-fonts.css') }}" />

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    @stack('css')
</head>
<body>
    <div id="app">
        <div class="main-menu d-flex justify-content-between flex-wrap align-items-center">
            <div class="white-logo" data-menuanchor="banner">
                <a href="#banner"><img src="images/logo-w.png" alt=""></a>
            </div>

            <ul id="menu">
                <li data-menuanchor="Overview">
                    <a class="link-1" href="{{url('/')}}#Overview">Overview</a>
                    <span></span>
                </li>
                <li data-menuanchor="Modernliving">
                    <a class="link-2" href="{{url('/')}}#Modernliving">Modernliving</a>
                    <span></span>
                </li>
                <li data-menuanchor="Gallery">
                    <a class="link-3" href="{{url('/')}}#Gallery">Gallery</a>
                    <span></span>
                </li>
                <li data-menuanchor="Map">
                    <a class="link-4" href="{{url('/')}}#Map">Map</a>
                    <span></span>
                </li>
                <li data-menuanchor="Login">
                    <a class="link-5" href="{{url('/')}}#Login">Login</a>
                    <span></span>
                </li>
            </ul>
        </div> <!-- header menu-->

        <header class="header">
            <span class="header-icon-1">
                <img src="images/share.png">
                <a href="https://www.facebook.com/MangroveHRL"><i class="fab fa-facebook-square"></i></a>
                <!-- <a href="#"><i class="fab fa-youtube"></i> Youtube</a> -->
                <a href="https://www.instagram.com/mangroveHRL/"><i class="fab fa-instagram-square"></i></a>
            </span>
            <!-- <a class="header-icon" href="#"></a> -->
            <div class="invesment">
                <a href="{{ route('registration') }}"><span>invesment</span></a>
            </div>
            <!-- <a class="header-icon-2" href="#"></a> -->
            <span class="header-icon-2">
                <img src="images/phone.png">
                <a href="#"><i>+88 096 7853 0000</i></a>
            </span>
        </header>

        <div id="pagepiling">
            @yield('content')
        </div>
        <?php
            $gallery_thumbs_descriptions = [
                ['title'=>'Slider One Heading','description'=>'Description about slider one'],
                ['title'=>'Slider two Heading','description'=>'Description about slider two'],
                ['title'=>'Slider three Heading','description'=>'Description about slider three'],
                ['title'=>'Slider four Heading','description'=>'Description about slider four'],
                ['title'=>'Slider five Heading','description'=>'Description about slider five'],
                ['title'=>'Slider six Heading','description'=>'Description about slider six'],
                ['title'=>'Slider seven Heading','description'=>'Description about slider seven'],
                ['title'=>'Slider eight Heading','description'=>'Description about slider eight'],
                ['title'=>'Slider nine Heading','description'=>'Description about slider nine'],
                ['title'=>'Slider ten Heading','description'=>'Description about slider ten'],
                ['title'=>'Slider elevent Heading','description'=>'Description about slider elevent'],
                ['title'=>'Slider twelve Heading','description'=>'Description about slider twelve']
            ];
        ?>
    </div>

    <script src="{{ asset('front/js/jquery.min.js') }} "></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }} "></script>
    <script src="{{ asset('front/js/all.min.js') }}"></script>
    <script src="{{ asset('front/js/pagepiling.min.js') }}"></script>
    <script src="{{ asset('front/js/js.js') }}"></script>
    <script src="{{ asset('front/js/swiper.min.js') }}"></script>
    <!-- /.content -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.2.0/jspdf.umd.min.js"></script>
    <script type="text/javascript">
        var doc = new jsPDF();
        var specialElementHandlers = {
            '#editor': function (element, renderer) {
                return true;
            }
        };

       function generatePdf(){
alert('clicked');
            doc.fromHTML($('#pdfContent').html(), 15, 15, {
                'width': 170,
                'elementHandlers': specialElementHandlers
            });
            doc.save('sample-file.pdf');
        };
    </script>
    <script>

        var thumbs_descriptions = '<?php echo json_encode($gallery_thumbs_descriptions); ?>';
        var thumbs_description_datas = JSON.parse(thumbs_descriptions);
        var toggleExpand = function() {
            // $('.swiper-slide-active .btn-toggle-expand').on('click', function() {
            $('body').on('click', '.swiper-slide-active .btn-toggle-expand', function() {
                if ( $(this).hasClass('active') ) {
                    $('.swiper-slide-active .img-info-content').removeClass('active');
                    $(this).closest('.img-info').animate({
                            height: 60,
                            width: 60
                        }, 400);
                    // setTimeout(function() {
                    $(this).removeClass('active');
                    // });
                    // setTimeout(function() {
                    // }, 1500);
                } else {
                    // alert('else');
                    $(this).addClass('active');
                    $(this).closest('.img-info').addClass('active')
                    $(this).closest('.img-info').animate({
                        height: 200,
                        width: 400
                    }, 400);
                    setTimeout(function() {
                        $('.swiper-slide-active .img-info-content').addClass('active');
                    }, 500);
                }
            });
        };

        toggleExpand();

        var swiperEvents = function() {

            var galleryThumbs = new Swiper('.gallery-thumbs', {
                slidesPerView: 10,
                freeMode: true,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                spaceBetween: 10,
                breakpoints: {
                    1024: {
                        slidesPerView: 10,
                    },
                    768: {
                        slidesPerView: 7,
                    },
                    640: {
                        slidesPerView: 4,
                    },
                    320: {
                        slidesPerView: 3,
                    }
                }
            });

            var galleryTop = new Swiper('.gallery-top', {
                autoplay: true,
                effect: 'fade',
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                thumbs: {
                    swiper: galleryThumbs
                },
                on: {
                    slideChange: function () {
                        let activeIndex = this.activeIndex;
                        $("#slider_title").text(thumbs_description_datas[activeIndex]['title']);
                        $("#slider_description").text(thumbs_description_datas[activeIndex]['description']);
                    }
                }
            });

            galleryThumbs.on('slideChange', function () {
                console.log(this);
            });
        };

        if ( $('.gallery-thumbs').length > 0 ) {
            swiperEvents();
        }

        // var toggleExpand = function() {

        //  // $('.swiper-slide-active .btn-toggle-expand').on('click', function() {
        //  $('body').on('click', '.swiper-slide-active .btn-toggle-expand', function() {

        //      if ( $(this).hasClass('active') ) {
        //          // alert('if');

        //          $('.swiper-slide-active .img-info-content').removeClass('active');

        //          $(this).closest('.img-info').animate({
        //                  height: 60,
        //                  width: 60
        //              }, 400);

        //          // setTimeout(function() {

        //              $(this).removeClass('active');

        //          // });

        //          // setTimeout(function() {





        //          // }, 1500);



        //      } else {

        //          // alert('else');

        //          $(this).addClass('active');

        //          $(this).closest('.img-info').addClass('active')
        //          $(this).closest('.img-info').animate({
        //              height: 200,
        //              width: 400
        //          }, 400);

        //          setTimeout(function() {
        //              $('.swiper-slide-active .img-info-content').addClass('active');
        //          }, 500);
        //      }




        //  });

        // };
        // toggleExpand();

        // var swiperEvents = function() {

        //  var galleryThumbs = new Swiper('.gallery-thumbs', {
        //      slidesPerView: 10,
        //  freeMode: true,
        //  watchSlidesVisibility: true,
        //  watchSlidesProgress: true,
        //  spaceBetween: 10,
        //  breakpoints: {
        //  1024: {
        //      slidesPerView: 10,
        //  },
        //  768: {
        //      slidesPerView: 7,
        //  },
        //  640: {
        //      slidesPerView: 4,
        //  },
        //  320: {
        //      slidesPerView: 3,
        //  }
        //  }
        // });
        // var galleryTop = new Swiper('.gallery-top', {
        //  autoplay: true,
        //  effect: 'fade',
        //  navigation: {
        //  nextEl: '.swiper-button-next',
        //  prevEl: '.swiper-button-prev',
        //  },
        //  thumbs: {
        //  swiper: galleryThumbs
        //  }
        // });

        // };

        // if ( $('.gallery-thumbs').length > 0 ) {
        //  swiperEvents();
        // }

        // $('.scrollbar-inner').scrollbar();


    </script>
    {{-- <script src="{{ asset('front/js/jquery.scrollbar.js')}}"></script> --}}

    @stack('script')
    </body>
</html>
