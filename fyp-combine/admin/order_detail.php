<?php include 'admin_sidebar.php';
include 'databaseconnect.php';
?>

<style>
    .info {
        margin-bottom: 10px;
    }

    .dtl {
        margin-bottom: 20px;
    }

    .top .card {
        width: 49%;
    }

    .top {
        display: flex;
        justify-content: space-around;
    }
</style>

<body>
    <div class="main p-3">
        <div class="card" style="padding:15px;">
            <?php
            $order_id = $_GET["order_id"] ?>
            <div class="top">
                <div class="card" style="padding:10px 10px 10px 10px; border:0;">
                    <h1>Order Details</h1>
                    <hr>
                    <?php
                    $order = "SELECT * FROM order_ WHERE order_id = '$order_id'";
                    $order_run = mysqli_query($connect, $order);
                    $row = mysqli_fetch_assoc($order_run);

                    $user_id = $row["user_id"];
                    $user = "SELECT * FROM user_information WHERE ID = '$user_id'";
                    $user_run = mysqli_query($connect, $user);
                    $row_user = mysqli_fetch_assoc($user_run);

                    $address_id = $row["address_id"];
                    $add = "SELECT * FROM user_address WHERE address_id = '$address_id'";
                    $add_run = mysqli_query($connect, $add);
                    $row_add = mysqli_fetch_assoc($add_run);
                    ?>
                    <div class="card-body" style="padding:0;">
                        <div class="dtl">Order ID:<b><?php echo $row["order_id"] ?><br></b></div>
                        <div class="dtl">Created Time: <b> <?php echo $row["time_status"] ?><br></b></div>
                        <div class="dtl">Order Status: <b><?php echo $row["delivery_status"] ?><br></b></div>
                    </div>
                </div>
                <div class="card" style="padding:10px 10px 10px 10px;  border:0;">
                    <h1>User information</h1>
                    <hr>
                    <div class="card-body" style="padding:0;">
                        <div class="info">Name: <b><?php echo $row_user["name"] ?><br></b></div>
                        <div class="info">Email:<b><?php echo $row_user["email"] ?><br></b></div>
                        <div class="info">Phone: <b><?php echo $row_user["contactnumber"] ?><br></b></div>
                        <div class="info">Address: <b><?php echo $row_add["address"] . ", " . $row_add["postcode"] . " " . $row_add["city"]
                            . ", " . $row_add["state"] ?><br></b></div>
                    </div>
                </div>
            </div>
            <hr>
            <?php
            $item = "SELECT * FROM cart_order_detail WHERE order_id = '$order_id'";
            $item_run = mysqli_query($connect, $item);
            $row_item = mysqli_fetch_assoc($item_run);

            $cart_id = $row_item["cart_id"];
            $cart = "SELECT * FROM cart WHERE cart_id = '$cart_id'";
            $cart_run = mysqli_query($connect, $cart);

            $total=0;
            $totala=0;
            ?>
            <h1>Item(s)</h1>
            <table class="table table-striped" style="padding:10px;">
                <thead>
                    <tr>
                        <th scope="col" style="width: 1000px;">Product</th>
                        <th scope="col" style="width: 200px;">Price</th>
                        <th scope="col" style="width: 200px;">Quantity</th>
                        <th scope="col" style="width: 200px;">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row_cart = mysqli_fetch_assoc($cart_run)) {
                        $product_id = $row_cart["product_id"];
                        $product_run = mysqli_query($connect, "SELECT * FROM product WHERE product_id = '$product_id'");
                        $row_product = mysqli_fetch_assoc($product_run);
                        ?>
                        <tr>
                            <th scope="row"><img src="../image/<?php echo $row_product["image"]; ?>" style="width:120px; height:auto;">
                                            &nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row_product["product_name"]?></th>
                            <td><?php echo $row_product["price"]; ?></td>
                            <td><?php echo $row_cart["qty"] ?></td>
                            <?php $total = $row_product["price"] * $row_cart["qty"] ?>
                            <td>RM<?php echo $total; $totala += $total?></td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3">Total Amount</td>
                        <td>RM<?php echo $totala?></td>
                    </tr>
                </tfoot>
            </table>
        </div><!-- end of big card-->
    </div><!-- end of main-->
</body>