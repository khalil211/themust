<?php
//include "$_SERVER[DOCUMENT_ROOT]/themust/config.php";
include "../../config.php";

class promotionss
{

	public function ajouter($promotions)
	{
		$db=config::getConnexion();
		$query=$db->prepare('INSERT INTO promotions(nom,idproduit,description,datedebut,datefin,pourcentage) VALUES(:nom,:idproduit,:description,:datedebut,:datefin,:pourcentage)');
		$query->bindValue(':nom',$promotions->getnom());
		$query->bindValue(':idproduit',$promotions->getidproduit());
		$query->bindValue(':description',$promotions->getdescription());
		$query->bindValue(':datedebut',$promotions->getdatedebut());
		$query->bindValue(':datefin',$promotions->getdatefin());
		$query->bindValue(':pourcentage',$promotions->getpourcentage());
		$query->execute();
	}

	public function afficher()
		{
			$sql="SELECT * FROM promotions"	;
			$db=config::getConnexion();
			try
			{
				$liste =$db->query($sql);
				return $liste;
			} catch (Exception $e)
			{
				die('erreur: '.$e->getMessage());
			}
		}

	public function nombre()
	{
		$db=config::getConnexion();
		$nb=$db->query('SELECT COUNT(*) nb FROM promotions event');
		$r=$nb->fetch();
		return $r['nb'];
	}

	public function exist($noomm)
	{
		$db=config::getConnexion();
		$query=$db->prepare('SELECT * FROM promotions event WHERE noomm=:nom');
		$query->bindValue(':nom',$numero);
		$query->execute();
		return $query->rowCount()!=0;
	}

	public function modifierEtat($nomm,$etatActuel)
	{
		$db=config::getConnexion();
		if ($etatActuel==1)
			$query=$db->prepare('UPDATE promotions event SET etat=0 WHERE nomm=:nom');
		else
			$query=$db->prepare('UPDATE promotions event SET etat=1 WHERE nomm=:nom');
		$query->bindValue(':nom',$_GET['n']);
		$query->execute();
	}

	public function supprimer($nomm)
	{
		$db=config::getConnexion();
		$query=$db->prepare('DELETE FROM promotions WHERE nomm=:nom');
		$query->bindValue(':nom',$nom);
		$query->execute();
		$query=$db->prepare('DELETE FROM promotions WHERE nomm=:nom');
		$query->bindValue(':nom',$nom);
		$query->execute();
	}
}

?>