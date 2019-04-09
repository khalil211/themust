<?php
function trierPromotionSelonNom($a,$b)
{
	if ($a->getNom()==$b->getNom())
		return 0;
	return ($a->getNom()<$b->getNom()) ? -1 : 1;
}

class prmotions
{
	private $nom;
	private $nomProduit;
	private $description;
	private $dateDebut;
	private $dateFin;
	private $pourcentage;

	public function __construct($n,$np,$des,$dated,$datef,$p)
	{
		$this->nom=$n;
		$this->nom=$np;
		$this->des=$des;
		$this->dateDebut=$dated;
		$this->dateFin=$datef;
		$this->pourcentage=$p;
	}

	public function getnom(){return $this->nom;}
	public function getnomproduit(){return $this->nomproduit;}
	public function getdescription(){return $this->description;}
	public function getdatedebut(){return $this->dateDebut;}
	public function getdatefin(){return $this->datefin;}
	public function getpourcentage(){return $this->pourcentage;}

	public function exist()
	{
		$db=config::getConnexion();
		$query=$db->prepare('SELECT * FROM promotion WHERE nom=:nomid');
		$query->bindValue(':nom',$this->nom);
		$query->execute();
	}

	public function ajouter($idc)
	{
		$db=config::getConnexion();
		$query=$db->prepare('INSERT INTO promotions(nom,nomproduit,descrption,datedebut,datefin,pourcentage) VALUES(:nom,:nomproduit,:descrption,:datedebut,:datefin,;pourcentage)');
		$query->bindValue(':nom',$nom);
		$query->bindValue(':nomproduit',$this->nomproduit);
		$query->bindValue(':descrption',$this->descrption);
		$query->bindValue(':datedebut',$this->datedebut);
		$query->bindValue(':datefin',$this->datefin);
		$query->bindValue(':pourcentage',$this->pourcentage);

		$query->execute();
	}
}


?>