<?php include "head.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body{
        height: 100% !important;
        background-image: url("image/bg-banner.png") !important;
        background-repeat: no-repeat;
        background-size: cover;
    }
   .main-content{
        padding:5% 0 0 5%;
    }
    h2{
        font-size: 44px;
        font-weight: 700;
        color:white;
    }
    h2 span{
        color:#18ae91;
    }

    p{
        color: #fff;
        font-size: 18px;
        padding-bottom: 20px;
        margin-top:20px;
    }
    .btn-container{
        margin-top:20px !important;
    }
    .btn{
        text-decoration:none;
        color:white !important;
        border:2px solid;
        border-radius: 3px;
        
    }
    .btn-create{
        color: #fff;
        background: #18ae90;
        padding: 7px 30px;
        border-color: #18ae90;
        font-weight: 700;
        font-size: 18px;
    }
    .btn-create:hover{
        box-shadow:0 0 6px rgba(35, 173, 278, 1)
    }
    .btn-pre{
        color: #fff;
        background: #18ae90;
        padding: 7px 30px;
        border-color: #18ae90;
        font-weight: 700;
        font-size: 20px;
        background: 0 0;
        margin-left: 25px;
    }
    

</style>

<body >
    <div class="main-content">
    <h2>Experience the New Perspective of
        <br><span>Building Your Dream PC</span></br>
    </h2>
    <p>
        Building your own PC is a rewarding experience. With our new approach,
        <br>we'll help you to be sure that the compatibility of your selected PC parts is just right.
    </p>
    <div class="btn-container">
        <a href="customization.php" class="btn btn-create">Create Now</a>
        <a href="Pre-pc.php" class="btn btn-pre">Buy Pre-build PC</a>
    </div>
</div>
</body>
</html>