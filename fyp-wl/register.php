<?php include("data_connection.php")?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="ready">
<head>
	
   
        
	
    

        
    <!-- BULMA -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/bulma.css" rel="stylesheet" type="text/css" />
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/bulma-extensions/bulma-checkradio.min.css" rel="stylesheet" type="text/css" />


    <!-- MAIN STYLESHEET -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/aio.css?ver=1710049660" rel="stylesheet" type="text/css" />

    <!-- CAROUSEL -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/carousel/slick.css" rel="stylesheet" type="text/css" />
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/carousel/slick-theme.css" rel="stylesheet" type="text/css" />
    
    <!-- FONT AWESOME -->
    <link defer rel="stylesheet" href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/fontawesome-5.6.3/css/all.min.css">
    
    <!-- MATERIAL DESIGN ICON -->
    <link defer rel="stylesheet" href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/materialdesignicons-3.3.92/materialdesignicons.min.css">

	<!-- STAATLICHES -->
	<link defer rel="stylesheet" href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/staatliches/staatliches.css">
    
    <!-- ANIMATION -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/animate.css" rel="stylesheet" type="text/css" />

     <!-- BULMA CALENDAR -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/bulma-calendar/bulma-calendar.min.css" rel="stylesheet" type="text/css" />

    <!-- JQUERY -->
    <script src="https://techzone.com.my/catalog/view/theme/aio/js/jquery-3.3.1.min.js"></script>
	<script defer type="text/javascript" src="https://techzone.com.my/catalog/view/javascript/jquery/ui/external/jquery.cookie.js"></script>
	
	<!-- TOTAL STORAGE -->
	<script defer type="text/javascript" src="https://techzone.com.my/catalog/view/javascript/jquery/jquery.total-storage.min.js"></script>
	
	<!-- FANCYBOX -->
	<link defer rel="stylesheet" href="https://techzone.com.my/catalog/view/theme/aio/plugins/fancybox3/jquery.fancybox.min.css">
	<script async src="https://techzone.com.my/catalog/view/theme/aio/plugins/fancybox3/jquery.fancybox.min.js"></script>
	
	<!-- ELEVATEZOOM -->
	<script async src="https://techzone.com.my/catalog/view/theme/aio/plugins/elevatezoom-plus/jquery.easing.min.js"></script>
	<script async src="https://techzone.com.my/catalog/view/theme/aio/plugins/elevatezoom-plus/jquery.mousewheel.js"></script>
	<script async src="https://techzone.com.my/catalog/view/theme/aio/plugins/elevatezoom-plus/jquery.ez-plus.js"></script>
	
	<!-- LAZYLOAD -->
	<script src="https://techzone.com.my/catalog/view/theme/aio/plugins/jquery.lazy-master/jquery.lazy.min.js"></script>
	<script src="https://techzone.com.my/catalog/view/theme/aio/plugins/jquery.lazy-master/jquery.lazy.plugins.min.js?ver=1.0"></script>
	
    
        
    <!-- GOOGLE RECAPTCHA -->
    <script defer async src='https://www.google.com/recaptcha/api.js'></script>

	 
	
    <!-- CUSTOMIZE -->
    <link defer id="customize_css" href="https://techzone.com.my/catalog/view/multi_store/techzone/aio_customize_css.css?ver=1710049660" rel="stylesheet" type="text/css" />
	
		
		<style>
	.btn-wishlist , .btn-compare {
		display: none;
	}
	</style>
		
	
	<!-- TITLE -->
    <title>Register Account</title>

			<script src="https://techzone.com.my/catalog/view/javascript/fbpixel-conversion-api.js"></script>
						
</head>

<body class="body-style wide  clamp-1">
<?php include"head.php"?>
			
						
        

