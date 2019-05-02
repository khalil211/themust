<?php
include '../core/abonneC.php';
include '../entities/abonne.php';
if ($_POST['mail']!=null)
{
	$abonne1=new abonne($_POST['mail']);

	$abonne1C=new abonneC();
	$abonne1C->ajouter_abonne($abonne1);

	header ('Location ../index.php');
}
else 
{
	include '../index.php'
	?>
	<script type="text/javascript"></script>
}

?>