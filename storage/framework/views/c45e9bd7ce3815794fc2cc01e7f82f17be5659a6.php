<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- CSRF Token -->
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

	<title><?php echo e(config('app.name', 'Mangrove')); ?></title>
	<link rel="icon" href="<?php echo e(asset('images/favicon.ico')); ?> ">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="user-scalable=no, width=device-width, target-densityDpi=device-dpi" />
	<!-- Styles -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('front/css/app.css')); ?>" />

	<?php echo $__env->yieldPushContent('css'); ?>
</head>
<body>
	<div id="app">
		<div class="main-menu d-flex justify-content-between flex-wrap align-items-center">
			<div class="mobile-menu w-100 justify-content-between align-items-center">
				<h3 class="invest-toggle"><span>Investment</span></h3>
				<a class="openclose" href="javascript:;">MENU <i></i></a>
			</div>
			<div class="white-logo" data-menuanchor="banner">
				<a href="#banner"><img src="../images/logo-w.png" alt=""></a>
			</div>

			<ul id="menu">
				<li class="d-lg-none" data-menuanchor="Overview">
					<a class="link-1" href="#banner">Home</a>
					<span></span>
				</li>
				<li data-menuanchor="Overview">
					<a class="link-1" href="#Overview">Overview</a>
					<span></span>
				</li>
				<li data-menuanchor="Modernliving">
					<a class="link-2" href="#Modernliving">Modernliving</a>
					<span></span>
				</li>
				<li data-menuanchor="Gallery">
					<a class="link-3" href="#Gallery">Gallery</a>
					<span></span>
				</li>
				<li data-menuanchor="Map">
					<a class="link-4" href="#Map">Map</a>
					<span></span>
				</li>
				<li data-menuanchor="Login">
					<a class="link-5" href="#Login">Login</a>
					<span></span>
				</li>
				<li data-menuanchor="contact_us">
					<a class="link-6" href="#contact_us">Contact us</a>
					<span></span>
				</li>
			</ul>
		</div> <!-- header menu-->

		<header class="header">
			<div class="header-icon-1">
				<img src="images/share.png">
				<div class="social-link">
					<a class="facebook" href="https://www.facebook.com/MangroveHRL"><i class="fab fa-facebook-square"></i></a>
					<a class="youtube" href="https://www.youtube.com/channel/UCgfmo-nssj3VmYsSSJWqhIA?view_as=subscriber"><i class="fab fa-youtube"></i></a>
					<a class="instagram" href="https://www.instagram.com/mangroveHRL"><i class="fab fa-instagram-square"></i></a>
					<a class="twitter" href="https://twitter.com/MangroveHRL"><i class="fab fa-twitter"></i></a>
					<a class="linkedin" href="https://www.linkedin.com/company/mangrove-hotel-and-resort-ltd/"><i class="fab fa-linkedin"></i></a>
				</div>
			</div>



			<div class="invesment">
				<a href="<?php echo e(route('investment')); ?>"><span>investment</span></a>
			</div>

			<!-- <a class="header-icon-2" href="#"></a> -->
			<div class="header-icon-1 header-icon-2">
				<img src="images/phone.png">
				<div class="social-link">
					<a href="#"><i>+88 01988444555</i></a>
				</div>
			</div>

		</header>

		<div id="pagepiling">
			<?php echo $__env->yieldContent('content'); ?>
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

	<script src="<?php echo e(asset('front/js/app.js')); ?> "></script>

	<script>
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
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

		// 	// $('.swiper-slide-active .btn-toggle-expand').on('click', function() {
		// 	$('body').on('click', '.swiper-slide-active .btn-toggle-expand', function() {

		// 		if ( $(this).hasClass('active') ) {
		// 			// alert('if');

		// 			$('.swiper-slide-active .img-info-content').removeClass('active');

		// 			$(this).closest('.img-info').animate({
		// 					height: 60,
		// 					width: 60
		// 				}, 400);

		// 			// setTimeout(function() {

		// 				$(this).removeClass('active');

		// 			// });

		// 			// setTimeout(function() {





		// 			// }, 1500);



		// 		} else {

		// 			// alert('else');

		// 			$(this).addClass('active');

		// 			$(this).closest('.img-info').addClass('active')
		// 			$(this).closest('.img-info').animate({
		// 				height: 200,
		// 				width: 400
		// 			}, 400);

		// 			setTimeout(function() {
		// 				$('.swiper-slide-active .img-info-content').addClass('active');
		// 			}, 500);
		// 		}




		// 	});

		// };
		// toggleExpand();

		// var swiperEvents = function() {

		// 	var galleryThumbs = new Swiper('.gallery-thumbs', {
		// 		slidesPerView: 10,
		// 	freeMode: true,
		// 	watchSlidesVisibility: true,
		// 	watchSlidesProgress: true,
		// 	spaceBetween: 10,
		// 	breakpoints: {
		// 	1024: {
		// 		slidesPerView: 10,
		// 	},
		// 	768: {
		// 		slidesPerView: 7,
		// 	},
		// 	640: {
		// 		slidesPerView: 4,
		// 	},
		// 	320: {
		// 		slidesPerView: 3,
		// 	}
		// 	}
		// });
		// var galleryTop = new Swiper('.gallery-top', {
		// 	autoplay: true,
		// 	effect: 'fade',
		// 	navigation: {
		// 	nextEl: '.swiper-button-next',
		// 	prevEl: '.swiper-button-prev',
		// 	},
		// 	thumbs: {
		// 	swiper: galleryThumbs
		// 	}
		// });

		// };

		// if ( $('.gallery-thumbs').length > 0 ) {
		// 	swiperEvents();
		// }

		// $('.scrollbar-inner').scrollbar();


	</script>

	

	<?php echo $__env->yieldPushContent('script'); ?>
    </body>
</html>
<?php /**PATH E:\xampp\htdocs\mangrove-hotel\resources\views/front/layouts/app.blade.php ENDPATH**/ ?>