<?php
class produitPanier
{
	private $idpanier;
	private $idproduit;
	private $quantite;
	private $prixunitaire;
	private $nom;
	private $image;

	public function __construct($idpanier,$idproduit,$quantite,$prixunitaire,$nom,$image)
	{
		$this->idpanier=$idpanier;
		$this->idproduit=$idproduit;
		$this->quantite=$quantite;
		$this->prixunitaire=$prixunitaire;
		$this->nom=$nom;
		$this->image=$image;
	}

	public function getIdPanier(){return $this->idpanier;}
	public function getIdProduit(){return $this->idproduit;}
	public function getQuantite(){return $this->quantite;}
	public function getPrixUnitaire(){return $this->prixunitaire;}
	public function getNom(){return $this->nom;}
	public function getImage(){return $this->image;}

	public function setIdPanier($new){$this->idpanier=$new;}
	public function setIdProduit($new){$this->idproduit=$new;}
	public function setQuantite($new){$this->quantite=$new;}
	public function setPrixUnitaire($new){$this->prixunitaire=$new;}
	public function setNom($new){$this->nom=$new;}
	public function setImage($new){$this->image=$new;}
}
?>