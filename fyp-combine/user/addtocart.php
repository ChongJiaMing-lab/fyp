<?php
session_start();
include "data_connection.php";

if(isset($_GET["product_id"])) {
    if(!isset($_SESSION["ID"])) {
        echo "<script>alert('error）');</script>";
    } else {
        $product_id = $_GET["product_id"];
        $ID = $_SESSION["ID"];

        $existing_query = "SELECT * FROM cart WHERE product_id = $product_id AND user_id = $ID AND status!='payed'";
        $existing_result = mysqli_query($connect, $existing_query);
        
        if(mysqli_num_rows($existing_result) > 0) {
            $existing_row = mysqli_fetch_assoc($existing_result);
            $existing_qty = $existing_row['qty'] + 1;
            $update_query = "UPDATE cart SET qty = $existing_qty WHERE product_id = $product_id AND user_id = $ID AND status!='payed'";
            mysqli_query($connect, $update_query);
        } else {
            $insert_query = "INSERT INTO cart (product_id, user_id, qty) VALUES ($product_id, $ID, 1)";
            mysqli_query($connect, $insert_query);
        }

        echo "<script>window.location.href='product_list.php';</script>";
    }
} else {
    echo '<script>alert("添加产品错误");</script>';
}
?>