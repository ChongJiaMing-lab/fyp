<?php
include 'databaseconnect.php';
require ("php_libs/fpdf.php");

date_default_timezone_set("Asia/Kuching");
$time = date("dmY");
if (isset($_POST["cust_pdf"])) {
    $pdf = new FPDF("p", "mm", "A4");

    $pdf->AddPage();

    //arial, font-weight, font-size
    $pdf->SetFont("Arial", "B", 14);

    //width, height, text, border, endline, [align]
    $pdf->Cell(130, 5, "Customer List", 0, 0);
    $pdf->Cell(59, 5, "SKT PC", 0, 1);

    $pdf->Cell(130, 10, "", 0, 1);
    $pdf->SetFont("Arial", "b", 12);
    $pdf->Cell(10, 5, "#", 1, 0);
    $pdf->Cell(35, 5, "Username", 1, 0);
    $pdf->Cell(40, 5, "Tel", 1, 0);
    $pdf->Cell(75, 5, "Email", 1, 0);
    $pdf->Cell(20, 5, "Gender", 1, 1);

    $pdf->SetFont("Arial", "", 12);
    $result = mysqli_query($connect, "SELECT ID, name, contactnumber, email, gender FROM user_information");
    while ($row = mysqli_fetch_array($result)) {

        $pdf->Cell(10, 5, $row["ID"], 1, 0);
        $pdf->Cell(35, 5, $row["name"], 1, 0);
        $pdf->Cell(40, 5, $row["contactnumber"], 1, 0);
        $pdf->Cell(75, 5, $row["email"], 1, 0);
        $pdf->Cell(20, 5, $row["gender"], 1, 1);
    }

    $pdf->Output();
}
if (isset($_POST["cust_excel"])) {
    $output = "";

    if (isset($_POST["cust_excel"])) {
        $excel = mysqli_query($connect, "SELECT ID, name, contactnumber, email, gender FROM user_information");

        if (mysqli_num_rows($excel) > 0) {
            $output .= '
                    <table class="table" bordered="1">
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Tel</th>
                            <th>Email</th>
                            <th>Age</th>
                        </tr>
            ';

            while ($row = mysqli_fetch_array($excel)) {
                $output .= '
                        <tr>
                            <td>' . $row["ID"] . '</td>
                            <td>' . $row["name"] . '</td>
                            <td>' . $row["contactnumber"] . '</td>
                            <td>' . $row["email"] . '</td>
                            <td>' . $row["gender"] . '</td>
                        </tr>
                ';
            }
            $output .= '</table>';
            header('Content-Type: application/xls');
            header('Content-Disposition: attachment; filename="' . $time . '_customer_report.xls"');

            echo $output;
        } else {
            echo "No record found :(";
        }
    }
}

if (isset($_POST["order_receipt"])) {
    $order_id = $_POST["o_id"];
    $pdf = new FPDF("p", "mm", "A4");

    $pdf->AddPage();

    $pdf->SetFont("Arial", "B", 35);
    $pdf->Cell(130, 15, "Invoice", 0, 1);
    $pdf->SetFont("Arial", "B", 20);
    $pdf->Cell(130, 15, "SKT PC", 0, 1);
    $pdf->SetFont("Arial", "", 14);
    $pdf->Cell(50, 5, "Thanks for choosing us!", 0, 1);
    $pdf->Cell(0, 5, "------------------------------------------------------------------------------------------------------------------", 0, 1);

    $order = "SELECT * FROM order_ WHERE order_id = '$order_id'";
    $order_run = mysqli_query($connect, $order);
    $row = mysqli_fetch_assoc($order_run);

    $user_id = $row["user_id"];
    $user = "SELECT * FROM user_information WHERE ID = '$user_id'";
    $user_run = mysqli_query($connect, $user);
    $row_user = mysqli_fetch_assoc($user_run);

    $address_id = $row["address_id"];
    $add = "SELECT * FROM user_address WHERE address_id = '$address_id'";
    $add_run = mysqli_query($connect, $add);
    $row_add = mysqli_fetch_assoc($add_run);

    $pdf->SetFont("Arial", "B", 14);
    $pdf->Cell(130, 5, "To:", 0, 1);

    $pdf->SetFont("Arial", "", 14);
    $pdf->Cell(0, 5, $row_user['name'], 0, 1);
    $pdf->Cell(130, 5, $row_add["address"] . ", " . $row_add["postcode"] . " " . $row_add["city"]
        . ", " . $row_add["state"], 0, 1);

    $pdf->SetFont("Arial", "B", 14);
    $pdf->Cell(23, 15, "Order ID:", 0, 0);
    $pdf->SetFont("Arial", "", 14);
    $pdf->Cell(0, 15, "#" . $order_id, 0, 1);

    $pdf->SetFont("Arial", "B", 14);
    $pdf->Cell(28, 5, "Order Date:", 0, 0);
    $pdf->SetFont("Arial", "", 14);
    $pdf->Cell(25, 5, $row['time_status'], 0, 1);
    $pdf->Cell(0, 10, "------------------------------------------------------------------------------------------------------------------", 0, 1);

    $pdf->SetFont("Arial", "B");
    $pdf->Cell(9, 6.5, "#", 1, 0);
    $pdf->Cell(100, 6.5, "Product", 1, 0);
    $pdf->Cell(17, 6.5, "QTY", 1, 0);
    $pdf->Cell(28, 6.5, "Price", 1, 0);
    $pdf->Cell(35, 6.5, "Total", 1, 1);

    $pdf->SetFont("Arial", "");
    $item = "SELECT * FROM cart_order_detail WHERE order_id = '$order_id'";
    $item_run = mysqli_query($connect, $item);
    $count = 1;
    $total_qty = 0;
    while ($row_item = mysqli_fetch_assoc($item_run)) {
        $cart_id = $row_item["cart_id"];
        $cart = "SELECT * FROM cart WHERE cart_id = '$cart_id'";
        $cart_run = mysqli_query($connect, $cart);

        $row_cart = mysqli_fetch_assoc($cart_run);
        $product_id = $row_cart["product_id"];
        $product_run = mysqli_query($connect, "SELECT * FROM product WHERE product_id = '$product_id'");
        $row_product = mysqli_fetch_assoc($product_run);

        $pdf->Cell(9, 8, $count++, 1, 0);
        $pdf->Cell(100, 8, $row_product['product_name'], 1, 0);
        $pdf->Cell(17, 8, $row_cart['qty'], 1, 0);
        $pdf->Cell(28, 8, number_format($row_product['price'], 2), 1, 0);
        $pdf->Cell(35, 8, number_format($row_cart['qty'] * $row_product['price'], 2), 1, 1);
        $total_qty += $row_cart['qty'];
    }
    $pdf->Cell(109 + 17 + 28, 10, "Sub-total(" . $total_qty . " items)", 'L,B,R', 0, 'R');
    $pdf->Cell(35, 10, number_format($row["total_amount"], 2), 'R,B', 1, 'R');
    $pdf->Cell(109 + 17 + 28, 10, "Vouncher", 'L,B,R', 0, 'R');
    $pdf->Cell(35, 10, "-5.00", 'R,B', 1, 'R');
    // $pdf->Cell(109 + 17 + 28, 10, "Shipping", 'L,B,R', 0, 'R');
    // $pdf->Cell(35, 10, "5.00", 'R,B', 1, 'R');
    $pdf->Cell(109 + 17 + 28, 10, "Total", 'L,B,R', 0, 'R');
    $pdf->Cell(35, 10, number_format($row["total_amount"], 2), 'R,B', 1, 'R');
    $pdf->Output();
}


