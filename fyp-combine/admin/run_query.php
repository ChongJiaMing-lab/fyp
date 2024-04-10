<?php
include 'databaseconnect.php';
if (isset($_POST['bid'])) 
{
    $bid = $_POST['bid'];
    $sql = "SELECT * FROM category WHERE category_type = '$bid'";
    $result = mysqli_query($connect, $sql);

    $out = '';
    while ($row = mysqli_fetch_assoc($result)) {
        $out .= '<option value="'.$row['category_id']. '">' . $row['category'] . '</option>';
    }
    echo $out;
} 

else if (isset($_POST['cust'])) 
{
    $s = $_POST['cust'];
    $cust_result = mysqli_query($connect, "SELECT * FROM user_information WHERE name LIKE '%$s%'");
    $data = '';

    while ($row = mysqli_fetch_array($cust_result)) {
        $data .= '<tr onclick="window.location=\'cust_detail.php?ID=' . $row['ID'] . '\';">
            <th scope="row">' . $row["ID"] . '</th>
            <td>' . $row["name"] . '<br>
                <div style="font-size:11px;"><i>from </i>' . '</div>
            </td>
            <td style="vertical-align: middle;">Telephone.No:' . $row["contactnumber"] . '<br>Email:' . $row["email"] . '</td>
            <td>' . $row["gender"] . '</td>
            <td>' . $row["join_time"] . '</td>
        </tr>';
    }

    echo $data;
}
?>