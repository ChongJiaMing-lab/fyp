<!-- ###AIO### -->
<!-- ###AIO### -->
<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="ready">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<head>


        
    <!-- BULMA -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/bulma.css" rel="stylesheet" type="text/css" />
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/bulma-extensions/bulma-checkradio.min.css" rel="stylesheet" type="text/css" />


    <!-- MAIN STYLESHEET -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/aio.css?ver=1714014446" rel="stylesheet" type="text/css" />

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
    <link defer id="customize_css" href="https://techzone.com.my/catalog/view/multi_store/techzone/aio_customize_css.css?ver=1714014446" rel="stylesheet" type="text/css" />
	
		
		
	
	<!-- TITLE -->
    <title>Order History</title>

			<script src="https://techzone.com.my/catalog/view/javascript/fbpixel-conversion-api.js"></script>

</head>

<style>
    #account-order-list .order-list .tab-content > div.is-active {
    display: block;
}

</style>
<body class="body-style wide  clamp-1">
    <?php include "head.php" ?>
    <section id="account-order-list" class="section container myaccounts">



        <?php
        $id = $_GET['ID'];
        $query = "SELECT * FROM user_information WHERE ID='$id'";
        $query2 = "SELECT * FROM user_address WHERE customer_id='$id'";
        $result = mysqli_query($connect, $query);
        $result2 = mysqli_query($connect, $query2);
        if ($result && $result2) {

            if ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div id="contents">
                    <div id="sidebar-left">
                        <div class="sidebar-nav-list">
                            <ul class="nav-container">
                                <li class="item">
                                    <a class="txt-interactt is-active" href="myaccount.php?ID=<?php echo $id; ?>">My account</a>
                                    <ul class="item-container">
                                        <li class="sub">
                                            <a href="myprofile.php?ID=<?php echo $id; ?>">My profile</a>
                                        </li>
                                        <li class="sub">
                                            <a href="view_address.php?ID=<?php echo $id; ?>">My address</a>

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
                                <li class="item"><a href="...">My store credit</a></li>
                            </ul>
                        </div>
                    </div>
                    <?php
            }
        }
        ?>

            <div id="main-content" class="order">
                <!-- ORDER -->
                <div class="holder">
                    <div class="title">My orders</div>

                    <div class="order-list">
                        <div class="tabs">
                            <ul>
                                <li data-tab="tab-to-pay"><a>Processing</a></li>
                                <li data-tab="tab-to-ship"><a>Shiping</a></li>
                                <li data-tab="tab-completed"><a>Completed</a></li>
                                <li data-tab="tab-cancelled"><a>Cancelled</a></li>
                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="loading"></div>
                            <div data-content="tab-to-pay" class="is-active">
                                <div class="empty-product-listing">
                                    <span>
                                        
                                    </span>
                                </div>
                            </div>
                            <div data-content="tab-to-ship">
                                <div class="empty-product-listing">
                                    <span>
                                        Nothing to show here. 
                                        adssafas
                                    </span>
                                </div>
                            </div>
                            <div data-content="tab-completed">
                                <div class="empty-product-listing">
                                    <span>
                                        Nothing to show here. 
                                        as
                                        dasd
                                    </span>
                                </div>
                            </div>
                            <div data-content="tab-cancelled">
                                <div class="empty-product-listing">
                                    <span>
                                       <?php
                                        $id = $_GET["ID"];
                                        $query = "SELECT * ";
                                       ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    <script>
var currenttab = '';

$(document).on("click", ".order-list .pagination a", function() {
	$('.order-list .tab-content div[data-content="' + currenttab + '"]').load(this.href);
	return false; 
});

$(document).ready(function(){
	$('.order-list .tabs ul li').first().addClass('is-active');
    var activeTab = $('.order-list .tabs ul li').first().data('tab');
	currenttab = activeTab;
    $('.order-list .tab-content div[data-content="' + activeTab + '"]').addClass('is-active');
	getOrderajax(activeTab);
	getTotalOrdersAjax();
});

$('.order-list .tabs ul li').on('click', function() {
	var activeTab = $(this).data('tab');
	$('.order-list .tabs ul li').removeClass('is-active');
	$(this).addClass('is-active');
	currenttab = activeTab;
	$('.order-list .tab-content div').removeClass('is-active');
	$('.order-list .tab-content div[data-content="' + activeTab + '"]').addClass('is-active');
	getOrderajax(activeTab);
});




</script>

    </section>



</body>

</html>