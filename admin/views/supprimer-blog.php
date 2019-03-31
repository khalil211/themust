<?php
include "../../config.php";
$db=config::getConnexion();
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	$emps=$db->query("DELETE FROM blog WHERE idblog=$id");
	
	header('location: ../tables-blog.php');
}
