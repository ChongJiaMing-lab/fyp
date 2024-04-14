<?php include("data_connection.php")

?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="ready">
<head>
	
    
        
                
	
	  <!-- BULMA -->
    <link defer href="https://www.techzone.com.my/catalog/view/theme/aio/stylesheet/bulma.css" rel="stylesheet" type="text/css" />
    <link defer href="https://www.techzone.com.my/catalog/view/theme/aio/plugins/bulma-extensions/bulma-checkradio.min.css" rel="stylesheet" type="text/css" />


    <!-- MAIN STYLESHEET -->
    <link defer href="https://www.techzone.com.my/catalog/view/theme/aio/stylesheet/aio.css?ver=1709874806" rel="stylesheet" type="text/css" />

    <!-- CAROUSEL -->
    <link defer href="https://www.techzone.com.my/catalog/view/theme/aio/plugins/carousel/slick.css" rel="stylesheet" type="text/css" />
    <link defer href="https://www.techzone.com.my/catalog/view/theme/aio/plugins/carousel/slick-theme.css" rel="stylesheet" type="text/css" />
    
    <!-- FONT AWESOME -->
    <link defer rel="stylesheet" href="https://www.techzone.com.my/catalog/view/theme/aio/stylesheet/fontawesome-5.6.3/css/all.min.css">
    
    <!-- MATERIAL DESIGN ICON -->
    <link defer rel="stylesheet" href="https://www.techzone.com.my/catalog/view/theme/aio/stylesheet/materialdesignicons-3.3.92/materialdesignicons.min.css">

	<!-- STAATLICHES -->
	<link defer rel="stylesheet" href="https://www.techzone.com.my/catalog/view/theme/aio/stylesheet/staatliches/staatliches.css">
    
    <!-- ANIMATION -->
    <link defer href="https://www.techzone.com.my/catalog/view/theme/aio/stylesheet/animate.css" rel="stylesheet" type="text/css" />

     <!-- BULMA CALENDAR -->
    <link defer href="https://www.techzone.com.my/catalog/view/theme/aio/plugins/bulma-calendar/bulma-calendar.min.css" rel="stylesheet" type="text/css" />

    <!-- JQUERY -->
    <script src="https://www.techzone.com.my/catalog/view/theme/aio/js/jquery-3.3.1.min.js"></script>
	<script defer type="text/javascript" src="https://www.techzone.com.my/catalog/view/javascript/jquery/ui/external/jquery.cookie.js"></script>
	
	<!-- TOTAL STORAGE -->
	<script defer type="text/javascript" src="https://www.techzone.com.my/catalog/view/javascript/jquery/jquery.total-storage.min.js"></script>
	
	<!-- FANCYBOX -->
	<link defer rel="stylesheet" href="https://www.techzone.com.my/catalog/view/theme/aio/plugins/fancybox3/jquery.fancybox.min.css">
	<script async src="https://www.techzone.com.my/catalog/view/theme/aio/plugins/fancybox3/jquery.fancybox.min.js"></script>
	
	<!-- ELEVATEZOOM -->
	<script async src="https://www.techzone.com.my/catalog/view/theme/aio/plugins/elevatezoom-plus/jquery.easing.min.js"></script>
	<script async src="https://www.techzone.com.my/catalog/view/theme/aio/plugins/elevatezoom-plus/jquery.mousewheel.js"></script>
	<script async src="https://www.techzone.com.my/catalog/view/theme/aio/plugins/elevatezoom-plus/jquery.ez-plus.js"></script>
	
	<!-- LAZYLOAD -->
	<script src="https://www.techzone.com.my/catalog/view/theme/aio/plugins/jquery.lazy-master/jquery.lazy.min.js"></script>
	<script src="https://www.techzone.com.my/catalog/view/theme/aio/plugins/jquery.lazy-master/jquery.lazy.plugins.min.js?ver=1.0"></script>
	
    
        
    <!-- GOOGLE RECAPTCHA -->
    <script defer async src='https://www.google.com/recaptcha/api.js'></script>

	 
	
    <!-- CUSTOMIZE -->
    <link defer id="customize_css" href="https://www.techzone.com.my/catalog/view/multi_store/techzone/aio_customize_css.css?ver=1709874806" rel="stylesheet" type="text/css" />
	
		
		<style>
	.btn-wishlist , .btn-compare {
		display: none;
	}
	</style>
		
	
	<!-- TITLE -->
    <title>Account Login</title>

			<script src="https://www.techzone.com.my/catalog/view/javascript/fbpixel-conversion-api.js"></script>
						
