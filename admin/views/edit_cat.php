<?php

include "../../config.php";
 $id_cat= $_POST['ide'];
 $nom_cat=$_POST['nom_cat'];
 $descr_cat=$_POST['descr_cat'];


$db=config::getConnexion();
$result=$db->prepare("UPDATE categorie SET `id_cat`='$id_cat' , `nom_cat`='$nom_cat' , `descr_cat`='$descr_cat'   WHERE `categorie`.`id_cat`='$id_cat'    ");
$result->execute();
header('location: tables-categorie.php');


  ?>