<!-- ###AIO### -->
<!-- ###AIO### -->
<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="ready">

<head>





	<!-- BULMA -->
	<link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/bulma.css" rel="stylesheet"
		type="text/css" />
	<link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/bulma-extensions/bulma-checkradio.min.css"
		rel="stylesheet" type="text/css" />


	<!-- MAIN STYLESHEET -->
	<link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/aio.css?ver=1712139565" rel="stylesheet"
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
		href="https://techzone.com.my/catalog/view/multi_store/techzone/aio_customize_css.css?ver=1712139565"
		rel="stylesheet" type="text/css" />




	<!-- TITLE -->
	<title>Address Book</title>

	<script src="catalog/view/javascript/fbpixel-conversion-api.js"></script>

</head>

<body class="body-style wide  clamp-1">
	<?php include "head.php" ?>

	<style>
		.btn-wishlist,
		.btn-compare {

			display: none;
		}

		.title {
			color: black;

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

		.txt-data,
		.input.txt-data {
			color: #2586c6;
		}

		.body-style button,
		.body-style .button {
			background-color: black;
		}

		.new_require ul {
			padding: 0;
			margin: 0 0;
			list-style: none;
		}

		.new_require ul li {
			margin-bottom: 8px;
			color: red;
			/* font-weight: 700; */
		}

		.new_require ul li.active {
			display: none;
		}

		.new_require ul li span::before {
			display: inline;
		}

		.new_require ul li.active span:before {
			display: none;
		}

		.btn-wishlist,
		.btn-compare {

			display: none;
		}
	</style>


	<!-- END HEADER -->
	<section id="account-address-form" class="section container myaccounts">



		<div id="contents">
			<div id="sidebar-left">
				<div class="sidebar-nav-list"></div>
			</div>

			<div id="main-content" class="address-form">

				<!-- address form -->
				<div class="holder">
					<div class="title">Edit my address</div>
					<div class="add-form">
					
							<div class="myaccount-content form-utility">
								<?php
								$id = $_GET['ID'];
								$query = "SELECT * FROM user_address WHERE address_id='$id'";
								$result = mysqli_query($connect, $query);
								if ($result) {
									foreach ($result as $row) { ?>
									<form id="form1" name="form1" method="post" action="upadate_editaddress.php?ID=<?php echo $id; ?>">
										<div class="field-group">



											<div class="field">
												<label class="label label-is-success">
													<span id="lastname-required" class="required"></span>
													Name </label>
												<div class="control">
													<input type="text" class="input " id="name" name="name"
														value="<?php echo $row['name'] ?>" />

												</div>
												<div class="new_require">
													<ul>
														<li class="6_len"><span></span>6 characters</li>
													</ul>
												</div>
											</div>
										</div>

										<!-- CONTACT -->
										<div class="field">
											<label class="label label-is-success">
												<span id="contact-required" class="required"></span>
												Contact number </label>
											<div class="control">
												<input type="text" class="input " id="telephone" name="contact_number"
													value="<?php echo $row['contact_number'] ?>" />
											</div>
											<div class="new_require">
												<ul>
													<li class="15_len2"><span></span>10 number(EXP:0XX-XXXXXXX)</li>
												</ul>
											</div>
										</div>

										<div class="field-group">



										</div>

										<div class="field-group">
											<!-- ADDRESS 1 -->
											<div id="address_1_display" class="field">
												<label class="label ">
													<span id="address_1-required" class="required"></span>
													Address </label>
												<div class="control">
													<input type="text" class="input " name="address"
														value="<?php echo $row['address'] ?>" />
												</div>
											</div>

											<!-- ADDRESS 2 -->



											<!-- ZONE -->
											<div id="zone_display" class="field">
												<label class="label ">
													State </label>
												<select name="state" value="<?php echo $row['state'] ?>">

													<option value="Johor">Johor</option>
													<option value="Kedah">Kedah</option>
													<option value="Kelantan">Kelantan</option>
													<option value="Malacca">Malacca</option>
													<option value="Negeri Sembilan">Negeri Sembilan</option>
													<option value="Pahang">Pahang</option>
													<option value="Penang">Penang</option>
													<option value="Perak">Perak</option>
													<option value="Perlis">Perlis</option>
													<option value="Sabah">Sabah</option>
													<option value="Sarawak">Sarawak</option>
													<option value="Selangor">Selangor</option>
													<option value="Terenggaru">Terenggaru</option>


												</select>


											</div>

											<!-- CITY -->
											<div id="city_display" class="field">
												<label class="label ">
													<span id="city-required" class="required"></span>
													City </label>
												<div class="control">
													<input type="text" class="input " name="city"
														value="<?php echo $row['city'] ?>" />
												</div>
											</div>

											<!-- POSTCODE -->
											<div id="postcode_display" class="field">
												<label class="label ">
													<span id="postcode-required" class="required"></span>
													Postcode </label>
												<div class="control">
													<input type="text" class="input " id="postcode" name="postcode"
														value="<?php echo $row['postcode'] ?>" />
												</div>
												<div class="new_require">
													<ul>

														<li class="pst"><span></span>Must be 5 digits</li>

													</ul>
												</div>
											</div>
										</div>






										<?php
									}
								} else {
									echo "no records found :(";
								}
								?>


								<!-- SUBMIT -->
								<div class="buttons">
									<input type="hidden" name="agree" value="1" />
									<input type="submit" name="updatebtn" id="btn_submit" value="Save"
										class="button btn-action" />
								</div>
							</div>
						</form>
					</div>
				</div>

			</div>

		</div>

	</section>

	<script type="text/javascript"
		src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
	<script>
		$(document).ready(function () {
			
			checkName();
			checkTelephone();
			checkPostcode();
		});

		
		function checkName() {
			var name_value = $('#name').val();
			if (name_value.length == 6 || name_value.length > 6) {
				$('.6_len').addClass('active');
			} else {
				$('.6_len').removeClass('active');
			}
		}

	
		function checkTelephone() {
			var telephone_value = $('#telephone').val();
			if (telephone_value.length == 10 || telephone_value.length > 10) {
				$('.15_len2').addClass('active');
			} else {
				$('.15_len2').removeClass('active');
			}
		}

		function checkPostcode() {
			var postcode_value = $('#postcode').val();
			if (/^\d+$/.test(postcode_value) && postcode_value.length <= 5) {
				if (postcode_value.length === 5) {
					$('.pst').addClass('active');
				} else {
					$('.pst').removeClass('active');
				}
			}
		}
		$('#name').on('keyup', function () {

			name_value = $(this).val();
			if (name_value.length == 6 || name_value.length > 6) {
				$('.6_len').addClass('active');
			}
			else {
				$('.6_len').removeClass('active');
			}


		})

		$('#telephone').on('keyup', function () {
						telephone_value = $(this).val();
						if (telephone_value.match(/^0\d{2}-\d{7,8}$/)) {
							$('.15_len2').addClass('active');
						} else {
							$('.15_len2').removeClass('active');
						}
					});

		$('#postcode').on('keyup', function () {
			let postcode_value = $(this).val();


			if (/^\d+$/.test(postcode_value) && postcode_value.length <= 5) {
				$(this).val(postcode_value);
				if (postcode_value.length === 5) {
					$('.pst').addClass('active');
				}
				else {
					$('.pst').removeClass('active');
				}

			}
		})

		$('#btn_submit').on("click", function (e) {
			e.preventDefault();
			var actives = false;
			$('.new_require ul li').each(function () {
				if (!$(this).hasClass('active')) {
					actives = true;
					return false;
				}
			});

			if (actives) {
				$('.new_require ul li:not(.active)').effect("shake", { times: 2 }, 500);
			} else {
				$('form').submit();
			}
		});


	</script>





</body>

</html>
