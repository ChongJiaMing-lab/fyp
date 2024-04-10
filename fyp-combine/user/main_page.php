
<!-- ###AIO### -->
<!-- ###AIO### -->
<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="">
<head>

    <!-- BULMA -->
    <link defer href="https://www.techzone.com.my/catalog/view/theme/aio/stylesheet/bulma.css" rel="stylesheet" type="text/css" />
    <link defer href="https://www.techzone.com.my/catalog/view/theme/aio/plugins/bulma-extensions/bulma-checkradio.min.css" rel="stylesheet" type="text/css" />


    <!-- MAIN STYLESHEET -->
    <link defer href="https://www.techzone.com.my/catalog/view/theme/aio/stylesheet/aio.css?ver=1712538365" rel="stylesheet" type="text/css" />

    <!-- CAROUSEL -->
    <link defer href="https://www.techzone.com.my/catalog/view/theme/aio/plugins/carousel/slick.css" rel="stylesheet" type="text/css" />
    <link defer href="https://www.techzone.com.my/catalog/view/theme/aio/plugins/carousel/slick-theme.css" rel="stylesheet" type="text/css" />
    
    <!-- FONT AWESOME -->
    <link defer rel="stylesheet" href="https://www.techzone.com.my/catalog/view/theme/aio/stylesheet/fontawesome-5.6.3/css/all.min.css">
    
    <!-- MATERIAL DESIGN ICON -->
    <link defer rel="stylesheet" href="https://www.techzone.com.my/catalog/view/theme/aio/stylesheet/materialdesignicons-3.3.92/materialdesignicons.min.css">

	<!-- STAATLICHES -->
	<link defer rel="stylesheet" href="https://www.techzone.com.my/catalog/view/theme/aio/stylesheet/staatliches/staatliches.css">
    
    <!-- ANIMATION -->
    <link defer href="https://www.techzone.com.my/catalog/view/theme/aio/stylesheet/animate.css" rel="stylesheet" type="text/css" />

     <!-- BULMA CALENDAR -->
    <link defer href="https://www.techzone.com.my/catalog/view/theme/aio/plugins/bulma-calendar/bulma-calendar.min.css" rel="stylesheet" type="text/css" />

    <!-- JQUERY -->
    <script src="https://www.techzone.com.my/catalog/view/theme/aio/js/jquery-3.3.1.min.js"></script>
	<script defer type="text/javascript" src="https://www.techzone.com.my/catalog/view/javascript/jquery/ui/external/jquery.cookie.js"></script>
	
	<!-- TOTAL STORAGE -->
	<script defer type="text/javascript" src="https://www.techzone.com.my/catalog/view/javascript/jquery/jquery.total-storage.min.js"></script>
	
	<!-- FANCYBOX -->
	<link defer rel="stylesheet" href="https://www.techzone.com.my/catalog/view/theme/aio/plugins/fancybox3/jquery.fancybox.min.css">
	<script async src="https://www.techzone.com.my/catalog/view/theme/aio/plugins/fancybox3/jquery.fancybox.min.js"></script>
	
	<!-- ELEVATEZOOM -->
	<script async src="https://www.techzone.com.my/catalog/view/theme/aio/plugins/elevatezoom-plus/jquery.easing.min.js"></script>
	<script async src="https://www.techzone.com.my/catalog/view/theme/aio/plugins/elevatezoom-plus/jquery.mousewheel.js"></script>
	<script async src="https://www.techzone.com.my/catalog/view/theme/aio/plugins/elevatezoom-plus/jquery.ez-plus.js"></script>
	
	<!-- LAZYLOAD -->
	<script src="https://www.techzone.com.my/catalog/view/theme/aio/plugins/jquery.lazy-master/jquery.lazy.min.js"></script>
	<script src="https://www.techzone.com.my/catalog/view/theme/aio/plugins/jquery.lazy-master/jquery.lazy.plugins.min.js?ver=1.0"></script>
	
    
        
    <!-- GOOGLE RECAPTCHA -->
    <script defer async src='https://www.google.com/recaptcha/api.js'></script>

	 
	
    <!-- CUSTOMIZE -->
    <link defer id="customize_css" href="https://www.techzone.com.my/catalog/view/multi_store/techzone/aio_customize_css.css?ver=1712538365" rel="stylesheet" type="text/css" />
	
		
		<style>
	.btn-wishlist , .btn-compare {
		display: none;
	}
	</style>
		
	
	<!-- TITLE -->
    <title>Tech Zone Computer Sdn Bhd | Best Computer Shop In Malaysia</title>

			<script src="https://www.techzone.com.my/catalog/view/javascript/fbpixel-conversion-api.js"></script>
						
</head>

<body class="body-style wide  clamp-1">
<?php include"head.php"?>
		
        <!-- END HEADER -->
<section id="home" class="section content container per-row-4">
	<div id="contents" class="home">
				<div id="main-content">
			<div class="holder">
				
											<style>
								#header-slideshow .header-slideshow-0 .heading
								{
									color: rgba(255, 255, 255, 1);
								}
								#header-slideshow .header-slideshow-0 .text
								{
									color: rgba(255, 255, 255, 1);
								}
								#header-slideshow .header-slideshow-1 .heading
								{
									color: rgba(255, 255, 255, 1);
								}
								#header-slideshow .header-slideshow-1 .text
								{
									color: rgba(255, 255, 255, 1);
								}
								#header-slideshow .header-slideshow-2 .heading
								{
									color: rgba(255, 255, 255, 1);
								}
								#header-slideshow .header-slideshow-2 .text
								{
									color: rgba(255, 255, 255, 1);
								}
								.fadein
								{
									position:relative; height:600px;width:700px;margin:0 auto;
									background: 
									padding 10px;
									
								}
								.fadein img {
												position: absolute;
												width: 150%; /* Set width to 100% to fill the container */
												height: 150%; /* Set height to 100% to fill the container */
												object-fit: contain; /* Maintain aspect ratio and fit within container */
											}
												</style>
										<script src="http://ajax.googleapic.com/ajax/libs/jquery/1/jquery.min.js"></script>
										<script>
											$(function(){
												$('.fadein img:gt(0)').hide();
												setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');},3000);
											});
											</script>
											<div class="fadein">
												<?php

												$dir = "./slider/";

												$scan_dir = scandir($dir);;
												foreach ($scan_dir as $img):
													if(in_array($img, array(".",".."))) continue;
													?>
													<img src="<?php echo $dir.$img?>" alt="<?php echo $img ?>">
													<?php endforeach; ?>
										</div>
								<!-- ###AIO### -->
<div class="module-container">
    <!-- ###AIO### -->
<style>
	#module-product-showcase-764 {
					background-color:;
						
	}

	.desktop #module-product-showcase-764 .title {
		font-size : 24px;
	}
	
	.desktop #module-product-showcase-764 .box-content {
		font-size : 14px;
	}

	#module-product-showcase-764 .title {
		text-align:left !important;
	}
	
	#module-product-showcase-764 .box-content {
		text-align:left !important;
	}
		
	.desktop #module-product-showcase-764 .box-content {
		padding-top: 10px;
		padding-bottom: 0px;
	}
		
			.desktop .home #module-product-showcase-764, .desktop .home #module-product-showcase-764 > div {
			max-width: 100%;
			margin:0 auto;
			padding-top: 0px !important;
			padding-bottom: 0px !important;
		}
	</style>
<div id="module-product-showcase-764" class="box module-product-showcase  style7">
	<div class="box-content">
									<div class="frame product-showcase-0">
					<style>
													#module-product-showcase-764 .product-showcase-0 .title {
								color : rgba(255, 255, 255, 1);
							}
																			#module-product-showcase-764 .product-showcase-0 .description {
								color : rgba(255, 255, 255, 1);
							}
																							</style>
					<div class="content-image">
						 
							<img class="lazy" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/web_image/4yLKpqIT1586170359-640x400.jpg" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg">	
											</div>
					<div class="content-info">
						<div class="title">
							PROFESSIONAL DESKTOP & LAPTOP						</div>

						<div class="description">
							for Work, Study & Play						</div>
						
						 
						<div class="button button-product-showcase-0">
							<a href=""  >View more</a>
						</div>
						 
					</div>
				</div>
							<div class="frame product-showcase-1">
					<style>
													#module-product-showcase-764 .product-showcase-1 .title {
								color : rgba(255, 255, 255, 1);
							}
																			#module-product-showcase-764 .product-showcase-1 .description {
								color : rgba(255, 255, 255, 1);
							}
																							</style>
					<div class="content-image">
						 
							<img class="lazy" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/web_image/BYkOkTVL1586023426-640x400.jpg" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg">	
											</div>
					<div class="content-info">
						<div class="title">
							GAMING ACCESSORIES						</div>

						<div class="description">
							Gaming Products						</div>
						
						 
						<div class="button button-product-showcase-1">
							<a href="https://www.techzone.com.my/gaming-accessories"  >View more</a>
						</div>
						 
					</div>
				</div>
							<div class="frame product-showcase-2">
					<style>
													#module-product-showcase-764 .product-showcase-2 .title {
								color : rgba(255, 255, 255, 1);
							}
																			#module-product-showcase-764 .product-showcase-2 .description {
								color : rgba(255, 255, 255, 1);
							}
																							</style>
					<div class="content-image">
						 
							<img class="lazy" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/web_image/ra9T2DU41586082510-640x400.jpg" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg">	
											</div>
					<div class="content-info">
						<div class="title">
							Configure A PC						</div>

						<div class="description">
							Build a Custom PC						</div>
						
						 
						<div class="button button-product-showcase-2">
							<a href="https://www.techzone.com.my/find-us"  >View more</a>
						</div>
						 
					</div>
				</div>
						</div>
