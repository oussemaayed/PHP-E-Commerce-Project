<?php
session_start();
require_once("../model/Class/produit.php");
require_once("../model/Class/client.php");
require_once("../model/Class/commande.php");

if (isset($_SESSION['email']) && isset($_SESSION['motpass'])) {
    $prod = new Produit();
    $client = new Client();
    $com = new Commande();
    $res = $client->getClientByData($_SESSION['email'], $_SESSION['motpass']);
    $res1 = $prod->afficherProduitVegetal("vegtables");
    $res2 = $prod->afficherProduitFruit("fruits");
    $res3 = $prod->afficherProduitJuice("juice");
    $res4 = $prod->afficherProduit();
    $prod = new Produit();
    @$id = $_GET['id'];
    $som = 0;

    // Placeholder for fetching or calculating $tab and $t
    // Replace this with your actual logic to get cart information
    $tab = [];
    $t = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['save_address'])) {
            // Le bouton "Save" a été cliqué, stockez temporairement les informations d'adresse dans une variable de session
            $_SESSION['temp_address'] = $_POST['adresse'];
        }
    }
}
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

		
			
				<div class="container">
					<div class="page-checkout">
						<div class="row">
							<div class="checkout-left col-lg-9 col-md-9 col-sm-9 col-xs-12">
								<p>Returning customer? <a class="login" href="user-login.html">Click here to login</a>.</p>
								<div class="panel-group" id="accordion">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
													Address
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="accordion-body collapse" style="height: 0px;">
											<div class="panel-body">
											<?php
// Initialize the total sum
$totalSum = 0;
$selectedProducts = array(); // Array to store selected product names

// Iterate over the $tab array
foreach ($tab as $key => $value) {
    if ($value[2] > 0) {
        $prix = $value[2];
    } else {
        $prix = $value[1];
    }

    // Calculate the total for the current item
    $itemTotal = $t[$key] * $prix;

    // Add the current item total to the overall sum
    $totalSum += $itemTotal;

    // Store the name of the selected product
    $selectedProducts[] = $t[$key] . ' ' . $value[6];
    ?>
    <!-- Your other HTML/PHP code for displaying each item in the loop goes here -->
    <?php
}

// Display the total sum in the table footer
?>

<?php
// Now $selectedProducts contains all the names of the selected products

// Store the data in $products as a comma-separated string
$products = implode(', ', $selectedProducts);

// You can use $products as needed, for example, to display the names or perform other actions.
?>

											<form action="../controller/commandecontroll.php" method="post" enctype="multipart/form-data" class="form-horizontal">
    <div class="form-group">
        <div class="col-md-12">
            <label>Country</label>
            <select class="form-control">
                <option value="">Select a country</option>
                <option value="australia">Australia</option>
                <option value="brazil">Brazil</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <label>identifiant</label>
            <input type="text" value="" required name="id_client" class="form-control">
        </div>
        <input type="hidden" name="prix_total" value="<?php echo $totalSum; ?>">
		<input type="hidden" name="products" value="<?php echo $products; ?>">
        <div class="form-group">
            <div class="col-md-12">
                <label>Address</label>
                <input type="text" value="" required name="adresse" class="form-control">
            </div>
            <div class="pull-right">
                <input type="submit" value="Place Order" name="proceed" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
													Payment
												</a>
											</h4>
										</div>
										<div id="collapseThree" class="accordion-body collapse" style="height: 0px;">
											<div class="panel-body">
												<table class="cart-summary table table-bordered">
													<thead>
														<tr>
															<th class="width-80 text-center">Image</th>
															<th>Name</th>
															<th class="width-100 text-center">Unit price</th>
															<th class="width-100 text-center">Qty</th>
															<th class="width-100 text-center">Total</th>
														</tr>
													</thead>
													
													<tbody>
									<?php 

									foreach ($tab as $key => $value) {
										if($value[2]>0){
											$prix=$value[2];
										}else{
											$prix=$value[1];
										}
														
										?>
									<tr >
										<td class="product-remove" >
											<a title="Remove this item" class="remove" href="../controller/removePanierCart.php?id=<?php echo $value[0]?>&prix=<?php echo $prix ?>">
												<i class="fa fa-times"></i>
											</a>
										</td>
										<td>
											<a href="product-detail-left-sidebar.php?id=<?php echo $value[0]?>">
											<?php $image=explode(',',$value[4]);?>
												<img width="80" alt="Product Image" class="img-responsive" src="../assests/img/product1/<?php echo $image[0];unset($image); ?>">
											</a>
										</td>
										<td>
											<a href="product-detail-left-sidebar.html" class="product-name"><?php echo $value[6];?></a>
										</td>
										<td class="text-center">
											<?php  echo $prix?>
										</td>
										<td>
											<div class="product-quantity">
												<div class="qty">
													<div class="input-group">
													<?php
                                                            $t=explode(',',$test);
															echo $t[$key];
                                                            ?>
                                                        
													</div>
												</div>
											</div>
										</td>
										<td class="text-center">
										<?php
                                                            
															echo $t[$key]*$prix;
                                                            ?>
										</td>
									</tr>
									<?php
										}
									?>
								</tbody>
												</table>

												<h4 class="heading-primary">Cart Total</h4>
												<table class="table cart-total">
												<tfoot>
									
									
	<tfoot>
	
		<tr class="cart-total">
			<td colspan="2" class="total text-right">Total</td>
			<td colspan="4" class="total text-center"><?php echo $totalSum; ?></td>
		</tr>
	</tfoot>
													</tbody>
												</table>

												<h4 class="heading-primary">Payment</h4>
												<form action="#" method="post">
													<div class="item">
														<input type="checkbox">Pay by bank wire (order processing will be longer)
													</div>
													<div class="item">
														<input type="checkbox">Pay by check (order processing will be longer)
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							

								
							

							
						
					</div>
				</div>
				
			</div>
		
			
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