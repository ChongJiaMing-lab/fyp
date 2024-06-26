<?php include 'admin_sidebar.php' ?>
<?php include 'databaseconnect.php' ?>

<head>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
    <script>
        $(function () {
            var dateFormat = "yy/mm/dd",
                from = $("#from")
                    .datepicker({
                        defaultDate: "+1w",
                        changeMonth: true,
                        numberOfMonths: 1,
                        dateFormat: 'yy/mm/dd'
                    })
                    .on("change", function () {
                        to.datepicker("option", "minDate", getDate(this));
                    }),
                to = $("#to").datepicker({
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 1,
                    dateFormat: 'yy/mm/dd'
                })
                    .on("change", function () {
                        from.datepicker("option", "maxDate", getDate(this));
                    });

            function getDate(element) {
                var date;
                try {
                    date = $.datepicker.parseDate(dateFormat, element.value);
                } catch (error) {
                    date = null;
                }

                return date;
            }
        });
    </script>
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

    .from,
    .to {
        border: 1px solid black;
        display: flex;
        width: 175px;
        text-align: left;
        margin-bottom: 15px;
        border-radius: 10px;
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
        top: 28.5%;
        font-size: 30px;
        left: 7px;
    }

    .input {
        width: 1000px;
        height: 50px;
        border-radius: 10px;
    }
</style>

<body>
    <div class="main p-3">
        <div class="head" style="display:flex;">
            <i class="lni lni-list" style="font-size:50px;"></i>
            <h1 style="margin: 12px 0 0 30px;">Order</h1>
            <hr>
        </div>
        <hr>
        <div class="top">
            <form method="POST" action="" class="filter">
                <label>Filter by:</label>
                <select class="form-select" id="f1" aria-label="Default select example" name="o_filt">
                    <option value="" selected>-General-</option>
                    <optgroup label="Delivery Status:">
                        <option value="Processing">Processing</option>
                        <option value="Shipping">Shipping</option>
                        <option value="Completed">Completed</option>
                </select>
                <label>Sort by:</label>
                <select class="form-select" id="f2" aria-label="Default select example" name="o_sort">
                    <option selected>-General-</option>
                    <option value="a">Newest</option>
                    <option value="b">Oldest</option>
                    <option value="c">Highest Total</option>
                    <option value="d">Lowest Total</option>
                </select>
                <label for="from">From</label>
                <input type="text" id="from" class="from" name="from">
                <label for="to">to</label>
                <input type="text" id="to" class="to" name="to">
            </form>
            <form method="POST" action="" class="searchbar">
                <ion-icon class="magni" name="search-outline"></ion-icon>
                <input type="text" class="input" placeholder="Search with name" name="search" id="search">
            </form>
        </div>
        <hr>
        <div class="card">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col" style="width:1px;">Order#</th>
                        <th scope="col">Created by:</th>
                        <th scope="col">Created Time</th>
                        <th scope="col">Shipped to</th>
                        <th scope="col" style="width:1px;">Total</th>
                        <th scope="col">Delivery Status</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <?php
                    $q = "SELECT *,user_information.user_name 
                    FROM order_ 
                    JOIN user_information ON order_.user_id = user_information.ID;                                
                    ";
                    $result = mysqli_query($connect, $q);
                    $count = mysqli_num_rows($result);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $user_id = $row["user_id"];
                            $user = "SELECT * FROM user_information WHERE ID = '$user_id'";
                            $user_run = mysqli_query($connect, $user);
                            $row_user = mysqli_fetch_assoc($user_run);

                            $address_id = $row["address_id"];
                            $add = "SELECT * FROM user_address WHERE address_id = '$address_id'";
                            $add_run = mysqli_query($connect, $add);
                            $row_add = mysqli_fetch_assoc($add_run);
                            ?>
                            <tr onclick="window.location='order_detail.php?order_id=<?php echo $row['order_id'] ?>';">
                                <th scope="row">
                                    <?php echo $row["order_id"] ?>
                                </th>
                                <td>
                                    <?php echo $row["user_name"]; ?><br>
                                    <!-- <div style="font-size:11px;"><i>from </i>
                                        < ?php echo $row["country"] ?> -->
                                    <!-- </div> -->
                                </td>
                                <td>
                                    <?php echo $row["time_status"] ?>
                                </td>
                                <td>
                                    <?php echo
                                        $row_add["address"] . ", " . $row_add["postcode"] . " " . $row_add["city"]
                                        . ", " . $row_add["state"]; ?>
                                </td>

                                <td>
                                    RM<?php echo number_format($row["total_amount"], 2); ?>

                                </td>
                                <td>
                                    <?php echo $row["delivery_status"] ?>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        ?>
                        <td colspan="5" style="text-align:center"><b></b></td>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <script>
                $(document).ready(function () {
                    $('#f1, #f2, input[name="search"], #from, #to').on('change keyup', function () {
                        var f1 = $('#f1').val();
                        var f2 = $('#f2').val();
                        var order = $('input[name="search"]').val();
                        var from = $('#from').val();
                        var to = $('#to').val();
                        $.ajax({
                            url: 'run_query.php',
                            method: 'POST',
                            data: { f1: f1, f2: f2, order: order, from: from, to: to },
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