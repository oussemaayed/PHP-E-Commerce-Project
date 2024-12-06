<?php
class Categorie
{
    public $id;
    public $nom;


    public function ajoutercategory(){
        require_once('C:\wamp64\www\projt_php_ecommerce_complet-main\Freshmart-Organic-Food-Template\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="insert into categorie  (id,nom) values('$this->id','$this->nom')";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    } 
    public function afficherCategorie(){
        require_once('C:\wamp64\www\projt_php_ecommerce_complet-main\Freshmart-Organic-Food-Template\Config\config.php');
        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="select * from categorie";
        $res=$pdo->query($req) or print_r($pdo->errorInfo());
        return $res;
    }
    public function update($id){
        require_once('C:\wamp64\www\projt_php_ecommerce_complet-main\Freshmart-Organic-Food-Template\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="update categorie set nom='$this->nom' where id='$this->id'";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    }
    public function delete($id){
        require_once('C:\wamp64\www\projt_php_ecommerce_complet-main\Freshmart-Organic-Food-Template\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="delete from categorie where id='$id' ";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    }
}