<?php

include ('data_connection.php');

$output = '';

if (isset($_POST["action"])) {
    $query = "SELECT * FROM products WHERE product_status ='1' ";

    if (isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"])) {
        $query .= " AND product_price BETWEEN '" . $_POST["minimum_price"] . "' AND '" . $_POST["maximum_price"] . "'";
    }
    if (isset($_POST["brand"])) {
        $brand_filter = implode("','", $_POST["brand"]);
        $query .= " AND brand_id IN ('" . $brand_filter . "')";
    }
    if (isset($_POST["category"])) {
        $category_filter = implode("','", $_POST["category"]);
        $query .= " AND category_id IN ('" . $category_filter . "')";
    }

    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->get_result();
    $total_row = $result->num_rows; // Use num_rows property
    if ($total_row > 0) {
        foreach ($result as $row) {
            $output .= '
            

            
															
									<div class="frame">
										<div class="item-img">
											<a href="https://techzone.com.my/memory_device/kingston-chinese-new-year-2023-cny-rabbit-year-64gb-flash-drive-dtcny23">
																										<div class="image">
														
														
																												
														<img class="first-img lazy" src="image/' . $row["product_img"] . '" class="img-responsive alt=""/>

														
													</div>
																							</a>
										</div>

										<div class="item-info">

											<div class="product-name">
                                            <p align="center"><strong><a href="#">' . $row['product_name'] . '</a></strong></p>
											</div>
									
											<div class="price">
																																																			<div class="price-new">RM99.00</div>
														<div class="price-old"></div> 
                                                        <h4 style="text-align: center;" class="text-danger">' . $row['product_price'] . '</h4>
                                                        <p>Desc: ' . $row['product_desc'] . ' <br/></p>
																																		</div>
											
											

											<div class="floating-cart-button">
												
																									<div class="button">
																													<span class="icon-add-cart"></span>
															<span class="btn-add-cart">
																<input type="button" value="Add to Cart" onclick="..." />
															</span>
																											</div>
																							</div>
										</div>
								
                                   
            </div>';
        }
    } else {
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
}

?>