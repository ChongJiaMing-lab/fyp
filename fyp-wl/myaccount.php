<?php include("data_connection.php");?>
<!-- ###AIO### -->
<!-- ###AIO### -->
<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="ready">
<head>
	
        
        
    <!-- BULMA -->
    <link defer href="https://techzone.com.my/https://techzone.com.my/catalog/view/theme/aio/stylesheet/bulma.css" rel="stylesheet" type="text/css" />
    <link defer href="https://techzone.com.my/https://techzone.com.my/catalog/view/theme/aio/plugins/bulma-extensions/bulma-checkradio.min.css" rel="stylesheet" type="text/css" />


    <!-- MAIN STYLESHEET -->
    <link defer href="https://techzone.com.my/https://techzone.com.my/catalog/view/theme/aio/stylesheet/aio.css?ver=1710131811" rel="stylesheet" type="text/css" />

    <!-- CAROUSEL -->
    <link defer href="https://techzone.com.my/https://techzone.com.my/catalog/view/theme/aio/plugins/carousel/slick.css" rel="stylesheet" type="text/css" />
    <link defer href="https://techzone.com.my/https://techzone.com.my/catalog/view/theme/aio/plugins/carousel/slick-theme.css" rel="stylesheet" type="text/css" />
    
    <!-- FONT AWESOME -->
    <link defer rel="stylesheet" href="https://techzone.com.my/https://techzone.com.my/catalog/view/theme/aio/stylesheet/fontawesome-5.6.3/css/all.min.css">
    
    <!-- MATERIAL DESIGN ICON -->
    <link defer rel="stylesheet" href="https://techzone.com.my/https://techzone.com.my/catalog/view/theme/aio/stylesheet/materialdesignicons-3.3.92/materialdesignicons.min.css">

	<!-- STAATLICHES -->
	<link defer rel="stylesheet" href="https://techzone.com.my/https://techzone.com.my/catalog/view/theme/aio/stylesheet/staatliches/staatliches.css">
    
    <!-- ANIMATION -->
    <link defer href="https://techzone.com.my/https://techzone.com.my/catalog/view/theme/aio/stylesheet/animate.css" rel="stylesheet" type="text/css" />

     <!-- BULMA CALENDAR -->
    <link defer href="https://techzone.com.my/https://techzone.com.my/catalog/view/theme/aio/plugins/bulma-calendar/bulma-calendar.min.css" rel="stylesheet" type="text/css" />

    <!-- JQUERY -->
    <script src="https://techzone.com.my/https://techzone.com.my/catalog/view/theme/aio/js/jquery-3.3.1.min.js"></script>
	<script defer type="text/javascript" src="https://techzone.com.my/https://techzone.com.my/catalog/view/javascript/jquery/ui/external/jquery.cookie.js"></script>
	
	<!-- TOTAL STORAGE -->
	<script defer type="text/javascript" src="https://techzone.com.my/https://techzone.com.my/catalog/view/javascript/jquery/jquery.total-storage.min.js"></script>
	
	<!-- FANCYBOX -->
	<link defer rel="stylesheet" href="https://techzone.com.my/https://techzone.com.my/catalog/view/theme/aio/plugins/fancybox3/jquery.fancybox.min.css">
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
    <link defer id="customize_css" href="https://techzone.com.my/catalog/view/multi_store/techzone/aio_customize_css.css?ver=1710131811" rel="stylesheet" type="text/css" />
	
		
		
	
	<!-- TITLE -->
    <title>My Account</title>

			<script src="https://techzone.com.my/catalog/view/javascript/fbpixel-conversion-api.js"></script>
						
</head>

<body class="body-style wide  clamp-1">
<?php include"head.php"?>
		
		
		
        
<section id="account-account" class="section container myaccounts">

	<!-- BREADCUMB -->
	<div id="breadcrumb">
		<nav class="breadcrumb" aria-label="breadcrumbs">
			<ul>
								<li>
					<a href="main_page.php">
						<span>Home</span>
					</a>
				</li>
								<li>
					<a href="myaccount.php">
						<span>Account</span>
					</a>
				</li>
							</ul>
		</nav>
	</div>
    
	
	<?php
	$id = $_GET['ID'];
    $query = "SELECT * FROM user_information WHERE ID='$id'";
    $result = mysqli_query($connect, $query);
    if($result)
    {
        foreach($result as $row)
        {?>
		<div id="sidebar-left">
		<div class="sidebar-nav-list">
			<ul class="nav-container">
				<li class="item">
					<a class="txt-interact is-active" href="...">My account</a>
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
			<div id="contents">
		<div id="sidebar-left">
			 			<div class="sidebar-nav-list"></div>
		</div>

		<div id="main-content">
			<div class="holder">
				<div class="title">Overview</div>
				<div class="module-container">
					<div class="dashboard-profile">
						<div class="dashboard-frame">
							<div class="dashboard-title">
								<div class="sub-title">My profile</div>
								<a class="edit-info txt-interact txt-underline" href="...">Edit</a>
							</div>
							<div class="profile-info">
								<div class="profile-info-detail">
									<div class="txt-info">Name</div>
									<div class="txt-data"><?php echo $row['name']?></div>
								</div>
								<div class="profile-info-detail">
									<div class="txt-info">Email</div>
									<div class="txt-data"><?php echo $row['email']?></div>
								</div>
							</div>
														
														
						</div>
					</div>
					<div class="dashboard-address">
						<div class="dashboard-frame">
							<div class="dashboard-title">
								<div class="sub-title">My default addresses</div>
								<a class="edit-info txt-interact txt-underline" href="https://www.techzone.com.my/address">Edit</a>
							</div>
							<div class="address-info txt-data">
								<div class="shipping-info-detail">
																		<div class="shipping-name">LAM LEONG</div>
																		<div class="shipping-address-1"> </div>
									<div class="shipping-address-2">   Albania</div>
									<div class="shipping-telephone">+1111157155</div>
																	</div>
							</div>
						</div>
					</div>
				</div>
			
								<div class="module-container">
					<div class="dashboard-recent-orders">
						<div class="dashboard-frame">
							<div class="dashboard-title">
								<div class="sub-title">Recent order</div>
							</div>
							<div class="order-listing">
																	<div>You haven't create an order yet. Check out our store now.</div>
															</div>
						</div>
					</div>
				</div>
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
                 

                    <!-- PAGE CONTENT FOOTER  -->
                    <div id="payment_method" class="module-container">
                                                                                    
    <div class="title">
            </div>
    <div>
            </div>
                                                                        </div>
                    <!-- END PAGE CONTENT FOOTER  -->
                </div>

                <div class="el_2">
                    <div id="el_2_logo">
						                    </div>
                    <div class="el_2_content">
                                            </div>
                </div>

                <div class="el_3">
                    <div id="additional_cms" class="module-container">
                        <div class="title"></div>
                                            </div>
                </div>
            </div>



            
        </footer>


            
         <!-- ==== SCRIPTS ==== -->
        <!-- JQUERY -->
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script defer type="text/javascript" src="catalog/view/theme/aio/js/jquery-ui-1.12.1.min.js"></script>        
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
        <script defer src="catalog/view/theme/aio/js/ui-control.js?ver=1710131811"></script>

		
        
       
		
			
    </body>
</html>

