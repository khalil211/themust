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
                                                <td> <?php if ($element['etat']==1) echo '<span class="badge badge-success">Passée</span>'; else if($element['etat']==2) echo '<span class="badge badge-primary">En attente</span>'; else echo '<span class="badge badge-dark">Annulée</span>'; ?> </td>
                                                <td><?php echo $element['datecommande'] ?></td>
                                                <td style="display: flex; justify-content: space-around;">
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mod<?php echo htmlspecialchars($element['numero']) ?>">
                                                     <i class="fa fa-book"></i> Afficher
                                                    </button>
                                                    <?php
                                                    if ($element['etat']==2)
                                                    {
                                                        ?>
                                                        <a href="modifier-commande.php?n=<?php echo htmlspecialchars($element['numero']); ?>&e=<?php echo $element['etat']; ?>" class="btn btn-success"><i class="fa fa-check"></i>  Passer</a>
                                                        <a href="modifier-commande.php?n=<?php echo htmlspecialchars($element['numero']); ?>&e=<?php echo $element['etat']; ?>&annuler=true" class="btn btn-secondary"><i class="fa fa-ban"></i>Annuler</a>
                                                        <?php
                                                    }
                                                    ?>
                                                    <a href="supprimer-commande.php?n=<?php echo htmlspecialchars($element['numero']); ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i>  Supprimer</a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        $liste->closeCursor();
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
                <?php
                $liste=$commande->afficher();
                foreach ($liste as $element)
                {
                    ?>
                    <div class="modal fade" id="mod<?php echo htmlspecialchars($element['numero']) ?>" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="scrollmodalLabel">Commande #<?php echo htmlspecialchars($element['numero']) ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ID Client: <?php echo htmlspecialchars($element['idclient']) ?><br>
                                    Nombre de produits:  <?php echo htmlspecialchars($element['nbproduit']) ?><br>
                                    Prix total: <?php echo htmlspecialchars($element['prixtotal']) ?><br>
                                    Etat: <?php if ($element['etat']==1) echo 'Passée'; else if($element['etat']==2) echo 'En attente'; else echo 'Annulée'; ?> <br>
                                    Date: <?php echo $element['datecommande']; ?><br><br>
                                        <div class="card">
                                            <div class="card-header">
                                                <strong class="card-title">Produits</strong>
                                            </div>
                                            <div class="card-body">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">ID</th>
                                                            <th scope="col">Nom</th>
                                                            <th scope="col">Image</th>
                                                            <th scope="col">Prix</th>
                                                            <th scope="col">Quantite</th>
                                                            <th scope="col">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $produits=$commande->getProduits($element['numero']);
                                                        foreach ($produits as $p)
                                                        {
                                                            ?>
                                                            <tr>
                                                            <th scope="row"><?php echo $p['idprod']; ?></th>
                                                            <td><?php echo $p['nomprod']; ?></td>
                                                            <td style="width: 120px;"><img style="width: 100px; height: 100px;" src="images/<?php echo $p['imgprod'] ?>"></td>
                                                            <td><?php echo $p['prixprod']; ?></td>
                                                            <td>×<?php echo $p['quantiteprod'] ?></td>
                                                            <td><?php echo $p['quantiteprod']*$p['prixprod']; ?></td>
                                                        </tr>
                                                            <?php
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php    
                }
                ?>
        <?php backDown(); ?>
</body>

</html>