</head>
<body class="body-style wide  clamp-1">
<?php include"head.php"?>
				
									
        <!-- END HEADER -->
</script>
                

<section id="account-login" class="section container account-access">

	<div id="contents">
		
		<div id="main-content">
			
			<!-- LOGIN -->
			<div class="holder">
				<div id="login">
					<div class="account-access-header">
						<div class="title">Log in</div>
														<div class="title-message">New Customer? <a class="txt-interact txt-underline" href="register.php">Register here</a></div>
											</div>
					<!-- LOGIN FORM -->
					<form id="form1" name="form1" method="post" action="#">

						<div class="form-body">
							<!-- EMAIL -->
							<div class="field">
								<label class="label ">
									Email Address								</label>
								<div class="control">
									<input type="text" class="input" name="email" />
								</div>
							</div>
	
							<!-- PASSWORD -->
							<div class="field">
								<label class="label ">
									Password								</label>
								<div class="field has-addons">
									<div class="control addon-fix">
										<input type="password" class="input " name="password" />
									</div>
									<div class="control">
									<a class="button view-password"><i class="mdi mdi-eye-off"></i></a>
										</a>
									</div>							
								</div>
															</div>
						</div>
                        


						<div class="form-footer field">
							
							<input type="submit" class="button btn-login" name="loginbtn" value="Login"  />

							<!-- FORGOT PASSWORD -->
							<div class="forget-password">
								<a href="forgot_password.php" class="txt-interact txt-underline">Forgot password?</a>
							</div>

														<!-- //JUST FUNCTION NOTHING WITH DESIGN// -->
													</div>
					</form>

				</div>
            </div>
        </div>
		
		
    </div>

</section>



<!-- ###AIO### -->
        <!-- BACK TO TOP BUTTON -->
        <button onclick="backToTop()" id="backToTop" title="Back to top"><i class="fa fa-chevron-up"></i></button>

        <footer id="footer" class="footer ">
            
            <!-- ADD TO CART POPUP  -->
            <input type="hidden" id="current_product_id"/>
            <input type="hidden" id="config_cart_modal" value="1">
            <!-- YOU MIGHT NEED THIS APP -->
            <input type="hidden" id="you_might_need_this_status" value="0">

            <!-- FOOTER MODULES -->
            <div class="container">

               
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!-- END FOOTER MENU -->

                    <div id="newsletter_socialmedia" class="module-container" style="display:none;" >
                                                    <div id="newsletter">
                                <div class="title">Newsletter</div>
                                <!-- Begin MailChimp Signup Form -->






          


       
		
			
    </body>
	<script>
        document.addEventListener("DOMContentLoaded", function() {
            
            document.querySelector(".view-password").addEventListener("click", function() {
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
</html>


<?php

// Check if the form is submitted

if ( @ $_POST["loginbtn"] == "Login") 
{
    $con=mysqli_connect('localhost','root','','fyp',3306);

    mysqli_set_charset($con,"utf8");

    $x = $_POST["email"];
    $y = $_POST["password"];
    
		$a=mysqli_query ( $con,"SELECT * FROM user_information WHERE email  = '{$x}'AND password = '{$y}'");
    	$row =mysqli_fetch_array($a);

		if( empty($row))
        {
            echo '<script>alert("Invalid Password or Username");</script>';
            
        }
        else
        {
            echo'Username and Password is correct';
		    $_SESSION['name']=$row['name'];
			$_SESSION['ID'] = $row['ID'];
		echo "<script>window.location.href='main_page.php';</script>";
        }

        
}

?>              
