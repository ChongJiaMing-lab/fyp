<?php  include 'admin_sidebar.php';
    include 'databaseconnect.php';
?>

<body>
    <div class="main p-3">
        <h1>This is cusotmer details page.</h1>
        <?php 
            if($_GET["user_id"])
                $id = $_GET["user_id"]; 
            echo "CUstomer ID is #"."$id \n"?>
    </div>
</body>