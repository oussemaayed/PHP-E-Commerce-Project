<?php
class Client 
{
    public $id;
    public $nom;
    public $prenom;
    public $email;
    public $password;
    public $tel;
    public $code;
    
    



    public function __construct(){

    }
   

    public function ajouterClient(){

        require_once('C:\wamp64\www\projt_php_ecommerce_complet-main\Freshmart-Organic-Food-Template\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="insert into client (nom, prenom, email, password, tel, code) values ('$this->nom','$this->prenom','$this->email','$this->password','$this->tel','$this->code')";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    } 
    
    public function afficherClient(){
        require_once('C:\wamp64\www\projt_php_ecommerce_complet-main\Freshmart-Organic-Food-Template\Config\config.php');
        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="select * from client";
        $res=$pdo->query($req) or print_r($pdo->errorInfo());
        return $res;
    }
    public function afficherClientById($id){
        require_once('C:\wamp64\www\projt_php_ecommerce_complet-main\Freshmart-Organic-Food-Template\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="select * from client where id='$id' ";
        $res=$pdo->query($req) or print_r($pdo->errorInfo());
        return $res;
    }
  
    public function getClientByData($email,$code){
        require_once('C:\wamp64\www\projt_php_ecommerce_complet-main\Freshmart-Organic-Food-Template\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="select * from client where email='$email'  and code='$code' ";
        $res=$pdo->query($req) or print_r($pdo->errorInfo());
        return $res;
    }
    public function delete($id){
        require_once('C:\wamp64\www\projt_php_ecommerce_complet-main\Freshmart-Organic-Food-Template\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="delete from client where id='$id' ";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    }
    public function update($id){
        require_once('C:\wamp64\www\projt_php_ecommerce_complet-main\Freshmart-Organic-Food-Template\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="update client set  prenom='$this->prenom',nom='$this->nom',email='$this->email',password='$this->password',tel='$this->tel' where id='$id' ";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    }

    public function getDataClient($email){
        require_once('C:\wamp64\www\projt_php_ecommerce_complet-main\Freshmart-Organic-Food-Template\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="select * from client where email='$email'";
        $res=$pdo->query($req) or print_r($pdo->errorInfo());
        return $res;
    }
} 
?>