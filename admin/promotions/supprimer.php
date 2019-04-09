<?php
include '../core/promotionss.php';
if (isset($_GET['n']))
{
	$promotions=new promotionss();
	if ($promotions->exist($_GET['n']))
		$promotions->supprimer($_GET['n']);
	header('Location: ../tables-promotions.php');
}
?>