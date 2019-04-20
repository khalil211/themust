<?php
include "../entities/wishlist.php";
require '../core/crudwish.php';

$wish=new Crudwish();
if (isset($_POST["delete"])){
	$wish->deleteWish($_POST["reference"]);
		echo "<script language=\"javascript\">alert(\"Product deleted from wishlist.\");document.location.href='wish.php';</script>";}
?>