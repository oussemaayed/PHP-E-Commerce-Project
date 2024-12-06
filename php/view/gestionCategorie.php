
<?php
	session_start();
	require_once("../model/Class/produit.php");
	require_once("../model/Class/admin.php");
	require_once("../model/Class/categorie.php");
	if (isset($_SESSION['login'])&& isset($_SESSION['password']))
		{
	$admin=new admin();
	$rech=$admin->verifAdmin($_SESSION['login'],$_SESSION['password']);
	$n=$rech->fetchColumn(0);
	if($n==0){
	header("location:admin.php");
	}else{
	$cat=new Categorie();
	$row=$cat->afficherCategorie();
	
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
				<div >		
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
								Add Category
						</button>
				</div>
					<div class="container page-cart">
						<div class="table-responsive">
							<table class="cart-summary table table-bordered">
								<thead>
									
								
									<tr>
										<th class="width-20">&nbsp;</th>
										<th class="width-20 text-center">Name</th>
                                        <th class="width-80 text-center fixed-center">Update</th>
									</tr>
									
								</thead>
								
								<tbody>
								<?php
													foreach ($row as $key => $value) {
														
													

												?>
									<tr>
                                        
										<td class="product-remove">
											<a title="Remove this item" id="id" class="remove" href="../controller/suppcategorie.php?id=<?php echo $value[0];?>">
												<i class="fa fa-times"></i>
											</a>
										</td>
									
										
										
										<td>
											<?php echo $value[1]?>
										</td>
									
                                    <td>
                        <a href="#exampleModal1:id=?<?php echo $value[0]?>">	<button class=" btn btn-danger"  data-toggle="modal" data-target="#exampleModal1<?php echo $value[0]; ?>" >Update  </button></a>
                                    </td>
									</tr>
									
									<?php
										include 'updatecategorie.php';			}
									?>
								</tbody>
								
								
							</table>
						</div>
						
						<div class="checkout-btn right">
							<!-- Button trigger modal -->
						    
							<!-- Modal 1 -->
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
								<form enctype="multipart/form-data" action ="../controller/addCategory.php" method="POST" >
						
								<!-- <div class="form-group">
										
										<input type="text"  class="form-control hidden" name="id" >
										
									</div> -->
									<div class="form-group">
										<label for="exampleInputName">id of categorie</label>
										<input type="text" class="form-control" name="id" id="id" aria-describedby="nameHelp" placeholder="Enter nom produit">
										<small id="nameHelp" class="form-text text-muted">enter id of categorie </small>
									</div>

								<div class="form-group">
										<label for="exampleInputName">Name of category</label>
										<input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Enter nom produit">
										<small id="nameHelp" class="form-text text-muted">enter name of categorie </small>
									</div>

								

																		
									<button type="submit" id="verif"  class="btn btn-primary">verif</button>
								 </form>
								<!--onclick="window.location.href='php/controller/addProduit.php '" -->
																	</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									
								</div>
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
	}
}

else{
	header("location:admin.php");
	}
?>