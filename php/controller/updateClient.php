<?php
require_once("../model/Class/client.php");
$client=new Client();
$client->prenom=$_POST['prenom'];
$client->nom=$_POST['nom'];
$client->email=$_POST['email'];
$client->password=$_POST["password"];
$client->tel=$_POST['tel'];
$client->code=$_POST['code'];




    $client->update($_POST['id'])  ; 
    
    header("location:../view/gestionClient.php");













?>