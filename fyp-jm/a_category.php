<?php
include 'databaseconnect.php';
session_start();
if(isset($_POST["save_brand"]))
{
    $b = $_POST["brand"];

    $insert = "INSERT INTO brand(brand_name)values('$b')";
    $insert_run = mysqli_query($connect, $insert);
    if($insert_run)
    {
        $_SESSION['msg'] = "$b";
        header("location: admin_b.php");
    }
    else
    {
        $_SESSION['msg'] = "Failed to add staff :(";
        header("location: admin_b.php");
    }
    
}
else if(isset($_POST["save_peri"]))
{
    $pe = $_POST["peri"];

    $insert = "INSERT INTO category(category, category_type)values('$pe', '2')";
    $insert_run = mysqli_query($connect, $insert);
    if($insert_run)
    {
        $_SESSION['msg'] = "Peripheral $pe added successfully!";
        header("location: admin_peri.php");
    }
    else
    {
        $_SESSION['msg'] = "Failed to add Peripherals :(";
        header("location: admin_peri.php");
    }
    
}
else if(isset($_POST["save_pc"]))
{
    $pc = $_POST["pc"];

    $insert = "INSERT INTO category(category, category_type)values('$pc', '1')";
    $insert_run = mysqli_query($connect, $insert);
    if($insert_run)
    {
        $_SESSION['msg'] = "Component $pc added successfully!";
        header("location: admin_pc.php");
    }
    else
    {
        $_SESSION['msg'] = "Failed to add staff :(";
        header("location: admin_pc.php");
    }
}
else
{
    echo "failed to add something !!!";
}
?>