<?php
include '../../config.php';
$db=config::getConnexion();
if (isset($_GET['n']))
{
    $p=$db->prepare('SELECT * FROM promotions WHERE nom=:nom');
    $p->bindValue(':nom',$_GET['n']);
    $p->execute();
    $p=$p->fetch(); 
}
$result=$db->query('SELECT * FROM produit');
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<script src="promotion.js"></script>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Ajout Promotion </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <script type="text/javascript " src="formulaire-client.js"></script>

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
<div class="content mt-3">
            <div class="animated fadeIn">
                
                                     <div class="card-header">
                                                        <strong> Ajout promotion </strong>
                                                    </div>
                                                        <form action="<?php if (isset($_GET['n'])) echo 'modifierpromotions.php?n='.$_GET['n'];else echo 'ajouterpromotions.php'; ?>" method="post" id="test" enctype="multipart/form-data" name="formualire-promotion" class="form-horizontal">

                                                        	 <!--<div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Image de la promotion </label></div>
                                                                <div class="col-12 col-md-9"><input type="file" id="text-input" name="img"  class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div>-->

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Nom</label></div>
                                                                <div class="col-12 col-md-9"><input <?php if (isset($_GET['n'])){echo 'value="'.$p['nom'].'" readonly';} ?> type="text" id="text-input" name="nom" placeholder="Nom de la promotion " onblur="verifNom(this)" class="form-control"><small class="form-text text-muted" ></small> </div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div>
<!--                                                              <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">id Produit</label></div>
                                                                <div class="col-12 col-md-9"><input type="number" id="text-input" name="idproduit" placeholder="Nom " class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div>-->
                                                            <div class="row form-group">
                                                                        <div class="col col-md-3"> <label> Nom du produit</label> </div>
                                                                <select class="standardSelect" tabindex="10" id="idproduit" name="idproduit">
                                                               <?php while ($row=$result->fetch()){?>
                                                                <option value="<?php echo $row['id'] ;?> "> <?php echo $row['nom'] ;?></option>
                                                            <?php } ?>
                                                            </select>
                                                            </div>

                                                             <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Decription </label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="description" placeholder="Description " onblur="verifDescription(this)" class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div>
                                                     
                                                             <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label"> Date début </label></div>
                                                                <div class="col-12 col-md-9"><input type="date" id="text-input" name="dated"   class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div>

                                                             <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label"> Date fin </label></div>
                                                                <div class="col-12 col-md-9"><input type="date" id="text-input" name="datef"class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div>

                                                            <div class="col col-md-3"><label for="code postal" class=" form-control-label">Pourcentage </label></div>
                                                                <div class="col-12 col-md-9"><input type=" number" id="cp" name="remise" placeholder="ex : 60% " onblur="verifPourcentage(this)" class="form-control" ><small class=""></small>
                                                                </div>

                                                               
                                                        </form>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit" form="test" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Envoyer
                                                        </button>
                                                        <button type="reset" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-ban"></i> Reset
                                                        </button>
                                                    </div>
                                                </div>
                                                <?php backDown(); ?>
</body>
</html>