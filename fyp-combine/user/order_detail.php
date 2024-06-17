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
        <style>
            .tab-content {
                border: 1px black solid;
                padding-top: 10px;

            }

            /* Styling for Address Container */
            .address-container {
                background-color: #ffffff;
                border-radius: 8px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                padding: 20px;
                margin-bottom: 20px;
            }

            .txt-info {
                margin-bottom: 10px;
                font-size: 16px;
                color: black;
                font-weight: bold;
            }

            /* Styling for Product Listings */
            .tab-content {
                padding: 20px;
                background-color: #ffffff;
                border-radius: 8px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .product-image img {
                width: 100%;
                max-width: 100px;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .product-info {
                padding: 20px;
            }

            .product-info a {
                color: #3498db;
                text-decoration: none;
                font-weight: bold;
            }

            .product-price {
                font-size: 18px;
                color: #16a085;
                font-weight: bold;
            }

            .product-quantity {
                padding: 20px;
            }

            .columns.is-mobile>.column.is-3 {
                flex: none;
                width: 30%;
            }

           
        </style>


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
                                    <a href="orderlist.php?ID=<?php echo $id; ?>">My orders</a>
                                </li>
                                <!-- MY COUPON -->
                                <li class="item"><a href="...">My Voucher</a></li>
                                <!-- MY REWARD POINT -->
                                <li class="item"><a href="reward_point.php?ID=<?PHP echo $id; ?>">My reward point</a></li>
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




                    <?php
                    if (isset($_GET['order_id'])) {
                        $order_id = $_GET['order_id'];

                        $query = "SELECT * FROM cart_order_detail 
                                           INNER JOIN cart ON cart_order_detail.cart_id = cart.cart_id 
                                           INNER JOIN product ON cart.product_id = product.product_id 
                                           WHERE cart_order_detail.order_id = '$order_id' ";

                        $query2 = "SELECT * FROM order_
                                           INNER JOIN user_address ON order_.address_id = user_address.address_id
                                           INNER JOIN user_information ON order_.user_id = user_information.ID
                                           WHERE order_.order_id = '$order_id'";

                        $result = mysqli_query($connect, $query);
                        $result2 = mysqli_query($connect, $query2);


                        if ($result) {
                            $row2 = mysqli_fetch_assoc($result2); ?>
                            <div class="title">Order #<?php echo $order_id ?></div>
                            <div class="myaccount-body">
                                <div class="address-container">
                                    <div class="txt-info">Name : <?php echo $row2['name'] ?></div>
                                    <div class="txt-info">Contact Number : <?php echo $row2['contact_number'] ?></div>
                                    <div class="txt-info">Address : <?php echo $row2['address'] ?></div>
                                    <div class="txt-info">Total payment : RM<?php echo $row2['total_amount'] ?></div>
                                    <div class="txt-info">Delivery Status : <?php echo $row2['delivery_status'] ?></div>
                                </div>

                                <div class="text-end"  style="text-align: right;>
                                    <form method="POST" action="generate_report.php?ID=<?php echo $row2['order_id']; ?>">
                                        <input type="hidden" name="order_id" value="<?php echo $row2["order_id"] ?>">
                                        <button type="submit" class="btn btn-success" name="order_receipt">Print
                                            Invoice</button>
                                    </form>
                                </div>
                            </div>


                            <div class="tab-content">
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    ?>

                                    <div data-content="tab-to-pay" class="is-active">

                                        <div class="columns is-mobile">
                                            <!-- IMG -->
                                            <div class="column is-2 product-image">
                                                <a href=".."><img class="img-responsive"
                                                        src="../image/<?php echo $row['image'] ?>"></a>
                                            </div>

                                            <!-- INFO -->
                                            <div class="column is-10">
                                                <div class="columns is-mobile">
                                                    <div class="column is-5 product-info" style="padding:50px">
                                                        <!-- PRODUCT NAME -->
                                                        <a class="product-name" href=""><?php echo $row['product_name'] ?></a>
                                                        <!-- VARIATIONS -->
                                                    </div>

                                                    <!-- UNIT PRICE -->
                                                    <div class="column is-3 product-price" style="padding:50px">
                                                        RM<?php echo $row['price'] ?></div>

                                                    <!-- QUANTITY -->
                                                    <div class="column is-3 product-price" style="padding:50px">

                                                        <a class="product-name" href="">QTY: <?php echo $row['qty'] ?></a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }

                        }
                    } else if (isset($_GET['build_order_id'])) { ?>
                                <div id="main-content" class="order">
                                    <!-- ORDER -->
                                    <div class="holder">

                                        <?php
                                        if (isset($_GET['build_order_id'])) {
                                            $order_id = $_GET['build_order_id'];
                                            $query = "SELECT * FROM build_order_detail WHERE order_id = $order_id";
                                            $query2 = "SELECT * FROM order_
                                               INNER JOIN user_address ON order_.address_id = user_address.address_id
                                               INNER JOIN user_information ON order_.user_id = user_information.ID
                                               WHERE order_.order_id = '$order_id'";


                                            $result = mysqli_query($connect, $query);
                                            $result2 = mysqli_query($connect, $query2);
                                            $row = mysqli_fetch_assoc($result);

                                            $build_id = $row['build_id'];
                                            $query3 = "SELECT * FROM pc_build WHERE build_id = $build_id";
                                            $result3 = mysqli_query($connect, $query3);
                                            $item = mysqli_num_rows($result3);
                                            $row3 = mysqli_fetch_array($result3);
                                            $chassis = isset($row3['chassis']) ? $row3['chassis'] : null;
                                            $motherboard = isset($row3['motherboard']) ? $row3['motherboard'] : null;
                                            $processor = isset($row3['processor']) ? $row3['processor'] : null;
                                            $graphic_card = isset($row3['graphic_card']) ? $row3['graphic_card'] : null;
                                            $ram1 = isset($row3['ram1']) ? $row3['ram1'] : null;
                                            $ram2 = isset($row3['ram2']) ? $row3['ram2'] : null;
                                            $memory = isset($row3['memory']) ? $row3['memory'] : null;
                                            $cooler = isset($row3['cooler']) ? $row3['cooler'] : null;
                                            $power_supply = isset($row3['power_supply']) ? $row3['power_supply'] : null;


                                            $row2 = mysqli_fetch_assoc($result2); ?>
                                            <div class="title">Order #<?php echo $order_id ?></div>
                                            <div class="myaccount-body">
                                                <div class="address-container">
                                                    <div class="txt-info">Name : <?php echo $row2['name'] ?></div>
                                                    <div class="txt-info">Contact Number : <?php echo $row2['contact_number'] ?>
                                                    </div>
                                                    <div class="txt-info">Address : <?php echo $row2['address'] ?></div>
                                                    <div class="txt-info">Total payment : RM<?php echo $row2['total_amount'] ?>
                                                    </div>
                                                    <div class="txt-info">Delivery Status : <?php echo $row2['delivery_status'] ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-content">
                                                <?php

                                                $i = 0;
                                                $total = 0;

                                                while ($i < mysqli_num_fields($result3)) {
                                                    $fld = mysqli_fetch_field($result3);
                                                    $myarray[] = $fld->name;

                                                    if ($i > 2) {
                                                        if (isset(${$myarray[$i]})) {
                                                            $query4 = mysqli_query($connect, "SELECT * FROM product WHERE product_id = ${$myarray[$i]}");
                                                            $row4 = mysqli_fetch_assoc($query4);
                                                            ?>

                                                            <div data-content="tab-to-pay" class="is-active">

                                                                <div class="columns is-mobile">
                                                                    <!-- IMG -->
                                                                    <div class="column is-2 product-image">
                                                                        <a href=".."><img class="img-responsive"
                                                                                src="../image/<?php echo $row4['image'] ?>"></a>
                                                                    </div>

                                                                    <!-- INFO -->
                                                                    <div class="column is-10">
                                                                        <div class="columns is-mobile">
                                                                            <div class="column is-5 product-info" style="padding:50px">
                                                                                <!-- PRODUCT NAME -->
                                                                                <a class="product-name"
                                                                                    href=""><?php echo $row4['product_name'] ?></a>
                                                                                <!-- VARIATIONS -->
                                                                            </div>

                                                                            <!-- UNIT PRICE -->
                                                                            <div class="column is-3 product-price" style="padding:50px">
                                                                                RM<?php echo $row4['price'] ?></div>

                                                                            <!-- QUANTITY -->
                                                                            <div class="column is-3 product-price" style="padding:50px">

                                                                                <a class="product-name" href="">QTY: 1</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php
                                                        }
                                                        $i = $i + 1;
                                                    } else {
                                                        $i = $i + 1;
                                                    }


                                                }
                                        }
                    }


                    ?>



                                    <div data-content="tab-cancelled">
                                        <div class="empty-product-listing">



                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>


    </section>



</body>

</html>