<?php
include '../core/promotionss.php';
if (isset($_GET['n'])&&isset($_GET['e']))
{
	$promotions=new promotionss();
	if ($promotions->exist($_GET['n']))
		$promotions->modifierEtat($_GET['n'],$_GET['e']);
}
header('Location: ../tables-promotions.php');
?>