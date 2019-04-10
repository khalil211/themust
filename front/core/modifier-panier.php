<?php
session_start();
include '../../config.php';
include 'panierC.php';

$panier=new panierC;
foreach ($_POST as $idproduit => $qte) 
{
	$panier->modifierProduit($idproduit,$qte);
}
header('Location: ../views/cart.php');
?>