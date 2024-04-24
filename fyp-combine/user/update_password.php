
<?php
include "head.php"; 
    $pwd = $_POST["confirm"];
    $email = $_POST["email"];
    $update = "UPDATE user_information SET password = '$pwd' WHERE email = '$email'";
    $update_run = mysqli_query($connect, $update);

    if($update_run)
    {
        ?>
			<script>
				alert("<?php echo "Hi, please try to login with new password." ?>");
                window.location.replace("Login.php");
			</script>
			<?php
    }
?>