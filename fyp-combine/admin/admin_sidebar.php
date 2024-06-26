<?php session_start(); ?>
<?php include 'databaseconnect.php'; ?>
<?php
$check_feedback = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM feedback WHERE `read` = '0'"));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="admin_sidebar.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<style>
    .sidebar-item span {
        position: relative;
        bottom: 3px;
    }
</style>

<body>
    <?php
    if (!isset($_SESSION["admin_id"])) {
        ?>
        <script>
            Swal.fire({
                position: "middle",
                icon: "warning",
                title: "You are required to login first",
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
            });
            setTimeout(function () {
                window.location.href = "admin_login.php";
            }, 2200);
        </script>
        <?php
        exit();
    }
    ?>
    <?php
    if (isset($_SESSION['title']) && $_SESSION['title'] != '') {
        ?>
        <script>
            Swal.fire({
                title: "<?php echo $_SESSION['title']; ?>",
                text: "<?php echo $_SESSION['text']; ?>",
                icon: "<?php echo $_SESSION['icon']; ?>"
            });
        </script>
        <?php
        unset($_SESSION['img']);
        unset($_SESSION['title']);
        unset($_SESSION['text']);
        unset($_SESSION['icon']);
    }
    ?>
    <div class="wrapper">
        <div class="topbar">
            <div class="logo">
                <img src="../image/skt.png" style="width:110px; height:60px;">
            </div>
            <div class="user">
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false"
                        style="background:none; color:black;border-radius:20px;">
                        <ion-icon name="apps-outline" style="font-size:110%; position:relative; top:3.5px;"></ion-icon>
                        <!-- <img src="image/<//?php echo $_SESSION['pic']; ?>"> -->
                        <?php echo $_SESSION['admin_id']; ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="edit_staff.php?staff_id=<?php echo $_SESSION['id']; ?>">Edit
                                Profile</a></li>
                        <li><a class="dropdown-item" href="a_logout.php">Logout</a></li>
                    </ul>
                </div>
            </div><!-- topbar-->

            <aside id="sidebar" class="sidebar">
                <div class="d-flex">
                    <button class="toggle-btn" type="button">
                        <i class="lni lni-grid-alt"></i>
                    </button>
                    <div class="sidebar-logo">
                        <a href="admin_landing.php">Admin</a>
                    </div>
                </div>

                <!-- <ul class="sidebar-nav">
                <li class="sidebar-item">
                <a href="#" class="sidebar-link" id="admin">
                        <img src= "image/< ? php echo $_SESSION['pic'];?>" style="margin-right: 0 0 10px 10px;">
                         < ? php echo $ _SES SION['admin_id']; ? > -->
                <!-- </a>
                </li>
                <hr> -->
                <li class="sidebar-item">
                    <a href="admin_landing.php" class="sidebar-link" id="admin">
                        <i class="lni lni-home"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="admin_staff.php" class="sidebar-link" id="admin">
                        <i class="lni lni-user"></i>
                        <span>Staff</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="admin_cust.php" class="sidebar-link">
                        <i class="lni lni-users"></i>
                        <span>User</span>
                    </a>
                </li>



                <li class="sidebar-item">
                    <a href="admin_b.php" class="sidebar-link">
                        <i class="lni lni-bootstrap"></i>
                        <span>Brand</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="admin_pc.php" class="sidebar-link">
                        <i class="lni lni-stackoverflow"></i>
                        <span>Component</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="admin_peri.php" class="sidebar-link">
                        <i class="lni lni-keyboard"></i>
                        <span>Peripheral</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="admin_product.php" class="sidebar-link">
                        <i class="lni lni-cart-full"></i>
                        <span>Product</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="admin_order.php" class="sidebar-link">
                        <i class="lni lni-list"></i>
                        <span>Order</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="admin_salesrpt.php" class="sidebar-link">
                        <i class="lni lni-stats-up"></i>
                        <span>Sales Report</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="admin_voucher.php" class="sidebar-link">
                        <i class="lni lni-offer"></i>
                        <span>Voucher</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="admin_feedback.php" class="sidebar-link">
                        <i class="lni lni-comments"></i>
                        <span>Feedback</span>
                        <?php
                        if ($check_feedback > 0) { ?>
                            <span class="badge bg-danger rounded-pill"><?php echo $check_feedback ?></span>

                            <?php
                        }
                        ?>
                    </a>
                </li>
                </ul>
            </aside>
        </div>
</body>

</html>

<script>
    const sidebar = document.querySelector("#sidebar");

    sidebar.addEventListener("mouseover", function () {
        sidebar.classList.add("expand");
    });

    sidebar.addEventListener("mouseleave", function () {
        sidebar.classList.remove("expand");
    });


    // var links = document.querySelectorAll('.sidebar a');

    //         links.forEach(function(link) {
    //             link.classList.remove('active');
    //         });

    //         links.forEach(function(link) {
    //             link.addEventListener('click', function() {

    //                 links.forEach(function(link) {
    //                     link.classList.remove('active');
    //                 });


    //                 link.classList.add('active');


    //                 localStorage.setItem('activeLink', link.getAttribute('href'));
    //             });
    //         });

    //         var storedActiveLink = localStorage.getItem('activeLink');
    //         if (storedActiveLink) {
    //             document.querySelector('.sidebar a[href="' + storedActiveLink + '"]').classList.add('active');
    //         }

</script>