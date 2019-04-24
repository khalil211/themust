<?php 
include '../../config.php';
$db=config::getConnexion();
$choix_tri= ($_GET['tri']);
 
if( $choix_tri == "prix1") {
	$prix1=$db->query('select id from produit order by prix desc');
	}
else if ($choix_tri== "prix2")
{
	$prix2=$db->query('select id from produit order by prix asc');
}
else if ($choix_tri== "nom1")
{
	$prix3=$db->query('select id from produit order by nom asc');
}
else 
{
	$prix4=$db->query('select id from produit order by nom desc');
}
header('location: shop.php');
?>