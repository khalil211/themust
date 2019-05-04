<?php
include "../../admin/entities/client.php";
session_start();
$db=config::getConnexion();

$identifiant=$_POST['lostid'];
$empc=$db->query("SELECT * FROM  client WHERE identifiant='$identifiant'");
           while ($row = $empc->fetch())
		    {
			if ($_POST['mcode']==$row['code'])
			{
			$code='';
 $abc=$db->prepare("UPDATE  client SET motdepasse=:motdepasse,code=:code WHERE identifiant='$identifiant' ");
 $abc->bindValue(":motdepasse",$_POST['newpass']);
 $abc->bindValue(":code",$code);
 $abc->execute();
 }
}
//location:changepass
header('location: index.php');

?>