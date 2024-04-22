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
<style>
	.btn-wishlist , .btn-compare {

		display: none;
	}

	.title {
    color: black; 
	
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
	</style>			
							
        <!-- END HEADER -->
<section id="account-address-form" class="section container myaccounts">
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
							<a href="myaccount.php">Change password</a>
						</li>
						</ul>
						<!-- MY ORDERS -->
	<li class="item">
		<a href="...">My orders</a>
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
<?php
	$id = $_GET['ID'];
    $query = "SELECT * FROM user_information WHERE ID='$id'";
    $result = mysqli_query($connect, $query);
    if($result)
    {
        foreach($result as $row)
        {?>
			

			<div id="main-content" class="address-form">
			
			<!-- address form -->
			<div class="holder">
				<div class="title">Insert new address</div>
				<div class="add-form">
				<form id="form1"class="myaccount-body" method="post" enctype="multipart/form-data" >
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
							
							

		<?php				
        }
     }
    else
    {
        echo"no records found :(";
    }
	?>
		

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
																<option value="Malaysia" >Malaysia</option>
																				
																			</select>
																	</div>

								<!-- ZONE -->
								<div id="zone_display" class="field">
									<label class="label ">
										State									</label>
                                    <select name="zone_id" value="" >
									<option value="Johor" >Johor</option>
									<option value="Kedah" >Kedah</option>
									<option value="Kelantan" >Kelantan</option>
									<option value="Malacca" >Malacca</option>
									<option value="Negeri Sembilan" >Negeri Sembilan</option>
									<option value="Pahang" >Pahang</option>
									<option value="Penang" >Penang</option>
									<option value="Perak" >Perak</option>
									<option value="Perlis" >Perlis</option>
									<option value="Sabah" >Sabah</option>
									<option value="Sarawak" >Sarawak</option>
									<option value="Selangor" >Selangor</option>
									<option value="Terenggaru" >Terenggaru</option>
		
																				
																				</select>
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
	
						  
							<!-- SUBMIT -->
							<div class="buttons">
								<input type="submit" name="savebtn"value="Save" class="button btn-action" />
								</div>
								</div>
					</form>
				</div>
			</div>

		</div>

</section>




		

        
        
		
			
    </body>
</html>
<?php
if(isset($_POST["savebtn"]) && $_POST["savebtn"] == "Save") {

    $con = mysqli_connect('localhost', 'root', '', 'fyp', 3306);
    mysqli_set_charset($con, "utf8");

    
	
    $a = $_POST["name"];
    $b = $_POST["telephone"];
    $c = $_POST["address_1"];
    $d = $_POST["country_id"];
    $e = $_POST["zone_id"];
    $f = $_POST["city"];
    $g = $_POST["postcode"];
	$h = '0';

     mysqli_query($con, "INSERT INTO user_address(customer_id,name,contact_number,address,country,state,city,postcode,default_address) VALUES ('$id','$a', '$b', '$c','$d','$e','$f','$g','$h')");
     
	 session_start();
	 $ID = $_SESSION['ID'];
	echo '<script>alert("Record updated successfully");</script>';
	echo '<script>window.location.href = "view_address.php?ID=' . $ID. '";</script>'; 
	exit;

    
}
?>


		