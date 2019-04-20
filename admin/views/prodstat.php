<?php
include "../entities/produit.php";


$db=config::getConnexion();
$result=$db->query('SELECT * FROM produit');
$results=$db->query('SELECT * FROM produit WHERE prix > 499 ');
$nbpt=0;
$nbp=0;
 while ($row = $result->fetch()) 
 {
 $nbpt++;
 }
 while ($row = $results->fetch()) 
 {
 $nbp++;
 }
 //$nbt=$nbc+$nbs;
 $nbpp=($nbp*100)/$nbpt;
 $var=100-$nbpp;
 $small=$nbpt-$nbp;
 
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endiff]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Statistiques Produits </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets\js\inscription.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['+500', <?php echo $nbp?>],
          ['-500', <?php echo $small ?>]
        ]);

        var options = {
          title: 'Prix'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

</head>

<body>
  <?php
    backUp();
    ?>
	
	    <div id="piechart" style="width: 900px; height: 500px;"></div>
		<br>
<table style="width:100%">
  <tr>

    <th>Produits total </th>
    <th>Prix > 500 </th>
    <th>Prix < 500 </th> 
 
  </tr>
  <tr>
    <td> <?php  echo $nbpt;?></td>
    <td><?php  echo $nbp;?></td>
    <td><?php  echo $small;?></td> 
 
  </tr>
  <tr>
    <td> 100 %</td>
    <td> <?php echo $nbpp?> %</td> 
        <td> <?php echo $var?> %</td> 

  
  </tr>
</table>
<?php
    backDown();
    ?>     				                                                                                      
</body>
</html>