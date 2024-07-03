<?php
include 'databaseconnect.php';
session_start();

//add product
if (isset($_POST["save_product"])) {
    $pd = $_POST["product_name"];
    $b = $_POST["brand"];
    $type = $_POST["radio"];
    $c = $_POST["cate"];
    $d = $_POST["desc"];
    $img = $_POST["img"];
    $price = $_POST["price"];
    $qty = $_POST["qty"];

    $status = "1";
    $insert = "INSERT INTO product(category_id, brand_id, product_status, product_name, product_desc, image, price, stock, product_type) 
                VALUES ('$c','$b','$status','$pd','$d','$img','$price','$qty','$type')";
    $run = mysqli_query($connect, $insert);

    if ($run) {
        $_SESSION['img'] = "$img";
        $_SESSION['title'] = "$pd";
        $_SESSION['text'] = "successfully added!";
        $_SESSION['icon'] = "success";
        header("location:admin_product.php");
    } else {
        $_SESSION['img'] = "";
        $_SESSION['title'] = "?";
        $_SESSION['text'] = "Error!!!";
        $_SESSION['icon'] = "question";
        header("location:admin_product.php");
    }
}

//delete product
if (isset($_GET["product_id"])) {
    $p = $_GET["product_id"];

    $query = mysqli_query($connect, "SELECT * FROM product WHERE product_id = '$p'");
    $row = mysqli_fetch_assoc($query);
    $pn = $row['product_name'];
    $check = $row['product_status'];
    if ($check == 1) {
        $st = "UPDATE product SET product_status = 2 WHERE product_id='$p'";
        $text = "is now unavailable";
    } else if($check ==2){
        $st = "UPDATE product SET product_status = 1 WHERE product_id='$p'";
        $text = "is now available";
    }
    $query = mysqli_query($connect, $st);

    if ($query) {
        $_SESSION['title'] = "$pn";
        $_SESSION['text'] = "$text";
        $_SESSION['icon'] = "success";
        header("location:admin_product.php");
    } else {
        $_SESSION['title'] = "$pn";
        $_SESSION['text'] = "is failed to update status";
        $_SESSION['icon'] = "error";
        header("location:admin_product.php");
    }
}

//edit product
if (isset($_POST["edit_product"])) {
    $id = $_POST["product_id"];
    $pd = 'product_name'.$id;
    $pd = $_POST["$pd"];
    $b = $_POST["brand"];
    $type = $_POST["edit-radio"];
    $c = $_POST["cate"];
    $d = 'desc'.$id;
    $d = $_POST["$d"];
    if (empty($_POST["img"]))
        $img = $_POST["old-img"];
    else
        $img = $_POST["img"];
    $price = 'price'.$id;
    $price = $_POST["$price"];
    $qty = 'qty'.$id;
    $qty = $_POST["$qty"];

    $update = "UPDATE product SET category_id='$c',brand_id='$b',product_name='$pd',
                product_desc='$d',image='$img',price='$price', stock='$qty',product_type='$type' WHERE product_id = '$id'";
    $update_run = mysqli_query($connect, $update);
    if ($update_run) {
        $_SESSION['title'] = "Congrats!";
        $_SESSION['text'] = "success to edit.";
        $_SESSION['icon'] = "success";
        header("location:admin_product.php");
    } else {
        $_SESSION['title'] = ":(";
        $_SESSION['text'] = "failed to edit!";
        $_SESSION['icon'] = "error";
        header("location:admin_product.php");
    }
}
?>