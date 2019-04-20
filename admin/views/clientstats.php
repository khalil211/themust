<?php
include "../entities/client.php";
include "../entities/clientste.php";

$db=config::getConnexion();
$result=$db->query('SELECT * FROM client');
$results=$db->query('SELECT * FROM clientste');
$nbc=0;
$nbs=0;
 while ($row = $result->fetch()) 
 {
 $nbc++;
 }
 while ($row = $results->fetch()) 
 {
 $nbs++;
 }
 $nbt=$nbc+$nbs;
 $nbcp=($nbc*100)/$nbt;
 $nbsp=($nbs*100)/$nbt;

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
    <title> Statistiques Client </title>
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
          ['clients', <?php echo $nbc?>],
          ['STE', <?php echo $nbs ?>]
        ]);

        var options = {
          title: 'la partitions des clients'
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
    <th>clients</th>
    <th>clients STE</th> 
    <th>clients totale</th>
  </tr>
  <tr>
    <td> <?php  echo $nbc;?></td>
    <td><?php  echo $nbs;?></td> 
    <td><?php  echo $nbt;?></td>
  </tr>
  <tr>
    <td> <?php  echo $nbcp?> %</td>
    <td> <?php echo $nbsp?> %</td> 
    <td>100 %</td>
  </tr>
</table>
<?php
    backDown();
    ?>     				                                                                                      
</body>
</html>