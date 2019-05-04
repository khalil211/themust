<?php  
include "../../config.php";
$db=config::getConnexion();


?>
<?php  

$result=$db->query('select * from fidelite ORDER BY date_creation');
if (!empty($_GET['searchh'])) {
    $search=htmlspecialchars($_GET['searchh']);
    $result=$db->query('select * from fidelite WHERE ID_client  LIKE "%'.$search.'%" OR sexe  LIKE "%'.$search.'%" OR point  LIKE "%'.$search.'%"  ');
}

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
    <!-- Left Panel -->

    <?php backUp() ?>

<form action="tables-fidélité.php">
    

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"> Listes  </strong>
                                <input type="text" name="searchh" id="searchh"> <button><i class="fa fa-check"></i></button> <button><i class="fa fa-rotate-left"></i></button>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                     <thead>
                                        <tr>
                                            <th> Sexe </th>
                                            <th> client </th>
                                            <th> Date de naissance </th>
                                            <th> Date de création   </th>
                                            <th> Point</th>
                                            <th> Action </th>

                                        </tr>
                                    </thead>
                                   <tbody>
                                    <?php while ($row = $result->fetch()) { ?>
                                        <tr>

                                            <td><?php echo $row['sexe']; ?> </td>
                                            <td> <?php echo $row['ID_client']; ?></td>

                                            <td><?php echo $row['date_naissance']; ?></td>
                                            <td><?php echo $row['date_creation']; ?></td>
                                            <td><?php echo $row['point']; ?></td>
                                             <td>
                            
                            <!--a href="#" class="btn btn-primary btn-xs" onclick="verifForm()" type="submit" Value="Ajouter"><i class="fa fa-folder"></i> ajotuer</a> -->
                            <a href="ediitf.php?edit=<?php echo $row['ID']; ?>" class="btn btn-success"><i class="fa fa-magic"></i>  Modifier </a>
                           <!--<a href="delete.php?del=<?php echo $row['ID']; ?>" class="btn btn-info btn-xs"><i class="fa fa-trash-o">Delete</a>-->
                                <a href="deletef.php?del=<?php echo $row['ID'];?>" class="btn btn-danger"><i class="fa fa-trash-o"></i>  Supprimer</a>
                          </td>
                                        </tr>
                                    <?php } ?>

                                        </form>
                                       
                                </table>

                                  <?php
                                    $resu=$db->query("SELECT ID FROM fidelite");
$row = $resu->fetchAll(); ?>  
<td> nombre de cartes fidélité : <?php echo (count($row));  ?></td> 

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
