<?php
require_once("../model/Class/categorie.php");
$cat=new Categorie();
$cat->delete($_GET['id']);
header("location:../view/gestionCategorie.php");

?>