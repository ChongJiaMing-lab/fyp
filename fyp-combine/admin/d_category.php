<?php
include 'databaseconnect.php';
session_start();

if(isset($_GET["category_id"]))
{
    $p = $_GET["category_id"];
    //echo "$pe";
    $select = mysqli_query($connect, "SELECT * FROM category WHERE category_id = '$p'");
    if($select) 
    {
        $row = mysqli_fetch_assoc($select);
        $ct = $row["category"];
        $type = $row['category_type'];
        if($type == '1')
        {
            $del = "DELETE FROM category WHERE category_id = '$p'";
            $query = mysqli_query($connect, $del);
            $_SESSION['d'] = "Component $ct deleted successfully!";
            header("location:admin_pc.php");
            exit();
        }
        else if($type == '2')
        {
            $delp = "DELETE FROM category WHERE category_id = '$p'";
            $query = mysqli_query($connect, $delp);
            $_SESSION['d'] = "Peripherals $ct deleted successfully!";
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
else if(isset($_GET["brand_id"]))
{
    $b = $_GET["brand_id"];

    $select = mysqli_query($connect, "SELECT * FROM brand WHERE brand_id = '$b'");
    $row = mysqli_fetch_assoc($select);
    $name = $row["brand_name"];

    $delb = "DELETE FROM brand WHERE brand_id = '$b'";
    $query = mysqli_query($connect, $delb);
    if($query)
    {
        $_SESSION['msg'] = "Brand $name deleted successfully!";
    }
    else
    {
        $_SESSION['msg'] = "Failed to delete brand $name";
    }
    header("location:admin_b.php");
    exit();
}
?>