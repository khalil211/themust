<?php
include "../../config.php";

class categorie
{   
	private $id_cat;
	private $nom_cat;
	private $descr_cat;
	
	public function __construct($nom_cat,$descr_cat)
	{
	
		$this->nom_cat=$nom_cat;
		$this->descr_cat=$descr_cat;
	}

	
	public function getNom(){return $this->nom_cat ;}
	public function getDesc(){return $this->descr_cat ;}



	public function setNom($nom_cat){$this->nom_cat=$nom_cat;}
	public function setDesc($descr_cat){$this->descr_cat=$descr_cat;}
	

	function ajouter()
	{
		try
		{
			$db=config::getConnexion();
			$req=$db->prepare('INSERT into categorie(nom_cat,descr_cat) values(:nom_cat,:descr_cat)');
	 
        $req->bindValue(':nom_cat',$this->nom_cat);
        $req->bindValue(':descr_cat',$this->descr_cat);
 
			$req->execute();
		}
		catch(Exception $e)
		{
			die('erreur' . $e->getMessage());
		}
	}


	

}


?>