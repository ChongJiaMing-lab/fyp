<?php include("data_connection.php");
session_start();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="">
<head>
	
 
        

        
    <!-- BULMA -->
    <link defer href="https://www.techzone.com.my/catalog/view/theme/aio/stylesheet/bulma.css" rel="stylesheet" type="text/css" />
    <link defer href="https://www.techzone.com.my/catalog/view/theme/aio/plugins/bulma-extensions/bulma-checkradio.min.css" rel="stylesheet" type="text/css" />


    <!-- MAIN STYLESHEET -->
    <link defer href="https://www.techzone.com.my/catalog/view/theme/aio/stylesheet/aio.css?ver=1710120688" rel="stylesheet" type="text/css" />

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
    <link defer id="customize_css" href="https://www.techzone.com.my/catalog/view/multi_store/techzone/aio_customize_css.css?ver=1710120688" rel="stylesheet" type="text/css" />
	
		
		<style>
	.btn-wishlist , .btn-compare {
		display: none;
	}
	</style>
		
	
	

			<script src="https://www.techzone.com.my/catalog/view/javascript/fbpixel-conversion-api.js"></script>
						
</head>

<body class="body-style wide  clamp-1">

		
		

		
			<div id="modal-checkout-cartmodal"></div>                        


	
	
	<div id="wrapper" class="clearfix">
        
        <!-- HEADER -->
        <div id="header" class="uni-head-1  ">
            <div class="container">
                <!-- BURGER - MAIN MENU -->
                <span id="burger-mainmenu" class="navbar-burger burger burger-mainmenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <div class="el_1">
                    <div class="holder">
                        <div id="logo" class="">
							<a href="...">
																														<img class="header-logo" src="..." title="fyp" alt="fyp" />
											
																					<img class="mobile-header-logo" src="..." title="fyp" alt="fyp" />
																						<img class="sticky-logo main-logo" src="..." title="fyp" alt="fyp" />
																					
															</a>
                        </div>
                    </div>
                </div>
                <div class="el_2">
                    <div class="holder">
                        <!-- NAVIGATION BAR -->
                        <div id="navi-bar" class="navbar-menu">
                            <div class="navbar">
    
                                                                                                            <a class="navbar-item" href="main_page.php" ><span>Home</span></a>
                                                                                                                                                <a class="navbar-item" href="..." ><span>Brands</span></a>
                                                                                                                                                <div class="navbar-item has-dropdown is-hoverable">
                                                                                                             
                                                                                                                                                
                                                                                                                            <a  class="navbar-link" href="product_list.php" ><span>Products</span></a>
											                                                                                <i class="accordion"></i>
                                                                                                                            <div class="navbar-dropdown">
                                                                                                                                                        <div class="sub-menu-dropdown navbar-item is-hoverable">    
														<a class="navbar-link is-arrowless" href="..." ><span>Gaming Products</span></a>
														<i class="accordion"></i>
                                                        <div class="navbar-dropdown">
                                                                                                                        <a class="navbar-item" href="..." ><span>Gaming Monitor</span></a>
                                                                                                                        <a class="navbar-item" href="..." ><span>Gaming RAM</span></a>
                                                                                                                        <a class="navbar-item" href="..." ><span>Gaming Keyboard</span></a>
                                                                                                                        <a class="navbar-item" href="..." ><span>Gaming Mouse</span></a>
                                                                                                                        <a class="navbar-item" href="..." ><span>Gaming Headest</span></a>
                                                                                                                        <a class="navbar-item" href="..." ><span>Gaming Accessories</span></a>
                                                                                                                    </div>
                                                    </div>
                                                                                                                                                                                                            <div class="sub-menu-dropdown navbar-item is-hoverable">    
														<a class="navbar-link is-arrowless" href="javascript:void(0)" ><span>PC Components</span></a>
														<i class="accordion"></i>
                                                        <div class="navbar-dropdown">
                                                                                                                        <a class="navbar-item" href="..." ><span>Processor</span></a>
                                                                                                                        <a class="navbar-item" href="..." ><span>RAM</span></a>
                                                                                                                        <a class="navbar-item" href="..." ><span>HDD / SSD</span></a>
                                                                                                                        <a class="navbar-item" href="..." ><span>PSU</span></a>
                                                                                                                        <a class="navbar-item" href="..." ><span>Casing</span></a>
                                                                                                                        <a class="navbar-item" href="..." ><span>Monitor</span></a>
                                                                                                                        <a class="navbar-item" href="..." ><span>Keyboard</span></a>
                                                                                                                        <a class="navbar-item" href="..." ><span>Mouse</span></a>
                                                                                                                    </div>
                                                    </div>
                                                                                                                                                                                                            <div class="sub-menu-dropdown navbar-item is-hoverable">    
														<a class="navbar-link is-arrowless" href="..." ><span>Audio</span></a>
														<i class="accordion"></i>
                                                        <div class="navbar-dropdown">
                                                                                                                        <a class="navbar-item" href="..." ><span>Headset</span></a>
                                                                                                                    </div>
                                                    </div>
                                                                                                                                                                                                                <a class="navbar-item" href="..." ><span>Power Bank</span></a>
                                                                                                                                                                                                                <a class="navbar-item" href="..." ><span>Memory Devices</span></a>
                                                                                                                                                                                                                <a class="navbar-item" href="..." ><span>Console Gaming</span></a>
                                                                                                                                                                                                                <a class="navbar-item" href="..." ><span>Ink &amp; Toner</span></a>
                                                                                                                                                                                                            <div class="sub-menu-dropdown navbar-item is-hoverable">    
														<a class="navbar-link is-arrowless" href="..." ><span>Smart Device</span></a>
														<i class="accordion"></i>
                                                        <div class="navbar-dropdown">
                                                                                                                        <a class="navbar-item" href="..." ><span>Smartwatch</span></a>
                                                                                                                    </div>
                                                    </div>
                                                                                                                                                </div>
                                        </div>                                                                                                  <a class="navbar-item" href="main_page.php" ><span>PCbuild</span></a>
                                                                                                                                                <?php
                                                                                                                                                if(isset($_SESSION['ID']))
                                                                                                                                                {?>
                                                                                                                                                   <a class="navbar-item" href="contact_us.php?ID=<?php echo $_SESSION['ID'];?>">Contact Us</a>
                                                                                                                                                 <?php   
                                                                                                                                                }
                                                                                                                                                else
                                                                                                                                                {?>
                                                                                                                                                    <a class="navbar-item" href="contact_us1.php" ><span>Contact Us</span></a>;
                                                                                                                                                    <?php
                                                                                                                                                }?>
                                                                                                                                                
                                                                                                                                                
                                                                                                                                               
                                                                                                                                                <a class="navbar-item" href="About_us.php" ><span>About Us</span></a>
                                                                                                </div>
                        </div>
                        <!-- END NAVIGATION BAR -->
                    </div>
                </div>
                
                <!-- SEARCH -->
                        <div id="search-toggle">
                    <div class="search-bar-container">
                        <a href="search.php"> 
                            <i class="mdi mdi-magnify"></i>
                        </a>   
                    </div>
                </div>
                
                
                <!-- CURRENCY SELECTION -->
                <!-- ###AIO### -->
                <div id="currency">
    <div class="dropdown is-right is-hoverable">
        <div class="dropdown-trigger">
            <a class="currency-dropdown" aria-haspopup="true">
                <span>MYR</span>
            </a>
        </div>
        <div class="dropdown-menu" role="menu">
            <div class="dropdown-content">
                <form action="https://www.techzone.com.my/index.php?route=module/currency" method="post" enctype="multipart/form-data" id="currency_form">
                                            <a class="dropdown-item" href="javascript:;" onclick="$('input[name=\'currency_code\']').attr('value', 'MYR'); $('#currency_form').submit();">
                            MYR                        </a>
                                        <input class="s_hidden" type="hidden" name="currency_code" value="" />
                    <input class="s_hidden" type="hidden" name="redirect" value="https://www.techzone.com.my/index.php?route=common/home" />
                </form>
            </div>
        </div>
    </div>
