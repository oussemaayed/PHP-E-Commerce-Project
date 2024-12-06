
<?php
	session_start();
	require_once("../model/Class/contact.php");
	require_once("../model/Class/admin.php");
	if (isset($_SESSION['login'])&& isset($_SESSION['password']))
		{
	$admin=new admin();
	$rech=$admin->verifAdmin($_SESSION['login'],$_SESSION['password']);
	$n=$rech->fetchColumn(0);
	if($n==0){
	header("location:admin.php");
	}else{
	$con=new Contact();
	$row=$con->afficher();
	
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
						<h2 class="title">Liste Produit </h2>
						
						<ul class="breadcrumb">
							<li><a href="#" title="Home">Home</a></li>
							<li><span>Liste Produit</span></li>
						</ul>
					</div>
				</div>
			
				<div class="container">
				
					<div class="container page-cart">
						<div class="table-responsive">
							<table class="cart-summary table table-bordered">
								<thead>
									
								
									<tr>
										<th class="width-20">&nbsp;</th>
										<th class="width-20 text-center">Email</th>
										<th class="width-80 text-center">Message</th>
										<th class="width-20 text-center">Subject</th>
                                      
									</tr>
									
								</thead>
								
								<tbody>
								<?php
													foreach ($row as $key => $value) {
														
													

												?>
									<tr>
										
										<td class="text-center">
										
										<td>
											<?php echo $value[0]?>
										</td>
										<td>
											<?php echo $value[1]?>
										</td>
										<td class="text-center">
										<?php echo $value[2]?>
										</td>
		
									</tr>
									
									<?php
										include 'updatecontact.php';			}
									?>
								</tbody>
								
								
							</table>
						</div>
						
						<div class="checkout-btn right">
							<!-- Button trigger modal -->
						    
							<!-- Modal 1 -->
						
							
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
	}
}

else{
	header("location:admin.php");
	}
?>