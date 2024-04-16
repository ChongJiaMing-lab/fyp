<?php include 'admin_sidebar.php' ?>
<?php include 'databaseconnect.php' ?>
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
            <i class="lni lni-lineicons-symbol" style="font-size:50px;"></i>
            <h1 style="margin: 12px 0 0 30px">Category : Brand
            </h1>
            <hr>
        </div>
        <?php
        if (isset($_SESSION['msg']) && $_SESSION['msg'] != '') {
            ?>
            <script>
                Swal.fire({
                    title: "Success!",
                    text: "The brand: <<?php echo $_SESSION['msg']; ?>> is added!",
                    icon: "success"
                });
            </script>
            <?php
            unset($_SESSION['msg']);
        }
        ?>
        <?php
        if (isset($_SESSION['d']) && $_SESSION['d'] != '') {
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Hey!</strong>
                <?php echo $_SESSION['d']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
            unset($_SESSION['d']);
        }
        ?>
        <div class="container fluid px-4">
            <div class="row mt-4">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h4>Brand List
                                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                                    data-bs-target="#myModal">Add Brand</button>
                            </h4>
                        </div>
                        <!-- modal start-->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Brand</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <form action="a_category.php" method="POST">
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="form-group mb-4">
                                                <label>New Brand</label>
                                                <input type="text" class="form-control" placeholder="brand" name="brand"
                                                    required>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary"
                                                name="save_brand">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- modal end-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-stripe">
                                    <thead>
                                        <tr>
                                            <th style="width:10%;">#</th>
                                            <th>Brand</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $result = mysqli_query($connect, "SELECT * FROM brand");
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $row["brand_id"]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row["brand_name"] ?>
                                                    </td>
                                                    <td class="action">
                                                        <button type="submit" class="btn btn-warning">Edit</button>
                                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal">
                                                            Delete</button>

                                                        <div class="modal fade" id="exampleModal" tabindex="-1"
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
                                                                        Do you really want to delete this brand?:<br>
                                                                        <?php echo $row["brand_name"] ?>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">No</button>
                                                                        <a
                                                                            href="d_category.php?brand_id=<?php echo $row["brand_id"] ?>"><button
                                                                                type="button"
                                                                                class="btn btn-primary">Yes</button>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        } else {
                                            echo "No records found :(";
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