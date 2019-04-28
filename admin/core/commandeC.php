<?php
include "../../config.php";

class commandeC
{
	public function verifierClient($commande)
	{
		$db=config::getConnexion();
		$query=$db->prepare("SELECT * FROM client WHERE identifiant=:id");
		$query->bindValue(':id',$commande->getIdClient());
		$query->execute();
		$client=$query->rowCount()!=0;
		$query=$db->prepare("SELECT * FROM clientste WHERE identifiant=:id");
		$query->bindValue(':id',$commande->getIdClient());
		$query->execute();
		$clientste=$query->rowCount()!=0;
		if ($clientste||$client)
			return true;
		return false;
	}

	public function ajouter($commande)
	{
		if ($commande->getNbProduit())
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
		else
			return false;
	}

	public function afficher()
	{
		$db=config::getConnexion();
		return $db->query('SELECT * FROM commande');
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
			$query=$db->prepare('UPDATE commande SET etat=2 WHERE numero=:id');
		else if ($etatActuel==2)
			$query=$db->prepare('UPDATE commande SET etat=1 WHERE numero=:id');
		$query->bindValue(':id',$_GET['n']);
		$query->execute();
		$query=$db->prepare('SELECT * FROM produitcommande WHERE idcommande=:id');
		$query->bindValue(':id',$_GET['n']);
		$query->execute();
		foreach($query as $pc)
		{
			$query=$db->prepare('UPDATE produit SET quantite=quantite-:qte WHERE id=:id');
			$query->bindValue(':id',$pc['idproduit']);
			$query->bindValue(':qte',$pc['quantite']);
			$query->execute();
		}
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

	public function getCommande($numero)
	{
		$db=config::getConnexion();
		return $db->query('SELECT * FROM commande WHERE numero='.$numero);	
	}

	public function getProduits($numero)
	{
		$db=config::getConnexion();
		return $db->query('SELECT p.id idprod,p.nom nomprod,p.prix prixprod,pc.quantite quantiteprod,p.img imgprod FROM produitcommande pc INNER JOIN produit p ON p.id=pc.idproduit WHERE pc.idcommande='.$numero);
	}

	public function statsVentes()
	{
		$db=config::getConnexion();
		return $db->query('SELECT COUNT(*) nb,SUM(prixtotal) prixtot,SUM(nbproduit) nbprod,MONTH(datecommande) mois,YEAR(datecommande) annee FROM commande WHERE YEAR(datecommande)=YEAR(NOW()) AND etat=1 GROUP BY mois');
	}

	public function annuler($numero)
	{
		$db=config::getConnexion();
		$query=$db->prepare('UPDATE commande set etat=0 WHERE numero=:num');
		$query->bindValue(':num',$numero);
		$query->execute();
	}

	public function commandeEtat()
	{
		$db=config::getConnexion();
		$q=$db->query('SELECT * FROM commande WHERE etat=1');
		$tab['passee']=$q->rowCount();
		$q=$db->query('SELECT * FROM commande WHERE etat=2');
		$tab['attente']=$q->rowCount();
		$q=$db->query('SELECT * FROM commande WHERE etat=0');
		$tab['annulee']=$q->rowCount();
		return $tab;
	}

	public function passable($idcommande)
	{
		$db=config::getConnexion();
		$query=$db->prepare('SELECT * FROM produitcommande WHERE idcommande=:idc');
		$query->bindValue(':idc',$idcommande);
		$query->execute();
		foreach($query as $pc)
		{
			$query2=$db->prepare('SELECT * FROM produit WHERE id=:id');
			$query2->bindValue(':id',$pc['idproduit']);
			$query2->execute();
			$p=$query2->fetch();
			if ($p['quantite']<$pc['quantite'])
				return false;
		}
		return true;
	}
}

?>