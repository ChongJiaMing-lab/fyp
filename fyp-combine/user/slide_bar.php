<?php

include ("data_connection.php");

		if(isset($_GET['id']))
		{$id = $_GET['ID'];}
		$query = "SELECT * FROM user_information WHERE ID='$id'";
		$query2 = "SELECT * FROM user_address WHERE customer_id='$id'";
		$result = mysqli_query($connect, $query);
		$result2 = mysqli_query($connect, $query2);
		if ($result && $result2) {

			if ($row = mysqli_fetch_assoc($result)) {
				
?>

<div id="sidebar-left">
						<div class="sidebar-nav-list">
							<ul class="nav-container">
								<li class="item">
									<a class="txt-interactt is-active" href="myaccount.php?ID=<?php echo $id; ?>">My account</a>
									<ul class="item-container">
										<li class="sub">
											<a href="myprofile.php?ID=<?php echo $id; ?>">My profile</a>
										</li>
										<li class="sub">
											<a href="view_address.php?ID=<?php echo $id; ?>">My address</a>

										</li>
										<li class="sub">
											<a href="change_password.php?ID=<?PHP echo $id; ?>">Change password</a>
										</li>
									</ul>
									<!-- MY ORDERS -->
								<li class="item">
									<a href="orderlist.php?ID=<?php echo $id; ?>">My orders</a>
								</li>
								<!-- MY COUPON -->
								<li class="item"><a href="my_voucher.php">My voucher</a></li>
								<!-- MY REWARD POINT -->
								<li class="item"><a href="reward_point.php?ID=<?PHP echo $id; ?>">My reward point</a></li>
								
							</ul>
						</div>
					</div>

                    <?php
            }
        }
        ?>