<!-- ###AIO### -->
<!-- //GOOGLE SCHEMA STATUS// -->

<!-- ###AIO### -->
<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="ready">

<head>




    <!-- BULMA -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/bulma.css" rel="stylesheet"
        type="text/css" />
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/bulma-extensions/bulma-checkradio.min.css"
        rel="stylesheet" type="text/css" />


    <!-- MAIN STYLESHEET -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/aio.css?ver=1712470628" rel="stylesheet"
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
        href="https://techzone.com.my/catalog/view/multi_store/techzone/aio_customize_css.css?ver=1712470628"
        rel="stylesheet" type="text/css" />




    <!-- TITLE -->
    <title>Memory Device On Sale | Tech Zone Computer</title>

    <script src="https://techzone.com.my/catalog/view/javascript/fbpixel-conversion-api.js"></script>

</head>
<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  background-color: #2196F3;
  padding: 10px;
}
</style>
<body class="body-style wide  clamp-1">
    <?php include "head.php" ?>

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
                            <ul>
                                <div class="container">
                                    <div class="row">
                                        <br />
                                        <h2 text-align="center">Product Filter</>
                                            <br />
                                            <div class="col-md-3">
                                                <div class="list-group">
                                                    <h3>Price</h3>
                                                    <input type="hidden" id="hidder_minimum_price" value="0" />
                                                    <input type="hidden" id="hidder_maximum_price" value="65000" />
                                                    <p id="price_show">500 -65000</p>
                                                    <div id="price_range"></div>
                                                </div>
                            </ul>
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
                            <ul class="categories style4">
                                <li>

                                    <div class="list-group">
                                        <?php
                                        $query = "SELECT DISTINCT p.brand_id, b.brand_name 
                FROM products p
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



                                </li>
                            </ul>

                        </div>

                    </div>

                </div>
            </div>
        </div>



        <div id="main-content">
            <div class="holder">
                <!-- ###AIO### -->

                <!-- CATEGORY HEADER -->
                <div class="category-header">

                    <!-- CATEGORY THUMB -->
                    <div class="category-thumb">
                        <div class="category-thumb-frame">
                            <img src="image/techzone/image/data/Untitled design (12).jpg" alt="Digital Memory" />
                        </div>
                        <div class="category-thumb-text">
                            Digital Memory </div>
                    </div>

                </div>
                <!-- END CATEGORY HEADER -->


                <div class="category-refine-search">
                    <div class="title">
                        Refine Search </div>
                    <div class="list-group">

                        <?php
                        $query2 = "SELECT DISTINCT p.category_id, c.category
                                            FROM products p 
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

                <div class="box module-product product-listing ">
						<div class="box-content">

                    </div>
                </div>
            </div>
        </div>
    </div>


    <style>
        #loading {
            text-align: center;
            background: url('loading.gif') no-repeat center;
            height: 150px;
        }
    </style>
    <script>
        $(document).ready(function () {
            filter_data();
            function filter_data() {
                $('.filter_data').html('<div id="loading" style=""</div>');
                var action = 'fetch_data';
                var minimum_price = $('#hidden_minimum_price').val();
                var maximum_price = $('#hidden_maximum_price').val();
                var brand = get_filter('brand');
                var category = get_filter('caterogy');
                $.ajax({
                    url: "fetch_data.php",
                    method: "POST",
                    data: {
                        action: action, minimum_price: minimum_price, maximum_price: maximum_price, brand: brand, category: category
                    },
                    success: function (data) {
                        $('.box').html(data);
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
        });
    </script>


</body>

</html>