<?php
include "../../front/core/abonneC.php";
$abonneC=new abonneC();
if (isset($_GET["adresse_mail"]))
{ echo $_GET["adresse_mail"];
	$abonneC->supprimerabonne($_POST["adresse_mail"]);
	header('Location: tables-abonne.php');
}
?>