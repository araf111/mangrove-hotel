<?php $__env->startSection('content'); ?>
<div class="section" id="section1">
    <div class="banner">
        <video playsinline="" muted="" onplaying="this.controls=false" autoplay loop>
            <source src="<?php echo e($generalSectionList['video1']['video']!=''?asset( 'uploads/video/'.$generalSectionList['video1']['video']):''); ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
            <source src="<?php echo e($generalSectionList['video2']['video']!=''?asset( 'uploads/video/'.$generalSectionList['video2']['video']):''); ?>" type='video/webm; codecs="vp8, vorbis"'>
            <source src="<?php echo e($generalSectionList['video3']['video']!=''?asset( 'uploads/video/'.$generalSectionList['video3']['video']):''); ?>" type='video/ogg; codecs="theora, vorbis"'>
        </video>

        <div class="banner-form">
            <h2>TOMORROW'S CALL</h2>
            <ul>
                <?php $__currentLoopData = $tomorrowsCallSection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($item->content); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <img class="img-fluid" src="<?php echo e($overviewSectionList['coverStory']['image1']['image']!=''?asset('uploads/img/'.$overviewSectionList['coverStory']['image1']['image']):''); ?>">
        </div>
        <div class="overview box-1">
            <img class="img-fluid" src="<?php echo e($overviewSectionList['Top left banner']['image1']['image']!=''?asset('uploads/img/'.$overviewSectionList['Top left banner']['image1']['image']):''); ?>">
        </div>
        <div class="overview position-relative box-2">
            <img class="img-fluid" src="<?php echo e($overviewSectionList['Top right banner']['image1']['image']!=''?asset('uploads/img/'.$overviewSectionList['Top right banner']['image1']['image']):''); ?>">
            <div class="overview-text">
                <h3><?php echo $overviewSectionList['Top right banner']['image1']['description']; ?></h3>
            </div>
        </div>
        <div class="overview box-3">
            <img class="img-fluid" src="<?php echo e($overviewSectionList['Bottom left banner']['image1']['image']!=''?asset('uploads/img/'.$overviewSectionList['Bottom left banner']['image1']['image']):''); ?>">
        </div>
        <div class="overview box-4">
            <a target="_blank" href="<?php echo $overviewSectionList['Bottom right banner']['image1']['description']; ?>"><img class="img-fluid" src="<?php echo e($overviewSectionList['Bottom right banner']['image1']['image']!=''?asset('uploads/img/'.$overviewSectionList['Bottom right banner']['image1']['image']):''); ?>"></a>
        </div>
    </div>
</div>
<!--overview section-->

<div class="section" id="section3">
    <div class="d-flex flex-wrap justify-content-between">
        <div class="design-left">
            <img src="<?php echo e($modernLivingList['leftbanner']['image1']['image']!=''?asset('uploads/img/'.$modernLivingList['leftbanner']['image1']['image']):''); ?>" alt="">
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
                    <img class="img-fluid" src="<?php echo e($modernLivingList['roombanner']['image1']['image']!=''?asset('uploads/img/'.$modernLivingList['roombanner']['image1']['image']):''); ?>" alt="">
                </div>
                <div id="entertainment" class="tab-pane">
                    <img class="img-fluid" src="<?php echo e($modernLivingList['entertainmentbanner']['image1']['image']!=''?asset('uploads/img/'.$modernLivingList['entertainmentbanner']['image1']['image']):''); ?>" alt="">
                </div>
                <div id="gym" class="tab-pane">
                    <img class="img-fluid" src="<?php echo e($modernLivingList['gymbanner']['image1']['image']!=''?asset('uploads/img/'.$modernLivingList['gymbanner']['image1']['image']):''); ?>" alt="">
                </div>
                <div id="dine" class="tab-pane">
                    <img class="img-fluid" src="<?php echo e($modernLivingList['dinebanner']['image1']['image']!=''?asset('uploads/img/'.$modernLivingList['dinebanner']['image1']['image']):''); ?>" alt="">
                </div>
                <div id="pool" class="tab-pane">
                    <img class="img-fluid" src="<?php echo e($modernLivingList['poolbanner']['image1']['image']!=''?asset('uploads/img/'.$modernLivingList['poolbanner']['image1']['image']):''); ?>" alt="">
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
                    <h1><?php echo isset($gallerySectionList['createdBy']['text']['description'])?$gallerySectionList['createdBy']['text']['description']:''; ?></h1>
                    <div class="row">
                        <div class="col-7">
                            <img class=" pt-3 img-fluid" src="<?php echo e(isset($gallerySectionList['studio']['logo']['image'])?$gallerySectionList['studio']['logo']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['studio']['logo']['image']):'':''); ?>" alt="gallery logo">
                        </div>
                        <div class="col-5">
                            <img class="img-fluid" src="<?php echo e(isset($gallerySectionList['3D']['logo']['image'])?$gallerySectionList['3D']['logo']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['3D']['logo']['image']):'':''); ?>" alt="gallery logo">
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <div class="gallery-right">
            <div class="site-wrap">
                <div class="swiper-container gallery-top">
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $galleryList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide cover" style="background-image: url(<?php echo e(asset('uploads/img/'.$item->content)); ?>);"></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $galleryList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide cover" style="background-image: url(<?php echo e(asset('uploads/img/'.$item->content)); ?>);"></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                width="100%" height="100%" frameborder="0" style="border:0;pointer-events: none;" allowfullscreen=""
                aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</div>
