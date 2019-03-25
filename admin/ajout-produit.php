<?php
include "produit.php";
if (isset($_POST['img'])&&isset($_POST['nom'])&&isset($_POST['descr'])&&isset($_POST['quantite'])&&isset($_POST['prix'])&&isset($_POST['categorie']))
{
    $e=new produit($_POST['img'],$_POST['nom'],$_POST['descr'],$_POST['quantite'],$_POST['prix'],$_POST['categorie']);
    $e->ajouter();
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
    <title> Ajout Produit </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
   <script type="text/javascript" src="produits.js"></script>


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
        <div class="card-header">
        
         </div>
          <div class="card-header">
              <strong> Ajouter un produit</strong> Détails
            </div>
                                                    <div class="card-body card-block">
                                                        <form method="POST" action="ajout-produit.php" name ="produitf"  enctype="multipart/form-data" class="formulp">
                                                            
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Image du produit  </label></div>
                                                                <div class="col-12 col-md-9"><input type="file" id="text-input" name="img"  class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div>


                                                        <!--   <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Identifiant du produit</label></div>
                                                                <div class="col-12 col-md-9"><input type="number" id="text-input" name="text-input"  class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div>-->
                                                         <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nom du produit</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="nom"  class="form-control"><small class="form-text text-muted" required></small></div>
                                                            </div>
                                                        <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Descrption du produit</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="descr" name="text-input"  class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9" required>
                                                                  
                                                                </div>
                                                            </div>    

                                                           <div class="row form-group">
                                                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Quantité du produit </label></div>
                                                                <div class="col-12 col-md-9"><input type="number" id="email-input" name="quantite"  class="form-control"><small class="help-block form-text" required> </small></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="password-input" class=" form-control-label">Prix TND du produit </label></div>
                                                                <div class="col-12 col-md-9"><input type="number" id="password-input" name="prix"  class="form-control"><small class="help-block form-text" required></small></div>
                                                            </div>

                                                   
                           <div class="row form-group">
                               <div class="col col-md-3"><label for="password-input" >Catégorie du produit </label></div>
                            </div>
                            

                               <select data-placeholder="Choose a Country..." class="standardSelect" tabindex="10" name="categorie">
                                    
                                    <option value="United States">catégorie1</option>
                                    <option value="United Kingdom">catégorie2</option>
                                    <option value="Afghanistan">catégorie3</option>
                                    <option value="Aland Islands">catégorie4</option>
                                    
                                </select>
                                <?php
                                backDown();
                                ?>
                                                
</body>
</html>
