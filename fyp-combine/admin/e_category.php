<?php
include 'databaseconnect.php';
session_start();

if(isset($_POST["save_pc"]))
{
    $p = $_POST["category_id"];
    $new = $_POST["pc"];
    $select = mysqli_query($connect, "SELECT * FROM category WHERE category_id = '$p'");
    if($select) 
    {
        $row = mysqli_fetch_assoc($select);
        $ct = $row["category"];
        $type = $row['category_type'];
        if($type == '1')
        {
            $edit = "UPDATE category SET category = '$new' WHERE category_id = '$p'";
            $query = mysqli_query($connect, $edit);
            $_SESSION['d'] = "Successfully edited!";
            header("location:admin_pc.php");
            exit();
        }
        else if($type == '2')
        {
            $edit = "UPDATE category SET category = '$new' WHERE category_id = '$p'";
            $query = mysqli_query($connect, $edit);
            $_SESSION['d'] = "Successfully edited!";
            header("location:admin_peri.php");
            exit();
        }
        else
        {
            echo "Failed to delete :(";
        }       
    }
    else
    {
        echo "No category found :(";
    }
}
else if(isset($_POST["save_brand"]))
{
    $b = $_POST["brand_id"];
    $new = $_POST["brand"];
    $edit = "UPDATE brand SET brand_name = '$new' WHERE brand_id = '$b'";
    $query = mysqli_query($connect, $edit);
    if($query)
    {
        $_SESSION['msg'] = "Successfully edited!";
    }
    else
    {
        $_SESSION['msg'] = "Successfully edited!";
    }
    header("location:admin_b.php");
    exit();
}
?>