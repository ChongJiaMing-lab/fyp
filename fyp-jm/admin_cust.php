<?php  include 'admin_sidebar.php';
    include 'databaseconnect.php';
?>

<style>
.input
{
    width:1000px;
    height:50px;
    border-radius: 10px;
}
input[type=text]
{
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding-left: 40px;
}
tbody tr
{ 
    cursor: pointer; 
}

tbody td
{
    max-height:10px;
}
</style>
<body>
<div class="main p-3">
    <div class="head" style="display:flex;">
        <i  class="lni lni-stackoverflow" style="font-size:50px;"></i>
        <h1 style="margin: 12px 0 0 30px;">User List</Category:Components></h1><hr>
    </div>
    <hr>
    <input type="text" class="input" placeholder="Search with name">
    <hr>
    <p><b>Showing 3 results.</b></p>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Contact</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr onclick="window.location='cust_detail';">
            <th scope="row">1</th>
            <td>Jiaming<br>
                <div style="font-size:11px;">>Singapore</div></td>
            <td style="vertical-align: middle;">Otto</td>
            <td>@mdo<br>hahaha</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob<br>Malaysia</td>
            <td>Thornton</td>
            <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Jacob<br>Malaysia</td>
            <td>Thornton</td>
            <td>@twitter</td>
            </tr>
        </tbody>
        </table>
</div><!-- end of main-->
</body>