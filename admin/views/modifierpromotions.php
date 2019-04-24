<?php
include '../core/promotionss.php';
$db=config::getConnexion();

$result=$db->prepare("UPDATE promotions SET description=:description , datedebut= :datedebut, datefin=:datefin,pourcentage=:pourcentage WHERE nom=:nom");
$result->bindValue(':nom',$_POST['nom']);
$result->bindValue(':datedebut',$_POST['dated']);
$result->bindValue(':datefin',$_POST['datef']);
$result->bindValue(':description',$_POST['description']);
$result->bindValue(':pourcentage',$_POST['remise']);
$result->execute();
header('location : table-promotions.php');
?>