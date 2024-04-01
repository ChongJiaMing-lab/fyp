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
    <form method="POST" action="">
        <input type="text" class="input" placeholder="Search with name" name="search">
        <hr>
    </form>
    <?php
          if (isset($_POST["search"])) 
          {
                $search = mysqli_real_escape_string($connect, $_POST["search"]);
                $q = "SELECT * FROM user WHERE name LIKE '%$search%'";
          } 
          else 
          {
              $q = "SELECT * FROM user";
          }
          $result = mysqli_query($connect, $q);
          $count = mysqli_num_rows($result);
    ?>
    <p><b>Showing <?php echo $count ?> results.</b></p>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Contact</th>
            <th scope="col">Age</th>
            </tr>
        </thead>
        <tbody>
        <?php
          if(mysqli_num_rows($result) > 0)
          {
            while($row = mysqli_fetch_array($result))
            {
            ?>
                <tr onclick="window.location='cust_detail.php?user_id=<?php echo $row['user_id'] ?>';">
                    <th scope="row"><?php echo $row["user_id"] ?></th>
                    <td><?php echo $row["name"];?><br>
                        <div style="font-size:11px;"><i>from </i><?php echo $row["country"]?></div></td>
                    </td>
                    <td style="vertical-align: middle;">
                        Telephone.No: <?php echo $row["tel"]?><br>
                        Email: <?php echo $row["eml"]?>
                    </td>
                    <td><?php echo $row["age"]?></td>
                </tr>
                
        <?php
            }
          }
          else
          {
            echo"No records found :(";
          }
          ?>
        </tbody>
        </table>
</div><!-- end of main-->
</body>