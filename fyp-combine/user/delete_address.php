<?php

include "data_connection.php";


if(isset($_GET['address_id'])) {
  
    $address_id = $_GET['address_id'];


    $query = "UPDATE user_address SET status = 1 WHERE address_id = '$address_id'";
    $result = mysqli_query($connect, $query);

    if($result) {

        $query = "UPDATE  user_address SET status = 0 WHERE address_id = '$address_id'";
        $result = mysqli_query($connect, $query);
    
    if($result)
    {
        session_start();
        $ID = $_SESSION['ID'];
        echo '<script>alert("Address deleted successfully.");</script>';
        echo '<script>window.location.href = "view_address.php?ID=' . $ID . '";</script>'; 
        exit;
    }
    else
    {
        echo '<script>alert("Address deleted unsuccessfully.");</script>';
        echo '<script>window.location.href = "view_address.php?ID=' . $ID . '";</script>'; 
        exit;
    }
       
    } else {
        echo "Error deleting address: " . mysqli_error($connect);
    }
} else {
    echo "No address_id provided.";
}
?>