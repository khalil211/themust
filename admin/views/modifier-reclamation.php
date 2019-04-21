<?php
include "../../config.php";
$db=config::getConnexion();

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	
	
	$result=$db->prepare("UPDATE `reclamation` SET `etat` = 'resolu' WHERE `reclamation`.`sujet` = '$id'");
$result->execute();
	header('location: tables-reclamation.php');
}
