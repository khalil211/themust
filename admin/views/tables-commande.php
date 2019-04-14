<?php
include '../core/commandeC.php';
$commande=new commandeC;
$liste=$commande->afficher();
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
                                <strong class="card-title">Commandes</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>ID Client</th>
                                            <th>NB Produits</th>
                                            <th>Prix Total</th>
                                            <th>Etat</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($liste as $element)
                                        {
                                            ?>
                                            <tr>
                                                <td><?php echo htmlspecialchars($element['numero']) ?></td>
                                                <td><?php echo htmlspecialchars($element['idclient']) ?></td>
                                                <td><?php echo htmlspecialchars($element['nbproduit']) ?></td>
                                                <td><?php echo htmlspecialchars($element['prixtotal']) ?></td>
                                                <td> <?php if ($element['etat']==1) echo 'Passée'; else echo 'En attente'; ?> </td>
                                                <td><?php echo $element['datecommande'] ?></td>
                                                <td>
                                                    <a href="modifier-commande.php?n=<?php echo htmlspecialchars($element['numero']); ?>&e=<?php echo $element['etat']; ?>" class="btn btn-success"><i class="fa fa-magic"></i>  Modifier état</a>
                                                    <a href="supprimer-commande.php?n=<?php echo htmlspecialchars($element['numero']); ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i>  Supprimer</a>
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
