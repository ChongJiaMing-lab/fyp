<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<style>
h1, h2
{
    text-align: center;
}

button
{
    margin-top:10px;
}

.admin_login
{
    background-color: #f8f9fa;
    border: 1px solid #ced4da;
    padding: 10px;
    width:30%;
    position:absolute;
    top:50%;
    left:50%;
    transform: translate(-50%, -50%);
}

#show
{
    cursor:pointer;
    position:absolute;
    top:29%;
    transform:translate(-50%);
    right:10px;
}

ion-icon
{
    font-size: 26px;
    color:#54EB22;
}

</style>

<body>
    <h1>Admin Login</h1>
    <hr>
    <form class="admin_login" action="a_login.php" method="POST">
        <h2>Admin Login</h2>
  <p>Make sure that you had added to SuperAdmin/Admin</p>
        <div class="form-floating mb-3">
            <input type="test" class="form-control" id="floatingInput" placeholder="ID" name="id">
            <label for="floatingInput">ID</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pw">
            <label for="floatingPassword">Password</label>
            <ion-icon name="eye-outline" id="show"></ion-icon>
        </div>
        <button type="submit" class="btn btn-primary" name="a_login" values="a_login">Login</button>
    </form>
</body>
</html>

<script>
    let show = document.getElementById("show");
    let pw = document.getElementById("floatingPassword");

    show.onclick = function()
    {
        if(pw.type == "password")
        {
            pw.type="text";
            show.setAttribute("name", "eye-off-outline");
            document.getElementById("show").style.color = "red";

        }
        else
        {
            pw.type="password";
            show.setAttribute("name", "eye-outline");
            document.getElementById("show").style.color = "#54EB22";
        }
    }
</script>
