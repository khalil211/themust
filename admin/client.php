<?php
include "../config.php";

class client
{   
	private $identifiant;
	private $nom;
	private $prenom;
	private $email;
	private $motdepasse;
	private $adresse;
	private $telephone;

	public function __construct($identifiant,$email,$motdepasse,$nom,$prenom,$adresse,$telephone)
	{
		$this->identifiant=$identifiant;
		$this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
        $this->motdepasse=$motdepasse;
		$this->adresse=$adresse;
		$this->telephone=$telephone;
	}
	
	public function getIdentifiant(){return $this->identifiant;}
	public function getNom(){return $this->nom ;}
	public function getPrenom(){return $this->prenom;}
	public function getEmail(){return $this->email;}
	public function getMotdepasse(){return $this->motdepasse;}
	public function getadresse(){return $this->adresse;}
	public function getTelephone(){return $this->telephone;}

	public function setIdentifiant($identifiant){$this->identifiant=$identifiant;}
	public function setNom($nom){$this->nom=$nom;}
	public function setPrenom($prenom){$this->prenom=$prenom;}
	public function setEmail($email){$this->email=$email;}
	public function setMotdepasse($motdepasse){$this->motdepasse=$motdepasse;}
	public function setAdresse($adresse){$this->adresse=$adresse;}
	public function setTelephone($telephone){$this->telephone=$telephone;}
	
		function ajouter()
	{
		try
		{
			$db=config::getConnexion();
			$req=$db->prepare('INSERT into client(identifiant,email,motdepasse,nom,prenom,adresse,telephone) values(:identifiant,:email,:motdepasse,:nom,:prenom,:adresse,:telephone)');
	    $req->bindValue(':identifiant',$this->identifiant);
        $req->bindValue(':email',$this->email);
        $req->bindValue(':motdepasse',$this->motdepasse);
        $req->bindValue(':nom',$this->nom);
        $req->bindValue(':prenom',$this->prenom);
		$req->bindValue(':adresse',$this->adresse);
		$req->bindValue(':telephone',$this->telephone);
			$req->execute();
		}
		catch(Exception $e)
		{
			die('erreur' . $e->getMessage());
		}
	}

}
?>