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
                        <div class="dtl">Current Order Status: <b><?php echo $row["delivery_status"] ?><br></b></div>
                    </div>
                </div>
                <div class="card user" style="padding:10px 10px 10px 10px;  border:0;">
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
                <button type="button" class="btn btn-warning" style="height:50px; width:85px;"
                    onclick="window.location.replace('admin_order.php')">Back</button>
            </div>
            <hr>
            <?php
            $item = "SELECT * FROM cart_order_detail WHERE order_id = '$order_id'";
            $item_run = mysqli_query($connect, $item);

            $total = 0;
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
                    while ($row_item = mysqli_fetch_assoc($item_run)) {
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
                            <td>RM<?php echo $total; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" style="text-align:right;"><b>Total Amount</b></td>
                        <td>RM<?php echo $row["total_amount"] ?></td>
                    </tr>
                </tfoot>
            </table>
            <hr>
            <h1>Update Order Status</h1>
            <hr>
            <form action="" method="POST">
                <div class="input-group" style="width:25%;">
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