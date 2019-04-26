<?php

include "../../config.php";
 $description=$_POST['description'];
 $nom = $_POST['nomm'];
 $datedebut=$_POST['datedebut'];
 $datefin=$_POST['datefin'];
 //$description=$_POST['description'];
 $pourcentage=$_POST['pourcentage'];


$db=config::getConnexion();
$result=$db->prepare("UPDATE promotions SET `description`='$description' , `datedebut`='$datedebut' , `datefin`='$datefin' , `pourcentage`='$pourcentage'   WHERE `promotions`.`nom`='$nom'    ");
$result->execute();
header('location: table-promotions.php');


  ?>