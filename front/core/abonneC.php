<?php
include_once '../../config.php';
class abonneC{ 

	public function ajouter($abonne)
	{
		$db=config::getConnexion();
		$query=$db->prepare('INSERT INTO abonne(adresse_mail,date_a) VALUES(:mail,NOW())');
		$query->bindValue(':mail',$abonne->get_adresse());
		$query->execute();
	}

	public function supprimer($abonne)
	{
		$db=config::getConnexion();
		$query=$db->prepare('DELETE FROM abonne WHERE adresse_mail=:mail');
		$query->bindValue(':mail',$abonne->get_adresse());
		$query->execute();
	}
		
	function afficherabonne(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From abonne";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


		function supprimerabonne($adresse_mail){
		$sql="DELETE FROM abonne where adresse_mail= :adresse_mail";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':adresse_mail',$adresse_mail);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function long()
{$sql="SELECT COUNT(*) as total FROM abonne";
		$db = config::getConnexion();
		try{
		$total=$db->query($sql);
		return $total;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	





	function recupererabonne(){
		$sql="SELECT adresse_mail from abonne";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeabonne($adresse_mail){
		$sql="SELECT * from abonne where adresse_mail=$adresse_mail";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}
?>