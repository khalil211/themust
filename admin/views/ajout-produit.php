<?php
include "../entities/produit.php";
if (isset($_POST['img'])&&isset($_POST['nom'])&&isset($_POST['descr'])&&isset($_POST['quantite'])&&isset($_POST['prix'])&&isset($_POST['categorie']))
{
    $e=new produit($_POST['img'],$_POST['nom'],$_POST['descr'],$_POST['quantite'],$_POST['prix'],$_POST['categorie']);
    $e->ajouter();
}

$db=config::getConnexion();
$result=$db->query('select * from categorie ');
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
    <title> Ajout Produit </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" scr ="form-prod.js"></script>
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
   <script type="text/javascript" src="formulaire-produit.js"></script>


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <?php
    backUp();
    ?>

     <form method="POST" action="ajout-produit.php" name="produitf" >
        <div class="card-header">
        
         </div>
          <div class="card-header">
              <strong> Ajouter un produit</strong> Détails
            </div>
                                                    <div class="card-body card-block">
                                                               
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Image du produit  </label></div>
                                                                <div class="col-12 col-md-9"><input type="file" id="img" name="img"  class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div>

                                                         <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nom du produit</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="nom" name="nom" class="form-control" required><small class="form-text text-muted" ></small> <span id="nom_manquant"></span> </div>
                                                            </div>
                                                        <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Descrption du produit</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="descr" name="descr"  class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9" >
                                                                  
                                                                </div>
                                                            </div>    

                                                           <div class="row form-group">
                                                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Quantité du produit </label> </div>
                                                                <div class="col-12 col-md-9"><input type="number" id="quantite" name="quantite"  class="form-control"  required><small class="help-block form-text" > </small> <span id="quantite_manquante"></span></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="password-input" class=" form-control-label">Prix TND du produit </label></div>
                                                                <div class="col-12 col-md-9"><input type="number" id="prix" name="prix"  class="form-control"><small class="help-block form-text" ></small> <span id="prix_manquant"  required></span></div>
                                                            </div>

                                                   
                           <div class="row form-group">
                               <div class="col col-md-3"><label >Catégorie du produit </label></div>
                            </div>
                            

                               <select  class="standardSelect" tabindex="10"  name="categorie" id="categorie" required>
                                <?php while ($row = $result->fetch()) { 
                                    ?>
                                    <option value= "<?php echo  $row['id_cat'];?>"> <?php echo $row['nom_cat'];?> </option>
                                <?php } ?>
                                  
                                    
                                </select><span id="categorie_manquante"></span>
                                
                            </div>
                          <td>  <button type="submit" class="btn btn-primary btn-sm" onclick="myFunction()">
                                                 <i class="fa fa-dot-circle-o"></i> Envoyer
                            </button> </td>
                           <td> <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
                            </button>
                            </td>
                                                 
                        </form>

                                <?php
                                backDown();
                                ?>

                                                
</body>
</html>
