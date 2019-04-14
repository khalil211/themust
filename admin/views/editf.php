<?php

include "../../config.php";
if (isset($_POST['n'])&&isset($_POST['liste'])&&isset($_POST['d1'])&&isset($_POST['d2']))
{
 $id = $_POST['ide'];
 $nom=$_POST['n'];
 $sexe=$_POST['liste'];
 $date_naissance=$_POST['d1'];
 $date_creation=$_POST['d2'];

$db=config::getConnexion();
$result=$db->prepare("UPDATE fidelite SET `ID_client`='$nom' , `sexe`='$sexe' , `date_naissance`='$date_naissance' , `date_creation`='$date_creation' WHERE `fidelite`.`ID`='$id'    ");
$result->execute();
header('location: tables-fidélité.php');
}
else
{
	header('location: tables-fidélité.php');
}

  ?>