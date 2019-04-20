<?php
include '../../config.php';

                        
$sql = "UPDATE `produit` SET `note`=`note`+:choix ,`nb_note`=1+`nb_note`  WHERE id=:id";

 $db = config::getConnexion();
        
        $req=$db->prepare($sql);
     $id=$_POST['refe'];
        $choix=$_POST['NOTER'];
 $req->bindValue(':id',$id);
        $req->bindValue(':choix',$choix);
        $s=$req->execute();
header('location:index.php');
?>