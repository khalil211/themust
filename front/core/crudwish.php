<?php
include "../../config.php";
class Crudwish
{
    public function ajoutwish($Client)
    {
        $db = config::getConnexion(); 
        $sql = "INSERT INTO `wishlist`(`referance`, `nom`, `prix`, `img`) VALUES (:referance,:nom,:prix,:img)";
        $req=$db->prepare($sql);
        $req->bindValue(":referance", $Client->getReferance());
        $req->bindValue(":nom", $Client->getNom());
        $req->bindValue(":prix", $Client->getPrix());
        $req->bindValue(":img", $Client->getImg());

        $req->execute();
    

    }


    function recupererWish()
    {
        $sql="SELECT * from wishlist ";
        $db = config::getConnexion();
        $liste=$db->query($sql);
        return $liste;
    }
 }
?>