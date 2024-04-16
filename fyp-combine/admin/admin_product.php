<?php include 'databaseconnect.php' ?>
<?php include 'admin_sidebar.php' ?>

<style>
    .card {
        padding: 16px;
    }

    .table img {
        width: 100px;
        height: auto;
    }

    .table tr {
        background-color: grey;
    }

    .top {
        display: flex;
        align-items: space-between;
    }

    .input {
        width: 1000px;
        height: 50px;
        border-radius: 10px;
    }

    .input[type=text] {
        background-color: white;
        background-image: url('searchicon.png');
        background-position: 10px 10px;
        background-repeat: no-repeat;
        padding-left: 40px;
    }

    .top .btn {
        float: right;
    }

    .form-control,
    .form-select,
    .form-check {
        border-width: 3px;
    }

    tr {
        cursor: pointer;
    }

    .lr {
        display: flex;
    }

    .modal-edit input,
    .modal-edit textarea,
    .modal-edit select {
        border: 1.5px solid black;
    }
</style>

<body>
    <div class="main p-3">
        <h1>Product List</h1>
        <hr>
        <div class="top">
            <form method="POST" action="" class="searchbar">
                <ion-icon class="magni" name="search-outline"></ion-icon>
                <input type="text" class="input" placeholder="Search with name" name="search">
            </form>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Add
                Product</button>
        </div>
        <?php
        if (isset($_SESSION['title']) && $_SESSION['title'] != '') {
            ?>
            <script>
                Swal.fire({
                    title: "<?php echo $_SESSION['title']; ?>",
                    <?php if (isset($_SESSION['img']) && $_SESSION['img'] != '') { ?>
                                                                                                                                imageUrl: "../image/<?php echo $_SESSION['img'] ?>",
                        imageWidth: 35 + '%',
                        imageHeight: 'auto',
                    <?php } ?>
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
        <!-- modal start-->
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add Product</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <!-- Modal body -->
                    <form id="p_form" action="a_product.php" method="POST">
                        <div class="modal-body">
                            <div class="row">
                                <!-- product title -->
                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                        <label for="prodcuct_title">Product:</label>
                                        <input type="text" class="form-control" name="product_name"
                                            placeholder="product name">
                                    </div>
                                </div>
                                <!-- brand -->
                                <div class="col-md-4">
                                    <div class="form-group mb-4">
                                        <label>Brand:</label>
                                        <select class="form-select" id="brand" aria-label="Default select example"
                                            name="brand">
                                            <?php
                                            $b = mysqli_query($connect, "SELECT * FROM brand");
                                            if (mysqli_num_rows($b) > 0) {
                                                while ($row = mysqli_fetch_assoc($b)) {
                                                    ?>
                                                    <option value="<?php echo $row['brand_id'] ?>">
                                                        <?php echo $row['brand_name'] ?>
                                                    </option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- select a product category type-->
                                <div class="col-md-3">
                                    <div class="form-group mb-4">
                                        <label>Type:</label>
                                        <?php
                                        $type = mysqli_query($connect, "SELECT * FROM product_type");
                                        if (mysqli_num_rows($type) > 0) {
                                            while ($row = mysqli_fetch_assoc($type)) {
                                                ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="radio"
                                                        id="flexRadioDefault1" value="<?php echo $row['type_id'] ?>">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        <?php echo $row['type'] ?>
                                                    </label>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <!-- category -->
                                <div class="col-md-5">
                                    <div class="form-group mb-4">
                                        <label>Category:</label>
                                        <select class="form-select" id="category" aria-label="Default select example"
                                            name="cate"></select>
                                    </div>
                                </div>

                                <script>
                                    $(document).ready(function () {
                                        $('input[name="radio"]').on('click', function () {

                                            var setvalue = $('input[name="radio"]:checked').val();
                                            $.ajax({
                                                url: 'run_query.php',
                                                method: 'POST',
                                                data: { bid: setvalue },
                                                success: function (data) {
                                                    $('#category').html(data);
                                                }
                                            });
                                        });
                                    });
                                </script>

                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Description</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                placeholder="product desc" name="desc"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                        <label class="form-label" for="customFile">Product Image</label>
                                        <input type="file" class="form-control" id="customFile" name="img" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label class="form-label" for="price">Price:</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">RM</span>
                                            <input type="text" class="form-control" id="price" name="price">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label class="form-label" for="qty">Stock:</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="qty" name="qty">
                                            <span class="input-group-text">pcs</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" name="save_product">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- modal end-->
        <hr>
        <div class="card">
            <p><b>Showing .. results.</b></p>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Type</th>
                        <th scope="col">Category</th>
                        <th scope="col">Price</th>
                        <th scope="col">Stock(QTY)</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <form action="a_product.php" method="POST" id="pd">
                        <?php
                        $query = "SELECT 
                                product.product_id, 
                                product.product_name, 
                                product.product_desc, 
                                product.image, 
                                product.price, 
                                product.qty,
                                product_status.product_status, 
                                brand.brand_name, 
                                category.category,
                                product_type.type
                                FROM product
                                JOIN brand ON product.brand_id = brand.brand_id
                                JOIN category ON product.category_id = category.category_id
                                JOIN product_status ON product.product_status = product_status.p_status_id
                                JOIN product_type ON product.product_type = product_type.type_id
                                ORDER BY product.product_id";

                        $result = mysqli_query($connect, $query);
                        $_SESSION["count"] = mysqli_num_rows($result);
                        $count = 1;
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <div class="modal fade" id="v<?php echo $row["product_id"]; ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">View Product</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="up" style="display:flex;">
                                                        <img src="../image/<?php echo $row['image'] ?>"
                                                            style="max-height:200px; width:auto;margin:auto;" />
                                                        <div class="p_info">
                                                            <div class="form-group">
                                                                <b><?php echo $row['product_name'] ?></b>
                                                                <hr><br>
                                                            </div>
                                                            <div class="lr">
                                                                <div class="v_left">
                                                                    <div class="form-group mb-4">
                                                                        <label style="margin-right:31px;">
                                                                            <b>Brand</b>
                                                                        </label>
                                                                        <?php echo $row['brand_name'] ?>
                                                                    </div>

                                                                    <div class="form-group mb-4">
                                                                        <label style="margin-right:40px;">
                                                                            <b>Type</b>
                                                                        </label>
                                                                        <?php echo $row['type'] ?>
                                                                    </div>

                                                                    <div class="form-group mb-4">
                                                                        <label style="margin-right:5px;">
                                                                            <b>Category</b>
                                                                        </label>
                                                                        <?php echo $row['category'] ?>
                                                                    </div>
                                                                </div>
                                                                <div class="v_right" style="margin-left:22px;">
                                                                    <div class="form-group mb-4">
                                                                        <label style="margin-right:16.5px;">
                                                                            <b>Stock</b>
                                                                        </label>
                                                                        <?php echo $row['qty'] ?>
                                                                    </div>

                                                                    <div class="form-group mb-4">
                                                                        <label style="margin-right:19px;">
                                                                            <b>Price</b>
                                                                        </label>
                                                                        <?php echo $row['price'] ?>
                                                                    </div>

                                                                    <div class="form-group mb-4">
                                                                        <label style="margin-right:9px;">
                                                                            <b>Status</b>
                                                                        </label>
                                                                        <?php echo $row['product_status'] ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" style="margin-left:30px;">
                                                        <label><b>Description</b></label><br>
                                                        <?php echo $row['product_desc'] ?>
                                                    </div>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- modal end-->

                                    <!-- first table row start-->
                                    <th scope="row" data-bs-toggle="modal" data-bs-target="#v<?php echo $row["product_id"]; ?>">
                                        <?php echo $row['product_id'] ?>
                                    </th>

                                    <td data-bs-toggle="modal" data-bs-target="#v<?php echo $row["product_id"]; ?>">
                                        <img src="../image/<?php echo $row['image'] ?>"
                                            style="max-height:100px; max-width:auto;" />&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <?php echo $row['product_name'] ?>
                                    </td>

                                    <td data-bs-toggle="modal" data-bs-target="#v<?php echo $row["product_id"]; ?>">
                                        <?php echo $row['brand_name'] ?>
                                    </td>

                                    <td data-bs-toggle="modal" data-bs-target="#v<?php echo $row["product_id"]; ?>">
                                        <?php echo $row['type'] ?>
                                    </td>

                                    <td data-bs-toggle="modal" data-bs-target="#v<?php echo $row["product_id"]; ?>">
                                        <?php echo $row['category'] ?>
                                    </td>

                                    <td data-bs-toggle="modal" data-bs-target="#v<?php echo $row["product_id"]; ?>">
                                        RM
                                        <?php echo $row['price'] ?>
                                    </td>

                                    <td data-bs-toggle="modal" data-bs-target="#v<?php echo $row["product_id"]; ?>">
                                        <?php echo $row['qty'] ?><br>
                                        <div style="font-size:80%; color:<?php echo ($row['qty'] < 1) ? 'red' : 'green'; ?>">
                                            <?php echo ($row['qty'] < 1) ? 'Out of Stock' : 'In Stock'; ?>
                                        </div>
                                    </td>

                                    <td data-bs-toggle="modal" data-bs-target="#v<?php echo $row["product_id"]; ?>">
                                        <?php echo $row['product_status'] ?>
                                    </td>

                            </form>
                            <td class="button-action">
                                <!-- _____________________________________EDIT__________________________________________-->
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">

                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#e<?php echo $row["product_id"]; ?>">Edit</button>

                                    <div class="modal fade modal-edit" id="e<?php echo $row["product_id"]; ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true" style="border:1px solid black;">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <!-- Modal body -->
                                                <form id="p_form" action="a_product.php" method="POST">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <!-- product title -->
                                                            <div class="col-md-12">
                                                                <div class="form-group mb-4">
                                                                    <label for="prodcuct_title">Product:</label>
                                                                    <input type="text" class="form-control" name="product_name"
                                                                        placeholder="product name"
                                                                        value="<?php echo $row["product_name"] ?>">
                                                                </div>
                                                            </div>
                                                            <!-- brand -->
                                                            <div class="col-md-4">
                                                                <div class="form-group mb-4">
                                                                    <label>Brand:</label>
                                                                    <?php
                                                                    $selected_brand = $row["brand_name"];
                                                                    $select = mysqli_query($connect, "SELECT * FROM brand where brand_name = '$selected_brand'");
                                                                    ?>
                                                                    <select class="form-select" id="brand"
                                                                        aria-label="Default select example" name="brand">
                                                                        <?php
                                                                        foreach ($select as $rowb) {
                                                                            ?>
                                                                            <option value="<?php echo $rowb['brand_id']; ?>"
                                                                                selected>
                                                                                <?php echo $rowb['brand_name'];
                                                                        }
                                                                        $b = mysqli_query($connect, "SELECT * FROM brand WHERE NOT brand_name = '$selected_brand'");
                                                                        if (mysqli_num_rows($b) > 0) {
                                                                            while ($rowb = mysqli_fetch_assoc($b)) {
                                                                                ?>
                                                                                <option value="<?php echo $rowb['brand_id'] ?>">
                                                                                    <?php echo $rowb['brand_name'] ?>
                                                                                </option>
                                                                                <?php
                                                                            }
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!-- select a product category type-->
                                                            <div class="col-md-3">
                                                                <div class="form-group mb-4">
                                                                    <label>Type:</label>
                                                                    <?php
                                                                    $selected_type = $row["type"];
                                                                    $select = mysqli_query($connect, "SELECT * FROM product_type");
                                                                    while ($rowt = mysqli_fetch_assoc($select)) {
                                                                        ?>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input edit-radio" type="radio"
                                                                                id="edit-radio<?php echo $row["product_id"]; ?>"
                                                                                name="edit-radio"
                                                                                value="<?php echo $rowt['type_id']; ?>" <?php if ($rowt['type'] == $selected_type) {
                                                                                       echo "checked";
                                                                                   } ?> />
                                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                                <?php echo $rowt['type']; ?>
                                                                            </label>
                                                                        </div>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                            <!-- category -->
                                                            <div class="col-md-5">
                                                                <div class="form-group mb-4">
                                                                    <label>Category:</label>
                                                                    <select class="form-select"
                                                                        id="edit-category<?php echo $row["product_id"]; ?>"
                                                                        aria-label="Default select example" name="cate">
                                                                        <?php
                                                                        $selected_cate = $row["category"];
                                                                        $select = mysqli_query($connect, "SELECT * FROM category where category = '$selected_cate'");
                                                                        while ($rowc = mysqli_fetch_assoc($select)) {
                                                                            ?>
                                                                            <option value="<?php echo $rowc['category_id']; ?>"
                                                                                checked>
                                                                                <?php echo $rowc['category']; ?>
                                                                            </option>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <script>
                                                                $(document).ready(function () {
                                                                    $('input[name="edit-radio"]').on('click', function () {
                                                                        var set = $('input[id="edit-radio' + <?php echo $row["product_id"]; ?> + '"]:checked').val();
                                                                        $.ajax({
                                                                            url: 'run_query.php',
                                                                            method: 'POST',
                                                                            data: { bid: set },
                                                                            success: function (data) {
                                                                                $("#edit-category" + <?php echo $row["product_id"]; ?>).html(data);
                                                                            }
                                                                        });
                                                                    });
                                                                });
                                                            </script>

                                                            <div class="col-md-12">
                                                                <div class="form-group mb-4">
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="exampleFormControlTextarea1">Description</label>
                                                                        <textarea class="form-control"
                                                                            id="exampleFormControlTextarea1" rows="3"
                                                                            placeholder="product desc"
                                                                            name="desc"><?php echo $row["product_desc"] ?></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group mb-4">
                                                                    <label class="form-label" for="customFile">Product
                                                                        Image</label>
                                                                    <img src=../image/<?php echo $row["image"]?>/>
                                                                    <input type="file" class="form-control" id="customFile"
                                                                        name="img" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group mb-4">
                                                                    <label class="form-label" for="price">Price:</label>
                                                                    <div class="input-group mb-3">
                                                                        <span class="input-group-text">RM</span>
                                                                        <input type="text" class="form-control" id="price"
                                                                            name="price" value="<?php echo $row["price"] ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group mb-4">
                                                                    <label class="form-label" for="qty">Stock:</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" id="qty"
                                                                            name="qty" value="<?php echo $row["qty"] ?>">
                                                                        <span class="input-group-text">pcs</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="product_id"
                                                                value="<?php echo $row["product_id"]; ?>">
                                                        </div>
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary"
                                                            name="edit_product">Update</button>
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- modal end-->


                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal<?php echo $row["product_id"]; ?>">
                                        Delete</button>
                                    <div class="modal fade" id="exampleModal<?php echo $row["product_id"]; ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        Confirmation</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>

                                                <div class="modal-body">
                                                    Confirm to delete?:<br>
                                                    <img src="../image/<?php echo $row["image"] ?>">
                                                    <?php echo $row["product_name"] ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="a_product.php?product_id=<?php echo $row["product_id"] ?>"><button
                                                            type="button" class="btn btn-primary">Yes</button></a>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">No</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end delete confirmation -->
                                </div>
                            </td>
                            </tr>
                            <?php
                            }
                        } else {
                            ?>
                        <td style="text-align:center"><b>No record found :(</b></td>
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
                            data: { product: value },
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

<script>
    const stt = document.querySelector('.status');
    const statusForm = document.getElementById('pd');

    let blue = true;
    stt.addEventListener('click', (pd) => {
        event.preventDefault();
        if (blue) {
            stt.style.backgroundColor = '#ffac09';
        }
        else {
            stt.style.backgroundColor = 'blue';
        }
        blue = !blue;
    })


</script>