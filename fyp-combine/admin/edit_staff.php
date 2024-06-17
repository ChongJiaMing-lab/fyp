<?php
include 'databaseconnect.php';
include 'admin_sidebar.php';
?>

<head>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        function add_check(event) {
            event.preventDefault();
            var no_error = true;

            var name = document.s_form.fn.value;
            var pw = document.s_form.pw.value;
            var email = document.s_form.eml.value;
            var tel = document.s_form.tel.value;

            if (name == "") {
                document.getElementById("check_full").innerHTML = "Please enter your full name";
                no_error = false;
            } else {
                document.getElementById("check_full").innerHTML = "";
            }

            var errormsg = "";
            if (pw == "") {
                errormsg = "Please enter a password";
                no_error = false;
            } else {
                var length = pw.length >= 15;
                var up = /[A-Z]/.test(pw);
                var low = /[a-z]/.test(pw);
                var number = /[0-9]/.test(pw);

                if (!length) {
                    errormsg += "Password must be at least 15 characters long.<br>";
                    no_error = false;
                }
                if (!up) {
                    errormsg += "Password must contain at least one uppercase letter.<br>";
                    no_error = false;
                }
                if (!low) {
                    errormsg += "Password must contain at least one lowercase letter.<br>";
                    no_error = false;
                }
                if (!number) {
                    errormsg += "Password must contain at least one number.<br>";
                    no_error = false;
                }
            }
            document.getElementById("check_pw").innerHTML = errormsg;

            var email_regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (email == "") {
                document.getElementById("check_e").innerHTML = "Please enter email";
                no_error = false;
            } else {
                if (!email_regex.test(email)) {
                    document.getElementById("check_e").innerHTML = "Please enter a valid email";
                    no_error = false;
                } else {
                    document.getElementById("check_e").innerHTML = "";
                }
            }

            var tel_regex = /^\d{3}-\d{6,7}$/;
            if (tel == "") {
                document.getElementById("check_t").innerHTML = "Please enter a telephone number";
                no_error = false;
            } else {
                if (!tel_regex.test(tel)) {
                    document.getElementById("check_t").innerHTML = "Please enter a valid telephone number (01x-xx...)";
                    no_error = false;
                } else {
                    document.getElementById("check_t").innerHTML = "";
                }
            }

            if (no_error) {
                document.s_form.submit();
            }
        }
    </script>
</head>
<style>
    .card-header {
        display: flex;
        justify-content: space-between;
    }

    .main h1 {
        font-size: 45px;
    }

    .inputField label {
        width: 150px;
        text-align: left;
    }

    form .inputField input {
        margin-bottom: 20px;
    }

    #button_edit {
        width: 100%;
    }

    .inputField span {
        color: red;
        position: relative;
        bottom: 10px;
    }

    #show {
        cursor: pointer;
        position: relative;
        top: 37px;
        transform: translate(-50%);
        left: 500px;
        font-size: 25px;
        color: #54EB22;
    }
</style>

<body>
    <div class="main p-3">
        <div class="e-head">
            <h1>Edit Profile</h1>
        </div>
        <?php
        $id = $_GET['staff_id'];
        $query = "SELECT * FROM staff WHERE staff_id='$id'";
        $result = mysqli_query($connect, $query);
        if ($result) {
            foreach ($result as $row) {
                ?>
                <div class="card" style="width:50%;">
                    <div class="card-header">
                        <h5>Update your information here</h5>
                        <button type="button" class="btn btn-warning" onclick="history.back()">Back</button>
                    </div>
                    <div class="card-body">
                        <form action="e_staff.php" method="POST" class="form" id="s_Form" name="s_form">
                            <div class="e-form">
                                <div class="inputField">
                                    <div>
                                        <label>ID:</label>
                                        <input type="text" value="<?php echo $row['admin_id'] ?>" class="form-control" readonly
                                            style="background-color:#DFDFDF">
                                        <span id="check_id"></span>
                                    </div>
                                    <div>
                                        <label>Full Name:</label>
                                        <input type="text" class="form-control" value="<?php echo $row['full_name'] ?>"
                                            name="fn">
                                        <span id="check_full"></span>
                                    </div>
                                    <div>
                                        <label>Password:</label><ion-icon name="eye" id="show"></ion-icon>
                                        <input type="password" class="form-control" value="<?php echo $row['staff_pw'] ?>"
                                            name="pw" id="pw">
                                        <span id="check_pw"></span>

                                    </div>
                                    <div>
                                        <label>Email:</label>
                                        <input type="text" class="form-control" value="<?php echo $row['staff_email'] ?>"
                                            name="eml">
                                        <span id="check_e"></span>
                                    </div>
                                    <div>
                                        <label>Telephone.No:</label>
                                        <input type="text" class="form-control" value="<?php echo $row['staff_tel'] ?>"
                                            name="tel">
                                        <span id="check_t"></span>
                                    </div>
                                </div>
                                <input type="hidden" name="edit_staff">
                                <?php
            }
        }
        ?>
                    </div>
                    <button onclick="add_check(event)" id="button_edit" class="btn btn-primary"
                        name="edit_staff">Update</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        let ph = document.getElementById("picholder");
        let ii = document.getElementById("imgInput");

        ii.onchange = function () {
            ph.src = URL.createObjectURL(ii.files[0]);
        }
    </script>
    <script>
        let show = document.getElementById("show");
        let pw = document.getElementById("pw");

        show.onclick = function () {
            if (pw.type == "password") {
                pw.type = "text";
                show.setAttribute("name", "eye-off");
                document.getElementById("show").style.color = "red";

            }
            else {
                pw.type = "password";
                show.setAttribute("name", "eye");
                document.getElementById("show").style.color = "#54EB22";
            }
        }
        window.
            onload
            = function () {
                Particles.
                    init
                    ({
                        selector:
                            '.background'
                    });
            };
    </script>
</body>