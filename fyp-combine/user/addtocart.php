<?php
session_start();
include "data_connection.php";

if(isset($_GET["product_id"])) {
    $product_id = $_GET["product_id"];
    $ID = $_SESSION["ID"];

    // 检查购物车中是否已存在相同的产品
    $existing_query = "SELECT * FROM cart WHERE product_id = $product_id AND user_id = $ID";
    $existing_result = mysqli_query($connect, $existing_query);
    if(mysqli_num_rows($existing_result) > 0) {
        // 如果购物车中已存在相同的产品，则更新数量
        $existing_row = mysqli_fetch_assoc($existing_result);
        $existing_qty = $existing_row['qty'] + 1;
        $update_query = "UPDATE cart SET qty = $existing_qty WHERE product_id = $product_id AND user_id = $ID";
        mysqli_query($connect, $update_query);
    } else {
        // 如果购物车中不存在相同的产品，则添加新的产品到购物车
        $insert_query = "INSERT INTO cart (product_id, user_id, qty) VALUES ($product_id, $ID, 1)";
        mysqli_query($connect, $insert_query);
    }

    echo "<script>window.location.href='product_list.php';</script>";
} else {
    echo '<script>alert("ERROR TO ADD PRODUCT");</script>';
}
?>