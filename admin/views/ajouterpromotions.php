<?php
include '../entities/promotions.php';
include '../core/promotionss.php';

if (isset($_POST['nom']) and isset($_POST['idproduit']) and isset($_POST['description']) and isset($_POST['dated']) and isset($_POST['datef']) and isset($_POST['remise']))
{
	$promotions=new promotions($_POST['nom'],$_POST['idproduit'],$_POST['description'],$_POST['dated'],$_POST['datef'],$_POST['remise']);
	$cpromotionss=new promotionss();
	$cpromotionss->ajouter($promotions);
}
?>