<?php
include "../../config.php";

class faq
{   
	private $question;
	private $reponse;

	public function __construct($question,$reponse)
	{

		$this->question=$question;
        $this->reponse=$reponse;

	}
	

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
			$req=$db->prepare('INSERT into faq(question,reponse) values(:question,:reponse)');

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