<?php
function trierPromotionSelonNom($a,$b)
{
	if ($a->getNom()==$b->getNom())
		return 0;
	return ($a->getNom()<$b->getNom()) ? -1 : 1;
}

class promotions
{
	private $nom;
	private $idproduit;
	private $description;
	private $datedebut;
	private $datefin;
	private $pourcentage;

	public function __construct($n,$i,$des,$dated,$datef,$p)
	{
		$this->nom=$n;
		$this->idproduit=$i;
		$this->description=$des;
		$this->datedebut=$dated;
		$this->datefin=$datef;
		$this->pourcentage=$p;
	}

	public function getnom(){return $this->nom;}
	public function getidproduit(){return $this->idproduit;}
	public function getdescription(){return $this->description;}
	public function getdatedebut(){return $this->datedebut;}
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
		$query=$db->prepare('INSERT INTO promotions(nom,idproduit,descrption,datedebut,datefin,pourcentage) VALUES(:nom,:idproduit:nomproduit,:descrption,:datedebut,:datefin,;pourcentage)');
		$query->bindValue(':nom',$nom);
		$query->bindValue(':idproduit',$this->idproduit);
		$query->bindValue(':descrption',$this->descrption);
		$query->bindValue(':datedebut',$this->datedebut);
		$query->bindValue(':datefin',$this->datefin);
		$query->bindValue(':pourcentage',$this->pourcentage);

		$query->execute();
	}
}
?>