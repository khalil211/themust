<?php
include '../core/commandeC.php';
if (isset($_GET['n']))
{
	$commande=new commandeC();
	if ($commande->exist($_GET['n']))
		$commande->supprimer($_GET['n']);
	header('Location: ../tables-commande.php');
}
?>