<?php

include '../core/promotionss.php';
$promotions=new  promotionss;
$liste=$promotions->afficher();

?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Liste des promotionss</title>
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
    <?php backUp(); ?>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">promotionss</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>nom</th>
                                            <th>Id produit</th>
                                            
                                            <th>description</th>
                                            <th>date debut</th>
                                            <th>date fin</th>
                                            <th>pourcentage</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($liste as $element)
                                        {
                                            ?>
                                            <tr>
                                                <td><?php echo htmlspecialchars($element['nom']) ;?></td>
                                                <td><?php echo htmlspecialchars($element['idproduit']); ?></td>
                                                <td><?php echo htmlspecialchars($element['description']); ?></td>
                                                <td><?php echo htmlspecialchars($element['datedebut']); ?></td>
                                                <td><?php echo htmlspecialchars($element['datefin']); ?></td>
                                                <td><?php echo htmlspecialchars($element['pourcentage']); ?></td>
                                                <td>
                                                    <a href="ajout-promotion.php?n=<?php echo htmlspecialchars($element['nom']); ?>" class="btn btn-success"><i class="fa fa-magic"></i>  Modifier état</a>
                                                    <a href="supprimer-promotions.php?n=<?php echo htmlspecialchars($element['nom']); ?>&e=<?php echo $element['nom']; ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i>  Supprimer</a>
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
        <?php backDown(); ?>
</body>

</html>
