<!DOCTYPE html>
<html>
	<head>
		<title><?= $l['How_to_contact_us'] ?></title>
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
		<!-- App & fonts-->
		<link rel="stylesheet" type="text/css" href="/assets/css/fonts.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/main.css"><!--[if lt IE 9]>
		<script src="/assets/js/html5shiv.js"></script>
		<![endif]-->
	</head>
	
	<body>
		<div class="page-wrap">
            <?php $page = 'contact' ?>
            <?php include_once('__menu_two.php')?>
			
			<!-- Content-->
			<div class="md-content">
				
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
										<div class="iconbox__description"><a href="mailto:jane-doe@xyz.edu">autodoktor.kv@gmail.com</a></div>
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
											<br><?= $l['pn-pt'] ?>
                      <br><?= $l['sb-vs'] ?>
                      <br><?= $l['IC26375087'] ?>
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
                      <span itemprop="telephone">+420774864202</span>
                      <br>WhatsApp
                      <br>Viber
                    </div>
									</div>
								</div><!-- End / iconbox -->
								
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
		<script type="text/javascript" src="/assets/vendors/jquery.waypoints/jquery.waypoints.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/menu/menu.min.js"></script>
		<!-- App-->
		<script type="text/javascript" src="/assets/js/main.js"></script>
    <?php include_once('__scripts.php')?>
	</body>
</html>