<?php
include "../entities/wishlist.php";
require '../core/crudwish.php';

$wish= new wishlist($_POST["referance"],$_POST['nom'],$_POST['prix'],$_POST['img']);

	$wish1 = new Crudwish();

$wish1->ajoutwish($wish);


echo "<script language=\"javascript\">document.location.href='wish.php';</script>";



?>