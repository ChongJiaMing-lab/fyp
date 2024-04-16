<?php
include "databaseconnect.php";

session_start();
//$uid = $_SESSION('ID');
$uid=1;
if(isset($_GET["pid"])) {
    $pid = $_GET["pid"];
    $query = mysqli_query($connect,"SELECT * FROM category,product WHERE category.category_id = product.category_id AND product_id = $pid");
    $row = mysqli_fetch_assoc($query);

    $query2 = mysqli_query($connect,"SELECT * FROM pc_build WHERE user_id = $uid AND pay_status != 'payed'");
    $row2 = mysqli_fetch_assoc($query2);
    if(mysqli_num_rows($query2) > 0) {
        if($row['category'] == "ram") {
            if(is_null($row2['ram1'])) {
                $update = mysqli_query($connect, "UPDATE pc_build SET ram1 = $pid WHERE user_id = $uid AND pay_status != 'payed'");
            } else {
                $update = mysqli_query($connect, "UPDATE pc_build SET ram2 = $pid WHERE user_id = $uid AND pay_status != 'payed'");
            }
        } else {
            $update = mysqli_query($connect, "UPDATE pc_build SET {$row['category']} = $pid WHERE user_id = $uid AND pay_status != 'payed'");
        }
    } else {
        $insert = "INSERT INTO pc_build(pay_status,user_id,{$row['category']}) VALUES('cart',$uid,$pid)";
        $add = mysqli_query($connect,$insert);
    }

    if(isset($update) || isset($add)) {
        echo '<script>';
        echo 'alert("Component has been added successfully!");';
        echo '</script>';
        header("location: customization.php");
        
    }

    }

    
?>
