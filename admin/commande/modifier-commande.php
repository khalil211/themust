<?php
include 'commande.php';
if (isset($_GET['n'])&&isset($_GET['e']))
{
	$commande=new commande(0,-1);
	if ($commande->exist($_GET['n']))
	{
		$db=config::getConnexion();
		if ($_GET['e']==1)
			$query=$db->prepare('UPDATE commande SET etat=0 WHERE numero=:id');
		else
			$query=$db->prepare('UPDATE commande SET etat=1 WHERE numero=:id');
		$query->bindValue(':id',$_GET['n']);
		$query->execute();
	}
}
header('Location: ../tables-commande.php');
?>