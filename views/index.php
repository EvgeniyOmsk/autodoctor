<!DOCTYPE html>
<html>
	<head>
		<title><?= $l['auto_paint_and_body_repair'] ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<!-- Fonts-->
		<link rel="stylesheet" type="text/css" href="/assets/fonts/fontawesome/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/assets/fonts/themify-icons/themify-icons.css">
		<!-- Vendors-->
		<link rel="stylesheet" type="text/css" href="/assets/vendors/bootstrap4/bootstrap-grid.min.css">
		<link rel="stylesheet" type="text/css" href="/assets/vendors/magnific-popup/magnific-popup.min.css">
		<link rel="stylesheet" type="text/css" href="/assets/vendors/owl.carousel/owl.carousel.css">
		<!-- <link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap4/bootstrap-grid.min.css"> -->
		<!-- <link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap4/bootstrap-grid.min.css"> -->
		<!-- App & fonts-->
		<link rel="stylesheet" type="text/css" href="/assets/css/fonts.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/main.css"><!--[if lt IE 9]>
		<script src="/assets/js/html5shiv.js"></script>
		<![endif]-->
	</head>
	
	<body>
		<div class="page-wrap">
			<?php require('__menu.php')?>
			
			<!-- Content-->
			<div class="md-content">

				<!-- slider -->
				<div class="slider">
					
					<!-- carousel__element owl-carousel -->
					<div class="carousel__element owl-carousel" data-options='{"items":1,"loop":true,"dots":false,"nav":false,"margin":0, "autoplay": true, "autoplayTimeout": 5000}'>
						<div class="slider__item" style="background-image: url('/assets/img/slider2.jpg');">
							<div class="md-tb">
								<div class="md-tb__cell">
									<div class="slider__content">
										<div class="container">
											<h2><?= $l['car_painting_in_Karlovy_Vary'] ?></h2>
											<p><?= $l['the_specialists_of_the_Avtodoktor_company_will_professionally'] ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="slider__item" style="background-image: url('/assets/img/slider1.jpg');">
							<div class="md-tb">
								<div class="md-tb__cell">
									<div class="slider__content">
										<div class="container">
											<h2><?= $l['body_repair_in_Karlovy_Vary'] ?></h2>
											<p><?= $l['Our_Autodocs_will_answer_your_questions_and_carry'] ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- End / carousel__element owl-carousel -->
					
				</div><!-- End / slider -->
				
				<!-- Service-->
				
				<!-- Section -->
				<section class="md-section md-section-service" style="background-color:#f7f7f7;padding:0;">
					<div class="container">
						<div class="textbox-group">
							<div class="row">
                                <div class="col-md-2 col-lg-2 ">

                                </div>
								<div class="col-md-4 col-lg-4 ">

									<div class="textbox">
										<div class="textbox__image"><img src="/assets/img/services/4.jpg" alt=""/></div>
										<div class="textbox__body">
											<h2 class="textbox__title"><span><?= $l['Auto_painting'] ?></span></h2>
											<div class="textbox__description"><?= $l['Selection_services_and_professional_painting'] ?></div>
										</div>
									</div>
									
								</div>
								<div class="col-md-4 col-lg-4 ">

									<div class="textbox">
										<div class="textbox__image"><img src="/assets/img/services/5.jpg" alt=""/></div>
										<div class="textbox__body">
											<h2 class="textbox__title"><span><?= $l['Body_repair'] ?></span></h2>
											<div class="textbox__description"><?= $l['Qualified_specialists_as_soon_as_possible_will_completely'] ?></div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End / Section -->
				

				
				<!-- About-->
				
				<!-- Section -->
				<section class="md-section">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 ">
								
								<!-- title-01 -->
								<div class="title-01 title-01__style-03 md-text-left">
                  <br><br><br>
									<h2 class="title-01__title"><?= $l['Our_priority_is_speed_quality_and_customer'] ?></h2>
								</div><!-- End / title-01 -->

							</div>
							<div class="col-lg-6 ">
								<div class="js-consult-slider">
									
									<!-- carousel__element owl-carousel -->
									<div class="carousel__element owl-carousel" data-options='{"items":1,"loop":true,"dots":false,"nav":false,"margin":30,"responsive":{"0":{"items":2},"576":{"items":3},"992":{"items":1}}}'>
										<div class="image-full"><img src="/assets/img/image-01.jpg" alt=""></div>
										<div class="image-full"><img src="/assets/img/image-02.jpg" alt=""></div>
										<div class="image-full"><img src="/assets/img/image-03.jpg" alt=""></div>
									</div><!-- End / carousel__element owl-carousel -->
									
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End / Section -->
				
				<!-- Contact us-->
				
				<!-- Section -->
				<section class="md-section md-skin-dark js-consult-form" style="background-image:url(&quot;/assets/img/backgrounds/1.jpg&quot;);">
					<div class="md-overlay"></div>
					<div class="container">
						<div class="row">
							<div class="col-lg-8 offset-0 offset-sm-0 offset-md-0 offset-lg-2 ">
								
								<!-- title-01 -->
								<div class="title-01 title-01__style-02">
									<h2 class="title-01__title"><?= $l['Contact_us'] ?></h2>
									<div><?= $l['By_phone_whatsapp_viber_or_send'] ?></div>
								</div><!-- End / title-01 -->
								
								<div class="consult-phone"><span itemprop="telephone">(+420) 774 864 202</span></div>
							</div>
						</div>

              <?php include_once('__form_question.php')?>
						
					</div>
				</section>
				<!-- End / Section -->
				

			</div>
			<!-- End / Content-->
			
			<!-- footer -->
			<footer class="footer">
				<?php include_once('__footer.php')?>
			</footer><!-- End / footer -->
			
		</div>
		<!-- Vendors-->
		<script type="text/javascript" src="/assets/vendors/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/imagesloaded/imagesloaded.pkgd.js"></script>
		<script type="text/javascript" src="/assets/vendors/isotope-layout/isotope.pkgd.js"></script>
		<script type="text/javascript" src="/assets/vendors/jquery.countdown/jquery.countdown.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/jquery.countTo/jquery.countTo.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/jquery.countUp/jquery.countup.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/jquery.matchHeight/jquery.matchHeight.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/jquery.mb.ytplayer/jquery.mb.YTPlayer.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/masonry-layout/masonry.pkgd.js"></script>
		<script type="text/javascript" src="/assets/vendors/owl.carousel/owl.carousel.js"></script>
		<script type="text/javascript" src="/assets/vendors/menu/menu.min.js"></script>
		<!-- App-->
		<script type="text/javascript" src="/assets/js/main.js"></script>
    <?php include_once('__scripts.php')?>
	</body>
</html>
