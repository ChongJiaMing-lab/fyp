
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

if(isset($_POST["change_pw"]))
{
    
}
?>