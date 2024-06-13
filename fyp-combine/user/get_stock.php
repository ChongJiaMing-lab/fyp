<?php

$product_id = $_GET['product_id'];


include 'data_connection.php';


$sql = "SELECT stock FROM product WHERE product_id = $product_id";
$result = mysqli_query($connect, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $stock_quantity = $row['stock'];
    echo json_encode(['stock' => $stock_quantity]);
} else {
    echo json_encode(['stock' => 0]);
}


mysqli_close($connect);
?>