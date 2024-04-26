<!-- ###AIO### -->
<!-- ###AIO### -->
<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="ready">
<?php include "head.php"; ?>

<head>
	<!-- BULMA -->
	<link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/bulma.css" rel="stylesheet"
		type="text/css" />
	<link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/bulma-extensions/bulma-checkradio.min.css"
		rel="stylesheet" type="text/css" />


	<!-- MAIN STYLESHEET -->
	<link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/aio.css?ver=1713308231" rel="stylesheet"
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
		href="https://techzone.com.my/catalog/view/multi_store/techzone/aio_customize_css.css?ver=1713308230"
		rel="stylesheet" type="text/css" />

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


	<!-- TITLE -->
	<title>Change Password</title>

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

	input.button.btn-login{
            background-color:black;
        }

a.button.view-password
{
            background-color:black;
        }
.txt-interactt 
{
    color: skyblue !important;
}
.txt-data, .input.txt-data
{
	color:#2586c6;
}
.body-style button, .body-style .button 
{
    background-color:black;
}

.title
{
	color:black;
}
</style>
<?php
if (isset($_GET["ID"])) {
	$user_id = $_GET["ID"];
	$pw = mysqli_query($connect, "SELECT * FROM user_information WHERE ID='$user_id'");
	$row = mysqli_fetch_assoc($pw);
} ?>

<body class="body-style wide  clamp-1">
	<!-- END HEADER -->
	<section id="account-password" class="section container myaccounts">
		
		<?php
	$id = $_GET['ID'];
    $query = "SELECT * FROM user_information WHERE ID='$id'";
	$query2 = "SELECT * FROM user_address WHERE customer_id='$id'";
    $result = mysqli_query($connect, $query);
	$result2 = mysqli_query($connect, $query2);
    if($result && $result2)
    {
		
        if ($row = mysqli_fetch_assoc($result)) 
		{
			?>
			<div id="contents">
			<div id="sidebar-left">
		<div class="sidebar-nav-list">
			<ul class="nav-container">
				<li class="item">
					<a class="txt-interactt is-active" href="myaccount.php?ID=<?php echo $id;?>">My account</a>
					<ul class="item-container">
						<li class="sub">
							<a href="myprofile.php?ID=<?php echo $id;?>">My profile</a>
						</li>
						<li class="sub">
							<a href="view_address.php?ID=<?php echo $id;?>">My address</a>
							
						</li>
						<li class="sub">
						<a href="change_password.php?ID=<?PHP echo $id;?>">Change password</a>
						</li>
						</ul>
						<!-- MY ORDERS -->
	<li class="item">
	<a href="orderlist.php?ID=<?php echo $id;?>">My orders</a>
			</li>
		<!-- MY COUPON -->
	<li class="item"><a href="...">My coupon</a></li>
			<!-- MY REWARD POINT -->
	<li class="item"><a href="...">My reward point</a></li>
			<!-- MY TRANSACTION -->
	<li class="item"><a  href="...">My store credit</a></li>
			</ul>
						</div>
		</div>
		<?php
		}
	}
	?>

			<div id="main-content" class="password">

				<!-- PASSWORD -->
				<div class="holder">
					<div class="title">Change Password</div>
					<form class="myaccount-body" action="update_password.php" method="post" enctype="multipart/form-data">
						<div class="myaccount-content">
							<!-- PASSWORD -->
							<div class="field">
								<label class="label">
									Old Password</label>
								<div class="field has-addons">
									<div class="control addon-fix">
										<input id="old_pw" type="password" class="input " name="password" value=""
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
										<li class="old"><span></span>Must be same with current password</li>
									</ul>
								</div>
							</div>
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
										<li class="15_len"><span></span>At least 15 characters</li>
									</ul>
								</div>
							</div>

							<!-- PASSWORD CONFIRM -->
							<div class="field">
								<label class="label">
									Confirm New Password </label>
								<div class="field has-addons">
									<div class="control addon-fix">
										<input id="con_pw" type="password" class="input" name="confirm" value=""
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
										<li class="confirm_password"><span></span>Must be same with the new password
										</li>
									</ul>
								</div>
							</div>

							<div class="buttons">
								<input type="submit" value="Save" id="input_submit" name="changepw"
									class="input_submit button btn-action" />
							</div>
							<input type="hidden" id="" name="user_id" value="<?php echo $user_id ?>">
							<input type="hidden" name="change_pass" value="">
						</div>
					</form>
				</div>

			</div>

		</div>

	</section>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js">
	</script>
	<script>
		$('#old_pw').on('keyup', function () {
			var current = "<?php echo $row['password'] ?>"
			old_pw = $(this).val();
			if (old_pw == current) {
				$('.old').addClass('active');
			}
			else {
				$('.old').removeClass('active');
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


			if (pw_valid_value.length == 15 || pw_valid_value.length > 8) {
				$('.15_len').addClass('active');
			}
			else {
				$('.15_len').removeClass('active');
			}
		})

		$('#con_pw').on('keyup', function () {
			con_pw_value = $(this).val();
			if (con_pw_value == pw_valid_value) {
				$('.confirm_password').addClass('active');
			}
			else {
				$('.confirm_password').removeClass('active');
			}

		})

		$('#input_submit').on("click", function (e) {
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