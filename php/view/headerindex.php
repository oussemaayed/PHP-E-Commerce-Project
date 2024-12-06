<div class="container">
					<div class="header-top">
						<div class="row align-items-center">
							<!-- Header Left -->
							<div class="col-lg-5 col-md-5 col-sm-12">
								<!-- Main Menu -->
								<div id="main-menu">
									<ul class="menu">
										<li class="dropdown">
											<a href="index.php" title="Homepage">Home</a>
											
										</li>
										
										<li class="dropdown">
											<a href="php/view/mainproduct.php" title="Product">Product</a>
											<div class="dropdown-menu">
												<ul>
													<li class="has-image">
														<img src="php/assests/img/product/product-category-1.png" alt="Product Category Image">
														<a href="php/view/product-grid-left-sidebarLegume.php" title="Vegetables">Vegetables</a>
													</li>
													<li class="has-image">
														<img src="php/assests/img/product/product-category-2.png" alt="Product Category Image">
														<a href="php/view/product-grid-left-sidebarFruit.php" title="Fruits">Fruits</a>
													</li>
													
													<li class="has-image">
														<img src="php/assests/img/product/product-category-4.png" alt="Product Category Image">
														<a href="php/view/product-grid-left-sidebarJuice.php" title="Juices">Juices</a>
													</li>
													
												</ul>
											</div>
										</li>
										
										<li class="dropdown">
											<a href="php/view/whishlists.php" title="Page">My Wishlists</a>
											
												
										</li>
										
										<li class="dropdown">
											<a href="php/view/blog-list-left-sidebar-.php" >Blog</a>
											
										</li>
										<?php 
											if(isset($_SESSION['email'] )&& isset($_SESSION['motpass'])){
										?>
										
										<?php
												}
										?>
										<li>
											<a href="php/view/page-contact.php">Contact</a>
										</li>
									</ul>
								</div>
							</div>
							
							<!-- Header Center -->
							<div class="col-lg-2 col-md-2 col-sm-12 header-center justify-content-center">
								<!-- Logo -->		
								<div class="logo">
									<a href="index.php">
										<img class="img-responsive" src="php/assests/img/logo.png" alt="Logo">
									</a>
								</div>
								
								<span id="toggle-mobile-menu"><i class="zmdi zmdi-menu"></i></span>
							</div>
							
							
							<!-- Header Right -->
							<div class="col-lg-5 col-md-5 col-sm-12 header-right d-flex justify-content-end align-items-center">
								<!-- Search -->							
								<div class="form-search">
									<form action="#" method="get">
										<input type="text" class="form-input" placeholder="Search">
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
													
													<!-- <tr class="total">
														<td>Total:</td>
														<td colspan="2">
														
													</td>
													</tr> -->
													
													<tr>
														<td colspan="3">
															<div class="cart-button">
																<a class="btn btn-primary" href="php/view/product-cart.php" title="View Cart">View Cart</a>
																<a class="btn btn-primary" href="php/view/product-checkout.php" title="Checkout">Checkout</a>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<?php
									}
									else{
								?>

									<div class="block-cart dropdown" >
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
								
								<!-- My Account -->
								<div class="my-account dropdown toggle-icon">
									<div class="dropdown-toggle" data-toggle="dropdown">
										<i class="zmdi zmdi-menu"></i>
									</div>
									<div class="dropdown-menu">	
									<?php 
									
									if (isset($_SESSION['email']) && isset($_SESSION['code'])){

										?>
										<div class="item">
											<a href="#" ><i class="fa fa-cog"></i><?php echo  $_SESSION["email"] ?>  </a>
										</div>
									<div class="item">
											<a href="php/controller/logout.php" title="Log out to your home "><i class="fa fa-cog"></i>LogOut  </a>
										</div>
										<div class="item">
											<a href="php/view/compte.php" title="go to your account"><i class="fa fa-cog"></i>myAccount  </a>
										</div>
										<?php
									}
									
									else{
										?>
								
										<div class="item">
											<a href="php/view/user-login.php" title="Log in to your customer account"><i class="fa fa-sign-in"></i>Login</a>
										</div>
										<div class="item">
											<a href="php/view/user-register.php" title="Register Account"><i class="fa fa-user"></i>Register</a>
										</div>
										<div class="item">
											<a href="php/view/whishlists.php" title="My Wishlists"><i class="fa fa-heart"></i>My Wishlists</a>
										</div>	
										<div class="item">
											<a href="php/view/admin.php" title="My Wishlists"><i class="fa fa-sign-in"></i>Login as admin</a>
										</div>		
										<?php

									}
									?>
									
										<div class="item">
											<!-- Language -->
											<div class="language switcher">
												<a href="#" title="Language English" class="active"><img src="php/assests/img/language-en.jpg" alt="Language English"></a>
												<a href="#" title="Language French"><img src="php/assests/img/language-fr.jpg" alt="Language French"></a>
												<a href="#" title="Language Deutsch"><img src="php/assests/img/language-de.jpg" alt="Language Deutsch"></a>
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