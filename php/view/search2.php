<?php
session_start();

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'achats';

$conn = mysqli_connect($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

require_once("../model/Class/produit.php");

$prod=new Produit();
$res=$prod->afficherProduitVegetal();

$searchValue = $_GET['search'];
$searchQuery = "SELECT produit.*
                FROM produit 
                WHERE name LIKE '%$searchValue%' and categorie LIKE'Fruits'  ";
$searchResult = $conn->query($searchQuery);

if ($searchResult->num_rows > 0) {
    $_produits = [];
    while ($row = $searchResult->fetch_assoc()) {
        $_produits[] = $row;
    }

    foreach ($_produits as $value) {
        ?>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 product-item">
            <div class="product-item">
                <div class="product-image">
                    <?php $image = explode(',', $value['image']); ?>
                    <a href="product-detail-left-sidebar.html">
                        <img class="img-responsive" src="../assests/img/product1/<?php echo $image[0]; ?>" alt="Product Image">
                    </a>
                </div>

                <div class="product-title">
                    <a href="product-detail-left-sidebar.html">
                        <?php echo $value['name']; ?>
                    </a>
                </div>

                <div class="product-rating">
                <div class="star on"></div>
															<div class="star on"></div>
															<div class="star on "></div>
															<div class="star on"></div>
															<div class="star"></div>
														</div>
														
														<div class="product-price">
                    <?php
                    if ($value['prix'] > 0) {
                        ?>
                        <span class="sale-price"><?php echo $value['solde']; ?> dt</span>
                        <span class="base-price"><?php echo $value['prix']; ?> dt </span>
                        <?php
                    } else {
                        ?>
                        <span class="sale-price"><?php echo $value['base_price']; ?> dt</span>
                        <span class="base-price"><?php echo $value['sale_price']; ?> dt </span>
                        <?php
                    }
                    ?>
                </div>

                <div class="product-buttons">
                    <a class="add-to-cart" href="#">
                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                    </a>

                    <a class="add-wishlist" href="#">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </a>

                    <a class="quickview" href="#">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <?php
    }
}

$conn->close();
?>
