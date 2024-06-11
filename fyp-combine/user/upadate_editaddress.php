<?php

include ("data_connection.php");

session_start();

if (isset($_GET['ID'])) {
	$id = mysqli_real_escape_string($connect, $_GET['ID']);

	$result = mysqli_query($connect, "SELECT * FROM user_address WHERE address_id='$id'");


	$row = mysqli_fetch_assoc($result);
} else {
	echo "user ID not provided.";
	exit();
}

if (isset($_POST["agree"])) {

	$name = mysqli_real_escape_string($connect, $_POST['name']);
	$contact_number = mysqli_real_escape_string($connect, $_POST['contact_number']);
	$address = mysqli_real_escape_string($connect, $_POST['address']);
	$state = mysqli_real_escape_string($connect, $_POST['state']);
	$city = mysqli_real_escape_string($connect, $_POST['city']);
	$postcode = mysqli_real_escape_string($connect, $_POST['postcode']);

	$result = mysqli_query($connect, "UPDATE user_address SET 
                                        name='$name', 
                                        contact_number='$contact_number', 
                                        address='$address', 
                                        state='$state', 
                                        city='$city', 
                                        postcode='$postcode' 
                                        WHERE address_id='$id'");

	if (!$result && $result2) {
		die('Error: ' . mysqli_error($connect));
	} else {

		$ID = $_SESSION['ID'];
		echo '<script>alert("Record updated successfully");</script>';
		echo '<script>window.location.href = "view_address.php?ID=' . $ID . '";</script>';
		exit;
	}
}
?>