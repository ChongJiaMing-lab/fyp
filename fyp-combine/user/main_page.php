<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="">

<head>

	<!-- BULMA -->
	<link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/bulma.css" rel="stylesheet"
		type="text/css" />
	<link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/bulma-extensions/bulma-checkradio.min.css"
		rel="stylesheet" type="text/css" />


	<!-- MAIN STYLESHEET -->
	<link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/aio.css?ver=1713734373" rel="stylesheet"
		type="text/css" />

	<!-- CAROUSEL -->
	<link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/carousel/slick.css" rel="stylesheet"
		type="text/css" />
	<link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/carousel/slick-theme.css" rel="stylesheet"
		type="text/css" />

	<!-- FONT AWESOME -->
	<link defer rel="stylesheet"
		href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/fontawesome-5.6.3/css/all.min.css">

	<!-- MATERIAL DESIGN ICON -->
	<link defer rel="stylesheet"
		href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/materialdesignicons-3.3.92/materialdesignicons.min.css">

	<!-- STAATLICHES -->
	<link defer rel="stylesheet"
		href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/staatliches/staatliches.css">

	<!-- ANIMATION -->
	<link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/animate.css" rel="stylesheet"
		type="text/css" />

	<!-- BULMA CALENDAR -->
	<link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/bulma-calendar/bulma-calendar.min.css"
		rel="stylesheet" type="text/css" />

	<!-- JQUERY -->
	<script src="https://techzone.com.my/catalog/view/theme/aio/js/jquery-3.3.1.min.js"></script>
	<script defer type="text/javascript"
		src="https://techzone.com.my/catalog/view/javascript/jquery/ui/external/jquery.cookie.js"></script>

	<!-- TOTAL STORAGE -->
	<script defer type="text/javascript"
		src="https://techzone.com.my/catalog/view/javascript/jquery/jquery.total-storage.min.js"></script>

	<!-- FANCYBOX -->
	<link defer rel="stylesheet"
		href="https://techzone.com.my/catalog/view/theme/aio/plugins/fancybox3/jquery.fancybox.min.css">
	<script async
		src="https://techzone.com.my/catalog/view/theme/aio/plugins/fancybox3/jquery.fancybox.min.js"></script>

	<!-- ELEVATEZOOM -->
	<script async
		src="https://techzone.com.my/catalog/view/theme/aio/plugins/elevatezoom-plus/jquery.easing.min.js"></script>
	<script async
		src="https://techzone.com.my/catalog/view/theme/aio/plugins/elevatezoom-plus/jquery.mousewheel.js"></script>
	<script async
		src="https://techzone.com.my/catalog/view/theme/aio/plugins/elevatezoom-plus/jquery.ez-plus.js"></script>

	<!-- LAZYLOAD -->
	<script src="https://techzone.com.my/catalog/view/theme/aio/plugins/jquery.lazy-master/jquery.lazy.min.js"></script>
	<script
		src="https://techzone.com.my/catalog/view/theme/aio/plugins/jquery.lazy-master/jquery.lazy.plugins.min.js?ver=1.0"></script>



	<!-- GOOGLE RECAPTCHA -->
	<script defer async src='https://www.google.com/recaptcha/api.js'></script>



	<!-- CUSTOMIZE -->
	<link defer id="customize_css"
		href="https://techzone.com.my/catalog/view/multi_store/techzone/aio_customize_css.css?ver=1713734373"
		rel="stylesheet" type="text/css" />


	<style>
		.btn-wishlist,
		.btn-compare {
			display: block;
		}
	</style>


	<!-- TITLE -->
	<title>Tech Zone Computer Sdn Bhd | Best Computer Shop In Malaysia</title>

	<script src="https://techzone.com.my/catalog/view/javascript/fbpixel-conversion-api.js"></script>

</head>

