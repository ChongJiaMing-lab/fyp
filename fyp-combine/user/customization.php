<?php
include "databaseconnect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customization</title>

    <style>
        body{
            margin:0px;
        }
        .header{
            text-align:center;
            padding:15px 15px;
            margin:0px;
            background-color:#3b426e;
            color:white;
            font-size:1em;
        }
        .header a{
            color:white;
            text-decoration:none;
        }
        .header a:hover{
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

        .wrapper{
            position: sticky;
            top: 0;
            z-index: 1;
            
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

    </style>
</head>
<body>
    <div class="header">
    <h1>Computer Builder</h2>
    <a href="index.php">Home</a> > <a href="customization.php">Customization</a>
    </div>

<form method='post' name="Build">

<?php 
        $id = 0;
        $query = mysqli_query($connect,"SELECT * FROM pc_build WHERE user_id = $id AND pay_status != 'pay'");
        $row = mysqli_fetch_array($query); 

        $monitor = $row['monitor']?? null;
        $chassis = $row['chassis']?? null;
        $motherboard = $row['motherboard']?? null;
        $processor= $row['processor']?? null;
        $gpu = $row['gpu']?? null;
        $ram1 = $row['ram1']?? null;
        $ram2 = $row['ram2']?? null;
        $memory = $row['memory']?? null;
        $cooler = $row['cooler']?? null;
        $power_supply = $row['power_supply']?? null;						
?>

<div class ="container">
    <div class ="product-container">
        <div class ="product">
            <div class="toggleBtn">Monitor</div>
            <div class="content">
                <?php 
                    if(isset($monitor))
                    {
                        echo    "<a href='product_selection.php?c_id=1'>
                                Add Component
                                </a>";
                    }
                    
                    else{
                        $query2 = mysqli_query($connect,"SELECT * FROM products WHERE product_id = $monitor");
                        $row2 = mysqli_fetch_assoc($query2);
                        echo "<div class='component'>";
                        echo "<img src=image/".$row2['product_img']."</img>".$row2['product_name'];
                        echo "<p><a href='build_edit.php?c_id=51' id='com_btn'>Edit</a><a href='build_delete.php?cat=monitor' id='com_btn'>Delete</a></p>";
                        echo "</div>";
                    }
                ?>
            </div>
            <div class ="product">
                <div class="toggleBtn">Chassis</div>
                <div class="content">
                <select name="Chassis" id="Chassis">
                <option value="" selected disabled></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                </select>
                </div>
            </div>
            <div class ="product">
                <div class="toggleBtn">MotherBoard</div>
                <div class="content">
                <select name="MotherBoard" id="MotherBoard">
                <option value="" selected disabled></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                </select>
                
                </div>
            </div>  
            <div class ="product">
                <div class="toggleBtn">Processor</div>
                <div class="content">
                <select name="Processor" id="Processor">
                <option value="" selected disabled></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                </select>
                <img src="img/edit-icon.png"/>
                </div>
            </div>
            <div class ="product">
                <div class="toggleBtn">Graphic Card</div>
                <div class="content">
                <select name="Graphic Card" id="Graphic Card">
                <option value="" selected disabled></option>
                
                </select>
                
                </div>
            </div>
            <div class ="product">
                <div class="toggleBtn">RAM</div>
                <div class="content">
                <select name="RAM" id="RAM">
                <option value="" selected disabled></option>
                
                </select>
                
                </div>
            </div>
            <div class ="product">
                <div class="toggleBtn">Memory</div>
                <div class="content">
                <select name="Memory" id="Memory">
                <option value="" selected disabled></option>
                
                </select>
                
                </div>
            </div>
            <div class ="product">
                <div class="toggleBtn">Cooler</div>
                <div class="content">
                <select name="Cooler" id="Cooler">
                <option value="" selected disabled></option>
                
                </select>
                
                </div>
            </div>
            <div class ="product">
                <div class="toggleBtn">Power Supply</div>
                <div class="content">
                <select name="Power_Supply" id="Power_Supply">
                <option value="" selected disabled></option>
                
                </select>
                
                </div>
            </div>
            <div class ="product">
                <div class="toggleBtn">peripherals</div>
                <div class="content">
                <select name="peripherals" id="peripherals">
                <option value="" selected disabled></option>
                
                </select>
                
                </div>
            </div>
        </div>
    </div>
        <div class ="wrapper">
            <div class ="cart-container">
                <h1 class="small-header">CUSTOM DEKSTOP</h1>
                <div class="cart">
                    <p>Price
                        <span class="right">tt</span>
                    <p>Cash Price
                        <span class="right">tt</span>
                </div>
                <hr>
                <a id="expandAllBtn">Expand All</a>
                <hr>
                <div class="button-container">
                <button onclick="confirmReset()">reset</a>
                <button type="submit" name="confirm">Next</button>

                </div>
            </div>
        </div>
</div>
</form>

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

    function confirmReset(){
        if(confirm('Do you want to reset all the component?'))
    {
        <?php
            $del = mysqli_query($connect,"DELETE FROM pc_build WHERE user_id = $id AND pay_status != 'payed'");
            
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'alert("Component has been reset successfully!");'; 
            } else {
                echo 'alert("Something went wrong...");';
            }
        ?>  
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