<?php include ("head.php") ?>
<!-- ###AIO### -->
<!-- ###AIO### -->
<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="ready">

<head>


</head>

<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Oswald');

	* {
		margin: 0;
		padding: 0;
		border: 0;
		box-sizing: border-box
	}

	body {
		background-color: #dadde6;
		background-image: url("image/bg-banner.png") !important;
		background-repeat: no-repeat;
		background-size: cover;
		font-family: arial
	}

	.fl-left {
		float: left
	}

	.fl-right {
		float: right
	}

	h1 {
		text-transform: uppercase;
		font-weight: 900;
		border-left: 10px solid #fec500;
		padding-left: 10px;
		margin-bottom: 30px;
		font-size: 30px;
		color: white;
	}

	.row {
		overflow: hidden;
		margin-top: 20px;
	}

	.card {
		display: table-row;
		width: 49%;
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

		.dropdown-item {
			color: #4a4a4a;
			display: block;
			font-size: 1.25rem !important;
			line-height: normal;
			padding: 0.375rem 1rem;
			position: relative;
		}

		

	}
</style>

<body class="body-style wide  clamp-1">
	<?php
	if (isset($_GET["ID"])) {
		$id = $_GET["ID"];

		$your_point = "SELECT * FROM point WHERE user_id = '$id'";
		$your_point_run = mysqli_query($connect, $your_point);
		$row_point = mysqli_fetch_assoc($your_point_run);
	}
	?>
	<section class="container">
		<h1>Voucher</h1>
		<h2 style="font-size: 25px; color:white;"><?php echo "Your current point " . $row_point["point"]; ?></h2>
		<?php
		$s = "SELECT * FROM admin_voucher";
		$s_run = mysqli_query($connect, $s);

			 while($row = mysqli_fetch_assoc($s_run))
			 {
		?>
		<div class="row">
			<article class="card fl-left">
				<section class="date">
					<time>
						<?php $rate = $row["voucher_rate"] * 100; 
						$cost = $row['point_cost']?>
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
							<br><span>&nbspRequired <?php echo $cost?>&nbspPoint to claim</span>
						</time>
					</div>
					<a href="redeem.php?id=<?php echo $row['voucher_id'] ?>">Claim</a>
				</section>
			</article>
		</div>
		<?php }?>
</body>

</html>