<?php
class produitPanier
{
	private $idpanier;
	private $idproduit;
	private $quantite;
	private $prixunitaire;

	public function __construct($idpanier,$idproduit,$quantite,$prixunitaire)
	{
		
	}

	public function getIdPanier(){return $this->idpanier;}
	public function getIdProduit(){return $this->idproduit;}
	public function getQuantite(){return $this->quantite;}
	public function getPrixUnitaire(){return $this->prixunitaire;}

	public function setIdPanier($new){$this->idpanier=$new;}
	public function setIdProduit($new){$this->idproduit=$new;}
	public function setQuantite($new){$this->quantite=$new;}
	public function setPrixUnitaire($new){$this->prixunitaire=$new;}
}
?>