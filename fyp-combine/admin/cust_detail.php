<?php  include 'admin_sidebar.php';
    include 'databaseconnect.php';
?>

<body>
    <div class="main p-3">
        <h1>This is cusotmer details page.</h1>
        <?php 
            if($_GET["ID"])
                $id = $_GET["ID"]; 
            echo "CUstomer ID is #"."$id \n"?>
    </div>
</body>