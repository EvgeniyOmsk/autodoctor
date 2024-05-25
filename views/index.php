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
					<div class="carousel__element owl-carousel" data-options='{"items":1,"loop":true,"dots":false,"nav":false,"margin":0, "autoplay": false, "autoplayTimeout": 5000}'>

                        <div class="slider__item" style="background-image: url('/assets/img/slider1.jpg');">
                            <div class="md-tb">
                                <div class="md-tb__cell">
                                    <div class="slider__content">
                                        <div class="container">
                                            <h1>Djuna s.r.o</h1> <br>
                                            <h2><?= $l['body_repair_in_Karlovy_Vary'] ?></h2>
                                            <p><?= $l['Our_Autodocs_will_answer_your_questions_and_carry'] ?></p>
                                            <h2><?= $l['car_painting_in_Karlovy_Vary'] ?></h2>
                                            <p><?= $l['the_specialists_of_the_Avtodoktor_company_will_professionally'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider__item" style="background-image: url('/assets/img/slider2.jpg');">
							<div class="md-tb">
								<div class="md-tb__cell">
									<div class="slider__content">
										<div class="container">
                                            <h1>Djuna s.r.o</h1> <br>
                                            <h2><?= $l['body_repair_in_Karlovy_Vary'] ?></h2>
                                            <p><?= $l['Our_Autodocs_will_answer_your_questions_and_carry'] ?></p>
                                            <h2><?= $l['car_painting_in_Karlovy_Vary'] ?></h2>
                                            <p><?= $l['the_specialists_of_the_Avtodoktor_company_will_professionally'] ?></p>
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
                <section class="md-section js-consult-form" style="background-color:#f7f7f7;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 offset-0 offset-sm-0 offset-md-0 offset-lg-3 ">

                                <!-- title-01 -->
                                <div class="title-01">
                                    <h2 class="title-01__title"><?= $l['How_to_contact'] ?></h2>
                                    <div><?= $l['High_quality_painting_and_car'] ?></div>
                                </div><!-- End / title-01 -->

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 ">

                                <!-- iconbox -->
                                <div class="iconbox iconbox__style-04">
                                    <div class="iconbox__icon"><i class="ti-email"></i></div>
                                    <div>
                                        <h2 class="iconbox__title"><a href="#">Email</a></h2>
                                        <div class="iconbox__description"><a href="mailto:jurij.vanek@gmail.com">jurij.vanek@gmail.com</a></div>
                                    </div>
                                </div><!-- End / iconbox -->

                            </div>
                            <div class="col-lg-4 ">

                                <!-- iconbox -->
                                <div class="iconbox iconbox__style-04">
                                    <div class="iconbox__icon"><i class="ti-location-pin"></i></div>
                                    <div>
                                        <h2 class="iconbox__title"><a href="#"><?= $l['Address'] ?></a></h2>
                                        <div class="iconbox__description">
                                            <span itemprop="addressLocality"><?= $l['Czech'] ?></span>,
                                            <span itemprop="streetAddress"><?= $l['Palenarne'] ?></span>
                                            <br><?= $l['Karlovy_Vary'] ?>
                                            <br>I.Č: 263 750 87
                                            <br>DIČ: 263 750 87
                                        </div>
                                    </div>
                                </div><!-- End / iconbox -->

                            </div>
                            <div class="col-lg-4 ">

                                <!-- iconbox -->
                                <div class="iconbox iconbox__style-04">
                                    <div class="iconbox__icon"><i class="ti-mobile"></i></div>
                                    <div>
                                        <h2 class="iconbox__title"><a href="#"><?= $l['Phone'] ?></a></h2>
                                        <div class="iconbox__description">
                                            <span itemprop="telephone">CZ: +420777119222</span>
                                            <br>
                                            <span itemprop="telephone">RU: +79114771222</span>
                                            <br>
                                            <a href="https://wa.me/420777119222"><?= $l['Write_to'] ?> WhatsApp CZ</a><br>
                                            <a href="https://wa.me/79114771222"><?= $l['Write_to'] ?> WhatsApp RU</a><br>
                                            <a href="https://t.me/+420777119222 "><?= $l['Write_to'] ?> Telegram</a><br>
                                            <a href="https://t.me/europe_transfer">Telegram <?= $l['Channel'] ?></a><br>
                                        </div>
                                    </div>
                                </div><!-- End / iconbox -->

                            </div>
                        </div>

                        <?php include_once('__form_question.php')?>

                    </div>
                </section>
				<!-- End / Section -->
				
				<!-- Contact us-->

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
