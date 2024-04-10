<body>
    <form action="" method="POST">
    <button type="submit" name="test">Reset Password</button>
</body>

<?php

    if(isset($_POST['test']))
    {
        $to = "1221201835@student.mmu.edu.my";
        $subject = "Hi";
        $message = "Hi, WL";
        $header = "From : zhangjiaming1018@gmail.com";

        if(mail($to, $subject, $message, $header))
        {
            echo "Email sent success";
        }
        else
        {
            echo "Failed to send";
        }
    }
?>