
<!-- ###AIO### -->
<!-- ###AIO### -->
<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="ready">
<head>
	

        
    <!-- BULMA -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/bulma.css" rel="stylesheet" type="text/css" />
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/bulma-extensions/bulma-checkradio.min.css" rel="stylesheet" type="text/css" />


    <!-- MAIN STYLESHEET -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/aio.css?ver=1712567543" rel="stylesheet" type="text/css" />

    <!-- CAROUSEL -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/carousel/slick.css" rel="stylesheet" type="text/css" />
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/carousel/slick-theme.css" rel="stylesheet" type="text/css" />
    
    <!-- FONT AWESOME -->
    <link defer rel="stylesheet" href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/fontawesome-5.6.3/css/all.min.css">
    
    <!-- MATERIAL DESIGN ICON -->
    <link defer rel="stylesheet" href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/materialdesignicons-3.3.92/materialdesignicons.min.css">

	<!-- STAATLICHES -->
	<link defer rel="stylesheet" href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/staatliches/staatliches.css">
    
    <!-- ANIMATION -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/stylesheet/animate.css" rel="stylesheet" type="text/css" />

     <!-- BULMA CALENDAR -->
    <link defer href="https://techzone.com.my/catalog/view/theme/aio/plugins/bulma-calendar/bulma-calendar.min.css" rel="stylesheet" type="text/css" />

    <!-- JQUERY -->
    <script src="catalog/view/theme/aio/js/jquery-3.3.1.min.js"></script>
	<script defer type="text/javascript" src="https://techzone.com.my/catalog/view/javascript/jquery/ui/external/jquery.cookie.js"></script>
	
	<!-- TOTAL STORAGE -->
	<script defer type="text/javascript" src="https://techzone.com.my/catalog/view/javascript/jquery/jquery.total-storage.min.js"></script>
	
	<!-- FANCYBOX -->
	<link defer rel="stylesheet" href="https://techzone.com.my/catalog/view/theme/aio/plugins/fancybox3/jquery.fancybox.min.css">
	<script async src="https://techzone.com.my/catalog/view/theme/aio/plugins/fancybox3/jquery.fancybox.min.js"></script>
	
	<!-- ELEVATEZOOM -->
	<script async src="https://techzone.com.my/catalog/view/theme/aio/plugins/elevatezoom-plus/jquery.easing.min.js"></script>
	<script async src="https://techzone.com.my/catalog/view/theme/aio/plugins/elevatezoom-plus/jquery.mousewheel.js"></script>
	<script async src="https://techzone.com.my/catalog/view/theme/aio/plugins/elevatezoom-plus/jquery.ez-plus.js"></script>
	
	<!-- LAZYLOAD -->
	<script src="https://techzone.com.my/catalog/view/theme/aio/plugins/jquery.lazy-master/jquery.lazy.min.js"></script>
	<script src="https://techzone.com.my/catalog/view/theme/aio/plugins/jquery.lazy-master/jquery.lazy.plugins.min.js?ver=1.0"></script>
	
    
        
    <!-- GOOGLE RECAPTCHA -->
    <script defer async src='https://www.google.com/recaptcha/api.js'></script>

	 
	
    <!-- CUSTOMIZE -->
    <link defer id="customize_css" href="https://techzone.com.my/catalog/view/multi_store/techzone/aio_customize_css.css?ver=1712567543" rel="stylesheet" type="text/css" />
	
		
		<style>
	.btn-wishlist , .btn-compare {
		display: none;
	}
	</style>
		
	
	<!-- TITLE -->
    <title>Search - keyboard</title>

			<script src="https://techzone.com.my/catalog/view/javascript/fbpixel-conversion-api.js"></script>
						
</head>

<body class="body-style wide  clamp-1">
<?php include"head.php" ?>
	
		
		
        <!-- END HEADER -->
