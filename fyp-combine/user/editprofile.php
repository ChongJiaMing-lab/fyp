<?php include"head.php"?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="ready">
<head>
	 
       
        
    <!-- BULMA -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/bulma.css" rel="stylesheet" type="text/css" />
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/bulma-extensions/bulma-checkradio.min.css" rel="stylesheet" type="text/css" />


    <!-- MAIN STYLESHEET -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/aio.css?ver=1710132233" rel="stylesheet" type="text/css" />

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
    <link defer id="customize_css" href="https://techzone.com.my/catalog/view/multi_store/techzone/aio_customize_css.css?ver=1710132233" rel="stylesheet" type="text/css" />
	
		
		
	
	<!-- TITLE -->
    <title>My Account Information</title>

			<script src=https://techzone.com.my/catalog/view/javascript/fbpixel-conversion-api.js"></script>
						
</head>

<body class="body-style wide  clamp-1">

		
		
		
				
		<style>
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

.txt-interact {
    color: skyblue !important;
}
		</style>		
					

            
					
	
				
				
						
        <!-- END HEADER -->


<section id="account-edit" class="section container myaccounts">



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
					<a class="txt-interact is-active" href="myaccount.php?ID=<?php echo $id;?>">My account</a>
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
		<li class="item"><a href="...">My Voucher</a></li>
			<!-- MY REWARD POINT -->
	<li class="item"><a href="reward_point.php?ID=<?PHP echo $id;?>">My reward point</a></li>
			<!-- MY TRANSACTION -->
	<li class="item"><a  href="...">My store credit</a></li>
			</ul>
						</div>
		</div>
        <?php
        }
    }
    ?>	

		<div id="main-content" class="edit-account">
			
			<!--EDIT ACCOUNT -->
            <form name="editfrm" method="post" action="" enctype="multipart/form-data">
			<div class="holder">

				<div class="title">Edit Profile</div>
				

					<div class="myaccount-content form-utility">

						<div class="field-group">
							

                        <?php
	$id = $_GET['ID'];
    $query = "SELECT * FROM user_information WHERE ID='$id'";
    $result = mysqli_query($connect, $query);
    if($result)
    {
        foreach($result as $row)
        {?>
		<div class="field-group">
							
		<div class="field-group">
							<!--  NAME -->
							<div class="field">
								<label class="label">
									Name								</label>
								<div class="control">
									<input type="text" name="name" class="input txt-data" value="<?php echo $row['name']?>" />
								</div>
							</div>
						
						
						<!-- EMAIL ADDRESS -->
						<div class="field">
							<label class="label">
								Email address							</label>
							<div class="control">
								<input type="text" name="email"class="input txt-data" value="<?php echo $row['email']?>" />
							</div>
						</div>
					
						
							<!-- TELEPHONE -->
							<div class="field">
								<label class="label">
									Contact number								</label>
								<div class="control">
									<input type="text"name="contactnumber" class="input txt-data" value="<?php echo $row['contactnumber']?>" />
								</div>
							</div>

							

																								<!-- BIRTHDAY -->
									<div class="field">
										<label class="label">
											Date of Birth										</label>
										<div class="control">
											<input type="text"name="dateofbirth" class="input txt-data" value="<?php echo $row['dateofbirth']?>" />
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
                        <div class="buttons">
                        <input type="submit" name="updatebtn" value="Save" class="button btn-action" />
                        </div>
						
                        
				</form>
				
			</div>
		
		</div>
	</div>

</section>

			
    </body>
</html>

<?php

if (isset($_GET['ID'])) {
    $product_id = mysqli_real_escape_string($connect, $_GET['ID']);
   
    $result = mysqli_query($connect, "SELECT * FROM user_information WHERE ID = '$product_id'");
    if ($row = mysqli_fetch_assoc($result)) {
        
    } else {
        echo "No record found.";
        exit();
    }
} else {
    echo "Product ID not provided.";
    exit();
}

if (isset($_POST['updatebtn'])) {
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $contactnumber = mysqli_real_escape_string($connect, $_POST['contactnumber']);
    $dateofbirth = mysqli_real_escape_string($connect, $_POST['dateofbirth']);
 

   
    $verify_query = mysqli_query($connect, "SELECT * FROM user_information WHERE email = '$email' AND ID != '$product_id'");
    if (mysqli_num_rows($verify_query) > 0) {
        echo "<script>alert('The email has already been used. Please choose another email.');</script>";
    } else {
        
		$result = mysqli_query($connect, "UPDATE user_information SET
												 email = '$email', 
												 name = '$name', 
												 contactnumber = '$contactnumber',
												 dateofbirth = '$dateofbirth'
												 WHERE ID = '$product_id'");

        if (!$result) {
            die('Error: ' . mysqli_error($connect));
        } else {
            session_start();
            $ID = $_SESSION['ID'];
        echo '<script>alert("Record updated successfully");</script>';
        echo '<script>window.location.href = "myprofile.php?ID=' . $ID. '";</script>'; 
        exit;
        }
    }
}
?>



