<?php

include "../../config.php";
if (isset($_POST['liste'])&&isset($_POST['p1'])&&isset($_POST['d1'])&&isset($_POST['d2'])&&isset($_POST['des']))
{
 $id = $_POST['ide'];

 $cat=$_POST['liste'];
 $nom=$_POST['p1'];
 $debut=$_POST['d1'];
 $fin=$_POST['d2'];
 $des=$_POST['des'];

$db=config::getConnexion();
$result=$db->prepare("UPDATE publicite SET  `cat`='$cat' , `nom`='$nom' , `debut`='$debut' , `fin`='$fin' , `description`='$des' WHERE `publicite`.`ID`='$id'    ");
$result->execute();
header('location: tables-pub.php');
}
else
{
	header('location: tables-pub.php');

}

  ?>