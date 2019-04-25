<?php
include "../../config.php";
$db=config::getConnexion();
if (isset($_GET['t'])) {
	$com = $_GET['t'];
	}
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	$emps=$db->prepare("DELETE FROM comment WHERE ID = :id");
	$emps->bindValue(':id',$id);
	$emps->execute();
	header('location: blog-details.php?idd='.$com);
}