</div>
</div>
<div class="module-container">
    <!-- ###AIO### -->
<style>
	#module-content-876 {
					background-color:;
						
	}

	.desktop #module-content-876 .box-content {
		padding-top: 40px;
		padding-bottom: 0px;
	}
		
	.desktop #module-content-876 .main-title {
		font-size : 24px;
	}

	.desktop #module-content-876 .box-content {
		font-size : 16px;
	}

			.desktop #module-content-876 .frame .content-info .title {
			font-size : 14px;
		}
		
		.desktop #module-content-876 .frame .content-info .description {
			font-size : 14px;
		}
		
	
	#module-content-876 .main-title {
		text-align:center;
	}
	
	#module-content-876 .box-content {
		text-align:center !important;
	}
	
	#module-content-876 .content-info .title, #module-content-876 .content-info .description {
		text-align:center;
	}
	
		
		
		
		
		
		
	</style>

<div id="module-content-876" class="box module-content style9">
	<div class="box-content">
		<div class="text-content">

			<div class="main main_1">
				<div class="title main-title">
					OUR EXCLUSIVE SERVICES				</div>

				<div class="description">
					Our mission is to guarantee you optimal quality at an advantages price!				</div>

				 
			</div>
					</div>
		<div class="media-content">
						
												<div class="frame">
						<div class="content-media">
							 
								<a	
																			  
											href="https://www.techzone.com.my/contact_us"
										 
																											>
								 
									<img class="lazy" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/web_image/aeWIvMlH1586015563-400x300.png" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg">	
																</a>
													</div>
						<div class="content-info">
							<div class="title">
															</div>
	
							<div class="description">
								        							</div>
						</div>
					</div>
									<div class="frame">
						<div class="content-media">
							 
								<a	
																			  
											href="https://www.techzone.com.my/find-us"
										 
																											>
								 
									<img class="lazy" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/web_image/P7QZbic01586510191-400x300.png" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg">	
																</a>
													</div>
						<div class="content-info">
							<div class="title">
															</div>
	
							<div class="description">
								       							</div>
						</div>
					</div>
									<div class="frame">
						<div class="content-media">
							 
								<a	
																			  
											href="https://www.techzone.com.my/contact_us"
										 
																											>
								 
									<img class="lazy" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/web_image/mrsMiRpi1586015704-400x300.png" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg">	
																</a>
													</div>
						<div class="content-info">
							<div class="title">
															</div>
	
							<div class="description">
								      							</div>
						</div>
					</div>
									<div class="frame">
						<div class="content-media">
							 
								<a	
																			  
											href="https://www.facebook.com/TechZoneComp/"
										 
																											>
								 
									<img class="lazy" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/web_image/Y0riZfzI1586015902-400x300.png" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg">	
																</a>
													</div>
						<div class="content-info">
							<div class="title">
															</div>
	
							<div class="description">
								      							</div>
						</div>
					</div>
									</div>
	</div>
</div>
<script>
$(document).ready(function() {
	checkSizeContent876();
	$(window).resize(checkSizeContent876);
});

function checkSizeContent876() {
	if($('.body-style').width() <= 480){
		$('#module-content-876').parent('.module-container').css('display','none');
	} else {
		$('#module-content-876').parent('.module-container').css('display','');
	}
}
</script>
</div>
<div class="module-container">
    <!-- ###AIO### -->
<style>
	#module-content-794 {
					background-color:;
						
	}

	.desktop #module-content-794 .box-content {
		padding-top: 0px;
		padding-bottom: 0px;
	}
		
	.desktop #module-content-794 .main-title {
		font-size : 24px;
	}

	.desktop #module-content-794 .box-content {
		font-size : 14px;
	}

			.desktop #module-content-794 .frame .content-info .title {
			font-size : 14px;
		}
		
		.desktop #module-content-794 .frame .content-info .description {
			font-size : 14px;
		}
		
	
	#module-content-794 .main-title {
		text-align:left;
	}
	
	#module-content-794 .box-content {
		text-align:left !important;
	}
	
	#module-content-794 .content-info .title, #module-content-794 .content-info .description {
		text-align:left;
	}
	
		
		
		
		
		
		
	</style>

<div id="module-content-794" class="box module-content style7">
	<div class="box-content">
		<div class="text-content">

			<div class="main main_1">
				<div class="title main-title">
									</div>

				<div class="description">
									</div>

				 
			</div>
					</div>
		<div class="media-content">
						
												<div class="frame">
						<div class="content-media">
							 
								<a	
																	>
								 
									<img class="lazy" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/web_image/QUNmdi491586017435-960x300.png" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg">	
																</a>
													</div>
						<div class="content-info">
							<div class="title">
															</div>
	
							<div class="description">
								   							</div>
						</div>
					</div>
									<div class="frame">
						<div class="content-media">
							 
								<a	
																	>
								 
									<img class="lazy" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/web_image/3ToMRskh1586018588-960x300.png" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg">	
																</a>
													</div>
						<div class="content-info">
							<div class="title">
															</div>
	
							<div class="description">
								   							</div>
						</div>
					</div>
									</div>
	</div>
</div>
<script>
$(document).ready(function() {
	checkSizeContent794();
	$(window).resize(checkSizeContent794);
});

function checkSizeContent794() {
	if($('.body-style').width() <= 480){
		$('#module-content-794').parent('.module-container').css('display','none');
	} else {
		$('#module-content-794').parent('.module-container').css('display','');
	}
}
</script>
</div>
<div class="module-container">
    <!-- ###AIO### -->
<style>
#module-latest {
			background-color:;
		}
