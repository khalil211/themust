<?php
class produitPanier
{
	private $idproduit;
	private $idcommande;
	private $qte;

	public function __construct($idproduit,$idcommande,$qte)
	{
		$this->idproduit=$idproduit;
		$this->idcommande=$idcommande;
		$this->qte=$qte;
	}

	public function getIdProduit(){return $this->idproduit;}
	public function getIdCommande(){return $this->idcommande;}
	public function getQte(){return $this->qte;}

	public function setIdProduit($new){$this->idproduit=$new;}
	public function setIdCommande($new){$this->idcommande=$new;}
	public function setQte($new){$this->qte=$new;}
}

class panier
{
	private $id;
	private $nbproduit;
	private $prixtotal;

	public function __construct($id)
	{
		$this->id=$id;
		$this->nbproduit=0;
		$this->prixtotal=0;
		$this->produit=array();
	}

	public function getId(){return $this->id;}
	public function getNbProduit(){return $this->nbproduit;}
	public function getPrixTotal(){return $this->prixtotal;}

	public function setId($new){$this->id=$new;}
	public function setNbProduit($new){$this->nbproduit=$new;}
	public function setPrixTotal($new){$this->prixtotal=$new;}
}
?>