<!--map section-->

<div class="section" id="section6">
    <div class="login-warp d-flex flex-wrap justify-content-between" style="background:url(<?php echo e($loginSectionList['rightsidebanner']['image1']['image']!=''?asset('uploads/img/'.$loginSectionList['rightsidebanner']['image1']['image']):''); ?>) no-repeat 50%;">
        <div class="container-fluid h-100">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-content-img">
                            <img src="<?php echo e($loginSectionList['shareHolderbanner']['image1']['image']!=''?asset('uploads/img/'.$loginSectionList['shareHolderbanner']['image1']['image']):''); ?>" alt="">
                        </div>
                        <h3><?php echo $loginSectionList['loginLabel']['label']['content']; ?></h3>
                        <?php echo $loginSectionList['loginFeatues']['features']['content']; ?>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-form">
                        <form class="form" method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
                              <div class="margin-wrap1">
                                <div class="group">
                                      <input class="user-icon group__input <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Email" name="email" id="email" value="<?php echo e(old('email')); ?>" type="text" autocomplete="off">

                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                  </div>
                              </div>
                            <div class="margin-wrap2">
                                  <div class="group">
                                    <input class="pass-icon group__input  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Password" type="password"  name="password" autocomplete="off">
                                      <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                      <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                  </div>
                            </div>
                          <button class="button" type="button">Login</button>

                            <?php if(Route::has('password.request')): ?>
                                <a class="forgot-pass text-danger pt-3 d-inline-block" href="<?php echo e(route('password.request')); ?>">
                                    <?php echo e(__('Forgot  Password?')); ?>

                                </a>
                            <?php endif; ?>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section pp-scrollable" id="section7">
    <footer class="footer d-flex flex-wrap justify-content-between h-100">
        <div class="w-100 foot-content h-100" style="background: url(<?php echo e(isset($footerSectionList['footerBackGround']['image1']['image'])?$footerSectionList['footerBackGround']['image1']['image']!=''?asset('uploads/img/'.$footerSectionList['footerBackGround']['image1']['image']):'':''); ?>) no-repeat 100%; background-size: 70%">
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
                            <address><?php echo isset($footerSectionList['corporateAddress']['address']['content'])?$footerSectionList['corporateAddress']['address']['content']:''; ?></address>
                            <div class="footer-phn"><span class="color-gold"><i class="fa fa-phone"></i></span> <?php echo e(isset($footerSectionList['corporateAddress']['corporateAddress_phone1']['content'])?$footerSectionList['corporateAddress']['corporateAddress_phone1']['content']:''); ?> </div>
                            <div class="footer-phn"><span class="color-gold"><i class="fa fa-phone"></i></span> <?php echo e(isset($footerSectionList['corporateAddress']['corporateAddress_phone2']['content'])?$footerSectionList['corporateAddress']['corporateAddress_phone2']['content']:''); ?> </div>
                            <div class="footer-phn"><span class="color-gold"><i class="fa fa-envelope"></i></span><?php echo e(isset($footerSectionList['corporateAddress']['corporateAddress_email']['content'])?$footerSectionList['corporateAddress']['corporateAddress_email']['content']:''); ?> </div>
                        </div>
                        <div class="footer-office-right">
                            <h3>PROJECT ADDRESS</h3>
                            <address><?php echo isset($footerSectionList['projectAddress']['address']['content'])?$footerSectionList['projectAddress']['address']['content']:''; ?></address>
                        </div>
                    </div>
                </div>
                <div class="footer-text">
                    <div class="bg-faded mt-2">
                        <div class="mx-auto d-flex justify-content-center flex-wrap">
                            <img src="<?php echo e(isset($footerSectionList['quote']['image1']['image'])?$footerSectionList['quote']['image1']['image']!=''?asset('uploads/img/'.$footerSectionList['quote']['image1']['image']):'':''); ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="footer-leaf">
                    <a href=""><img src="<?php echo e(isset($footerSectionList['completeProject']['image1']['image'])?$footerSectionList['completeProject']['image1']['image']!=''?asset('uploads/img/'.$footerSectionList['completeProject']['image1']['image']):'':''); ?>" alt=""></a>
                    <h4><?php echo e(isset($footerSectionList['projectCompletionText']['address']['content'])?$footerSectionList['projectCompletionText']['address']['content']:''); ?></h4>
                </div>
            </div>
            <div class="footer-btm">
                <div class="copy">
                    <p><?php echo e(isset($footerSectionList['copyRightText']['address']['content'])?$footerSectionList['copyRightText']['address']['content']:''); ?></p>
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


<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/dev.mangrove-hotel/resources/views/front/home.blade.php ENDPATH**/ ?>