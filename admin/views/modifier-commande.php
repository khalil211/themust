<?php
include '../core/commandeC.php';
include "PHPMailer-master/PHPMailerAutoload.php";
$commande=new commandeC();
if (isset($_GET['n'])&&isset($_GET['e']))
{
	if ($commande->exist($_GET['n']))
		$commande->modifierEtat($_GET['n'],$_GET['e']);
}
if (isset($_GET['n'])&&isset($_GET['annuler']))
{
	if ($commande->exist($_GET['n']))
		$commande->annuler($_GET['n']);
}
$db=config::getConnexion();
$c=$db->prepare('SELECT * FROM commande where numero=:num');
$c->bindValue(':num',$_GET['n']);
$c->execute();
$c=$c->fetch();
$client=$db->prepare('SELECT * FROM client where identifiant=:num');
$client->bindValue(':num',$c['idclient']);
$client->execute();
if ($client->rowCount()==0)
{
	$client=$db->prepare('SELECT * FROM clientste where identifiant=:num');
	$client->bindValue(':num',$c['idclient']);
	$client->execute();
}
$client=$client->fetch();
if (isset($_GET['annuler']))
    $mailMsg = 'Votre commande a été annulée.';
else
{
	if ($c['etat']==1)
	{
		$mailMsg='Votre commande a été validée.<br>Consultez la <a target="_blank" href="localhost/themust/admin/views/facturepdf.php?num='.$c['numero'].'">facture</a>.';
	}
	else
		$mailMsg='Votre commande a été validée.';
}
$mailSub = 'The Must';
$mail = new PHPMailer();
$mail ->IsSmtp();
$mail ->SMTPDebug = 0;
$mail ->SMTPAuth = true;
$mail ->SMTPSecure = 'ssl';
$mail ->Host = "smtp.gmail.com";
$mail ->Port = 465; // or 587
$mail ->IsHTML(true);
$mail ->Username = 'themust.gammarth@gmail.com';
$mail ->Password = "themust123";
$mail ->SetFrom("yourmail@gmail.com");
$mail ->Subject = $mailSub;
$mail ->Body = $mailMsg;
$mail ->AddAddress($client['email']);
$mail->Send();
	   
header('Location: tables-commande.php');
?>