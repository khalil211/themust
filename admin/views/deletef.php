<?php
include "../../config.php";
$db=config::getConnexion();
if (isset($_GET['del'])) {
	$ID = $_GET['del'];
	$emps=$db->query("DELETE FROM fidelite WHERE ID=$ID");
	
	header('location: tables-fidélité.php');
}
