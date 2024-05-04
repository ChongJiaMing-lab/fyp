<?php
include 'databaseconnect.php';
if (isset($_POST['bid'])) {
    $bid = $_POST['bid'];
    $sql = "SELECT * FROM category WHERE category_type = '$bid'";
    $result = mysqli_query($connect, $sql);

    $out = '';
    while ($row = mysqli_fetch_assoc($result)) {
        $out .= '<option value="' . $row['category_id'] . '">' . $row['category'] . '</option>';
    }
    echo $out;
}

if (isset($_POST['cust'])) {
    $s = $_POST['cust'];
    $cust_result = mysqli_query($connect, "SELECT * FROM user_information WHERE name LIKE '%$s%'");
    $data = '';

    while ($row = mysqli_fetch_array($cust_result)) {
        $data .= '<tr onclick="window.location=\'cust_detail.php?ID=' . $row['ID'] . '\';">
            <th scope="row">' . $row["ID"] . '</th>
            <td>' . $row["name"] . '<br>
            </td>
            <td style="vertical-align: middle;">Telephone.No:' . $row["contactnumber"] . '<br>Email:' . $row["email"] . '</td>
            <td>' . $row["gender"] . '</td>
            <td>' . $row["join_time"] . '</td>
        </tr>';
    }

    echo $data;
}

if (isset($_POST['order']) || isset($_POST['f1']) || isset($_POST['f2'])) {

    if (isset($_POST['order']))
        $o = $_POST['order'];
    else
        $o = '';

    if (isset($_POST['f1']))
        $f1 = $_POST['f1'];
    else
        $f1 = '';

    if (isset($_POST['f2']))
        $f2 = $_POST['f2'];
    else
        $f2 = '';

    $query = "SELECT *,user_information.name 
    FROM order_ 
    JOIN user_information ON order_.user_id = user_information.ID WHERE 1";

    if (!empty($o))
        $query .= " AND name LIKE '%$o%'";

    if (!empty($f1))
        $query .= " AND delivery_status= '$f1'";

    if (!empty($f2)) {
        if ($f2 == 'a')
            $query .= " ORDER BY order_id";
        else if ($f2 == 'b')
            $query .= " ORDER BY order_id DESC";
        else if ($f2 == 'c')
            $query .= " ORDER BY total_amount DESC";
        else if ($f2 == 'd')
            $query .= " ORDER BY total_amount";
    }

    $o_run = mysqli_query($connect, $query);
    $o_output = '';

    while ($row = mysqli_fetch_assoc($o_run)) {
        $o_output .= '<tr onclick="window.location=\'order_detail.php?order_id=' . $row['order_id'] . '\';">
        <th scope="row">' . $row["order_id"] . '</th>
        <td>
            ' . $row["name"] . '<br>
        </td>
        <td>
           ' . $row["address_id"] . '
        </td>
        <td>
            RM' . $row["total_amount"] . '
        </td>
        <td>
            ' . $row["delivery_status"] . '
        </td>
    </tr>';
    }
    echo $o_output;
}
?>