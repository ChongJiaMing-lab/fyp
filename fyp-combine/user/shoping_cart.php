<?php include "head.php" ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="ready">

<head>


    <!-- BULMA -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/bulma.css" rel="stylesheet"
        type="text/css" />
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/bulma-extensions/bulma-checkradio.min.css"
        rel="stylesheet" type="text/css" />


    <!-- MAIN STYLESHEET -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/aio.css?ver=1712902977" rel="stylesheet"
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
        href="https://techzone.com.my/catalog/view/multi_store/techzone/aio_customize_css.css?ver=1712902977"
        rel="stylesheet" type="text/css" />

    <!-- TITLE -->
    <title>Shopping Cart</title>

    <script src="https://techzone.com.my/catalog/view/javascript/fbpixel-conversion-api.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body class="body-style wide  clamp-1">



    <style>
        .btn-wishlist,
        .btn-compare {

            display: none;
        }

        .title {
            color: black;

        }

        input.button.btn-login {
            background-color: black;
        }

        a.button.view-password {
            background-color: black;
        }

        .txt-interactt {
            color: skyblue !important;
        }

        .row {
            overflow: hidden;
            margin-top: 20px;
        }

        .card {
            display: table-row;
            width: 90%;
            background-color: #fff;
            color: #989898;
            margin-bottom: 10px;
            font-family: 'Oswald', sans-serif;
            text-transform: uppercase;
            border-radius: 4px;
            position: relative
        }

        .card+.card {
            margin-left: 2%
        }

        .date {
            display: table-cell;
            width: 25%;
            position: relative;
            text-align: center;
            border-right: 2px dashed #dadde6
        }

        .date:after {
            top: auto;
            bottom: -15px
        }

        .date time {
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        .date time span {
            display: block
        }

        .date time span:first-child {
            color: #2b2b2b;
            font-weight: 600;
            font-size: 250%
        }

        .date time span:last-child {
            text-transform: uppercase;
            font-weight: 600;
            margin-top: -10px
        }

        .card-cont {
            display: table-cell;
            width: 75%;
            font-size: 85%;
            padding: 10px 10px 30px 50px
        }

        .card-cont h3 {
            color: #3C3C3C;
            font-size: 130%
        }

        .card-cont>div {
            display: table-row
        }

        .card-cont .even-date i,
        .card-cont .even-info i,
        .card-cont .even-date time,
        .card-cont .even-info p {
            display: table-cell
        }

        .card-cont .even-date i,
        .card-cont .even-info i {
            padding: 5% 5% 0 0
        }

        .card-cont .even-info p {
            padding: 30px 50px 0 0
        }

        .card-cont .even-date time span {
            display: block
        }

        .date:before,
        .date:after {
            content: "";
            display: block;
            width: 30px;
            height: 30px;
            background-color: #DADDE6;
            position: absolute;
            top: -15px;
            right: -15px;
            z-index: 1;
            border-radius: 50%
        }

        .card-cont a {
            display: block;
            text-decoration: none;
            width: 80px;
            height: 30px;
            background-color: blue;
            color: #fff;
            text-align: center;
            line-height: 30px;
            border-radius: 2px;
            position: absolute;
            right: 10px;
            bottom: 10px
        }


        @media screen and (max-width: 860px) {
            .card {
                display: block;
                float: none;
                width: 100%;
                margin-bottom: 10px
            }

            .card+.card {
                margin-left: 0
            }

            .card-cont .even-date,
            .card-cont .even-info {
                font-size: 75%
            }
        }

        .modal-backdrop {
            display: none !important;
        }

        #checkout-cart .holder .my-order-summary .my-order-summary-list .field.has-addons button {
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            height: 100%;
            width: 100%;
            border: 1px solid #c7c7c7;
            background-color: orange;
        }

        .date {
            display: table-cell;
            width: 30%;
            position: relative;
            text-align: center;
            border-right: 2px dashed #dadde6;
        }
    </style>


    <!-- END HEADER -->
    <?php
    $id = $_SESSION["ID"];

    $result = mysqli_query($connect, "SELECT * FROM cart,product WHERE cart.product_id = product.product_id AND user_id = $id AND status!='payed'");
    $result1 = mysqli_query($connect, "SELECT * FROM cart,product WHERE cart.product_id = product.product_id AND user_id = $id AND status!='payed'");
    $count = mysqli_num_rows($result);
    ?>
    <section id="checkout-cart" class="section content container">
        <div id="contents">
            <div id="main-content">
                <div class="holder">

                    <!-- LEFT PANEL -->
                    <div class="my-checkout-cart">

                        <!-- TOP -->
                        <form id="my-cart" action="..." method="post" enctype="multipart/form-data">
                            <div id="my-checkout-list">




                                <!-- TITLE & PRODUCT COUNT -->
                                <div class="my-checkout-title title">
                                    <div>
                                        My Shopping Cart </div>
                                    <div class="amount">
                                        <div class="product-count"><?php echo $count ?></div>
                                    </div>
                                </div>
                                <?php
                                if ($result) {
                                    $delete = 0;
                                    while ($row = mysqli_fetch_array($result)) {



                                        if ($row['qty'] > $row['stock']) {

                                            $stock = $row['stock'];
                                            $cid = $row['cart_id'];
                                            if ($row['stock'] != 0) {
                                                mysqli_query($connect, "UPDATE cart SET qty = $stock WHERE cart_id =$cid");
                                            } else {
                                                mysqli_query($connect, "DELETE FROM cart WHERE cart_id =$cid");
                                            }
                                            $delete = 1;
                                        }
                                    }

                                    if ($delete == 1) {
                                        echo "<script>alert('your item quantity has been modify due to the stock limit.')</script>";

                                        echo "<script> window.location.href='shoping_cart.php';</script>";
                                        exit;
                                    }

                                    while ($row1 = mysqli_fetch_array($result1)) {
                                        ?>


                                        <!-- CHECKOUT CART LISTING -->
                                        <div class="my-checkout-listing">
                                            <div class="columns is-mobile ">
                                                <!-- IMG -->
                                                <div class="column is-2 product-image">
                                                    <a href=".."><img class="img-responsive"
                                                            src="../image/<?php echo $row1['image'] ?>" /></a>
                                                </div>

                                                <!-- INFO -->
                                                <div class="column is-10">
                                                    <div class="columns is-mobile">
                                                        <div class="column is-5 product-info">

                                                            <!-- PRODUCT NAME -->
                                                            <a class="product-name"
                                                                href=""><?php echo $row1['product_name'] ?></a>
                                                            <!-- VARIATIONS -->
                                                        </div>

                                                        <!-- UNIT PRICE -->
                                                        <div class="column is-3 product-price">RM<?php echo $row1['price'] ?>
                                                        </div>

                                                        <!-- QUANTITY -->
                                                        <div class="column is-4 product-quantity">

                                                            <div class="input-group">
                                                                <button type="button" id="quantity_0_minus"
                                                                    class="button btn-number btn-minus btn-default"
                                                                    data-type="minus" data-field="quantity[2659]">
                                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                                </button>

                                                                <input type="text" id="quantity_0"
                                                                    name="quantity[<?php echo $row1['cart_id']; ?>]"
                                                                    class="input-quantity" value="<?php echo $row1['qty'] ?>"
                                                                    min="1" max="999999"
                                                                    data-stock="<?php echo $row1['stock']; ?>">

                                                                <button type="button" id="quantity_0_plus"
                                                                    class="button btn-number btn-plus btn-default"
                                                                    data-type="plus" data-field="quantity[2659]">
                                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                                </button>
                                                            </div>


                                                            <!-- DELETE -->
                                                            <div class="product-delete">
                                                                <a href="Remove(cart).php?id=<?php echo $row1['product_id']; ?>"
                                                                    class="remove btn-del icon-delete"></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <?php
                                    }
                                } else {
                                    echo "no records found :(";
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
                    <div class="my-order-summary">

                        <div class="my-order-summary-list">

                            <div class="title">
                                Order Summary </div>


                            <!-- SUBTOTAL + TOTAL -->
                            <div class=" row-subtotal">
                                <div class="summary-title">
                                    Sub-Total </div>
                                <div class="summary-price"></div>
                            </div>
                            <div class="row-total">
                                <div class="summary-title">Total</div>
                                <div class="summary-price"></div>
                            </div>
                            <!-- #END SUBTOTAL + TOTAL -->

                            <!-- COUPON + VOUNCER -->
                            <form id="coupon-form" action="..." method="post" enctype="multipart/form-data">
                                <div class="field has-addons">
                                    <div class="control">
                                        <input type="text" id="vouncher-code" name='voucher_code'
                                            placeholder="Coupon Code" class="input coupon-code" value="" readonly>
                                    </div>
                                    <div class="control">

                                        <button id="btn_apply_coupon" type="button"
                                            class="button btn-coupon btn-default" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            Apply </button>
                                        <div class="modal fade v" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">

                                                        <?php
                                                        $r1 = mysqli_query($connect, "SELECT * FROM voucher WHERE user_id = $id AND v_status = 0");
                                                        while ($rw1 = mysqli_fetch_assoc($r1)) { ?>
                                                            <li class="flex-item">
                                                                <article class="card fl-left">
                                                                    <section class="date">
                                                                        <time>
                                                                            <?php $rate = $rw1["v_rate"] * 100; ?>
                                                                            <span><?php echo $rate ?></span><span>%</span>
                                                                        </time>
                                                                    </section>
                                                                    <section class="card-cont">
                                                                        <small>SKT PC</small>
                                                                        <h3></h3>
                                                                        <div class="even-date">
                                                                            <i class="fa fa-calendar"></i>
                                                                            <time>
                                                                                <span>&nbspGet a <?php echo $rate ?>% with
                                                                                    purchasing our product!</span>
                                                                                <span>&nbsp<?php echo $rw1['v_code'] ?></span>
                                                                            </time>
                                                                        </div>
                                                                    </section>
                                                                    <section class="card-cont">
                                                                        <input type="radio" name="voucher_option" id="r_v"
                                                                            data-v_code="<?php echo $rw1['v_code'] ?>"
                                                                            data-rate="<?php echo $rw1['v_rate'] ?>">
                                                                    </section>
                                                                </article>

                                                            </li>
                                                            <?php

                                                        }
                                                        ?>
                                                        </ul>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary"
                                                            style="width:100%;" id="saveChangesButton">Select
                                                            Vouncher</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            $(document).ready(function () {
                                                $('#saveChangesButton').click(function () {

                                                    var selected = $('input[name="voucher_option"]:checked');
                                                    var code = selected.data('v_code');
                                                    var rate = selected.data('rate');

                                                    $('input[name="voucher_code"]').val(code);
                                                    $('#exampleModal').modal('hide');

                                                    var btn = document.getElementById("my-order-checkout");
                                                    btn.addEventListener("click", function () {
                                                        window.location.href = 'payment-cart.php?ID=<?php echo $_SESSION['ID']; ?>&vid=' + code;
                                                    });
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>
                            </form>
                            <?php
                            if (isset($_SESSION['ID']) && $count != 0) { ?>
                                <button id="my-order-checkout" type="button" class="button btn-checkout">
                                    <?php
                            } else { ?>
                                    <button id="my-order-checkout" type="button" class="button btn-checkout"
                                        onclick="error_alert()">
                                        <?php
                                        
                            }
                            ?>
                                    <!-- CHECKOUT BUTTON -->

                                    PROCEED TO CHECKOUT </button>
                                <!-- #END CHECKOUT BUTTON -->

                        </div>
                    </div>
                    <!-- END RIGHT PANEL -->
                </div>
            </div>
        </div>
        <script>
            var btn = document.getElementById("my-order-checkout");
            btn.addEventListener("click", function () {
                window.location.href = 'payment-cart.php?ID=<?php echo $_SESSION['ID']; ?>'
            });

            document.addEventListener("DOMContentLoaded", function () {

                function calculateTotal() {

                    var productRows = document.querySelectorAll('.my-checkout-listing');

                    var subtotal = 0;
                    var total = 0;

                    productRows.forEach(function (row) {

                        var priceElement = row.querySelector('.product-price');
                        var quantityElement = row.querySelector('.input-quantity');

                        var price = parseFloat(priceElement.textContent.replace('RM', '').trim());
                        var quantity = parseInt(quantityElement.value);

                        var productSubtotal = price * quantity;

                        subtotal += productSubtotal;
                    });

                    total = subtotal;

                    var subtotalElement = document.querySelector('.row-subtotal .summary-price');
                    var totalElement = document.querySelector('.row-total .summary-price');
                    subtotalElement.textContent = 'RM' + subtotal.toFixed(2);
                    totalElement.textContent = 'RM' + total.toFixed(2);
                }

                var plusButtons = document.querySelectorAll('.btn-plus');
                var minusButtons = document.querySelectorAll('.btn-minus');

                plusButtons.forEach(function (button) {
                    button.addEventListener('click', function () {
                        var inputElement = button.parentElement.querySelector('.input-quantity');
                        var currentValue = parseInt(inputElement.value);
                        var cartId = inputElement.getAttribute('name').replace('quantity[', '').replace(']', '');
                        var stockQuantity = parseInt(inputElement.dataset.stock);
                        var newValue = currentValue + 1;
                        if (newValue <= stockQuantity) {
                            inputElement.value = newValue;
                            updateQuantityDatabase(cartId, newValue);
                        } else {
                            alert('Quantity exceeds stock! Current stock: ' + stockQuantity);
                        }
                        calculateTotal();
                    });
                });

                minusButtons.forEach(function (button) {
                    button.addEventListener('click', function () {
                        var inputElement = button.parentElement.querySelector('.input-quantity');
                        var currentValue = parseInt(inputElement.value);
                        var cartId = inputElement.getAttribute('name').replace('quantity[', '').replace(']', '');
                        if (currentValue > 1) {
                            var newValue = currentValue - 1;
                            inputElement.value = newValue;
                            updateQuantityDatabase(cartId, newValue);
                        }
                        calculateTotal();
                    });
                });

                function updateQuantityDatabase(cart_id, newValue) {
                    $.ajax({
                        url: 'update_cart.php',
                        method: 'POST',
                        data: {
                            cart_id: cart_id,
                            new_qty: newValue
                        },
                        success: function (response) {
                            alert("Record successfully updated");
                        }
                    });
                }

               
                calculateTotal();


            });

            function error_alert() {
                alert("Your shopping cart is empty!");
                
            }


          
        </script>

    </section>


</body>

</html>