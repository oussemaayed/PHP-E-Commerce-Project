
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
	$prod=new Produit();
	$row=$prod->afficherProduit();
	
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
								Add Product
						</button>
				</div>
					<div class="container page-cart">
						<div class="table-responsive">
							<table class="cart-summary table table-bordered">
								<thead>
									
								
									<tr>
										<th class="width-20">&nbsp;</th>
										<th class="width-20 text-center">id</th>
										<th class="width-80 text-center">Image</th>
										<th class="width-20 text-center">Name</th>
										<th class="width-20 text-center">prix</th>
										<th class="width-20 text-center">solde</th>
										<th class="width-100 text-center">description</th>
										<th class="width-20 text-center">categorie</th>
                                        <th class="width-80 text-center fixed-center">Update</th>
									</tr>
									
								</thead>
								
								<tbody>
								<?php
													foreach ($row as $key => $value) {
														
													

												?>
									<tr>
										<td class="product-remove">
											<a title="Remove this item" class="remove" href="../controller/suppProduit.php?id=<?php echo $value[0];?>">
												<i class="fa fa-times"></i>
											</a>
										</td>
										<td class="text-center">
										<?php echo $value[0]?>
										</td>
										<td>
											<a href="product-detail-left-sidebar.php?id=<?php echo $value[0] ?>">
												<?php
												$pieces=explode(",",$value[4]);
												
												?>
												<img width="80" alt="Product Image" class="img-responsive" src="../assests/img/product1/<?php echo $pieces[0]?>">
												<?php
												unset($pieces);
												?>
											</a>
										</td>
										</td>
										
										<td>
											<?php echo $value[6]?>
										</td>
										<td class="text-center">
										<?php echo $value[1]?>
										</td>
										<td>
											<?php echo $value[2]?>
										</td>
										<td>
											<div class="product-quantity">
												<div class="qty">
												<?php echo $value[3]?>
												</div>
											</div>
										</td>
									
										<td class="text-center">
										<?php echo $value[5]?>    
										</td>
                                    <td>
                        <a href="#exampleModal1:id=?<?php echo $value[0]?>">	<button class=" btn btn-danger"  data-toggle="modal" data-target="#exampleModal1<?php echo $value[0]; ?>" >Update  </button></a>
                                    </td>
									</tr>
									
									<?php
										include 'updateproduit.php';			}
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
								<form enctype="multipart/form-data" action ="../controller/addProduit.php" method="POST" >
						
								<!-- <div class="form-group">
										
										<input type="text"  class="form-control hidden" name="id" >
										
									</div> -->
									<div class="form-group">
										<label for="exampleInputName">id de produit</label>
										<input type="text" class="form-control" name="id" id="id" aria-describedby="nameHelp" placeholder="Enter nom produit">
										<small id="nameHelp" class="form-text text-muted">enter id du produit </small>
									</div>

								<div class="form-group">
										<label for="exampleInputName">Nom de produit</label>
										<input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Enter nom produit">
										<small id="nameHelp" class="form-text text-muted">enter nom du produit </small>
									</div>

									<div class="form-group">
										<label for="exampleInputPrix">Prix de produit</label>
										<input type="number" class="form-control" id="prix" name="prix" aria-describedby="prixHelp" placeholder="Enter prix produit">
										<small id="prixHelp" class="form-text text-muted">enter prix du produit </small>
									</div>

									<div class="form-group">
										<label for="exampleInputSolde">Solde de produit</label>
										<input type="number" class="form-control" value="0" id="solde" name="solde" aria-describedby="soldeHelp" placeholder="Enter solde produit">
										<small id="soldeHelp" class="form-text text-muted">enter solde du produit </small>
									</div>

									<div class="form-group">
									<label for="story">description</label>

									<textarea id="desc" name="description"
									class="form-control"	>
									
									</textarea>
									</div>

									<div class="form-group">
										<label for="exampleInputcat" >Categorie de produit</label>
										<?php
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "achats";

$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

if ($connexion->connect_error) {
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
}

$sql = "SELECT nom FROM categorie";
$resultat = $connexion->query($sql);

if ($resultat->num_rows > 0) {
 
    echo '<select name="categorie" class="form-control">';
    
    while ($row = $resultat->fetch_assoc()) {
        
        echo '<option value="' . htmlspecialchars($row['nom']) . '">' . htmlspecialchars($row['nom']) . '</option>';
    }
    
    echo '</select>';
} else {
    echo 'Aucune catégorie trouvée dans la base de données.';
}


$connexion->close();
?>
									
									</div>

									<div class="form-group">
										<label for="exampleInputImage">Image</label>
										<input type="file" class="form-control" id="exampleInputImage"  name="image[]" multiple=""  />
										
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