#module-latest .frame{
	background-color:rgba(0, 0, 0, 0);
}
</style>
<div id="module-latest" class="box module-product ">

	<div class="title">
  		Latest<a class="fp-more latest-more txt-interact" href="index.php?route=product/special&sg_type_pg=latest">More</a>	</div>

			<div class="box-content">
			
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/acer-15-6-ips-fhd-type-c-portable-monitor-pm161q-pm161q-b-4ms-60hz-amd-freesync-type-c-mini-hdmi">
																<div class="image">
										
										
																				
										<img class="first-img lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/all_product_images/product-3008/nHiwYsUL1711643212-420x280.jpg" alt="ACER 15.6&quot; IPS FHD TYPE-C PORTABLE MONITOR - PM161Q / PM161Q B  (4MS / 60HZ / AMD FREESYNC / TYPE-C + MINI HDMI)" />

																			
								</div>
													</a>
					</div>

					<div class="item-info">

						<div class="product-name">
							<a href="https://www.techzone.com.my/acer-15-6-ips-fhd-type-c-portable-monitor-pm161q-pm161q-b-4ms-60hz-amd-freesync-type-c-mini-hdmi" title="ACER 15.6&quot; IPS FHD TYPE-C PORTABLE MONITOR - PM161Q / PM161Q B  (4MS / 60HZ / AMD FREESYNC / TYPE-C + MINI HDMI)">ACER 15.6&quot; IPS FHD TYPE-C PORTABLE MONITOR - PM161Q / PM161Q B  (4MS / 60HZ / AMD FREESYNC / TYPE-C + MINI HDMI)</a>
						</div>
					
																					<div class="price">
																		<div class="price-new">RM459.00</div>
									<div class="price-old"></div> 
								</div>
																		
													<div class="rating"> 
									
							</div>
						
						<div class="floating-cart-button">
							
															<div class="button">
																														<span class="btn-outstock">
												<span class="icon-outstock"></span>
												<input type="button" value="Sold Out" />
											</span>
																		</div>
													</div>
					</div>
				</div>
			</div>
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/fideco-ypz220c-usb-3-2-gen-1-type-c-to-sata-hdd-docking-station-for-2-5-3-5-sata-hdd-and-ssd">
																<div class="image">
										
										
																				
										<img class="first-img lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/all_product_images/product-3007/SUi0Th2Y1711105576-420x280.jpg" alt="FIDECO YPZ220C USB 3.2 Gen 1 (Type C) To SATA HDD Docking Station for 2.5&quot;/3.5&quot; SATA HDD And SSD" />

																			
								</div>
													</a>
					</div>

					<div class="item-info">

						<div class="product-name">
							<a href="https://www.techzone.com.my/fideco-ypz220c-usb-3-2-gen-1-type-c-to-sata-hdd-docking-station-for-2-5-3-5-sata-hdd-and-ssd" title="FIDECO YPZ220C USB 3.2 Gen 1 (Type C) To SATA HDD Docking Station for 2.5&quot;/3.5&quot; SATA HDD And SSD">FIDECO YPZ220C USB 3.2 Gen 1 (Type C) To SATA HDD Docking Station for 2.5&quot;/3.5&quot; SATA HDD And SSD</a>
						</div>
					
																					<div class="price">
																		<div class="price-new">RM130.00</div>
									<div class="price-old"></div> 
								</div>
																		
													<div class="rating"> 
									
							</div>
						
						<div class="floating-cart-button">
							
															<div class="button">
																			<span class="icon-add-cart"></span>
										<span class="btn-add-cart">
											<input type="button" value="Add to Cart" onclick="addToCart('3007');" />
										</span>
																	</div>
													</div>
					</div>
				</div>
			</div>
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/cooler-master-masterfan-mf120-halo2-argb-fan-2050-rpm-51-cfm-argb-gen-2-halo2-halo-2-case-fan-white-black">
																<div class="image">
										
										
																				
										<img class="first-img lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/all_product_images/product-3006/sc3z8G1A1706338425-420x280.png" alt="Cooler Master MasterFan MF120 Halo2 ARGB Fan (2050 RPM, 51 CFM, ARGB Gen 2) Halo2 Halo 2 Case Fan White / Black" />

																			
								</div>
													</a>
					</div>

					<div class="item-info">

						<div class="product-name">
							<a href="https://www.techzone.com.my/cooler-master-masterfan-mf120-halo2-argb-fan-2050-rpm-51-cfm-argb-gen-2-halo2-halo-2-case-fan-white-black" title="Cooler Master MasterFan MF120 Halo2 ARGB Fan (2050 RPM, 51 CFM, ARGB Gen 2) Halo2 Halo 2 Case Fan White / Black">Cooler Master MasterFan MF120 Halo2 ARGB Fan (2050 RPM, 51 CFM, ARGB Gen 2) Halo2 Halo 2 Case Fan White / Black</a>
						</div>
					
																					<div class="price">
																		<div class="price-new">RM85.00</div>
									<div class="price-old"></div> 
								</div>
																		
													<div class="rating"> 
									
							</div>
						
						<div class="floating-cart-button">
							
															<div class="button">
																			<span class="icon-add-cart"></span>
										<span class="btn-add-cart">
											<input type="button" value="Add to Cart" onclick="addToCart('3006');" />
										</span>
																	</div>
													</div>
					</div>
				</div>
			</div>
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/cooler-master-masterfan-mf120-halo-argb-fan-2050-rpm-51-cfm-argb-gen-2-halo2-halo-2-case-fan-white-black">
																<div class="image">
										
										
																				
										<img class="first-img lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/all_product_images/product-3005/8KNTKuJ91706337822-420x280.jpg" alt="Cooler Master MasterFan MF120 Halo2 ARGB Fan (2050 RPM, 51 CFM, ARGB Gen 2) Halo2 Halo 2 Case Fan White / Black" />

																			
								</div>
													</a>
					</div>

					<div class="item-info">

						<div class="product-name">
							<a href="https://www.techzone.com.my/cooler-master-masterfan-mf120-halo-argb-fan-2050-rpm-51-cfm-argb-gen-2-halo2-halo-2-case-fan-white-black" title="Cooler Master MasterFan MF120 Halo2 ARGB Fan (2050 RPM, 51 CFM, ARGB Gen 2) Halo2 Halo 2 Case Fan White / Black">Cooler Master MasterFan MF120 Halo2 ARGB Fan (2050 RPM, 51 CFM, ARGB Gen 2) Halo2 Halo 2 Case Fan White / Black</a>
						</div>
					
																					<div class="price">
																		<div class="price-new">RM89.00</div>
									<div class="price-old"></div> 
								</div>
																		
													<div class="rating"> 
									
							</div>
						
						<div class="floating-cart-button">
							
															<div class="button">
																			<span class="icon-add-cart"></span>
										<span class="btn-add-cart">
											<input type="button" value="Add to Cart" onclick="addToCart('3005');" />
										</span>
																	</div>
													</div>
					</div>
				</div>
			</div>
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/awei-t87-tws-bluetooth-earphone-wireless-earbud-0-06s-low-latency-mini-gaming-earphones">
																<div class="image">
										
										
																				
										<img class="first-img lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/all_product_images/product-3004/44FfMUuK1704730335-420x280.jpg" alt="Awei T87 TWS Bluetooth Earphone Wireless Earbud 0.06s Low Latency Mini Gaming Earphones" />

																			
								</div>
													</a>
					</div>

					<div class="item-info">

						<div class="product-name">
							<a href="https://www.techzone.com.my/awei-t87-tws-bluetooth-earphone-wireless-earbud-0-06s-low-latency-mini-gaming-earphones" title="Awei T87 TWS Bluetooth Earphone Wireless Earbud 0.06s Low Latency Mini Gaming Earphones">Awei T87 TWS Bluetooth Earphone Wireless Earbud 0.06s Low Latency Mini Gaming Earphones</a>
						</div>
					
																					<div class="price">
																		<div class="price-new">RM40.00</div>
									<div class="price-old"></div> 
								</div>
																		
													<div class="rating"> 
									
							</div>
						
						<div class="floating-cart-button">
							
															<div class="button">
																			<span class="icon-add-cart"></span>
										<span class="btn-add-cart">
											<input type="button" value="Add to Cart" onclick="addToCart('3004');" />
										</span>
																	</div>
													</div>
					</div>
				</div>
			</div>
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/razer-blackwidow-v3-roblox-edition-mechanical-gaming-keyboard-with-razer-chroma-rgb-rz03-03542800-r3m1">
																<div class="image">
										
										
																				
										<img class="first-img lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/all_product_images/product-3002/uxFjozK71704474085-420x280.jpg" alt="Razer BlackWidow V3 Roblox Edition - Mechanical Gaming Keyboard with Razer Chroma RGB (RZ03-03542800-R3M1)" />

																			
								</div>
													</a>
					</div>

					<div class="item-info">

						<div class="product-name">
							<a href="https://www.techzone.com.my/razer-blackwidow-v3-roblox-edition-mechanical-gaming-keyboard-with-razer-chroma-rgb-rz03-03542800-r3m1" title="Razer BlackWidow V3 Roblox Edition - Mechanical Gaming Keyboard with Razer Chroma RGB (RZ03-03542800-R3M1)">Razer BlackWidow V3 Roblox Edition - Mechanical Gaming Keyboard with Razer Chroma RGB (RZ03-03542800-R3M1)</a>
						</div>
					
																					<div class="price">
																		<div class="price-new">RM799.00</div>
									<div class="price-old"></div> 
								</div>
																		
													<div class="rating"> 
									
							</div>
						
						<div class="floating-cart-button">
							
															<div class="button">
																			<span class="icon-add-cart"></span>
										<span class="btn-add-cart">
											<input type="button" value="Add to Cart" onclick="addToCart('3002');" />
										</span>
																	</div>
													</div>
					</div>
				</div>
			</div>
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/razer-orochi-v2-roblox-edition-mobile-wireless-gaming-mouse-razer-roblox-edition">
																<div class="image">
										
										
																				
										<img class="first-img lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/all_product_images/product-3001/UiiatEQ51704466205-420x280.jpg" alt="Razer Orochi V2 Roblox Edition - Mobile Wireless Gaming Mouse (RAZER Roblox Edition) RZ01-03730600-R3M1" />

																			
								</div>
													</a>
					</div>

					<div class="item-info">

						<div class="product-name">
							<a href="https://www.techzone.com.my/razer-orochi-v2-roblox-edition-mobile-wireless-gaming-mouse-razer-roblox-edition" title="Razer Orochi V2 Roblox Edition - Mobile Wireless Gaming Mouse (RAZER Roblox Edition) RZ01-03730600-R3M1">Razer Orochi V2 Roblox Edition - Mobile Wireless Gaming Mouse (RAZER Roblox Edition) RZ01-03730600-R3M1</a>
						</div>
					
																					<div class="price">
																		<div class="price-new">RM339.00</div>
									<div class="price-old"></div> 
								</div>
																		
													<div class="rating"> 
									
							</div>
						
						<div class="floating-cart-button">
							
															<div class="button">
																			<span class="icon-add-cart"></span>
										<span class="btn-add-cart">
											<input type="button" value="Add to Cart" onclick="addToCart('3001');" />
										</span>
																	</div>
													</div>
					</div>
				</div>
			</div>
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/razer-gigantus-v2-pokemon-edition-size-xxl-940-mm-x-410-mm-gaming-mouse-pad">
																<div class="image">
										
										
																				
										<img class="first-img lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/all_product_images/product-3000/NhqPieI91704301571-420x280.jpg" alt="Razer Gigantus V2 – Pokemon Edition ( Size : XXL - 940 mm x 410 mm) Gaming Mouse Pad" />

																			
								</div>
													</a>
					</div>

					<div class="item-info">

						<div class="product-name">
							<a href="https://www.techzone.com.my/razer-gigantus-v2-pokemon-edition-size-xxl-940-mm-x-410-mm-gaming-mouse-pad" title="Razer Gigantus V2 – Pokemon Edition ( Size : XXL - 940 mm x 410 mm) Gaming Mouse Pad">Razer Gigantus V2 – Pokemon Edition ( Size : XXL - 940 mm x 410 mm) Gaming Mouse Pad</a>
						</div>
					
																					<div class="price">
																		<div class="price-new">RM219.00</div>
									<div class="price-old"></div> 
								</div>
																		
													<div class="rating"> 
									
							</div>
						
						<div class="floating-cart-button">
							
															<div class="button">
																			<span class="icon-add-cart"></span>
										<span class="btn-add-cart">
											<input type="button" value="Add to Cart" onclick="addToCart('3000');" />
										</span>
																	</div>
													</div>
					</div>
				</div>
			</div>
			</div>				
