<?php
include "../../config.php";
$db=config::getConnexion();
$result=$db->query('SELECT * FROM publicite');

while ($row = $result->fetch()) 
 {
$nb=$row['nb_vues'];
$nom=$row['cat'];
 }

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
          ['Bar', ''],
          ['', <?php echo $nb?>],
         
        ]);

        var options = {
          title: 'Nombre de vues'
        };

        var chart = new google.visualization.BarChart(document.getElementById('Barchart'));

        chart.draw(data, options);
      }
    </script>

</head>

<body>
  <?php
    backUp();
    ?>
  
      <div id="Barchart" style="width: 900px; height: 500px;"></div>
    <br>
<table style="width:100%">
 

  </table>
<?php
    backDown();
    ?>                                                                                                  
</body>
</html>
 