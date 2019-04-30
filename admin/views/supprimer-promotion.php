<?php
include "../../config.php";
$db=config::getConnexion();
if (isset($_GET['del'])) {
	$nom = $_GET['del'];
	$emps=$db->query("DELETE FROM promotions WHERE  nom='$nom' ");
	
	header('location: table-promotions.php');


}
?>
