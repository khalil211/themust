<?php

include "../config.php";
 $id = $_POST['ide'];
 $img=$_FILES['img'];
 $cat=$_POST['liste'];
 $nom=$_POST['p1'];
 $debut=$_POST['d1'];
 $fin=$_POST['d2'];
 $des=$_POST['des'];

$db=config::getConnexion();
$result=$db->prepare("UPDATE publicite SET `image`='$img' , `cat`='$cat' , `nom`='$nom' , `debut`='$debut' , `fin`='$fin' , `description`='$des' WHERE `publicite`.`ID`='$id'    ");
$result->execute();
header('location: tables-pub.php');


  ?>