
<!-- ###AIO### -->
<!-- ###AIO### -->
<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="ready">
<head>    
    <!-- BULMA -->
    <link defer href="https://www.techzone.com.my/catalog/view/theme/aio/stylesheet/bulma.css" rel="stylesheet" type="text/css" />
    <link defer href="https://www.techzone.com.my/catalog/view/theme/aio/plugins/bulma-extensions/bulma-checkradio.min.css" rel="stylesheet" type="text/css" />


    <!-- MAIN STYLESHEET -->
    <link defer href="https://www.techzone.com.my/catalog/view/theme/aio/stylesheet/aio.css?ver=1710861150" rel="stylesheet" type="text/css" />

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
    <link defer id="customize_css" href="https://www.techzone.com.my/catalog/view/multi_store/techzone/aio_customize_css.css?ver=1710861150" rel="stylesheet" type="text/css" />
	
		
		
	
	<!-- TITLE -->
    <title>My Profile</title>

			<script src="https://www.techzone.com.my/catalog/view/javascript/fbpixel-conversion-api.js"></script>
						
</head>

<body class="body-style wide  clamp-1">
<?php include"head.php"?>
		
		
		
        <!-- END HEADER -->
<div id="modal-subscribe" class="modal">
	<div class="modal-background"></div>
	<div class="modal-card">
		<header class="modal-card-head">
			<p class="modal-card-title">Newsletter subscription</p>
			<button class="delete" aria-label="close"></button>
		</header>
		<section class="modal-card-body">
			<div class="subscribe-info">
				<p>Yes, I want to see more deal from  TECH ZONE COMPUTER SDN BHD</p>
				<form action="https://www.techzone.com.my/newsletter" method="post" id="subscribe-form" enctype="multipart/form-data">
					<input type="hidden" name="newsletter" value="1" id="newsletter" />
				</form>
			</div>
		</section>
		<footer class="modal-card-foot">
			<input type="button" onclick="submitSubscribe();" value="Subscribe" class="button" />
		</footer>
	</div>
</div>

<section id="account-view" class="section container myaccounts">
	
	

	<div id="contents">
		<div id="sidebar-left">
			 			<div class="sidebar-nav-list"></div>
		</div>

		<div id="main-content" class="edit-account">
			
			<!--VIEW ACCOUNT -->
			<div class="holder">
				<div class="title">My Profile</div>
				<div class="myaccount-body">
					<div class="myaccount-content form-utility">

						
                        <?php
	$id = $_GET['ID'];
    $query = "SELECT * FROM user_information WHERE ID='$id'";
    $result = mysqli_query($connect, $query);
    if($result)
    {
        foreach($result as $row)
        {?>
		<div class="field-group">
							

							<!--  NAME -->
							<div class="field">
								<label class="label">
									name								</label>
								<div class="control">
									<input type="text" class="input txt-data" value="<?php echo $row['name']?>" disabled/>
								</div>
							</div>
						</div>
						
						<!-- EMAIL ADDRESS -->
						<div class="field">
							<label class="label">
								Email address							</label>
							<div class="control">
								<input type="text" class="input txt-data" value="<?php echo $row['email']?>" disabled/>
							</div>
						</div>
					
						<div class="field-group">
							<!-- TELEPHONE -->
							<div class="field">
								<label class="label">
									Contact number								</label>
								<div class="control">
									<input type="text" class="input txt-data" value="<?php echo $row['contactnumber']?>" disabled/>
								</div>
							</div>

							

																								<!-- BIRTHDAY -->
									<div class="field">
										<label class="label">
											Date of Birth										</label>
										<div class="control">
											<input type="text" class="input txt-data" value="<?php echo $row['dateofbirth']?>" disabled/>
										</div>
									</div>
															
															<div class="field radio">
									<label class="label">
										Gender									</label>
									<div class="control">
										<input type="text" class="input txt-data" value="<?php echo $row['gender']?>" disabled/>
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
						<!-- EDIT -->
						<div class="buttons">
							<?php
							 if( isset($_SESSION['ID']))
							 {
								?>
								<a href="editprofile.php?ID=<?php echo $row['ID']; ?>" class="button btn-action">Edit profile</a>
								<?php
							 }?>
							 
						
					</div>
					</div>
				</div>
			</div>
		
		</div>
		
	</div>

</section>


    </body>
</html>