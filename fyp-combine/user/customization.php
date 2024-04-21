<?php
include "data_connection.php"; 
include "head.php"; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customization</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .body{
            margin:0px;
        }
        .header-build{
            text-align:center;
            padding:15px 15px;
            margin:0px;
            background-color:#3b426e;
            color:white;
            font-size:1em;
        }
        .header-build a{
            color:white;
            text-decoration:none;
        }
        .header-build a:hover{
            color:#20c997;
            text-decoration:underline;
        }

        .container{
            width:80%;
            margin:0 auto 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;      
        }

        select{
            width:70%;
            height:30%;
        }

        .product-container {
            width: 70%; /* Adjust the width of the product container */
            
        }
        

        .product img{
            margin-left:10px;
            width:70px;
            height:70px;
            padding-bottom:10px;
        }

        .wrapperr{
            position: sticky;
            top: 0;
            z-index: 1;
            
        }

        #wrapper{
            overflow:visible;
        }

        .cart-container {
            padding:10px 30px;
        }
        
        .cart-container a:hover{
            color:#007bff;
            cursor: pointer;
        }

        .product .toggleBtn{
            height:100px;
            background-color:transparent;
            border-bottom:1px black solid;
            font-size:30px;
            display: flex;
            align-items: center; /* Align text vertically */
            cursor: pointer; /* Add cursor pointer */
        }

        .right{
            display:block;
            text-align:right;
        }

        .cart{
            font-size:20px;
        }

        .content {
            display: flex;
            align-items: center;
            height: 0; 
            overflow: hidden;
            transition: height 0.2s ease-in-out;
        }

        .extended-border {
            border-bottom: 1px solid black;
        }
        .button-container {
            /* display: flex;
            justify-content: fle-end; Align items to the right */
            margin-top: 20px; /* Add some spacing between products and buttons */
            
        }

        .button-container button{
            width:100px;
            height:20px;
            margin-top:1%;
            margin-left:10px;

        }

        .component img{
            display:inline-block;
            vertical-align: middle;
            margin:10px;
        }

        #com_btn{
            margin:10px;
        }

        .body-style button{
            background-color:#1d3f66;
        }


    </style>
</head>
<body>
    
    <div class="header-build">
    <h1>Computer Builder</h2>
    <a href="index.php">Home</a> > <a href="customization.php">Customization</a>
    </div>
<?php 
if(isset($_SESSION['alert_r'])){
    echo 
    "<script>
        alert('" . $_SESSION['alert_r'] . "');
    </script>";
    unset($_SESSION['alert_r']);
}
else if(isset($_SESSION['alert_c'])){
    echo '<script>Swal.fire("Component has been deleted!", "", "success");</script>';
    unset($_SESSION['alert_c']);
}
?>

<?php 
        
        $id = $_SESSION['ID'];
        $query = mysqli_query($connect,"SELECT * FROM pc_build WHERE user_id = $id AND pay_status != 'payed'");
        $row = mysqli_fetch_array($query); 
        

        $monitor = $row['monitor']?? null;
        $chassis = $row['chassis']?? null;
        $motherboard = $row['motherboard']?? null;
        $processor= $row['processor']?? null;
        $graphic_card = $row['graphic_card']?? null;
        $ram1 = $row['ram1']?? null;
        $ram2 = $row['ram2']?? null;
        $memory = $row['memory']?? null;
        $cooler = $row['cooler']?? null;
        $power_supply = $row['power_supply']?? null;
        
?>

