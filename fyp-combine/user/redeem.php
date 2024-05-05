<?php 
include "data_connection.php";
session_start();
$id = $_SESSION['ID'];
    if(isset($_GET['id']))
        { 
            $q1 = mysqli_query($connect,"SELECT * FROM admin_voucher WHERE voucher_id = $_GET[id]");
            $q2 = mysqli_query($connect,"SELECT * FROM point WHERE user_id = $id");
            $r1 = mysqli_fetch_assoc($q1);
            $r2 = mysqli_fetch_assoc($q2);
            
                    if($r2['point']<$r1['point_cost'])
                    {
                        $_SESSION['v_alert'] = "<script>alert('You dont have enought point!')</script>";
                        header("Location:main_page.php");
                    }
                    else{
                        $uniqueId = uniqid();
                        $currentTimestamp = time();
                        $currentDateTime = date("Y-m-d H:i:s", $currentTimestamp);
                        $Update1 = mysqli_query($connect,"UPDATE point SET point = point - $r1[point_cost] WHERE user_id = $id");
                        $insert1 = mysqli_query($connect,"INSERT INTO point_details(description,changes,user_id,time_status) VALUES ('Voucher Redeem.','-$r1[point_cost]','$id','$currentDateTime')");
                        $insert2 = mysqli_query($connect,"INSERT INTO voucher(v_code,v_status,v_rate,user_id) VALUES ('$uniqueId','unused','$r1[voucher_rate]','$id')");
                        $_SESSION['v_alert'] = "<script>alert('Success!')</script>";
                        header("Location:main_page.php");
                    }
                }
?>