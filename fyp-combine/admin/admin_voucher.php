<?php include 'admin_sidebar.php';
include 'databaseconnect.php';
?>

<head>
    <script>
        function add_check() {
            event.preventDefault();
            var no_error = true;

            var r = document.s_form.rate.value;
            var c = document.s_form.cost.value;
            if (r == "") {
                document.getElementById("check_rate").innerHTML = "Please enter a rate(1%-100%)";
                no_error = false;
            } else {
                if (isNaN(r)) {
                    document.getElementById("check_rate").innerHTML = "The rate must be numberic";
                    no_error = false;
                } else {
                    if (r < 1 || r > 100) {
                        document.getElementById("check_rate").innerHTML = "Please enter a valid rate(1%-100%)";
                        no_error = false;
                    } else {
                        document.getElementById("check_rate").innerHTML = "";

                    }
                }
            }

            if (c == "") {
                document.getElementById("check_c").innerHTML = "Please enter point cost";
                no_error = false;
            } else {
                if (isNaN(c)) {
                    document.getElementById("check_c").innerHTML = "Point cost must be numberic";
                no_error = false;
                } else {
                    document.getElementById("check_c").innerHTML = "";
                }
            }
        if (no_error) {
            document.getElementById("s_form").submit();
        }
    }
    </script>
</head>
<style>
    .card {
        padding: 20px;
    }
</style>

<body>
    <div class="main p-3">
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
        <div class="head" style="display:flex;">
            <i class="lni lni-offer" style="font-size:50px;"></i>
            <h1 style="margin: 12px 0 0 30px;">Voucher</Category:Components>
            </h1>
            <hr>
        </div>
        <hr>
        <hr>
        <div class="card" style="width:50%;">
            <div class="card-head" style="margin-bottom:30px;">
                <button type="button" class="btn btn-success float-start" data-bs-toggle="modal"
                    data-bs-target="#myModal">Generate Voucher</button>
            </div>
            <div class="modal" id="myModal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Voucher</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <form action="a_voucher.php" method="POST" id="s_form" name="s_form">
                            <!-- Modal body -->
                            <div class="modal-body">
                                <label for="rate">Voucher Rate</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="rate" name="rate">
                                    <div class="input-group-append">
                                        <span class="input-group-text">%</span>
                                    </div>
                                </div>
                                <div>
                                    <span id="check_rate" style="color:red"></span>
                                </div>
                                <label for="cost">Point Cost</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="cost" name="cost" placeholder="00">
                                </div>
                                <div>
                                    <span id="check_c" style="color:red"></span>
                                </div>
                            </div>
                            <input type="hidden" name="voucher">
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button onclick="add_check();" class="btn btn-primary" name="voucher">Generate</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div><!--content end-->
                </div><!-- modal-dialog-centered end-->
            </div><!-- modal end-->

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Voucher Rate</th>
                        <th scope="col">Point Cost</th>
                    </tr>
                </thead>
                <?php
                $s = "SELECT * FROM admin_voucher";
                $s_run = mysqli_query($connect, $s);
                ?>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($s_run)) {
                        $rate = $row["voucher_rate"] * 100;
                        ?>
                        <tr>
                            <td><?php echo $rate . "%" ?></td>
                            <td><?php echo $row["point_cost"] ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div><!-- end of card-->
    </div><!-- end of main-->
</body>