<?php
include ("data_connection.php");

session_start();

if (isset($_POST["agree"])) {

	$id = $_GET['ID'];
	
	$con = mysqli_connect('localhost', 'root', '', 'fyp', 3306);
	mysqli_set_charset($con, "utf8");



	$a = $_POST["name"];
	$b = $_POST["telephone"];
	$c = $_POST["address_1"];
	$e = $_POST["zone_id"];
	$f = $_POST["city"];
	$g = $_POST["postcode"];
	$h = '0';

	if (empty($c) || empty($f)) {
		echo '<script>alert("Address and City cannot be empty");</script>';
		echo '<script>window.history.back();</script>';
		exit;
	}
	
	mysqli_query($con, "INSERT INTO user_address(customer_id,name,contact_number,address,state,city,postcode,default_address,status) VALUES ('$id','$a', '$b', '$c','$e','$f','$g','$h',1)");


	$ID = $_SESSION['ID'];
	echo '<script>alert("Record updated successfully");</script>';
	echo '<script>window.location.href = "view_address.php?ID=' . $ID . '";</script>';
		exit;

	


}
?>