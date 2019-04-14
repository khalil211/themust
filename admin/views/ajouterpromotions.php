<?php
include '../entities/promotions.php';
include '../core/promotionss.php';

if (isset($_POST['idc']))
{
	$promotions=new promotions($_POST['idc'],isset($_POST['passee']));
	$cpromotionss=new promotionss();
	$i=0;
	$idp='idp'.$i;
	$qte='qte'.$i;
	while (isset($_POST[$idp])&&isset($_POST[$qte]))
	{
		$promotions->ajouterpromotion($_POST[$idp],$_POST[$qte]);
		$i++;
		$idp='idp'.$i;
		$qte='qte'.$i;
	}
?>