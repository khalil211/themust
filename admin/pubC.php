<?php
include "../config.php";

class employe
{   
	private $image;
	private $categories;
	private $nom;
	private $date_debut;
	private $date_fin;
	private $description;

	function __construct($image,$categories,$nom,$date_debut,$date_fin,$description)
	{   
		$this->image=$image;
		$this->categories=$categories;
		$this->nom=$nom;
		$this->date_debut=$date_debut;
		$this->date_fin=$date_fin;
		$this->description=$description;
	}
    function getImage(){return $this->image;}
	function getCategories(){return $this->categories;}
	function getNom(){return $this->nom;}
	function getDate_debut(){return $this->date_debut;}
	function getDate_fin(){return $this->date_fin;}
	function getDescription(){return $this->description;}

	function ajouter()
	{
		try
		{
			$db=config::getConnexion();
			$query=$db->prepare('insert into publicite(image,cat,nom,debut,fin,description) values(:image,:categories,:nom,:date_debut,:date_fin,:description)');
			$query->bindValue(':image',$this->image);
			$query->bindValue(':categories',$this->categories);
			$query->bindValue(':nom',$this->nom);
			$query->bindValue(':date_debut',$this->date_debut);
			$query->bindValue(':date_fin',$this->date_fin);
			$query->bindValue(':description',$this->description);
			$query->execute();
		}
		catch(Exception $e)
		{
			die('erreur' . $e->getMessage());
		}
	}

}
?>