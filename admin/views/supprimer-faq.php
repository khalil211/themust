<?php
include "../../config.php";
$db=config::getConnexion();
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	$emps=$db->query("DELETE FROM faq WHERE id='$id'");
	
	header('location: tables-faq.php');
}

?>