

<?php $__env->startSection('content'); ?>
<div class="section" id="section1">
    <div class="banner">
        <video playsinline="" muted="" onplaying="this.controls=false" autoplay loop>
            <source src="<?php echo e(asset('images/home-banner/home-banner.mp4')); ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
            <source src="<?php echo e(asset('images/home-banner/home-banner.webm')); ?>" type='video/webm; codecs="vp8, vorbis"'>
            <source src="<?php echo e(asset('images/home-banner/home-banner.ogv')); ?>" type='video/ogg; codecs="theora, vorbis"'>
        </video>
        
        <div class="banner-form">
            <h2>TOMORROW'S CALL</h2>
            <ul>
                <li>মাত্র <strong>৫</strong>০০০ টাকায় মাসিক কিস্তি</li>
                <li><strong>৫</strong>০০০০ টাকা বুকিং মানি</li>
                <li>শেয়ার মূল্য মাত্র <strong>২</strong>লাখ টাকা</li>
                <li>বছরে <strong>৭</strong> দিন হোটেলে থাকার সুযোগ</li>
                <li>আজীবন হালাল মুনাফার গ্রহণের সুযোগ </li>
                <li>ফাইভ ষ্টার সমমানের হোটেলের মালিকানা</li>
               <li>বাৎসরিক <strong>১৫</strong>০০০-৫০০০০ টাকা মুনাফা</li>
            </ul>
            <inquiry-form></inquiry-form>
        </div>

        <span data-menuanchor="Overview">
            <section id="explore" class="explore">
                <a href="#Overview" rel="next">
                    <span></span>
                    <span></span>
                    <span></span>
                    <p class="allsttory">All STORIES</p>
                </a>
            </section>
        </span>
    </div>
</div>
<!--//banner section-->

<div class="section" id="section2">
    <div class="overview-in d-flex justify-content-between flex-wrap position-relative">
        <div class="pollSlider">
            <div id="pollSlider-button">Cover story</div>
            <img class="img-fluid" src="images/cover-story.jpg">
        </div>
       
        <div class="overview box-1">
            <img class="img-fluid" src="images/overview-1.jpg">
        </div>
        <div class="overview position-relative box-2">
            <img class="img-fluid" src="images/overview-2.jpg">
            <div class="overview-text">
                <h3><span> CREATED BY</span><br>ESTEEMED<br>ARCHITECTS<br>AND<br>DESIGNERS</h3>
            </div>
        </div>
        <div class="overview box-3">
            <img class="img-fluid" src="images/overview-3.png">
        </div>
        <div class="overview box-4">
            <a target="_blank" href="https://www.youtube.com/watch?v=pxx53dlwdVY&t=21s"><img class="img-fluid" src="images/overview-4.jpg"></a>
        </div>
    </div>
</div>
<!--overview section-->

<div class="section" id="section3">
    <div class="d-flex flex-wrap justify-content-between">
        <div class="design-left">
            <img src="<?php echo e(asset('images/design-banner-1.jpg')); ?>" alt="">
        </div>
        <div class="design-right">
            <ul class="nav nav-pills design-tab" role="tablist">
                <li class="nav-item">
                    <a class="tab-1 tab-item active" onclick="setgallery('rooms')" data-toggle="pill"
                        href="javascript:void(0)">
                        <span>ROOMS</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="tab-2 tab-item" onclick="setgallery('entertainment')" data-toggle="pill"
                        href="javascript:void(0)">
                        <span>ENTERTAIINMENT</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="tab-3 tab-item" onclick="setgallery('gym')" data-toggle="pill"
                        href="javascript:void(0)">
                        <span style="width: 112px !important">GYM & SPA</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="tab-4 tab-item" onclick="setgallery('dine')" data-toggle="pill"
                        href="javascript:void(0)">
                        <span>DINE</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="tab-5 tab-item" onclick="setgallery('pool')" data-toggle="pill"
                        href="javascript:void(0)">
                        <span>POOL</span>
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div id="rooms" class="tab-pane active">
                    <img class="img-fluid" src="<?php echo e(asset('images/room.jpg')); ?>" alt="">
                </div>
                <div id="entertainment" class="tab-pane">
                    <img class="img-fluid" src="<?php echo e(asset('images/entrtainment.jpg')); ?>" alt="">
                </div>
                <div id="gym" class="tab-pane">
                    <img class="img-fluid" src="<?php echo e(asset('images/gym.jpg')); ?>" alt="">
                </div>
                <div id="dine" class="tab-pane">
                    <img class="img-fluid" src="<?php echo e(asset('images/restauran.jpg')); ?>" alt="">
                </div>
                <div id="pool" class="tab-pane">
                    <img class="img-fluid" src="<?php echo e(asset('images/pool.jpg')); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!--modernliving section-->

