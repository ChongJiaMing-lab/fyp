<?php
include "data_connection.php" ;

if(isset($_POST["qty"]))
{
    $stock=$_GET["qty"];
    $update = mysqli_query($connect,"UPDATE cart SET qty  WHERE user_id = $id");

}


?>