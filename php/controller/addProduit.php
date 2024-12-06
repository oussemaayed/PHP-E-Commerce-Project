<?php
require_once("../model/Class/produit.php");

$prod = new Produit();
$prod->id = $_POST["id"];
$prod->name = $_POST["name"];
$prod->prix = $_POST['prix'];
$prod->solde = $_POST["solde"];
$prod->description = $_POST['description'];
$prod->categorie = $_POST['categorie'];
$img = array();

foreach ($_FILES['image']['name'] as $key => $value) {
    array_push($img, $value);
    $target = "../assests/img/product1/" . basename($value);
    move_uploaded_file($_FILES['image']['tmp_name'][$key], $target);
}

$prod->image = implode(",", $img);

try {
    // Attempt to add the product
    $res = $prod->afficherProduitByName($_POST["name"]);
    $n = $res->fetchColumn(0);
    if ($n == 0 && !empty($prod->name)) {
        $prod->ajouterProduit();
    }
} catch (PDOException $e) {
    // If there's a duplicate entry violation
    if ($e->getCode() == 23000) {
        // Redirect to an error page with a message
        header("location:../view/page-404.html?message=DuplicateEntryError");
        exit(); // Make sure to exit after redirect
    } else {
        // If it's a different database error, you might want to handle it accordingly
        // For now, you can redirect to a generic error page
        header("location:../view/page-404.html?message=DatabaseError");
        exit();
    }
}

// If everything is successful, redirect to the product management page
header("location:../view/gestionProduit.php");
?>
