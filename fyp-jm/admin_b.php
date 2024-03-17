<?php include 'admin_sidebar.php'?>
<?php include 'databaseconnect.php'?>
<body>
<div class="main p-3">
    <div class="container fluid px-4">
        <div class="row mt-4">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h4>Brands
                            <a href="add_brand.php" class="btn btn-primary float-end">Add Brand</a>
                        </h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="talbe-responsive">
                        <table class="table table-bordered table-stripe">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Brand</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $result = mysqli_query($connect,"SELECT * FROM brand");
                                    if(mysqli_num_rows($result) > 0)
                                    {
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            ?>
                                            <tr>
                                                <td><?php echo $row["brand_id"]; ?></td>
                                                <td><?php echo $row["brand_name"] ?></td>
                                            </tr>
                                        <?php
                                        }
                                    }
                                    else
                                    {
                                        echo"No records found :(";
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
</body>