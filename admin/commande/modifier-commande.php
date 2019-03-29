<?php
include '../core/commandeC.php';
if (isset($_GET['n'])&&isset($_GET['e']))
{
	$commande=new commandeC();
	if ($commande->exist($_GET['n']))
		$commande->modifierEtat($_GET['n'],$_GET['e']);
}
header('Location: ../tables-commande.php');
?>