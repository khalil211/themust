<?php
include "../../config.php";

class employe
{   
	private $nom;
	private $sexe;
	private $date;
	private $date_creation;
	private $points;


	function __construct($nom,$sexe,$date,$date_creation,$points)
	{   
		$this->nom=$nom;
		$this->sexe=$sexe;
		$this->date=$date;
		$this->date_creation=$date_creation;
		$this->points=$points;
	}
	function ajouter()
	{
		try
		{
			$db=config::getConnexion();
			$query=$db->prepare('insert into fidelite(ID_client,sexe,date_naissance,date_creation,point) values(:nom,:sexe,:date,:date_creation,:points)');
			$query->bindValue(':nom',$this->nom);
			$query->bindValue(':sexe',$this->sexe);
			$query->bindValue(':date',$this->date);
			$query->bindValue(':date_creation',$this->date_creation);
			$query->bindValue(':points',$this->points);
			$query->execute();
		}
		catch(Exception $e)
		{
			die('erreur' . $e->getMessage());
		}
	}
	

}
?>




   