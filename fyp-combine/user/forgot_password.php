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
	<title>Forgot Your Password?</title>

	<script src="https://techzone.com.my/catalog/view/javascript/fbpixel-conversion-api.js"></script>

</head>

<body class="body-style wide  clamp-1">
	<?php include "head.php" ?>
	<!-- END HEADER -->
	<section id="account-forgotten" class="section container account-access">

		<div id="contents">

			<div id="main-content">
				<div class="holder">
					<div id="forget-password">
						<div class="account-access-header">
							<div class="title">Reset your password</div>
							<div class="title-message">Go back to <a class="txt-interact txt-underline"
									href="Login.php">login</a></div>
						</div>

						<form action="" method="POST">
							<div class="form-body">
								<!-- EMAIL -->
								<div class="field">
									<label class="label ">
										Email Address </label>
									<div class="control">
										<input type="text" class="input " name="email" value="" />
									</div>
								</div>
							</div>

							<div class="form-footer field">
								<input type="submit" name="reset-request-submit" value="Continue" class="button" />
							</div>
						</form>
						<?php
						if (isset($_GET["reset"])) {
							if ($_GET["reset"] == "success") {
								echo '<p class="signupsuccess">Check  your e-mail!</p>';
							}
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>

</html>

<?php
if (isset($_POST["reset-request-submit"])) {
	$email = $_POST["email"];

	$sql = mysqli_query($connect, "SELECT * FROM user_information WHERE email='$email'");
	$query = mysqli_num_rows($sql);
	$fetch = mysqli_fetch_assoc($sql);

	if (mysqli_num_rows($sql) <= 0) {

		echo "<script>
                alert('Sorry, no emails exists');
                window.location = 'Login.php';
            </script>";
	} else {
		// generate token by binaryhexa 
		$token = bin2hex(openssl_random_pseudo_bytes(25));

		$email_to_reset = $_POST["email"];

		require "Mail/phpmailer/PHPMailerAutoload.php";
		$mail = new PHPMailer;

		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls';

		$mail->Username = 'zhangjiaming1018@gmail.com';//the email use to send email
		$mail->Password = 'esoe krur jxxh pyhr';//the pin number

		$mail->setFrom('zhangjiaming1018@gmail.com', 'Password Reset');
		// get email from input
		$mail->addAddress($_POST["email"]);


		$name = $fetch["name"];
		// HTML body
		$mail->isHTML(true);
		$mail->Subject = "Recover your password";
		$mail->Body = "<b>Dear $name,</b>
                <h3>We received a request to reset your password.</h3>
                <p>Kindly click the below link to reset your password</p>
                <a href='http://localhost/fyp/fyp-combine/user/create-new-password.php?email=<?php echo $email_to_reset; ?>'>click here</a>";
		//change the file location that for change pass word want 
		if (!$mail->send()) {
			?>
			<script>
				alert("<?php echo " Invalid Email." ?>");
			</script>
			<?php
		} else {
			$time = time();
			$insert_forgot = mysqli_query($connect, "INSERT INTO forgot_pass(email, expire, expire_time)values('$email_to_reset','0','$time')");
			?>
			<script>
				alert("<?php echo "Hi, please check your email for the password reset." ?>");
			</script>
			<?php
		}
	}
}
?>