</div>
</div>
<div class="module-container">
    <!-- ###AIO### -->
<style>
	#module-large-content-551 {
							background-image:url('image/techzone/image/data/web_image/qp767em41574774563.jpg');
			background-repeat:no-repeat;
			background-position:center center;
				
	}

	.desktop #module-large-content-551 .title {
		font-size : 34px;
	}
		
	.desktop #module-large-content-551 .content-text {
		font-size : 16px;
	}
	
	.desktop #module-large-content-551 .box-content {
		padding-top: 100px;
		padding-bottom: 100px;
	}
		
			.desktop .home #module-large-content-551 , .desktop .home #module-large-content-551 > div  {
			max-width: 100%;
			margin:0 auto;
		}
				#module-large-content-551 .content-text {
			text-align:center !important;
		}

		#module-large-content-551 .title {
			text-align:center !important;
		} 
				
			#module-large-content-551 .title {
			color : rgba(255, 255, 255, 1);
		}
		
			#module-large-content-551 .content-text {
			color : rgba(218, 44, 42, 1);
		}
		
	</style>
<div id="module-large-content-551" class="box module-large-content  style1">
	
	<div class="box-content">
		<div class="content-text">
			<div class="title">
				SAVE UP TO 40% ALL OFFICE TOOLS IN STORE			</div>

			<div class="description">
				*until end of the month.			</div>
			
			 
		</div>
		
		<div class="content-image">
			 
				<img class="lazy" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/web_image/X6KIgrEO1586170742-1920x600.jpg" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg">	
					</div>
	</div>
</div>
<script>
$(document).ready(function() {
	checkSizeLargeContent551();
	$(window).resize(checkSizeLargeContent551);
});

function checkSizeLargeContent551() {
	if($('.body-style').width() <= 480){
		$('#module-large-content-551').parent('.module-container').css('display','none');
	} else {
		$('#module-large-content-551').parent('.module-container').css('display','');
	}
}
</script>
</div>
<div class="module-container">
    <!-- ###AIO### -->
<style>
#module-featured {
			background-color:;
		}
</style>
<div id="module-featured" class="box module-product ">

	<div class="title">
  		Featured<a class="fp-more featured-more txt-interact" href="index.php?route=product/special&sg_type_pg=featured">More</a>	</div>

			<div class="carousel">
			
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/cooler-master-masterliquid-lite-120-aio-cpu-liquid-cooler-mlw-d12m-a20pw-r1">
																<div class="image">
										
										
																				
										<img class="first-img lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/all_product_images/product-1171/7jHujTjo1572582770-420x280.jpg" alt="Cooler Master MasterLiquid Lite 120 AIO CPU Liquid Cooler (MLW-D12M-A20PW-R1)" />

																			
								</div>
													</a>
					</div>

					<div class="item-info">

						<div class="product-name">
							<a href="https://www.techzone.com.my/cooler-master-masterliquid-lite-120-aio-cpu-liquid-cooler-mlw-d12m-a20pw-r1" title="Cooler Master MasterLiquid Lite 120 AIO CPU Liquid Cooler (MLW-D12M-A20PW-R1)">Cooler Master MasterLiquid Lite 120 AIO CPU Liquid Cooler (MLW-D12M-A20PW-R1)</a>
						</div>
					
																					<div class="price">
																		<div class="price-new">RM179.00</div>
									<div class="price-old"></div> 
								</div>
																		
													<div class="rating"> 
									
							</div>
						
						<div class="floating-cart-button">
							
															<div class="button">
																														<span class="btn-outstock">
												<span class="icon-outstock"></span>
												<input type="button" value="Sold Out" />
											</span>
																		</div>
													</div>
					</div>
				</div>
			</div>
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/cooler-master-masteraccessory-mp860-rgb-dual-sided-gaming-mousepad">
																<div class="image">
										
										
																				
										<img class="first-img lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/all_product_images/product-1210/uliAIJbm1574488065-420x280.jpg" alt="Cooler Master Masteraccessory MP860 RGB Dual-sided Gaming Mousepad" />

																			
								</div>
													</a>
					</div>

					<div class="item-info">

						<div class="product-name">
							<a href="https://www.techzone.com.my/cooler-master-masteraccessory-mp860-rgb-dual-sided-gaming-mousepad" title="Cooler Master Masteraccessory MP860 RGB Dual-sided Gaming Mousepad">Cooler Master Masteraccessory MP860 RGB Dual-sided Gaming Mousepad</a>
						</div>
					
																					<div class="price">
																		<div class="price-new">RM275.00</div>
									<div class="price-old"></div> 
								</div>
																		
													<div class="rating"> 
									
							</div>
						
						<div class="floating-cart-button">
							
															<div class="button">
																			<span class="icon-add-cart"></span>
										<span class="btn-add-cart">
											<input type="button" value="Add to Cart" onclick="addToCart('1210');" />
										</span>
																	</div>
													</div>
					</div>
				</div>
			</div>
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/awei-t5-true-wireless-earbuds-with-charging-case">
																<div class="image">
										
										
																				
										<img class="first-img lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/all_product_images/product-1028/main_bg-420x280.jpg" alt="AWEI T5 True Wireless Earbuds With Charging Case" />

																			
								</div>
													</a>
					</div>

					<div class="item-info">

						<div class="product-name">
							<a href="https://www.techzone.com.my/awei-t5-true-wireless-earbuds-with-charging-case" title="AWEI T5 True Wireless Earbuds With Charging Case">AWEI T5 True Wireless Earbuds With Charging Case</a>
						</div>
					
																					<div class="price">
																		<div class="price-new">RM99.00</div>
									<div class="price-old"></div> 
								</div>
																		
													<div class="rating"> 
									
							</div>
						
						<div class="floating-cart-button">
							
															<div class="button">
																														<span class="btn-outstock">
												<span class="icon-outstock"></span>
												<input type="button" value="Sold Out" />
											</span>
																		</div>
													</div>
					</div>
				</div>
			</div>
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/razer-base-station-chroma">
																<div class="image">
										
										
																				
										<img class="first-img lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/all_product_images/product-908/main_bg-Recovered-420x280.jpg" alt="RAZER Base Station Chroma Headphone Stand" />

																			
								</div>
													</a>
					</div>

					<div class="item-info">

						<div class="product-name">
							<a href="https://www.techzone.com.my/razer-base-station-chroma" title="RAZER Base Station Chroma Headphone Stand">RAZER Base Station Chroma Headphone Stand</a>
						</div>
					
																					<div class="price">
																		<div class="price-new">RM309.00</div>
									<div class="price-old"></div> 
								</div>
																		
													<div class="rating"> 
									
							</div>
						
						<div class="floating-cart-button">
							
															<div class="button">
																														<span class="btn-outstock">
												<span class="icon-outstock"></span>
												<input type="button" value="Sold Out" />
											</span>
																		</div>
													</div>
					</div>
				</div>
			</div>
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/cooler-master-masteraccessory-universal-led-rgb-strip-with-4pin-connector-mca-u000r-cls000">
																<div class="image">
										
										
																				
										<img class="first-img lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/all_product_images/product-1174/ynIhWvNg1572592299-420x280.jpg" alt="Cooler Master MasterAccessory Universal LED RGB Strip with 4pin Connector (MCA-U000R-CLS000)" />

																			
								</div>
													</a>
					</div>

					<div class="item-info">

						<div class="product-name">
							<a href="https://www.techzone.com.my/cooler-master-masteraccessory-universal-led-rgb-strip-with-4pin-connector-mca-u000r-cls000" title="Cooler Master MasterAccessory Universal LED RGB Strip with 4pin Connector (MCA-U000R-CLS000)">Cooler Master MasterAccessory Universal LED RGB Strip with 4pin Connector (MCA-U000R-CLS000)</a>
						</div>
					
																					<div class="price">
																		<div class="price-new">RM59.00</div>
									<div class="price-old"></div> 
								</div>
																		
													<div class="rating"> 
									
							</div>
						
						<div class="floating-cart-button">
							
															<div class="button">
																			<span class="icon-add-cart"></span>
										<span class="btn-add-cart">
											<input type="button" value="Add to Cart" onclick="addToCart('1174');" />
										</span>
																	</div>
													</div>
					</div>
				</div>
			</div>
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/cooler-master-cm110-6000-dpi-optical-sensor-gaming-mouse">
																<div class="image">
										
										
																				
										<img class="first-img lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/all_product_images/product-1204/hZwsYLtV1574482325-420x280.jpg" alt="Cooler Master CM110 6000 DPI Optical Sensor Gaming Mouse" />

																			
								</div>
													</a>
					</div>

					<div class="item-info">

						<div class="product-name">
							<a href="https://www.techzone.com.my/cooler-master-cm110-6000-dpi-optical-sensor-gaming-mouse" title="Cooler Master CM110 6000 DPI Optical Sensor Gaming Mouse">Cooler Master CM110 6000 DPI Optical Sensor Gaming Mouse</a>
						</div>
					
																					<div class="price">
																		<div class="price-new">RM89.00</div>
									<div class="price-old"></div> 
								</div>
																		
													<div class="rating"> 
									
							</div>
						
						<div class="floating-cart-button">
							
															<div class="button">
																			<span class="icon-add-cart"></span>
										<span class="btn-add-cart">
											<input type="button" value="Add to Cart" onclick="addToCart('1204');" />
										</span>
																	</div>
													</div>
					</div>
				</div>
			</div>
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/cooler-master-mm531-palm-grip-pbt-matte-uv-coating-12000-dpi-rgb-gaming-mouse">
																<div class="image">
										
										
																				
										<img class="first-img lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/all_product_images/product-1205/CQuXH8Ch1574483635-420x280.jpg" alt="Cooler Master MM531 Palm Grip PBT Matte UV Coating 12000 DPI RGB Gaming Mouse" />

																			
								</div>
													</a>
					</div>

					<div class="item-info">

						<div class="product-name">
							<a href="https://www.techzone.com.my/cooler-master-mm531-palm-grip-pbt-matte-uv-coating-12000-dpi-rgb-gaming-mouse" title="Cooler Master MM531 Palm Grip PBT Matte UV Coating 12000 DPI RGB Gaming Mouse">Cooler Master MM531 Palm Grip PBT Matte UV Coating 12000 DPI RGB Gaming Mouse</a>
						</div>
					
																					<div class="price">
																		<div class="price-new">RM138.00</div>
									<div class="price-old"></div> 
								</div>
																		
													<div class="rating"> 
									
							</div>
						
						<div class="floating-cart-button">
							
															<div class="button">
																			<span class="icon-add-cart"></span>
										<span class="btn-add-cart">
											<input type="button" value="Add to Cart" onclick="addToCart('1205');" />
										</span>
																	</div>
													</div>
					</div>
				</div>
			</div>
			</div>				
