<?php
include 'databaseconnect.php';
session_start();

if (isset($_GET["category_id"])) {
    $p = $_GET["category_id"];
    //echo "$pe";
    $select = mysqli_query($connect, "SELECT * FROM category WHERE category_id = '$p'");
    $check = mysqli_query($connect, "SELECT * FROM product WHERE category_id = '$p'");
    $check_stop = mysqli_num_rows($check);
    if ($select) {
        $row = mysqli_fetch_assoc($select);
        $ct = $row["category"];
        $type = $row['category_type'];
        if ($type == '1') {
            if ($check_stop > 0) {
                $_SESSION['title'] = "Failed to delete";
                $_SESSION['text'] = "$check_stop product(s) is associated with <$ct>";
                $_SESSION['icon'] = "error";
                header("location:admin_pc.php");
                exit();
            } else {
                $del = "DELETE FROM category WHERE category_id = '$p'";
                $query = mysqli_query($connect, $del);
                $_SESSION['title'] = "Success";
                $_SESSION['test'] = "Component $ct is deleted successfully";
                $_SESSION['icon'] = "success";
                header("location:admin_pc.php");
                exit();
            }
        } else if ($type == '2') {  
            if ($check_stop > 0) {
                $_SESSION['title'] = "Failed to delete";
                $_SESSION['text'] = "$check_stop product(s) is associated with <$ct>";
                $_SESSION['icon'] = "error";
                header("location:admin_peri.php");
                exit();
            } else {
                $delp = "DELETE FROM category WHERE category_id = '$p'";
                $query = mysqli_query($connect, $delp);
                $_SESSION['title'] = "Success";
                $_SESSION['test'] = "Peripheral $ct is deleted successfully";
                $_SESSION['icon'] = "success";
                header("location:admin_peri.php");
                exit();
            }
        } else {
            echo "Failed to delete";
        }
    } else {
        echo "Data not found";
    }
}
if (isset($_GET["brand_id"])) {
    $b = $_GET["brand_id"];

    $select = mysqli_query($connect, "SELECT * FROM brand WHERE brand_id = '$b'");
    $brand_r = mysqli_query($connect, "SELECT * FROM product WHERE brand_id = '$b'");
    $row = mysqli_fetch_assoc($select);
    $brand_check = mysqli_num_rows($brand_r);
    $name = $row["brand_name"];
    if ($brand_check > 0) {
        $_SESSION['title'] = "Failed to delete";
        $_SESSION['text'] = "$brand_check product(s) is associated with <$name>";
        $_SESSION['icon'] = "error";
        header("location:admin_b.php");
        exit();
    } else {
        $delb = "DELETE FROM brand WHERE brand_id = '$b'";
        $query = mysqli_query($connect, $delb);
        if ($query) {
            $_SESSION['title'] = "Success";
            $_SESSION['text'] = "Brand <$name> is deleted";
            $_SESSION['icon'] = "success";
            header("location:admin_b.php");
        } else {
            echo "Failed to delete";
        }
        header("location:admin_b.php");
        exit();
    }
}
?>