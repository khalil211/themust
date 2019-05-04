<?php
include "../../config.php";
$db=config::getConnexion();
if (isset($_GET['t']))
{
	$session=(string)$_GET['idclient'];
	$getId=(int) $_GET['id'];
	$gett=(int) $_GET['t'];
	$check=$db->prepare('SELECT id FROM produit WHERE id = ? ');
	$check->execute(array($getId)); 
	if ($check->rowCount() == 1)
	{
		if ($gett==1)
		{
			$check_like=$db->prepare('SELECT id FROM likes WHERE id_produit = ? AND idclient = ?');
			$check_like->execute(array($getId,$session));
			if ($check_like->rowCount()==1)
			{
				$del=$db->prepare('DELETE FROM likes WHERE id_produit = ? AND idclient = ?');
				$del->execute(array($getId,$session));
			}
			else
			{
			$ins=$db->prepare ('INSERT INTO likes (id_produit,idclient) VALUES (?,?)');
			$ins->execute(array($getId,$session));}

		}
		elseif ($gett==2) {
			$check_like=$db->prepare('SELECT id FROM dislikes WHERE id_produit = ? AND idclient = ?');
			$check_like->execute(array($getId,$session));
			if ($check_like->rowCount()==1)
			{
				$del=$db->prepare('DELETE FROM dislikes WHERE id_produit = ? AND idclient = ?');
				$del->execute(array($getId,$session));
			}
			else
			{
			$ins=$db->prepare ('INSERT INTO dislikes (id_produit,idclient) VALUES (?,?)');
			$ins->execute(array($getId,$session));}
		}	
			//header
		header('location: shop.php');
	}
	header('location: shop.php');
}
?>