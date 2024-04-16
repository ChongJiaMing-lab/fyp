<?php include "head.php"; 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Checkout</title>

    <style type="text/css">
        body {
            margin:0;
            font-size: 17px;
            }
        * {
            box-sizing: border-box;
        }
        .header{
            text-align:center;
            padding:15px 15px;
            margin:0px;
            background-color:#3b426e;
            color:white;
            font-size:1em;
        }
        .header a{
            color:white;
            text-decoration:none;
        }
        .header a:hover{
            color:#20c997;
            text-decoration:underline;
        }

        form{
            margin:20px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -16px;
        }

        .col-75 {
            flex: 75%;
        }

        .col-50 {
            flex: 50%;
        }

        .col-25 {
            flex: 25%;
        }

        .col-75,
        .col-50,
        .col-25 {
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

        span.price {
            float: right;
            color: grey;
        }
        button{
            display:flex;
            margin-left:auto;
            font-size:15px;
        }


    </style>
</head>
<body>
    <div class="header">
    <h1>Computer Builder</h2>
    <a href="index.php">Home</a> > <a href="customization.php">Customization</a> > <a href="customization-confirm.php">Confirm</a> > <a href="payment.php">Payment</a>
    </div>
    <form method='post' name="billfrm">
    <h2>Checkout</h2>
    <hr>
    <div class="row">
        <div class="col-75">
            <div class="containerr">
                <div class="row">
                    <div class="col-50">
                        <h3>Billing Details</h3>

                        <br>Full Name : 
                        <br><input type="text" name="name" placeholder="Name" autocomplete="off"></br>
                        <br>Phone Number : 
                        <br><input type="text" name="ph" placeholder="xxx-xxxxxxx" autocomplete="off"></br>
                        <br>Address : 
                        <br><input type="text" name="address" placeholder="No.00, Jalan xxx, Taman xxx" autocomplete="off"></br>

                        <div class="row">
                            <div class="col-50">
                                    <button>change address</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-50">
                        <br>Accepted Payment method
                        <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>
                        <br>Name on card
                        <br><input type="text" id="NameCard" placeholder="ALI" autocomplete="off"></br>
                        <br>Card Number
                        <br><input type="text" id="numCard" placeholder="1111 1111 1111 1111" autocomplete="off"></br>

                        <div class="row">
                            <div class="col-50">
                                <br>Valid Thru
                                <br><input type="text" id="validThru" placeholder="12/12" autocomplete="off"></br>
                            </div>
                            <div class="col-50">
                                <br>CVV
                                <br><input type="text" id="CVV" placeholder="123" autocomplete="off"></br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-25">
            <div class="containerr">
                <h4>PC Builder
                    <span class="price" style="color:black">
                        <i class="fa fa-shopping-cart"></i>
                        <!-- <b id='item_c'>4</b> -->
                    </span>
                </h4>
                <?php 
                    
                    // $result = mysqli_query($connect,"SELECT * FROM shopping_cart WHERE username = '$username'");
                    // $count = 1;
                    // $ttotal = 0;

                    // while($row = mysqli_fetch_assoc($result))
                    // {$result2 = mysqli_query($connect,"SELECT * FROM product WHERE product_id = $row[prod_id]");
                    // $row2 = mysqli_fetch_assoc($result2);
                    // $amount = $row['amount'];
                    // $price = $row2['product_price'];
                    // $total = $price * $amount;
                    // $prod_name = $row2['product_name'];
                    // $ttotal += $total;

                    // echo '<p>'.$count.'.'.$prod_name.'  x'.$amount.' <span class="price">RM'.$total.'</span></p>';
                    // $count++;}
                    // echo "<script>var i = document.getElementById('item_c').innerHTML = '".--$count."'</script>";
                ?>
                <hr>
                <p>Total <span class="price" style="color:black"><b>RM<?php echo number_format($total,2) ?></b></span></p>
                <button name="pay" >Pay Now</button>
            </div>
        </div>
    </div>
</form>
    
<?php 

if(isset($_POST['pay']))
{

$currentTimestamp = time();
$currentDateTime = date("Y-m-d", $currentTimestamp);
$name = $_POST['name'];
$ph = $_POST['ph'];
$address = 1;

    mysqli_query($connect,"INSERT INTO order_details(user_id,address_id,build_id,time,price) 
    VALUES ($id,$address,$build_id,'$currentDateTime',$total)");

    if(mysqli_affected_rows($connect)>0)
    {
     //   $update = mysqli_query($connect,"UPDATE pc_build SET pay_status = 'payed' WHERE user_id = $id AND pay_status = 'cart'");
    }
 //   $orderID = mysqli_insert_id($connect);
 //   echo "<script>alert('$orderID');</script>";
 //   $result3 = mysqli_query($connect,"SELECT * FROM shopping_cart WHERE username = '$username'");
    //         while($row3 = mysqli_fetch_assoc($result3))
    //             {
    //                 $result4 = mysqli_query($connect,"SELECT * FROM product WHERE product_id = $row3[prod_id]");
    //                 $row4 = mysqli_fetch_assoc($result4);
    //                 $total2 = $row4['product_price'] * $row3['amount'];
    //                 $ttotal2 += $total;
    //                 mysqli_query($connect,"INSERT INTO order_details(order_id,product_id,amount,price) 
    //                 VALUES($orderID,$row4[product_id],$row3[amount],$total2)");
    //             }
    // mysqli_query($connect,"UPDATE order_ SET total = $ttotal2 WHERE order_id = $orderID");
    // mysqli_query($connect,"DELETE FROM shopping_cart WHERE username = '$username'");
  // header("Location:.php");
}

?>


</body>
</html>
