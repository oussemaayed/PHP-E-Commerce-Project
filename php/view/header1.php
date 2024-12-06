<?php
require_once("../model/Class/produit.php");
$prod = new Produit();?>
<!DOCTYPE html>
<html lang="en">


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
    <body>
	<!-- Topbar -->
    <header id="header">
				<div class="container">
					<div class="header-top">
						<div class="row align-items-center">
							<!-- Header Left -->
							<div class="col-lg-5 col-md-5 col-sm-12">
								<!-- Main Menu -->
								<div id="main-menu">
									<ul class="menu">
										
										
										
						
									</ul>
								</div>
							</div>
							
							<!-- Header Center -->
							<div class="col-lg-2 col-md-2 col-sm-12 header-center justify-content-center">
								<!-- Logo -->		
								<div class="logo">
									<a href="adminwork.php">
										<img class="img-responsive" src="../assests/img/logo.png" alt="Logo">
									</a>
								</div>
								
								<span id="toggle-mobile-menu"><i class="zmdi zmdi-menu"></i></span>
							</div>
							
							
							<!-- Header Right -->
							<div class="col-lg-5 col-md-5 col-sm-12 header-right d-flex justify-content-end align-items-center">
								<!-- Search -->							
								
								
								<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

								
								<!-- My Account -->
								<div class="my-account dropdown toggle-icon">
									<div class="dropdown-toggle" data-toggle="dropdown">
										<i class="zmdi zmdi-menu"></i>
									</div>
									<div class="dropdown-menu">	
									
									
									
										<div class="item">
											<a href="#" ><i class="fa fa-cog"></i><?php echo  $_SESSION["login"] ?>  </a>
										</div>
									<div class="item">
											<a href="../controller/logout.php" title="Log out to your home "><i class="fa fa-cog"></i>LogOut  </a>
										</div>
										<div class="item">
											<a href="#" title="go to your account"><i class="fa fa-cog"></i>myAccount  </a>
										</div>
										<script>
			$(document).ready(function () {
    $('.dropdown-toggle').dropdown();
});
</script>
								
										
									
										<div class="item">
											<!-- Language -->
											<div class="language switcher">
												<a href="#" title="Language English" class="active"><img src="../assests/img/language-en.jpg" alt="Language English"></a>
												<a href="#" title="Language French"><img src="../assests/img/language-fr.jpg" alt="Language French"></a>
												<a href="#" title="Language Deutsch"><img src="../assests/img/language-de.jpg" alt="Language Deutsch"></a>
											</div>
											
											<!-- Currency -->
											<div class="currency switcher">
												<a href="#" title="USD" class="active">USD</a>
												<a href="#" title="EUR">EUR</a>
												<a href="#" title="GBP">GBP</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</header>
			
                <script src="libs/jquery/jquery.js"></script>
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
