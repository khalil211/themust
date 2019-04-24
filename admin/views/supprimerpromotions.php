<?php
include '../core/promotionss.php';
if (isset($_GET['nom']))
{
	$promotions=new promotionss();
	if ($promotions->exist($_GET['nom']))
		$promotions->supprimer($_GET['nom']);
	header('Location: ../table-promotions.php');
}
?>