if (isset($_POST["sales_report"])) {
    $from = $_POST["from"];
    $to = $_POST["to"];

    if (isset($_POST['from'])) {
        $f = $_POST['from'];
        $from = explode("/", $f);

        //index1 = date, 0 = month; 2 = year;
        if (isset($from[2]) && isset($from[1]) && isset($from[0])) {
            $f = $from[1] . '-' . $from[0] . '-' . $from[2];
            $f = $f . " 00:00:00";
        } else {
            $f = '';
        }
    } else
        $from = '';

    if (isset($_POST['to'])) {
        $t = $_POST['to'];
        $to = explode("/", $t);

        if (isset($to[2]) && isset($to[1]) && isset($to[0])) {
            $t = $to[1] . '-' . $to[0] . '-' . $to[2];
            $t = $t . " 23:59:59";
        } else {
            $t = '';
        }
    } else
        $to = '';

    $query = "SELECT *,user_information.name 
        FROM order_ 
        JOIN user_information ON order_.user_id = user_information.ID WHERE 1 ";
    if (!empty($f))
        $query .= " AND time_status >= '$f'";
    if (!empty($t))
        $query .= " AND time_status <= '$t'";

    $pdf = new FPDF("p", "mm", "A4");

    $pdf->AddPage();

    $pdf->SetFont("Arial", "B", 35);
    $pdf->Cell(130, 15, "Sales Report", 0, 1);
    $pdf->SetFont("Arial", "");
    $query = "SELECT *,user_information.name 
    FROM order_ 
    JOIN user_information ON order_.user_id = user_information.ID WHERE 1";

    if (!empty($f))
        $query .= " AND time_status >= '$f'";
    if (!empty($t))
        $query .= " AND time_status <= '$t'";

    $o_run = mysqli_query($connect, $query);
    $o_output = '';
    $total = 0;
    $count=1;
    $pdf->SetFont("Arial", "", "13");
    $pdf->Cell(23, 6.5, "Order#", 1, 0);
    $pdf->Cell(32, 6.5, "Placed by:", 1, 0);
    $pdf->Cell(100, 6.5, "Created Time", 1, 0);
    $pdf->Cell(38, 6.5, "Total Amount", 1, 1);
    while ($row_item = mysqli_fetch_assoc($o_run)) {
        $total+= $row_item["total_amount"];
        $pdf->Cell(23, 6.5, $count++, 1, 0);
        $pdf->Cell(32, 6.5, $row_item["name"], 1, 0);
        $pdf->Cell(100, 6.5, $row_item["time_status"], 1, 0);
        $pdf->Cell(38, 6.5, $row_item["total_amount"], 1, 1);
    }
    $pdf->Cell(23+32+100+38, 6.5, "Total111 ".$total, 1, 1);

    $pdf->Output();
}
?>