<?php
class clientste
{   
	private $identifiant;
	private $nomste;
	private $matfis;
	private $email;
	private $emailB;
	private $motdepasse;
	private $adresse;
	private $telephone;

	public function __construct($identifiant,$nomste,$matfis,$email,$emailB,$motdepasse,$adresse,$telephone)
	{
		$this->identifiant=$identifiant;
		$this->nomste=$nomste;
        $this->matfis=$matfis;
        $this->email=$email;
        $this->emailB=$emailB;
        $this->motdepasse=$motdepasse;
		$this->adresse=$adresse;
		$this->telephone=$telephone;
	}
	
	public function getIdentifiant(){return $this->identifiant;}
	public function getNomste(){return $this->nomste;}
	public function getMatfis(){return $this->matfis;}
	public function getEmail(){return $this->email;}
	public function getEmailB(){return $this->emailB;}
	public function getMotdepasse(){return $this->motdepasse;}
	public function getadresse(){return $this->adresse;}
	public function getTelephone(){return $this->telephone;}

	public function setIdentifiant($identifiant){$this->identifiant=$identifiant;}
	public function setNomste($nomste){$this->nomste=$nomste;}
	public function setMatfis($matfis){$this->matfis=$matfis;}
	public function setEmail($email){$this->email=$email;}
	public function setEmailB($emailB){$this->emailB=$emailB;}
	public function setMotdepasse($motdepasse){$this->motdepasse=$motdepasse;}
	public function setAdresse($adresse){$this->adresse=$adresse;}
	public function setTelephone($telephone){$this->telephone=$telephone;}
	
		function ajouter()
	{
		try
		{
			$db=config::getConnexion();
			$req=$db->prepare('INSERT into clientste(identifiant,email,emailB,motdepasse,nomste,matfis,adresse,telephone) values(:identifiant,:email,:emailB,:motdepasse,:nomste,:matfis,:adresse,:telephone)');
	    $req->bindValue(':identifiant',$this->identifiant);
        $req->bindValue(':email',$this->email);
        $req->bindValue(':emailB',$this->emailB);
        $req->bindValue(':motdepasse',$this->motdepasse);
        $req->bindValue(':nomste',$this->nomste);
        $req->bindValue(':matfis',$this->matfis);
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