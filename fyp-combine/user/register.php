<?php include ("data_connection.php") ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="ready">

<head>







    <!-- BULMA -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/bulma.css" rel="stylesheet"
        type="text/css" />
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/bulma-extensions/bulma-checkradio.min.css"
        rel="stylesheet" type="text/css" />


    <!-- MAIN STYLESHEET -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/aio.css?ver=1710049660" rel="stylesheet"
        type="text/css" />

    <!-- CAROUSEL -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/carousel/slick.css" rel="stylesheet"
        type="text/css" />
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/carousel/slick-theme.css" rel="stylesheet"
        type="text/css" />

    <!-- FONT AWESOME -->
    <link defer rel="stylesheet"
        href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/fontawesome-5.6.3/css/all.min.css">

    <!-- MATERIAL DESIGN ICON -->
    <link defer rel="stylesheet"
        href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/materialdesignicons-3.3.92/materialdesignicons.min.css">

    <!-- STAATLICHES -->
    <link defer rel="stylesheet"
        href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/staatliches/staatliches.css">

    <!-- ANIMATION -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/animate.css" rel="stylesheet"
        type="text/css" />

    <!-- BULMA CALENDAR -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/bulma-calendar/bulma-calendar.min.css"
        rel="stylesheet" type="text/css" />

    <!-- JQUERY -->
    <script src="https://techzone.com.my/catalog/view/theme/aio/js/jquery-3.3.1.min.js"></script>
    <script defer type="text/javascript"
        src="https://techzone.com.my/catalog/view/javascript/jquery/ui/external/jquery.cookie.js"></script>

    <!-- TOTAL STORAGE -->
    <script defer type="text/javascript"
        src="https://techzone.com.my/catalog/view/javascript/jquery/jquery.total-storage.min.js"></script>

    <!-- FANCYBOX -->
    <link defer rel="stylesheet"
        href="https://techzone.com.my/catalog/view/theme/aio/plugins/fancybox3/jquery.fancybox.min.css">
    <script async
        src="https://techzone.com.my/catalog/view/theme/aio/plugins/fancybox3/jquery.fancybox.min.js"></script>

    <!-- ELEVATEZOOM -->
    <script async
        src="https://techzone.com.my/catalog/view/theme/aio/plugins/elevatezoom-plus/jquery.easing.min.js"></script>
    <script async
        src="https://techzone.com.my/catalog/view/theme/aio/plugins/elevatezoom-plus/jquery.mousewheel.js"></script>
    <script async
        src="https://techzone.com.my/catalog/view/theme/aio/plugins/elevatezoom-plus/jquery.ez-plus.js"></script>

    <!-- LAZYLOAD -->
    <script src="https://techzone.com.my/catalog/view/theme/aio/plugins/jquery.lazy-master/jquery.lazy.min.js"></script>
    <script
        src="https://techzone.com.my/catalog/view/theme/aio/plugins/jquery.lazy-master/jquery.lazy.plugins.min.js?ver=1.0"></script>



    <!-- GOOGLE RECAPTCHA -->
    <script defer async src='https://www.google.com/recaptcha/api.js'></script>



    <!-- CUSTOMIZE -->
    <link defer id="customize_css"
        href="https://techzone.com.my/catalog/view/multi_store/techzone/aio_customize_css.css?ver=1710049660"
        rel="stylesheet" type="text/css" />


    <style>
        .btn-wishlist,
        .btn-compare {
            display: none;
        }
    </style>


    <!-- TITLE -->
    <title>Register Account</title>

    <script src="https://techzone.com.my/catalog/view/javascript/fbpixel-conversion-api.js"></script>

</head>

