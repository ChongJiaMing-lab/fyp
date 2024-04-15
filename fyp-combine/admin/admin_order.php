<?php include 'admin_sidebar.php' ?>
<?php include 'databaseconnect.php' ?>


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
</style>

<body>
    <div class="main p-3">
        <div class="top">
            <form method="POST" action="" class="filter">
                <label>Filter by:</label>
                <select class="form-select" aria-label="Default select example" name="o_filt">
                    <option selected>General</option>
                    <optgroup label="Payment Status in:">
                        <option value="1">Paid</option>
                        <option value="2">Cancelled</option>
                    <optgroup label="Delivery Status in:">
                        <option value="2">Processing</option>
                        <option value="3">Shipping</option>
                        <option value="4">Completed</option>
                </select>
                <label>Sort by:</label>
                <select class="form-select" aria-label="Default select example" name="o_sort">
                    <option selected>-General-</option>
                    <option value="1">Newest</option>
                    <option value="2">Oldest</option>
                    <option value="3">Highest Total</option>
                    <option value="4">Lowest Total</option>
                </select>
            </form>
        </div>
        <hr>
        <div class="card">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Order#</th>
                        <th scope="col">Payment Status</th>
                        <th scope="col">Total</th>
                        <th scope="col">Delivery Status</th>
                        <th scope="col">Created Time</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <?php
                    $q = "SELECT * FROM user_information";

                    $result = mysqli_query($connect, $q);
                    $count = mysqli_num_rows($result);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr onclick="window.location='cust_detail.php?ID=<?php echo $row['ID'] ?>';">
                                <th scope="row">
                                    <?php echo $row["ID"] ?>
                                </th>
                                <td>
                                    <?php echo $row["name"]; ?><br>
                                    <div style="font-size:11px;"><i>from </i>
                                        <!--< ?php echo $row["country"] ?> -->
                                    </div>
                                </td>
                                </td>
                                <td style="vertical-align: middle;">
                                    Telephone.No:
                                    <?php echo $row["contactnumber"] ?><br>
                                    Email:
                                    <?php echo $row["email"] ?>
                                </td>
                                <td>
                                    <?php echo $row["gender"] ?>
                                </td>
                                <td>
                                    <?php echo $row["join_time"] ?>
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
            <!-- <script>
                $(document).ready(function () {
                    $('input[name="search"]').on('keyup', function () {
                        var value = $(this).val();
                        $.ajax({
                            url: 'run_query.php',
                            method: 'POST',
                            data: { cust: value },
                            success: function (response) {
                                $('#table-body').html(response);
                            }
                        });
                    });
                });
            </script> -->
        </div><!-- end of card-->
    </div>
</body>