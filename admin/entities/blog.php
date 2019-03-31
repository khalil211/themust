<?php

class blog
{   
	private $idblog;
	private $description;
	private $type;
	private $date;
	private $image;
	

	public function __construct($idblog,$description,$type,$date,$image)
	{
		$this->idblog=$idblog;
		$this->description=$description;
        $this->type=$type;
        $this->date=$date;
        $this->image=$image;
	}
	
	public function getidblog(){return $this->idblog;}
	public function getdescription(){return $this->description ;}
	public function gettype(){return $this->type;}
	public function getdate(){return $this->date;}
	public function getimage(){return $this->image;}
	

	public function setidblog($idblog){$this->idblog=$idblog;}
	public function setdescription($description){$this->description=$description;}
	public function settype($type){$this->type=$type;}
	public function setdate($date){$this->date=$date;}
	public function setimage($image){$this->image=$image;}


		function ajouter()
	{
		try
		{
			$db=config::getConnexion();
			$req=$db->prepare('INSERT into blog(idblog,description,type,date,image) values(:idblog,:description,:type,:date,:image)');
	    $req->bindValue(':idblog',$this->idblog);
        $req->bindValue(':description',$this->description);
        $req->bindValue(':type',$this->type);
        $req->bindValue(':date',$this->date);
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