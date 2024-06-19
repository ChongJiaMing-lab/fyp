<?php include 'admin_sidebar.php';
include 'databaseconnect.php';
?>

<style>
    .top {
        display: flex;
        align-items: space-between;
    }

    .list-group-item {}
</style>

<body>
    <div class="main p-3">
        <h1>User Details</h1>
        <?php
        if ($_GET["ID"]){
            $id = $_GET["ID"];
            $query = mysqli_query($connect, "SELECT * FROM user_information WHERE ID='$id'");
            $row = mysqli_fetch_assoc($query);
        }
        echo "User#" . "$id \n" ?>
        <span style="font-size:35px;  font-family: Arial, Helvetica, sans-serif;max-height:30px;"><?php echo $row["user_name"];?></span>
        <button type="button" class="btn btn-warning" style="float:right;" onclick="history.back()">Back</button>
        <hr>
        <div class="card" style="width: 80rem;border:1px solid black;">
            <div class="card-header">
                PROFILE
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Email:</b><?php echo $row["email"];?></li>
                <li class="list-group-item"> <b>Contact Number:</b> <?php echo $row["contactnumber"];?></li>
                <li class="list-group-item"> <b>Joined at </b> <?php echo $row["join_time"];?></li>
                <li class="list-group-item" style="display:flex; align-items:center;">
                    <b>Address(es):&nbsp&nbsp</b><select class="form-select"
                        style="width:70rem; border:0.1px solid black;">
                        <?php 
                        $addresses = "SELECT * FROM user_address WHERE customer_id = '$id'";
                        $query_add = mysqli_query($connect, $addresses);
                        while($row_add = mysqli_fetch_assoc($query_add))
                        {
                            ?>
                            <option><?php echo $row_add["name"].",  ".$row_add["address"] . ", " . $row_add["postcode"] . " " . $row_add["city"]
        . ", " . $row_add["state"]?></option>
                            <?php
                        }
                        ?>
                    </select>
                </li>
            </ul>
        </div>
        <hr>
        <h1>Purchase History</h1>
        <table class="table">
        <?php $order = mysqli_query($connect, "SELECT * FROM order_ WHERE user_id = '$id'");?>
            <thead>
                <tr>
                    <th scope="col">Order#</th>
                    <th scope="col">Created Time</th>
                    <th scope="col">Total(RM)</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
            <?php while($row_order = mysqli_fetch_assoc($order))
            {       
                ?>
                <tr>
                    <th scope="row"><?php echo $row_order["order_id"];?></th>
                    <td><?php echo $row_order["time_status"];?></td>
                    <td><?php echo number_format($row_order["total_amount"],2);?></td>
                    <td><?php echo $row_order["delivery_status"];?></td>
                </tr>
            <?php
            }?>
            </tbody>
        </table>
    </div><!--end of main-->
</body>