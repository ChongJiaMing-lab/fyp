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
        <h1>Customer Details</h1>
        <?php
        if ($_GET["ID"]){
            $id = $_GET["ID"];
            $query = mysqli_query($connect, "SELECT * FROM user_information WHERE ID='$id'");
            $row = mysqli_fetch_assoc($query);
        }
        echo "Customer#" . "$id \n" ?>
        <span style="font-size:35px;  font-family: Arial, Helvetica, sans-serif;max-height:30px;"><?php echo $row["name"];?></span>
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
                    <b>Address(ess):&nbsp&nbsp</b><select class="form-select" aria-label="Default select example"
                        style="width:70rem; border:0.1px solid black;">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
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
                    <th scope="col">Total</th>
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
                    <td><?php echo $row_order["total_amount"];?></td>
                    <td><?php echo $row_order["delivery_status"];?></td>
                </tr>
            <?php
            }?>
            </tbody>
        </table>
    </div><!--end of main-->
</body>