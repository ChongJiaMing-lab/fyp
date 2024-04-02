<?php
include 'databaseconnect.php';
require ("php_libs/fpdf.php");

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
?>