<div class="section" id="section4" style="background-color:rgb(255, 255, 255) !important">
    <div class="d-flex flex-wrap justify-content-between">
        <div class="gallery-left">
            <div class="container">
                <div class="gallery-caption">
                    <h1>CREATED BY ESTEEMED <span>ARCHITECTS AND DESIGNERS</span></h1>
                    <div class="row">
                        <div class="col-7">
                            <img class=" pt-3 img-fluid" src="<?php echo e(asset('images/gallery_logo_1.png')); ?>" alt="gallery logo">
                        </div>
                        <div class="col-5">
                            <img class="img-fluid" src="<?php echo e(asset('images/gallery_logo_2.png')); ?>" alt="gallery logo">
                        </div>
                    </div>

                    
                </div>
            </div>
            
        </div>
        <div class="gallery-right">
            <div class="site-wrap">
                <div class="swiper-container gallery-top">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide cover" style="background-image: url('/gallery/img_1.jpg');"></div>
                        <div class="swiper-slide cover" style="background-image: url('/gallery/img_2.jpg');"></div>
                        <div class="swiper-slide cover" style="background-image: url('/gallery/img_3.jpg');"></div>
                        <div class="swiper-slide cover" style="background-image: url('/gallery/img_4.jpg');"></div>
                        <div class="swiper-slide cover" style="background-image: url('/gallery/img_5.jpg');"></div>
                        <div class="swiper-slide cover" style="background-image: url('/gallery/img_6.jpg');"></div>
                        <div class="swiper-slide cover" style="background-image: url('/gallery/img_7.jpg');"></div>
                        <div class="swiper-slide cover" style="background-image: url('/gallery/img_8.jpg');"></div>
                        <div class="swiper-slide cover" style="background-image: url('/gallery/img_9.jpg');"></div>
                        <div class="swiper-slide cover" style="background-image: url('/gallery/img_10.jpg');"></div>
                    </div>
                </div>
                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide cover" style="background-image:url(/gallery/img_1.jpg)"></div>
                        <div class="swiper-slide cover" style="background-image:url(/gallery/img_2.jpg)"></div>
                        <div class="swiper-slide cover" style="background-image:url(/gallery/img_3.jpg)"></div>
                        <div class="swiper-slide cover" style="background-image:url(/gallery/img_4.jpg)"></div>
                        <div class="swiper-slide cover" style="background-image:url(/gallery/img_5.jpg)"></div>
                        <div class="swiper-slide cover" style="background-image:url(/gallery/img_6.jpg)"></div>
                        <div class="swiper-slide cover" style="background-image:url(/gallery/img_7.jpg)"></div>
                        <div class="swiper-slide cover" style="background-image:url(/gallery/img_8.jpg)"></div>
                        <div class="swiper-slide cover" style="background-image:url(/gallery/img_9.jpg)"></div>
                        <div class="swiper-slide cover" style="background-image:url(/gallery/img_10.jpg)"></div>
                    </div>
                </div>
            </div>
            <!-- .site-wrap -->
        </div>
    </div>
</div>
<!--gallery section-->