</div>
</div>
<div class="module-container">
    <!-- ###AIO### -->
<style>
	#module-large-content-729 {
					background-color:rgba(221, 221, 221, 1);
						
	}

	.desktop #module-large-content-729 .title {
		font-size : 34px;
	}
		
	.desktop #module-large-content-729 .content-text {
		font-size : 16px;
	}
	
	.desktop #module-large-content-729 .box-content {
		padding-top: 0px;
		padding-bottom: 0px;
	}
		
			#module-large-content-729 .content-text {
			text-align:left !important;
		}

		#module-large-content-729 .title {
			text-align:left !important;
		}
		
			#module-large-content-729 .title {
			color : JOIN OUR NEWSLETTER NOW!;
		}
		
		
	</style>
<div id="module-large-content-729" class="box module-large-content padding style4">
	
	<div class="box-content">
		<div class="content-text">
			<div class="title">
				STILL STRUGGLING TO FIND THE RIGHT CUSTOM PC FOR YOU?			</div>

			<div class="description">
				Hand-crafted, customised and overclocked systems built to your requirements			</div>
			
			 
				<div class="button button-large-content">
					<a href="https://www.techzone.com.my/find-us"  >Contact Us</a>
				</div>
			 
		</div>
		
		<div class="content-image">
			 
				<img class="lazy" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/web_image/iisy5qzI1586183404-800x500.jpg" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg">	
					</div>
	</div>
</div>
<script>
$(document).ready(function() {
	checkSizeLargeContent729();
	$(window).resize(checkSizeLargeContent729);
});

function checkSizeLargeContent729() {
	if($('.body-style').width() <= 480){
		$('#module-large-content-729').parent('.module-container').css('display','none');
	} else {
		$('#module-large-content-729').parent('.module-container').css('display','');
	}
}
</script>
</div>
<div class="module-container">
    <!-- ###AIO### -->
<style>
#module-bestseller {
			background-color:;
		}
