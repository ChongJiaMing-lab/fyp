<?php include "databaseconnect.php" ?>
    <script>

    if(confirm('Do you want to reset all the component?'))
    {
        <?php
        //$del = mysqli_query($connect,"DELETE FROM pc_build WHERE user_id = $id AND pay_status != 'payed'");
        
        echo 'alert("Component has been reset successfully!");'; 
        echo "window.location.href='customization.php';";
        ?>
    }
    else{
        <?php
            echo "test";
        ?>
    }
    
    </script>