<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="">

<head>



    <!-- BULMA -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/bulma.css" rel="stylesheet"
        type="text/css" />
    <link defer href="catalog/view/theme/aio/plugins/bulma-extensions/bulma-checkradio.min.css" rel="stylesheet"
        type="text/css" />


    <!-- MAIN STYLESHEET -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/aio.css?ver=1713694294" rel="stylesheet"
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
        href="https://techzone.com.my/catalog/view/multi_store/techzone/aio_customize_css.css?ver=1713694294"
        rel="stylesheet" type="text/css" />




    <!-- TITLE -->
    <title>1st Player Black Sir II K7 | Side Printed Full RGB 104 Keys Gaming Keyboard (Blue/ Red Switch)</title>

    <script src="https://techzone.com.my/catalog/view/javascript/fbpixel-conversion-api.js"></script>

</head>

<body class="body-style wide  clamp-1">

    <?php include "head.php" ?>
    <!-- END HEADER -->


    <style>
        #product-product {
            max-width: 800px;
            width: 100%;


        }

        #product-product #main-content #product-frame .product-infos table tr td:first-child {
            width: 300px !important;
            opacity: 0.7;
        }

        #product-product #main-content #product-frame .product-infos {
            width: calc(100% - 350px);
            padding: 5px;
            padding-top: 0px;
        }
    </style>


    <section id="product-product" class="section content container per-row-4">





        <div id="main-content">
            <div class="holder">
                <!-- ###AIO### -->

                <!-- PRODUCT DETAILS -->
                <div id="product-frame">



                    <?php

                    include "data_connection.php";
                    if (isset($_GET["product_id"])) {

                        if (!isset($_SESSION["ID"])) {
                            echo "<script>alert('ERROR TO ADD PRODUCT(You need to login first!)');</script>";
                        }
                        $product_id = $_GET["product_id"];
                        $ID = $_SESSION["ID"];
                        $query = "SELECT * FROM product WHERE product_id='$product_id'";
                        $result = mysqli_query($connect, $query);
                        if ($result) {
                            foreach ($result as $row) { ?>


                                <!-- PRODUCT IMAGES -->
                                <div class="product-images ">

                                    <!-- MAIN IMAGE -->
                                    <div class="img-main">
                                        <img src="../image/<?php echo $row['image'] ?>" alt="" />

                                    </div>
                                </div>
                                <!-- PRODUCT INFOS -->
                                <div class="product-infos">

                                    <!-- PRODUCT NAME  & UTILITIES -->
                                    <div class="el_1">


                                        <!-- PRODUCT TITLE -->
                                        <div class="title"><?php echo $row['product_name'] ?>
                                        </div>
                                    </div>

                                    <!-- PRODUCT DETAILS -->
                                    <div class="el_2">
                                        <table class="product-details">
                                            <tr class="price">


                                                <td>
                                                    Price </td>
                                                <td>
                                                    <span class="price-new" id="price-new"><?php echo $row['price'] ?></span>
                                                    <span class="price-old" id="price-old"></span>
                                                </td>
                                            </tr>






                                            <!-- STOCK AVAILABILITY -->
                                            <tr class="availability">
                                                <td>Availability</td>
                                                <td>
                                                    <div style=" color:<?php echo ($row['stock'] < 1) ? 'red' : 'green'; ?>">
                                                        <?php echo ($row['stock'] < 1) ? 'Out of Stock' : 'In Stock'; ?>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- ESTIMATE SHIPPING -->



                                            <!-- CSS LINE-->
                                            <tr class="break-line">
                                                <td colspan="2">
                                                    <div></div>
                                                </td>
                                            </tr>

                                            <!-- OPTIONS -->

                                            <!-- QUANTITY INPUT -->
                                            <tr class="quantity">
                                                <td>
                                                    Quantity </td>
                                                <td>
                                                    <div class="input-group" style="width:150px">
                                                        <button type="button" class="button btn-number btn-minus" data-type="minus"
                                                            onclick="adjustQuantity(-1)">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="input" type="text" id="quantity" name="quantity" size="2"
                                                            value="1" />
                                                        <input type="hidden" id="product_id" name="product_id"
                                                            value="<?php echo $row['product_id']; ?>" />
                                                        <button type="button" class="button btn-number btn-plus" data-type="plus"
                                                            onclick="adjustQuantity(1)">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>


                                                </td>


                                            </tr>

                                            <!-- END QUANTITY -->
                                        </table>

                                        <span class="btn-add-cart">
                                            <?php if ($row['stock'] < 1): ?>
                                                <input type="button" value="Out of Stock" class="button" disabled>
                                            <?php else: 
                                                if(isset($_GET['build']))
                                                {
                                                    if($_GET['build'] == 1){
                                                        ?>
                                                    <a href="a_product.php?pid=<?php echo $row["product_id"]?>"><input type="button" value="Add Component" class="button"
                                                    fdprocessedid="rfl2z"></a>
                                                    <?php 
                                                    } else if($_GET['build'] == 2)
                                                    {?>
                                                    <a href="customization-confirm.php"><input type="button" value="Back to PC Builder" class="button"
                                                    fdprocessedid="rfl2z"></a>
                                                    <?php }
                                                }
                                                else{ 
                                                    ?>
                                                <input type="button" value="Add to Cart" class="button"
                                                    onclick="addToCart('<?php echo $row['product_id']; ?>')" fdprocessedid="rfl2z">
                                            <?php 
                                                } 
                                                endif; ?>
                                        </span>

                                        <script>
                                            var stockQuantity = 0;
                                            var cartQuantity = 0;

                                            function getStock(product_id) {
                                                var xhr = new XMLHttpRequest();
                                                xhr.open('GET', 'get_stock.php?product_id=' + product_id, true);
                                                xhr.onload = function () {
                                                    if (xhr.status === 200) {
                                                        var response = JSON.parse(xhr.responseText);
                                                        stockQuantity = response.stock;
                                                        console.log('Stock Quantity:', stockQuantity);
                                                    } else {
                                                        console.error('Failed to fetch stock quantity');
                                                    }
                                                };
                                                xhr.onerror = function () {
                                                    console.error('Network error');
                                                };
                                                xhr.send();
                                            }

                                            function getCartQuantity(product_id) {
                                                var xhr = new XMLHttpRequest();
                                                xhr.open('GET', 'get_cart_quantity.php?product_id=' + product_id, true);
                                                xhr.onload = function () {
                                                    if (xhr.status === 200) {
                                                        var response = JSON.parse(xhr.responseText);
                                                        cartQuantity = response.cart_quantity;
                                                        console.log('Cart Quantity:', cartQuantity);
                                                    } else {
                                                        console.error('Failed to fetch cart quantity');
                                                    }
                                                };
                                                xhr.onerror = function () {
                                                    console.error('Network error');
                                                };
                                                xhr.send();
                                            }

                                            function adjustQuantity(change) {
                                                var input = document.getElementById('quantity');
                                                var currentValue = parseInt(input.value);
                                                currentValue += change;
                                                if (currentValue < 1) currentValue = 1;  // Prevent negative quantities
                                                if (currentValue > stockQuantity - cartQuantity) {
                                                    alert('Quantity exceeds available stock! Current stock: ' + (stockQuantity - cartQuantity));
                                                    currentValue = stockQuantity - cartQuantity;
                                                }
                                                input.value = currentValue;
                                            }

                                            function addToCart(product_id) {
                                                var quantity = parseInt(document.getElementById('quantity').value);
                                                var cartqty = parseInt(cartQuantity);
                                                if (quantity + cartqty > stockQuantity) {
                                                    alert('Total quantity exceeds stock! Available stock: ' + (stockQuantity - cartQuantity));
                                                    return;
                                                }

                                                var xhr = new XMLHttpRequest();
                                                xhr.open('GET', 'addtocart_detail.php?product_id=' + product_id + '&quantity=' + quantity, true);
                                                xhr.onload = function () {
                                                    console.log(xhr.responseText);
                                                    alert('Product added to cart!');
                                                    window.location.reload();
                                                };
                                                xhr.onerror = function () {
                                                    alert('Request failed; please try again.');
                                                };
                                                xhr.send();
                                            }

                                            document.addEventListener('DOMContentLoaded', function () {
                                                var product_id = document.getElementById('product_id').value;
                                                getStock(product_id);
                                                getCartQuantity(product_id);
                                            });

                                           
                                        </script>

                                    </div>

                                    <!-- BUTTONS -->


                                </div>
                                <!-- END PRODUCT INFOS -->

                            </div>
                            <!-- END PRODUCT DETAILS -->



                            <!-- SOCIAL SHARING -->

                            <!-- PRODUCT TABS -->
                            <div class="tabs is-centered prod-desc-tab">
                                <ul>
                                    <!-- TOP -->
                                    <li class="tab-product">
                                        <a onclick="jumpTo('top')">
                                            <span>Product</span>
                                        </a>
                                    </li>

                                    <!-- DESCRIPTION -->
                                    <li class="tab-description is-active">
                                        <a href="#tab-description" onclick="jumpTo('tab-description')">
                                            <span>Description</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <!-- END PRODUCT TABS -->


                            <!-- ========== PRODUCT TABS CONTENT ========== -->

                            <!-- TABS DESCRIPTION -->
                            <div id="tab-description" class="tab-content is-active">
                                <div class="mobile-title">
                                    Description </div>



                                <div id="product-description">
                                    <?php echo $row['product_desc'] ?>
                                </div>

                            </div>




                            <!-- ========== END PRODUCT TABS CONTENT ========== -->


                        </div>
                    </div>
                    </div>

                    <!-- ###AIO### -->


                    <?php
                            }
                        }
                    }

                    ?>
















</body>

</html>