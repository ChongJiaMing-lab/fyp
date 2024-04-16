<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre_build PC</title>

    <style>

        body{
            margin:0px;
        }
        .header{
            text-align:center;
            padding:15px 15px;
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
        .header hr{
            width:15%;
            border:0px;
            border-top:1px solid grey;
        }

        .container{
            width:60%;
            height: auto;
            display:grid;
            grid-template-columns:30% 30% 35%;
            text-align:center;
            justify-content: center;
            margin:30px auto;
            padding:1% 1%;
            border:1px grey solid;
            border-radius:0.5rem;
            grid-column-gap: 15px;
        }

        .container .btn{
            height:120%;
            font-size:20px;
            align-self: center;
            border:1px grey solid;
            border-radius:0.5rem;
            cursor:pointer;
        }

        .container .btn:hover:not(.active){
            color:blue;    
        }

        .container .active{
            background-color:#1d3f66;
            color:white;
        }

    </style>

</head>
<body>
    <div class="header">
    <h1>Pre-Build PC</h2>
    <p>If you don't want to get into the complexity of building a PC of your own and want a pre-built PC instead then here our some of the best picks of PC's for you.</p>
    <hr>
    <a href="index.php">Home</a> > <a href="pre_pc.php">Pre-Build</a>
    </div>

    <div class="container">
        <div class="btn active">
            Gaming Dekstop
        </div>
        <div class="btn">
            Cheap Dekstop
        </div>
        <div class="btn">
            All In One Dekstop
        </div>
    </div>
</body>
</html>

<script>

        var togglebtn = document.querySelectorAll(".btn");

        togglebtn.forEach(function(btn, index) {
            btn.addEventListener("click",function(){
                togglebtn.forEach(function(togglebtn) {
                togglebtn.classList.remove("active");
            });
            btn.classList.add("active");
            })
        })

</script>