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
    $jt = date("Y-m-d");
    $status = '1';
    $check_email = mysqli_query($connect, "SELECT * FROM staff WHERE staff_email = '$email'");
    if(mysqli_num_rows($check_email) > 0)
    {
        $_SESSION['title'] = "The email is already taken";
        $_SESSION['text'] = "$email";
        $_SESSION['icon'] = "warning";
        header("location: admin_staff.php");
        exit();
    }
    $check_tel = mysqli_query($connect, "SELECT * FROM staff WHERE staff_tel = '$tel'");
    if(mysqli_num_rows($check_tel) > 0)
    {
        $_SESSION['title'] = "The telephone number is already taken";
        $_SESSION['text'] = "$tel";
        $_SESSION['icon'] = "warning";
        header("location: admin_staff.php");
        exit();
    }
    $insert = "INSERT INTO staff(admin_id, full_name, staff_email, staff_pw, staff_tel, sa, joined_time, staff_status)
                values('$id','$name', '$email', '$pw', '$tel', '0', '$jt', '$status')";
    $insert_run = mysqli_query($connect, $insert);
    if($insert_run)
    {
        $_SESSION['title'] = "New Staff:";
        $_SESSION['text'] = "$id";
        $_SESSION['icon'] = "success";
        header("location: admin_staff.php");
    }
    else
    {
        echo "Failed to add staff ";
        header("location: admin_staff.php");
    }
    
}
if(isset($_GET["staff_id"])){
    $s  = $_GET["staff_id"];

    $query = mysqli_query($connect, "SELECT * FROM staff WHERE staff_id = '$s'");
    $row = mysqli_fetch_assoc($query);
    $sn = $row['admin_id'];
    $check = $row['staff_status'];

    if ($check == 1) {
        $st = "UPDATE staff SET staff_status = 2 WHERE staff_id='$s'";
        $text = "is now inactive";
    } else if($check ==2){
        $st = "UPDATE staff SET staff_status = 1 WHERE staff_id='$s'";
        $text = "is now active";
    }
    $status = mysqli_query($connect, $st);
    if ($query) {
        $_SESSION['title'] = "$sn";
        $_SESSION['text'] = "$text";
        $_SESSION['icon'] = "success";
        header("location:admin_staff.php");
    }
}
?>