<section id="account-register" class="section container account-access">

    <div id="contents">
        
        <div id="main-content">
            <!-- Register-->

            <div class="holder">
			
				<div id="register">
				
					<div class="account-access-header">
						<div class="title">Register Account</div>
						<div class="title-message">Already have an account? <a class="txt-interact txt-underline" href="Login.php">Log in</a></div>
					</div>

					<form id="form1" name="form1" method="post" action="#">
						<input type="hidden" name="register_token" value="TVRjeE1EQXdOalF3T0E9PQ">
						<div class="form-body">




                                <!-- EMAIL -->
                                <div class="field">
								<label class="label ">
									Email Address								</label>
								<div class="control">
									<input type="text" class="input " name="email" value="" />
								</div>
																							</div>

							
								<!-- FIRST NAME -->
								<div class="field">
									<label class="label ">
										Name									</label>
									<div class="control">
										<input type="text" class="input " name="Name" value="" />
									</div>
																	</div>
	

							

							<!-- CONTACT NUMBER-->
							<div class="field">
								<label class="label ">
									Contact Number								</label>
								<div class="control">
									<input type="text" class="input " name="telephone" value="" />
								</div>
															</div>

							

							<!--  //CONFIG FOR DATE OF BIRTH DISPLAY// -->
							<div class="field-group">
																	<div class="field dob">
										<div class="month-input">
											<label class="label">
												Date of Birth											</label>
											<div class="control">
												<select id="dob_month" name="dob_month" class="" >
																											<option value="01">January</option>
																											<option value="02">February</option>
																											<option value="03">March</option>
																											<option value="04">April</option>
																											<option value="05">May</option>
																											<option value="06">Jun</option>
																											<option value="07">July</option>
																											<option value="08">August</option>
																											<option value="09">September</option>
																											<option value="10">October</option>
																											<option value="11">November</option>
																											<option value="12">December</option>
                                                                                </select>
											</div>
										</div>
										<div class="day-input">
											<label class="label">
												Day											</label>
											<div class="control">
												<input id="dob_day" name="dob_day"type='number' class="input " min="1" placeholder="DD" pattern="[0-9]" />
											</div>
										</div>
										<div class="year-input">
											<label class="label ">
												Year											</label>
											<div class="control">
												<input id="dob_year" name="dob_year"type='number' class="input " min="1869" placeholder="YYYY" pattern="[0-9]"/>
											</div>
										</div>
										<input type="hidden" class="input " id="birthday_date" readonly="readonly" name="birthday_date" value="">
																			</div>
								
								<!--  //CONFIG FOR GENDER DISPLAY// -->               
																	<div class="field radio gender">
										<label class="label">
											Gender										</label>
										<div class="control">
																						<div class="radio-item">
												<input class="is-checkradio" type="radio" id="male" name="gender" value="male" checked="checked" />
												<label for="male">Male</label>
											</div>
											<div class="radio-item">
												<input class="is-checkradio" type="radio" id="female" name="gender" value="female" />
												<label for="female">Female</label>
											</div>
																					</div>
									</div>
								 
							</div>

							<!--  //CONFIG FOR CUSTOMER GROUP// -->     
							<div class="field radio customer-group" style="display: none">
								<label class="label">
									Customer Group								</label>
								<div class="control">
																			<div class="radio-item">
											<input type="radio" class="is-checkradio" id="customer_group_id1" name="customer_group_id" value="1" id="customer_group_id1" checked="checked">
											<label for="customer_group_id1">Default</label>
										</div>
																	</div>
							</div>

							
															


							</div>

							<!-- PASSWORD -->
							<div class="field">
								<label class="label ">
									Password <span class="help-password"> *at least 4 characters</span>								</label>

								<div class="field has-addons">
									<div class="control addon-fix">
										<input type="password" class="input " name="password" value="" />
									</div>
									<div class="control">
										<a class="button view-password"><i class="mdi mdi-eye-off"></i></a>
									</div>
								</div>
															</div>

							<!-- MAILCHIMP -->
															<input type="hidden" name="newsletter" value="0" />
													</div>

						<div class="form-footer">
							
							<!-- RECAPTCHA SESSION --> 
							

							<div class="field">
								<input type="hidden" name="agree" value="1" />
								<input type="submit" id="btn_submit" name="register" value="Confirm Register" class="button" />
            					
							</div>

													</div>						
					</form>
				</div>
   
            </div>

        </div>
		
		
    </div>




</section>

    </body>
</html>  
 
<?php

if( @ $_POST["register"] == "Confirm Register")
{

$con=mysqli_connect('localhost','root','','pc_store',3306);
mysqli_set_charset($con,"utf8");

$a=$_POST["email"];
$b=$_POST["Name"];
$c=$_POST["telephone"];
$d=$_POST["dob_month"];
$e=$_POST["gender"];
$f=$_POST["password"];
$g=$_POST["dob_day"];
$h=$_POST["dob_year"];
$i=$g.'-'.$d.'-'.$h;

if(empty($a) || empty($b) || empty($c) || empty($d) || empty($e) || empty($f) ||empty($g) ||empty($h) )
{
	
	header('Location: Login.php') ;
}
else
{
	mysqli_query($con,"INSERT INTO user_information(email,name,contactnumber,dateofbirth,gender,password) VALUES('$a','$b','$c','$i','$e','$f')");
}





header('Location: Login.php') ;

}





?>

