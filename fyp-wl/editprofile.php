
<!-- ###AIO### -->
<!-- ###AIO### -->
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
<?php include"head.php"?>
		
		
		
				
				
					

            
					
	
				
				
						
        <!-- END HEADER -->


<section id="account-edit" class="section container myaccounts">

	

	<div id="contents">
		<div id="sidebar-left">
			 			<div class="sidebar-nav-list"></div>
		</div>

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
					
						<div class="field-group">
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
															
															<div class="field radio">
									<label class="label">
										Gender									</label>
									<div class="control">
										<input type="text"name="gender" class="input txt-data" value="<?php echo $row['gender']?>" />
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
    // It seems like there's a mistake here. It should be $product_id instead of $id in the WHERE clause.
    $result = mysqli_query($connect, "SELECT * FROM user_information WHERE ID = '$product_id'");
    if ($row = mysqli_fetch_assoc($result)) {
        // Record found
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
    $gender = mysqli_real_escape_string($connect, $_POST['gender']);

    // Verify if email is already used by another user
    $verify_query = mysqli_query($connect, "SELECT * FROM user_information WHERE email = '$email' AND ID != '$product_id'");
    if (mysqli_num_rows($verify_query) > 0) {
        echo "<script>alert('The email has already been used. Please choose another email.');</script>";
    } else {
        // Proceed with update if email is not found in other records
        $result = mysqli_query($connect, "UPDATE user_information SET
                                          name = '$name', 
                                          email = '$email', 
                                          contactnumber = '$contactnumber',
                                          dateofbirth = '$dateofbirth',
                                          gender = '$gender'
                                          WHERE ID = '$product_id'");

        if (!$result) {
            die('Error: ' . mysqli_error($connect));
        } else {
            echo '<script>alert("Record updated successfully");</script>'; 
            echo "<script>window.location.href='myprofile.php';</script>";
        }
    }
}
?>



