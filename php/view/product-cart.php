
<?php

session_start();
require_once("../model/Class/produit.php");

$prod=new Produit();
@$id=$_GET['id'];
$som=0;

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
						<h2 class="title">Shopping Cart</h2>
						
						<ul class="breadcrumb">
							<li><a href="../../index.php" title="Home">Home</a></li>
							<li><span>Shopping Cart</span></li>
						</ul>
					</div>
				</div>
			
				<div class="container">
					<div class="page-cart">
						<div class="table-responsive">
							<table class="cart-summary table table-bordered">
								<thead>
									<tr>
										<th class="width-20">&nbsp;</th>
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
											<a href="product-detail-left-sidebar.php" class="product-name"><?php echo $value[6];?></a>
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
								
								<tfoot>
									
								<?php
// Initialize the total sum
$totalSum = 0;

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
    ?>
    <tr>
        <!-- ... Your existing table rows ... -->
        <td class="text-center">
            <?php echo $itemTotal; ?>
        </td>
    </tr>
    <?php
}

// Display the total sum in the table footer
?>
<tfoot>
    <tr class="cart-total">
        <td colspan="2" class="total text-right">Total</td>
        <td colspan="4" class="total text-center"><?php echo $totalSum; ?></td>
    </tr>
</tfoot>
</table>
</div>

								</tfoot>
							</table>
						</div>
						
						<div class="checkout-btn">
							<a href="product-checkout.php" class="btn btn-primary pull-right" title="Proceed to checkout">
								<span>Proceed to checkout</span>
								<i class="fa fa-angle-right ml-xs"></i>
							</a>
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