
<?php
include "head.php"; 
if(isset($_POST["forgot_pass"]))
{
    $pwd = $_POST["confirm"];
    $email = $_POST["email"];
    $update = "UPDATE user_information SET password = '$pwd' WHERE email = '$email'";
    $update_run = mysqli_query($connect, $update);

    if($update_run)
    {
        $expire = "UPDATE forgot_pass SET expire = '1' WHERE email = '$email'";
        $exipre_run = mysqli_query($connect, $expire);
        ?>
			<script>
				alert("<?php echo "Hi, please try to login with new password." ?>");
                window.location.replace("Login.php");
			</script>
			<?php
    }
}

if(isset($_POST["change_pass"]))
{
    $new = $_POST["confirm"];
    $user_id = $_POST["user_id"];
	$change = "UPDATE user_information SET password = '$new' WHERE ID='$user_id'";
	$change_query = mysqli_query($connect, $change);

	if ($change_query) {
		
		$ID = $_SESSION['ID'];
		echo '<script>alert("Password change successfully");</script>';
		echo '<script>window.location.href = "myaccount.php?ID=' . $ID . '";</script>';
		exit;
	}
}
?>