<?php include "databaseconnect.php";
session_start();
//$id = $_SESSION['ID'];
$id =1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customization</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            margin:0;
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

        button{
            width:100px;
            height:40px;
            margin-top:1%;
            margin-left:10px;
            margin-bottom:20px;
        }
        .button-container{
            margin-left:70%;
        }

        #center{
            text-align:center;
        }

        a{
            text-decoration:none;
        }

        .tbody img{
            width:100px;
            height:100px;
        }
    </style>
</head>
<body>
    <?php 

    $result = mysqli_query($connect,"SELECT * FROM pc_build WHERE user_id = $id AND pay_status!='payed'");
    $row = mysqli_fetch_assoc($result);
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
    <div class="header">
    <h1>Computer Builder</h2>
    <a href="index.php">Home</a> > <a href="customization.php">Customization</a> > <a href="customization-confirm.php">Confirm</a>
    </div>

    <table>

        <tr class="thead">
            <th width="12%">Component</th>
            <th width="9%">Product</th>
            <th width="47%">Title</th>
            <th width="7%">Price</th>
            <th width="18%">Product Link</th>
            <th width="7%">Remove</th>
        </tr>

        <?php 
$i=0;
while($i < mysqli_num_fields($result))
{
    $fld = mysqli_fetch_field($result);
    $myarray[]=$fld->name;
    
    if($i>2)
    {
    echo '<tr class="tbody">';
    
    if (!isset(${$myarray[$i]}))
    {

        echo '<td>'.ucwords($myarray[$i]).'</td>';
        echo '<td colspan=5 >Product not being selected!</td>';
        echo '</div>';
    }
    
    else{
        $query2 = mysqli_query($connect,"SELECT * FROM products WHERE product_id = ${$myarray[$i]}");
        $row2 = mysqli_fetch_assoc($query2);
        echo '<td>'.ucwords($myarray[$i]).'</td>';
        echo '<td><img src="image/'.$row2["product_img"].'"</td>';
        echo '<td>'.$row2["product_name"].'</td>';
        echo '<td id="center">'.$row2["product_price"].'</td>';
        echo '<td id="center"><a href="product_details.php?id='.$row2['product_id'].'">Click Me!</a></td>';
        echo '<td id="center"><a href=""><i class="fa fa-trash-o" style="font-size:24px; color:red"></i></a></td>';
        echo '</div>';
    }
    $i = $i + 1;
    }
    else{
        $i = $i + 1;
    }
    
}
?>

        
    </table>
<br>
<div class="button-container">

<a href="customization.php"><button class="back">back</button></a>
<button class="confirm">Pay now</button>

</div>
</body>
</html>