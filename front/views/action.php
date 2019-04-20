<?php
include "../../config.php";
$db=config::getConnexion();
if (isset($_GET['t']))
{
	$getId=(int) $_GET['id'];
	$gett=(int) $_GET['t'];
	$check=$db->prepare('SELECT id FROM produit WHERE id = ? ');
	$check->execute(array($getId)); 
	if ($check->rowCount() == 1)
	{
		if ($gett==1)
		{
			$ins=$db->prepare ('INSERT INTO likes (id_produit) VALUES (?)');
			$ins->execute(array($getId));

		}
		elseif ($gett==2) {
			$ins=$db->prepare ('INSERT INTO dislikes (id_produit) VALUES (?)');
			$ins->execute(array($getId));
		}	
			//header
		header('location: shop.php');
	}
	header('location: shop.php');
}
?>