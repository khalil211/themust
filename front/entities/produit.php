<?php
include "config.php";

class produit
{   
	private $img;
	private $nom;
	private $descr;
	private $quantite;
	private $prix;
	private $categorie;
	private $note;
	private $choix;
	private $nb_note;



	public function __construct($id,$img,$nom,$descr,$quantite,$prix,$categorie)
	{
		$this->id=$id;
		$this->img=$img;
		$this->nom=$nom;
        $this->descr=$descr;
        $this->quantite=$quantite;
        $this->prix=$prix;
        $this->categorie=$categorie;

	}

	public function getNom(){return $this->nom ;}
	public function getPrix(){return $this->prix ;}
	public function getCat(){return $this->categorie ;}
	public function getImg(){return $this->img ;}
	public function getdesc(){return $this->descr ;}
	public function getQuant(){return $this->quantite ;}
	public function getNote(){return $this->note ;}
	public function getChoix(){return $this->choix ;}
	public function getNb(){return $this->nb_note ;}

	public function setNom($nom){$this->nom=$nom;}
	public function setPrix($prix){$this->prix=$prix;}
	public function setCat($categorie){$this->categorie=$categorie;}
	public function setQuant($quantite){$this->quantite=$quantite;}
	public function setImg($img){$this->img=$img;}
	public function setNote($note){$this->note=$note ;}
	public function setChoix($choix){ $this->choix=$choix ;}
	public function setNb($nb){ $this->nb_note=$nb ;}


	function ajouter()
	{
		try
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
		}
		catch(Exception $e)
		{
			die('erreur' . $e->getMessage());
		}
	}

	/*public function afficherUnProduit($idd)
    {
        
        $sql = "SELECT * FROM produit WHERE id=$idd";
        $c=config::getConnexion();
       $result = $c->query($sql);
       

 return $result ;
	}*/
}

?>