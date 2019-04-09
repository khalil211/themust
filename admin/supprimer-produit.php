<?php
include "../config.php";
$db=config::getConnexion();
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	//suppression produit panier debut
	$result=$db->query('SELECT * FROM produit WHERE id='.$id);
	$p=$result->fetch();
	$result=$db->query('SELECT * FROM produitpanier WHERE idproduit='.$id);
	while ($pp=$result->fetch())
	{
		$q=$db->prepare('UPDATE panier SET nbproduit=nbproduit-:qte,prixtotal=prixtotal-:prix WHERE id=:id');
		$q->bindValue(':qte',$pp['quantite']);
		$q->bindValue(':prix',($pp['quantite']*$p['prix']));
		$q->bindValue(':id',$pp['idpanier']);
		$q->execute();
	}
	$db->query('DELETE FROM produitpanier WHERE idproduit='.$id);
	//suppression produit panier fin
	$emps=$db->query("DELETE FROM produit WHERE id=$id");
	header('location: tables-produits.php');
}
?>
