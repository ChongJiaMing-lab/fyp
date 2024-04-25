
<!-- ###AIO### -->
<!-- ###AIO### -->
<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="ready">
<head>
	

        
    <!-- BULMA -->
    <link defer href="https://www.techzone.com.my/catalog/view/theme/aio/stylesheet/bulma.css" rel="stylesheet" type="text/css" />
    <link defer href="https://www.techzone.com.my/catalog/view/theme/aio/plugins/bulma-extensions/bulma-checkradio.min.css" rel="stylesheet" type="text/css" />


    <!-- MAIN STYLESHEET -->
    <link defer href="https://www.techzone.com.my/catalog/view/theme/aio/stylesheet/aio.css?ver=1710771093" rel="stylesheet" type="text/css" />

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
    <link defer href="https://www.techzone.com.my/catalog/view/theme/aio/js/jquery-3.3.1.min.js"></script>
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
    <link defer id="customize_css" href="https://www.techzone.com.my/catalog/view/multi_store/techzone/aio_customize_css.css?ver=1710771093" rel="stylesheet" type="text/css" />
	
		
		
	
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
<section id="account-address-list" class="section container myaccounts">

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
        <?php
        }
    }
    ?>	

		
			 			
		
        <div id="main-content" class="address-list">
            <!-- ADD NEW ADDRESS BUTTON -->
            

            <?php
            $id = $_GET['ID'];
			?>
			<div class="myaccount-header">
                <div class="title">Addresses</div>
                <a href="add_address.php?ID=<?php echo $id;?>" class="button btn-address">Add New Address</a>
            </div>
			<?php
            $query = "SELECT * FROM user_information WHERE ID='$id'";
            $query2 = "SELECT * FROM user_address WHERE customer_id='$id'";
            $result = mysqli_query($connect, $query);
            $result2 = mysqli_query($connect, $query2);
			

            if ($result && $result2) {
                // Fetch user information
                if ($row = mysqli_fetch_assoc($result)) {
                    $user_name = $row['name'];
                    $user_contactnumber = $row['contactnumber'];

                    // Display user addresses
                    while ($row2 = mysqli_fetch_assoc($result2)) {
                        ?>
                        <!-- ADDRESS ENTRY -->
                        <div class="holder">
                            <div class="myaccount-body">
                                <div class="address-container">
                                    <div class="address-info">
                                        <div class="address-name">
                                            <div class="txt-info">Name</div>
                                            <div class="txt-data"><?php echo $user_name; ?></div>
                                        </div>
                                        <div class="address-tel">
                                            <div class="txt-info">Contact</div>
                                            <div class="txt-data"><?php echo $user_contactnumber; ?></div>
                                        </div>
                                        <div class="address-add">
                                            <div class="txt-info">country</div>
                                            <div class="txt-data"><?php echo $row2['country']; ?></div>
                                        </div>
                                        <div class="address-add">
                                            <div class="txt-info">Address</div>
                                            <div class="txt-data"><?php echo $row2['address']; ?></div>
                                        </div>
                                        <div class="address-add">
                                            <div class="txt-info">city</div>
                                            <div class="txt-data"><?php echo $row2['city']; ?></div>
                                        </div>
                                        <div class="address-add">
                                            <div class="txt-info">state</div>
                                            <div class="txt-data"><?php echo $row2['state']; ?></div>
                                        </div>
                                        
                                        <div class="address-add">
                                            <div class="txt-info">postcod</div>
                                            <div class="txt-data"><?php echo $row2['postcode']; ?></div>
                                        </div>
										</div>
                                        <div class="address-btn" style= "padding:10px">
                                            <div class="address-btn-top">

                                                <div class="btn-group" >
                                                    <!-- EDIT BUTTON -->
                                                    
                                                    <?php
                                                   if( isset($_SESSION['ID']))
                                                   {
                                                      ?>
                                                      <a class="txt-interactt txt-underline edit-btn" href="editaddress.php?ID=<?php echo $row2['address_id']; ?>" class="button btn-action">Edit</a>
                                                      <?php
                                                   }?>
                                                    <!-- DELETE BUTTON -->
                                                    <a class="txt-interactt txt-underline delete-btn" href="...">Delete</a>
                                                    </div>
                                                </div>
                                           
                                            <div class="address-btn-bot">
                                            <a class="address-btn-default" href="#" onclick="setDefaultAddress(<?php echo $row2['address_id']; ?>)">Set as default billing</a>
                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        <?php
                    }
                }
            } else {
                echo "Error: " . mysqli_error($connect);
            }
            ?>
        </div>
    </div>
</section>
<script>
function setDefaultAddress(addressId) {
    // AJAX request
    $.ajax({
        url: 'set_default_address.php',
        type: 'POST',
        data: { address_id: addressId },
        success: function(response) {
            // Handle success
            alert('Default address set successfully.');
            // You can reload the page or update the UI as needed
        },
        error: function(xhr, status, error) {
            // Handle error
            alert('Error setting default address.');
        }
    });
}
</script>



    </body>
</html>