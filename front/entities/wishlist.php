<?php
class wishlist{
	private $referance;
	private $nom;
	private $prix;
	private $img;
	

	function __construct($referance,$nom,$prix,$img){
		$this->referance=$referance;
		$this->nom=$nom;
		$this->prix=$prix;
		$this->img=$img;
	}
	function getReferance(){
		return $this->referance;
	}
	function getImg(){
		return $this->img;
	}


	function getNom(){
		return $this->nom;
	}
	function getPrix(){
		return $this->prix;
	}

	function setImg($img){
		$this->img=$img;
	}

	function setNom($nom){
		$this->nom=$nom;
	}

	function setReferance($referance){
		$this->referance=$referance;
	}

	function setPrix($prix){
		$this->prix=$prix;
	}

}

?>