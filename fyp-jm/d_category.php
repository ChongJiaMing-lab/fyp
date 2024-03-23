<?php
include 'databaseconnect.php';
session_start();

if(isset($_GET["category_id"]))
{
    $pe = $_GET["category_id"];
    //echo "$pe";
    $del = "DELETE FROM category WHERE category_id = '$pe'";
    $query = mysqli_query($connect, $del);
    header("location:admin_peri.php");
}
?>