<?php include 'databaseconnect.php' ?>
<?php include 'admin_sidebar.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Staff</title>
  <script>
    function add_check() {
      event.preventDefault();
      var no_error = true;

      var id = document.s_form.id.value;
      var name = document.s_form.name.value;
      var email = document.s_form.email.value;
      var tel = document.s_form.tel.value;

      function validateId() {
        return new Promise((resolve, reject) => {
          if (id == "") {
            document.getElementById("check_id").innerHTML = "Please enter an ID";
            no_error = false;
            resolve();
          } else if (id.length < 5) {
            document.getElementById("check_id").innerHTML = "ID must be at least 5 characters long";
            no_error = false;
            resolve();
          } else {
            $.ajax({
              url: 'run_query.php',
              method: 'POST',
              data: { id_r: id },
              success: function (response) {
                if (response.trim() === "exists") {
                  document.getElementById("check_id").innerHTML = "ID is already taken";
                  no_error = false;
                } else {
                  document.getElementById("check_id").innerHTML = "";
                }
                resolve();
              },
              error: function () {
                reject();
              }
            });
          }
        });
      }

      function validateName() {
        if (name == "") {
          document.getElementById("check_full").innerHTML = "Please enter full name";
          no_error = false;
        } else {
          document.getElementById("check_full").innerHTML = "";
        }
      }

      function validateEmail() {
        var email_regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email == "") {
          document.getElementById("check_e").innerHTML = "Please enter email";
          no_error = false;
        } else if (!email_regex.test(email)) {
          document.getElementById("check_e").innerHTML = "Please enter a valid email";
          no_error = false;
        } else {
          document.getElementById("check_e").innerHTML = "";
        }
      }

      function validateTel() {
        var tel_regex = /^\d{3}-\d{6,7}$/; 
        if (tel == "") {
          document.getElementById("check_num").innerHTML = "Please enter a telephone number";
          no_error = false;
        } else if (!tel_regex.test(tel)) {
          document.getElementById("check_num").innerHTML = "Please enter a valid telephone number(01x-xxx...)";
          no_error = false;
        } else {
          document.getElementById("check_num").innerHTML = "";
        }
      }

      validateName();
      validateEmail();
      validateTel();

      validateId().then(() => {
        if (no_error) {
          document.getElementById("s_form").submit();
        }
      }).catch(() => {
        console.error("An error occurred during ID validation.");
      });
    }

  </script>
  <style>
    table {
      max-width: 90%;
      margin-left: auto;
      margin-right: auto;
      font-size: 22px;
    }

    table img {
      height: 40px;
      width: 40px;
    }

    tr {
      height: 75px;
    }

    .staff_head {
      align-items: center;
      display: flex;
      justify-content: space-between;
    }

    .staff_head button {
      margin-right: 70px;
      font-size: 18px;
    }

    .modal-body span {
      color: red;
    }
  </style>