</style>
<div id="module-bestseller" class="box module-product ">

	<div class="title">
  		Bestsellers<a class="fp-more bstsllr-more txt-interact" href="index.php?route=product/special&sg_type_pg=bestseller">More</a>	</div>

			<div class="box-content">
			
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/cooler-master-high-performance-thermal-paste-htk-002-u1">
																<div class="image">
										
										
																				
										<img class="first-img lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/all_product_images/product-1206/qmpldSAs1574484288-420x280.jpg" alt="Cooler Master High Performance Thermal Paste (HTK-002-U1)" />

																			
								</div>
													</a>
					</div>

					<div class="item-info">

						<div class="product-name">
							<a href="https://www.techzone.com.my/cooler-master-high-performance-thermal-paste-htk-002-u1" title="Cooler Master High Performance Thermal Paste (HTK-002-U1)">Cooler Master High Performance Thermal Paste (HTK-002-U1)</a>
						</div>
					
																					<div class="price">
																		<div class="price-new">RM9.00</div>
									<div class="price-old"></div> 
								</div>
																		
													<div class="rating"> 
									
							</div>
						
						<div class="floating-cart-button">
							
															<div class="button">
																			<span class="icon-add-cart"></span>
										<span class="btn-add-cart">
											<input type="button" value="Add to Cart" onclick="addToCart('1206');" />
										</span>
																	</div>
													</div>
					</div>
				</div>
			</div>
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/awei-t35-tws-gaming-earphone-with-mic-wireless-stereo-gaming-earbuds-low-latency-dual-mode-aac-bluetooth-v5-0-earphones">
																<div class="image">
										
										
																				
										<img class="first-img lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/all_product_images/product-2419/B8JWxEXl1623910516-420x280.jpg" alt="Awei T35 TWS Gaming Earphone With Mic Wireless Stereo Gaming Earbuds Low Latency Dual Mode AAC Bluetooth v5.0 Earphones" />

																			
								</div>
													</a>
					</div>

					<div class="item-info">

						<div class="product-name">
							<a href="https://www.techzone.com.my/awei-t35-tws-gaming-earphone-with-mic-wireless-stereo-gaming-earbuds-low-latency-dual-mode-aac-bluetooth-v5-0-earphones" title="Awei T35 TWS Gaming Earphone With Mic Wireless Stereo Gaming Earbuds Low Latency Dual Mode AAC Bluetooth v5.0 Earphones">Awei T35 TWS Gaming Earphone With Mic Wireless Stereo Gaming Earbuds Low Latency Dual Mode AAC Bluetooth v5.0 Earphones</a>
						</div>
					
																					<div class="price">
																		<div class="price-new">RM99.00</div>
									<div class="price-old"></div> 
								</div>
																		
													<div class="rating"> 
									
							</div>
						
						<div class="floating-cart-button">
							
															<div class="button">
																			<span class="icon-add-cart"></span>
										<span class="btn-add-cart">
											<input type="button" value="Add to Cart" onclick="addToCart('2419');" />
										</span>
																	</div>
													</div>
					</div>
				</div>
			</div>
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/wearfit-w98-oled-bluetooth-fitness-tracker-with-voice-call-smart-watch">
																<div class="image">
										
										
																				
										<img class="first-img lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/all_product_images/product-1483/StDnk9o71590141447-420x280.jpg" alt="Wearfit W98 OLED Bluetooth Fitness Tracker with Voice Call Smart Watch" />

																			
								</div>
													</a>
					</div>

					<div class="item-info">

						<div class="product-name">
							<a href="https://www.techzone.com.my/wearfit-w98-oled-bluetooth-fitness-tracker-with-voice-call-smart-watch" title="Wearfit W98 OLED Bluetooth Fitness Tracker with Voice Call Smart Watch">Wearfit W98 OLED Bluetooth Fitness Tracker with Voice Call Smart Watch</a>
						</div>
					
																					<div class="price">
																		<div class="price-new">RM90.00</div>
									<div class="price-old"></div> 
								</div>
																		
													<div class="rating"> 
									
							</div>
						
						<div class="floating-cart-button">
							
															<div class="button">
																														<span class="btn-outstock">
												<span class="icon-outstock"></span>
												<input type="button" value="Sold Out" />
											</span>
																		</div>
													</div>
					</div>
				</div>
			</div>
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/index.php?route=product/product&amp;product_id=2139">
																<div class="image">
										
										
																				
										<img class="first-img lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/all_product_images/product-2139/4mE8MaYZ1606382941-420x280.jpg" alt="UGREEN Cat6 Ethernet Patch Cable Gigabit RJ45 Network Wire Lan Cable(round cable)" />

																			
								</div>
													</a>
					</div>

					<div class="item-info">

						<div class="product-name">
							<a href="https://www.techzone.com.my/index.php?route=product/product&amp;product_id=2139" title="UGREEN Cat6 Ethernet Patch Cable Gigabit RJ45 Network Wire Lan Cable(round cable)">UGREEN Cat6 Ethernet Patch Cable Gigabit RJ45 Network Wire Lan Cable(round cable)</a>
						</div>
					
																					<div class="price">
																		<div class="price-new">RM6.00</div>
									<div class="price-old"></div> 
								</div>
																		
													<div class="rating"> 
									
							</div>
						
						<div class="floating-cart-button">
							
															<div class="button">
																														<span class="btn-outstock">
												<span class="icon-outstock"></span>
												<input type="button" value="Sold Out" />
											</span>
																		</div>
													</div>
					</div>
				</div>
			</div>
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/hp-gk100f-wired-mechanical-led-backlight-full-sized-gaming-keyboard-blue-switch">
																<div class="image">
										
										
																				
										<img class="first-img lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/all_product_images/product-2517/j65sSZmX1632454534-420x280.jpg" alt="HP GK100F Wired Mechanical LED Backlight Full Sized Gaming Keyboard (BLUE SWITCH)" />

																			
								</div>
													</a>
					</div>

					<div class="item-info">

						<div class="product-name">
							<a href="https://www.techzone.com.my/hp-gk100f-wired-mechanical-led-backlight-full-sized-gaming-keyboard-blue-switch" title="HP GK100F Wired Mechanical LED Backlight Full Sized Gaming Keyboard (BLUE SWITCH)">HP GK100F Wired Mechanical LED Backlight Full Sized Gaming Keyboard (BLUE SWITCH)</a>
						</div>
					
																					<div class="price">
																		<div class="price-new">RM99.00</div>
									<div class="price-old"></div> 
								</div>
																		
													<div class="rating"> 
									
							</div>
						
						<div class="floating-cart-button">
							
															<div class="button">
																			<span class="icon-add-cart"></span>
										<span class="btn-add-cart">
											<input type="button" value="Add to Cart" onclick="addToCart('2517');" />
										</span>
																	</div>
													</div>
					</div>
				</div>
			</div>
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/fideco-ypz04-s2-u3-dual-ssd-and-hdd-docking-station">
																<div class="image">
										
										
																				
										<img class="first-img lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/all_product_images/product-170/04-420x280.jpg" alt="FIDECO Dual Docking Station HDD And SSD YPZ04-S2-U3" />

																			
								</div>
													</a>
					</div>

					<div class="item-info">

						<div class="product-name">
							<a href="https://www.techzone.com.my/fideco-ypz04-s2-u3-dual-ssd-and-hdd-docking-station" title="FIDECO Dual Docking Station HDD And SSD YPZ04-S2-U3">FIDECO Dual Docking Station HDD And SSD YPZ04-S2-U3</a>
						</div>
					
																					<div class="price">
																		<div class="price-new">RM99.00</div>
									<div class="price-old"></div> 
								</div>
																		
													<div class="rating"> 
									
							</div>
						
						<div class="floating-cart-button">
							
															<div class="button">
																														<span class="btn-outstock">
												<span class="icon-outstock"></span>
												<input type="button" value="Sold Out" />
											</span>
																		</div>
													</div>
					</div>
				</div>
			</div>
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/hp-k300-wired-gaming-keyboard-with-led-backlight">
																<div class="image">
										
										
																				
										<img class="first-img lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/all_product_images/product-1042/K300 - 1-420x280.jpg" alt="HP K300 Wired Gaming Keyboard with LED Backlit" />

																			
								</div>
													</a>
					</div>

					<div class="item-info">

						<div class="product-name">
							<a href="https://www.techzone.com.my/hp-k300-wired-gaming-keyboard-with-led-backlight" title="HP K300 Wired Gaming Keyboard with LED Backlit">HP K300 Wired Gaming Keyboard with LED Backlit</a>
						</div>
					
																					<div class="price">
																		<div class="price-new">RM60.00</div>
									<div class="price-old"></div> 
								</div>
																		
													<div class="rating"> 
									
							</div>
						
						<div class="floating-cart-button">
							
															<div class="button">
																														<span class="btn-outstock">
												<span class="icon-outstock"></span>
												<input type="button" value="Sold Out" />
											</span>
																		</div>
													</div>
					</div>
				</div>
			</div>
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/kingston-32gb-class-10-micro-sd-card-canvas-select-memory-card">
																<div class="image">
										
										
																				
										<img class="first-img lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-420x280.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/all_product_images/product-726/kingston32-420x280.jpg" alt="KINGSTON 32GB Class 10 Micro SD Card" />

																			
								</div>
													</a>
					</div>

					<div class="item-info">

						<div class="product-name">
							<a href="https://www.techzone.com.my/kingston-32gb-class-10-micro-sd-card-canvas-select-memory-card" title="KINGSTON 32GB Class 10 Micro SD Card">KINGSTON 32GB Class 10 Micro SD Card</a>
						</div>
					
																					<div class="price">
																		<div class="price-new">RM29.00</div>
									<div class="price-old"></div> 
								</div>
																		
													<div class="rating"> 
									
							</div>
						
						<div class="floating-cart-button">
							
															<div class="button">
																														<span class="btn-outstock">
												<span class="icon-outstock"></span>
												<input type="button" value="Sold Out" />
											</span>
																		</div>
													</div>
					</div>
				</div>
			</div>
			</div>				
</div>
</div>
<div class="module-container">
    <!-- ###AIO### -->
<style>
#module-blog-module {
			background-color:;
		}
</style>
	<div id="module-blog-module" class="box module-blog-section">

		<div class="title">
			OUR BLOG		</div>

		<div class="box-content">
			<div id="blog-list">
							<div class="box per-row-3">
																		<div class="blog-post-frame">
							<a class="blog-post" href ="https://www.techzone.com.my/which-laptop-brand-is-the-best-">
								<div class="blog-thumb ">
									
																			<img src="https://www.techzone.com.my/image/techzone/image/cache/data/web_image/ZtbzxbVp1574779031-640x426.jpg">
																		<div class="blog-info">
										<div class="blog-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Dui</div>
									</div>
									
								</div>
								<div class="blog-datas">
									<div class="d-flex">
										<div class="tab-author-date">
											<span class="blog-author">
												Web Design											</span>
											<span class="blog-date">
												Nov 2019											</span>
										</div>
									</div>
									<div class="blog-title">
										WHICH LAPTOP BRAND IS THE BEST?									</div>
								</div>
							</a>
						</div>
																				<div class="blog-post-frame">
							<a class="blog-post" href ="https://www.techzone.com.my/what-is-drone-technology-">
								<div class="blog-thumb ">
									
																			<img src="https://www.techzone.com.my/image/techzone/image/cache/data/web_image/VbrekfUO1574778933-640x426.jpg">
																		<div class="blog-info">
										<div class="blog-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
									</div>
									
								</div>
								<div class="blog-datas">
									<div class="d-flex">
										<div class="tab-author-date">
											<span class="blog-author">
												Web Design											</span>
											<span class="blog-date">
												Nov 2019											</span>
										</div>
									</div>
									<div class="blog-title">
										WHAT IS DRONE TECHNOLOGY?									</div>
								</div>
							</a>
						</div>
																				<div class="blog-post-frame">
							<a class="blog-post" href ="https://www.techzone.com.my/10-best-employer-choice-laptop-for-new-startup-business">
								<div class="blog-thumb ">
									
																			<img src="https://www.techzone.com.my/image/techzone/image/cache/data/Untitled design (1)-640x426.jpg">
																		<div class="blog-info">
										<div class="blog-desc">aaa</div>
									</div>
									
								</div>
								<div class="blog-datas">
									<div class="d-flex">
										<div class="tab-author-date">
											<span class="blog-author">
												Web Design											</span>
											<span class="blog-date">
												Nov 2019											</span>
										</div>
									</div>
									<div class="blog-title">
										10 BEST EMPLOYER CHOICE LAPTOP FOR NEW STARTUP BUSINESS									</div>
								</div>
							</a>
						</div>
													</div>				
			</div>				
		</div>

	</div>

<script>
function blogmoduleSetting(){
	$("#module-blog-module .carousel").not('.slick-initialized').slick({
		dots: false,
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		cssEase: 'linear',
		responsive: [
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
	});
}

$(document).ready(function() {
	blogmoduleSetting();
});
</script>

<script>
$(document).ready(function() {
	checkSizeBlogModule();
	$(window).resize(checkSizeBlogModule);
});

function checkSizeBlogModule() {
	if($('.body-style').width() <= 480){
		$('#module-blog-module').parent('.module-container').css('display','none');
	} else {
		$('#module-blog-module').parent('.module-container').css('display','');
	}
}
</script>
</div>
<div class="module-container">
    <!-- ###AIO### -->
<style>
#module-fmanufacturers {
			background-color:;
		}
