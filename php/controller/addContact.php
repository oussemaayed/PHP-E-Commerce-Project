<?php
require_once("../model/Class/contact.php");
$con=new Contact();
$con->email=$_POST["email"];
$con->message=$_POST["message"];
$con->subject=$_POST['sujet'];


$res=$con->afficherContactByemail($_POST["email"]);
$n=$res->fetchColumn(0);
if($n==0 && (!empty($con->email))){
 $con->ajouterContact()  ; 
}

header("location:../view/page-contact.php");
