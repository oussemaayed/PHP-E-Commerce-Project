<?php
	session_start();
	require_once("../model/Class/produit.php");
	require_once("../model/Class/admin.php");
	// if (isset($_SESSION['login'])&& isset($_SESSION['pass']))
	// 	{
	// $admin=new admin();
	// $rech=$admin->verifAdmin($_SESSION['login'],$_SESSION['pass']);
	// $n=$rech->fetchColumn(0);
	// if($n==0){
	// header("location:admin.php");
	// }else{
	$prod=new Produit();
	$res=$prod->afficherProduitById($_GET['id']);
	$res2=$prod->afficherProduit();
	
		
	
	
	
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
			<div id="content" class="site-content">
				<!-- Breadcrumb -->
				<div id="breadcrumb">
					<div class="container">
						<h2 class="title">Organic Strawberry Fruits</h2>
						
						<ul class="breadcrumb">
							<li><a href="#" title="Home">Home</a></li>
							<li><a href="#" title="Fruit">Fruit</a></li>
							<li><span>Tomato</span></li>
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
							
							
							
							<!-- Product Tags -->
							<div class="block tags product-tags">
								
							
								<div class="block-content">
									
								</div>
							</div>
						</div>
						
						<!-- Page Content -->
						<div id="center-column" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							<div class="product-detail">
								<div class="products-block layout-5">
									<div class="product-item">
										<div class="product-title">
											 <?php $tab=array(); foreach ($res as $key => $value) {
												echo $value[6]; 
												$pieces=explode(",",$value[4]);
												
												?>
											
										</div>
													
										<div class="row">
											<div class="product-left col-md-5 col-sm-5 col-xs-12">
												<div class="product-image horizontal">
													<div class="main-image">
														<img class="img-responsive" src="../assests/img/product1/<?php echo $pieces[0]?>" alt="Product Image">
													</div>
													<div class="thumb-images owl-theme owl-carousel">
														<?php 
														for ($i=0; $i <count($pieces) ; $i++) { 
														?>
														<img class="img-responsive" src="../assests/img/product1/<?php echo $pieces[$i] ?>"  width="80px" alt="Product Image">
														<?php  }?>
													</div>
												</div>
											</div>

											<div class="product-right col-md-7 col-sm-7 col-xs-12">
												<div class="product-info">
													<div class="product-price">
														<span class="sale-price">$<?php echo $value[2]; ?></span>
														<span class="base-price">$<?php echo $value[1]; ?></span>
													</div>
													
													<div class="product-stock">
														<span class="availability">Availability :</span><i class="fa fa-check-square-o" aria-hidden="true"></i>In stock
													</div>
													
													<div class="product-short-description">
														<?php echo $value[3]; ?>
													</div>
													<?php
											} ?>
													<div class="product-variants border-bottom">
														<div class="product-variants-item">
															<span class="control-label">Size :</span>
															<select>
																<option value="1" title="S">S</option>
																<option value="2" title="M">M</option>
																<option value="3" title="L">L</option>
																<option value="4" title="One size">One size</option>
															</select>
														</div>

														<div class="product-variants-item">
															<span class="control-label">Color :</span>

															<ul>
																<li>
																	<input class="input-color" type="radio" value="1">
																	<span class="color" style="background-color: #E84C3D"></span>
																</li>
																<li>
																	<input class="input-color" type="radio" value="2">
																	<span class="color" style="background-color: #5D9CEC"></span>
																</li>
																<li>
																	<input class="input-color" type="radio" value="3">
																	<span class="color" style="background-color: #A0D468"></span>
																</li>
																<li>
																	<input class="input-color" type="radio" value="4">
																	<span class="color" style="background-color: #F1C40F"></span>
																</li>
																<li>
																	<input class="input-color" type="radio" value="5">
																	<span class="color" style="background-color: #964B00"></span>
																</li>
																<li>
																	<input class="input-color" type="radio" value="6">
																	<span class="color" style="background-color: #FCCACD"></span>
																</li>
															</ul>
														</div>
													</div>
													
													<div class="product-add-to-cart border-bottom">
														<div class="product-quantity">
															<span class="control-label">QTY :</span>
															<div class="qty">
																<div class="input-group">
																	<input type="text" name="qty" value="1" data-min="1">
																	<span class="adjust-qty">
																		<span class="adjust-btn plus">+</span>
																		<span class="adjust-btn minus">-</span>
																	</span>
																</div>
															</div>
														</div>
														
														<div class="product-buttons">
															<a class="add-to-cart" href="#">
																<i class="fa fa-shopping-basket" aria-hidden="true"></i>
																<span>Add To Cart</span>
															</a>
															
															<a class="add-wishlist" href="#">
																<i class="fa fa-heart" aria-hidden="true"></i>												
															</a>
														</div>
													</div>
													
													<div class="product-share border-bottom">
														<div class="item">
															<a href="#"><i class="zmdi zmdi-share" aria-hidden="true"></i><span class="text">Share</span></a>
														</div>
														<div class="item">
															<a href="#"><i class="zmdi zmdi-email" aria-hidden="true"></i><span class="text">Send to a friend</span></a>
														</div>
														<div class="item">
															<a href="#"><i class="zmdi zmdi-print" aria-hidden="true"></i><span class="text">Print</span></a>
														</div>
													</div>
													
													<div class="product-review border-bottom">
														<div class="item">
															<div class="product-quantity">
																<span class="control-label">Review :</span>
																<div class="product-rating">
																	<div class="star on"></div>
																	<div class="star on"></div>
																	<div class="star on"></div>
																	<div class="star on"></div>
																	<div class="star"></div>
																</div>
															</div>	
														</div>
														
														<div class="item">
															<a href="#"><i class="zmdi zmdi-comments" aria-hidden="true"></i><span class="text">Read Reviews (3)</span></a>
														</div>
														
														<div class="item">
															<a href="#"><i class="zmdi zmdi-edit" aria-hidden="true"></i><span class="text">Write a review</span></a>
														</div>
													</div>
													
													<div class="product-extra">
														<div class="item">
															<span class="control-label">Review :</span><span class="control-label">E-02154</span>
														</div>
														<div class="item">
															<span class="control-label">Categories :</span>
															<a href="#" title="Vegetables">Vegetables,</a>
															<a href="#" title="Fruits">Fruits,</a>
															<a href="#" title="Apple">Apple</a>
														</div>
														<div class="item">
															<span class="control-label">Tags :</span>
															<a href="#" title="Vegetables">Hot Trend,</a>
															<a href="#" title="Fruits">Summer</a>			
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="product-tab">
											<!-- Tab Navigation -->
											<div class="tab-nav">
												<ul>
													<li class="active">
														<a data-toggle="tab" href="#description">
															<span>Description</span>
														</a>
													</li>
													<li>
														<a data-toggle="tab" href="#additional-information">
															<span>Additional Information</span>
														</a>
													</li>
													<li>
														<a data-toggle="tab" href="#review">
															<span>Review</span>
														</a>
													</li>
												</ul>
											</div>
											
											<!-- Tab Content -->
											<div class="tab-content">
												<!-- Description -->
												<div role="tabpanel" class="tab-pane fade in active" id="description">
												</div>
												
												<!-- Product Tag -->
												<div role="tabpanel" class="tab-pane fade" id="additional-information">
													
												</div>
												
												<!-- Review -->
												<div role="tabpanel" class="tab-pane fade" id="review">
													<div class="reviews">
														<div class="comments-list">
															<div class="item d-flex">
																<div class="comment-left">
																	<div class="avatar">
																		<img src="../assests/img/avatar.jpg" alt="" width="70" height="70">
																	</div>
																	<div class="product-rating">
																		<div class="star on"></div>
																		<div class="star on"></div>
																		<div class="star on"></div>
																		<div class="star on"></div>
																		<div class="star on"></div>
																	</div>
																</div>
																<div class="comment-body">
																	<div class="comment-meta">
																		<span class="author">Peter</span> - <span class="time">June 02, 2018</span>
																	</div>
																	<div class="comment-content">Look at the sunset, life is amazing, life is beautiful, life is what you make it. To succeed you must believe. When you believe, you will succeed. In life there will be road blocks but we will over come it. Celebrate success right, the only way, apple. The ladies always say Khaled you smell good, I use no cologne. Cocoa butter is the key. </div>
																</div>
															</div>
															
															<div class="item d-flex">
																<div class="comment-left">
																	<div class="avatar">
																		<img src="../assests/img/avatar.jpg" alt="" width="70" height="70">
																	</div>
																	<div class="product-rating">
																		<div class="star on"></div>
																		<div class="star on"></div>
																		<div class="star on"></div>
																		<div class="star on"></div>
																		<div class="star"></div>
																	</div>
																</div>
																<div class="comment-body">
																	<div class="comment-meta">
																		<span class="author">Merry</span> - <span class="time">June 17, 2018</span>
																	</div>
																	<div class="comment-content">Look at the sunset, life is amazing, life is beautiful, life is what you make it. To succeed you must believe. When you believe, you will succeed. In life there will be road blocks but we will over come it. Celebrate success right, the only way, apple. The ladies always say Khaled you smell good, I use no cologne. Cocoa butter is the key. </div>
																</div>
															</div>
														</div>
														
														<div class="review-form">
															<h4 class="title">Write a review</h4>
															
															<form action="#" method="post" class="form-validate">
																<div class="form-group">
																	<div class="text">Your Rating</div>
																	<div class="product-rating">
																		<div class="star"></div>
																		<div class="star"></div>
																		<div class="star"></div>
																		<div class="star"></div>
																		<div class="star"></div>
																	</div>
																</div>
																
																<div class="form-group">
																	<div class="text">You review<sup class="required">*</sup></div>
																	<textarea id="comment" name="comment" cols="45" rows="6" aria-required="true"></textarea>
																</div>
																
																<div class="form-group">
																	<button class="btn btn-primary">Send your review</button>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<!-- Related Products -->
							<div class="products-block related-products">
								<div class="block-title">
									<h2 class="title">Related <span>Products</span></h2>
								</div>
								
								<div class="block-content">
									<div class="products owl-theme owl-carousel">
										<?php 

											foreach ($res2 as $key => $value) {
											
											
?>
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<?php 
														$image=explode(',',$value[4]);
													?>
													<img src="../assests/img/product1/<?php echo $image[0];unset($image); ?>" alt="Product Image">
												</a>
											</div>
											
											<div class="product-title">
												<a href="#">
													<?php echo $value[6] ?>
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
<?php
    // }
// }
?> 