</style>
<div id="module-fmanufacturers" class="box utilities">
	<div class="title">
  		TRUSTED BY	</div>

	<div class="carousel">
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/a-o-c">
													<div class="image">
								<img class="lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-140x90.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/brands/AOC Logo-140x90.png" alt="A.O.C" />
							</div>
												</a>
					</div>
				</div>
			</div>
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/acer">
													<div class="image">
								<img class="lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-140x90.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/brands/Acer Logo-140x90.png" alt="Acer" />
							</div>
												</a>
					</div>
				</div>
			</div>
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/kingston">
													<div class="image">
								<img class="lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-140x90.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/brands/Kingston logo-140x90.png" alt="KINGSTON" />
							</div>
												</a>
					</div>
				</div>
			</div>
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/cooler-master">
													<div class="image">
								<img class="lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-140x90.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/brands/Cooler Master Logo-140x90.png" alt="Cooler Master" />
							</div>
												</a>
					</div>
				</div>
			</div>
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/hp">
													<div class="image">
								<img class="lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-140x90.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/brands/HP logo-140x90.png" alt="HP" />
							</div>
												</a>
					</div>
				</div>
			</div>
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/canon">
													<div class="image">
								<img class="lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-140x90.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/brands/Canon Logo-140x90.png" alt="Canon" />
							</div>
												</a>
					</div>
				</div>
			</div>
					<div>
				<div class="frame">
					<div class="item-img">
						<a href="https://www.techzone.com.my/sandisk">
													<div class="image">
								<img class="lazy" src="https://www.techzone.com.my/image/techzone/image/cache/defaultlazyload-140x90.jpg" data-lazy="https://www.techzone.com.my/image/techzone/image/cache/data/brands/SanDisk Logo-140x90.png" alt="SANDISK" />
							</div>
												</a>
					</div>
				</div>
			</div>
			</div>
	
</div>

<script>
function Brands(){
	$(".desktop #main-content #module-fmanufacturers .carousel").not('.slick-initialized').slick({
		dots: false,
		infinite: false,
		slidesToShow: 4,
		slidesToScroll: 4,
	});
	
	$(".tablet #main-content #module-fmanufacturers .carousel, .mobile #main-content #module-fmanufacturers .carousel").not('.slick-initialized').slick({
		dots: false,
		infinite: false,
		slidesToShow: 2,
		slidesToScroll: 2
	});
}

$(document).ready(function() {
	Brands();
});
</script>
</div>
				<!-- ###AIO### -->
			</div>
		</div>
			</div>
</section>

<!-- ###AIO### -->
        <!-- BACK TO TOP BUTTON -->
        <button onclick="backToTop()" id="backToTop" title="Back to top"><i class="fa fa-chevron-up"></i></button>

        <footer id="footer" class="footer ">
            
            <!-- ADD TO CART POPUP  -->
            <input type="hidden" id="current_product_id"/>
            <input type="hidden" id="config_cart_modal" value="1">
            <!-- YOU MIGHT NEED THIS APP -->
            <input type="hidden" id="you_might_need_this_status" value="0">

            <!-- FOOTER MODULES -->
            <div class="container">

                <div class="el_1">
                    <!-- FOOTER MENUS -->
                                                                                                                                                                <div class="module-container">
                                    <a class="title" href="https://www.techzone.com.my/terms_and_conditions" >
                                        Terms &amp; Conditions                                    </a>
                                
                                                                            <ul>
                                            							
								
										<li><a href="https://www.techzone.com.my/faq" >FAQ</a></li>
										
										<li><a href="https://www.techzone.com.my/about_us" >About Us</a></li>
										
										<li><a href="https://www.techzone.com.my/Privacy_Policy" >Privacy Policy</a></li>
										
										<li><a href="https://www.techzone.com.my/terms_and_conditions" >Terms &amp; Conditions</a></li>
										
										<li><a href="https://www.techzone.com.my/return_policy" >Return Exchange Policy</a></li>
																
							                                        </ul>
                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="module-container">
                                    <a class="title" href="https://www.techzone.com.my/return_policy" >
                                        Return Exchange Policy                                    </a>
                                
                                                                            <ul>
                                            							
								
										<li><a href="https://www.techzone.com.my/contact_us" >Contact Us</a></li>
										
										<li><a href="https://www.google.com/maps/place/TECH+ZONE+COMPUTER+SDN+BHD/@3.113084,101.732206,15z/data=!4m5!3m4!1s0x0:0xd832ef0fa4e5360d!8m2!3d3.113084!4d101.732206" >Site Map</a></li>
																
							                                        </ul>
                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                <div class="module-container">
                                    <a class="title" href="https://www.techzone.com.my/Privacy_Policy" >
                                        Privacy Policy                                    </a>
                                
                                                                            <ul>
                                            							
								
										<li><a href="https://www.techzone.com.my/index.php?route=information/tellafriend" >Tell A Friend</a></li>
										
										<li><a href="https://www.techzone.com.my/brand" >Brands</a></li>
										
										<li><a href="https://www.techzone.com.my/voucher" >Gift Vouchers</a></li>
										
										<li><a href="https://www.techzone.com.my/special" >Special Promotions</a></li>
										
										<li><a href="https://www.techzone.com.my/special?sg_type_pg=latest" >Latest Products</a></li>
										
										<li><a href="https://www.techzone.com.my/special?sg_type_pg=bestseller" >Bestseller</a></li>
										
										<li><a href="https://www.techzone.com.my/special?sg_type_pg=featured" >Featured Products</a></li>
																
							                                        </ul>
                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <div class="module-container">
                                    <a class="title" href="https://www.techzone.com.my/faq" >
                                        FAQ                                    </a>
                                
                                                                            <ul>
                                            							
								
										<li><a href="https://www.techzone.com.my/account" >My Account</a></li>
										
										<li><a href="https://www.techzone.com.my/order" >Order History</a></li>
										
										<li><a href="https://www.techzone.com.my/notification" >Receipt Upload</a></li>
										
										<li><a href="https://www.techzone.com.my/wishlist" >Wish List</a></li>
																
							                                        </ul>
                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!-- END FOOTER MENU -->

                    <div id="newsletter_socialmedia" class="module-container" style="display:none;" >
                                                    <div id="newsletter">
                                <div class="title">Newsletter</div>
                                <!-- Begin MailChimp Signup Form -->

<div id="mc_embed_signup">
<form action="https://unicart.us7.list-manage.com/subscribe/post?u=2e364e881ec06d67a9881aa62&amp;id=4ad604240f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address </label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>	<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>
</div>
<script type="text/javascript">
var fnames = new Array();var ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';
try {
    var jqueryLoaded=jQuery;
    jqueryLoaded=true;
} catch(err) {
    var jqueryLoaded=false;
}
var head= document.getElementsByTagName('head')[0];
if (!jqueryLoaded) {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = '//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
    head.appendChild(script);
    if (script.readyState && script.onload!==null){
        script.onreadystatechange= function () {
              if (this.readyState == 'complete') mce_preload_check();
        }    
    }
}

var err_style = '';
try{
    err_style = mc_custom_error_style;
} catch(e){
    err_style = '#mc_embed_signup input.mce_inline_error{border-color:#6B0505;} #mc_embed_signup div.mce_inline_error{margin: 0 0 1em 0; padding: 5px 10px; background-color:#6B0505; font-weight: bold; z-index: 1; color:#fff;}';
}
var head= document.getElementsByTagName('head')[0];
var style= document.createElement('style');
style.type= 'text/css';
if (style.styleSheet) {
  style.styleSheet.cssText = err_style;
} else {
  style.appendChild(document.createTextNode(err_style));
}
head.appendChild(style);
setTimeout('mce_preload_check();', 250);

