<?php
include "../config.php";
$db=config::getConnexion();
if (isset($_GET['del'])) {
	$identifiant = $_GET['del'];
	$emps=$db->query("DELETE FROM clientste WHERE identifiant='$identifiant'");
	
	header('location: tables-clientsste.php');
}
