<?php
class contact 
{
    public $email;
    public $message ;
    public $subject;
    public function __construct(){

    }
    public function ajouterContact(){
        require_once('.C:\wamp64\www\projt_php_ecommerce_complet-main\Freshmart-Organic-Food-Template\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="insert into contact values('$this->email','$this->message','$this->subject')";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    } 
    public function afficherContactByemail($email){
        require_once('C:\wamp64\www\projt_php_ecommerce_complet-main\Freshmart-Organic-Food-Template\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="select * from contact where email='$email' ";
        $res=$pdo->query($req) or print_r($pdo->errorInfo());
        return $res;
        
    }
    public function afficher(){
        require_once('C:\wamp64\www\projt_php_ecommerce_complet-main\Freshmart-Organic-Food-Template\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="select * from contact";
        $res=$pdo->query($req) or print_r($pdo->errorInfo());
        return  $res;
    } 
    public function update($email) {
        require_once('C:\wamp64\www\projt_php_ecommerce_complet-main\Freshmart-Organic-Food-Template\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="update contact set email='$this->email',message='$this->message',subject='$this->subject'";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    }
}
?>
    