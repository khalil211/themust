<?php

class comment
{   
	private $idclient;
	private $description;
    private $idblog;
	private $date;

	

	public function __construct($idclient,$description,$idblog)
	{
		$this->idclient=$idclient;
		$this->description=$description;
		$this->idblog=$idblog;
        
	}
	
	public function getidclient(){return $this->idclient;}
	public function getidblog(){return $this->idblog;}
	public function getdescription(){return $this->description ;}
	
	public function getdate(){return $this->date;}

	

	public function setidclient($sujet){$this->idclient=$idclient;}
	public function setdescription($description){$this->description=$description;}

	public function setdate($date){$this->date=$date;}
	


		function ajouter()
	{
			$db=config::getConnexion();
			$req=$db->prepare('INSERT into comment(idclient,description,date,idblog) values(:idclient,:description,NOW(),:idblog)');
	    $req->bindValue(':idclient',$this->idclient);
        $req->bindValue(':description',$this->description);
        $req->bindValue(':idblog',$this->idblog); 
         
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