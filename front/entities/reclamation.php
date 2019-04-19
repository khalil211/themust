<?php

class reclamation
{   
	private $sujet;
	private $description;
	private $email;
	private $date;
	private $etat;
	

	public function __construct($sujet,$description,$email,$etat)
	{
		$this->sujet=$sujet;
		$this->description=$description;
        $this->email=$email;
       
        $this->etat=$etat;
	}
	
	public function getsujet(){return $this->sujet;}
	public function getdescription(){return $this->description ;}
	public function getemail(){return $this->email;}
	public function getdate(){return $this->date;}
	public function getetat(){return $this->etat;}
	

	public function setsujet($sujet){$this->sujet=$sujet;}
	public function setdescription($description){$this->description=$description;}
	public function setemail($email){$this->email=$email;}
	public function setdate($date){$this->date=$date;}
	public function setetat($image){$this->etat=$etat;}


		function ajouter()
	{
			$db=config::getConnexion();
			$req=$db->prepare('INSERT into reclamation(sujet,email,description,date,etat) values(:sujet,:email,:description,NOW(),:etat)');
	    $req->bindValue(':sujet',$this->sujet);
        $req->bindValue(':email',$this->email);
        $req->bindValue(':description',$this->description);
        $req->bindValue(':etat',$this->etat);
			$req->execute();
		try
		{
		}
		catch(Exception $e)
		{
			die('erreur' . $e->getMessage());
		}
	}

}
?>