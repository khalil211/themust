<?php
include "../../config.php";

class faq
{   
	private $id;
	private $question;
	private $reponse;

	public function __construct($id,$question,$reponse)
	{
		$this->id=$id;
		$this->question=$question;
        $this->reponse=$reponse;

	}
	
	public function getId(){return $this->id;}
	public function getQuestion(){return $this->question;}
	public function getReponse(){return $this->reponse;}


	public function setId($id){$this->id=$id;}
	public function setQuestion($question){$this->question=$question;}
	public function setReponse($reponse){$this->reponse=$reponse;}

	
		function ajouter()
	{
		try
		{
			$db=config::getConnexion();
			$req=$db->prepare('INSERT into faq(id,question,reponse) values(:id,:question,:reponse)');
		    $req->bindValue(':id',$this->id);
	        $req->bindValue(':question',$this->question);
	        $req->bindValue(':reponse',$this->reponse);
			$req->execute();
		}
		catch(Exception $e)
		{
			die('erreur' . $e->getMessage());
		}
	}

}
?>