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

        .slash{
            margin:0px 10px;
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

                                    <br>Full Name :
                                    <br><input type="text" name="name" value="<?php echo $row['name'] ?>" readonly
                                        autocomplete="off"></br>
                                    <br>Phone Number :
                                    <br><input type="text" name="ph" value="<?php echo $row['contactnumber'] ?>" readonly
                                        autocomplete="off"></br>


                                    <?php
                                    foreach ($result as $row) { ?>

                                        <?php
                                        if (isset($_GET['cart_id'])) { ?>
                                            <br>Address :
                                            <br><input type="text" name="address" placeholder="No.00, Jalan xxx, Taman xxx"
                                                autocomplete="off"></br>

                                            <?php
                                        } else { ?>
                                            <br>Address : 
                                            <br><input type="text" name="address" value="<?php echo $row2['address']?>"  readonly autocomplete="off"></br>
                                            <div class="row">
                                            <div class="col-25">
                                                <br>City : 
                                                <br><input type="text" name="state" value="<?php echo $row2['city'] ?>" readonly autocomplete="off"></br>
                                            </div>
                                            <div class="col-25">
                                                <br>State : 
                                                <br><input type="text" name="code" value="<?php echo $row2['state'] ?>" readonly autocomplete="off"></br>
                                            </div>
                                            <div class="col-25">
                                                <br>Postcode : 
                                                <br><input type="text" name="code" value="<?php echo $row2['postcode'] ?>" readonly autocomplete="off"></br>
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
                                                                    $query = "SELECT * FROM user_address WHERE customer_id='$id'";
                                                                    $result = mysqli_query($connect, $query); ?>
                                                                    <ul class="flex-container longhand">
                                                                        <?php 
                                                                    while ($row = mysqli_fetch_assoc($result)) { ?>
                                                                          <li class="flex-item"><input type="radio" id="javascript" name="fav_language"
                                                                            value="<?php echo $row['address_id']?>">
                                                                        <label for="<?php echo $row['address_id']?>"><?php echo $row['address'] . ', ' . $row['postcode'] . ', ' . $row['city']
                                                                . ', ' . $row['state'] ;?></label></li>
                                                                        <?php
                                                                        $address_id = $row['address_id'];
                                                                        $count++;
                                                                    }
                                                                    ?> 
                                                                    </ul>                 
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-50">
                                        <br>Accepted Payment method
                                        <div class="icon-container">
                                            <i class="fa fa-cc-visa"  name="Credit_Cart" style="color:navy;"></i>
                                            <i class="fa fa-cc-mastercard"  name="Credit_Cart" style="color:red;"></i>
                                        </div>
                                        <br>Name on card
                                        <br><input type="text" class="required" id="NameCard" placeholder="ALI" autocomplete="off"></br>
                                        <br>Card Number
                                        <br><input type="text" class="required" id="numCard" name="numCard" placeholder="1111 1111 1111 1111" autocomplete="off"></br>

                                            <div class="row">
                                                <div class="col-25">
                                                    <br>Valid Thru
                                                    <div class="valid">
                                                    <input type="text" class="required validThru" id="validMonth" name="validMonth" placeholder="12(Month)" autocomplete="off">
                                                    <span class="slash">/</span>
                                                    <input type="text" class="required validThru" id="validYear" name="validYear" placeholder="24(Year)" autocomplete="off">
                                                    </div>
                                                </div>
                                            <div class="col-25">
                                                <br>CVV
                                                <br><input type="text" id="CVV" placeholder="123" autocomplete="off"></br>
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
                    ?>
                    <hr>
                    <p>Total <span class="pricee"
                            style="color:black"><b>RM<?php echo number_format($ttotal, 2) ?></b></span></p>
                    <button name="pay">Pay Now</button>
                </div>
            </div>
        </div>
    </form>

    <?php
if (isset($_POST['pay'])) {
    $currentTimestamp = time();
    $num_card = $_POST['numCard'];
    $validMonth = $_POST['validMonth'];
    $validYear = $_POST['validYear'];
    $cvv = $_POST['cvv'];
    $currentMonth = date("m", $currentTimestamp);
    $currentYear = date("Y", $currentTimestamp);
    $num_card = str_replace(' ','',$num_card);
    
        if("20".$validYear < $currentYear){
            echo "<script>alert('Invalid Year!')</script>";
        }
        else if($validMonth < $currentMonth){
            echo "<script>alert('Invalid Month!')</script>";
        }
        else{
            if(isset($num_card)){
                $card = mysqli_query($connect,"SELECT * FROM credit_card WHERE card_id = '$num_card'");
                if($result3 = mysqli_fetch_assoc($card))
                {
                    if($result3['validMonth'] == $validMonth && $result3['validYear'] == $validYear && $result3['cvv'] == $cvv)
                    {


    $user_id = $_GET['ID']; 
    $payment_method = 'Credit_Cart'; 
    $total_amount = $ttotal;

    
    $result = mysqli_query($connect,"SELECT * FROM cart WHERE user_id = '$id' AND status != 'payed'");
    while($row = mysqli_fetch_assoc($result))
    {
        $cart_id = $row['cart_id'];
        $qty = $row['qty'];
        mysqli_query($connect, "INSERT INTO cart_order_detail (user_id, address_id, cart_id, qty, payment_method, total_amount) 
        VALUES ('$user_id', '$address_id', '$cart_id', '$qty', '$payment_method', '$total_amount')");
                            
    }
    
 
    if (mysqli_affected_rows($connect) > 0) {
        mysqli_query($connect, "UPDATE cart SET status = 'payed' WHERE user_id = $user_id AND status != 'payed'");
        
        $ID = $_SESSION['ID'];
        ?>
        <script>
            Swal.fire({
                title: "Good job!",
                text: "Payment was successful!",
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
}}}}}
?>

</body>
<script>
document.getElementById('numCard').addEventListener('input', function(event) {
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

document.querySelectorAll('.validThru').forEach(function(input) {
    input.addEventListener('input', function(event) {

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
document.getElementById('CVV').addEventListener('input', function(event) {
    let input = event.target;

    if (input.value.length >= 3) {
        input.value = input.value.slice(0, 3);
        input.blur();
    }
});
document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('form[name="billfrm"]').addEventListener('submit', function(event) {
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


</script>
</html>