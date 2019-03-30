<?php

class panierC
{
	public function ajouter($panier)
	{
		$db=config::getConnexion();
		$query=$db->prepare('INSERT INTO panier(id,nbproduit,prixtotal) VALUES(:id,:nbproduit,:prixtotal)');
		$query->bindValue(':id',$panier->getId());
		$query->bindValue(':nbproduit',$panier->getNbProduit());
		$query->bindValue(':prixtotal',$panier->getPrixTotal());
		$query->execute();
	}

	public function ajouterProduit($idproduit,$vnbp)
	{
		if (isset($_SESSION['idclient']))
		{
			$db=config::getConnexion();
			$query=$db->prepare('SELECT * FROM panier WHERE id=:idp');
			$query->bindValue(':idp',$_SESSION['idclient']);
			$query->execute();
			if ($query->rowCount()==0)
				return false;
			$query=$db->prepare('SELECT * FROM produitpanier WHERE idproduit=:idp');
			$query->bindValue(':idp',$idproduit);
			$query->execute();
			if ($query->rowCount()==1)
				return false;

			$query=$db->prepare('SELECT * FROM produit WHERE id=:idp');
			$query->bindValue(':idp',$idproduit);
			$query->execute();
			if ($query->rowCount()==0)
				return false;
			$p=$query->fetch();
			$query=$db->prepare('INSERT INTO produitpanier(idpanier,idpoduit,quantite,prixunitaire) VALUES(:idpanier,:idproduit,:qte,:pu)');
			$query->bindValue(':idpanier',$_SESSION['idclient']);
			$query->bindValue(':idp',$idproduit);
			$query->bindValue(':ipu',$p['prix']);
			$query->bindValue(':qte',$vnbp);
			$query->execute();
			$query=$db->prepare('UPDATE panier SET nbproduit=nbproduit+:nb,prixtotal=prixtotal+:nprix where id=:idp');
			$query->bindValue(':id',$_SESSION['idclient']);
			$query->bindValue(':nprix',$p['prix']);
			$query->bindValue(':nb',$vnbp);
			$query->execute();
			return true;
		}
	}

	public function supprimerProduit($idproduit)
	{
		if (isset($_SESSION['idclient']))
		{
			$db=config::getConnexion();
			$query=$db->prepare('SELECT * FROM panier WHERE id=:idp');
			$query->bindValue(':idp',$_SESSION['idclient']);
			$query->execute();
			if ($query->rowCount()==0)
				return false;
			$query=$db->prepare('SELECT * FROM produitpanier WHERE idproduit=:idp');
			$query->bindValue(':idp',$idproduit);
			$query->execute();
			if ($query->rowCount()==0)
				return false;
			$p=$query->fetch();
			$query=$db->prepare('DELETE FROM produitpanier WHERE idproduit=:idp)');
			$query->bindValue(':idp',$idproduit);
			$query->execute();
			$query=$db->prepare('UPDATE panier SET nbproduit=nbproduit-:nbp,prixtotal=prixtotal-:prix where id=:idp');
			$query->bindValue(':id',$_SESSION['idclient']);
			$query->bindValue(':nbp',$p['quantite']);
			$query->bindValue(':prix',($p['quantite']*$p['prixunitaire']));
			$query->execute();
			return true;
		}
	}

	public function afficher($panier)
	{
		if (isset($_SESSION['idclient']))
		{
			$db=config::getConnexion();
			$query=$db->prepare('SELECT * FROM panier WHERE id=:idp');
			$query->bindValue(':idp',$_SESSION['idclient']);
			$query->execute();
			if ($query->rowCount()==0)
				return false;
			$donnee=$query->fetch();
			$panier->setId($donnee['id']);
			$panier->setNbProduit($donnee['nbproduit']);
			$panier->setPrixTotal($donnee['prixtotal']);
			$panier->setProduits($this->listeProduit());
			return $panier;
		}
	}

	public function listeProduit()
	{
		if (isset($_SESSION['idclient']))
		{
			$db=config::getConnexion();
			$query=$db->prepare('');
		}
	}
}
?>