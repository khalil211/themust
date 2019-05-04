<?php
include "../core/produitC.php";

ob_start();
?>
<page backtop="20mm">
	 <h1> Historique des produits  </h1>
		<table style="wiDTh:100%;border: 2px dashed " >
		<tr>

														  <th scope="col" style="text-align: center;">Id produit</th>
													      <th scope="col" style="text-align: center;">Nom</th>
													      <th scope="col" style="text-align: center;">Description</th>
													      <th scope="col" style="text-align: center;"> Quantite </th>
													      <th scope="col" style="text-align: center;">Prix</th>
													      <th scope="col" style="text-align: center;"> Categorie</th>
													      
																					  
													      
													    
													</tr>
													
		<?php
	$commandess=new produitC();
$listcommandes=$commandess->recupererhistorique();
		foreach($listcommandes as $row) {
			?>
		  <tr>
		  											<td scope="col" style="text-align: center;"> <?php echo $row["id"] ; ?></td> 
												    <td scope="col" style="text-align: center;"> <?php echo $row["nom"] ; ?></td> 
												    <td scope="col" style="text-align: center;"> <?php echo $row["descr"] ; ?></td> 
												    <td scope="col" style="text-align: center;"> <?php echo $row["quantite"] ; ?> </td> 
												    <td scope="col" style="text-align: center;"> <?php echo $row["prix"]; ?> DT</td> 
												    <td scope="col" style="text-align: center;"> <?php echo $row["nom_cat"] ; ?> </td>    
		 </tr>
			<?php  
		}

?>
	</table>


</page>

<?php
$content= ob_get_clean();
require('html2pdf/html2pdf.class.php');
try{
$pdf=new html2pdf('p','A4','fr','true','UTF-8');
$pdf->pdf->SetDisplayMode('fullpage');

$pdf->writeHTML($content);
//$pdf->pdf->IncludeJS('print(true)');
ob_end_clean();
$pdf->Output('test.pdf');
}
catch(HTML2PDF_exception $e)
{
	die($e);
}

?>