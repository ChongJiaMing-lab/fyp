<?php
include 'databaseconnect.php';
require ("php_libs/fpdf.php");

date_default_timezone_set("Asia/Kuching");
$time = date("dmY");
if (isset($_POST["cust_pdf"])) {
    $pdf = new FPDF("p", "mm", "A4");

    $pdf->AddPage();

    //arial, font-weight, font-size
    $pdf->SetFont("Arial", "B", 40);

    //width, height, text, border, endline, [align]
    $pdf->Cell(130, 5, "SKT PC", 0, 1);
    $pdf->Cell(130, 5, "", 0, 1);
    $pdf->SetFont("Arial", "", 15);
    $pdf->Cell(59, 5, "Customer List", 0, 1);

    $pdf->Cell(130, 10, "", 0, 1);
    $pdf->SetFont("Arial", "b", 12);
    $pdf->Cell(10, 5, "#", 1, 0);
    $pdf->Cell(35, 5, "Username", 1, 0);
    $pdf->Cell(40, 5, "Tel", 1, 0);
    $pdf->Cell(75, 5, "Email", 1, 1);

    $pdf->SetFont("Arial", "", 12);
    $result = mysqli_query($connect, "SELECT ID, user_name, contactnumber, email FROM user_information");
    while ($row = mysqli_fetch_array($result)) {
        $pdf->Cell(10, 5, $row["ID"], 1, 0);
        $pdf->Cell(35, 5, $row["user_name"], 1, 0);
        $pdf->Cell(40, 5, $row["contactnumber"], 1, 0);
        $pdf->Cell(75, 5, $row["email"], 1, 1);
    }

    $pdf->Output();
}
if (isset($_POST["cust_excel"])) {
    $output = "";

    if (isset($_POST["cust_excel"])) {
        $excel = mysqli_query($connect, "SELECT ID, user_name, contactnumber, email FROM user_information");

        if (mysqli_num_rows($excel) > 0) {
            $output .= '
                    <table class="table" bordered="1">
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Tel</th>
                            <th>Email</th>
                        </tr>
            ';

            while ($row = mysqli_fetch_array($excel)) {
                $output .= '
                        <tr>
                            <td>' . $row["ID"] . '</td>
                            <td>' . $row["user_name"] . '</td>
                            <td>#' . $row["contactnumber"] . '</td>
                            <td>' . $row["email"] . '</td>
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
    $pdf->Cell(0, 5, $row_add['name'], 0, 1);
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
    $pdf->Cell(35, 6.5, "Total(RM)", 1, 1);

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
    $voucher_rate = 0;
    $check_voucher = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM voucher_detail WHERE order_id = '$order_id'"));
    if (isset($check_voucher)) {
        $voucher = $check_voucher["voucher_id"];
        $select_v = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM voucher WHERE voucher_id ='$voucher'"));
        $voucher_rate = $select_v["v_rate"];
        $subtotal = $row["total_amount"] * (1 - $voucher_rate);
    } else {
        $subtotal = $row["total_amount"];
    }
    $mid = $row["total_amount"] - $subtotal;
    $subtotal = $mid + $row["total_amount"];
    $pdf->Cell(109 + 17 + 28, 10, "Sub-total(" . $total_qty . " items)", 'L,B,R', 0, 'R');
    $pdf->Cell(35, 10, number_format($row["total_amount"], 2), 'R,B', 1, 'R');
    $pdf->Cell(109 + 17 + 28, 10, "Voucher(".number_format(($voucher_rate*100),2)."%)", 'L,B,R', 0, 'R');
    $pdf->Cell(35, 10,number_format($mid,2), 'R,B', 1, 'R');
    // $pdf->Cell(109 + 17 + 28, 10, "Shipping", 'L,B,R', 0, 'R');
    // $pdf->Cell(35, 10, "5.00", 'R,B', 1, 'R');
    $pdf->Cell(109 + 17 + 28, 10, "Total(RM)", 'L,B,R', 0, 'R');
    $pdf->Cell(35, 10, number_format($row["total_amount"], 2), 'R,B', 1, 'R');
    $pdf->Rect(5, 5, 200, 287, 'D');
    $pdf->Output();
}



if (isset($_POST["sales_report"])) {
    $from = $_POST["from"];
    $to = $_POST["to"];
    if (isset($_POST['from'])) {
        $f = $_POST['from'];
        $from = explode("/", $f);

        $date_totals = [];
        //index1 = date, 0 = month; 2 = year;
        if (isset($from[2]) && isset($from[1]) && isset($from[0])) {
            $f = $from[0] . '-' . $from[1] . '-' . $from[2];
            $p_ff = $f;
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
            $t = $to[0] . '-' . $to[1] . '-' . $to[2];
            $p_tt = $t;
            $t = $t . " 23:59:59";
        } else {
            $t = '';
        }
    } else
        $to = '';


    $pdf = new FPDF("p", "mm", "A4");
    $pdf->AddPage();
    $pdf->SetFont("Arial", "B", 35);
    $pdf->Cell(130, 15, "SKT PC", 0, 0);
    $pdf->SetFont("Arial", "", 25);
    $pdf->Cell(130, 15, "Sales Report", 0, 1);
    $pdf->SetFont("Arial", "", 15);
    $pdf->Cell(50, 15, "From: " . $_POST["from"], 0, 0);
    $pdf->Cell(30, 15, "To: " . $_POST["to"], 0, 1);
    $pdf->SetFont("Arial", "");

    if (empty($f) && empty($t)) {
        $query = "SELECT *, DATE(time_status) as order_date, SUM(total_amount) as daily_total 
                  FROM order_ 
                  JOIN user_information ON order_.user_id = user_information.ID 
                  WHERE time_status < '0'
                  GROUP BY order_date";
    } else {
        $query = "SELECT *, DATE(time_status) as order_date, SUM(total_amount) as daily_total 
                  FROM order_ 
                  JOIN user_information ON order_.user_id = user_information.ID 
                  WHERE time_status >='$f' AND time_status <='$t'";
        $query .= " GROUP BY order_date";
    }
    $total_amount_daily = 0;
    $final_amount = 0;
    $o_run = mysqli_query($connect, $query);
    $pdf->SetFont("Arial", "", "13");
    $pdf->Cell(30, 6.5, "Date", 0, 0);
    $pdf->Cell(17, 6.5, "Order#", 0, 0);
    $pdf->Cell(50, 6.5, "Order Total(RM)", 0, 0);
    $pdf->Cell(50, 6.5, "", 0, 1);
    $pdf->Cell(50, 1.5, "", 0, 1);
    $pdf->Rect(5, 5, 200, 287, 'D');
    while ($row_item = mysqli_fetch_assoc($o_run)) {
        $pdf->Cell(30, 6.5, $row_item["order_date"], 1, 0);


        $query_orders = "SELECT * FROM order_ WHERE DATE(time_status) = '" . $row_item["order_date"] . "'";
        $result_orders = mysqli_query($connect, $query_orders);
        $total_amount_daily = 0;
        while ($order = mysqli_fetch_assoc($result_orders)) {

            $pdf->Cell(17, 6.5, "" . $order["order_id"], 1, 0);
            $total_amount = $order["total_amount"];
            $pdf->Cell(50 + 50, 6.5, "" . number_format($total_amount, 2), 1, 1);
            $total_amount_daily += $order["total_amount"];
            $pdf->Cell(30, 6.5, "", 'L,B', 0);
            $final_amount += $order["total_amount"];
        }
        $pdf->SetFont("Arial", "B", 12);
        $pdf->Cell(17 + 50, 6.5, "Daily Total ", 1, 0, 'R');
        $pdf->SetFont("Arial", "", 13);
        $pdf->Cell(50, 6.5, "RM" . number_format($total_amount_daily, 2), 1, 1, );

        $pdf->Cell(50 + 50 + 17 + 30, 9.5, "", '', 1);
    }
    $pdf->SetFont("Arial", "B", 17);
    $pdf->Cell(50 + 50 + 17, 7.5, "Total", 0, 0);
    $pdf->Cell(17, 7.5, "RM" . number_format($final_amount, 2), 0, 1);
    $pdf->Output();
}
?>