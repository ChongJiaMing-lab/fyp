<?php
include 'databaseconnect.php';
session_start();
date_default_timezone_set("Asia/Kuching");
if(isset($_POST["save_staff"]))
{
    $b = $_POST["brand"];

    $insert = "INSERT INTO brand(brand_name)values('$b')";
    $insert_run = mysqli_query($connect, $insert);
    if($insert_run)
    {
        $_SESSION['msg'] = "Brand $b added successfully!";
        header("location: admin_b.php");
    }
    else
    {
        $_SESSION['msg'] = "Failed to add staff :(";
        header("location: admin_b.php");
    }
    
}

?>