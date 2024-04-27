<?php

include ('data_connection.php');
session_start();
$output = '';

if (isset($_POST["action"])) {
//     if(isset(category)id))
//     {
//         $id = ($_POST["id"]);
//         $query = "select * from product where category = '$id'";
//     }
    $query = "SELECT * FROM product WHERE product_status ='1' ";

    if (isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"])) {
        $query .= " AND price BETWEEN '" .$_POST["minimum_price"] . "' AND '" . $_POST["maximum_price"] . "'";
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
            if($row['stock']>0)
            {
                $available = '<a href="addtocart.php?product_id='.$row ["product_id"].'">
                                <input type="button" name="add" value="Add to Cart" )" />
                                </a>   ';
            }
            else
            {
                $available = '  <a>
                                <input type="button" name="add" value="Out of stock" )" />
                                </a>   ';
            }
            $output .= '
            
            
						
                                            <div>
									<div class="frame" >
                                    
                                                       
										<div class="item-img">
											<a href="product_detail.php?product_id='.$row ["product_id"].'">
																										<div class="image" style="min-width:200px ; min-height:200px">
														
														
																												
                                                                                                        <img class="first-img lazy" src="../image/' . $row["image"] . '" class="img-responsive alt="" style= " width:300px ; height:auto ;display: block;margin:auto;"/>

														
													</div>
																							</a>
										</div>

										<div class="item-info">

											<div class="product-name">
                                            <p align="center"><strong><a href="#">' . $row['product_name'] . '</a></strong></p>
											</div>
											 





											<div class="price">
																<div class="price-new">RM' . $row['price'] . '</div>
														<div class="price-old"></div> 
                                                        
                                                        <p>Desc: ' . $row['product_desc'] . ' <br/></p>
																																		</div>
											
											
                                            
											<div class="floating-cart-button" style="background-color:gray; " >
												
																									<div class="button">
																													<span class="icon-add-cart"></span>
															<span class="btn-add-cart">
                                                           '. $available.'
															</span>
																											</div>
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
