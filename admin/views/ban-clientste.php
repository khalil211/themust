<?php

include "../../config.php";
$db=config::getConnexion();

if (isset($_GET['edit']))
{
$identifiant = $_GET['edit'];

	
	$emps=$db->query("SELECT * FROM  clientste WHERE identifiant='$identifiant'");
           while ($row = $emps->fetch())
		    {
if ($_GET['etat']=="banned")	
{
$etat="verifie";
}	
else
{
$etat="banned";	
}

 $abcd=$db->prepare("UPDATE  clientste SET etat=:etat WHERE identifiant='$identifiant' ");
 $abcd->bindValue(":etat",$etat);

 $abcd->execute();
 header('location: tables-clientsste.php');
	
}
        
		}

?>