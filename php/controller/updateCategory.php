<?php
require_once("../model/Class/categorie.php");
$cat=new Categorie();
$cat->id=$_POST['id'];
$cat->nom=$_POST['name'];




// $res=$prod->afficherProduitByName($_POST["nom"]);
// $n=$res->fetchColumn(0);
// if($n==0){
    $cat->update($_POST['id'])  ; 
    //  }
    header("location:../view/gestioncategorie.php");
