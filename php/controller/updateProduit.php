<?php
require_once("../model/Class/produit.php");

$prod = new Produit();
$prod->name = $_POST['nom'];
$prod->prix = $_POST['prixupdate'];
$prod->solde = $_POST["soldeupdate"];
$prod->description = $_POST['description'];
$prod->categorie = $_POST['categorie'];

$img = array();

foreach ($_FILES['imageupdate']['name'] as $key => $value) {
    array_push($img, $value);
    $target = "../view/img/product1/" . basename($value);
    move_uploaded_file($_FILES['imageupdate']['tmp_name'][$key], $target);
}

$prod->image = implode(",", $img);

try {
    // Attempt to update the product
    // $res = $prod->afficherProduitByName($_POST["nom"]);
    // $n = $res->fetchColumn(0);
    // if ($n == 0) {
    $prod->update($_POST['id']);
    // }

    header("location:../view/gestionProduit.php");
    exit(); // Make sure to exit after redirect
} catch (PDOException $e) {
    // If there's a database error
    header("location:../view/page-404.html?message=DatabaseError");
    exit();
}
?>










?>