<?php
class admin{
     public $login;
     public $password;

    public function  __construct(){
}

public function verifAdmin($login,$password){
    require_once('C:\wamp64\www\projt_php_ecommerce_complet-main\Freshmart-Organic-Food-Template\Config\config.php');
    $cnx=new connexion();
    $pdo=$cnx->CnxDB();
    $req="select count(*) from admin where login='$login'  and password='$password'";
    $res=$pdo->query($req) or  print_r($pdo->errorInfo());
    return $res;

}

public function destruction(){
    session_destroy();
}

}
?>