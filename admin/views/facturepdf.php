<?php
require 'pdf/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
include '../core/commandeC.php';

if (isset($_GET['num']))
{

	$commandeC=new commandeC;
	$commande=$commandeC->getCommande($_GET['num']);
	$commande=$commande->fetch();
	$produits=$commandeC->getProduits($_GET['num']);

	ob_start();
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Facture #<?php echo $commande['numero']; ?></title>
		<style type="text/css">
			h1
			{
				text-align: center;
			}

			table
			{
				border-collapse: collapse;
			}

			.td, th
			{
				border: solid 1px black;
				padding: 5px 5px 5px 5px;
			}

			td
			{
				text-align: center;
				padding: 5px 5px 5px 5px;
			}

			#tds
			{
				border-right: solid 1px black;
			}
		</style>
	</head>
	<body>
		<h1>
			Commande #<?php echo $commande['numero']; ?>
		</h1>
		<h3>Informations</h3>
		<p>
			ID Client: <?php echo htmlspecialchars($commande['idclient']) ?><br>
            Nombre de produits:  <?php echo htmlspecialchars($commande['nbproduit']) ?><br>
            Prix total: <?php echo htmlspecialchars($commande['prixtotal']) ?><br>
            Etat: <?php if ($commande['etat']==1) echo 'Passée'; else if($commande['etat']==2) echo 'En attente'; else echo 'Annulée'; ?> <br>
            Date: <?php echo $commande['datecommande']; ?><br><br>
		</p>
		<h3>Produits</h3>
		<table>
			<tr>
				<th>ID</th>
				<th>NOM</th>
				<th>PRIX UNITAIRE</th>
				<th>QUANTITE</th>
				<th>PRIX TOTAL</th>
			</tr>
			<?php
			foreach ($produits as $p)
			{
				?>
				<tr>
					<td class="td"><?php echo $p['idprod']; ?></td>
					<td class="td"><?php echo $p['nomprod']; ?></td>
					<td class="td"><?php echo $p['prixprod']; ?></td>
					<td class="td">×<?php echo $p['quantiteprod']; ?></td>
					<td class="td"><?php echo $p['quantiteprod']*$p['prixprod']; ?></td>
				</tr>
				<?php
			}
			?>
			<tr>
				<td></td>
				<td></td>
				<td id="tds"></td>
				<td class="td">TOTAL:</td>
				<td class="td"><?php echo $commande['prixtotal']; ?></td>
			</tr>
		</table>
	</body>
	</html>
	<?php
	$facture=ob_get_clean();
	$pdf=new Html2Pdf('P','A4','fr','true','UTF-8');
	$pdf->writeHTML($facture);
	$pdf->output('facture'.$commande['numero'].'.pdf');
}
else
	header('Location: index.php');
?>