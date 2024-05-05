<?php
session_start();
include "data_connection.php";

if (isset($_GET["product_id"]) && isset($_GET["quantity"]) && isset($_SESSION["ID"])) {
    // 获取产品 ID、数量和用户 ID
    $product_id = $_GET["product_id"];
    $quantity = $_GET["quantity"];
    $user_id = $_SESSION["ID"];

    // 验证用户 ID 是否合法，防止 SQL 注入攻击
    $user_id = mysqli_real_escape_string($connect, $user_id);

    // 查询购物车中是否已经存在该产品
    $existing_query = "SELECT * FROM cart WHERE product_id = $product_id AND user_id = $user_id AND status != 'payed'";
    $result = mysqli_query($connect, $existing_query);

    if (mysqli_num_rows($result) > 0) {
        // 如果购物车中已经存在该产品，则更新数量
        $row = mysqli_fetch_assoc($result);
        $new_qty = $row['qty'] + $quantity;

        // 更新购物车中该产品的数量
        $update_query = "UPDATE cart SET qty = $new_qty WHERE product_id = $product_id AND user_id = $user_id AND status != 'payed'";
        mysqli_query($connect, $update_query);
    } else {
        // 如果购物车中不存在该产品，则插入新记录
        $insert_query = "INSERT INTO cart (product_id, user_id, qty) VALUES ($product_id, $user_id, $quantity)";
        mysqli_query($connect, $insert_query);
    }
    echo 'success';
} else {
    echo 'fail';
}
?>
