<?php
include("data_connection.php");




if (isset($_GET['ID'])) {
	$id = mysqli_real_escape_string($connect, $_GET['ID']);

	$result = mysqli_query($connect, "SELECT * FROM user_information WHERE ID = '$id'");
	if ($row = mysqli_fetch_assoc($result)) {

	} else {
		echo "No record found.";
		exit();
	}
} else {
	echo "Product ID not provided.";
	exit();
}

if (isset($_POST["agree"])) {

	$name = mysqli_real_escape_string($connect, $_POST['name']);
	$contactnumber = mysqli_real_escape_string($connect, $_POST['contactnumber']);





	$result = mysqli_query($connect, "UPDATE user_information SET 
												 name = '$name', 
												 contactnumber = '$contactnumber'
												 WHERE ID = '$id'");

	if (!$result) {
		die('Error: ' . mysqli_error($connect));
	} else {
		session_start();
		$ID = $_SESSION['ID'];
		echo '<script>alert("Record updated successfully");</script>';
		echo '<script>window.location.href = "myprofile.php?ID=' . $ID . '";</script>';
		exit;
	}
}

?>