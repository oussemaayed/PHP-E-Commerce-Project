<?php
require_once("../model/Class/categorie.php");

$cat = new Categorie();
$cat->id = $_POST["id"];
$cat->nom = $_POST["name"];

try {
    // Attempt to add the category
    $cat->ajouterCategory();
} catch (PDOException $e) {
    // If there's a duplicate primary key violation
    if ($e->getCode() == 23000) {
        // Redirect to an error page with a message
        header("location:../view/page-404.html?message=DuplicatePrimaryKeyError");
        exit(); // Make sure to exit after redirect
    } else {
        // If it's a different database error, you might want to handle it accordingly
        // For now, you can redirect to a generic error page
        header("location:../view/page-404.html?message=DatabaseError");
        exit();
    }
}

// If everything is successful, redirect to the category management page
header("location:../view/gestionCategorie.php");
?>
