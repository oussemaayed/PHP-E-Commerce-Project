<?php
class Commande
{
    public $id;
    public $id_client;
    public $prix_total;
    public $adresse;
    public $products;

    public function __construct()
    {
        // Your constructor logic here
    }

    public function ajouterCommande()
    {
        require_once('C:\wamp64\www\projt_php_ecommerce_complet-main\Freshmart-Organic-Food-Template\Config\config.php');

        $cnx = new connexion();
        $pdo = $cnx->CnxDB();
        $req = "INSERT INTO commandes (id_client, prix_total,adresse,products) VALUES (?, ?, ?, ?)";
$stmt = $pdo->prepare($req);
if (!$stmt->execute([$this->id_client, $this->prix_total, $this->adresse, $this->products])) {
    throw new Exception("Error inserting data into commandes table.");
}

    }

    public function afficherCommandes()
    {
        require_once('C:\wamp64\www\projt_php_ecommerce_complet-main\Freshmart-Organic-Food-Template\Config\config.php');
        $cnx = new connexion();
        $pdo = $cnx->CnxDB();
        $req = "SELECT * FROM commandes";
        $res = $pdo->query($req) or print_r($pdo->errorInfo());
        return $res;
    }
    public function ajouterCommandes($id_produits)
    {
        require_once('C:\wamp64\www\projt_php_ecommerce_complet-main\Freshmart-Organic-Food-Template\Config\config.php');

        $cnx = new connexion();
        $pdo = $cnx->CnxDB();
        
        // Insert into the commandes table
        $req_commande = "INSERT INTO commandes (id_client, prix_total, adresse) VALUES ('$this->id_client', '$this->prix_total', '$this->adresse')";
        $pdo->exec($req_commande) or print_r($pdo->errorInfo());

        // Get the ID of the last inserted command
        $id = $pdo->lastInsertId();

        foreach ($id_produits as $id_produit) {
            $req_command_produit = "INSERT INTO command_produits (id, id_produit) VALUES ('$id', '$id_produit')";
            $pdo->exec($req_command_produit) or print_r($pdo->errorInfo());
        }
    }


}
?>
