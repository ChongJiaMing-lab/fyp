<?php
include 'data_connection.php';
session_start();
$product_id = $_GET['product_id'];
$user_id =$_SESSION['ID'];


$sql = "SELECT SUM(qty) AS cart_quantity FROM cart WHERE product_id = $product_id AND user_id = $user_id  AND status != 'payed'";

$result = mysqli_query($connect, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $cart_quantity = isset($row['cart_quantity']) ? $row['cart_quantity'] : 0;
    echo json_encode(['cart_quantity' => $cart_quantity]);
    
} else {
    echo json_encode(['cart_quantity' => 0]);
}

mysqli_close($connect);
?>
