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
    $result = mysqli_query($connect, "SELECT user_id, name, tel, eml, age FROM user");
    while($row = mysqli_fetch_array($result))
    {

        $pdf ->Cell(10, 5,$row["user_id"],1,0);
        $pdf ->Cell(50, 5,$row["name"],1,0);
        $pdf ->Cell(50, 5,$row["tel"],1,0);
        $pdf ->Cell(50, 5,$row["eml"],1,0);
        $pdf ->Cell(20, 5,$row["age"],1,1);
    }

    $pdf->Output();
}
else if(isset($_POST["cust_excel"]))
{
    $output = "";
    
    if(isset($_POST["cust_excel"]))
    {
        $excel = mysqli_query($connect,"SELECT user_id, name, tel, eml, age FROM user");

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
                            <td>' . $row["user_id"] . '</td>
                            <td>' . $row["name"] . '</td>
                            <td>' . $row["tel"] . '</td>
                            <td>' . $row["eml"] . '</td>
                            <td>' . $row["age"] . '</td>
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
?>