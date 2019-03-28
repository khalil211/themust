<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ajouter commande</title>
    <meta name="description" content="The Must - Gammarth center">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php
	include "../config.php";
	backUP();
	?>
    <div class="card-header">
        <strong> Ajout commande</strong>
    </div>
    <div class="card-body card-block" id="main">
        <?php
        if (isset($_GET['added']))
        {
            if ($_GET['added']=='true')
            {
                ?>
                <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                    <span class="badge badge-pill badge-success">Success</span>
                        La commande a été ajoutée.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <?php
            }
            else
            {
                ?>
                <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                    <span class="badge badge-pill badge-danger">Echec</span>
                    <?php
                    echo '  ';
                    if (!isset($_GET['reason']))
                        echo 'Une erreur inconnue est survenue.';
                    else
                    {
                        if ($_GET['reason']==1)
                            echo 'Un ou plusieurs produit(s) n\'éxiste(nt) pas.';
                        elseif ($_GET['reason']==2)
                            echo 'Le client n\'éxiste pas.';
                    }
                    ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <?php
            }
        }
        ?>
        <form action="commande/ajout.php" method="post" enctype="multipart/form-data" class="form-horizontal" id="commandef">
            <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label" for="idc">ID Client</label></div>
                <div class="col-12 col-md-9"><input type="number" id="idc" name="idc" placeholder="ID Client" class="form-control" required autofocus><small class="form-text text-muted"></small></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">Produits</label></div>
                <div class="col-12 col-md-9" id="listep"><button type="button" class="btn btn-success btn-sm" id="ajouterp"> Ajouter produit</button><small class="form-text text-muted"></small></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label" for="passee">Passée</label></div>
                <div class="col-12 col-md-9"><label class="switch switch-3d switch-success mr-3"><input type="checkbox" class="switch-input" name="passee"> <span class="switch-label"></span> <span class="switch-handle"></span></label></label><small class="form-text text-muted"></small></div>
            </div>

        </form>
    </div>
    <div class="card-footer">
        <button type="submit" form="commandef" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Ajouter
        </button>
        <button type="reset" form="commandef" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Annuler
        </button>
    </div>
	<?php
	backDown();
	?>
    <script type="text/javascript" src="commande/ajout-commande.js"></script>
</body>
</html>