<body class="body-style wide  clamp-1">
    <?php include "head.php" ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("form1").addEventListener("submit", function (event) {
                var email = document.getElementsByName("email")[0].value;
                var name = document.getElementsByName("Name")[0].value;
                var contactNumber = document.getElementsByName("telephone")[0].value;
                var dobDay = parseInt(document.getElementsByName("dob_day")[0].value);
                var dobYear = parseInt(document.getElementsByName("dob_year")[0].value);
                var password = document.getElementsByName("password")[0].value;

                var emailError = document.getElementById("email-error");
                var nameError = document.getElementById("name-error");
                var contactNumberError = document.getElementById("contact-number-error");
                var DayError = document.getElementById("Day-error");
                var YearError = document.getElementById("Year-error");
                var passwordError = document.getElementById("password-error");

                var errorMessages = "";

                if (email.trim() === "") {
                    errorMessages += "Email should be entered.<br>";
                    emailError.innerHTML = "Email should be entered.";
                } else {
                    emailError.innerHTML = "";
                }

                if (name.trim().length < 6) {
                    errorMessages += "Name should be at least 6 characters long.<br>";
                    nameError.innerHTML = "Name should be at least 6 characters long.";
                } else {
                    nameError.innerHTML = "";
                }

                if (contactNumber.trim() === "") {
                    errorMessages += "Contact Number should be entered.<br>";
                    contactNumberError.innerHTML = "Contact Number should be entered.";
                } else {
                    contactNumberError.innerHTML = "";
                }

                if (contactNumber.trim().length != 11 || contactNumber.trim().length != 10) {
                    errorMessages += "";
                    contactNumberError.innerHTML = "Invalid number length!<br>Please enter valid number.";
                } else {
                    contactNumberError.innerHTML = "";
                }
                if (isNaN(dobDay) || dobDay < 1 || dobDay > 31) {
                    errorMessages += "Day should be a number between 1 and 31.<br>";
                    DayError.innerHTML = "Day should be a number between 1 and 31.";
                } else {
                    DayError.innerHTML = "";
                }

                if (isNaN(dobYear) || dobYear < 1900 || dobYear > 2024) {
                    errorMessages += "Year should be a number between 1900 and 2024.<br>";
                    YearError.innerHTML = "Year should be a number between 1900 and 2024.";
                } else {
                    YearError.innerHTML = "";
                }

                if (password.trim().length < 6) {
                    errorMessages += "Password should be at least 6 characters long.<br>";
                    passwordError.innerHTML = "Password should be at least 6 characters long.";
                } else {
                    passwordError.innerHTML = "";
                }

                if (errorMessages !== "") {
                    event.preventDefault(); // Prevent form submission
                    document.getElementById("error-messages").innerHTML = errorMessages;
                }
            });
        });
    </script>
    </head>

    <body class="body-style wide  clamp-1">
        <section id="account-register" class="section container account-access">
            <div id="contents">
                <div id="main-content">
                    <div class="holder">
                        <div id="register">
                            <div class="account-access-header">
                                <div class="title">Register Account</div>
                                <div class="title-message">Already have an account? <a
                                        class="txt-interact txt-underline" href="Login.php">Log in</a></div>
                            </div>
                            <form id="form1" name="form1" method="post" action="#">
                                <input type="hidden" name="register_token" value="TVRjeE1EQXdOalF3T0E9PQ">
                                <div class="form-body">
                                    <div class="field">
                                        <label class="label">Email Address</label>
                                        <div class="control">
                                            <input type="text" class="input" name="email" value="" />
                                        </div>
                                        <div id="email-error" style="color: red;"></div>
                                    </div>
                                    <div class="field">
                                        <label class="label">Name</label>
                                        <div class="control">
                                            <input type="text" class="input" name="Name" value="" />
                                        </div>
                                        <div id="name-error" style="color: red;"></div>
                                    </div>
                                    <div class="field">
                                        <label class="label">Contact Number</label>
                                        <div class="control">
                                            <input type="text" class="input" name="telephone" value="" />
                                        </div>
                                        <div id="contact-number-error" style="color: red;"></div>
                                    </div>
                                    <div class="field-group">
                                        <div class="field dob">
                                            <div class="month-input">
                                                <label class="label">
                                                    Date of Birth </label>
                                                <div class="control">
                                                    <select id="dob_month" name="dob_month" class="">
                                                        <option value="0">January</option>
                                                        <option value="1">February</option>
                                                        <option value="2">March</option>
                                                        <option value="3">April</option>
                                                        <option value="4">May</option>
                                                        <option value="5">Jun</option>
                                                        <option value="6">July</option>
                                                        <option value="7">August</option>
                                                        <option value="8">September</option>
                                                        <option value="9">October</option>
                                                        <option value="10">November</option>
                                                        <option value="11">December</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="day-input">
                                                <label class="label">
                                                    Day </label>
                                                <div class="control">
                                                    <input id="dob_day" name="dob_day" type='number' class="input"
                                                        min="1" placeholder="DD" value="" pattern="[0-9] " />
                                                </div>

                                            </div>
                                            <div class="year-input">
                                                <label class="label ">
                                                    Year </label>
                                                <div class="control">
                                                    <input id="dob_year" name="dob_year" type='number' class="input"
                                                        min="1869" placeholder="YYYY" value="" pattern="[0-9]" />
                                                </div>

                                            </div>
                                            <input type="hidden" class="input " id="birthday_date" readonly="readonly"
                                                name="birthday_date" value="">
                                        </div>
                                        <div id="Day-error" style="color: red;"></div>
                                        <div id="Year-error" style="color: red;"></div>
                                    </div>
                                    <div class="field radio gender">
                                        <label class="label">Gender</label>
                                        <div class="control">
                                            <div class="radio-item">
                                                <input class="is-checkradio" type="radio" id="male" name="gender"
                                                    value="male" checked="checked" />
                                                <label for="male">Male</label>
                                            </div>
                                            <div class="radio-item">
                                                <input class="is-checkradio" type="radio" id="female" name="gender"
                                                    value="female" />
                                                <label for="female">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label ">
                                            Password <span class="help-password"> *at least 4 characters</span> </label>

                                        <div class="field has-addons">
                                            <div class="control addon-fix">
                                                <input type="password" class="input " name="password" value="" />
                                            </div>
                                            <div class="control">
                                                <a class="button view-password"><i class="mdi mdi-eye-off"></i></a>
                                            </div>
                                        </div>

                                        <div id="password-error" style="color: red;"></div>
                                    </div>
                                </div>
                                <div class="form-footer">
                                    <div class="field">
                                        <input type="hidden" name="agree" value="1" />
                                        <input type="submit" id="btn_submit" name="register" value="Confirm Register"
                                            class="button" />

                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            document.addEventListener("DOMContentLoaded", function () {

                document.querySelector(".view-password").addEventListener("click", function () {
                    var passwordInput = document.getElementsByName("password")[0];
                    var eyeIcon = document.querySelector(".view-password i");


                    if (passwordInput.type === "password") {
                        passwordInput.type = "text";
                        eyeIcon.classList.remove("mdi-eye-off");
                        eyeIcon.classList.add("mdi-eye");
                    } else {
                        passwordInput.type = "password";
                        eyeIcon.classList.remove("mdi-eye");
                        eyeIcon.classList.add("mdi-eye-off");
                    }
                });
            });
        </script>
    </body>

</html>

<?php
if (isset($_POST["register"]) && $_POST["register"] == "Confirm Register") {
    $con = mysqli_connect('localhost', 'root', '', 'fyp', 3306);
    mysqli_set_charset($con, "utf8");

    $a = $_POST["email"];
    $b = $_POST["Name"];
    $c = $_POST["telephone"];
    $d = $_POST["dob_month"];
    $e = $_POST["gender"];
    $f = $_POST["password"];
    $g = $_POST["dob_day"];
    $h = $_POST["dob_year"];
    $i = $g . '-' . $d . '-' . $h;

    if (empty($a) || empty($b) || empty($c) || empty($d) || empty($e) || empty($f) || empty($g) || empty($h)) {
        // Handle empty fields
    } else {
        // Check if email already exists
        $verify_query = mysqli_query($connnect, "SELECT * FROM user_information WHERE email='$a'");
        if (mysqli_num_rows($verify_query) > 0) {
            echo "<script>alert('The email has already been used. Please choose another email.');</script>";
        } else {
            // Insert new user
            mysqli_query($connect, "INSERT INTO user_information(email,name,contactnumber,dateofbirth,gender,password) VALUES('$a','$b','$c','$i','$e','$f')");
        }
    }
}
?>