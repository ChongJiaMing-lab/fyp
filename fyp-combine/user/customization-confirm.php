<?php include "data_connection.php";
include "head.php";
$id = $_SESSION['ID'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customization</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- CUSTOMIZE -->
	<link defer id="customize_css"
		href="https://www.techzone.com.my/catalog/view/multi_store/techzone/aio_customize_css.css?ver=1710861150"
		rel="stylesheet" type="text/css" />

    <style>
        body {
            margin: 0;
        }

        .header {
            text-align: center;
            padding: 15px 15px;
            margin: 0px;
            background-color: #3b426e;
            color: white;
            font-size: 1em;
        }

        .header a {
            color: white;
            text-decoration: none;
        }

        .header a:hover {
            color: #20c997;
            text-decoration: underline;
        }

        table {
            width: 70%;
            margin-top: 2%;
            margin-left: auto;
            margin-right: auto;
            padding: 10px 10px;
            font-size: 17px;
            border-collapse: collapse;
            border: 2px solid black;
        }

        table th {
            color: white;
        }

        table th,
        table td {
            text-align: center;
            vertical-align: middle;
        }


        .thead {
            height: 40px;
            background-color: black;
            color: white;
        }

        .tbody {
            height: 40px;
            border-bottom: 2px solid black;
        }

        td {
            font-weight: bold;
        }

        button {
            width: 100px;
            height: 40px;
            margin-top: 1%;
            margin-left: 10px;
            margin-bottom: 20px;
        }


        #center {
            text-align: center;
        }

        a {
            text-decoration: none;
        }

        .tbody img {
            width: 100px;
            height: 100px;
        }

        .checkout-container {
            display: flex;
            justify-content: space-between;
            border: 1px black solid;
            width: 70%;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 5px;
            padding: 10px 10px 10px 10px;
        }

        .vouncher-container {
            width: 100%;
            height: fit-content;
            font-weight: bold;
        }

        button {
            margin-bottom: 5px !important;
        }

        .vouncher-container button {
            height: 10%;
        }

        .price-container {
            width: 100%;
            height: fit-content;
            margin-right:30%;
        }

        .price-container #pricee {
            margin-left: auto;
            font-weight: bold;
        }
        #pricee{
            display:inline-flex;
            width: 12%;
        }

        .button-container {
            display: flex;
            height: 100%;
            margin-left: auto;
            align-items: center;
        }
        .right td{
            justify-content: space-between;
            text-align: right;
            margin: 10px 0 10px 0;
        }
        /* .right tr{
            border-bottom:0.5px solid gray;
        } */
        #vouncher-code{
            display: inline-flex;
            width: 20%;
            height: 90%;
            border:1px gray solid;
        }
        .flex-container {
            display: block;
            padding: 0;
        }

        .flex-item {
            display: flex;
            align-items: center; 
        }

        #r_v{
            margin-left : 10px;
        }

        .flex-item input[type="radio"] {
            margin-right: 10px;
        }
        .row {
		overflow: hidden;
		margin-top: 20px;
	}
        .card {
		display: table-row;
		width: 90%;
		background-color: #fff;
		color: #989898;
		margin-bottom: 10px;
		font-family: 'Oswald', sans-serif;
		text-transform: uppercase;
		border-radius: 4px;
		position: relative
	}

	.card+.card {
		margin-left: 2%
	}

	.date {
		display: table-cell;
		width: 25%;
		position: relative;
		text-align: center;
		border-right: 2px dashed #dadde6
	}

	.date:after {
		top: auto;
		bottom: -15px
	}

	.date time {
		display: block;
		position: absolute;
		top: 50%;
		left: 50%;
		-webkit-transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%)
	}

	.date time span {
		display: block
	}

	.date time span:first-child {
		color: #2b2b2b;
		font-weight: 600;
		font-size: 250%
	}

	.date time span:last-child {
		text-transform: uppercase;
		font-weight: 600;
		margin-top: -10px
	}

	.card-cont {
		display: table-cell;
		width: 75%;
		font-size: 85%;
		padding: 10px 10px 30px 50px
	}

	.card-cont h3 {
		color: #3C3C3C;
		font-size: 130%
	}

	.card-cont>div {
		display: table-row
	}

	.card-cont .even-date i,
	.card-cont .even-info i,
	.card-cont .even-date time,
	.card-cont .even-info p {
		display: table-cell
	}

	.card-cont .even-date i,
	.card-cont .even-info i {
		padding: 5% 5% 0 0
	}

	.card-cont .even-info p {
		padding: 30px 50px 0 0
	}

	.card-cont .even-date time span {
		display: block
	}

	.date:before,
	.date:after {
		content: "";
		display: block;
		width: 30px;
		height: 30px;
		background-color: #DADDE6;
		position: absolute;
		top: -15px;
		right: -15px;
		z-index: 1;
		border-radius: 50%
	}

	.card-cont a {
		display: block;
		text-decoration: none;
		width: 80px;
		height: 30px;
		background-color: blue;
		color: #fff;
		text-align: center;
		line-height: 30px;
		border-radius: 2px;
		position: absolute;
		right: 10px;
		bottom: 10px
	}

	@media screen and (max-width: 860px) {
		.card {
			display: block;
			float: none;
			width: 100%;
			margin-bottom: 10px
		}

		.card+.card {
			margin-left: 0
		}

		.card-cont .even-date,
		.card-cont .even-info {
			font-size: 75%
		}
	}
    
    </style>
