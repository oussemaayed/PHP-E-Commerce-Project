<?php

    require_once("../model/Class/client.php");
    session_start();
    $client=new Client();
    $email=$_POST["email"];
    $password=$_POST['password'];
    $code=$_POST['code'];
    $res=$client->getClientByData($email,$code);
    $_SESSION['email']="";
    $_SESSION['password']="";
   
    
    $verif=$res->fetchColumn(0);
    if($verif==0){
        ?>
        <img src="../view/img/denied.png" alt="denied service"/>
       
        <?php 
         
     }
     else{
         $_SESSION['email']=$email;
         $_SESSION['code']=$code;
         header('location:../view/compte.php');
     }
     ?>