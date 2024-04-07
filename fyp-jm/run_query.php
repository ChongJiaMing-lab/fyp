<?php
include 'databaseconnect.php';
if (isset($_POST['bid'])) 
{
    $bid = $_POST['bid'];
    $sql = "SELECT * FROM category WHERE category_type = '$bid'";
    $result = mysqli_query($connect, $sql);

    $out = '';
    while ($row = mysqli_fetch_assoc($result)) {
        $out .= '<option>' . $row['category'] . '</option>';
    }
    echo $out;
} 

else if (isset($_POST['cust'])) 
{
    $s = $_POST['cust'];
    $cust_result = mysqli_query($connect, "SELECT * FROM user WHERE name LIKE '%$s%'");
    $data = '';

    while ($row = mysqli_fetch_array($cust_result)) {
        $data .= '<tr onclick="window.location=\'cust_detail.php?user_id=' . $row['user_id'] . '\';">
            <th scope="row">' . $row["user_id"] . '</th>
            <td>' . $row["name"] . '<br>
                <div style="font-size:11px;"><i>from </i>' . $row["country"] . '</div>
            </td>
            <td style="vertical-align: middle;">Telephone.No:' . $row["tel"] . '<br>Email:' . $row["eml"] . '</td>
            <td>' . $row["age"] . '</td>
        </tr>';
    }

    echo $data;
}
?>