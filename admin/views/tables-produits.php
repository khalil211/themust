<?php
include "../../config.php";
$db=config::getConnexion();
$result=$db->query('select * from produit p inner join categorie c where categorie = id_cat ');
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
                                <strong class="card-title"> Listes des produits </strong>
                            </div>
                            <div class="card-body">
                             <!--   <label> Recherche </label>
                                <input type="text" name="recherche">
                                <form action="recherche-prod.php" method="GET">
                                <input type="text" name="nom">
                               <input type="submit" value ="recherche"class="btn btn-success btn-sm" style="width: 80px; height: 30px;" />-
                         /*                     
                          
                           <?php
                           /* $reqq=("select * from produit");
                            $ress=$db->query($reqq);
                            while ($d=$ress->fetch());
                            {
                                echo "<h1>{$d["nom"]}</h1>";
                                echo "<p>{$d["prix"]}</p>";
                                echo "<p>{$d["quantite"]}</p>";
                                echo "<p>{$d["description"]}</p>";
                            }*/

                            ?>-->


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

<?php backDown(); ?>

</body>

</html>
