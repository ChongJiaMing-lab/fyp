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



    <div id="modal-shipping-list" class="modal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title"></p>
                <button class="delete" aria-label="close"></button>
            </header>
            <section class="modal-card-body">
                <div class="loading"><img src="catalog/view/multi_store/techzone/loading.svg" /></div>
                <div class="show-list-country"></div>
            </section>
            <footer class="modal-card-foot"></footer>
        </div>
    </div>

    <section id="product-product" class="section content container per-row-4">

        <div id="contents">
            <div id="sidebar-left">
                <!-- ###AIO### -->
                <div class="holder">
                    <div class="module-container">
                        <!-- ###AIO### -->
                        <style>
                            #module-price-sort .box-content {
                                background-color: rgba(255, 255, 255, 1) !important;
                            }
                        </style>
                        <div id="module-price-sort" class="box utilities">

                            <div class="title">
                                Shop By Price </div>

                            <div class="box-content">
                                <div class="list-group">

                                    <input type="hidden" id="hidden_minimum_price" value="0" />
                                    <input type="hidden" id="hidden_maximum_price" value="20000" />
                                    <p id="price_show">150 -20000</p>
                                    <div id="price_range"></div>



                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="module-container">
                        <!-- ###AIO### -->
                        <style>
                            #module-category .box-content {
                                background-color: rgba(255, 255, 255, 1) !important;
                            }
                        </style>
                        <div id="module-category" class="box utilities">
                            <div class="title">Brand</div>
                            <div class="box-content">
                                <div class="list-group">
                                    <?php
                                    $query = "SELECT DISTINCT p.brand_id, b.brand_name 
                FROM product p
                INNER JOIN brand b ON p.brand_id = b.brand_id
                WHERE p.product_status ='1' 
                ORDER BY p.product_id DESC";
                                    $statement_brand = $connect->prepare($query); // Use a different variable for statement object
                                    $execute_result_brand = $statement_brand->execute(); // Execute the statement
                                    if ($execute_result_brand) {
                                        $result_brand = $statement_brand->get_result();
                                        foreach ($result_brand as $row) {
                                            ?>
                                            <div class="list-group-item checkbox">
                                                <label><input type="checkbox" class="common_selector brand"
                                                        value="<?php echo $row['brand_id']; ?>">
                                                    <?php echo $row['brand_name']; ?>
                                                </label>
                                            </div>

                                            <?php
                                        }
                                    } else {
                                        // Handle the case where execute() failed
                                        echo "Error executing query: " . $statement_brand->error;
                                    }
                                    ?>
                                </div>

                            </div>
                            <div class="title">Category</div>
                            <div class="box-content">
                                <div class="list-group">
                                    <?php
                                    $query2 = "SELECT DISTINCT p.category_id, c.category
                                            FROM product p 
                                            INNER JOIN category c ON p.category_id = c.category_id
                                            WHERE p.product_status ='1' 
                                            ORDER BY p.product_id DESC";

                                    $statement_category = $connect->prepare($query2); // Use a different variable for statement object
                                    $execute_result_category = $statement_category->execute(); // Execute the statement
                                    if ($execute_result_category) {
                                        $result_category = $statement_category->get_result();
                                        foreach ($result_category as $row) {
                                            ?>
                                            <div class="list-group-item checkbox">
                                                <label><input type="checkbox" class="common_selector category"
                                                        value="<?php echo $row['category_id']; ?>">
                                                    <?php echo $row['category']; ?>
                                                </label>
                                            </div>

                                            <?php
                                        }
                                    } else {
                                        // Handle the case where execute() failed
                                        echo "Error executing query: " . $statement_category->error;
                                    }
                                    ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>




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
                                        <td><div style=" color:<?php echo ($row['stock'] < 1) ? 'red' : 'green'; ?>">
                                            <?php echo ($row['stock'] < 1) ? 'Out of Stock' : 'In Stock'; ?>
                                        </div></td>
                                    </tr>

                                    <!-- ESTIMATE SHIPPING -->
                                    <tr class="shipping">
                                        <td>Shipping Fee</td>
                                        <td>
                                            <div>
                                                <span>Malaysia</span>
                                                <span>
                                                    <a onclick="show_list('129','Malaysia','1.40000000','2696');">
                                                        Starting from RM12.46 </a>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>


                                    <!-- CSS LINE-->
                                    <tr class="break-line">
                                        <td colspan="2">
                                            <div></div>
                                        </td>
                                    </tr>

                                    <!-- OPTIONS -->
                                   










                                            <?php
                                }
                            }
                        }

                        ?>





                              

                          

                          
                                    <!-- END OPTIONS -->


                                    <!-- QUANTITY -->

                                    <!-- QUANTITY INPUT -->
                                    <tr class="quantity">
                                        <td>
                                            Quantity </td>
                                        <td>
                                            <div class="input-group">
                                                <button type="button" class="button btn-number btn-minus"
                                                    data-type="minus">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="input" type="text" name="quantity" size="2" value="1" />
                                                <input type="hidden" name="product_id" size="2" value="2696" />
                                                <button type="button" class="button btn-number btn-plus"
                                                    data-type="plus">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>


                                        </td>
                                    </tr>

                                    <!-- END QUANTITY -->
                                </table>
                            </div>

                            <!-- BUTTONS -->
                            <div class="el_3">


                                <div class="floating-cart-button">
                                    <!--BUY NOW BUTTON-->
                                    <button id="btn-buynow" class="button">
                                        Buy Now </button>

                                    <div class="button add-cart" id="button-cart">

                                        <span class="icon-add-cart"></span>
                                        <span class="btn-add-cart">
                                            <input type="button" value="Add to Cart" class="button" />
                                        </span>
                                    </div>
                                </div>

                            </div>
                            <!-- END BUTTONS -->

                        </div>
                        <!-- END PRODUCT INFOS -->

                    </div>
                    <!-- END PRODUCT DETAILS -->



                    <!-- SOCIAL SHARING -->
                    <div id="social-sharing">
                    </div>

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

                            <li class="tab-review">
                                <a href="#tab-review" onclick="jumpTo('tab-review')">
                                    <span>Reviews (0)</span>
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

                        <div class="highlight">
                            <span class="icon-highlight">Highlight</span>
                            <div>

                            </div>
                        </div>

                        <div id="product-description">

                        </div>

                    </div>

                    <div id="tab-review" class="tab-content">
                        <div class="mobile-title">
                            Reviews (0) <div class="view-all">
                                view all </div>
                            <div class="view-back">
                                back </div>
                        </div>
                        <div class="total-rating">
                            <div class="score">
                                0 </div>
                            <div class="rating">
                                <span class="rate-0"></span>
                            </div>
                            <div class="count">0 reviews</div>
                            <div></div>
                        </div>
                        <div id="review"></div>
                    </div>



                    <!-- ========== END PRODUCT TABS CONTENT ========== -->


                </div>


                <!-- ###AIO### -->
                <div class="module-container">
                    <!-- ###AIO### -->

                    <style>
                        #module-recently-viewed {
                            background-color: ;
                        }
                    </style>
                    <div id="module-recently-viewed" class="box module-product ">

                        <div class="title">
                            Recently Viewed Products </div>

                        <div class="box-content">
                            <div>
                                <div class="frame">
                                    <div class="item-img">
                                        <a
                                            href="https://techzone.com.my/hyperx-alloy-elite-mechanical-cherry-mx-blue-brown-red-gaming-keyboard">
                                            <div class="image">




                                                <img class="first-img lazy"
                                                    src="https://techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg"
                                                    data-lazy="https://techzone.com.my/image/techzone/image/cache/data/all_product_images/product-990/Alloy Elite -1-420x280.jpg"
                                                    alt=" HyperX Alloy Elite Mechanical Cherry MX Red/Blue/Brown Gaming Keyboard" />


                                            </div>
                                        </a>
                                    </div>

                                    <div class="item-info">

                                        <div class="product-name">
                                            <a href="https://techzone.com.my/hyperx-alloy-elite-mechanical-cherry-mx-blue-brown-red-gaming-keyboard"
                                                title=" HyperX Alloy Elite Mechanical Cherry MX Red/Blue/Brown Gaming Keyboard">
                                                HyperX Alloy Elite Mechanical Cherry MX Red/Blue/Brown Gaming
                                                Keyboard</a>
                                        </div>

                                        <div class="price">
                                            <div class="price-new">RM699.00</div>
                                            <div class="price-old"></div>
                                        </div>

                                        <div class="rating">

                                        </div>

                                        <div class="floating-cart-button">

                                            <div class="button">
                                                <span class="icon-add-cart"></span>
                                                <span class="btn-add-cart">
                                                    <input type="button" value="Add to Cart"
                                                        onclick="addToCart('990');" />
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="frame">
                                    <div class="item-img">
                                        <a
                                            href="https://techzone.com.my/index.php?route=product/product&amp;product_id=691">
                                            <div class="image">




                                                <img class="first-img lazy"
                                                    src="https://techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg"
                                                    data-lazy="https://techzone.com.my/image/techzone/image/cache/data/all_product_images/product-691/029-420x280.jpg"
                                                    alt="CART 029 DRUM" />


                                            </div>
                                        </a>
                                    </div>

                                    <div class="item-info">

                                        <div class="product-name">
                                            <a href="https://techzone.com.my/index.php?route=product/product&amp;product_id=691"
                                                title="CART 029 DRUM">CART 029 DRUM</a>
                                        </div>

                                        <div class="price">
                                            <div class="price-new">RM270.70</div>
                                            <div class="price-old"></div>
                                        </div>

                                        <div class="rating">

                                        </div>

                                        <div class="floating-cart-button">

                                            <div class="button">
                                                <span class="icon-add-cart"></span>
                                                <span class="btn-add-cart">
                                                    <input type="button" value="Add to Cart"
                                                        onclick="addToCart('691');" />
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="frame">
                                    <div class="item-img">
                                        <a
                                            href="https://techzone.com.my/kingston-chinese-new-year-2023-cny-rabbit-year-64gb-flash-drive-dtcny23">
                                            <div class="image">




                                                <img class="first-img lazy"
                                                    src="https://techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg"
                                                    data-lazy="https://techzone.com.my/image/techzone/image/cache/data/all_product_images/product-2872/forfL3mk1672888134-420x280.jpg"
                                                    alt=" Kingston Chinese New Year 2023 CNY Rabbit Year 64GB Flash Drive DTCNY23" />


                                            </div>
                                        </a>
                                    </div>

                                    <div class="item-info">

                                        <div class="product-name">
                                            <a href="https://techzone.com.my/kingston-chinese-new-year-2023-cny-rabbit-year-64gb-flash-drive-dtcny23"
                                                title=" Kingston Chinese New Year 2023 CNY Rabbit Year 64GB Flash Drive DTCNY23">
                                                Kingston Chinese New Year 2023 CNY Rabbit Year 64GB Flash Drive
                                                DTCNY23</a>
                                        </div>

                                        <div class="price">
                                            <div class="price-new">RM99.00</div>
                                            <div class="price-old"></div>
                                        </div>

                                        <div class="rating">

                                        </div>

                                        <div class="floating-cart-button">

                                            <div class="button">
                                                <span class="icon-add-cart"></span>
                                                <span class="btn-add-cart">
                                                    <input type="button" value="Add to Cart"
                                                        onclick="addToCart('2872');" />
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="frame">
                                    <div class="item-img">
                                        <a
                                            href="https://techzone.com.my/index.php?route=product/product&amp;product_id=647">
                                            <div class="image">




                                                <img class="first-img lazy"
                                                    src="https://techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg"
                                                    data-lazy="https://techzone.com.my/image/techzone/image/cache/data/all_product_images/product-647/039-420x280.jpg"
                                                    alt="CART 039" />


                                            </div>
                                        </a>
                                    </div>

                                    <div class="item-info">

                                        <div class="product-name">
                                            <a href="https://techzone.com.my/index.php?route=product/product&amp;product_id=647"
                                                title="CART 039">CART 039</a>
                                        </div>

                                        <div class="price">
                                            <div class="price-new">RM709.40</div>
                                            <div class="price-old"></div>
                                        </div>

                                        <div class="rating">

                                        </div>

                                        <div class="floating-cart-button">

                                            <div class="button">
                                                <span class="icon-add-cart"></span>
                                                <span class="btn-add-cart">
                                                    <input type="button" value="Add to Cart"
                                                        onclick="addToCart('647');" />
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <script>
                        $(document).ready(function () {
                            filter_data();
                            function filter_data() {
                                $('.product-listing .box-content').html('<div id="loading"></div>');
                                var action = 'fetch_data';
                                var minimum_price = $('#hidden_minimum_price').val();
                                var maximum_price = $('#hidden_maximum_price').val();
                                var brand = get_filter('brand');
                                var category = get_filter('category');
                                $.ajax({
                                    url: "fetch_data.php",
                                    method: "POST",
                                    data: {
                                        action: action, minimum_price: minimum_price, maximum_price: maximum_price, brand: brand, category: category
                                    },
                                    success: function (data) {
                                        $('.product-listing .box-content').html(data);
                                    }
                                })


                            }

                            function get_filter(class_name) {
                                var filter = [];
                                $('.' + class_name + ':checked').each(function () {
                                    filter.push($(this).val());
                                });
                                return filter;
                            }

                            $('.common_selector').click(function () {
                                filter_data();
                            });

                            $('#price_range').slider({
                                range: true,
                                min: 150,
                                max: 20000,
                                values: [150, 20000],
                                step: 100,
                                stop: function (event, ui) {
                                    $('#price_show').html(ui.values[0] + '-' + ui.values[1]);
                                    $('#hidden_minimum_price').val(ui.values[0]);
                                    $('#hidden_maximum_price').val(ui.values[1]);
                                    filter_data();
                                }
                            });
                        });
                    </script>


</body>

</html>