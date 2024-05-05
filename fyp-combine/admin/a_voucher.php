<?php
include 'databaseconnect.php';
session_start();
if(isset($_POST["voucher"]))
{
    $r = $_POST["rate"];
    $rate = $r / 100;
    $cost = $_POST["cost"];

    $insert_v = mysqli_query($connect, "INSERT admin_voucher(voucher_rate, point_cost)VALUES('$rate','$cost')");
    if($insert_v)
    {
        $_SESSION['title'] = "Voucher";
        $_SESSION['text'] = "success to generate!";
        $_SESSION['icon'] = "success";
    }
    else
    {
        $_SESSION['title'] = "Error";
        $_SESSION['text'] = "Error";
        $_SESSION['icon'] = "error";
    }
    header("location:admin_voucher.php");
}