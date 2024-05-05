<?php
include("data_connection.php");
if (isset($_POST["new_qty"]) && isset($_POST["cart_id"])) {
    $cart_id = $_POST["cart_id"];
    $new_qty = $_POST["new_qty"];

    // 更新数据库中的购物车数量
    $update_qty = "UPDATE cart SET qty = '$new_qty' WHERE cart_id = '$cart_id'";
    $update_qty_run = mysqli_query($connect, $update_qty);

    if($update_qty_run) {
        echo "Quantity updated successfully";
    } else {
        echo "Failed to update quantity";
    }
}
?>