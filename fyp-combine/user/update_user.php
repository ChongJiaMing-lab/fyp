<?php
include 'data_connection.php';
if (isset($_POST["agree"])) {

    $a = $_POST["email"];
    $b = $_POST["Name"];
    $c = $_POST["telephone"];
    $f = $_POST["password"];
    $d =$_POST["cpassword"];
	$now = new DateTime('now', new DateTimeZone('Asia/Kuala_Lumpur'));
    $currentDateTime = $now->format('d-m-Y H:i:s');

    $verify_query = mysqli_query($connect, "SELECT * FROM user_information WHERE email='$a'");
    if (mysqli_num_rows($verify_query) > 0) 
    {
        echo "<script>alert('The email has already been used. Please choose another email.');window.location.href='register.php';</script>";
		
		
    } 
    else if($f != $d)
    {
        echo "<script>alert('Passwords does not match. Please re-enter your password.');window.location.href='register.php';</script>";
    }
	else 
	{
        mysqli_query($connect, "INSERT INTO user_information(email,name,contactnumber,password,join_time) VALUES('$a','$b','$c','$f','$currentDateTime')");
        $ID = mysqli_insert_id($connect);
        mysqli_query($connect, "INSERT INTO point(point,user_id) VALUES('0','$ID')");
		echo "<script>alert('Register Successful!'); window.location.href='Login.php';</script>";
		exit; 
    }
	
}
?>