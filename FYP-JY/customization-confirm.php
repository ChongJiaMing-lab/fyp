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
            height:30px;
            margin-top:1%;
            margin-left:10px;
        }
        .button-container{
            margin-left:70%;
        }
    </style>
</head>
<body>
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

        <tr class="tbody">
            <td>Processor</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
        </tr>
        <tr class="tbody">
            <td>Motherboard</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
        </tr>
        <tr class="tbody">
            <td>CPU Cooler</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
        </tr>
        <tr class="tbody">
            <td>Case</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
        </tr>
        <tr class="tbody">
            <td>Graphics Card</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
        </tr>
        <tr class="tbody">
            <td>RAM</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
        </tr>
        <tr class="tbody">
            <td>Storage</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
        </tr>
        <tr class="tbody">
            <td>Case Cooler</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
        </tr>
        <tr class="tbody">
            <td>Power Supply</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
        </tr>
        <tr class="tbody">
            <td>Monitor</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
        </tr>
        <tr class="tbody">
            <td>Accessories</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
        </tr>
        <tr class="tbody">
            <td>Softwares</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
            <td>dd</td>
        </tr>

        
    </table>
<br>
<div class="button-container">

<button class="edit">Edit</button>
<button class="confirm">Add To Cart</button>

</div>
</body>
</html>