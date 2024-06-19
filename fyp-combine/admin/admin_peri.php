<?php include 'admin_sidebar.php' ?>
<?php include 'databaseconnect.php' ?>

<head>
    <script>
        function add_check() {
            event.preventDefault();
            var no_error = true;

            var c = document.c_form.peri.value;
            if (c == "") {
                document.getElementById("valid").innerHTML = "Please enter a peripheral";
                no_error = false;
            } else {
                $.ajax({
                    url: 'run_query.php',
                    method: 'POST',
                    data: { p: c },
                    success: function (response) {
                        if (response.trim() === "exists") {
                            document.getElementById("valid").innerHTML = "This peripheral is already taken";
                            no_error = false;
                        } else {
                            document.getElementById("valid").innerHTML = "";
                            no_error = true;
                        }
                        if (no_error) {
                            document.getElementById("c_form").submit();
                        }
                    }
                });
            }
        }
    </script>
</head>
<style>
    .action button {
        margin-right: 20px;
    }

    .card {
        width: 100%;
        margin: 0 auto;
    }

    tr .action {
        width: 250px;
    }
</style>

<body>
    <div class="main p-3">
        <div class="head" style="display:flex;">
            <i class="lni lni-keyboard" style="font-size:50px;"></i>
            <h1 style="margin: 12px 0 0 30px">Category : Peripheral</Category:Components>
            </h1>
            <hr>
        </div>
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
            unset($_SESSION['img']);
            unset($_SESSION['title']);
            unset($_SESSION['text']);
            unset($_SESSION['icon']);
        }
        ?>
        <div class="container fluid px-4">
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Peripheral List
                                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                                    data-bs-target="#myModal">Add Peripheral</button>
                            </h4>
                        </div>
                        <!-- modal start-->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Peripheral</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <form action="a_category.php" method="POST" id="c_form" name="c_form">
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="form-group mb-4">
                                                <label>New Peripheral:</label>
                                                <input type="text" class="form-control" placeholder="peripheral"
                                                    name="peri">
                                                <span id="valid" style="color: red;"></span>
                                            </div>
                                        </div>
                                        <input type="hidden" name="save_peri">
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button onclick="add_check()" class="btn btn-primary" name="save_peri"><i
                                                    class="lni lni-checkmark" style="margin-top:5px;"></i></button>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i
                                                    class="lni lni-close" style="margin-top:5px;"></i></button>
                                        </div>
                                    </form>
                                </div><!--content end-->
                            </div><!-- modal-dialog-centered end-->
                        </div><!-- modal end-->

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-stripe">
                                    <thead>
                                        <tr>
                                            <!-- <th style="width:10%;">#</th> -->
                                            <th>Peripherals</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $result = mysqli_query($connect, "SELECT * FROM category WHERE category_type='2'");
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                <tr>
                                                    <!-- <td><?//php echo $row["category_id"]; ?></td> -->
                                                    <td><?php echo $row["category"]; ?></td>
                                                    <td class="action">
                                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                            data-bs-target="#e<?php echo $row["category_id"]; ?>">Edit</button>
                                                        <div class="modal" id="e<?php echo $row["category_id"]; ?>">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <!-- Modal Header -->
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">Edit</h4>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"></button>
                                                                    </div>

                                                                    <form action="e_category.php" method="POST">
                                                                        <!-- Modal body -->
                                                                        <div class="modal-body">
                                                                            <div class="form-group mb-4">
                                                                                <label>Peripheral:</label>
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="component" name="pc"
                                                                                    value="<?php echo $row["category"] ?>"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <input type="hidden" name="category_id"
                                                                            value="<?php echo $row["category_id"]; ?>">
                                                                        <!-- Modal footer -->
                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-primary"
                                                                                name="save_pc"><i class="lni lni-checkmark"
                                                                                    style="margin-top:5px;"></i></button>
                                                                            <button type="button" class="btn btn-danger"
                                                                                data-bs-dismiss="modal"><i class="lni lni-close"
                                                                                    style="margin-top:5px;"></i></button>

                                                                        </div>
                                                                    </form>
                                                                </div><!--content end-->
                                                            </div><!-- modal-dialog-centered end-->
                                                        </div><!-- modal end-->

                                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal<?php echo $row["category_id"]; ?>">
                                                            Delete</button>

                                                        <div class="modal fade"
                                                            id="exampleModal<?php echo $row["category_id"]; ?>" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Confirmation</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Do you really want to delete this
                                                                        peripheral?:<br><?php echo $row["category"] ?>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a
                                                                            href="d_category.php?category_id=<?php echo $row["category_id"] ?>"><button
                                                                                type="button"
                                                                                class="btn btn-primary">Yes</button></a>
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">No</button>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>