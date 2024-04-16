<?php
include "data_connection.php" ;

if(isset($_POST["qty"])&&isset($_POST["pd"])&&isset($_POST["id"]))
{
    $qty=$_POST["qty"];
    $pd=$_POST["pd"];
    $id=$_POST["id"];

    $update = mysqli_query($connect,"UPDATE cart SET qty WHERE product_id = '$pd' AND user_id = '$id'");


}


?>