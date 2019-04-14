<?php
include "../../config.php";
$db=config::getConnexion();
if (isset($_GET['del'])) {
	$ID = $_GET['del'];
	$emps=$db->query("DELETE FROM publicite WHERE ID=$ID");
	
	header('location: tables-pub.php');
}
