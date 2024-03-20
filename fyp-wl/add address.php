<?php include("data_connection.php")

?>
<!-- ###AIO### -->
<!-- ###AIO### -->
<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="ready">
<head>
	
        
    <!-- BULMA -->
    <link defer href="https://www.techzone.com.my/catalog/view/theme/aio/stylesheet/bulma.css" rel="stylesheet" type="text/css" />
    <link defer href="https://www.techzone.com.my/catalog/view/theme/aio/plugins/bulma-extensions/bulma-checkradio.min.css" rel="stylesheet" type="text/css" />


    <!-- MAIN STYLESHEET -->
    <link defer href="https://www.techzone.com.my/catalog/view/theme/aio/stylesheet/aio.css?ver=1710769369" rel="stylesheet" type="text/css" />

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
    <link defer id="customize_css" href="https://www.techzone.com.my/catalog/view/multi_store/techzone/aio_customize_css.css?ver=1710769369" rel="stylesheet" type="text/css" />
	
		
		
	
	<!-- TITLE -->
    <title>Address Book</title>

			<script src="https://www.techzone.com.my/catalog/view/javascript/fbpixel-conversion-api.js"></script>
						
</head>

<body class="body-style wide  clamp-1">
<?php include"head.php"?>
		
							
        <!-- END HEADER -->
<section id="account-address-form" class="section container myaccounts">

<?php
	$id = $_GET['ID'];
    $query = "SELECT * FROM user_information WHERE ID='$id'";
    $result = mysqli_query($connect, $query);
    if($result)
    {
        foreach($result as $row)
        {?>
			<div id="contents">
		<div id="sidebar-left">
			 			<div class="sidebar-nav-list"></div>
		</div>

		<div id="main-content" class="address-form">
			
			<!-- address form -->
			<div class="holder">
				<div class="title">Insert new address</div>
				<div class="add-form">
                        <form id="form1"class="form-frame" name="form1" method="post" action="#">
						<div class="myaccount-content form-utility">
							
							<div class="field-group">
								

								
								<div class="field">
									<label class="label ">
										<span id="lastname-required" class="required"></span>
										 Name									</label>
									<div class="control">
										<input type="text" class="input " name="name" value="<?php echo $row['name']?>"readonly />
									</div>
																	</div>
							</div>

							<!-- CONTACT -->
							<div class="field">
								<label class="label ">
									<span id="contact-required" class="required"></span>
									Contact								</label>
								<div class="control">
									<input type="text" class="input " name="telephone" value="<?php echo $row['contactnumber']?>"readonly />
								</div>
															</div>
							
							<div class="field-group">
								<!-- COMPANY -->
																<!-- COMPANY ID -->
								
								<!-- TAX ID -->
															</div>

							<div class="field-group">
								<!-- ADDRESS 1 -->
								<div id="address_1_display" class="field">
									<label class="label ">
										<span id="address_1-required" class="required"></span>
										Address 1									</label>
									<div class="control">
										<input type="text" class="input " name="address_1" value="" />
									</div>
																	</div>

								<!-- ADDRESS 2 -->
																<!-- COUNTRY -->
								<div id="country_display" class="field">
									<label class="label label-is-success">
										<span id="country-required" class="required"></span>
										Country									</label>
									<select name="country_id" class="">
										<option value=""> --- Please Select --- </option>
																				
																				<option value="1" >Malaysia</option>
																				<option value="2" >Singapora</option>
																			</select>
																	</div>

								<!-- ZONE -->
								<div id="zone_display" class="field">
									<label class="label ">
										State									</label>
                                    <input type="text" class="input " name="zone_id" value="" /></select>
																	</div>

								<!-- CITY -->
								<div id="city_display" class="field">
									<label class="label ">
										<span id="city-required" class="required"></span>
										City									</label>
									<div class="control">
										<input type="text" class="input " name="city" value="" />
									</div>
																	</div>

								<!-- POSTCODE -->
								<div id="postcode_display" class="field">
									<label class="label ">
										<span id="postcode-required" class="required"></span>	
										Postcode									</label>
									<div class="control">
										<input type="text" class="input " name="postcode" value="" />
									</div>
																	</div>
							</div>

		<?php				
        }
     }
    else
    {
        echo"no records found :(";
    }
	?>

	
						  
							<!-- SUBMIT -->
							<div class="buttons">
								<input type="submit" name="savebtn"value="Save" class="button btn-action" />
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
if(isset($_POST["savebtn"]) && $_POST["savebtn"] == "Save") {

    $con = mysqli_connect('localhost', 'root', '', 'pc_store', 3306);
    mysqli_set_charset($con, "utf8");

    
	
    $a = $_POST["name"];
    $b = $_POST["telephone"];
    $c = $_POST["address_1"];
    $d = $_POST["country_id"];
    $e = $_POST["zone_id"];
    $f = $_POST["city"];
    $g = $_POST["postcode"];

     mysqli_query($con, "INSERT INTO user_information(name,contactnumber,address,country,state,city,postcode) VALUES ('$a', '$b', '$c','$d','$e','$f','$g')");
     
   

    
}
?>


		