<body class="body-style wide  clamp-1">
	<?php include "head.php" ?>
	<!-- END HEADER -->
	<section id="home" class="section content container per-row-4">
		<div id="contents" class="home">
			<div id="main-content">
				<div class="holder">

					<style>
						html,
						body {
							overflow: hidden;
						
							height: 100%;
				
						}

						.slideshow-container {
							max-width: 1000px;
							position: relative;
							margin: auto;
						}


						.mySlides {
							display: none;
						}

						.mySlides img {
							position: fixed;
							top: 0;
							left: 0;
							width: 100%;
							height: 100%;
							object-fit: cover;

						}


						.prev,
						.next {
							cursor: pointer;
							position: absolute;
							top: 50%;
							width: auto;
							margin-top: -22px;
							padding: 16px;
							color: white;
							font-weight: bold;
							font-size: 18px;
							transition: 0.6s ease;
							border-radius: 0 3px 3px 0;
							user-select: none;
						}


						.next {
							right: 0;
							border-radius: 3px 0 0 3px;
						}

						.fade {
							animation-name: fade;
							animation-duration: 1.5s;
						}

						@keyframes fade {
							from {
								opacity: .4
							}

							to {
								opacity: 1
							}
						}


						.text {
							color: #f2f2f2;
							font-size: 15px;
							padding: 8px 12px;
							position: absolute;
							bottom: 8px;
							width: 100%;
							text-align: center;
						}


						.prev {
							cursor: pointer;
							position: fixed;
							top: 50%;
							left: 0;

							margin-right: 10px;

							transform: translateY(-50%);
							padding: 25px;
							color: white;
							font-weight: bold;
							font-size: 25px;
							transition: 0.6s ease;
							border-radius: 3px 0 0 3px;
							user-select: none;
						}


						.next {
							cursor: pointer;
							position: fixed;
							top: 50%;
							right: 0;

							margin-left: 10px;

							transform: translateY(-50%);
							padding: 25px;
							color: white;
							font-weight: bold;
							font-size: 25px;
							transition: 0.6s ease;
							border-radius: 0 3px 3px 0;
							user-select: none;
						}

						.cover-container {
							display: flex;
							align-items: center;

							justify-content: center;

							height: 100vh;

							background-color: rgba(0, 0, 0, 0);

						}

						.inner {
							text-align: center;

						}


						.cover-heading,
						.lead,
						.btn-header {
							color: white;
						}

						.cover-heading span {
							color: gray;
							text-align: center;
						}

						.btn-header {
							background-color: #3498db;
							color: white;
							border: none;
							border-radius: 5px;
							padding: 10px 20px;
							font-size: 16px;
							font-weight: bold;
							text-transform: uppercase;
							box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
							transition: background-color 0.3s, box-shadow 0.3s;
						}

						.btn-header:hover {
							background-color: #2980b9;
							box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
						}

						.cover-heading span {
							color: #fff;
							text-align: center;
						}
					</style>

					<div class="slideshow-container">
						<div class="mySlides fade">
							<img src="../image/slide1.jpg" style="width:100%">

						</div>

						<div class="mySlides fade">
							<img src="../image/slide2.jpg" style="width:100%">

						</div>



						<!-- Next and previous buttons -->
						<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="next" onclick="plusSlides(1)">&#10095;</a>

						<div class="cover-container">
							<div class="inner cover animated fadeInUp">
								<h1 class="cover-heading"><img src="../image/PC.gif" width="50" height="30"
										alt="PC monitor Icon" value="" id="cover-icon" style="color:white;" /> <span>PC
										monitor Customization</span></h1>
								<p class="lead">This website was created as a means to help beginners to pick their
									parts to build their own gaming PC. Prices and parts are regularly updated depending
									on the current situation</p>
								<p class="lead">
									You can start to built you own PC now!!!!
								</p>
								<p class="lead">
									<a href="build_home.php" class="btn btn-header"
										style="background-color: skyblue; color:black;">Generate a Build</a>
								</p>
							</div>
						</div>

					</div>
					<script>
						var slideIndex = 1;
						showSlides(slideIndex);

						function plusSlides(n) {
							showSlides(slideIndex += n);
						}

						function showSlides(n) {
							var i;
							var slides = document.getElementsByClassName("mySlides");
							if (n > slides.length) { slideIndex = 1 }
							if (n < 1) { slideIndex = slides.length }
							for (i = 0; i < slides.length; i++) {
								slides[i].style.display = "none";
							}
							slides[slideIndex - 1].style.display = "block";
						}
					</script>

</body>
</section>

</html>