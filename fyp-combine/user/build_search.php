<?php 
include "data_connection.php";

if (isset($_POST['product']))
{
    $cid = $_GET['cid'];
    $p = $_POST['product'];
    $result = mysqli_query($connect,"SELECT * FROM product WHERE category_id = $cid AND product_name LIKE '%$p%'");
    $output = "";

    while($row = mysqli_fetch_assoc($result))
    {
        $output .= '<tr class="tbody">'.'<td><img src="img/'.$row["image"].'"></td>'.'<td><span class="product_name">'.$row["product_name"].'</span></td>'
        .'<td>RM'.$row["price"].'</td>'.'<td><a href="">test</a></td>'.'<td><a href="a_product.php?pid='.$row["product_id"].'">Add Product</a></td>'.'</tr>'; 
    }

    echo $output;
}

?>