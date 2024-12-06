
<?php

session_start();
require_once("../model/Class/produit.php");

$prod=new Produit();
@$id=$_GET['id']


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
			<!-- Header -->
			<header>
			<?php	
	include "header.php";?>
			  </header>
			
			<!-- Main Content -->
			<div id="content" class="site-content">
				<!-- Breadcrumb -->
				<div id="breadcrumb">
					<div class="container">
						<h2 class="title">Like Produit </h2>
						
						<ul class="breadcrumb">
							<li><a href="../index.php" title="Home">Home</a></li>
							<li><span>Like Produit</span></li>
						</ul>
					</div>
				</div>
			
				<div class="container">
					<div class="page-cart">
						<div class="table-responsive">
							<table class="cart-summary table table-bordered">
								<thead>
									<tr>
										<th class="width-20">Like</th>
										<th class="width-80 text-center">Image</th>
										<th class="width-20 text-center">Name</th>
										
										<!-- <th class="width-100 text-center">Like</th> -->
										
									</tr>
								</thead>
								<?php 
								//unset( $_SESSION['whislist']);
								if(isset( $_SESSION['whislist'])){

									$whereIn2="";
	
									foreach($_SESSION['whislist'] as $valuee)
									{
										$whereIn2.="'".$valuee."'".",";

									}
									$list=array();
									$whereIn2=substr($whereIn2, 1, -2);
									$res6=$prod->ajoutepanier($whereIn2);
									foreach ($res6 as $v) {
										array_push($list,$v);
									}
		
								?>
								<tbody>
									<?php 

									foreach ($list as $key => $val) {
										if($val[2]>0){
											$prix=$val[2];
										}else{
											$prix=$val[1];
										}
														
										?>
									<tr >
										<td>
                                        <img width="80" alt="Product Image" class="img-responsive" src="../assests/img/like.gif">
                                    </td>
										<td>
											<a href="product-detail-left-sidebar.php?id=<?php echo $val[0]?>">
											<?php $image=explode(',',$val[4]);?>
												<img width="80" alt="Product Image" class="img-responsive" src="../assests/img/product1/<?php echo $image[0];unset($image); ?>">
											</a>
										</td>
										<td>
											<a href="product-detail-left-sidebar.html" class="product-name text-center"><?php echo $val[6];?></a>
										</td>
										
										<!-- <td>
											<div class="product-quantity">
												<div class="like">
													<div class="input-group">
													
                                                        
													</div>
												</div>
											</div>
										</td> -->
										
									</tr>
									<?php
										}
                                
									?>
								</tbody>
								<?php
										
                                    }
									?>
								<tfoot>
									
									
								</tfoot>
							</table>
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