<?php include "databaseconnect.php";

session_start();
$uid = $_SESSION('ID');

if(isset($_GET["pid"]))
        $pid = $_GET["pid"];
        $query = mysqli_query($connect,"SELECT * FROM category,products WHERE category.category_id = products.category_id AND product_id = $pid");
        $row = mysqli_fetch_assoc($query);

        $query2 = mysqli_query($connect,"SELECT * FROM pc_build WHERE user_id = $uid AND pay_status != 'payed'");
        if(mysqli_num_rows($query2)>0)
        {
            $update = mysqli_query($connect, "UPDATE pc_build SET {$row['category']} = $pid WHERE user_id = $uid AND pay_status != 'payed'");
        }
        else{
            $add = mysqli_query($connect,"INSERT INTO pc_build(pay_status,user_id,{$row['category']}) VALUES('cart',$uid,$pid)");
        }
        echo '<script>alert("Component has been added successfully!");</script>'; 
        echo "<script>window.location.href='customization.php';</script>";
    ?>
