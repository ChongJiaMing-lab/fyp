<?php include "head.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Checkout</title>

    <style type="text/css">
        body {
            margin: 0;
            font-size: 17px;
        }

        * {
            box-sizing: border-box;
        }

        .header {
            text-align: center;
            padding: 15px 15px;
            margin: 0px;
            background-color: #3b426e;
            color: white;
            font-size: 1em;
        }

        .header a {
            color: white;
            text-decoration: none;
        }

        .header a:hover {
            color: #20c997;
            text-decoration: underline;
        }

        form {
            margin: 20px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -16px;
        }

        .col-75 {
            flex: 75%;
        }

        .col-70 {
            flex: 70%;
        }

        .col-50 {
            flex: 50%;
        }

        .col-25 {
            flex: 25%;
        }

        .col-15 {
            flex: 15%;
        }

        .col-75,
        .col-70,
        .col-50,
        .col-25,
        .col-15 {
            padding: 0 16px;
        }

        .containerr {
            background-color: white;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgrey;
            border-radius: 3px;
        }

        input[type=text] {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
            display: block;
        }

        .icon-container {
            padding: 7px 0;
            font-size: 24px;
        }

        span.pricee {
            float: right;
            color: grey;
        }

        button {
            display: flex;
            margin-left: auto;
            font-size: 15px;
        }

        .valid {
            display: flex;
        }

        .valid input[type="text"] {
            width: 50%;
        }

        .slash {
            margin: 0px 10px;
        }

        .flex-container {
            display: block;
            padding: 0;
        }

        .flex-item {
            display: flex;

        }

        .flex-item input[type="radio"] {
            margin-right: 10px;
        }

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

        .body-style button,
        .body-style .button {
            border-radius: 0px;
            text-transform: capitalize;
            background-color: skyblue !important;
            color: black;
        }

        
    </style>
</head>

