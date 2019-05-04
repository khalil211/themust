<?php
require_once '../../config.php';
class categorieC
{
	
    
    public function ajoutercategorie($e)
    {
    	{
            $db=config::getConnexion();
            $req=$db->prepare('INSERT into categorie(nom_cat,descr_cat) values(:nom_cat,:descr_cat)');
        $req->bindValue(':nom_cat',$this->nom_cat);
        
        $req->bindValue(':descr_cat',$this->descr_cat);
       
            $req->execute();
          
        }
        
    }
    public function afficherCat()
    {
    	$c=config::getConnexion();
    	$sql = "SELECT * FROM categorie";

 return $result = $c->query($sql);

}

 function modifierProduit($e,$id_cat){
        $sql="UPDATE produit SET id_cat=:id_cat,img=:img,nom_cat=:nom_cat,descr_cat=:descr_cat WHERE id_cat=:id_cat";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $id_cat=$e->getId();
        $nom_cat=$e->getNom();
        $descr_cat=$e->getDesc();

 

        $datas = array(':id_cat'=>$id_cat, ':nom_cat'=>$nom_cat,':decr_cat'=>$decr_cat);
        $req->bindValue(':id_cat',$id_cat);
        $req->bindValue(':nom_cat',$nom_cat);
        $req->bindValue(':descr_cat',$descr_cat);    
            $s=$req->execute();
            
           
        }
        catch (Exception $z){
            echo " Erreur ! ".$z->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }

}

?>
          










          