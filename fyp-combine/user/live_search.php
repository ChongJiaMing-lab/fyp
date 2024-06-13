<?php

include("data_connection.php");
$output = '';
if(isset($_POST["input"])){

    $input = $_POST["input"];
	
	$query = "SELECT * FROM product WHERE product_status = '1' AND (brand_id LIKE  '%{$input}%' OR product_name LIKE  '%{$input}%')";
	if (isset($_POST["category"])) {
        $category_filter = implode("','", $_POST["category"]);
        $query .= " AND category_id IN ('" . $category_filter . "')";
    }

    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->get_result();

    $result = mysqli_query($connect,$query) ;

    if(mysqli_num_rows($result)> 0)
    {
		foreach($result as $row)
		{
			if($row['stock']>0)
            {
                $available = '<a href="product_detail.php?product_id='.$row ["product_id"].'">
                                <input type="button" name="add" value="View more detail" )" />
                                </a>   ';
            }
            else
            {
                $available = '  <a>
                                <input type="button" name="add" value="Out of stock" )" />
                                </a>   ';
            }
			$output .= '
		
        
											


								<div >
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
                                                        
                                                        
																																		</div>
											
											

											<div class="floating-cart-button" style="background-color:gray">
												
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
    }else
    {
        echo "<h6 class='text-danger' text-center mt-3>No Product Found</h6>";
    }
	echo $output;

}
?>

