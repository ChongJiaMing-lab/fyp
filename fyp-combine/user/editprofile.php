<?php include "head.php" ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="ready">

<head>



	<!-- BULMA -->
	<link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/bulma.css" rel="stylesheet"
		type="text/css" />
	<link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/bulma-extensions/bulma-checkradio.min.css"
		rel="stylesheet" type="text/css" />


	<!-- MAIN STYLESHEET -->
	<link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/aio.css?ver=1710132233" rel="stylesheet"
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
		href="https://techzone.com.my/catalog/view/multi_store/techzone/aio_customize_css.css?ver=1710132233"
		rel="stylesheet" type="text/css" />




	<!-- TITLE -->
	<title>My Account Information</title>

	<script src=https://techzone.com.my/catalog/view/javascript/fbpixel-conversion-api.js"></script>

</head>

<body class="body-style wide  clamp-1">





	<style>
		.title {
			color: black;
			text-transform: unset;
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

		.txt-interact {
			color: skyblue !important;
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
	</style>








	<!-- END HEADER -->


	<section id="account-edit" class="section container myaccounts">



		<?php
		$id = $_GET['ID'];
		$query = "SELECT * FROM user_information WHERE ID='$id'";
		$query2 = "SELECT * FROM user_address WHERE customer_id='$id'";
		$result = mysqli_query($connect, $query);
		$result2 = mysqli_query($connect, $query2);
		if ($result && $result2) {

			if ($row = mysqli_fetch_assoc($result)) {
				?>
				<div id="contents">
					<?php include ("slide_bar.php"); ?>
					<?php
			}
		}
		?>

			<div id="main-content" class="edit-account">

				<!--EDIT ACCOUNT -->



				<?php
				$id = $_GET['ID'];
				$query = "SELECT * FROM user_information WHERE ID='$id'";
				$result = mysqli_query($connect, $query);
				if ($result) {
					foreach ($result as $row) { ?>
						<form id="form1" name="form1" method="post" action="update_profile.php?ID=<?php echo $id; ?>">
							<div class="holder">

								<div class="title">Edit Profile</div>


								<div class="myaccount-content form-utility">

									<div class="field-group">

										<div class="field-group">

											<div class="field-group">

											<div class="field">
													<label class="label">
														Email </label>
													<div class="control">
														<input type="text" name="name" id="name" class="input txt-data"
															value="<?php echo $row['email'] ?> "readonly />
													</div>
													
												</div>

												<!--  NAME -->
												<div class="field">
													<label class="label">
														Name </label>
													<div class="control">
														<input type="text" name="name" id="name" class="input txt-data"
															value="<?php echo $row['name'] ?>" />
													</div>
													<div class="new_require">
														<ul>
															<li class="6_len"><span></span>Should have 6 characters</li>
														</ul>
													</div>
												</div>


												<!-- TELEPHONE -->
												<div class="field">
													<label class="label">
														Contact number </label>
													<div class="control">
														<input type="text" name="contactnumber" id="telephone"
															class="input txt-data"
															value="<?php echo $row['contactnumber'] ?>" />
													</div>
													<div class="new_require">
														<ul>

															<li class="15_len2"><span></span>Should have 10 number</li>

														</ul>
													</div>
												</div>








											</div>

										</div>

										<?php
					}
				} else {
					echo "no records found :(";
				}
				?>
								<div class="buttons">
									<input type="hidden" name="agree" value="1" />
									<input type="submit" name="updatebtn" value="Save" id="btn_submit"
										class="button btn-action" />
								</div>


				</form>
				<script type="text/javascript"
					src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
				<script>

					$(document).ready(function () {

						checkName();
						checkTelephone();

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
						if (telephone_value.length == 10 || telephone_value.length > 10) {
							$('.15_len2').addClass('active');
						}
						else {
							$('.15_len2').removeClass('active');
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
			</div>

		</div>
		</div>

	</section>


</body>

</html>