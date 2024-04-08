<?php
include 'databaseconnect.php';
session_start();

if(isset($_POST["save_product"]))
{
    $pd = $_POST["product_name"];
    $b = $_POST["brand"];
    $type = $_POST["radio"];
    $c = $_POST["cate"];
    $d = $_POST["desc"];
    $img = $_POST["img"];
    $price = $_POST["price"];
    $qty = $_POST["qty"];

    $status = "1";
    $insert = "INSERT INTO products(category_id, brand_id, product_status, product_name, product_desc, image, price, qty, product_type) 
                VALUES ('$c','$b','$status','$pd','$d','$img','$price','$qty','$type')";
    $run = mysqli_query($connect, $insert);

    if($run)
    {
        echo "Product added successfully!";
    }
    else
    {
        echo "Failed to add staff :(";
    }
}
?>