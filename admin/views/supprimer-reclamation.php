<?php
include "../../config.php";
$db=config::getConnexion();
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	$emps=$db->query("DELETE FROM `reclamation` WHERE `reclamation`.`sujet` = '$id'");
	
	header('location: tables-reclamation.php');
}
