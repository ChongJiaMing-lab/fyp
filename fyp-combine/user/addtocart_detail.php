<?php
session_start();
include "data_connection.php";

if (isset($_GET["product_id"]) && isset($_GET["quantity"]) && isset($_SESSION["ID"])) {
    $product_id = $_GET["product_id"];
    $quantity = intval($_GET["qty"]);
    $user_id = $_SESSION["ID"];

    
    $existing_query = "SELECT * FROM cart WHERE product_id = $product_id AND user_id = $user_id AND status != 'payed'";
    $result = mysqli_query($connect, $existing_query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $new_qty = $row['qty'] + $quantity;
        $update_query = "UPDATE cart SET qty = $new_qty WHERE product_id = $product_id AND user_id = $user_id AND status != 'payed'";
        mysqli_query($connect, $update_query);
    } else {
        $insert_query = "INSERT INTO cart (product_id, user_id, qty) VALUES ($product_id, $user_id, $quantity)";
        mysqli_query($connect, $insert_query);
    }
    echo 'success';
} else {
    echo 'fail';
}
?>
