<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customization</title>

    <style>
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
            transition: height 0.5s ease-in-out;
        }

        .extended-border {
            border-bottom: 1px solid black;
        }
        .button-container {
            /* display: flex;
            justify-content: flex-end; Align items to the right */
            margin-top: 20px; /* Add some spacing between products and buttons */
            
        }

        .button-container button{
            width:100px;
            height:20px;
            margin-top:1%;

        }

    </style>
</head>
<body>
    <div class="header">
    <h1>Computer Builder</h2>
    <a href="index.php">Home</a> > <a href="customization.php">Customization</a>
    </div>

<form method='post'>
<div class ="container">
    <div class ="product-container">
        <div class ="product">
            <div class="toggleBtn">Monitor</div>
            <div class="content">
                <select name="Monitor" id="Monitor">
                <option value="" selected disabled></option>
                
                    <?php 
                    // $result = mysqli_query("SELECT * FROM fyp WHERE category = "Monitor"");
                    // $row = mysqli_fetch_array("$result");

                    // while($row)
                    // {
                    //     echo"<option value = ".$row("name").">".$row("name")."</option>";
                    // }
                    ?>
                </select>
            </div>
            <div class ="product">
                <div class="toggleBtn">Chassis</div>
                <div class="content">
                <select name="Monitor" id="Monitor">
                <option value="" selected disabled></option>
                
                </select>
                </div>
            </div>
            <div class ="product">
                <div class="toggleBtn">MotherBoard</div>
                <div class="content">
                <select name="Monitor" id="Monitor">
                <option value="" selected disabled></option>
                
                </select>
                
                </div>
            </div>  
            <div class ="product">
                <div class="toggleBtn">Processor</div>
                <div class="content">
                <select name="Monitor" id="Monitor">
                <option value="" selected disabled></option>
                
                </select>
                <img src="img/edit-icon.png"/>
                </div>
            </div>
            <div class ="product">
                <div class="toggleBtn">Graphic Card</div>
                <div class="content">
                <select name="Monitor" id="Monitor">
                <option value="" selected disabled></option>
                
                </select>
                
                </div>
            </div>
            <div class ="product">
                <div class="toggleBtn">RAM</div>
                <div class="content">
                <select name="Monitor" id="Monitor">
                <option value="" selected disabled></option>
                
                </select>
                
                </div>
            </div>
            <div class ="product">
                <div class="toggleBtn">Memory</div>
                <div class="content">
                <select name="Monitor" id="Monitor">
                <option value="" selected disabled></option>
                
                </select>
                
                </div>
            </div>
            <div class ="product">
                <div class="toggleBtn">Cooler</div>
                <div class="content">
                <select name="Monitor" id="Monitor">
                <option value="" selected disabled></option>
                
                </select>
                
                </div>
            </div>
            <div class ="product">
                <div class="toggleBtn">Power Supply</div>
                <div class="content">
                <select name="Monitor" id="Monitor">
                <option value="" selected disabled></option>
                
                </select>
                
                </div>
            </div>
            <div class ="product">
                <div class="toggleBtn">Extra accessories</div>
                <div class="content">
                <select name="Monitor" id="Monitor">
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
                <button type="reset" class="reset">Reset</button>
                <button type="submit" class="confirm">Next</button>

                </div>
            </div>
        </div>
</div>
</body>
<script>
        
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
                        contents[index].style.height = '100px';
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
        contents[index].style.height = '100px'; 
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
</form>
</html>