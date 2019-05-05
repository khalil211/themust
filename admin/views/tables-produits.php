<?php
include "../../config.php";
$db=config::getConnexion();
$result=$db->query('select * from produit p inner join categorie c where categorie = id_cat order by id desc');
?>

<?php  
if (isset($_GET['search'])&&!empty($_GET['search'])) {
    $search=htmlspecialchars($_GET['search']);
    $result=$db->query('select * from produit WHERE nom LIKE "%'.$search.'%"   ');
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

<?php backUp(); ?>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"> Listes des produits </strong>
                            </div>
                            <div style="margin-left: 1001px;">
                              <a target="_blank" href ="historiquepdf.php" class="btn btn-outline-success"><i class="ti-printer"></i> PDF </a>  
                            </div>
                            <div class="card-body">
                            </form>
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th> Image </th>
                                            <th> Identifiant </th>
                                            <th> Nom </th>
                                            <th> Description </th>
                                            <th> Quantite   </th>
                                            <th> Prix </th>
                                            <th> Catégorie </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                    <?php while ($row = $result->fetch()) { 
                                    ?>
                                        <tr>

                                            <td> <img src="images/<?php echo $row['img']; ?>"  height=100px></td>
                                            <td> <?php echo $row['id']; ?></td>
                                            <td> <?php echo $row['nom']; ?></td>
                                            <td><?php echo $row['descr']; ?></td>
                                            <td><?php echo $row['quantite']; ?></td>
                                            <td><?php echo $row['prix']; ?></td>
                                            <td><?php echo $row['nom_cat']; ?></td>
                                            <td>  
                <a href="modifier-prod.php?edit=<?php echo $row['id']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                
                <a href="supprimer-produit.php?del=<?php echo $row['id']; ?>" class="btn btn-danger btn-xs"><i class ="fa fa-trash-o"> </i> Delete</a>
                                             </td>
                                        </tr>

                                       <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        </div><!-- /#right-panel -->

    <!-- Right Panel -->


<?php backDown(); ?>

</body>

</html>