var mce_preload_checks = 0;
function mce_preload_check(){
    if (mce_preload_checks>40) return;
    mce_preload_checks++;
    try {
        var jqueryLoaded=jQuery;
    } catch(err) {
        setTimeout('mce_preload_check();', 250);
        return;
    }
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://template.unicart.com/jquery.form-n-validate.js';
    head.appendChild(script);
    try {
        var validatorLoaded=jQuery("#fake-form").validate({});
    } catch(err) {
        setTimeout('mce_preload_check();', 250);
        return;
    }
    mce_init_form();
}
function mce_init_form(){
    jQuery(document).ready( function($) {
      var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
      var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
      $("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
      options = { url: 'https://unicart.us7.list-manage.com/subscribe/post-json?u=2e364e881ec06d67a9881aa62&id=4ad604240f&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
                    beforeSubmit: function(){
                        $('#mce_tmp_error_msg').remove();
                        $('.datefield','#mc_embed_signup').each(
                            function(){
                                var txt = 'filled';
                                var fields = new Array();
                                var i = 0;
                                $(':text', this).each(
                                    function(){
                                        fields[i] = this;
                                        i++;
                                    });
                                $(':hidden', this).each(
                                    function(){
                                        var bday = false;
                                        if (fields.length == 2){
                                            bday = true;
                                            fields[2] = {'value':1970};//trick birthdays into having years
                                        }
                                    	if ( fields[0].value=='MM' && fields[1].value=='DD' && (fields[2].value=='YYYY' || (bday && fields[2].value==1970) ) ){
                                    		this.value = '';
									    } else if ( fields[0].value=='' && fields[1].value=='' && (fields[2].value=='' || (bday && fields[2].value==1970) ) ){
                                    		this.value = '';
									    } else {
									        if (/\[day\]/.test(fields[0].name)){
    	                                        this.value = fields[1].value+'/'+fields[0].value+'/'+fields[2].value;									        
									        } else {
    	                                        this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
	                                        }
	                                    }
                                    });
                            });
                        $('.phonefield-us','#mc_embed_signup').each(
                            function(){
                                var fields = new Array();
                                var i = 0;
                                $(':text', this).each(
                                    function(){
                                        fields[i] = this;
                                        i++;
                                    });
                                $(':hidden', this).each(
                                    function(){
                                        if ( fields[0].value.length != 3 || fields[1].value.length!=3 || fields[2].value.length!=4 ){
                                    		this.value = '';
									    } else {
									        this.value = 'filled';
	                                    }
                                    });
                            });
                        return mce_validator.form();
                    }, 
                    success: mce_success_cb
                };
      $('#mc-embedded-subscribe-form').ajaxForm(options);
      
      
    });
}
function mce_success_cb(resp){
    $('#mce-success-response').hide();
    $('#mce-error-response').hide();
    if (resp.result=="success"){
        $('#mce-'+resp.result+'-response').show();
        $('#mce-'+resp.result+'-response').html(resp.msg);
        $('#mc-embedded-subscribe-form').each(function(){
            this.reset();
    	});
    } else {
        var index = -1;
        var msg;
        try {
            var parts = resp.msg.split(' - ',2);
            if (parts[1]==undefined){
                msg = resp.msg;
            } else {
                i = parseInt(parts[0]);
                if (i.toString() == parts[0]){
                    index = parts[0];
                    msg = parts[1];
                } else {
                    index = -1;
                    msg = resp.msg;
                }
            }
        } catch(e){
            index = -1;
            msg = resp.msg;
        }
        try{
            if (index== -1){
                $('#mce-'+resp.result+'-response').show();
                $('#mce-'+resp.result+'-response').html(msg);            
            } else {
                err_id = 'mce_tmp_error_msg';
                html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';
                
                var input_id = '#mc_embed_signup';
                var f = $(input_id);
                if (ftypes[index]=='address'){
                    input_id = '#mce-'+fnames[index]+'-addr1';
                    f = $(input_id).parent().parent().get(0);
                } else if (ftypes[index]=='date'){
                    input_id = '#mce-'+fnames[index]+'-month';
                    f = $(input_id).parent().parent().get(0);
                } else {
                    input_id = '#mce-'+fnames[index];
                    f = $().parent(input_id).get(0);
                }
                if (f){
                    $(f).append(html);
                    $(input_id).focus();
                } else {
                    $('#mce-'+resp.result+'-response').show();
                    $('#mce-'+resp.result+'-response').html(msg);
                }
            }
        } catch(e){
            $('#mce-'+resp.result+'-response').show();
            $('#mce-'+resp.result+'-response').html(msg);
        }
    }
}

</script>
<!--End mc_embed_signup-->                            </div>
                        
                        <!-- SOCIAL MEDIA -->
                        <div id="socialmedia">
                            <div class="title" >
                                Follow Us                            </div>

                            <div class="icons-social-media">
                                <a id="footer-social-fb" class="icon" href="https://www.facebook.com/"  target="_blank">
                                    <div class="mdi mdi-facebook"></div>
                                </a>
                                <a id="footer-social-youtube" class="icon" href="https://www.youtube.com/"  target="_blank">
                                    <div class="mdi mdi-youtube"></div>
                                </a>
                                <a id="footer-social-instagram" class="icon" href="https://www.instagram.com/?hl=en"  target="_blank">
                                    <div class="mdi mdi-instagram"></div>
                                </a>
                            </div>
                        </div>
                        <!-- END SOCIAL MEDIA -->
                    </div>


                    <!-- PAGE CONTENT FOOTER  -->
                    <div id="payment_method" class="module-container">
                                                                                    
    <div class="title">
            </div>
    <div>
            </div>
                                                                        </div>
                    <!-- END PAGE CONTENT FOOTER  -->
                </div>

                <div class="el_2">
                    <div id="el_2_logo">
						                    </div>
                    <div class="el_2_content">
                                            </div>
                </div>

                <div class="el_3">
                    <div id="additional_cms" class="module-container">
                        <div class="title"></div>
                                            </div>
                </div>
            </div>



            <!-- COPYRIGHTS INFO -->
            <div id="copyrights">
                <div class="container">
                    <!-- <div class="powered_left">
                        Copyright  © 2024 TECH ZONE COMPUTER SDN BHD. All rights reserved.                    </div>
                    <div class="powered_right">
                        <a target="_top" href="https://www.sitegiant.my">eCommerce by SiteGiant</a>                    </div> -->

                    <div class="powered">
                        <span class="copyright">Copyright  © 2024 TECH ZONE COMPUTER SDN BHD. All rights reserved.</span><span style="float:right;" class="powered"><a target="_top" href="https://www.sitegiant.my">eCommerce by SiteGiant</a></span>                    </div>
                </div>
            </div>
        </footer>


            
         <!-- ==== SCRIPTS ==== -->
        <!-- JQUERY -->
        <script defer type="text/javascript" src="catalog/view/theme/aio/js/jquery-ui-1.12.1.min.js"></script>        
        <!-- CAROUSEL -->
        <script defer src="catalog/view/theme/aio/plugins/carousel/slick.min.js"></script>
		<!-- CLIPBOARD -->
		<script defer src="catalog/view/theme/aio/plugins/clipboard.min.js"></script>
        <!-- FUNCTIONS -->
        <script defer type="text/javascript" src="catalog/view/theme/aio/js/apps/notifyme.js"></script>
        <!-- SWEET ALERT -->
        <script defer src="catalog/view/theme/aio/plugins/sweetalert/sweetalert2.all.min.js"></script>
		<!-- PRINTTHIS -->
		<script defer src="catalog/view/theme/aio/plugins/printThis/printThis.js?ver=1.0"></script>
        <!-- FLATPICKR -->
        <link defer rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <script defer src="catalog/view/theme/aio/plugins/flatpickr.js?ver=1.0"></script>
        
        <!-- BULMA CALENDAR -->
        <script defer src="catalog/view/theme/aio/plugins/bulma-calendar/doc.js"></script>
        <script defer src="catalog/view/theme/aio/plugins/bulma-calendar/bulma-calendar.min.js"></script>
        <!-- <script defer src="catalog/view/theme/aio/plugins/bulma-calendar/main.js"></script> -->
        
		<!-- UI CONTROL SCRIPT -->
        <script defer src="catalog/view/theme/aio/js/ui-control.js?ver=1712538365"></script>

		<!-- LAZYLOAD -->
		<script>
		function lazyload() {
			$('img.lazy').lazy({
				attribute: 'data-lazy',
				effect: "fadeIn",
				effectTime: 2000
			});
		}
		</script>
        <!-- LOAD USER SETTINGS -->	
        <script>
            $(document).ready(function(){
				lazyload();
                 
					
					productslick(4,4,4);
					
											search_autocomplete();
										
                                             // MULTITAB SETTING
                        multitabs(4,4,4);
                                });

                    </script>

        
        <!-- MAILCHIMP SUBSCRIPTION-->
        <script>
            function mailChimpUnsubscribe(){
                $.ajax({
                    url: 'index.php?route=common/footer/mailChimpUnsubscribe',
                    type: 'POST',
                    success: function(data) {
                        html = '<input onclick="mailChimpSubscribe()" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">';
                        $('#mc_embed_signup').html(html);
                    },
                    error: function(data){
                        alert("error");
                    }
                });
            }
            
            function mailChimpSubscribe(){
                $.ajax({
                    url: 'index.php?route=common/footer/mailChimpSubscribe',
                    type: 'POST',
                    success: function(data) {
                        html = '<input onclick="mailChimpUnsubscribe()" type="submit" value="Unsubscribe" name="unsubscribe" id="mc-embedded-subscribe" class="button">';
                        $('#mc_embed_signup').html(html);
                    },
                    error: function(data){
                        alert("error");
                    }
                });
            }
        </script>
        <!-- END MAILCHIMP SUBSCRIPTION-->
		
			
    </body>
</html>
<script>
$(document).ready(function() {
	$("#header-slideshow .carousel").not('.slick-initialized').slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4+'000',
        cssEase: 'linear'
    });
});
</script>

