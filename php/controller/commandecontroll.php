<?php
require_once("../model/Class/commande.php");
session_start();
$com = new Commande();

if (isset($_POST['proceed'])) {
    $com->id_client = $_POST['id_client'];
    $com->adresse = $_POST['adresse'];
    $com->prix_total = $_POST['prix_total'];
    $com->products = $_POST['products'];

    // Appeler la méthode pour ajouter la commande à la base de données
    $com->ajouterCommande();

    // Set session variables if needed
    $_SESSION['id_client'] = $com->id_client;
    $_SESSION['adresse'] = $com->adresse;
    $_SESSION['prix_total'] = $com->prix_total;
    $_SESSION['products'] = $com->products;

    // Redirect after processing the form
    header("location:../view/product-checkout.php");
    exit(); // Make sure to exit after sending the header
}
?>