<body>
  <div class="main p-3">
    <div class="staff_head">
      <div class="head" style="display:flex;">
        <i class="lni lni-user" style="font-size:50px;"></i>
        <h1 style="margin: 12px 0 0 30px;">Staff</h1>
        <hr>
      </div>
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
      <div class="btns">
        <?php
        if (isset($_SESSION['sa']) && $_SESSION['sa'] == 1) {
          ?>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Add
            Staff</button>
          <?php
        } else {
          ?>
          <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-target="#myModal"
            aria-disabled="false" data-bs-placement="bottom" title="Only SuperAdmin can add the staff!">Add Staff</button>
          <?php
        }
        ?>
      </div>
    </div>
    <!-- modal start-->
    <div class="modal" id="myModal">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Add Staff</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <!-- Modal body -->
          <form action="a_staff.php" method="POST" id="s_form" name="s_form">
            <div class="modal-body">
              <div class="form-group mb-4">
                <label>Admin ID</label>
                <input type="text" class="form-control" placeholder="Admin id" name="id" required>
                <span id="check_id" style="color: red;"></span>
              </div>
              <div class="form-group mb-4">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="full name" name="name">
                <span id="check_full" style="color: red;"></span>
              </div>
              <div class="form-group mb-4">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="email" name="email">
                <span id="check_e" style="color: red;"></span>
              </div>
              <div class="form-group mb-4">
                <label>Telephone Number</label>
                <input type="text" class="form-control" placeholder="tel.no" name="tel">
                <span id="check_num" style="color: red;"></span>
              </div>
            </div>
            <input type="hidden" name="save_staff">
            <!-- Modal footer -->
            <div class="modal-footer">
              <button onclick="add_check()" class="btn btn-primary" name="save_staff"><i class="lni lni-checkmark"
                  style="margin-top:5px;"></i></button>
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="lni lni-close"
                  style="margin-top:5px;"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div><!-- modal end-->
    <hr>
    <?php
    if (isset($_SESSION['msg']) && $_SESSION['msg'] != '') {
      ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> <?php echo $_SESSION['msg']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php
      unset($_SESSION['msg']);
    }
    ?>
    <table class="table table-striped">
      <thead>
        <tr>
          <!-- <th scope="col">#</th> -->
          <th scope="col">Admin ID</th>
          <th scope="col">Full Name</th>
          <th scope="col">Email</th>
          <th scope="col">Telephone.No</th>
          <th scope="col">Joined Time</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <?php
        $result = mysqli_query($connect, "SELECT * FROM staff  WHERE sa!= 1 ORDER BY staff_status");
        $count = mysqli_num_rows($result);
        $count = 1;
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
              <!-- <th scope="row"><?//php echo $row["staff_id"]; ?></th> -->
              <td><?php echo $row["admin_id"]; ?></td>
              <td><?php echo $row["full_name"]; ?></td>
              <td><?php echo $row["staff_email"]; ?></td>
              <td><?php echo $row["staff_tel"]; ?></td>
              <td><?php echo $row["joined_time"]; ?></td>
              <?php if ($row["staff_status"] == 1) { ?>
                <td style="color:#0EAF09">Active</td><?php } else { ?>
                <td style="color:red;">Inactive</td><?php } ?>
              <!-- 1 = active, 2 = unactive -->
              <?php if (isset($_SESSION['sa']) && $_SESSION['sa'] == 1) {
                if ($row["staff_status"] == 1) {
                  ?>
                  <td><button type="button" class="btn btn-danger" data-bs-toggle="modal"
                      style="border-left: 1.25px solid white;" data-bs-target="#av<?php echo $row["staff_id"]; ?>">
                      <i class="lni lni-close" style="margin-top:5px;"></i></button></td>
                  <?php
                } else {
                  ?>
                  <td><button type="button" class="btn btn-success" data-bs-toggle="modal"
                      style="border-left: 1.25px solid white;" data-bs-target="#unav<?php echo $row["staff_id"]; ?>">
                      <i class="lni lni-checkmark" style="margin-top:5px;"></i></button></td>
                  <?php
                }
              } ?>
            </tr>
            <!-- modal start-->
            <div class="modal fade" id="av<?php echo $row["staff_id"]; ?>">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                      Current status:<b style="color:#0EAF09">Active</b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <div class="modal-body">
                    Set this staff <b><?php echo $row["admin_id"] ?></b> to:<b style="color:red;">Inactive</b>?<br>

                  </div>
                  <div class="modal-footer">
                    <a href="a_staff.php?staff_id=<?php echo $row["staff_id"] ?>"><button type="button"
                        class="btn btn-primary">Yes</button></a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
            </div><!-- end av modal -->
            <!-- modal start-->
            <div class="modal fade" id="unav<?php echo $row["staff_id"]; ?>">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                      Current status:<b style="color:red">Inactive</b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <div class="modal-body">
                    Set this staff <b><?php echo $row["admin_id"] ?></b> to:<b style="color:#0EAF09;">Active</b>?<br>
                  </div>
                  <div class="modal-footer">
                    <a href="a_staff.php?staff_id=<?php echo $row["staff_id"] ?>"><button type="button"
                        class="btn btn-primary">Yes</button></a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
            </div><!-- end av modal -->
            <?php
          }
        }
        ?>
      </tbody>
    </table>
  </div><!-- close text-center -->
  </div><!-- cose main p-3 -->

</body>

<script>
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })
</script>