<?php
include '../views/menus.php';
testConnexion();
include '../../admin/core/commandeC.php';
include '../../admin/entities/commande.php';
include 'panierC.php';
include '../entities/panier.php';
include '../entities/produitpanier.php';
$panier=new panier(0);
$panierC=new panierC;
$panier->setId($_SESSION['idclient']);
$panier=$panierC->afficher($panier);
$produits=$panier->getProduits();
$commande=new commande($_SESSION['idclient'],false);
$commandeC=new commandeC();
foreach ($produits as $p)
{
	$commande->ajouterProduit($p->getIdProduit(),$p->getQuantite());
}
$commande->setPrixTotal($panier->getPrixTotal());
$commandeC->ajouter($commande);
$panierC->supprimer();
header('Location: ../views/cart.php');
?>