<?php $__env->startSection('content'); ?>

<div class="about-wrap">
    <section class="about-banner">
        <img class="img-fluid" id="banner" src="<?php echo e(isset($gallerySectionList['banner']['image1']['image'])?$gallerySectionList['banner']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['banner']['image1']['image']):'':asset( 'backend/img/default/no-image.png')); ?>" alt="">
        <div class="about-banner-in">
            <div class="banner-text">
                <img class="img-fluid" id="banner-text" src="<?php echo e(isset($gallerySectionList['banner-text']['image1']['image'])?$gallerySectionList['banner-text']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['banner-text']['image1']['image']):'':asset( 'backend/img/default/no-image.png')); ?>" alt="">
            </div>
            <div class="banner-shape">
                <img src="<?php echo e(asset('images/about-us/banner-shape.png')); ?>" alt="">
            </div>
        </div>
    </section>

    <section class="about-banner-btm position-relative">
        <img class="img-fluid" id="banner-bottom" src="<?php echo e(isset($gallerySectionList['banner-bottom']['image1']['image'])?$gallerySectionList['banner-bottom']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['banner-bottom']['image1']['image']):'':asset( 'backend/img/default/no-image.png')); ?>" alt="">
        <div class="about-banner-btm-in d-flex flex-column">
            <div class="banner-btm-text-1 text-center">
                <img class="img-fluid" id="banner-bottom-text-1" src="<?php echo e(isset($gallerySectionList['banner-bottom-text-1']['image1']['image'])?$gallerySectionList['banner-bottom-text-1']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['banner-bottom-text-1']['image1']['image']):'':asset( 'backend/img/default/no-image.png')); ?>" alt="">
            </div>
            <div class="banner-btm-text-2 text-center">
                <img class="img-fluid" id="banner-bottom-text-2" src="<?php echo e(isset($gallerySectionList['banner-bottom-text-2']['image1']['image'])?$gallerySectionList['banner-bottom-text-2']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['banner-bottom-text-2']['image1']['image']):'':asset( 'backend/img/default/no-image.png')); ?>" alt="">
            </div>
        </div>
    </section>

    <section class="bullet-wrap text-center">
        <img class="img-fluid" id="bullet1" src="<?php echo e(isset($gallerySectionList['bullet1']['image1']['image'])?$gallerySectionList['bullet1']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['bullet1']['image1']['image']):'':asset( 'backend/img/default/no-image.png')); ?>" alt="">
        <img class="img-fluid" id="bullet1" src="<?php echo e(isset($gallerySectionList['bullet2']['image1']['image'])?$gallerySectionList['bullet2']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['bullet2']['image1']['image']):'':asset( 'backend/img/default/no-image.png')); ?>" alt="">
        <img class="img-fluid" id="bullet1" src="<?php echo e(isset($gallerySectionList['bullet3']['image1']['image'])?$gallerySectionList['bullet3']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['bullet3']['image1']['image']):'':asset( 'backend/img/default/no-image.png')); ?>" alt="">
        <img class="img-fluid" id="bullet1" src="<?php echo e(isset($gallerySectionList['bullet4']['image1']['image'])?$gallerySectionList['bullet4']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['bullet4']['image1']['image']):'':asset( 'backend/img/default/no-image.png')); ?>" alt="">
        <img class="img-fluid" id="bullet1" src="<?php echo e(isset($gallerySectionList['bullet5']['image1']['image'])?$gallerySectionList['bullet5']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['bullet5']['image1']['image']):'':asset( 'backend/img/default/no-image.png')); ?>" alt="">

    </section>

    <section class="bullet-btm d-flex flex-wrap">
        <div class="bullet-btm-left">
            <div class="bullet-btm-top">
                <img class="img-fluid" id="bullet-bottom-left-top" src="<?php echo e(isset($gallerySectionList['bullet-bottom-left-top']['image1']['image'])?$gallerySectionList['bullet-bottom-left-top']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['bullet-bottom-left-top']['image1']['image']):'':asset( 'backend/img/default/no-image.png')); ?>" alt="">
            </div>
            <div class="bullet-btm-btm">
                <img class="img-fluid" id="bullet-bottom-left-bottom" src="<?php echo e(isset($gallerySectionList['bullet-bottom-left-bottom']['image1']['image'])?$gallerySectionList['bullet-bottom-left-bottom']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['bullet-bottom-left-bottom']['image1']['image']):'':asset( 'backend/img/default/no-image.png')); ?>" alt="">
            </div>
        </div>

        <div class="bullet-btm-right">
            <img class="img-fluid" id="bullet-bottom-right" src="<?php echo e(isset($gallerySectionList['bullet-bottom-right']['image1']['image'])?$gallerySectionList['bullet-bottom-right']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['bullet-bottom-right']['image1']['image']):'':asset( 'backend/img/default/no-image.png')); ?>" alt="">
        </div>
    </section>

    <section class="team-wrap">
        <div class="management cahirman d-flex flex-wrap">
            <div class="image-box">
                <img class="img-fluid" id="management1" src="<?php echo e(isset($gallerySectionList['management1']['image1']['image'])?$gallerySectionList['management1']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['management1']['image1']['image']):'':asset( 'backend/img/default/no-image.png')); ?>" alt="">
            </div>
            <div class="image-desc d-flex align-items-center">
                <?php echo e(isset($gallerySectionList['management1']['image1']['description'])?$gallerySectionList['management1']['image1']['description']:''); ?>

            </div>
        </div>

        <div class="teamIn d-flex flex-wrap">
            <div class="team-box">
                <div class="management d-flex flex-wrap">
                    <div class="image-box">
                        <img class="img-fluid" id="management2" src="<?php echo e(isset($gallerySectionList['management2']['image1']['image'])?$gallerySectionList['management2']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['management2']['image1']['image']):'':asset( 'backend/img/default/no-image.png')); ?>" alt="">
                    </div>
                    <div class="image-desc d-flex flex-wrap align-items-center">
                        <div>
                            <div class="signature w-100">
                                <img class="img-fluid" id="management2-signature" src="<?php echo e(isset($gallerySectionList['management2-signature']['image1']['image'])?$gallerySectionList['management2-signature']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['management2-signature']['image1']['image']):'':asset( 'backend/img/default/no-image.png')); ?>" alt="">
                                <h4><?php echo e(isset($gallerySectionList['management2']['image1']['title'])?$gallerySectionList['management2']['image1']['title']:''); ?></h4>
                                <span><?php echo e(isset($gallerySectionList['management2']['image1']['designation'])?$gallerySectionList['management2']['image1']['designation']:''); ?></span>
                            </div>
                            <?php echo e(isset($gallerySectionList['management2']['image1']['description'])?$gallerySectionList['management2']['image1']['description']:''); ?>


                        </div>

                    </div>
                </div>
            </div>
            <div class="team-box">
                <div class="management d-flex flex-wrap">
                    <div class="image-box">
                        <img class="img-fluid" id="management3" src="<?php echo e(isset($gallerySectionList['management3']['image1']['image'])?$gallerySectionList['management3']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['management3']['image1']['image']):'':asset( 'backend/img/default/no-image.png')); ?>" alt="">
                    </div>
                    <div class="image-desc d-flex flex-wrap align-items-center">
                        <div>
                            <div class="signature w-100">
                                <img class="img-fluid" id="management3-signature" src="<?php echo e(isset($gallerySectionList['management3-signature']['image1']['image'])?$gallerySectionList['management3-signature']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['management3-signature']['image1']['image']):'':asset( 'backend/img/default/no-image.png')); ?>" alt="">
                                <h4><?php echo e(isset($gallerySectionList['management3']['image1']['title'])?$gallerySectionList['management3']['image1']['title']:''); ?></h4>
                                <span><?php echo e(isset($gallerySectionList['management3']['image1']['designation'])?$gallerySectionList['management3']['image1']['designation']:''); ?></span>
                            </div>
                            <?php echo e(isset($gallerySectionList['management3']['image1']['description'])?$gallerySectionList['management3']['image1']['description']:''); ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="teamIn d-flex flex-wrap">
            <div class="team-box right-arrow">
                <div class="management d-flex flex-wrap">
                    <div class="image-desc d-flex flex-wrap align-items-center">
                        <div>
                            <div class="signature w-100">
                                <img class="img-fluid" id="management3-signature" src="<?php echo e(isset($gallerySectionList['management4-signature']['image1']['image'])?$gallerySectionList['management4-signature']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['management4-signature']['image1']['image']):'':asset( 'backend/img/default/no-image.png')); ?>" alt="">
                                <h4><?php echo e(isset($gallerySectionList['management4']['image1']['title'])?$gallerySectionList['management4']['image1']['title']:''); ?></h4>
                                <span><?php echo e(isset($gallerySectionList['management4']['image1']['designation'])?$gallerySectionList['management4']['image1']['designation']:''); ?></span>
                            </div>
                            <?php echo e(isset($gallerySectionList['management4']['image1']['description'])?$gallerySectionList['management4']['image1']['description']:''); ?>


                        </div>
                    </div>
                    <div class="image-box">
                        <img class="img-fluid" id="management4" src="<?php echo e(isset($gallerySectionList['management4']['image1']['image'])?$gallerySectionList['management4']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['management4']['image1']['image']):'':asset( 'backend/img/default/no-image.png')); ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="team-box right-arrow">
                <div class="management d-flex flex-wrap">
                    <div class="image-desc d-flex flex-wrap align-items-center">
                        <div>
                            <div class="signature w-100">
                                <img class="img-fluid" id="management3-signature" src="<?php echo e(isset($gallerySectionList['management5-signature']['image1']['image'])?$gallerySectionList['management5-signature']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['management5-signature']['image1']['image']):'':asset( 'backend/img/default/no-image.png')); ?>" alt="">
                                <h4><?php echo e(isset($gallerySectionList['management5']['image1']['title'])?$gallerySectionList['management5']['image1']['title']:''); ?></h4>
                                <span><?php echo e(isset($gallerySectionList['management5']['image1']['designation'])?$gallerySectionList['management5']['image1']['designation']:''); ?></span>
                            </div>
                            <?php echo e(isset($gallerySectionList['management5']['image1']['description'])?$gallerySectionList['management5']['image1']['description']:''); ?>


                        </div>
                    </div>
                    <div class="image-box">
                        <img class="img-fluid" id="management3" src="<?php echo e(isset($gallerySectionList['management5']['image1']['image'])?$gallerySectionList['management5']['image1']['image']!=''?asset( 'uploads/img/'.$gallerySectionList['management5']['image1']['image']):'':asset( 'backend/img/default/no-image.png')); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/sites/dev.mangrove-hotel/resources/views/front/about.blade.php ENDPATH**/ ?>