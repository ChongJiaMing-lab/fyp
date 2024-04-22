
<!-- ###AIO### -->
<!-- ###AIO### -->
<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="ready">
<head>
	
	


        
    <!-- BULMA -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/bulma.css" rel="stylesheet" type="text/css" />
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/bulma-extensions/bulma-checkradio.min.css" rel="stylesheet" type="text/css" />


    <!-- MAIN STYLESHEET -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/aio.css?ver=1712139565" rel="stylesheet" type="text/css" />

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
    <link defer id="customize_css" href="https://techzone.com.my/catalog/view/multi_store/techzone/aio_customize_css.css?ver=1712139565" rel="stylesheet" type="text/css" />
	
		
		
	
	<!-- TITLE -->
    <title>Address Book</title>

			<script src="catalog/view/javascript/fbpixel-conversion-api.js"></script>
						
</head>

<body class="body-style wide  clamp-1">
<?php include"head.php"?>
	 


	
        <!-- END HEADER -->
<section id="account-address-form" class="section container myaccounts">



	<div id="contents">
		<div id="sidebar-left">
			 			<div class="sidebar-nav-list"></div>
		</div>

		<div id="main-content" class="address-form">
			
			<!-- address form -->
			<div class="holder">
				<div class="title">Edit my address</div>
				<div class="add-form">
                <form name="editfrm" method="post" action="" enctype="multipart/form-data">
						<div class="myaccount-content form-utility">
                        <?php
	$id = $_GET['ID'];
    $query = "SELECT * FROM user_address WHERE address_id='$id'";
    $result = mysqli_query($connect, $query);
    if($result)
    {
        foreach($result as $row)
        {?>
		<div class="field-group">
								

								
								<div class="field">
									<label class="label label-is-success">
										<span id="lastname-required" class="required"></span>
										 Name									</label>
									<div class="control">
										<input type="text" class="input " name="name" value="<?php echo $row['name']?>" />
                                       
									</div>
																	</div>
							</div>

							<!-- CONTACT -->
							<div class="field">
								<label class="label label-is-success">
									<span id="contact-required" class="required"></span>
									Contact	number							</label>
								<div class="control">
									<input type="text" class="input " name="contact_number" value="<?php echo $row['contact_number']?>" />
								</div>
															</div>
							
							<div class="field-group">
								
								
								
															</div>

							<div class="field-group">
								<!-- ADDRESS 1 -->
								<div id="address_1_display" class="field">
									<label class="label ">
										<span id="address_1-required" class="required"></span>
										Address 								</label>
									<div class="control">
										<input type="text" class="input " name="address" value="<?php echo $row['address']?>" />
									</div>
																	</div>

								<!-- ADDRESS 2 -->
																<!-- COUNTRY -->
                                                                                                    <div id="country_display" class="field">
                                        <label class="label label-is-success">
                                            <span id="country-required" class="required"></span>
                                            Country
                                        </label>
                                        <select name="country_id" class="">
                                            <?php
                                            // 用户当前选择的国家
                                            $selectedCountry = $row['country'];

                                            // 定义国家列表
                                            $countries = array(
                                                1 => "Malaysia",
                                                2 => "Singapore"
                                                // 添加更多国家...
                                            );

                                            // 循环遍历国家列表
                                            foreach ($countries as $countryId => $countryName) {
                                                // 检查当前国家是否与用户选择的国家匹配
                                                $selected = ($selectedCountry == $countryId) ? 'selected' : '';
                                                // 输出选项
                                                echo '<option value="' . $countryId . '" ' . $selected . '>' . $countryName . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>


								<!-- ZONE -->
								<div id="zone_display" class="field">
									<label class="label ">
										State									</label>
                                        <select name="zone_id"  name="state" value="<?php echo $row['state']?>" />
										
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
										<input type="text" class="input " name="city" value="<?php echo $row['city']?>" />
									</div>
																	</div>

								<!-- POSTCODE -->
								<div id="postcode_display" class="field">
									<label class="label ">
										<span id="postcode-required" class="required"></span>	
										Postcode									</label>
									<div class="control">
										<input type="text" class="input " name="postcode" value="<?php echo $row['postcode']?>" />
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
								<input type="submit" name="updatebtn"value="Save" class="button btn-action" />
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
if (isset($_GET['ID'])) {
    $id = mysqli_real_escape_string($connect, $_GET['ID']);
	
    $result = mysqli_query($connect, "SELECT * FROM user_address WHERE address_id='$id'");
	

    $row = mysqli_fetch_assoc($result);
} else {
    echo "user ID not provided.";
    exit();
}

if (isset($_POST['updatebtn'])) {
    
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $contact_number = mysqli_real_escape_string($connect, $_POST['contact_number']);
    $address = mysqli_real_escape_string($connect, $_POST['address']);
    $country = mysqli_real_escape_string($connect, $_POST['country_id']);
    $state = mysqli_real_escape_string($connect, $_POST['state']);
    $city = mysqli_real_escape_string($connect, $_POST['city']);
    $postcode = mysqli_real_escape_string($connect, $_POST['postcode']);
            
    $result = mysqli_query($connect, "UPDATE user_address SET 
                                        name='$name', 
                                        contact_number='$contact_number', 
                                        address='$address', 
                                        country='$country', 
                                        state='$state', 
                                        city='$city', 
                                        postcode='$postcode' 
                                        WHERE address_id='$id'");

    if (!$result && $result2) {
        die('Error: ' . mysqli_error($connect));
    } else {
		session_start();
		$ID = $_SESSION['ID'];
    echo '<script>alert("Record updated successfully");</script>';
    echo '<script>window.location.href = "view_address.php?ID=' . $ID. '";</script>'; 
    exit;
    }
}
?>
		