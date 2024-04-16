<?php include 'admin_sidebar.php';
include 'databaseconnect.php';
?>

<style>
    .top {
        display: flex;
        align-items: space-between;
    }

    .list-group-item {}
</style>

<body>
    <div class="main p-3">
        <h1>Customer Details</h1><?php
        if ($_GET["ID"])
            $id = $_GET["ID"];
        echo "Customer#" . "$id \n" ?>
        <span style="font-size:35px;  font-family: Arial, Helvetica, sans-serif;max-height:30px;">weileong</span>
        <button type="button" class="btn btn-warning" style="float:right;" onclick="history.back()">Back</button>
        <hr>
        <div class="card" style="width: 80rem;border:1px solid black;">
            <div class="card-header">
                PROFILE
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Email:</b> weileong@gmail.com</li>
                <li class="list-group-item"> <b>Contact Number:</b> 012-21231231</li>
                <li class="list-group-item"> <b>Joined at </b> 12/12/2024 12:12:12</li>
                <li class="list-group-item" style="display:flex; align-items:center;">
                    <b>Address(ess):&nbsp&nbsp</b><select class="form-select" aria-label="Default select example"
                        style="width:70rem; border:0.1px solid black;">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select></li>
            </ul>
        </div>
        <hr>
        <h1>Purchase History</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Order#</th>
                    <th scope="col">Created Time</th>
                    <th scope="col">Total</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>

    </div><!--end of main-->
</body>