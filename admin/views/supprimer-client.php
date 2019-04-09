<?php
include "../config.php";
$db=config::getConnexion();
if (isset($_GET['del'])) {
	$identifiant = $_GET['del'];
	$emps=$db->query("DELETE FROM client WHERE identifiant='$identifiant'");
	
	header('location: tables-clients.php');
}
