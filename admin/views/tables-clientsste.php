<?php
include "../entities/client.php";
$db=config::getConnexion();
$result=$db->query('SELECT * FROM clientste');

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <?php
	backup();
	?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"> Listes des clients </strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th> Identifiant </th>
                                            <th> Email </th>
                                            <th> Nom STE</th>
                                            <th> Matricule Fiscale </th>
											<th> Adresse</th>
											<th> téléphone</th>
											<th> Actions</th>
											<th> Actions</th>

                                        </tr>
                                    </thead>
                                   <tbody>
							        <?php while ($row = $result->fetch()) { 
                                    ?>
                                              <tr>

                                       
                                            <td>  <?php echo $row['identifiant']; ?></td>
                                            <td> <?php echo $row['email']; ?></td>
                                            <td><?php echo $row['nomste']; ?></td>
                                            <td><?php echo $row['matfis']; ?></td>
                                            <td><?php echo $row['adresse']; ?></td>
                                            <td><?php echo $row['telephone']; ?></td>
											<td><?php echo $row['etat']; ?></td>
                                            <td>  
              <a href="modifier-clientste.php?edit=<?php echo $row['identifiant']; ?>&edit2=<?php echo $row['email']; ?>&edit3=<?php echo $row['motdepasse']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>

               <a href="supprimer-clientste.php?del=<?php echo $row['identifiant']; ?>" class="btn btn-danger btn-xs"><i class ="fa fa-trash-o"> </i> Delete</a>
               <a href="ban-clientste.php?edit=<?php echo $row['identifiant']; ?>&etat=<?php echo $row['etat']; ?>" class="btn btn-danger btn-xs"><i class ="fa fa-trash-o"> </i><?php if ($row['etat']=="banned"){echo"unban";}else{echo"ban";}?></a>                              
											 </td>
											 
                                        </tr>
                                        
										<?php
										}
										?>
										</tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>
