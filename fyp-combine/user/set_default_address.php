<?php
session_start();
include "data_connection.php"; // Include your database connection file

if(isset($_SESSION['ID']) && isset($_POST['address_id'])) {
    $userId = $_SESSION['ID'];
    $addressId = $_POST['address_id'];

    // Update other addresses to set default to 0
    $updateQuery = "UPDATE user_address SET default_address = 0 WHERE customer_id = $userId AND address_id != $addressId";
    $result = mysqli_query($connect, $updateQuery);

    if($result) {
        // Update the clicked address to set default to 1
        $updateQuery = "UPDATE user_address SET default_address = 1 WHERE customer_id = $userId AND address_id = $addressId";
        $result = mysqli_query($connect, $updateQuery);

        if($result) {
            echo "success";
        } else {
            echo "error";
        }
    } else {
        echo "error";
    }
} else {
    echo "error";
}
?>