<div class="section" id="section5">
    <div class="location h-100 d-flex justify-content-between flex-wrap">
        <div class="location-map">
            <div class="overlay" onclick="style.pointerEvents='none'"></div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99630.76763688751!2d90.11024322019342!3d21.87486535046177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30aa7d2b1878d1dd%3A0xe362828bc24f22f7!2sMangrove%20Hotel%20%26%20Resort!5e0!3m2!1sen!2sbd!4v1584186115001!5m2!1sen!2sbd"
                width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""
                aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</div>
<!--map section-->

<div class="section" id="section6">
    <div class="login-warp d-flex flex-wrap justify-content-between">
        <div class="container-fluid h-100">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-content-img">
                            <img src="<?php echo e(asset('images/share-holder.png')); ?>" alt="">
                        </div>
                        <h3>New and existing<br> shareholders can login to:</h3>
                        <ul>
                            <li><i>&nbsp;</i> View & manage all your investments</li>
                            <li><i>&nbsp;</i> Manage your registered details</li>
                            <li><i>&nbsp;</i> Download statements</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-form">
                        <form class="form">
                              <div class="margin-wrap1">
                                <div class="group">
                                      <input class="user-icon group__input" placeholder="User ID" type="text" autocomplete="off">
                                  </div>
                              </div>
                            <div class="margin-wrap2">
                                  <div class="group">
                                    <input class="pass-icon group__input" placeholder="Password" type="password" autocomplete="off">
                                </div>
                            </div>
                          <button class="button" type="button">Login</button>
                          <a class="forgot-pass text-danger pt-3 d-inline-block" href="#">Forgot Password?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section pp-scrollable" id="section7">
    <footer class="footer d-flex flex-wrap justify-content-between h-100">
        <div class="w-100 foot-content h-100">
            <div class="footer-menu">
                <div class="footer-menu-text">
                    <ul>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/about">Find a Job</a></li>
                        <li><a href="/about">Publication</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-mid d-flex flex-wrap">
                <div class="footer-office">
                    <div class="footer-office-logo">
                        <a href="#"><img src="<?php echo e(asset('images/logo-w.png')); ?>" alt=""></a>
                    </div>
                    <div class="footer-office-cont d-flex flex-wrap justify-content-lg-between">
                        <div class="footer-office-left">
                            <h3>CORPORATE OFFICE</h3>
                            <address>HOUSE 4/A PLOT 4 3RD FLOOR <br>DHANMONDI TOWER ROAD 27
                            (OLD)<br>DHANMONDI DHAKA 1207</address>
                            <div class="footer-phn"><span class="color-gold"><i class="fa fa-phone"></i></span> +88 01988444555 </div>
                            <div class="footer-phn"><span class="color-gold"><i class="fa fa-phone"></i></span> +88 09678530000 </div>
                            <div class="footer-phn"><span class="color-gold"><i class="fa fa-envelope"></i></span> info@mangrove-hotel.com </div>
                        </div>
                        <div class="footer-office-right">
                            <h3>PROJECT ADDRESS</h3>
                            <address>Holding-50, Hossen Para, East Beribadh Road (Opposite ECO Park),Ward-09, Kuakata Pourosova, Kuakata.</address>
                        </div>
                    </div>
                </div>
                <div class="footer-text">
                    <div class="bg-faded mt-2">
                        <div class="mx-auto d-flex justify-content-center flex-wrap">
                            <img src="<?php echo e(asset('images/text.png')); ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="footer-leaf">
                    <a href=""><img src="<?php echo e(asset('images/leaf.png')); ?>" alt=""></a>
                    <h4>2025 COMPLETION</h4>
                </div>
            </div>
            <div class="footer-btm">
                <div class="copy">
                    <p>© Copyright 2020 MANGROVE-HOTEL</p>
                </div>
            </div>
        </div>
    </footer>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<script>
function setgallery(item) {
$(".tab-pane").removeClass("active");
    $('#' + item).addClass("active");
}
</script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mangrovehotel/dev.mangrove-hotel.com/resources/views/front/home.blade.php ENDPATH**/ ?>