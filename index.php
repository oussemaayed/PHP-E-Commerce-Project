<?php
header("Cache-Control:no-cache");
session_start();
require_once("php/model/Class/produit.php");

$prod=new Produit();
$res=$prod->afficherProduit();
$res1=$prod->afficherProduitVegetal("vegtables");
$res2=$prod->afficherProduitFruit("fruits");
$res3=$prod->afficherProduitJuice("juice");

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
		<!-- Basic Page Needs -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>FreshMart - Organic, Fresh Food, Farm Store HTML Template</title>
		
		<meta name="keywords" content="Organic, Fresh Food, Farm Store">
		<meta name="description" content="FreshMart - Organic, Fresh Food, Farm Store HTML Template">
		<meta name="author" content="tivatheme">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="php/assests/img/favicon.png" type="image/png">
		
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700" rel="stylesheet">
		
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="libs/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="libs/font-material/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="libs/nivo-slider/css/nivo-slider.css">
		<link rel="stylesheet" href="libs/nivo-slider/css/animate.css">
		<link rel="stylesheet" href="libs/nivo-slider/css/style.css">
		<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="libs/slider-range/css/jslider.css">
		
		<!-- Template CSS -->
		<link rel="stylesheet" href="php/assests/css/style.css">
		<link rel="stylesheet" href="php/assests/css/reponsive.css">
	</head>
	
	<body class="home home-4">
		<div id="all">
			<!-- Header -->
			<header >
			<?php
			  
			  include 'php/view/headerindex.PHP';
						  
						  
						  
						  ?>
			</header>
			</header>
			
			
			<!-- Main Content -->
			<div id="content" class="site-content">				
				<!-- Slideshow -->
				<div class="section slideshow">
					<div class="container">
						<div class="tiva-slideshow-wrapper">
							<div id="tiva-slideshow" class="nivoSlider">
								<a href="#">
									<img class="img-responsive" src="php/assests/img/slideshow/home3-slideshow-2.jpg" alt="Slideshow Image">
								</a>
								<a href="#">
									<img class="img-responsive" src="php/assests/img/slideshow/home3-slideshow-3.jpg" alt="Slideshow Image">
								</a>
								<a href="#">
									<img class="img-responsive" src="php/assests/img/slideshow/home4-slideshow-3.jpg" alt="Slideshow Image">
								</a>
							</div>
						</div>
					</div>
				</div>
				
				
				<!-- Payment Intro -->
				<div class="section payment-intro">
					<div class="container">
						<div class="payment-wrap">
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="item d-flex">
										<div class="item-left">
											<img src="php/assests/img/home1-payment-1.png" alt="Payment Intro">
										</div>
										<div class="item-right">
											<h3 class="title">Free Shipping item</h3>
											<div class="content">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="item d-flex">
										<div class="item-left">
											<img src="php/assests/img/home1-payment-2.png" alt="Payment Intro">
										</div>	
										<div class="item-right">
											<h3 class="title">Secured Payment</h3>
											<div class="content">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="item d-flex">
										<div class="item-left">
											<img src="php/assests/img/home1-payment-3.png" alt="Payment Intro">
										</div>
										<div class="item-right">
											<h3 class="title">Money Back Guarantee</h3>
									
										</div>
									</div>
								</div>
								
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="item d-flex">
										<div class="item-left">
											<img src="php/assests/img/home1-payment-4.png" alt="Payment Intro">
										</div>
										<div class="item-right">
											<h3 class="title">Express Shipping</h3>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Product -->
				<div class="two-column">
					<div class="container row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="section products-block category-double no-border">
								<div class="block-title">
									<h2 class="title">All <span>Products</span></h2>
									
								</div>
								
								<div class="block-content">
									<div class="products owl-theme owl-carousel">
										<?php 
										$image=[];
											foreach ($res as $key => $value) {
												if($value[2]>0){
													$prix=$value[2];
												}
												else{
													$prix=$value[1];
												}
													
										?>
									<div class="product-item">
											<div class="product-image">
											<a href="php/view/product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
													<?php 
														$image=explode(',',$value[4]);
													?>
													<img src="php/assests/img/product1/<?php echo $image[0];unset($image);?>" alt="Product Image">
												</a>
											</div>
											
											<div class="product-title">
											<a href="php/view/product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
												<?php echo $value[6];?>
												</a>
											</div>
											
											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>
											
											<div class="product-price">
												<?php 
														if($value[2]>0){
												?>
												<span class="sale-price"><?php echo $value[2];?> dt</span>
												<span class="base-price"><?php echo $value[1];?> dt </span>
												<?php
														}
													else{
														?>
												<span class="sale-price"><?php echo $value[1];?> dt</span>
												<span class="base-price"><?php echo $value[2];?> dt </span>

														<?php
													}
												?>
											</div>
											
											<div class="product-buttons">
												<a class="add-to-cart"  href="php/view/add_to_cart.php?id=<?php echo $value[0] ?>&prix=<?php echo $prix ?>">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>
												
												<a class="add-wishlist" href="php/controller/addWhishlist.php?id=<?php echo $value[0] ?>&name=<?php echo $value[6] ?>">
													<i class="fa fa-heart" aria-hidden="true"></i>												
												</a>
												
												<a class="quickview" href="php/view/product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
										
										<?php
										
											}
										?>
										
										
										
										
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="section products-block category-double no-border">
								<div class="block-title">
									<h2 class="title">Vegetables <span></span></h2>
									
								</div>
								
								<div class="block-content">
									<div class="products owl-theme owl-carousel">
										<?php 
										foreach ($res1 as $key => $value) {
										
										
										
										?>
										<div class="product-item">
											<div class="product-image">
												<?php 
													$img=explode(",",$value[4]);
												?>
												<a href="php/view/product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
													<img src="php/assests/img/product1/<?php echo $img[0];unset($img); ?>" alt="Product Image">
												</a>
											</div>
											
											<div class="product-title">
												<a href="php/view/product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
													<?php
														echo $value[6];
													?>
												</a>
											</div>
											
											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>
											
											<div class="product-price">
											<?php 
														if($value[2]>0){
												?>
												<span class="sale-price"><?php echo $value[2];?> dt</span>
												<span class="base-price"><?php echo $value[1];?> dt </span>
												<?php
														}
													else{
														?>
												<span class="sale-price"><?php echo $value[1];?> dt</span>
												<span class="base-price"><?php echo $value[2];?> dt </span>

														<?php
													}
												?>
											</div>
											
											<div class="product-buttons">
												<a class="add-to-cart" href="php/view/add_to_cart.php?id=<?php echo $value[0] ?>&prix=<?php echo $prix ?>">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>
												
												<a class="add-wishlist" href="php/controller/addWhishlist.php?id=<?php echo $value[0] ?>&name=<?php echo $value[6] ?>">
													<i class="fa fa-heart" aria-hidden="true"></i>												
												</a>
												
												<a class="quickview" href="php/view/product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
										
										<?php
											}
										?>
										
										</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
		<!-- clowns fruits et juice-->
		<!-- Product -->
		<div class="two-column ">
					<div class="container row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="section products-block category-double no-border">
								<div class="block-title">
									<h2 class="title">Fruits <span></span></h2>
									
								</div>
								
								<div class="block-content">
									<div class="products owl-theme owl-carousel">
										<?php 
										foreach ($res2 as $key => $value) {
										
										
										
										?>
										<div class="product-item">
											<div class="product-image">
												<?php 
													$img=explode(",",$value[4]);
												?>
												<a href="php/view/product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
													<img src="php/assests/img/product1/<?php echo $img[0];unset($img); ?>" alt="Product Image">
												</a>
											</div>
											
											<div class="product-title">
												<a href="php/view/product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
													<?php
														echo $value[6];
													?>
												</a>
											</div>
											
											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>
											
											<div class="product-price">
											<?php 
														if($value[2]>0){
												?>
												<span class="sale-price"><?php echo $value[2];?> dt</span>
												<span class="base-price"><?php echo $value[1];?> dt </span>
												<?php
														}
													else{
														?>
												<span class="sale-price"><?php echo $value[1];?> dt</span>
												<span class="base-price"><?php echo $value[2];?> dt </span>

														<?php
													}
												?>
											</div>
											
											<div class="product-buttons">
												<a class="add-to-cart" href="php/view/add_to_cart.php?id=<?php echo $value[0] ?>&prix=<?php echo $prix ?>">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>
												
												<a class="add-wishlist" href="php/controller/addWhishlist.php?id=<?php echo $value[0] ?>&name=<?php echo $value[6] ?>">
													<i class="fa fa-heart" aria-hidden="true"></i>												
												</a>
												
												<a class="quickview" href="php/view/product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
												<?php
										}
												?>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="section products-block category-double no-border">
								<div class="block-title">
									<h2 class="title">Juice</h2>
								
								</div>
								
								<div class="block-content">
									<div class="products owl-theme owl-carousel">
										<?php 
										foreach ($res3 as $key => $value) {
										
										
										
										?>
										<div class="product-item">
											<div class="product-image">
												<?php 
													$img=explode(",",$value[4]);
												?>
												<a href="php/view/product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
													<img src="php/assests/img/product1/<?php echo $img[0];unset($img); ?>" alt="Product Image">
												</a>
											</div>
											
											<div class="product-title">
												<a href="php/view/product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
													<?php
														echo $value[6];
													?>
												</a>
											</div>
											
											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>
											
											<div class="product-price">
											<?php 
														if($value[2]>0){
												?>
												<span class="sale-price"><?php echo $value[2];?> dt</span>
												<span class="base-price"><?php echo $value[1];?> dt </span>
												<?php
														}
													else{
														?>
												<span class="sale-price"><?php echo $value[1];?> dt</span>
												<span class="base-price"><?php echo $value[2];?> dt </span>

														<?php
													}
												?>
											</div>
											
											<div class="product-buttons">
												<a class="add-to-cart" href="php/view/add_to_cart.php?id=<?php echo $value[0] ?>&prix=<?php echo $prix ?>">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>
												
												<a class="add-wishlist" href="php/controller/addWhishlist.php?id=<?php echo $value[0] ?>&name=<?php echo $value[6] ?>">
													<i class="fa fa-heart" aria-hidden="true"></i>												
												</a>
												
												<a class="quickview" href="php/view/product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
												<?php
										}
												?>
									</div>
								</div>
										
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
			
			
		<!-- Footer -->
		<footer >
				<?php
				include 'php/view/footerindex.php'; ?>
			</footer>
			
		<!-- Vendor JS -->
		<script src="libs/jquery/jquery.js"></script>
		<script src="libs/bootstrap/js/bootstrap.js"></script>
		<script src="libs/jquery.countdown/jquery.countdown.js"></script>
		<script src="libs/nivo-slider/js/jquery.nivo.slider.js"></script>
		<script src="libs/owl.carousel/owl.carousel.min.js"></script>
		<script src="libs/slider-range/js/tmpl.js"></script>
		<script src="libs/slider-range/js/jquery.dependClass-0.1.js"></script>
		<script src="libs/slider-range/js/draggable-0.1.js"></script>
		<script src="libs/slider-range/js/jquery.slider.js"></script>
		<script src="libs/elevatezoom/jquery.elevatezoom.js"></script>
		
		<!-- Template CSS -->
		<script src="php/assests/js/main.js"></script>
	</body>
	


</html>					