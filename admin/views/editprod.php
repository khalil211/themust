<?php

include "../../config.php";
 $img=$_POST['img'];
 $id = $_POST['ide'];
 $nom=$_POST['nom'];
 $descr=$_POST['descr'];
 $quantite=$_POST['quantite'];
 $prix=$_POST['prix'];
 $categorie=$_POST['categorie'];

$db=config::getConnexion();
$result=$db->prepare("UPDATE produit SET `img`='$img' , `nom`='$nom' , `descr`='$descr' , `quantite`='$quantite' , `prix`='$prix' , `categorie`='$categorie' WHERE `produit`.`id`='$id'    ");
$result->execute();
header('location: tables-produits.php');


  ?>