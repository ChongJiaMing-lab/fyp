<?php

if(isset($_POST["reset-password-submit"]))
{
    $selector = $_POST["selector"];
    $validator = $_POST["validator"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["passwordRepeat"];

    if(empty($password) || empty($passwordRepeat))
    {
        header("Location: create-new-password.php?newpwd=empty");
        exit();
    }
    else if($password != $passwordRepeat)
    {
        header("Location: create-new-password.php?newpwd=pwdnotsame");
        exit();
    }

    $currentDate = date("U");
    require 'data_connection.php';

    $sql = "SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpires >= ?";
    $stmt = mysqli_stmt_init($connect);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        echo "There was an error!";
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "si", $selector, $currentDate);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        if(!$row = mysqli_fetch_assoc($result))
        {
            echo "You need to re-submit your reset request.";
            exit();
        }
        else
        {
            $tokenBin = hex2bin($validator);
            $tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);

            if($tokenCheck === false)
            {
                echo "You need to re-submit your reset request.";
                exit();
            }
            else if($tokenCheck === true)
            {
                $tokenEmail = $row['pwdResetEmail'];

                $sql = "SELECT * FROM user_information WHERE email=?";
                $stmt = mysqli_stmt_init($connect);
                if(!mysqli_stmt_prepare($stmt, $sql))
                {
                    echo "There was an error!";
                    exit();
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    if(!$row = mysqli_fetch_assoc($result))
                    {
                        echo "There was an Error!";
                        exit();
                    }
                    else
                    {
                        $newPwdHash = password_hash($password, PASSWORD_DEFAULT);
                        $sql = "UPDATE user_information SET password=? WHERE email=?";
                        $stmt = mysqli_stmt_init($connect);
                        if(!mysqli_stmt_prepare($stmt, $sql))
                        {
                            echo "There was an error!";
                            exit();
                        }
                        else
                        {
                            mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail);
                            mysqli_stmt_execute($stmt);

                            $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
                            $stmt = mysqli_stmt_init($connect);
                            if(!mysqli_stmt_prepare($stmt, $sql))
                            {
                                echo "There was an error!";
                                exit();
                            }
                            else
                            {
                                mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                                mysqli_stmt_execute($stmt);
                                header("Location:Login.php?newpwd=passwordupdated");
                            }
                        }
                    }
                }
            }
        }
    }
}
else
{
    header("Location:Login.php");
}