<section id="product-search" class="section content container per-row-5">

	
	
	<div id="contents">
		
		<div id="main-content">
		
			<div class="holder">
				<div class="module-container ">
				
					<!-- ###AIO### -->
					
					<div class="toolbar-search">

						<div class="searchbar">
							<i class="icon-search"></i>
							<input type="text" name="search"  id="live_search" value="" autocomplete="off" placeholder="Search..."/>
						</div>
						<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
					<script type="text/javascript">
					$(document).ready(function()
					{
						$("#live_search").keyup(function()
						{
							var input = $(this).val();
							
							if(input != "")
							{
								$.ajax({

									url:"live_search.php",
									method:"POST",
									data:{input:input},

									success:function(data)
									{
										$(".product-listing .box-content").html(data).css("display", "");
									}
								});
							}
							else
							{
								$(".product-listing .box-content").css("display","none");
							}
						});
					});
					</script>
						
						<label class="lbl-sort-by">Category</label>
						<select name="category_id" id="category_select">
							
							<?php
							$query2 = "SELECT DISTINCT p.category_id, c.category
							FROM product p 
							INNER JOIN category c ON p.category_id = c.category_id
							WHERE p.product_status ='1' 
							ORDER BY p.product_id DESC";

								$statement_category = $connect->prepare($query2); // Use a different variable for statement object
								$execute_result_category = $statement_category->execute(); // Execute the statement
								if ($execute_result_category) {
									$result_category = $statement_category->get_result();
									foreach ($result_category as $row) {
										?>
										<div class="sort-by">
											<label>
												<option value="<?php echo $row['category_id']; ?>">
												<?php echo $row['category']; ?></option>
											</label>
										</div>

										<?php
									}
								} else {
									// Handle the case where execute() failed
									echo "Error executing query: " . $statement_category->error;
								}
							?>
						</select>
								<script>
									 $(document).ready(function () {
            filter_data();
            function filter_data() {
                $('.product-listing .box-content').html('<div id="loading"></div>'); 
                var action = 'live_search';
                
                var category = get_filter('category');
                $.ajax({
                    url: "live_search.php",
                    method: "POST",
                    data: {
                        action: action, category: category
                    },
                    success: function (data) {
                        $('.product-listing .box-content').html(data);
                    }
                })


            }

            function get_filter(class_name) {
                var filter = [];
                $('.' + class_name + ':checked').each(function () {
                    filter.push($(this).val());
                });
                return filter;
            }

            $('.common_selector').click(function () {
                filter_data();
            });
            
           
        });
									</script>
							
						
						
						<div class="title">Search result</div>
					</div>
					
					
						<!-- PRODUCTS -->
						
							<!-- PRODUCT FILTER -->
							<div class="product-filter">

								<!-- PRODUCT VIEWS -->
								<div class="display">
									<i class="grid-view" onclick="display('grid')"></i>
									<i class="list-view" onclick="display('list')"></i>
								</div>

								<div class="filter-options">
									<!-- PRODUCT SORTING -->
									<div class="product-sorting">
										<div>Sort by</div>
										<select onchange="location = this.value;">
																																<option value="https://techzone.com.my/index.php?route=product/search&amp;sort=p.sort_order&amp;order=ASC&amp;search=keyboard" selected="selected">Default</option>
																																											<option value="https://techzone.com.my/index.php?route=product/search&amp;sort=pd.name&amp;order=ASC&amp;search=keyboard">Name (A - Z)</option>
																																											<option value="https://techzone.com.my/index.php?route=product/search&amp;sort=pd.name&amp;order=DESC&amp;search=keyboard">Name (Z - A)</option>
																																											<option value="https://techzone.com.my/index.php?route=product/search&amp;sort=p.price&amp;order=ASC&amp;search=keyboard">Price (Low &gt; High)</option>
																																											<option value="https://techzone.com.my/index.php?route=product/search&amp;sort=p.price&amp;order=DESC&amp;search=keyboard">Price (High &gt; Low)</option>
																																											<option value="https://techzone.com.my/index.php?route=product/search&amp;sort=rating&amp;order=DESC&amp;search=keyboard">Rating (Highest)</option>
																																											<option value="https://techzone.com.my/index.php?route=product/search&amp;sort=rating&amp;order=ASC&amp;search=keyboard">Rating (Lowest)</option>
																																											<option value="https://techzone.com.my/index.php?route=product/search&amp;sort=p.model&amp;order=ASC&amp;search=keyboard">Model (A - Z)</option>
																																											<option value="https://techzone.com.my/index.php?route=product/search&amp;sort=p.model&amp;order=DESC&amp;search=keyboard">Model (Z - A)</option>
																																											<option value="https://techzone.com.my/index.php?route=product/search&amp;sort=p.date_added&amp;order=DESC&amp;search=keyboard">Newest &gt; Oldest</option>
																																											<option value="https://techzone.com.my/index.php?route=product/search&amp;sort=p.date_added&amp;order=ASC&amp;search=keyboard">Oldest &gt; Newest</option>
																															</select>
									</div>
									<!-- PRODUCT LIMITS -->
									<div class="product-limits">
										<div>Show result</div>
										<select onchange="location = this.value;">
																																<option value="https://techzone.com.my/index.php?route=product/search&amp;search=keyboard&amp;limit=15" selected="selected">1-15</option>
																																											<option value="https://techzone.com.my/index.php?route=product/search&amp;search=keyboard&amp;limit=25">1-25</option>
																																											<option value="https://techzone.com.my/index.php?route=product/search&amp;search=keyboard&amp;limit=50">1-50</option>
																																											<option value="https://techzone.com.my/index.php?route=product/search&amp;search=keyboard&amp;limit=75">1-75</option>
																																											<option value="https://techzone.com.my/index.php?route=product/search&amp;search=keyboard&amp;limit=100">1-100</option>
																															</select>
									</div>
								</div>
							</div>
							<!-- END PRODUCT FILTER -->
                           
							<!-- PRODUCT LISTING -->
							<div class="box module-product product-listing ">
								<div class="box-content">
							</div>
										</div>
							<!-- END PRODUCT LISTING -->

							<div class="pagination"><div class="footer_pagination_page links"> <b class="selected_pagination">1</b>  <a class="beh_pagination" href="...">2</a>  <a class="beh_pagination" href="https://techzone.com.my/index.php?route=product/search&amp;search=keyboard&amp;page=3">3</a>  <a class="beh_pagination" href="https://techzone.com.my/index.php?route=product/search&amp;search=keyboard&amp;page=4">4</a>  <a class="beh_pagination" href="https://techzone.com.my/index.php?route=product/search&amp;search=keyboard&amp;page=5">5</a>  <a class="beh_pagination" href="https://techzone.com.my/index.php?route=product/search&amp;search=keyboard&amp;page=6">6</a>  <a class="beh_pagination" href="https://techzone.com.my/index.php?route=product/search&amp;search=keyboard&amp;page=7">7</a>  <a class="beh_pagination" href="https://techzone.com.my/index.php?route=product/search&amp;search=keyboard&amp;page=8">8</a>  <a class="beh_pagination" href="https://techzone.com.my/index.php?route=product/search&amp;search=keyboard&amp;page=9">9</a>  <a class="beh_pagination" href="https://techzone.com.my/index.php?route=product/search&amp;search=keyboard&amp;page=2">&gt;</a> <a class="beh_pagination" href="https://techzone.com.my/index.php?route=product/search&amp;search=keyboard&amp;page=9">&gt;|</a> </div><div class="footer_pagination_entry results">Showing 1 to 15 of 126 </div></div>

												<!-- END PRODUCTS -->
					
					<!-- ###AIO### -->
					
				</div>
			</div>
		</div>
		
			</div>
</section>

		
			
    </body>
</html>



