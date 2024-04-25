<?php
include 'data_connection.php';
session_start();

if (isset($_POST['tab']) && $_POST['tab'] == 'tab-to-pay') {
    $userID = $_SESSION['ID']; 

 
    $query = "SELECT c.qty, p.product_name, p.price, p.image
              FROM cart c
              JOIN product p ON c.product_id = p.product_id
              WHERE c.user_id = '{$userID}' AND c.status = ''";

    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
        $output = '<ul>';
        while ($row = mysqli_fetch_assoc($result)) {
            $output .= '<li>' . $row['product_name'] . ' - $' . $row['price'] . ' x ' . $row['qty'] . '<img src="../image/' . $row['image'] . '" alt="' . $row['product_name'] . '" style="width:50px;"></li>';
        }
        $output .= '</ul>';
    } else {
        $output = "No items to pay.";
    }
    echo $output;
} else {
    echo "Invalid request.";
}
?>