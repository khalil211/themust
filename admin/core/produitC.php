<?php
require_once '../../config.php';
class ProduitC
{
	
    
    public function ajouterProduit($e)
    {
    	{
            $db=config::getConnexion();
            $req=$db->prepare('INSERT into produit(img,nom,descr,quantite,prix,categorie) values(:img,:nom,:descr,:quantite,:prix,:categorie)');
        $req->bindValue(':img',$this->img);
        $req->bindValue(':nom',$this->nom);
        $req->bindValue(':descr',$this->descr);
        $req->bindValue(':quantite',$this->quantite);
        $req->bindValue(':prix',$this->prix);
        $req->bindValue(':categorie',$this->categorie);
            $req->execute();
            return $db->lastInsertId();
        }
        
    }
    public function afficherProduit()
    {
    	$c=config::getConnexion();
    	$sql = "SELECT * FROM produit";

 return $result = $c->query($sql);

}
public function afficherUnProduit($id)
    {
        
        $sql = "SELECT * FROM produit WHERE id=$id";
        $c=config::getConnexion();
       $result = $c->query($sql);
       

 return $result ;

       
}

 function modifierProduit($e,$id){
        $sql="UPDATE produit SET id=:id,img=:img,nom=:nom,descr=:descr,quantite=:quantite,prix=:prix,categorie =:categorie WHERE id=:id";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $id=$e->getRef();
        $nom=$e->getNom();
        $prix=$e->getPrix();
        $quantite=$e->getCode();
        $quantite=$e->getQuant();
        $categorie=$e->getCat();
        $img=$e->getImg();
       

        $datas = array(':id'=>$id, ':img'=>$img, ':nom'=>$nom,':decr'=>$decr,':quantite'=>$quantite,':prix'=>$prix,':categorie'=>$categorie);
        $req->bindValue(':id',$id);
        $req->bindValue(':id',$id);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prix',$prix);
        $req->bindValue(':quantite',$quantite);
        $req->bindValue(':quantite',$quantite);
        $req->bindValue(':categorie',$categorie);
        $req->bindValue(':img',$img);
        $req->bindValue(':cin',$cin);

        
            $s=$req->execute();
            
           
        }
        catch (Exception $z){
            echo " Erreur ! ".$z->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }

    function recupererhistorique()
    {
        $c=config::getConnexion();
        $sql = "select * from produit p inner join categorie c where categorie = id_cat";

 return $result = $c->query($sql);
    }
}

?>
          










          