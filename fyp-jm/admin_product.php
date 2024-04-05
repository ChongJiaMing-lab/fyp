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
        <!-- modal start-->
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add Product</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <!-- Modal body -->
                    <form action="a_product.php" method="POST">
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
                                <!-- select a prodcuct category -->
                                <div class="col-md-4">
                                    <div class="form-group mb-4">
                                        <label>Type:</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Components
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Peripherals
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group mb-4">
                                        <label>Category:</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>---</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                        <label>Name</label>
                                        <input type="text" class="form-control" placeholder="full name" name="name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                        <label>Name</label>
                                        <input type="text" class="form-control" placeholder="full name" name="name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                        <label>Name</label>
                                        <input type="text" class="form-control" placeholder="full name" name="name">
                                    </div>
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="save_product">Save</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- modal end-->
    <hr>
    <div class="card">
        <p><b>Showing 10 results.</b></p>
        <table class="table table-striped">
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
                    <tr>
                        <th scope="row">1</th>
                        <td><img src="image/3090.png" />&nbsp&nbsp&nbsp&nbsp&nbspNvidia 3090ti</td>
                        <td>Nvidia</td>
                        <td>Components</td>
                        <td>Graphics Card</td>
                        <td>RM 2000.00</td>
                        <td>122<br>
                            <div style="font-size:80%;">In Stock</div>
                        </td>
                        <td>Available</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button type="submit" class="btn btn-warning">Edit</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><img src="image/3090.png" />&nbsp&nbsp&nbsp&nbsp&nbspNvidia 3090ti</td>
                        <td>Nvidia</td>
                        <td>Components</td>
                        <td>Graphics Card</td>
                        <td>RM 2000.00</td>
                        <td>0<br>
                            <div style="font-size:80%;">Out of Stock</div>
                        </td>
                        <td>Available</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button type="submit" class="btn btn-warning">Edit</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><img src="image/3090.png" />&nbsp&nbsp&nbsp&nbsp&nbspNvidia 3090ti</td>
                        <td>Nvidia</td>
                        <td>Components</td>
                        <td>Graphics Card</td>
                        <td>RM 2000.00</td>
                        <td>122<br>
                            <div style="font-size:80%;">In Stock</div>
                        </td>
                        <!-- <td><button type="submit" class="status" name="pd_status" style="background-color:blue;">Available</button></td> -->
                        <td>Unavailable</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button type="submit" class="btn btn-warning">Edit</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </td>
                    </tr>
                </form>
            </tbody>
        </table>
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