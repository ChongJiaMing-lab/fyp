<!-- ###AIO### -->
<!-- ###AIO### -->
<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="ready">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<head>



    <!-- BULMA -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/bulma.css" rel="stylesheet"
        type="text/css" />
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/bulma-extensions/bulma-checkradio.min.css"
        rel="stylesheet" type="text/css" />


    <!-- MAIN STYLESHEET -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/aio.css?ver=1714014446" rel="stylesheet"
        type="text/css" />

    <!-- CAROUSEL -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/carousel/slick.css" rel="stylesheet"
        type="text/css" />
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/carousel/slick-theme.css" rel="stylesheet"
        type="text/css" />

    <!-- FONT AWESOME -->
    <link defer rel="stylesheet"
        href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/fontawesome-5.6.3/css/all.min.css">

    <!-- MATERIAL DESIGN ICON -->
    <link defer rel="stylesheet"
        href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/materialdesignicons-3.3.92/materialdesignicons.min.css">

    <!-- STAATLICHES -->
    <link defer rel="stylesheet"
        href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/staatliches/staatliches.css">

    <!-- ANIMATION -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/animate.css" rel="stylesheet"
        type="text/css" />

    <!-- BULMA CALENDAR -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/bulma-calendar/bulma-calendar.min.css"
        rel="stylesheet" type="text/css" />

    <!-- JQUERY -->
    <script src="https://techzone.com.my/catalog/view/theme/aio/js/jquery-3.3.1.min.js"></script>
    <script defer type="text/javascript"
        src="https://techzone.com.my/catalog/view/javascript/jquery/ui/external/jquery.cookie.js"></script>

    <!-- TOTAL STORAGE -->
    <script defer type="text/javascript"
        src="https://techzone.com.my/catalog/view/javascript/jquery/jquery.total-storage.min.js"></script>

    <!-- FANCYBOX -->
    <link defer rel="stylesheet"
        href="https://techzone.com.my/catalog/view/theme/aio/plugins/fancybox3/jquery.fancybox.min.css">
    <script async
        src="https://techzone.com.my/catalog/view/theme/aio/plugins/fancybox3/jquery.fancybox.min.js"></script>

    <!-- ELEVATEZOOM -->
    <script async
        src="https://techzone.com.my/catalog/view/theme/aio/plugins/elevatezoom-plus/jquery.easing.min.js"></script>
    <script async
        src="https://techzone.com.my/catalog/view/theme/aio/plugins/elevatezoom-plus/jquery.mousewheel.js"></script>
    <script async
        src="https://techzone.com.my/catalog/view/theme/aio/plugins/elevatezoom-plus/jquery.ez-plus.js"></script>

    <!-- LAZYLOAD -->
    <script src="https://techzone.com.my/catalog/view/theme/aio/plugins/jquery.lazy-master/jquery.lazy.min.js"></script>
    <script
        src="https://techzone.com.my/catalog/view/theme/aio/plugins/jquery.lazy-master/jquery.lazy.plugins.min.js?ver=1.0"></script>



    <!-- GOOGLE RECAPTCHA -->
    <script defer async src='https://www.google.com/recaptcha/api.js'></script>



    <!-- CUSTOMIZE -->
    <link defer id="customize_css"
        href="https://techzone.com.my/catalog/view/multi_store/techzone/aio_customize_css.css?ver=1714014446"
        rel="stylesheet" type="text/css" />




    <!-- TITLE -->
    <title>Order History</title>

    <script src="https://techzone.com.my/catalog/view/javascript/fbpixel-conversion-api.js"></script>

</head>

<style>
    #account-order-list .order-list .tab-content>div.is-active {
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
                                            <a href="change_password.php?ID=<?php echo $id; ?>">Change password</a>
                                        </li>
                                    </ul>
                                    <!-- MY ORDERS -->
                                <li class="item">
                                    <a href="order_detail.php?ID=<?php echo $id; ?>">My orders</a>
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

            <section id="checkout-cart" class="section content container">
                <div id="contents">
                    <div id="main-content">
                        <div class="holder">

                            <!-- LEFT PANEL -->
                            <div class="my-checkout-cart">

                                <!-- TOP -->
                                <form id="my-cart" action="..." method="post" enctype="multipart/form-data"
                                    style="width: 1000px;">
                                    <div id="my-checkout-list">

                                        <!-- TITLE & PRODUCT COUNT -->
                                        <div class="my-checkout-title title">
                                            <div>
                                                ORDER LIST </div>
                                            <div class="amount">
                                                <div class="product-count"></div>
                                            </div>
                                        </div>
                                        <?php
                                        $id = $_SESSION["ID"];
                                        $query = "SELECT * FROM cart_order_detail 
                                        INNER JOIN cart ON cart_order_detail.cart_id = cart.cart_id 
                                        INNER JOIN product ON cart.product_id = product.product_id 
                                        WHERE cart_order_detail.user_id = '$id' 
                                        GROUP BY order_datetime

                                        HAVING COUNT(*) > 1";
                                        $result = mysqli_query($connect, $query);
                                        $count = mysqli_num_rows($result);
                                        if ($result) {
                                            while ($row = mysqli_fetch_array($result)) {

                                                ?>
                                                <!-- CHECKOUT CART LISTING -->
                                                <div class="input-group"><?php echo $row['order_datetime'] ?></div>
                                               
                            <div class="my-checkout-listing" onclick="window.location='order_detail.php?order_datetime=<?php echo urlencode($row['order_datetime']); ?>&ID=<?php echo $id; ?>';">


                                                    <div class="columns is-mobile">
                                                        <!-- IMG -->
                                                        <div class="column is-2 product-image">
                                                            <a href=".."><img class="img-responsive"
                                                                    src="../image/<?php echo $row['image'] ?>" /></a>
                                                        </div>

                                                        <!-- INFO -->
                                                        <div class="column is-10">
                                                    <div class="columns is-mobile">
                                                        <div class="column is-5 product-info">

                                                            <!-- PRODUCT NAME -->
                                                            <a class="product-name"
                                                                href=""><?php echo $row['product_name'] ?></a>
                                                            <!-- VARIATIONS -->
                                                        </div>

                                                        <!-- UNIT PRICE -->
                                                        <div class="column is-3 product-price">RM<?php echo $row['total_amount'] ?>
                                                        </div>

                                                        <!-- QUANTITY -->
                                                        <div class="column is-3 product-price">QTY:<?php echo $row['qty'] ?>
                                                               
                                                           

                                                            <!-- DELETE -->
                                                            <div class="product-delete">
                                                               
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                    </div>

                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>


                                </form>
                                <!-- END TOP -->
                                <!-- BOTTOM -->
                                <div class="my-checkout-options">

                                    <div class="next-step">
                                        <div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END BOTTOM -->
                            </div>
                            <!-- END LEFT PANEL -->


                            <!-- RIGHT PANEL -->





            </section>


</body>

</html>