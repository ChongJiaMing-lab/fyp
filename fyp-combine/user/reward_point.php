<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="ready">

<head>



    <!-- BULMA -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/bulma.css" rel="stylesheet" type="text/css" />
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/bulma-extensions/bulma-checkradio.min.css" rel="stylesheet" type="text/css" />


    <!-- MAIN STYLESHEET -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/aio.css?ver=1713610527" rel="stylesheet" type="text/css" />

    <!-- CAROUSEL -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/carousel/slick.css" rel="stylesheet" type="text/css" />
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/carousel/slick-theme.css" rel="stylesheet" type="text/css" />

    <!-- FONT AWESOME -->
    <link defer rel="stylesheet" href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/fontawesome-5.6.3/css/all.min.css">

    <!-- MATERIAL DESIGN ICON -->
    <link defer rel="stylesheet" href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/materialdesignicons-3.3.92/materialdesignicons.min.css">

    <!-- STAATLICHES -->
    <link defer rel="stylesheet" href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/staatliches/staatliches.css">

    <!-- ANIMATION -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/animate.css" rel="stylesheet" type="text/css" />

    <!-- BULMA CALENDAR -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/bulma-calendar/bulma-calendar.min.css" rel="stylesheet" type="text/css" />

    <!-- JQUERY -->
    <script src="catalog/view/theme/aio/js/jquery-3.3.1.min.js"></script>
    <script defer type="text/javascript" src="https://techzone.com.my/catalog/view/javascript/jquery/ui/external/jquery.cookie.js"></script>

    <!-- TOTAL STORAGE -->
    <script defer type="text/javascript" src="https://techzone.com.my/catalog/view/javascript/jquery/jquery.total-storage.min.js"></script>

    <!-- FANCYBOX -->
    <link defer rel="stylesheet" href="https://techzone.com.my/catalog/view/theme/aio/plugins/fancybox3/jquery.fancybox.min.css">
    <script async src="https://techzone.com.my/catalog/view/theme/aio/plugins/fancybox3/jquery.fancybox.min.js"></script>

    <!-- ELEVATEZOOM -->
    <script async src="https://techzone.com.my/catalog/view/theme/aio/plugins/elevatezoom-plus/jquery.easing.min.js"></script>
    <script async src="https://techzone.com.my/catalog/view/theme/aio/plugins/elevatezoom-plus/jquery.mousewheel.js"></script>
    <script async src="https://techzone.com.my/catalog/view/theme/aio/plugins/elevatezoom-plus/jquery.ez-plus.js"></script>

    <!-- LAZYLOAD -->
    <script src="https://techzone.com.my/catalog/view/theme/aio/plugins/jquery.lazy-master/jquery.lazy.min.js"></script>
    <script src="https://techzone.com.my/catalog/view/theme/aio/plugins/jquery.lazy-master/jquery.lazy.plugins.min.js?ver=1.0"></script>



    <!-- GOOGLE RECAPTCHA -->
    <script defer async src='https://www.google.com/recaptcha/api.js'></script>



    <!-- CUSTOMIZE -->
    <link defer id="customize_css" href="https://techzone.com.my/catalog/view/multi_store/techzone/aio_customize_css.css?ver=1713610527" rel="stylesheet" type="text/css" />




    <!-- TITLE -->
    <title>My Account</title>

    <script src="catalog/view/javascript/fbpixel-conversion-api.js"></script>

</head>

<body class="body-style wide  clamp-1">
    <?php include "head.php" ?>













    <style>
        .badge {
            display: inline-block;
            margin-left: 5px;
            padding: 0 7px;
            border-radius: 12px;
            font-size: 15px;
            text-align: center;
            background: #d31010;
            color: #fefefe;
            border: 1px solid #ffffff91;
        }

        #checkout-cart .holder {
            display: block;
            flex-direction: row;
        }

        ul {
            list-style: none !important;
        }

        .title {
    color: black; 
	
}

input.button.btn-login{
            background-color:black;
        }

a.button.view-password
{
            background-color:black;
        }
.txt-interactt 
{
    color: skyblue !important;
}
.txt-data, .input.txt-data
{
	color:#2586c6;
}

.tabs li.is-active a, .modal-card-title {
    color: #50d282;
}
table{
    border:1px #dbdbdb solid;
}
th{
    background-color: rgba(218, 218, 218, 0.15);
}
    </style>

    </style>
    <section id="checkout-cart" class="section content container">
        <section id="account-order-list" class="section container myaccounts">


            <?php
            $id = $_SESSION['ID'];
            $query = "SELECT * FROM user_information WHERE ID='$id'";
            $query2 = "SELECT * FROM user_address WHERE customer_id='$id'";
            $result = mysqli_query($connect, $query);
            $result2 = mysqli_query($connect, $query2);
            if ($result && $result2) {

                if ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div id="contents">
                        <div id="sidebar-left">
                            <div class="sidebar-nav-list">
                                <ul class="nav-container">
                                    <li class="item">
                                        <a class="txt-interactt is-active" href="myaccount.php?ID=<?php echo $id; ?>">My
                                            account</a>
                                        <ul class="item-container">
                                            <li class="sub">
                                                <a href="myprofile.php?ID=<?php echo $id; ?>">My profile</a>
                                            </li>
                                            <li class="sub">
                                                <a href="view_address.php?ID=<?php echo $id; ?>">My address</a>

                                            </li>
                                            <li class="sub">
                                                <a href="change_password.php?ID=<?php echo $id; ?>">Change password</a>
                                            </li>
                                        </ul>
                                        <!-- MY ORDERS -->
                                    <li class="item">
                                        <a href="orderlist.php?ID=<?php echo $id; ?>">My orders</a>
                                    </li>
                                    <!-- MY COUPON -->
                                    <li class="item"><a href="...">My coupon</a></li>
                                    <!-- MY REWARD POINT -->
                                    <li class="item"><a href="...">My reward point</a></li>
                                    <!-- MY TRANSACTION -->
                                    <li class="item"><a href="...">My store credit</a></li>
                                </ul>
                            </div>
                        </div>
                <?php
                }
            }
                ?>

                <div id="main-content" class="order">
                    <div class="title">My Reward Point
                        <div class="credit-balance">
                            <div class="txt-info"> Point(s)</div>
                            <div class="positive-amount">
                            <?php 
                                $query3 = mysqli_query($connect,"SELECT * FROM point WHERE user_id = $id");
                                $row3 = mysqli_fetch_assoc($query3);
                                echo $row3['point'];
                            ?>
                            </div>
                        </div>
                    </div>
                    <div class="reward-container">
                        <table>
                            <tr>
                                <th width="15%">Date</th>
                                <th width="70%">Description</th>
                                <th width="15%">Point</th>
                            </tr>
                            <tr>
                                <?php 
                                $query4 = mysqli_query($connect,"SELECT * FROM point_details WHERE point_id = $row3[point_id]");
                                if(mysqli_num_rows($query4) == 0){?>
                                <td colspan=3>You do not have any reward points yet. Start collecting now!</td>
                                <?php 
                                }else{ 
                                    while($row4 = mysqli_fetch_assoc($query4)){
                                    $query5 = mysqli_query($connect,"SELECT * FROM order_ WHERE order_id = $row4[order_id]");
                                    $row5 = mysqli_fetch_assoc($query5);
                                    
                                echo "<td>".$row5['time_status']."</td>";
                                echo "<td>Order #".$row5['order_id']." : ".$row4['description']."</td>";
                                echo "<td>".$row4['changes']."</td>";
                                }}?>
                            </tr>

                        </table>
                    </div>
                </div>
</body>

</html>