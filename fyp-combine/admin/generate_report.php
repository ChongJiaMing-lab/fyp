<?php
include 'databaseconnect.php';
require ("php_libs/fpdf.php");

date_default_timezone_set("Asia/Kuching");
$time = date("dmY");
if(isset($_POST["cust_pdf"]))
{
    $pdf = new FPDF("p","mm","A4");

    $pdf ->AddPage();

    //arial, font-weight, font-size
    $pdf ->SetFont("Arial","B",14);

    //width, height, text, border, endline, [align]
    $pdf ->Cell(130 ,5,"Customer List",0,0);
    $pdf ->Cell(59, 5,"SKT PC",0,1);

    $pdf ->Cell(130, 10,"",0,1);
    $pdf->SetFont("Arial","b",12);
    $pdf ->Cell(10, 5,"#",1,0);
    $pdf ->Cell(50, 5,"Username",1,0);
    $pdf ->Cell(50, 5,"Tel",1,0);
    $pdf ->Cell(50, 5,"Email",1,0);
    $pdf ->Cell(20, 5,"Age",1,1);

    $pdf->SetFont("Arial","",12);
    $result = mysqli_query($connect, "SELECT ID, name, contactnumber, email, gender FROM user_information");
    while($row = mysqli_fetch_array($result))
    {

        $pdf ->Cell(10, 5,$row["ID"],1,0);
        $pdf ->Cell(50, 5,$row["name"],1,0);
        $pdf ->Cell(50, 5,$row["contactnumber"],1,0);
        $pdf ->Cell(50, 5,$row["email"],1,0);
        $pdf ->Cell(20, 5,$row["gender"],1,1);
    }

    $pdf->Output();
}
if(isset($_POST["cust_excel"]))
{
    $output = "";
    
    if(isset($_POST["cust_excel"]))
    {
        $excel = mysqli_query($connect,"SELECT ID, name, contactnumber, email, gender FROM user_information");

        if(mysqli_num_rows($excel) > 0)
        {
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

            while($row = mysqli_fetch_array($excel))
            {
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
        }
        else
        {
            echo "No record found :(";
        }
    }
}

if(isset($_POST["order_receipt"]))
{
    $pdf = new FPDF("p","mm","A4");

    $pdf ->AddPage();

    $pdf ->SetFont("Arial","B",30);

    $pdf->Cell(130, 15, "SKT PC",0,1);
    $pdf ->SetFont("Arial","",14);
    $pdf->Cell(50, 5, "Thanks for choosing us!",0,1);
    $pdf->Cell(50, 5, "If there are any issu with your product, do sent a message to us, we are always",0,1);
    $pdf->Cell(50, 5, "here to assist you! ",0,1);
    $pdf->Cell(0, 5, "------------------------------------------------------------------------------------------------------------------",0,1);

    $pdf ->SetFont("Arial","B",14);
    $pdf->Cell(130,5,"To:",0,1);

    $pdf ->SetFont("Arial","",14);
    $pdf->Cell(0,5,"JIAMING",0,1);
    $pdf->Cell(130,5,"Ixora Apartment C-15-03A, 75450, Ayer Keroh, Malaysia",0,1);

    $pdf ->SetFont("Arial","B",14);
    $pdf->Cell(23,15,"Order ID:",0,0);
    $pdf ->SetFont("Arial","",14);
    $pdf->Cell(0,15,"#1",0,1);

    $pdf ->SetFont("Arial","B",14);
    $pdf->Cell(28,5,"Order Date:",0,0);
    $pdf ->SetFont("Arial","",14);
    $pdf->Cell(25,5,"22-22-2024 22:22:22",0,1);
    $pdf->Cell(0, 10, "------------------------------------------------------------------------------------------------------------------",0,1);

    $pdf->Cell(9,5, "#",1,0);
    $pdf->Cell(100,5, "Product",1,0);
    $pdf->Cell(17,5, "QTY",1,0);
    $pdf->Cell(28,5, "Price",1,0);
    $pdf->Cell(35,5, "Total",1,1);

    $pdf->Cell(9,8, "1",1,0);
    $pdf->Cell(100,8, "3090-ti",1,0);
    $pdf->Cell(17,8, "1",1,0);
    $pdf->Cell(28,8, "2000.00",1,0);
    $pdf->Cell(35,8, "2000.00",1,1);

    $pdf->Cell(9,8, "2",1,0);
    $pdf->Cell(100,8, "i9-14th",1,0);
    $pdf->Cell(17,8, "3",1,0);
    $pdf->Cell(28,8, "300.00",1,0);
    $pdf->Cell(35,8, "900.00",1,1);

    $pdf ->Cell(109+17+28 ,10,"Sub-total(4 items)",'L,B,R',0,'R');
    $pdf ->Cell(35,10,"2900.00",'R,B',1,'R');
    $pdf ->Cell(109+17+28 ,10,"Shipping",'L,B,R',0, 'R');
    $pdf ->Cell(35 ,10,"5.00",'R,B',1,'R');
    $pdf ->Cell(109+17+28 ,10,"Total",'L,B,R',0, 'R');
    $pdf ->Cell(35 ,10,"2905.00",'R,B',1,'R');
    $pdf->Output();
}
?>