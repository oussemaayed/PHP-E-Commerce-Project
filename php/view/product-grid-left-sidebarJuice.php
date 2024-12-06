
<?php

session_start();
require_once("../model/Class/produit.php");

$prod=new Produit();
$res=$prod->afficherProduitJuice();


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
		<link rel="shortcut icon" href="../assests/img/favicon.png" type="image/png">
		
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700" rel="stylesheet">
		
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="../../libs/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../../libs/font-material/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="../../libs/nivo-slider/css/nivo-slider.css">
		<link rel="stylesheet" href="../../libs/nivo-slider/css/animate.css">
		<link rel="stylesheet" href="../../libs/nivo-slider/css/style.css">
		<link rel="stylesheet" href="../../libs/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="../../libs/slider-range/css/jslider.css">
		
		<!-- Template CSS -->
		<link rel="stylesheet" href="../assests/css/style.css">
		<link rel="stylesheet" href="../assests/css/reponsive.css">
	</head>
	
	<body class="home home-4">
		<div id="all">
		<header>
				<?php
			  
  include 'header.PHP';
			  
			  
			  
			  ?>
			  </header>
			
			<!-- Main Content -->
		<!-- Main Content -->
		<div id="content" class="site-content">
				<!-- Breadcrumb -->
				<div id="breadcrumb">
					<div class="container">
						<h2 class="title">JUICE</h2>
						
						<ul class="breadcrumb">
							<li><a href="#" title="Home">Home</a></li>
							<li><a href="#" title="Fruit">JUICE</a></li>
							
						</ul>
					</div>
				</div>
			
			
				<div class="container">
					<div class="row">
						<!-- Sidebar -->
						<div id="left-column" class="sidebar col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<!-- Block - Product Categories -->
							<div class="block product-categories">
								<h3 class="block-title">Categories</h3>
								
								<div class="block-content">
									<div class="item">
										<span class="arrow collapsed" data-toggle="collapse" data-target="#vegetables" aria-expanded="false" role="button">
											<i class="zmdi zmdi-minus"></i>
											<i class="zmdi zmdi-plus"></i>
										</span>
										
										<a class="category-title" href="product-grid-left-sidebarLegume.php">Vegetables</a>
										<div class="sub-category collapse" id="vegetables" aria-expanded="true" role="main">
										
										</div>
									</div>
									
									<div class="item">
										<span class="arrow collapsed" data-toggle="collapse" data-target="#fruits" aria-expanded="false" role="button">
											<i class="zmdi zmdi-minus"></i>
											<i class="zmdi zmdi-plus"></i>
										</span>
										
										<a class="category-title" href="product-grid-left-sidebarFruit.php">Fruits</a>
										<div class="sub-category collapse" id="fruits" aria-expanded="true" role="main">
										
										</div>
									</div>
									
									<div class="item">
										<span class="arrow collapsed" data-toggle="collapse" data-target="#juices" aria-expanded="false" role="button">
											<i class="zmdi zmdi-minus"></i>
											<i class="zmdi zmdi-plus"></i>
										</span>
										
										<a class="category-title" href="product-grid-left-sidebarJuice.php">Juices</a>
										<div class="sub-category collapse" id="juices" aria-expanded="true" role="main">
											
										</div>
									</div>
									
									
								</div>
							</div>
							
							
							
							<!-- Block - Filter -->
							<div class="block product-filter">
								
							
								<div class="block-content">
									<div class="filter-item">
										
										
										<div class="filter-content">
											
										</div>
									</div>
									
									
									
								
									
									<div class="filter-item">
										
										
										<div class="block-content">
											<div class="filter-color">
												<div class="left">
													
													
												</div>
												<div class="right">
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<!-- Product Tags -->
							<div class="block tags product-tags">
								
							
								<div class="block-content">
									
								</div>
							</div>
						</div>
						
						<!-- Page Content -->
						<div id="center-column" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							<div class="product-category-page">
								<!-- Nav Bar -->
								<div class="products-bar">
									<div class="row">
										<div class="col-md-6 col-xs-6">
											<div class="gridlist-toggle" role="tablist">
												<ul class="nav nav-tabs">
													<li><a href="#products-list" data-toggle="tab" aria-expanded="false"><i class="fa fa-bars"></i></a></li>
												</ul>
											</div>
											
											<div class="total-products">There are  products</div>
										</div>
										
										
										</div>
									</div>
								</div>
								
								<div class="tab-content">
									<!-- Products Grid -->
									<div class="tab-pane active" id="products-grid">
										<div class="products-block"  >
											<div class="row"  id="productContainer">
												<?php 
												foreach ($res as $key => $value) {
													
												
												?>
												<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
													<div class="product-item">
														<div class="product-image">
															<?php $image=explode(',',$value[4]) ?>
															<a href="product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
																<img class="img-responsive" src="../assests/img/product1/<?php echo $image[0]; unset($image);?>" alt="Product Image">
															</a>
														</div>
														
														<div class="product-title">
														<a href="product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
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
														<a class="add-to-cart"  href="cartjuice.php?id=<?php echo $value[0] ?>&prix=<?php echo $prix ?>">
																<i class="fa fa-shopping-basket" aria-hidden="true"></i>
															</a>
															
															<a class="add-wishlist" href="../controller/addWhishlist.php?id=<?php echo $value[0] ?>&name=<?php echo $value[6] ?>">

																<i class="fa fa-heart" aria-hidden="true"></i>												
															</a>
															
															<a class="quickview"  href="product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
																<i class="fa fa-eye" aria-hidden="true"></i>
															</a>
														</div>
													</div>
												</div>
													<?php
													 }
													?>
												
											</div>
										</div>
									</div>
									<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#searchInput').on('input', function () {
            searchProducts();
        });

        function searchProducts() {
            var searchValue = $('#searchInput').val();

            $.ajax({
                type: "GET",
                url: "search1.php",
                data: { search: searchValue },
                dataType: "html",
                success: function (response) {
                    $("#productContainer").html(response);
                },
                error: function () {
                    alert("Error fetching search results.");
                }
            });
        }
    });
</script>
		
									<footer>
				<?php
			  
  include 'footer.PHP';
			  
			  
			  
			  ?>
			</footer>
		<!-- Vendor JS -->
		<script src="../../libs/jquery/jquery.js"></script>
		<script src="../../libs/bootstrap/js/bootstrap.js"></script>
		<script src="../../libs/jquery.countdown/jquery.countdown.js"></script>
		<script src="../../libs/nivo-slider/js/jquery.nivo.slider.js"></script>
		<script src="../../libs/owl.carousel/owl.carousel.min.js"></script>
		<script src="../../libs/slider-range/js/tmpl.js"></script>
		<script src="../../libs/slider-range/js/jquery.dependClass-0.1.js"></script>
		<script src="../../libs/slider-range/js/draggable-0.1.js"></script>
		<script src="../../libs/slider-range/js/jquery.slider.js"></script>
		<script src="../../libs/elevatezoom/jquery.elevatezoom.js"></script>
		
		<!-- Template CSS -->
		<script src="../assests/js/main.js"></script>	
	</body>


</html>