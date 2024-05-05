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
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/aio.css?ver=1710050486" rel="stylesheet"
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
    <script defer type="text/javascript" src="catalog/view/javascript/jquery/ui/external/jquery.cookie.js"></script>

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
        href="https://techzone.com.my/catalog/view/multi_store/techzone/aio_customize_css.css?ver=1710050486"
        rel="stylesheet" type="text/css" />


    <style>
        .btn-wishlist,
        .btn-compare {
            display: none;
        }
    </style>


    <!-- TITLE -->
    <title>Register</title>

    <script src="https://techzone.com.my/catalog/view/javascript/fbpixel-conversion-api.js"></script>

</head>
<style>
	.newpw_require ul {
		padding: 0;
		margin: 0 0;
		list-style: none;
	}

	.newpw_require ul li {
		margin-bottom: 8px;
		color: red;
		/* font-weight: 700; */
	}

	.newpw_require ul li.active {
		display: none;
	}

	.newpw_require ul li span::before {
		display: inline;
	}

	.newpw_require ul li.active span:before {
		display: none;
	}

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

	.body-style button,
	.body-style .button {
		border-radius: 0px;
		text-transform: capitalize;
		background-color: black;
	}
</style>

<body class="body-style wide  clamp-1">



	<section id="account-register" class="section container account-access">
		<div id="contents">
			<div id="main-content">
				<div class="holder">
					<div id="register">
						<div class="account-access-header">
							<div class="title">Register Account</div>
							<div class="title-message">Already have an account? <a class="txt-interactt txt-underline"
									href="Login.php">Log in</a></div>
						</div>
						<form id="form1" name="form1" method="post" action="update_user.php">
							<input type="hidden" name="register_token" value="TVRjeE1EQXdOalF3T0E9PQ">
							<div class="form-body">
								<div class="field">
									<label class="label">Email Address</label>
									<div class="control">
										<input type="text" class="input" id="email" name="email" value="" />
									</div>
									<div class="newpw_require">
										<ul>
											<li class="letter1"><span></span>At least one letter</li>
											<li class="email"><span></span>must have @</li>

										</ul>
									</div>
								</div>
								<div class="field">
									<label class="label">Name</label>
									<div class="control">
										<input type="text" class="input" id="name" name="Name" value="" />
									</div>
									<div class="newpw_require">
										<ul>
											<li class="6_len"><span></span>At least 6 characters</li>
										</ul>
									</div>
								</div>
								<div class="field">
									<label class="label">Contact Number</label>
									<div class="control">
										<input type="text" class="input" id="telephone" name="telephone" value="" />
									</div>
									<div class="newpw_require">
										<ul>

											<li class="15_len2"><span></span>At least 10 number</li>
											<li class="15_len2"><span></span>Example: 011xxxxxxx</li>

										</ul>
									</div>
								</div>
								<div class="field-group">
									<div class="field dob">
										<div class="month-input">
											<label class="label">
												Date of Birth </label>
											<div class="control">
												<select id="dob_month" name="dob_month" class="">
                                                    <option value="0">Select</option>
													<option value="1">January</option>
													<option value="2">February</option>
													<option value="3">March</option>
													<option value="4">April</option>
													<option value="5">May</option>
													<option value="6">Jun</option>
													<option value="7">July</option>
													<option value="8">August</option>
													<option value="9">September</option>
													<option value="10">October</option>
													<option value="11">November</option>
													<option value="12">December</option>
												</select>
											</div>
										</div>
										<div class="day-input">
											<label class="label">
												Day </label>
											<div class="control">
												<input id="dob_day" name="dob_day" type='number' class="input" min="1"
													placeholder="DD" value="" pattern="[0-9] " />
											</div>

										</div>
										<div class="year-input">
											<label class="label ">
												Year </label>
											<div class="control">
												<input id="dob_year" name="dob_year" type='number' class="input"
													min="1869" placeholder="YYYY" value="" pattern="[0-9]" />
											</div>

										</div>
										<input type="hidden" class="input " id="birthday_date" readonly="readonly"
											name="birthday_date" value="">
									</div>
								</div>
								<div class="newpw_require">
									<ul>

										<li class="day"><span></span>Day Should Be 0-31</li>
										<li class="Year"><span></span>Start at 2000-2024</li>

									</ul>
								</div>
							</div>

							<div class="myaccount-content">
								<!-- PASSWORD -->
								<div class="field">
									<label class="label">
										New Password</label>
									<div class="field has-addons">
										<div class="control addon-fix">
											<input id="pw_valid" type="password" class="input " name="password" value=""
												required>
										</div>
										<div class="control">
											<a class="button view-password">
												<span><i class="mdi mdi-eye-off"></i></span>
											</a>
										</div>
									</div>
									<div class="newpw_require">
										<ul>
											<li class="letter"><span></span>At least one letter</li>
											<li class="num"><span></span>At least one number</li>
											<li class="special"><span></span>At least one special character</li>
											<li class="14_len"><span></span>At least 15 characters</li>
										</ul>
									</div>
								</div>



								<div class="form-footer">
                                    <div class="field">
                                        <input type="hidden" name="agree" value="1" />
                                        <input type="submit" class="button btn-login" id="btn_submit" name="register"
                                            value="Confirm Register" class="button" />

                                    </div>
									</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
			<script>
				document.addEventListener("DOMContentLoaded", function () {

					document.querySelector(".view-password").addEventListener("click", function () {
						var passwordInput = document.getElementsByName("password")[0];
						var eyeIcon = document.querySelector(".view-password i");


						if (passwordInput.type === "password") {
							passwordInput.type = "text";
							eyeIcon.classList.remove("mdi-eye-off");
							eyeIcon.classList.add("mdi-eye");
						} else {
							passwordInput.type = "password";
							eyeIcon.classList.remove("mdi-eye");
							eyeIcon.classList.add("mdi-eye-off");
						}
					});
				});

				
			</script>

	</section>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js">
	</script>
	<script>
		$('#email').on('keyup', function () {

			email_value = $(this).val();
			if (email_value.match(/[a-z]/g)) {
				$('.letter1').addClass('active');
			}
			else {
				$('.letter1').removeClass('active');
			}


			if (email_value.match(/[@]/g)) {
				$('.email').addClass('active');
			}
			else {
				$('.email').removeClass('active');
			}

		})

		$('#name').on('keyup', function () {

			name_value = $(this).val();
			if (name_value.length == 6 || name_value.length > 6) {
				$('.6_len').addClass('active');
			}
			else {
				$('.6_len').removeClass('active');
			}


		})

		$('#dob_month, #dob_day, #dob_year').on('change', function () {
    var month = parseInt($('#dob_month').val());
    var day = parseInt($('#dob_day').val());
    var year = parseInt($('#dob_year').val());

    if (!isNaN(year) && !isNaN(month) && !isNaN(day)) {
    
        if (year >= 2000 && year <= 2024 && month >= 1 && month <= 12 && day >= 1 && day <= 31) {
        
            var currentDate = new Date();
            var currentYear = currentDate.getFullYear();
            var currentMonth = currentDate.getMonth() + 1;
            var currentDay = currentDate.getDate();
            if (year == currentYear && month > currentMonth) {
                $('.day').removeClass('active').addClass('error');
                $('.Year').removeClass('active');
            } else if (year == currentYear && month == currentMonth && day > currentDay) {
                $('.day').removeClass('active').addClass('error');
                $('.Year').removeClass('active');
            } else {
                $('.day').removeClass('error').addClass('active');
                $('.Year').removeClass('error').addClass('active');
            }
        } else {
          
            $('.day').removeClass('active').addClass('error');
            $('.Year').removeClass('active').addClass('error');
        }
    } else {
     
    }
});

		$('#telephone').on('keyup', function () {

			telephone_value = $(this).val();
			if (telephone_value.length == 10 || telephone_value.length > 10) {
				$('.15_len2').addClass('active');
			}
			else {
				$('.15_len2').removeClass('active');
			}


		})

		$('#pw_valid').on('keyup', function () {
			pw_valid_value = $(this).val();

			if (pw_valid_value.match(/[a-z]/g)) {
				$('.letter').addClass('active');
			}
			else {
				$('.letter').removeClass('active');
			}


			if (pw_valid_value.match(/[0-9]/g)) {
				$('.num').addClass('active');
			}
			else {
				$('.num').removeClass('active');
			}


			if (pw_valid_value.match(/[!@#$%^&*]/g)) {
				$('.special').addClass('active');
			}
			else {
				$('.special').removeClass('active');
			}


			if (pw_valid_value.length == 14 || pw_valid_value.length > 8) {
				$('.14_len').addClass('active');
			}
			else {
				$('.14_len').removeClass('active');
			}
		})



		$('#btn_submit').on("click", function (e) {
			e.preventDefault();
			var actives = false;
			$('.newpw_require ul li').each(function () {
				if (!$(this).hasClass('active')) {
					actives = true;
					return false;
				}
			});

			if (actives) {
				$('.newpw_require ul li:not(.active)').effect("shake", { times: 2 }, 500);
			} else {
				$('form').submit();
			}
		});

	</script>
</body>

</html>
