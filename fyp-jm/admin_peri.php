<?php include 'admin_sidebar.php'?>
<?php include 'databaseconnect.php'?>
<style>
.action button 
{
    margin-right: 20px;
}

.card
{
    width:60%;
    margin: 0 auto;
}
tr .action
{
    width:250px;
}
</style>
<body>
<div class="main p-3">
    <div class="container fluid px-4">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                        <div class="card-header">
                            <h4>Peripherals
                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#myModal">Add Peripheral</button>
                            </h4>
                        </div>
                        <!-- modal start-->
                        <div class="modal" id="myModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Peripherals</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    
                                    <form action="a_category.php" method="POST">
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="form-group mb-4">
                                                <label>New Peripheral:</label>
                                                <input type="text" class="form-control" placeholder="peripheral" name="peri" required>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="save_peri">Save</button>
                                        </div>
                                    </form>
                                </div><!--content end-->
                            </div><!-- modal-dialog-centered end-->
                        </div><!-- modal end-->

                        <?php 
                        if(isset($_SESSION['msg']) && $_SESSION['msg'] != ''){
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Hey!</strong> <?php echo $_SESSION['msg']; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['msg']);
                        }
                        ?>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-stripe">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Peripherals</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $result = mysqli_query($connect,"SELECT * FROM category WHERE category_type='2'");
                                        if(mysqli_num_rows($result) > 0)
                                        {
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row["category_id"]; ?></td>
                                                    <td><?php echo $row["category"] ?></td>
                                                    <td class="action"><button type="submit" class="btn btn-warning">Edit</button>
                                                    <a href="d_category.php?category_id=<?php echo $row["category_id"]?>" class="btn btn-danger"
                                                                data-bs-toggle="modal" data-bs-target="#<?php $row["category_id"]?>">Delete</a></td>

                                                    <div class="modal fade" id="<?php $row["category_id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                Do you really want to delete this category?:<br><?php echo $row["category"]?>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                                    <button type="button" class="btn btn-primary">Yes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
</div>
</body>