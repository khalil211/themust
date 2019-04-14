<?php
include "../../config.php";
$db=config::getConnexion();
if (isset($_GET['del'])) {
	$id_cat = $_GET['del'];
	$emps=$db->query("DELETE FROM categorie WHERE id_cat=$id_cat");
	
	header('location: tables-categorie.php');
}
?>
