<!DOCTYPE html>

<html dir="ltr" lang="en-US" class="ready">

<head>



	<!-- BULMA -->
	<link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/bulma.css" rel="stylesheet"
		type="text/css" />
	<link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/bulma-extensions/bulma-checkradio.min.css"
		rel="stylesheet" type="text/css" />


	<!-- MAIN STYLESHEET -->
	<link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/aio.css?ver=1712567543" rel="stylesheet"
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
	<script src="catalog/view/theme/aio/js/jquery-3.3.1.min.js"></script>
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
		href="https://techzone.com.my/catalog/view/multi_store/techzone/aio_customize_css.css?ver=1712567543"
		rel="stylesheet" type="text/css" />


	<style>
		.btn-wishlist,
		.btn-compare {
			display: none;
		}

		.btn-wishlist,
		.btn-compare {

			display: none;
		}

		.title {
			color: black !important;

		}

		input.button.btn-login {
			background-color: black;
		}

		a.button.view-password {
			background-color: black;
		}

		.txt-interactt {
			color: skyblue !important;
		}

		
	</style>


	<!-- TITLE -->
	<title>Search - keyboard</title>

	<script src="https://techzone.com.my/catalog/view/javascript/fbpixel-conversion-api.js"></script>

</head>

<body class="body-style wide  clamp-1">
	<?php include "head.php" ?>



	<!-- END HEADER -->
	<section id="product-search" class="section content container per-row-5">



		<div id="contents">

			<div id="main-content">

				<div class="holder">
					<div class="module-container ">

						<!-- ###AIO### -->

						<div class="toolbar-search">

							<div class="searchbar">
								<i class="icon-search"></i>
								<input type="text" name="search" id="live_search" value="" autocomplete="off"
									placeholder="Search..." />
							</div>
							<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$("#live_search").keyup(function () {
										var input = $(this).val();

										if (input != "")
											$.ajax({
												url: "live_search.php",
												method: "POST",
												data: { input: input },
												success: function (data) {
													$(".product-listing .box-content").html(data).css("display", "");
												}
											});



									});
								});
							</script>





							<div class="title">Search result</div>
						</div>


						<!-- PRODUCTS -->

						<!-- PRODUCT FILTER -->
						<div class="product-filter">




						</div>
						<!-- END PRODUCT FILTER -->

						<!-- PRODUCT LISTING -->
						<div class="box module-product product-listing ">
							<div class="box-content">
								<?php
								$query = "SELECT * FROM product ";
								$result = mysqli_query($connect, $query);
								if ($result) {

									while ($row = mysqli_fetch_assoc($result)) {
										?>
										<div>
											<div class="frame">


												<div class="item-img">
													<a
														href="product_detail.php?product_id=<?php echo $row['product_id']; ?>"></a>
													<div class="image" style="min-width:200px ; min-height:200px">



														<img class="first-img lazy" src="../image/<?php echo $row['image']; ?>"
															class="img-responsive" alt=""
															style="width: 300px; height: auto; display: block; margin: auto;" />


													</div>
													</a>
												</div>

												<div class="item-info">

													<div class="product-name">
														<p><strong><a href="#"><?php echo $row['product_name']; ?></a></strong>
														</p>
													</div>






													<div class="price">
														<div class="price-new">RM<?php echo $row['price']; ?> </div>
														<div class="price-old"></div>


													</div>



													<div class="floating-cart-button" style="background-color:gray">

														<div class="button">
															<?php

															$stock = $row['stock'];

															if ($stock == 0) {

																echo '<span class="btn-out-of-stock">Out of Stock</span>';
															} else {

																echo '<a href="product_detail.php?product_id=' . $row["product_id"] . '" class="btn-view-detail">View More Detail</a>';
															}
															?>
														</div>
													</div>
												</div>

											</div>

										</div>
										<?php
									}

								} else {
									echo "Somethine went wrong...";
								}

								?>
							</div>
						</div>
						<!-- END PRODUCT LISTING -->



						<!-- END PRODUCTS -->

						<!-- ###AIO### -->

					</div>
				</div>
			</div>

		</div>
	</section>



</body>

</html>