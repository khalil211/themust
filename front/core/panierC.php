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

	public function ajouterProduit($idpanier,$idproduit,$vnbp)
	{
		if (isset($_SESSION['idclient']) || ($idpanier!=-1))
		{
			$db=config::getConnexion();
			$query=$db->prepare('SELECT * FROM panier WHERE id=:idp');
			$query->bindValue(':idp',$idpanier);
			$query->execute();
			if ($query->rowCount()==0)
				return false;
			$query->closeCursor();
			$query=$db->prepare('SELECT * FROM produit WHERE id=:idp');
			$query->bindValue(':idp',$idproduit);
			$query->execute();
			if ($query->rowCount()==0)
				return false;
			$p=$query->fetch();
			$query=$db->prepare('SELECT * FROM produitpanier WHERE idproduit=:idp AND idpanier=:idpan');
			$query->bindValue(':idp',$idproduit);
			$query->bindValue(':idpan',$idpanier);
			$query->execute();
			if ($query->rowCount()==1)
			{
				$query=$db->prepare('UPDATE produitpanier set quantite=quantite+:qte WHERE idpanier=:idpanier AND idproduit=:idp');
				$query->bindValue(':idpanier',$idpanier);
				$query->bindValue(':idp',$idproduit);
				$query->bindValue(':qte',$vnbp);
				$query->execute();
			}
			else
			{
				$query=$db->prepare('INSERT INTO produitpanier(idpanier,idproduit,quantite) VALUES(:idpanier,:idproduit,:qte)');
				$query->bindValue(':idpanier',$idpanier);
				$query->bindValue(':idproduit',$idproduit);
				$query->bindValue(':qte',$vnbp);
				$query->execute();
			}
			$query=$db->prepare('UPDATE panier SET nbproduit=nbproduit+:nb,prixtotal=prixtotal+:nprix where id=:id');
			$query->bindValue(':id',$idpanier);
			$query->bindValue(':nprix',($p['prix']*$vnbp));
			$query->bindValue(':nb',$vnbp);
			$query->execute();
			return true;
		}
		else
		{
			if (array_key_exists($idproduit,$_SESSION['produitpanier']))
				$_SESSION['produitpanier'][$idproduit]+=$vnbp;
			else
				$_SESSION['produitpanier'][$idproduit]=$vnbp;
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
			$query->closeCursor();
			$query=$db->prepare('SELECT * FROM produitpanier WHERE idproduit=:idp AND idpanier=:ipa');
			$query->bindValue(':idp',$idproduit);
			$query->bindValue(':ipa',$_SESSION['idclient']);
			$query->execute();
			if ($query->rowCount()==0)
				return false;
			$pp=$query->fetch();
			$query->closeCursor();
			$query=$db->prepare('SELECT * FROM produit WHERE id=:idp');
			$query->bindValue(':idp',$idproduit);
			$query->execute();
			if ($query->rowCount()==0)
				return false;
			$p=$query->fetch();
			$query->closeCursor();
			$query=$db->prepare('DELETE FROM produitpanier WHERE idproduit=:idp AND idpanier=:ipa');
			$query->bindValue(':idp',$idproduit);
			$query->bindValue(':ipa',$_SESSION['idclient']);
			$query->execute();
			$query=$db->prepare('UPDATE panier SET nbproduit=nbproduit-:nbp,prixtotal=prixtotal-:prix where id=:idp');
			$query->bindValue(':idp',$_SESSION['idclient']);
			$query->bindValue(':nbp',$pp['quantite']);
			$query->bindValue(':prix',($pp['quantite']*$p['prix']));
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
			$query->closeCursor();
			return $panier;
		}
	}

	public function listeProduit()
	{
		if (isset($_SESSION['idclient']))
		{
			$db=config::getConnexion();
			$query=$db->prepare('SELECT * FROM produitpanier WHERE idpanier=:idp');
			$query->bindValue(':idp',$_SESSION['idclient']);
			$query->execute();
			$produits=array();
			foreach ($query as $prod)
			{
				$liste=$db->prepare('SELECT * FROM produit WHERE id=:id');
				$liste->bindValue(':id',$prod['idproduit']);
				$liste->execute();
				$p=$liste->fetch();
				array_push($produits,new produitpanier($prod['idpanier'],$prod['idproduit'],$prod['quantite'],$p['prix'],$p['nom'],$p['img']));
				$liste->closeCursor();
			}
			$query->closeCursor();
			return $produits;
		}
	}

	public function modifierProduit($idproduit,$qte)
	{
		if (isset($_SESSION['idclient']))
		{
			$db=config::getConnexion();
			$query=$db->prepare('SELECT * from produitpanier WHERE idproduit=:idprod AND idpanier=:idpan');
			$query->bindValue(':idprod',$idproduit);
			$query->bindValue(':idpan',$_SESSION['idclient']);
			$query->execute();
			$pp=$query->fetch();
			$query=$db->prepare('UPDATE produitpanier SET quantite=:qte WHERE idproduit=:idprod AND idpanier=:idpan');
			$query->bindValue(':qte',$qte);
			$query->bindValue(':idprod',$idproduit);
			$query->bindValue(':idpan',$_SESSION['idclient']);
			$query->execute();
			$query=$db->prepare('SELECT * FROM produit WHERE id=:id');
			$query->bindValue(':id',$idproduit);
			$query->execute();
			$p=$query->fetch();
			$query->closeCursor();
			$query=$db->prepare('UPDATE panier SET prixtotal=prixtotal+:prix,nbproduit=nbproduit+:nb WHERE id=:id');
			$query->bindValue(':id',$_SESSION['idclient']);
			$query->bindValue(':nb',($qte-$pp['quantite']));
			$query->bindValue(':prix',($p['prix']*($qte-$pp['quantite'])));
			$query->execute();
		}
		else
			$_SESSION['produitpanier'][$idproduit]=$qte;
	}

	public function supprimer()
	{
		$db=config::getConnexion();
		$query=$db->prepare('DELETE FROM produitpanier WHERE idpanier=:idp');
		$query->bindValue(':idp',$_SESSION['idclient']);
		$query->execute();
		$query=$db->prepare('UPDATE panier SET nbproduit=0,prixtotal=0 WHERE id=:idp');
		$query->bindValue(':idp',$_SESSION['idclient']);
		$query->execute();
	}

	public function getProduit($idp)
	{
		$db=config::getConnexion();
		$p=$db->prepare('SELECT * FROM produit WHERE id=:id');
		$p->bindValue(':id',$idp);
		$p->execute();
		return $p->fetch();
	}

	public function produitsSession()
	{
		$produits=array();
		if (isset($_SESSION['produitpanier']))
		{
			$db=config::getConnexion();
			foreach ($_SESSION['produitpanier'] as $idp => $q)
			{
				$liste=$db->prepare('SELECT * FROM produit WHERE id=:id');
				$liste->bindValue(':id',$idp);
				$liste->execute();
				$p=$liste->fetch();
				array_push($produits,new produitpanier(-1,$idp,$q,$p['prix'],$p['nom'],$p['img']));
				$liste->closeCursor();
			}
		}
		return $produits;
	}
}
?>