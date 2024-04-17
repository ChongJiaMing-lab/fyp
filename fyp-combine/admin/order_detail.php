<?php include 'admin_sidebar.php';
include 'databaseconnect.php';
?>

<body>
    <div class="main p-3">
        <?php 
        $order = $_GET["order_id"]?>
        <h1>Order#<?php echo $order?></h1>
    </div>
</body>