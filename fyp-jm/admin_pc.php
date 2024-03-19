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
                        <h4>Pc Components
                            <a href="add_brand.php" class="btn btn-primary float-end">Add Components</a>
                        </h4>
                    </div>
                
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-stripe">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Pc Components</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $result = mysqli_query($connect,"SELECT * FROM category WHERE category_type='1'");
                                        if(mysqli_num_rows($result) > 0)
                                        {
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row["category_id"]; ?></td>
                                                    <td><?php echo $row["category"] ?></td>
                                                    <td class="action"><button type="button" class="btn btn-warning">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button></td>
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