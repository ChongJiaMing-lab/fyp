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
        <?php
        $order_id = $_GET["order_id"] ?>
        <div class="top">
            <div class="card" style="padding:10px 10px 10px 10px">
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
            <div class="card" style="padding:10px 10px 10px 10px">
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
        </div><hr>
        <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header"><h1>Item(s)</h1></div>
            <div class="card-body text-dark">
                <h5 class="card-title">Dark card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
            </div>
        </div>
    </div><!-- end of main-->
</body>