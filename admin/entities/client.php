<?php
include "../../config.php";

class client
{   
	private $identifiant;
	private $nom;
	private $prenom;
	private $email;
	private $motdepasse;
	private $adresse;
	private $telephone;
	private $etat;

	public function __construct($identifiant,$email,$motdepasse,$nom,$prenom,$adresse,$telephone,$etat)
	{
		$this->identifiant=$identifiant;
		$this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
        $this->motdepasse=$motdepasse;
		$this->adresse=$adresse;
		$this->telephone=$telephone;
		$this->etat=$etat;
	}
	
	public function getIdentifiant(){return $this->identifiant;}
	public function getNom(){return $this->nom ;}
	public function getPrenom(){return $this->prenom;}
	public function getEmail(){return $this->email;}
	public function getMotdepasse(){return $this->motdepasse;}
	public function getadresse(){return $this->adresse;}
	public function getTelephone(){return $this->telephone;}
	public function getEtat(){return $this->etat;}

	public function setIdentifiant($identifiant){$this->identifiant=$identifiant;}
	public function setNom($nom){$this->nom=$nom;}
	public function setPrenom($prenom){$this->prenom=$prenom;}
	public function setEmail($email){$this->email=$email;}
	public function setMotdepasse($motdepasse){$this->motdepasse=$motdepasse;}
	public function setAdresse($adresse){$this->adresse=$adresse;}
	public function setTelephone($telephone){$this->telephone=$telephone;}
	public function setEtat($etat){$this->etat=$etat;}
	
		function ajouter()
	{
		try
		{
			if (preg_match('/[a-zA-Z0-9]{4,25}(STE)$/',$this->identifiant))
				return false;
			$db=config::getConnexion();
			$req=$db->prepare('INSERT into client(identifiant,email,motdepasse,nom,prenom,adresse,telephone,etat) values(:identifiant,:email,:motdepasse,:nom,:prenom,:adresse,:telephone,:etat)');
		    $req->bindValue(':identifiant',$this->identifiant);
	        $req->bindValue(':email',$this->email);
	        $req->bindValue(':motdepasse',$this->motdepasse);
	        $req->bindValue(':nom',$this->nom);
	        $req->bindValue(':prenom',$this->prenom);
			$req->bindValue(':adresse',$this->adresse);
			$req->bindValue(':telephone',$this->telephone);
			$req->bindValue(':etat',$this->etat);
			$req->execute();
		}
		catch(Exception $e)
		{
			die('erreur' . $e->getMessage());
		}
		return true;
	}

}
?>