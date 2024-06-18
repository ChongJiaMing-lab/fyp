<?php include 'admin_sidebar.php';
include 'databaseconnect.php';
?>

<style>
    .list-group{
        margin-top:10px;
        margin-bottom:30px;
        border:0.5px solid black;
        width:70%;
    }
</style>
<body>
    <div class="main p-3">
        <div class="head" style="display:flex;">
            <i class="lni lni-comments" style="font-size:50px;"></i>
            <h1 style="margin: 12px 0 0 30px">Feedback</Category:Components>
            </h1>
            <hr>
        </div>
        <?php
       $view_feedback = mysqli_query($connect, "SELECT * FROM feedback ORDER BY `read`, feedback_id DESC");
        while ($row = mysqli_fetch_assoc($view_feedback)) {
            ?>
            <ul class="list-group">
                <?php if(($row["read"])==0){?><li class="list-group-item list-group-item-primary"><?php } 
                else {?><li class="list-group-item list-group-item-secondary"><?php };
                ?>
                <?php echo $row["name"]?>(<?php echo $row["email"]?>) : </li>
                <li class="list-group-item"><?php echo $row["message"]?></li>
                <li></li>
                <li></li>
            </ul>
            <?php
        }
        ?>
    </div>

</body>

<?php
$read_feedback = mysqli_query($connect, "UPDATE feedback SET `read` = '1'");
?>
