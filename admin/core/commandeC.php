<?php
include "$_SERVER[DOCUMENT_ROOT]/themust/config.php";

class commandeC
{
	public function verifierClient($commande)
	{
		$db=config::getConnexion();
		$query=$db->prepare('SELECT * FROM client WHERE id=:id');
		$query->bindValue(':id',$commande->getIdClient());
		$query->execute();
		return $query->rowCount()!=0;
	}

	public function ajouter($commande)
	{
		$db=config::getConnexion();
		$query=$db->prepare('INSERT INTO commande(idclient,nbproduit,prixtotal,etat,datecommande) VALUES(:idclient,:nbp,:pt,:etat,NOW())');
		$query->bindValue(':idclient',$commande->getIdClient());
		$query->bindValue(':etat',$commande->getEtat());
		$query->bindValue(':nbp',$commande->getNbProduit());
		$query->bindValue(':pt',$commande->getPrixTotal());
		if(!$query->execute())
			return false;
		$commande->setNumero($db->lastInsertId());
		$produits=$commande->getProduits();
		for ($i=0;$i<count($produits);$i++)
			$produits[$i]->ajouter($commande->getNumero());
		return true;
	}

	public function afficher($tri,$nbelt,$page)
	{
		$page--;
		switch ($tri%6)
		{
			case 1:
				$eltATrier=' numero';
				break;
			case 2:
				$eltATrier=' idclient';
				break;
			case 3:
				$eltATrier=' nbproduit';
				break;
			case 4:
				$eltATrier=' prixtotal';
				break;
			case 5:
				$eltATrier=' etat';
				break;
			case 0:
				$eltATrier=' datecommande';
				break;
		}
		if ($tri>6)
			$eltATrier=$eltATrier.' DESC';
		$request='SELECT numero,idclient,nbproduit,prixtotal,etat,datecommande FROM commande ORDER BY'.$eltATrier;
		if ($nbelt!=-1)
			$request=$request.' LIMIT '.($page*$nbelt).','.$nbelt;
		$db=config::getConnexion();
		return $db->query($request);
	}

	public function nombre()
	{
		$db=config::getConnexion();
		$nb=$db->query('SELECT COUNT(*) nb FROM commande');
		$r=$nb->fetch();
		return $r['nb'];
	}

	public function exist($numero)
	{
		$db=config::getConnexion();
		$query=$db->prepare('SELECT * FROM commande WHERE numero=:id');
		$query->bindValue(':id',$numero);
		$query->execute();
		return $query->rowCount()!=0;
	}

	public function modifierEtat($num,$etatActuel)
	{
		$db=config::getConnexion();
		if ($etatActuel==1)
			$query=$db->prepare('UPDATE commande SET etat=0 WHERE numero=:id');
		else
			$query=$db->prepare('UPDATE commande SET etat=1 WHERE numero=:id');
		$query->bindValue(':id',$_GET['n']);
		$query->execute();
	}

	public function supprimer($num)
	{
		$db=config::getConnexion();
		$query=$db->prepare('DELETE FROM produitcommande WHERE idcommande=:id');
		$query->bindValue(':id',$num);
		$query->execute();
		$query=$db->prepare('DELETE FROM commande WHERE numero=:id');
		$query->bindValue(':id',$num);
		$query->execute();
	}
}

?>