<body>

    <form method='post' name="billfrm">
        <div class="title">
            Checkout </div>
        <hr>
        <div class="row">
            <div class="col-75">
                <div class="containerr">
                    <div class="row">
                        <div class="col-50">
                            <h3>Billing Details</h3>
                            <?php
                            $id = $_GET['ID'];

                            $query = "SELECT * FROM user_information WHERE ID='$id'";
                            $query2 = "SELECT * FROM user_address WHERE customer_id='$id' AND default_address = '1' ";
                            $result = mysqli_query($connect, $query);
                            $result2 = mysqli_query($connect, $query2);
                            $row2 = mysqli_fetch_assoc($result2);
                            if ($result && $result2) {
                                if ($row = mysqli_fetch_assoc($result)) { ?>




                                    <?php
                                    foreach ($result as $row) { ?>

                                        <?php
                                        if (isset($_GET['cart_id'])) { ?>
                                            <br>Address :
                                            <br><input type="text" name="address" placeholder="No.00, Jalan xxx, Taman xxx"
                                                autocomplete="off"></br>

                                            <?php
                                        } else { ?>
                                            <br>Full Name :
                                            <br><input type="text" name="name" value="<?php echo $row2['name'] ?>" readonly
                                                autocomplete="off"></br>

                                            <br>Phone Number :
                                            <br><input type="text" name="telephone" value="<?php echo $row2['contact_number'] ?>"
                                                readonly autocomplete="off"></br>

                                            <br>Address :
                                            <br><input type="text" name="address" value="<?php echo $row2['address'] ?>" readonly
                                                autocomplete="off"></br>
                                            <div class="row">
                                                <div class="col-25">
                                                    <br>City :
                                                    <br><input type="text" name="city" value="<?php echo $row2['city'] ?>" readonly
                                                        autocomplete="off"></br>
                                                </div>
                                                <div class="col-25">
                                                    <br>State :
                                                    <br><input type="text" name="state" value="<?php echo $row2['state'] ?>" readonly
                                                        autocomplete="off"></br>
                                                </div>
                                                <div class="col-25">
                                                    <br>Postcode :
                                                    <br><input type="text" name="postcode" value="<?php echo $row2['postcode'] ?>"
                                                        readonly autocomplete="off"></br>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>


                                        <div class="row">
                                            <div class="col-50">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    Change
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body">

                                                                <?php
                                                                $id = $_GET['ID'];
                                                                $query = "SELECT * FROM user_address WHERE customer_id='$id' AND status = 1";
                                                                $result = mysqli_query($connect, $query); ?>

                                                                <ul class="flex-container longhand">
                                                                    <?php while ($row = mysqli_fetch_assoc($result)) {

                                                                        ?>
                                                                        <li class="flex-item">
                                                                            <input type="radio" name="address_option"
                                                                                data-name="<?php echo ($row['name']); ?>"
                                                                                data-telephone="<?php echo ($row['contact_number']); ?>"
                                                                                data-address="<?php echo ($row['address']); ?>"
                                                                                data-city="<?php echo ($row['city']); ?>"
                                                                                data-state="<?php echo ($row['state']); ?>"
                                                                                data-postcode="<?php echo ($row['postcode']); ?>"
                                                                                data-a_id="<?php echo ($row['address_id']); ?>"
                                                                                id="<?php echo ($row['address_id']); ?>">
                                                                            <label for="<?php echo ($row['address_id']); ?>">
                                                                                <strong><?php echo ($row['name'] . ' - ' . $row['contact_number']); ?></strong><br>
                                                                                <?php echo ($row['address'] . ', ' . $row['postcode'] . ', ' . $row['city'] . ', ' . $row['state']); ?>
                                                                            </label>
                                                                        </li>
                                                                        <?php
                                                                        $address_id = $row['address_id'];
                                                                        $count++;
                                                                    } ?>
                                                                </ul>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary"
                                                                    id="saveChangesButton">Save Changes</button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        $(document).ready(function () {
                                            $('#saveChangesButton').click(function () {

                                                var selected = $('input[name="address_option"]:checked');

                                                var name = selected.data('name');
                                                var telephone = selected.data('telephone');
                                                var address = selected.data('address');
                                                var city = selected.data('city');
                                                var state = selected.data('state');
                                                var postcode = selected.data('postcode');
                                                var a_id = selected.data('a_id');
                                                createCookie("address_id", a_id, "10");
                                                $('input[name="name"]').val(name);
                                                $('input[name="telephone"]').val(telephone);
                                                $('input[name="address"]').val(address);
                                                $('input[name="city"]').val(city);
                                                $('input[name="state"]').val(state);
                                                $('input[name="postcode"]').val(postcode);


                                                $('#exampleModal').modal('hide');
                                            });
                                        });

                                        function createCookie(name, value, days) {
                                            var expires;
                                            if (days) {
                                                var date = new Date();
                                                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                                                expires = "; expires=" + date.toGMTString();
                                            }
                                            else {
                                                expires = "";
                                            }
                                            document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
                                        }
                                    </script>
                                    <div class="col-50">
                                        <br>Accepted Payment method
                                        <div class="icon-container">
                                            <i class="fa fa-cc-visa" name="Credit_Cart" style="color:navy;"></i>
                                            <i class="fa fa-cc-mastercard" name="Credit_Cart" style="color:red;"></i>
                                        </div>
                                        <br>Name on card
                                        <br><input type="text" class="required" id="NameCard" name="NameCard" placeholder="ALI"
                                            autocomplete="off"></br>
                                        <br>Card Number
                                        <br><input type="text" class="required" id="numCard" name="numCard"
                                            placeholder="1111 1111 1111 1111" autocomplete="off"></br>

                                        <div class="row">
                                            <div class="col-25">
                                                <br>Valid Thru
                                                <div class="valid">
                                                    <input type="text" class="required validThru" id="validMonth" name="validMonth"
                                                        placeholder="12(Month)" autocomplete="off">
                                                    <span class="slash">/</span>
                                                    <input type="text" class="required validThru" id="validYear" name="validYear"
                                                        placeholder="24(Year)" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-25">
                                                <br>CVV
                                                <br><input type="text" class="required" id="CVV" name="cvv" placeholder="123"
                                                    autocomplete="off"></br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                                    }
                                }
                            }

                            ?>
            <div class="col-25">
                <div class="containerr">
                    <h4>Shopping Cart
                        <span class="pricee" style="color:black">
                            <i class="fa fa-shopping-cart"></i>
                            <?php
                            $id = $_SESSION["ID"];

                            $result = mysqli_query($connect, "SELECT * FROM cart,product WHERE cart.product_id = product.product_id AND user_id = $id");
                            $count = mysqli_num_rows($result);
                            ?>
                            <b id='item_c'><?php echo $count ?></b>

                        </span>
                    </h4>
                    <?php

                    $result = mysqli_query($connect, "SELECT * FROM cart WHERE user_id = '$id' AND status != 'payed' ");
                    $item = mysqli_num_rows($result);
                    $total = 0;
                    $ttotal = 0;
                    $count = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $result2 = mysqli_query($connect, "SELECT * FROM product WHERE product_id = $row[product_id]");
                        $row2 = mysqli_fetch_assoc($result2);
                        $amount = $row['qty'];
                        $price = $row2['price'];
                        $total = $price * $amount;
                        $prod_name = $row2['product_name'];
                        $ttotal += $total;

                        echo '<p>' . $count . '.' . $prod_name . '  x' . $amount . ' <span class="pricee">RM' . $total . '</span></p>';
                        $count++;
                    }
                    echo "<script>var i = document.getElementById('item_c').innerHTML = '" . --$count . "'</script>";
                    
                    if(isset($_GET['vid']))
                        {
                            $vid = $_GET['vid'];
                            $result5 = mysqli_query($connect,"SELECT * FROM voucher WHERE v_code = '$vid'");
                            $row5 = mysqli_fetch_assoc($result5);
                            $dis = $total*$row5['v_rate'];
                            $ttotal-=$dis;
                        }else{
                            $dis = 0;
                        }
                        ?>
                        </div>
                        <hr>
                        <?php if($dis!=0)
                        {?>
                        <p>Voucher <span class="pricee" style="color:black"><b>- RM <?php echo number_format($dis, 2) ?></b></span></p>
                        <?php } ?>
                    <p>Total <span class="pricee"
                            style="color:black"><b>RM<?php echo number_format($ttotal, 2) ?></b></span></p>
                    <?php if ($item != 0) { ?>
                        <button name="pay">Pay Now</button>
                        <?php
                    } else {
                        ?>
                        <button onclick="error_alert()">Pay Now</button>
                    <?php } ?>
                </div>
            </div>
        </div>
    </form>

    <?php
    if (isset($_POST['pay'])) {
        $address_id = $_COOKIE["address_id"];
        $currentTimestamp = time();
        $num_card = $_POST['numCard'];
        $validMonth = $_POST['validMonth'];
        $validYear = $_POST['validYear'];
        $cvv = $_POST['cvv'];
        $card_holder = $_POST['NameCard'];
        $currentMonth = date("m", $currentTimestamp);
        $currentYear = date("Y", $currentTimestamp);
        $num_card = str_replace(' ', '', $num_card);


        if ("20" . $validYear < $currentYear) {
            echo "<script>alert('Invalid Year!')</script>";
        } else if ($validMonth < $currentMonth) {
            echo "<script>alert('Invalid Month!')</script>";
        } else {
            if (isset($num_card)) {
                $card = mysqli_query($connect, "SELECT * FROM credit_card WHERE card_id = '$num_card'");
                if ($result3 = mysqli_fetch_assoc($card)) {
                    if ($result3['validMonth'] == $validMonth && $result3['validYear'] == $validYear && $result3['cvv'] == $cvv && $result3['card_holder']==$card_holder) {


                        $user_id = $_GET['ID'];

                        $status = 'Processing';
                        $total_amount = $ttotal;
                        $now = new DateTime('now', new DateTimeZone('Asia/Kuala_Lumpur'));
                        $currentDateTime = $now->format('Y-m-d H:i:s');


                        $result = mysqli_query($connect, "SELECT * FROM cart WHERE user_id = '$id' AND status != 'payed'");

                        $query = mysqli_query($connect, "INSERT INTO order_ (user_id,time_status,total_amount,address_id,delivery_status) VALUES ('$user_id','$currentDateTime','$total_amount','$address_id','$status')");
                        $order_id = mysqli_insert_id($connect);
                        $new_point = number_format(($total_amount / 10), 2);
                        $select_point = mysqli_query($connect, "SELECT * FROM point WHERE user_id = '$user_id'");
                        $row_point = mysqli_fetch_assoc($select_point);
                        $row_point["point"] += $new_point;
                        $new_point = $row_point["point"];
                        $update_point = mysqli_query($connect, "UPDATE point SET point = '$new_point'");

                        if (!$query) {
                            echo "<script>alert('failed to insert into order table');</script>";
                        }
                        while ($row = mysqli_fetch_assoc($result)) {
                            $cart_id = $row['cart_id'];
                            $qty = $row['qty'];

                            $query2 = mysqli_query($connect, "INSERT INTO cart_order_detail (order_id,cart_id) 
                             VALUES ('$order_id','$cart_id')");

                            $product_id = $row['product_id'];
                            $product_result = mysqli_query($connect, "SELECT * FROM product WHERE product_id = $product_id");
                            $product_row = mysqli_fetch_assoc($product_result);
                            $current_stock = $product_row['stock'];
                            $new_stock = $current_stock - $qty;
                            mysqli_query($connect, "UPDATE product SET stock = $new_stock WHERE product_id = $product_id");
                        }

                        if (mysqli_affected_rows($connect) > 0) {
                            mysqli_query($connect, "UPDATE cart SET status = 'payed' WHERE user_id = $user_id AND status != 'payed'");

                            $ID = $_SESSION['ID'];
                            $point = (int) ($total / 100);
                            mysqli_query($connect, "UPDATE point SET point = point + $point WHERE user_id = $id");
                            mysqli_query($connect, "INSERT INTO point_details(description,changes,user_id,order_id,time_status) VALUES ('Completed Purchased.','+$point','$ID','$order_id','$currentDateTime')");
                            if(isset($_GET['vid']))
                            {
                                $vid = $_GET['vid'];    
                                    $result8 = mysqli_query($connect,"SELECT * FROM voucher WHERE v_code = '$vid'");
                                    mysqli_query($connect,"UPDATE voucher SET v_status = 1 WHERE v_code = '$vid'");
                                    $r8 = mysqli_fetch_assoc($result8);
                                    $voucher_id = $r8['voucher_id'];
                                    $result9 = mysqli_query($connect,"INSERT INTO voucher_detail(voucher_id,order_id) VALUES ($voucher_id,$order_id)");
                            }
                            ?>
                                <script>
                                    Swal.fire({
                                        title: "Payment was successful!",
                                        text: "You order have been save in your order page!",
                                        icon: "success",
                                        confirmButtonText: 'OK'
                                    }).then((result) => {
                                        if (result.value) {
                                            window.location.href = "main_page.php?ID=<?php echo $ID; ?>";
                                        }
                                    });


                                </script>
                                <?php
                                exit;
                        } else {
                            echo "<script>alert('Error inserting data into cart_order_detail table.');</script>";
                        }
                    }
                }
            }
        }
    }
    ?>

</body>
<script>
    document.getElementById('numCard').addEventListener('input', function (event) {
        let input = event.target;
        let trimmedValue = input.value.replace(/\s+/g, '');
        let formattedValue = '';
        for (let i = 0; i < trimmedValue.length; i++) {
            if (i > 0 && i % 4 === 0) {
                formattedValue += ' ';
            }
            formattedValue += trimmedValue.charAt(i);
        }
        input.value = formattedValue;
        if (trimmedValue.length >= 16) {
            input.value = input.value.slice(0, 19);
            input.blur();
        }

    });

    document.querySelectorAll('.validThru').forEach(function (input) {
        input.addEventListener('input', function (event) {

            if (input.value.length >= 2) {
                input.value = input.value.slice(0, 2);
                input.blur();

                let nextInput = input.nextElementSibling;
                while (nextInput) {
                    if (nextInput.classList.contains('validThru')) {
                        nextInput.focus();
                        break;
                    }
                    nextInput = nextInput.nextElementSibling;
                }
            }
        });
    });
    document.getElementById('CVV').addEventListener('input', function (event) {
        let input = event.target;

        if (input.value.length >= 3) {
            input.value = input.value.slice(0, 3);
            input.blur();
        }
    });
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelector('form[name="billfrm"]').addEventListener('submit', function (event) {
            if (!validateForm()) {
                event.preventDefault();
            }
        });

        function validateForm() {
            let nameOnCard = document.getElementById('NameCard').value.trim();
            let cardNumber = document.getElementById('numCard').value.trim().replace(/\s+/g, '');
            let validMonth = document.getElementById('validMonth').value.trim().replace(/\s+/g, '');
            let validYear = document.getElementById('validYear').value.trim().replace(/\s+/g, '');
            let cvv = document.getElementById('CVV').value.trim();

            if (nameOnCard === '' || cardNumber === '' || cvv === '') {
                alert('Please fill in all required fields.');
                return false;
            }

            if (cardNumber.length !== 16) {
                alert('Please enter a valid 16-digit card number.');
                return false;
            }

            if (validMonth.length !== 2) {
                alert('Please enter a valid 2-digit Month.');
                return false;
            }

            if (validYear.length !== 2) {
                alert('Please enter a valid 2-digit Year.');
                return false;
            }

            if (cvv.length !== 3) {
                alert('Please enter a valid 3-digit CVV.');
                return false;
            }
            return true;
        }
    });
    function error_alert() {
        alert("Your shopping cart is empty!");
    }

</script>

</html>