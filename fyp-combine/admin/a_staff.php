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