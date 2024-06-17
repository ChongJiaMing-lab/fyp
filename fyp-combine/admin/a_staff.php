<?php
include 'databaseconnect.php';
session_start();
date_default_timezone_set("Asia/Kuching");
if(isset($_POST["save_staff"]))
{
    $id_r = "SELECT * FROM staff WHERE staff_id = '$id'";

    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pw = $_POST["id"];
    $tel = $_POST["tel"];
    $jt = date("d/m/Y");
    $status = '1';
    $insert = "INSERT INTO staff(admin_id, full_name, staff_email, staff_pw, staff_tel, sa, joined_time, staff_status)
                values('$id','$name', '$email', '$pw', '$tel', '0', '$jt', '$status')";
    $insert_run = mysqli_query($connect, $insert);
    if($insert_run)
    {
        $_SESSION['msg'] = "Staff $id added successfully!";
        header("location: admin_staff.php");
    }
    else
    {
        $_SESSION['msg'] = "Failed to add staff :(";
        header("location: admin_staff.php");
    }
    
}

?>