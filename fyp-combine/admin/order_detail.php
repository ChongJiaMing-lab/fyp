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

    .top .user {
        width: 4%;
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
    <?php
    if (isset($_SESSION['title']) && $_SESSION['title'] != '') {
        ?>
        <script>
            Swal.fire({
                title: "<?php echo $_SESSION['title']; ?>",
                text: "<?php echo $_SESSION['text']; ?>",
                icon: "<?php echo $_SESSION['icon']; ?>"
            });
        </script>
        <?php
        unset($_SESSION['title']);
        unset($_SESSION['text']);
        unset($_SESSION['icon']);
    }
    ?>
    <div class="main p-3">
        <div class="card" style="padding:15px;">
            <?php
            $order_id = $_GET["order_id"];
            ?>
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
                        <div class="dtl">Current Order Status: <b><?php echo $row["delivery_status"] ?><br></b></div>
                    </div>
                </div>
                <div class="card user" style="padding:10px 10px 10px 10px;  border:0;">
                    <h1>User information</h1>
                    <hr>
                    <div class="card-body" style="padding:0;">
                        <div class="info">Username: <b><?php echo $row_user["user_name"] ?><br></b></div>
                        <div class="info">User Email:<b><?php echo $row_user["email"] ?><br></b></div>
                        <div class="info">User Numbers: <b><?php echo $row_user["contactnumber"] ?><br></b></div>
                        <div class="info">Address: <b><?php echo $row_add["name"] . ", " . $row_add["address"] . ", " . $row_add["postcode"] . " " . $row_add["city"]
                            . ", " . $row_add["state"] ?><br></b></div>
                    </div>
                </div>
                <button type="button" class="btn btn-warning" style="height:50px; width:85px;"
                    onclick="history.go(-1)">Back</button>
            </div>
            <hr>
            <?php
            $select_build = "SELECT * FROM build_order_detail WHERE order_id = '$order_id'";
            $select_order = "SELECT * FROM cart_order_detail where order_id = '$order_id'";
            $select_build_query = mysqli_query($connect, "SELECT * FROM build_order_detail WHERE order_id = '$order_id'");
            $build_row = mysqli_num_rows($select_build_query);
            if ($build_row > 0) {
                $item = $select_build;
            } else {
                $item = $select_order;
            }
            $item_run = mysqli_query($connect, $item);

            $total = 0;
            ?>
            <?php if ($build_row > 0) echo "build"; else echo"cart"?>
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
                    while ($row_item = mysqli_fetch_assoc($item_run)) {
                        if ($build_row > 0) {
                            $build_id = $row_item["build_id"];
                            $build = "SELECT * FROM pc_build WHERE build_id = '$build_id'";
                            $build_run = mysqli_query($connect, $build);
                            
                            $col_build = mysqli_fetch_assoc($build_run);
                            ?>
                            <tr>
                            <?php
                            $col_build_id = $col_build['chassis']; 
                            $build_col = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM product WHERE product_id = '$col_build_id'"));?>
                                <th scope="row"><img src="../image/<?php echo $build_col["image"]; ?>"
                                        style="width:120px; height:auto;">
                                    &nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $build_col["product_name"] ?></th>
                                <td><?php echo $build_col["price"]; ?></td>
                                <td>1</td>
                                <?php $total = $build_col["price"] ?>
                                <td>RM<?php echo number_format($total, 2); ?>
                                </td>
                            </tr>
                            <tr>
                            <?php
                            $col_build_id = $col_build['motherboard']; 
                            $build_col = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM product WHERE product_id = '$col_build_id'"));?>
                                <th scope="row"><img src="../image/<?php echo $build_col["image"]; ?>"
                                        style="width:120px; height:auto;">
                                    &nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $build_col["product_name"] ?></th>
                                <td><?php echo $build_col["price"]; ?></td>
                                <td>1</td>
                                <?php $total = $build_col["price"] ?>
                                <td>RM<?php echo number_format($total, 2); ?>
                                </td>
                            </tr>
                            <tr>
                            <?php
                            $col_build_id = $col_build['processor']; 
                            $build_col = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM product WHERE product_id = '$col_build_id'"));?>
                                <th scope="row"><img src="../image/<?php echo $build_col["image"]; ?>"
                                        style="width:120px; height:auto;">
                                    &nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $build_col["product_name"] ?></th>
                                <td><?php echo $build_col["price"]; ?></td>
                                <td>1</td>
                                <?php $total = $build_col["price"] ?>
                                <td>RM<?php echo number_format($total, 2); ?>
                                </td>
                            </tr>
                            <tr>
                            <?php
                            $col_build_id = $col_build['graphic_card']; 
                            $build_col = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM product WHERE product_id = '$col_build_id'"));?>
                                <th scope="row"><img src="../image/<?php echo $build_col["image"]; ?>"
                                        style="width:120px; height:auto;">
                                    &nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $build_col["product_name"] ?></th>
                                <td><?php echo $build_col["price"]; ?></td>
                                <td>1</td>
                                <?php $total = $build_col["price"] ?>
                                <td>RM<?php echo number_format($total, 2); ?>
                                </td>
                            </tr>
                            <tr>
                            <?php
                            $col_build_id = $col_build['ram1']; 
                            $build_col = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM product WHERE product_id = '$col_build_id'"));?>
                                <th scope="row"><img src="../image/<?php echo $build_col["image"]; ?>"
                                        style="width:120px; height:auto;">
                                    &nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $build_col["product_name"] ?></th>
                                <td><?php echo $build_col["price"]; ?></td>
                                <td>1</td>
                                <?php $total = $build_col["price"] ?>
                                <td>RM<?php echo number_format($total, 2); ?>
                                </td>
                            </tr>
                            <tr>
                            <?php
                            $col_build_id = $col_build['ram2']; 
                            $build_col = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM product WHERE product_id = '$col_build_id'"));?>
                                <th scope="row"><img src="../image/<?php echo $build_col["image"]; ?>"
                                        style="width:120px; height:auto;">
                                    &nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $build_col["product_name"] ?></th>
                                <td><?php echo $build_col["price"]; ?></td>
                                <td>1</td>
                                <?php $total = $build_col["price"] ?>
                                <td>RM<?php echo number_format($total, 2); ?>
                                </td>
                            </tr>
                            <tr>
                            <?php
                            $col_build_id = $col_build['memory']; 
                            $build_col = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM product WHERE product_id = '$col_build_id'"));?>
                                <th scope="row"><img src="../image/<?php echo $build_col["image"]; ?>"
                                        style="width:120px; height:auto;">
                                    &nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $build_col["product_name"] ?></th>
                                <td><?php echo $build_col["price"]; ?></td>
                                <td>1</td>
                                <?php $total = $build_col["price"] ?>
                                <td>RM<?php echo number_format($total, 2); ?>
                                </td>
                            </tr>
                            <tr>
                            <?php
                            $col_build_id = $col_build['cooler']; 
                            $build_col = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM product WHERE product_id = '$col_build_id'"));?>
                                <th scope="row"><img src="../image/<?php echo $build_col["image"]; ?>"
                                        style="width:120px; height:auto;">
                                    &nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $build_col["product_name"] ?></th>
                                <td><?php echo $build_col["price"]; ?></td>
                                <td>1</td>
                                <?php $total = $build_col["price"] ?>
                                <td>RM<?php echo number_format($total, 2); ?>
                                </td>
                            </tr>
                            <tr>
                            <?php
                            $col_build_id = $col_build['power_supply']; 
                            $build_col = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM product WHERE product_id = '$col_build_id'"));?>
                                <th scope="row"><img src="../image/<?php echo $build_col["image"]; ?>"
                                        style="width:120px; height:auto;">
                                    &nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $build_col["product_name"] ?></th>
                                <td><?php echo $build_col["price"]; ?></td>
                                <td>1</td>
                                <?php $total = $build_col["price"] ?>
                                <td>RM<?php echo number_format($total, 2); ?>
                                </td>
                            </tr>
                        <?php
                        } else {
                            $cart_id = $row_item["cart_id"];
                            $cart = "SELECT * FROM cart WHERE cart_id = '$cart_id'";
                            $cart_run = mysqli_query($connect, $cart);

                            $row_cart = mysqli_fetch_assoc($cart_run);
                            $product_id = $row_cart["product_id"];
                            $product_run = mysqli_query($connect, "SELECT * FROM product WHERE product_id = '$product_id'");
                            $row_product = mysqli_fetch_assoc($product_run);
                            ?>
                            <tr>
                                <th scope="row"><img src="../image/<?php echo $row_product["image"]; ?>"
                                        style="width:120px; height:auto;">
                                    &nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row_product["product_name"] ?></th>
                                <td><?php echo $row_product["price"]; ?></td>
                                <td><?php echo $row_cart["qty"] ?></td>
                                <?php $total = $row_product["price"] * $row_cart["qty"] ?>
                                <td>RM<?php echo number_format($total, 2); ?>
                                </td>
                            </tr>
                        <?php }
                    } ?>
                </tbody>
                <tfoot>
                    <?php
                    $voucher_rate = 0;
                    $check_voucher = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM voucher_detail WHERE order_id = '$order_id'"));
                    if (isset($check_voucher)) {
                        $voucher = $check_voucher["voucher_id"];
                        $select_v = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM voucher WHERE voucher_id ='$voucher'"));
                        $voucher_rate = $select_v["v_rate"];
                        $subtotal = $row["total_amount"] * (1 - $voucher_rate);
                    } else {
                        $subtotal = $row["total_amount"];
                    }
                    $mid = $row["total_amount"] - $subtotal;
                    $subtotal = $mid + $row["total_amount"];
                    ?>
                    <tr>
                        <td colspan="3" style="text-align:right;"><b>Sub-Total</b></td>
                        <td>RM<?php echo number_format($subtotal, 2) ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align:right;">
                            <b>Voucher(<?php echo number_format(($voucher_rate * 100), 2) ?>%)</b>
                        </td>
                        <td>-RM<?php echo number_format($mid, 2); ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align:right;"><b>Total Amount</b></td>
                        <td>RM<?php echo number_format($row["total_amount"], 2); ?>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <hr>
            <div style="display: flex; justify-content: space-between;">
                <h1>Update Order Status</h1>
                <h1>Invoice</h1>
            </div>
            <hr>
            <div style="display: flex; justify-content: space-between;">
                <div>
                    <form action="" method="POST">
                        <div class="input-group" style="width: 100%; display:flex;">
                            <select name="status" id="mySelect" class="form-select" onchange="myFunction()">
                                <option selected>Update order status</option>
                                <option value="Processing">Processing</option>
                                <option value="Shipping">Shipping</option>
                                <option value="Completed">Completed</option>
                                <option value="Cancelled">Cancelled</option>
                            </select>
                            <button type="submit" name="update_order" id="btn" class="btn btn-primary text-white"
                                disabled>Update</button>
                        </div>
                    </form>
                </div>
                <div>
                    <form method="POST" action="generate_report.php">
                        <input type="hidden" name="o_id" value="<?php echo $row["order_id"] ?>">
                        <button type="submit" class="btn btn-success" name="order_receipt">Print Invoice</button>
                    </form>
                </div>
            </div>

        </div><!-- end of big card-->
    </div><!-- end of main-->
</body>
<script>
    function myFunction() {
        document.getElementById("btn").removeAttribute("disabled");
    }
</script>
<?php
if (isset($_POST["update_order"])) {
    $s = $_POST["status"];
    $update = "UPDATE order_ SET delivery_status='$s' WHERE order_id = '$order_id'";
    $run = mysqli_query($connect, $update);
    if ($run) {
        $_SESSION['title'] = "Order status";
        $_SESSION['text'] = "Update Successfully!";
        $_SESSION['icon'] = "success";
        ?>
        <script>
            window.location.href = window.location.href;
        </script>
        <?php
        exit();
    }
}
?>