</head>

<body>
    <?php

    $result = mysqli_query($connect, "SELECT * FROM pc_build WHERE user_id = $id AND pay_status!='payed'");
    $row = mysqli_fetch_assoc($result);
    $chassis = isset($row['chassis']) ? $row['chassis'] : null;
    $motherboard = isset($row['motherboard']) ? $row['motherboard'] : null;
    $processor = isset($row['processor']) ? $row['processor'] : null;
    $graphic_card = isset($row['graphic_card']) ? $row['graphic_card'] : null;
    $ram1 = isset($row['ram1']) ? $row['ram1'] : null;
    $ram2 = isset($row['ram2']) ? $row['ram2'] : null;
    $memory = isset($row['memory']) ? $row['memory'] : null;
    $cooler = isset($row['cooler']) ? $row['cooler'] : null;
    $power_supply = isset($row['power_supply']) ? $row['power_supply'] : null;
    ?>
    <div class="header">
        <h1>Computer Builder</h2>
            <a href="index.php">Home</a> > <a href="customization.php">Customization</a> > <a href="customization-confirm.php">Confirm</a>
    </div>

    <table>

        <tr class="thead">
            <th width="12%">Component</th>
            <th width="9%">Product</th>
            <th width="50%">Title</th>
            <th width="8%">Price(RM)</th>
            <th width="18%">Product Link</th>
        </tr>

        <?php
        $i = 0;
        $count = 0;
        $not_s = array();
        $total = 0;
        while ($i < mysqli_num_fields($result)) {
            $fld = mysqli_fetch_field($result);
            $myarray[] = $fld->name;

            if ($i > 2) {
                echo '<tr class="tbody">';
                if (!isset(${$myarray[$i]})) {
                    echo '<td>' . ucwords($myarray[$i]) . '</td>';
                    echo '<td colspan=5 >Product not being selected!</td>';
                    echo '</div>';
                    if ($myarray[$i] == 'ram2' && isset(${$myarray[$i - 1]})) {
                    } else {
                        $not_s[$count] = $myarray[$i];
                        $count++;
                    }
                } else {
                    $query2 = mysqli_query($connect, "SELECT * FROM product WHERE product_id = ${$myarray[$i]}");
                    $row2 = mysqli_fetch_assoc($query2);
                    echo '<td>' . str_replace('_', ' ', ucfirst($myarray[$i])) . '</td>';
                    echo '<td><img src="../image/' . $row2["image"] . '"</td>';
                    echo '<td>' . $row2["product_name"] . '</td>';
                    echo '<td id="center">' . $row2["price"] . '</td>';
                    echo '<td id="center"><a href="product_detail.php?product_id=' . $row2['product_id'] . '&build=2">Click Me!</a></td>';
                    echo '</div>';

                    if ($myarray[$i] == 'ram2' && !isset(${$myarray[$i - 1]})) {
                        unset($not_s[--$count]);
                    }

                    $total += $row2['price'];
                }
                $i = $i + 1;
            } else {
                $i = $i + 1;
            }
        }
        ?>

    </table>
    <br></br>
    <table class="right">
        <tr>
            <td>Vouncher/Discount : <input id="vouncher-code" name='voucher_code' readonly></input>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Select
                    </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">

                                <?php
                                    $r1 = mysqli_query($connect,"SELECT * FROM voucher WHERE user_id = $id AND v_status = 0");
                                    while($rw1= mysqli_fetch_assoc($r1))
                                    {?>
                                    <li class="flex-item">
                                        <article class="card fl-left">
                                            <section class="date">
                                                <time>
                                                    <?php $rate = $rw1["v_rate"] * 100; ?>
                                                    <span><?php echo $rate?></span><span>%</span>
                                                </time>
                                            </section>
                                            <section class="card-cont">
                                                <small>SKT PC</small>
                                                <h3></h3>
                                                <div class="even-date">
                                                    <i class="fa fa-calendar"></i>
                                                    <time>
                                                        <span>&nbspGet a <?php echo $rate?>% with purchasing our product!</span>
                                                        <span>&nbsp<?php echo $rw1['v_code']?></span>    
                                                    </time>
                                                </div>
                                            </section>
                                        </article>
                                        <input type="radio" name="voucher_option" id="r_v" data-v_code = "<?php echo $rw1['v_code']?>" data-rate = "<?php echo $rw1['v_rate']?>">
                                        </li>
                                        <?php
                                        
                                }
                                ?>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" style="width:100%;" id="saveChangesButton">Select Vouncher</button>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                                        $(document).ready(function () {
                                            $('#saveChangesButton').click(function () {

                                                var selected = $('input[name="voucher_option"]:checked');
                                                var code = selected.data('v_code');
                                                var rate = selected.data('rate');
                                                var total = parseFloat(<?php echo $total ?>);
                                                $('input[name="voucher_code"]').val(code);
                                                $('span[name="dis"]').text((total*rate).toFixed(2));
                                                $('span[name="total"]').text((total-total*rate).toFixed(2));
                                                $('#exampleModal').modal('hide');
                                                
                                                var btn = document.getElementById("confirm");
                                                var not_s = <?php echo count($not_s); ?>;
                                                btn.addEventListener("click", function() {
                                                    if (not_s > 0) {
                                                        alert('The Required Component below is not being selected!<?php for ($x = 0; $x < $count; $x++) {echo "\\n" . $not_s[$x];} ?>');} 
                                                        else {
                                                        window.location.href = "payment-build.php?vid="+code;
                                                    }
                                                });
                                            });
                                        });
                                        
                                    </script>
            </td>
        </tr>
        <tr>
            <td>
                Price: <span id=pricee>RM <?php echo number_format($total,2,'.', ''); ?></span>
            </td>
        </tr>
        <tr>
            <td>
                Discount: <span id=pricee>RM&nbsp;<span name=dis>0.00</span></span>
            </td>
        </tr>
        <tr>
            <td>
                Total: <span id=pricee>RM &nbsp;<span name=total><?php echo number_format($total,2,'.', ''); ?></span>
            </td>
        </tr>
        <tr>
            <td><button id="confirm" style="height: fit-content;">Pay now</button></td>
        </tr>
        </tr>
    </table>
</body>

<script>
    var btn = document.getElementById("confirm");
    var not_s = <?php echo count($not_s); ?>;
    btn.addEventListener("click", function() {
        if (not_s > 0) {
            alert('The Required Component below is not being selected!<?php for ($x = 0; $x < $count; $x++) {echo "\\n" . $not_s[$x];} ?>');} 
            else {
            window.location.href = "payment-build.php";
        }
    });
</script>

</html>