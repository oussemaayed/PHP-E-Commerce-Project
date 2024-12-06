<?php
require_once("../model/Class/client.php");
session_start();
$client=new Client();



$client->nom=$_POST['first_name'];
$client->prenom=$_POST['last_name'];
$client->email=$_POST['email'];
$client->password=$_POST['password'];
$client->tel=$_POST['tel'];
$email=$_POST['email'];
$res=$client->getDataClient($email);
$verif=$res->fetchColumn(0);

    if($verif!=0){
        ?>
        <img src="../view/img/denied.png" alt="denied service" />
        <a href="../view/compte.php"> <button> Retour </button></a>

        <?php
    }
    else{
        $client->update($_POST['id']);
        header("location:../view/compte.php");
        }


      
       
    





?>