<div class ="container">
    <div class ="product-container">
        
            <?php 
                $total = 0;
                $i=0;
                while($i < mysqli_num_fields($query))
                {
                    $fld = mysqli_fetch_field($query);
                    $myarray[]=$fld->name;
                    
                
                    if($i>2)
                    {
                        echo '<div class ="product">';
                        echo '<div class="toggleBtn">'.str_replace('_', ' ', ucfirst($myarray[$i])).'</div>
                        <div class="content">';
                    
                    if($myarray[$i] == "ram1"||$myarray[$i] == "ram2")
                    {
                        $query3 = mysqli_query($connect,"SELECT * FROM category WHERE category = 'ram'");
                        $row3 = mysqli_fetch_assoc($query3) ;
                    }
                    else{
                        $query3 = mysqli_query($connect,"SELECT * FROM category WHERE category = '{$myarray[$i]}'");
                        $row3 = mysqli_fetch_assoc($query3) ;
                    }
                    
                    if (!isset(${$myarray[$i]}))
                    {

                        echo    "<a href='product_selection.php?c_id=".$row3['category_id']."'>
                                Add Component
                                </a>";
                        echo '</div>';
                        echo '</div>';
                    }
                    
                    else{
                        $query2 = mysqli_query($connect,"SELECT * FROM product WHERE product_id = ${$myarray[$i]}");
                        $row2 = mysqli_fetch_assoc($query2);
                        echo "<div class='component'>";
                        echo "<img src=../image/".$row2['image']."></img>".$row2['product_name'];
                        echo "<p><a href='product_selection.php?c_id=".$row3['category_id']."' id='com_btn'>Edit</a><a href='delete_com.php?cat=".$myarray[$i]."' id='com_btn'>Delete</a></p>";
                        echo "</div>";
                        echo '</div>';
                        echo '</div>';
                        $total += $row2['price'];
                    }
                    $i = $i + 1;
                    }
                    else{
                        $i = $i + 1;
                    }
                    
                }
                ?>
                
            </div>

        <div class ="wrapperr">
            <div class ="cart-container">
                <h1 class="small-header">CUSTOM DEKSTOP</h1>
                <div class="cart">
                    <p>Price
                        <span class="right">RM <?php echo $total ?></span>
                </div>
                <hr>
                <a id="expandAllBtn">Expand All</a>
                <hr>
                <div class="button-container">
                <a href="build_reset.php"><button>Reset</button></a>
                <a href="customization-confirm.php"><button>Next</button></a>

                </div>
            </div>
        </div>
</div>


<!-- <?php
 //       session_start();
 //       $id=$_SESSION['id'];
        // if(isset($_POST["confirm"]))
        // {

        //     $id=5;
        //     mysqli_query($connect,"DELETE * FROM pc_build WHERE ID = $ID");
        //     foreach($_POST as $category => $SelectedOptions)
        //     {
        //         if($category == "confirm") continue;
        //         if($SelectedOptions == 0) continue;
        //         mysqli_query($connect,"INSERT INTO pc_build(user_id,prod_id) VALUES ('$id','$SelectedOptions')");
        //     }

            
        // }
        

?> -->
</body>
<script>


    function confirmReset() {
        if (confirm('Do you want to reset all the components?')) {
            // Making an AJAX call to delete data
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'delete_data.php', true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    alert("Components have been reset successfully!");
                } else {
                    alert("Something went wrong...");
                }
            };
            xhr.send();
        }
    }
      
        var expandAllBtn = document.getElementById("expandAllBtn");
        var toggleBtns = document.querySelectorAll(".toggleBtn");
        var contents = document.querySelectorAll(".content");
        var All=false;

        toggleBtns.forEach(function(toggleBtn, index) {
            var expanded = false;

        toggleBtn.addEventListener("click", function() {
            if (!expanded) {
                        toggleBtn.style.borderBottom = "0px solid black";
                        contents[index].style.borderBottom = "1px solid black";
                        contents[index].style.height = '120px';
                        expanded = true;

                    } else {

                        contents[index].style.height = '0px'; // Set content height to 0

                        expanded = false;
                    }
                    });
        });

expandAllBtn.addEventListener("click", function() {
    if(All == false){
        toggleBtns.forEach(function(toggleBtn, index) {

        toggleBtn.style.borderBottom = "0px solid black"; 
        contents[index].style.borderBottom = "1px solid black";
        contents[index].style.height = '120px'; 
        All = true;
    });
    expandAllBtn.innerHTML = "Collapse All";
    }
    else{
        toggleBtns.forEach(function(toggleBtn, index) {

        contents[index].style.height = '0px'; // Set content height to 0
        All = false;
        });
        expandAllBtn.innerHTML = "Expand All";
    }
});

</script>
</html>