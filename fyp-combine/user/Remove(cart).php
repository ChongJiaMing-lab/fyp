
<?php
session_start();
include "data_connection.php";


if(isset($_GET['id'])) {
    
    $productId = $_GET['id'];

    
    $id = $_SESSION["ID"];

    
    $query = "DELETE FROM cart WHERE product_id = $productId AND user_id = $id  AND status!='payed' ";

    $result = mysqli_query($connect, $query);

  
    if($result) {
       
        header("Location: shoping_cart.php");
        exit; 
    } else {
     
        echo "ERROR";
    }
} else {
    
    echo "ERROR！";
}
?>