</div>

                <!-- SHOPPING CART -->
                <!-- ###AIO### -->

<div id="shopping-cart">
            <div id="checkout-cart">
            <span class="cart-info">
                0 item(s) RM0.00            </span>
            <i id="clickme" class="mdi mdi-cart"></i>
        </div>
        
        <div class="checkout-overlay"></div>

        <div class="shopping-cart-frame">
            <div  class="title">
                <span>Cart</span>
                <i id="btn-close-cart" onclick="closeSide()" class="mdi mdi-close"></i>
            </div>
                            <div class="empty-cart">
                    <div>
                        <i class="icon-empty-cart"></i>
                    </div>
                    <div>
                        Your shopping cart is empty!                    </div>
                </div>
                                </div>
        
    <div class="count-frame">
            </div>

   
    
</div>
                <!-- ACCOUNT -->
                <div id="myaccount">
                    <div class="dropdown is-right is-hoverable">
                        <div class="dropdown-trigger">
                            <a class="account-dropdown" aria-haspopup="true">
                                <i class="mdi mdi-account"></i>
                            </a>
                        </div>
                        <div class="dropdown-menu" role="menu">
                            <div class="dropdown-content">

                            <?php
                            if( isset($_SESSION['ID']))
                            {
                                
                                echo'<div class="dropdown-item">Hi,'.$_SESSION["name"].'</div>'; 
                                ?>   
                                <a class="dropdown-item" href="myaccount.php?ID=<?php echo $_SESSION['ID'];?>">My account</a>
                                <a class="dropdown-item mobile" href="...">My Profile</a>
                                <a class="dropdown-item mobile" href="...s">My Addresses</a>     
                                <a class="dropdown-item mobile" href="...">Change Password</a>       
                                <a class="dropdown-item" href="...">My Order</a>         
                                <a class="dropdown-item" href="...">My Reward Point</a>	
							    <a class="dropdown-item" href="..">My Store Credit</a> 		
								<a class="dropdown-item" href="Logout.php">Logout</a>
                                <?php
                            }
                            else
                            {?>
                                <a class="dropdown-item" href="Login.php">Login</a>
                            <?php   
                            }
                            ?>
                                                         </div>
                        </div>
                    </div>
                </div>

                <!-- CMS BLOCK -->
                <div id="cms_1" class="cms-block">
                    <div class="cms-content cms_1 ">
                        <div class="cms-icon">
                                                        <i class="fas fa-truck"></i>
                        </div>
                        <div class="cms-text">
                            <pre>Free Shipping</pre>                        </div>
                    </div>

                    <!-- CMS_2 DUPLICATE -->
                    <div class="cms-content cms_2 ">
                        <div class="cms-icon">
                                                        <i class="fas fa-headphones-alt"></i>
                        </div>
                        <div class="cms-text">03-456 7554</div>
                    </div>

                    <!-- CMS_3 DUPLICATE -->
                    <div class="cms-content cms_3 hidden">
                        <div class="cms-icon">
                                                        <i class="fas fa-headphones-alt"></i>
                        </div>
                        <div class="cms-text">03-456 7554</div>
                    </div>
                </div>

                <div id="cms_2" class="cms-block">
                    <div class="cms-content cms_2 ">
                        <div class="cms-icon">
                                                        <i class="fas fa-headphones-alt"></i>
                        </div>
                        <div class="cms-text"><pre>03-456 7554</pre></div>
                    </div>
                </div>
                
                <div id="cms_3" class="cms-block">
                    <div class="cms-content cms_3 hidden">
                        <div class="cms-icon">
                                                        <i class="fas fa-headphones-alt"></i>
                        </div>
                        <div class="cms-text"><pre>03-456 7554</pre></div>
                    </div>
                </div>
                <!-- END CMS BLOCK -->
                
                <div class="flex-divider-1"></div>
                <div class="flex-divider-2"></div>
            </div>
        </div>

        <!-- NOTIFICATION -->
		<div id="notification" class="modal">
			<div class="modal-background"></div>
			<div class="modal-card">
				<header class="modal-card-head">
					<button class="delete" aria-label="close"></button>
				</header>
				<section class="modal-card-body">
					<div class="notification-info"></div>
				</section>
				<footer class="modal-card-foot">
					<div class="buttons">
						<button type="button" class="button" onclick="closeModals();">Ok</button>
					</div>
				</footer>
			</div>
		</div>
		
       
</body>
</html>