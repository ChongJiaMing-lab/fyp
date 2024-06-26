<?php include 'admin_sidebar.php';
include 'databaseconnect.php';
?>
<head>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<style>
    .card {
        padding: 20px;
    }

    .input {
        width: 1000px;
        height: 50px;
        border-radius: 10px;
    }

    input[type=text] {
        background-color: white;
        background-position: 10px 10px;
        background-repeat: no-repeat;
        padding-left: 40px;
    }

    tbody tr {
        cursor: pointer;
    }

    tbody td {
    }

    .top {
        display: flex;
        align-items: space-between;
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
        top: 17%;
        font-size: 30px;
        left: 4.7px;
    }
</style>

<body>
    <div class="main p-3">
        <div class="head" style="display:flex;">
            <i class="lni lni-users" style="font-size:50px;"></i>
            <h1 style="margin: 12px 0 0 30px;">User</h1>
            <hr>
        </div>
        <hr>
        <div class="top">
            <form method="POST" action="" class="searchbar">
                <ion-icon class="magni" name="search-outline"></ion-icon>
                <input type="text" class="input" placeholder="Search with name" name="search" id="search">
            </form>
            <form method="POST" action="generate_report.php">
                <div class="btn-group">
                    <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Export:
                    </button>
                    <ul class="dropdown-menu">
                        <li><button type="submit" class="dropdown-item" href="#" name="cust_pdf">PDF</a></li>
                        <li><button type="submit" class="dropdown-item" href="#" name="cust_excel">CSV</a></li>
                    </ul>
                </div>
            </form>
        </div>
        <hr>
        <div class="card">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Joined Time</th>
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
                                    <?php echo $row["user_name"]; ?><br>
                                    <!-- <div style="font-size:11px;"><i>from </i> -->
                                        <!--< ?php echo $row["country"] ?> -->
                                    <!-- </div> -->
                                </td>
                                </td>
                                <td style="vertical-align: middle;">
                                    Telephone.No:
                                    <?php echo $row["contactnumber"] ?><br>
                                    Email:
                                    <?php echo $row["email"] ?>
                                </td>
                                <td>
                                    <?php echo $row["join_time"] ?>
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
            </script>
        </div><!-- end of card-->
    </div><!-- end of main-->
</body>