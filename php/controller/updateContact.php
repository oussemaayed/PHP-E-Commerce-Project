<?php
require_once("../model/Class/contact.php");
$con=new Contact();
$con->email=$_POST['email'];
$con->message=$_POST['message'];
$con->subject=$_POST["sujet"];


    $con->update($_POST['email'])  ; 
    header("location:../view/gestionContact.php");

