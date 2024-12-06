<?php

session_start();
require_once("php/model/Class/produit.php");
require_once("php/model/Class/comments.php");

$prod=new Produit();
$com=new Comments();
$res=$com->afficherNomClientBycommentaire();
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
		<link rel="shortcut icon" href="img/favicon.png" type="image/png">
		
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
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/reponsive.css">
	</head>
	
	<body class="home home-4">
		<div id="all">
		<header>
				<?php
			  
  include 'header.PHP';
			  
			  
			  
			  ?>
			  </header>
				

				<!-- Latest News -->
				<div class="section latest-news layout-2">
					<div class="block-title">
						<h2 class="title">Our <span>Commentaires</span></h2>
						<div class="sub-title">Les commentaires de nos clients</div>
					</div>
					
					<div class="block-content">
						<div class="container">
                            <?php 
                             
                                foreach ($res as $key => $value) {
                                  
                            ?>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="blog-item">
										<div class="blog-image">
											<a href="blog-detail.html" class="zoom-effect">
												<img src="img/client.jpg" width="80px" alt="Blog Image">
											</a>		
										</div>
										<div class="blog-info">
											<div class="blog-time">
												<span><i class="zmdi zmdi-comments"></i> <?php echo $value[0] ?></span>
												<span><i class="zmdi zmdi-calendar-note"></i><?php echo date('Y-m-d')?></span>
											</div>
											<div class="blog-title"><a href="blog-detail.html"><?php echo $value[0]; echo  $value[1] ?></a></div>
											<div class="blog-desc"><?php echo $value[2] ?></div>
											
										</div>
									</div>
                                
								</div>
								<?php
                                }
                                ?>
							
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
		<script src="js/main.js"></script>
	</body>


</html>