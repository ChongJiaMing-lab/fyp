<?php include 'admin_sidebar.php' ?>
<?php include 'databaseconnect.php' ?>

<head>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<style>
    .top .filter {
        display: flex;
        align-items: center;
    }

    .filter select {
        width: 15%;
        border: 1.5px solid black;
    }

    .filter label {
        margin: 0 10px 0 10px;
    }

    input[type=text] {
        background-color: white;
        background-image: url('searchicon.png');
        background-position: 10px 10px;
        background-repeat: no-repeat;
        padding-left: 40px;
        margin-top: 10px;
    }

    .top .btn-group {
        margin-left: 30px;
        align-items: center;
        margin-top: 5px;
    }

    .searchbar {
        position: relative;
    }

    .magni {
        position: absolute;
        top: 29%;
        font-size: 30px;
        left: 10px;
    }

    .input {
        width: 1000px;
        height: 50px;
        border-radius: 10px;
    }
</style>

<body>
    <div class="main p-3">
        <h1>Order List</h1>
        <hr>
        <div class="top">
            <form method="POST" action="" class="filter">
                <label>Filter by:</label>
                <select class="form-select" id="f1" aria-label="Default select example" name="o_filt">
                    <option value="" selected>General</option>
                    <optgroup label="Payment Status in:">
                        <option value="1">Paid</option>
                        <option value="2">Cancelled</option>
                    <optgroup label="Delivery Status in:">
                        <option value="Processing">Processing</option>
                        <option value="Shipping">Shipping</option>
                        <option value="Completed">Completed</option>
                        <option value="Cancelled">Cancelled</option>
                </select>
                <label>Sort by:</label>
                <select class="form-select" id="f2" aria-label="Default select example" name="o_sort">
                    <option selected>-General-</option>
                    <option value="a">Newest</option>
                    <option value="b">Oldest</option>
                    <option value="c">Highest Total</option>
                    <option value="d">Lowest Total</option>
                </select>
            </form>
            <form method="POST" action="" class="searchbar">
                <ion-icon class="magni" name="search-outline"></ion-icon>
                <input type="text" class="input" placeholder="Search" name="search" id="search">
            </form>
            <!-- <form method="POST" action="generate_report.php">
            <button type="submit" class="btn btn-success" name="order_receipt">Generate Report</button>
            </form> -->
        </div>
        <hr>
        <div class="card">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col" style="width:1px;">Order#</th>
                        <th scope="col">Created by:</th>
                        <th scope="col">Created Time</th>
                        <th scope="col" style="width:1px;">Total</th>
                        <th scope="col">Delivery Status</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <?php
                    $q = "SELECT * FROM order_";

                    $result = mysqli_query($connect, $q);
                    $count = mysqli_num_rows($result);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr onclick="window.location='order_detail.php?order_id=<?php echo $row['order_id'] ?>';">
                                <th scope="row">
                                    <?php echo $row["order_id"] ?>
                                </th>
                                <td>
                                    <?php echo $row["user_id"]; ?><br>
                                    <!-- <div style="font-size:11px;"><i>from </i>
                                        < ?php echo $row["country"] ?> -->
                                    <!-- </div> -->
                                </td>
                                <td>
                                    <?php echo $row["address_id"] ?>
                                </td>
                                <td>
                                    RM<?php echo $row["total_amount"] ?>
                                </td>
                                <td>
                                    <?php echo $row["delivery_status"] ?>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        ?>
                        <td colspan="5" style="text-align:center"><b>No record found :(</b></td>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <script>
                $(document).ready(function () {
                    $('#f1, #f2, input[name="search"]').on('change keyup', function () {
                        var f1 = $('#f1').val();
                        var f2 = $('#f2').val();
                        var order = $('input[name="search"]').val();
                        $.ajax({
                            url: 'run_query.php',
                            method: 'POST',
                            data: { f1: f1, f2: f2, order: order },
                            success: function (response) {
                                $('#table-body').html(response);
                            }
                        });
                    });
                });

            </script>
        </div><!-- end of card-->
    </div>
</body>

</html>