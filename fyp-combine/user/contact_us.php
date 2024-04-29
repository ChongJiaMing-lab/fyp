<?php include("data_connection.php")

?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="ready">
<head>
	
       

        
    <!-- BULMA -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/bulma.css" rel="stylesheet" type="text/css" />
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/bulma-extensions/bulma-checkradio.min.css" rel="stylesheet" type="text/css" />


    <!-- MAIN STYLESHEET -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/aio.css?ver=1710049568" rel="stylesheet" type="text/css" />

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
	<script async src="https://techzone.com.my/https://techzone.com.my/catalog/view/theme/aio/plugins/fancybox3/jquery.fancybox.min.js"></script>
	
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
    <link defer id="customize_css" href="https://techzone.com.my/catalog/view/multi_store/techzone/aio_customize_css.css?ver=1710049568" rel="stylesheet" type="text/css" />
	
		
		<style>
	.btn-wishlist , .btn-compare {
		display: none;
	}
	</style>
		
	
	<!-- TITLE -->
    <title>Contact Us</title>

			<script src="https://techzone.com.my/catalog/view/javascript/fbpixel-conversion-api.js"></script>
						
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
<section id="information-contact" class="section container page-form">

	
	
	<div id="contents">

		<div id="main-content">
		
			<div class="holder">
				<div class="module-container ">

					<div class="title">
						Contact Us					</div>

					<div class="company-detail-frame">
													<div class="company-detail-left">
								<p><iframe frameborder="0" height="450" src="//www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1020350.2731443095!2d101.30034755843263!3d2.5897948224724394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d1e56b9710cf4b%3A0x66b6b12b75469278!2z6ams5YWt55Sy5aSa5aqS5L2T5aSn5a2m!5e0!3m2!1szh-CN!2smy!4v1710667502492!5m2!1szh-CN!2smy" width="600"></iframe></p>
							</div>
						
													<div class="company-detail-right">
								<div class="sub-title">Company details</div>
								<div class="company-details-wrapper">
									<div class="company-store-name">SKT  COMPUTER SDN BHD</div>
									<div class="company-address">jALAN AYER KEROH LAMA <br />
                                    75450 BUKIT BERUANG,<br />
                                    MELAKA</div>

																			<div class="company-phone-number">1-300-80-0668</div>
																										</div>
							</div>
											</div>

                        
	<?php
	$id = $_GET['ID'];
    $query = "SELECT * FROM user_information WHERE ID='$id'";
    $result = mysqli_query($connect, $query);
    if($result)
    {
        foreach($result as $row)
        {?>
			<form id="form1"class="form-frame" name="form1" method="post" action="#">
			<input id="hidden_token" type="hidden" name="_token" value="TVRjeE1EQXdOak0yT0E9PQ">
			<div class="title">Get in touch with us</div>
            <!-- NAME -->
						<div class="field">
							<label class="label ">
								Name							</label>
							<div class="control">
								<input class="input " type="text" name="name" value ="<?php echo $row['name']?>"readonly />
							</div>
													</div>

						<!-- EMAIL -->
						<div class="field">
							<label class="label ">
								Email Address							</label>
							<div class="control">
								<input class="input " type="text" name="email" value ="<?php echo $row['email']?>"readonly />
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
	<!-- MESSAGE -->
	<div class="field">
							<label class="label ">
								Message							</label>
							<div class="control">
								<textarea class="textarea " type="text" name="enquiry" rows="4"/></textarea>
							</div>
													</div>

						<div class="field form-footer">
							
														<input type="submit" name="Sendbtn" value="Send" class="button" />
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

                <div class="el_1">
                 

           


            
         <!-- ==== SCRIPTS ==== -->
        <!-- JQUERY -->
        <script defer type="text/javascript" src="catalog/view/theme/aio/js/jquery-ui-1.12.1.min.js"></script>        
        <!-- CAROUSEL -->
        <script defer src="catalog/view/theme/aio/plugins/carousel/slick.min.js"></script>
		<!-- CLIPBOARD -->
		<script defer src="catalog/view/theme/aio/plugins/clipboard.min.js"></script>
        <!-- FUNCTIONS -->
        <script defer type="text/javascript" src="catalog/view/theme/aio/js/apps/notifyme.js"></script>
        <!-- SWEET ALERT -->
        <script defer src="catalog/view/theme/aio/plugins/sweetalert/sweetalert2.all.min.js"></script>
		<!-- PRINTTHIS -->
		<script defer src="catalog/view/theme/aio/plugins/printThis/printThis.js?ver=1.0"></script>
        <!-- FLATPICKR -->
        <link defer rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <script defer src="catalog/view/theme/aio/plugins/flatpickr.js?ver=1.0"></script>
        
        <!-- BULMA CALENDAR -->
        <script defer src="catalog/view/theme/aio/plugins/bulma-calendar/doc.js"></script>
        <script defer src="catalog/view/theme/aio/plugins/bulma-calendar/bulma-calendar.min.js"></script>
        <!-- <script defer src="catalog/view/theme/aio/plugins/bulma-calendar/main.js"></script> -->
        
		<!-- UI CONTROL SCRIPT -->
        <script defer src="catalog/view/theme/aio/js/ui-control.js?ver=1710049568"></script>

		
		
			
    </body>
</html>
<?php
if(isset($_POST["Sendbtn"]) && $_POST["Sendbtn"] == "Send") {

    $con = mysqli_connect('localhost', 'root', '', 'fyp', 3306);
    mysqli_set_charset($con, "utf8");

    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
	
    $a = $_POST["email"];
    $b = $_POST["name"];
    $c = $_POST["enquiry"];

    $result = mysqli_query($con, "INSERT INTO feedback(customer_id,email,name, message) VALUES ('$id', '$a', '$b', '$c')");

   

    if($result) {
        // If insertion was successful, redirect to another page
        echo "<script>window.location.href='success.php';</script>";
        exit(); // Make sure to stop execution after redirection
    } else {
        // If insertion failed, display an error message
        echo "Error: " . mysqli_error($con);
    }

    mysqli_close($con);
}



?>
