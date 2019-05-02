<?php

class blog
{   
	
	private $description;
	private $type;
	private $date;
	private $image;
	private $titre;
	

	public function __construct($titre,$description,$type,$image)
	{
		
		$this->titre=$titre;
		$this->description=$description;
        $this->type=$type;
        
        $this->image=$image;
	}
	
	
	public function gettitre(){return $this->titre;}
	public function getdescription(){return $this->description ;}
	public function gettype(){return $this->type;}
	public function getdate(){return $this->date;}
	public function getimage(){return $this->image;}
	

	
	public function settitre($titre){$this->titre=$titre;}
	public function setdescription($description){$this->description=$description;}
	public function settype($type){$this->type=$type;}
	public function setdate($date){$this->date=$date;}
	public function setimage($image){$this->image=$image;}


		function ajouter()
	{
		try
		{
			$db=config::getConnexion();
			$req=$db->prepare('INSERT INTO `blog` ( `titre`, `description`, `type`, `date`, `image`) VALUES (:titre,:description,:type,NOW(),:image)');
	   
	    $req->bindValue(':titre',$this->titre);
        $req->bindValue(':description',$this->description);
        $req->bindValue(':type',$this->type);
        
        $req->bindValue(':image',$this->image);
			$req->execute();
		}
		catch(Exception $e)
		{
			die('erreur' . $e->getMessage());
		}
	}

}
?>