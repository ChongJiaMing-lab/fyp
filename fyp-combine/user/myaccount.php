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

	</style>			
									
        <!-- END HEADER -->
</script>		
		
        
<section id="account-account" class="section container myaccounts">

	
    
	
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
	<a href="order_detail.php?ID=<?php echo $id;?>">My orders</a>
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

		<div id="main-content">
			<div class="holder">
				<div class="title">Overview</div>
				<div class="module-container">
					<div class="dashboard-profile">
						<div class="dashboard-frame">
							<div class="dashboard-title">
								<div class="sub-title">My profile</div>
								<?php
							 if( isset($_SESSION['ID']))
							 {
								?>
								<a class="edit-info txt-interactt txt-underline" href="editprofile.php?ID=<?php echo $row['ID']; ?>" class="button btn-action">Edit</a>
								<?php
							 }?>
								
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
					<?php
        {
			?>
			<?php
			 while ($row2 = mysqli_fetch_assoc($result2))
			 if ($row2['default_address'] == 1) {
			  {
				?>
					<div class="dashboard-address">
						<div class="dashboard-frame">
							<div class="dashboard-title">
								<div class="sub-title">My default addresses</div>
								<?php
							 if( isset($_SESSION['ID']))
							 {
								?>
								<a class="edit-info txt-interactt txt-underline" href="editaddress.php?ID=<?php echo $row2['address_id']; ?>" class="button btn-action">Edit</a>
								<?php
							 }?>
								
							</div>
							<div class="address-info txt-data">
								<div class="shipping-info-detail">
									
																		<div class="shipping-name"><div class="txt-data"><?php echo $row2['name']; ?></div></div>
																		<div class="shipping-telephone"><div class="txt-data"><?php echo $row2['contact_number']; ?></div></div>
																		<div class="shipping-address-1"><div class="txt-data"><?php echo $row2['country']; ?></div> </div>
																		<div class="shipping-address-1"><div class="txt-data"><?php echo $row2['address']; ?></div> </div>
																		<div class="shipping-address-1"><div class="txt-data"><?php echo $row2['city']; ?></div> </div>
																		<div class="shipping-address-1"><div class="txt-data"><?php echo $row2['state']; ?></div> </div>
																		<div class="shipping-address-1"><div class="txt-data"><?php echo $row2['postcode']; ?></div> </div>

									
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
	}
}
     }
    else
    {
        echo"no records found :(";
    }
	?>
							
														



		
        
       
		
			
    </body>
</html>

