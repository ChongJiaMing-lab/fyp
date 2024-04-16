<?php include "data_connection.php";
$c_id = $_GET["c_id"]; 
$query = mysqli_query($connect,"SELECT * FROM category WHERE category_id =$c_id");
$row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

        table{
            width:70%;
            margin-top:2%;
            margin-left:auto;
            margin-right:auto;
            padding:10px 10px;
            font-size:17px;
            border-collapse: collapse; 
            border: 2px solid black;
        }


        .thead{
            height:40px;
            background-color:black;
            color:white;
        }

        .tbody{
            height:40px;
            border-bottom:2px solid black;
        }

        td{
            font-weight:bold;
        }

        #search{
            text-align: right;
            border-bottom:1px white solid;
        }

        img{
            width:100px;
            height:100px;
        }

    </style>
</head>
<body>

    <div class="header">
    <h1>Computer Builder</h2>
    <a href="index.php">Home</a> > <a href="customization.php">Customization</a> > <a href='product_selection.php?c_id=1'>  <?php echo $row['category'] ?></a>
    </div>
    
    <table>
    <tr class="thead" id="search">
            <th colspan="5" width="100%">Search: <input type="text" class="search" placeholder="Search.." ><button type="submit"><i class="fa fa-search"></i></button></th>
        </tr>
        <tr class="thead">
            <th width="10%">Product</th>
            <th width="48%">Title</th>
            <th width="8%">Price</th>
            <th width="19%">Product Link</th>
            <th width="13%">Add Product</th>
        </tr>

        <?php 
    
    if(isset($_GET["c_id"]))
    {   
        $query2 = mysqli_query($connect,"SELECT * FROM product WHERE category_id = $c_id");
        while($row2 = mysqli_fetch_assoc($query2))
        {
            echo '<tr class="tbody">';
            echo '<td><img src="img/'.$row2["image"].'"></td>';
            echo '<td><span class="product_name">'.$row2["product_name"].'</span></td>';
            echo '<td>RM'.$row2["price"].'</td>';
            echo '<td><a href="">test</a></td>';
            echo '<td><a href="a_product.php?pid='.$row2["product_id"].'">Add Product</a></td>';
            echo '</tr>';
        }
        
    } 

    else{
        echo"Somethine went wrong...";
    }
    
    ?>



    </table>
<br>
<div class="button-container">


</div>
</body>
</html>