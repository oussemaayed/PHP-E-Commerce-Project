<?php
require_once("../model/Class/produit.php");
session_start();
$prod=new Produit();
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
						<h2 class="title">Contact</h2>
						
						<ul class="breadcrumb">
							<li><a href="#" title="Home">Home</a></li>
							<li><span>Contact</span></li>
						</ul>
					</div>
				</div>
			
				<div class="container">
					<div class="contact-page">
						<div class="contact-info">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="item d-flex">
										<div class="item-left">
											<div class="icon"><i class="zmdi zmdi-email"></i></div>
										</div>
										<div class="item-right d-flex">
											<div class="title">Email:</div>
											<div class="content">
												<a href="mailto:support@domain.com">ENIS</a><br>
												<a href="mailto:contact@domain.com">bayrem&oussema</a>
											</div>
										</div>
									</div>
								</div>
								

					
						
						<div class="contact-intro">
							<img src="../assests/img/contact-icon.png" alt="Contact Comment">
						</div>
						
						<div class="contact-form form">
							<form action="../controller/addContact.php" method="POST" enctype="multipart/form-data">
								<div class="form-group row">
								
									
									<div class="col-md-12">
										<input type="email" name="email" required  placeholder="YOUR EMAIL">
									</div>
								</div>
								
								<div class="form-group">
									<input type="text" name="sujet" required placeholder="SUBJECT">
								</div>
								
								<div class="form-group">
									<textarea rows="10" name="message"  required placeholder="MESSAGE"></textarea>
								</div>
								
								<div class="form-group text-center">
									<input type="submit" class="btn btn-primary" value="Send Message">
								</div>
							</form>
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