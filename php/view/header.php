<?php
require_once("../model/Class/produit.php");


$prod = new Produit(); ?>
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
    <link rel="stylesheet" href="../assests/ibs/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assests/ibs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assests/libs/font-material/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../assests/libs/nivo-slider/css/nivo-slider.css">
    <link rel="stylesheet" href="../assests/ibs/nivo-slider/css/animate.css">
    <link rel="stylesheet" href="../assests/libs/nivo-slider/css/style.css">
    <link rel="stylesheet" href="../assests/libs/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../assests/ibs/slider-range/css/jslider.css">


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
                                <li class="dropdown">
                                    <a href="../../index.php" title="Homepage">Home</a>
                                </li>
                                <li class="dropdown">
                                    <a href="mainproduct.php" title="Product">Product</a>
                                    <div class="dropdown-menu">
                                   
                                    <div class="dropdown-menu">
												<ul>
													<li class="has-image">
														<img src="../assests/img/product/product-category-1.png" alt="Product Category Image">
														<a href="../view/product-grid-left-sidebarLegume.php" title="Vegetables">Vegetables</a>
													</li>
													<li class="has-image">
														<img src="../assests/img/product/product-category-2.png" alt="Product Category Image">
														<a href="../view/product-grid-left-sidebarFruit.php" title="Fruits">Fruits</a>
													</li>
													
													<li class="has-image">
														<img src="../assests/img/product/product-category-4.png" alt="Product Category Image">
														<a href="php/view/product-grid-left-sidebarJuice.php" title="Juices">Juices</a>
													</li>				
												</ul>
											</div>
                                    </div>
                                </li>
                                
                                <li class="dropdown">
                                    <a href="whishlists.php" title="Page">My Wishlists</a>
                                </li>
                                <li class="dropdown">
                                    <a href="blog-list-left-sidebar-.php">Blog</a>
                                </li>
                                <li>
                                    <a href="page-contact.php">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <!-- Header Center -->
                    <div class="col-lg-2 col-md-2 col-sm-12 header-center justify-content-center">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="../../index.php">
                                <img class="img-responsive" src="../assests/img/logo.png" alt="Logo">
                            </a>
                        </div>


                        <span id="toggle-mobile-menu"><i class="zmdi zmdi-menu"></i></span>
                    </div>




                    <!-- Header Right -->
                    <div class="col-lg-5 col-md-5 col-sm-12 header-right d-flex justify-content-end align-items-center">
                        <!-- Search -->
                        <div class="form-search">
                            <form action="#" method="get">
                                <input type="text" class="form-input" placeholder="Search" id="searchInput">
                                <button type="submit" class="fa fa-search"></button>
                            </form>
                        </div>


                        <?php 
								
								if(isset( $_SESSION['cart'])){
								
									
									$whereIn="";
									//$som=0;
									
									foreach($_SESSION['prix'] as $val)
										{
											//$som+=$val;
											
										}
										?>
										<?php
								
									foreach($_SESSION['cart'] as $val)
									{
										$whereIn.="'".$val."'".",";

									}
									$tab=array();
									$whereIn=substr($whereIn, 1, -2);
									$res5=$prod->ajoutepanier($whereIn);
									foreach ($res5 as $val) {
										array_push($tab,$val);
									}
							
									$count=sizeof($_SESSION['cart']);
									
									
								?>
								
								<!-- Cart -->
								<div class="block-cart dropdown" >
									<div class="cart-title">
										<i class="fa fa-shopping-basket" aria-hidden="true"></i>
										<span class="cart-count"><?php echo sizeof($_SESSION['cart'])?></span>
									</div>
									
									<div class="dropdown-content">
										<div class="cart-content">
											<table>
												<tbody>
												<?php
$tableau = array_count_values($_SESSION['cart']);
array_push($tableau, 0);
$t = implode(',', $tableau);

foreach ($tab as $key => $va) {
    if ($va[2] > 0) {
        $prix = $va[2];
    } else {
        $prix = $va[1];
    }
?>

    <tr>
        <td class="product-image">
            <?php
            $im = explode(',', $va[4]);
            ?>
            <a href="php/view/product-detail-left-sidebar.php?id=<?php echo $va[0] ?>">
                <img src="php/assests/img/product1/<?php echo $im[0] ?>" alt="Product">
            </a>
            <?php
            unset($im);
            ?>
        </td>
        <td>
            <div class="product-name">
                <a href=""><?php echo $va[6] ?></a>
            </div>
            <div>
                <span class="quantite">
                    <?php
                    $productId = $va[0];
                    $quantity = $tableau[$productId]; // Utilisez l'ID du produit pour obtenir la quantité correcte
                    echo $quantity;
                    ?>
                </span>
                <span class="product-price"><?php echo $prix; ?> dt</span>
            </div>
        </td>
        <td class="action">
            <a class="remove" href="php/controller/supppanier.php?id=<?php echo $va[0] ?>&prix=<?php echo $prix ?>">
                <i class="fa fa-trash-o" aria-hidden="true"></i>
            </a>
        </td>
    </tr>

<?php
}
?>





                                                <tr>
                                                    <td colspan="3">
                                                        <div class="cart-button">
                                                            <a class="btn btn-primary" href="#" title="View Cart">View
                                                                Cart</a>
                                                            <a class="btn btn-primary" href="product-checkout.html"
                                                                title="Checkout">Checkout</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <?php
                        } else {
                            ?>


                            <div class="block-cart dropdown">
                                <div class="cart-title">
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    <span class="cart-count">0</span>
                                </div>


                                <div class="dropdown-content">
                                    <div class="cart-content">
                                        <table>
                                            <tbody>
                                                <tr>


                                                    <td>
                                                        panier vide
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
        </div>
        </div>
    </header>
    <script src="../assests/libs/jquery/jquery.js"></script>
    <script src="../assests/libs/bootstrap/js/bootstrap.js"></script>
    <script src="../assests/libs/jquery.countdown/jquery.countdown.js"></script>
    <script src="../assests/libs/nivo-slider/js/jquery.nivo.slider.js"></script>
    <script src="../assests/libs/owl.carousel/owl.carousel.min.js"></script>
    <script src="../assests/libs/slider-range/js/tmpl.js"></script>
    <script src="../assests/libs/slider-range/js/jquery.dependClass-0.1.js"></script>
    <script src="../assests/libs/slider-range/js/draggable-0.1.js"></script>
    <script src="../assests/libs/slider-range/js/jquery.slider.js"></script>
    <script src="../assests/libs/elevatezoom/jquery.elevatezoom.js"></script>



    <!-- Template CSS -->
    <script src="../assests/js/main.js"></script>
</body>


</html>

