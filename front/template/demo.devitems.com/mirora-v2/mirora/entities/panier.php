<?php
class produitPanier
{
	//produit
}

class panier
{
	private $id;
	private $nbproduit;
	private $prixtotal;
	private $produits;

	public function __construct($id)
	{
		$this->id=$id;
		$this->nbproduit=0;
		$this->prixtotal=0;
		$this->produits=array();
	}

	public function getId(){return $this->id;}
	public function getNbProduit(){return $this->nbproduit;}
	public function getPrixTotal(){return $this->prixtotal;}
	public function getProduits(){return $this->produits;}

	public function setId($new){$this->id=$new;}
	public function setNbProduit($new){$this->nbproduit=$new;}
	public function setPrixTotal($new){$this->prixtotal=$new;}
	public function setProduits($new){$this->produits=$new;}
}
?>