<?php
include "data_connection.php";

session_start();
$id = $_SESSION['ID'];

if(isset($_GET["cat"])) {
    // $update = "UPTADE pc_build SET ".$_GET["cat"]." = NULL";
    // $query = ($connect,$update);
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>

    <script>
        Swal.fire({
            title: "Do you want to delete this component?",
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: "Yes",
            denyButtonText: `No`
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isDenied) {
                Swal.fire("Changes are not saved", "", "info");
                window.location.href='customization.php';
                exit();
            }
            else if (result.isConfirmed) {
          //      Swal.fire("Component has been deleted!", "", "success");
                <?php 
                $_SESSION['alert_c'] = 'Swal.fire("Component has been deleted!", "", "success");';
                    $uptade = "UPDATE pc_build SET ".$_GET["cat"]." = NULL";
                    $query = mysqli_query($connect,$uptade);
                    if(mysqli_affected_rows($connect)>0)
                    {
                        echo "window.location.href='customization.php';";
                    }
                ?>
            }
        });
    </script>

    </body>
    </html>
<?php
} else {
    echo "failed";
}
?>
