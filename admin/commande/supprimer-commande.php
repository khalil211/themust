<?php
include 'commande.php';
if (isset($_GET['n']))
{
	$commande=new commande(0,-1);
	if ($commande->exist($_GET['n']))
	{
		$db=config::getConnexion();
		$query=$db->prepare('DELETE FROM produitcommande WHERE idcommande=:id');
		$query->bindValue(':id',$_GET['n']);
		$query->execute();
		$query=$db->prepare('DELETE FROM commande WHERE numero=:id');
		$query->bindValue(':id',$_GET['n']);
		$query->execute();
	}
	header('Location: ../tables-commande.php');
}
?>