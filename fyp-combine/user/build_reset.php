<?php
include "data_connection.php";

session_start();
$id = $_SESSION['ID'];


$del = mysqli_query($connect,"DELETE FROM pc_build WHERE user_id = $id AND pay_status != 'payed'");

if(mysqli_affected_rows($connect) > 0) {
    $_SESSION['alert_r'] = "All Component has been reset!";
    header("location: customization.php");   
} else {
    $_SESSION['alert_r'] = "All Component has been reset!";
    header("location: customization.php");  
}
?>