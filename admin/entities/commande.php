<?php
function trierProduitsSelonId($a,$b)
{
	if ($a->getId()==$b->getId())
		return 0;
	return ($a->getId()<$b->getId()) ? -1 : 1;
}

class produitCommande
{
	private $idproduit;
	private $qte;
	private $prixt;

	public function __construct($idp,$q)
	{
		$this->idproduit=$idp;
		$this->qte=$q;
		$this->prixt=0;
	}

	public function getId(){return $this->idproduit;}
	public function getQte(){return $this->qte;}
	public function getPrixt(){return $this->prixt;}
	public function setId($new){$this->idproduit=$new;}
	public function setQte($new){$this->qte=$new;}

	public function exist()
	{
		$db=config::getConnexion();
		$query=$db->prepare('SELECT * FROM produit WHERE id=:id');
		$query->bindValue(':id',$this->idproduit);
		$query->execute();
		if ($query->rowCount()!=0)
		{
			$produit=$query->fetch();
			if ($produit['quantite']>=$this->qte)
			{
				$this->prixt=$produit['prix']*$this->qte;
				return true;
			}
		}
		return false;
	}

	public function ajouter($idc)
	{
		$db=config::getConnexion();
		$query=$db->prepare('INSERT INTO produitcommande(idcommande,idproduit,quantite) VALUES(:idcommande,:idproduit,:quantite)');
		$query->bindValue(':idcommande',$idc);
		$query->bindValue(':idproduit',$this->idproduit);
		$query->bindValue(':quantite',$this->qte);
		$query->execute();
		$query=$db->prepare('UPDATE produit SET quantite=quantite-:qte WHERE id=:id');
		$query->bindValue(':id',$this->idproduit);
		$query->bindValue(':qte',$this->qte);
		$query->execute();
	}
}

class commande
{
	private $numero;
	private $idclient;
	private $nbproduit;
	private $prixtotal;
	private $etat;
	private $datecommande;
	private $produits;

	public function __construct($idclient,$etat)
	{
		$this->idclient=$idclient;
		if ($etat)
			$this->etat=1;
		else
			$this->etat=0;
		$this->nbproduit=0;
		$this->prixtotal=0;
		$this->produits=array();
	}

	public function getIdClient(){return $this->idclient;}
	public function getNumero(){return $this->numero;}
	public function getNbProduit(){return $this->nbproduit;}
	public function getPrixTotal(){return $this->prixtotal;}
	public function getEtat(){return $this->etat;}
	public function getProduits(){return $this->produits;}
	public function setNumero($num){$this->numero=$num;}

	public function ajouterProduit($idp,$qte)
	{
		array_push($this->produits,new produitCommande($idp,$qte));
		$this->nbproduit+=$qte;
	}

	public function fusionnerDoublonsProduits()
	{
		usort($this->produits,'trierProduitsSelonId');
		for ($i=1;$i<count($this->produits);$i++)
		{
			if ($this->produits[$i-1]->getId()==$this->produits[$i]->getId())
			{
				$this->produits[$i-1]->setQte($this->produits[$i-1]->getQte()+$this->produits[$i]->getQte());
				array_splice($this->produits,$i,1);
				$i--;
			}
		}
	}

	public function verifierProduits()
	{
		for ($i=0;$i<count($this->produits);$i++)
		{
			if (!$this->produits[$i]->exist())
				return false;
			else
				$this->prixtotal+=$this->produits[$i]->getPrixt();
		}
		return true;
	}
}

?>