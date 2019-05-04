<?php
include '../../config.php';
$db=config::getConnexion();
$result=$db->query('SELECT * FROM publicite');
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Liste des commandes</title>
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

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <?php backUp(); ?>
    <div class="card-header">
        <strong>Statistiques publicité</strong>
    </div>
    <div class="content mt-3">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div id="nbvues" style="height: 700px;width: 900px;"></div>
                </div>
            </div>
        </div>
    </div>
    <?php backDown(); ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      let data = google.visualization.arrayToDataTable([
        ["ID pub", "Nombre de vues", { role: "style" } ],
        <?php
        foreach ($result as $el)
        {
            ?>
            ['<?php echo $el['ID']; ?>',<?php echo $el['nb_vues']; ?>,"#82b1ff"],
            <?php
        }
        ?>
      ]);

      let view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      let options = {
        title: "Nombre de pub vues.",
        width: 500,
        height: 600,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      let chart = new google.visualization.ColumnChart(document.getElementById("nbvues"));
      chart.draw(view, options);
  }
  </script>
</body>

</html>
