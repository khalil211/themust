<?php
include 'commande.php';

if (isset($_POST['idc']))
{
	$commande=new commande($_POST['idc'],isset($_POST['passee']));
	$i=0;
	$idp='idp'.$i;
	$qte='qte'.$i;
	while (isset($_POST[$idp])&&isset($_POST[$qte]))
	{
		$commande->ajouterProduit($_POST[$idp],$_POST[$qte]);
		$i++;
		$idp='idp'.$i;
		$qte='qte'.$i;
	}
	if ($commande->verifierClient())
	{
		$commande->fusionnerDoublonsProduits();
		if ($commande->verifierProduits())
		{
			if ($commande->ajouter())
				$locate='Location: ../ajout-commande.php?added=true';
			else
				$locate='Location: ../ajout-commande.php?added=false';
		}
		else
			$locate='Location: ../ajout-commande.php?added=false&reason=1';
	}
	else
		$locate='Location: ../ajout-commande.php?added=false&reason=2';
}
else
	$locate='Location: ../ajout-commande.php?added=false';
header($locate);
?>