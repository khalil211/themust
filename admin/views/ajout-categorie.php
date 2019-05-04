<?php
include "../entities/categorie.php";
if (isset($_POST['nom_cat'])&&isset($_POST['descr_cat']))
{
    $e=new categorie($_POST['nom_cat'],$_POST['descr_cat']);
    $e->ajouter();
    header('location: tables-categorie.php');

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
    <title> Ajout Catégorie </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- <script type="text/javascript" scr ="form-cat.js"></script>-->
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
   


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

     <form method="POST" action="ajout-categorie.php" name="categorief" >
        <div class="card-header">
        
         </div>
          <div class="card-header">
              <strong> Ajouter une catégorie</strong> Détails
            </div>
                                                    <div class="card-body card-block">
                                                        

                                                         <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nom de la catégorie </label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="nom_cat" name="nom_cat" class="form-control" required><small class="form-text text-muted" ></small> <span id="nom_manquant"></span> </div>
                                                            </div>
                                                        <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Description de la catégorie </label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="descr_cat" name="descr_cat"  class="form-control" required><small class="form-text text-muted"></small>
                                                                    <span id="description_manquante"></span>
                                                                </div>
                                                                <div class="col-12 col-md-9" >
                                                                  
                                                                </div>
                                                            </div>    

                                                          
                                                            

                                                   
                           
                          <td>  <button type="submit" class="btn btn-primary btn-sm" onclick="myFunction()" >
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

 <script type="text/javascript">
     function myFunction(e)
{ 
var i=0;
var nom=document.getElementById('nom_cat').value;
var nom_m=document.getElementById("nom_manquant");
nom_m.textContent="";

if (!nom) {

//e.preventDefault();
//alert("false");

nom_m.textContent="Nom manquant";
nom_m.style.color='red';}
else
i++;

var description=document.getElementById('descr_cat').value;
var description_m=document.getElementById("description_manquante");
description_m.textContent="";

if (!description) {

//e.preventDefault();
//alert("false");

description_m.textContent="Description manquante";
description_m.style.color='red';}
else
i++;

if(i==2)
    alert("ajoutée avec succès");

    }
 </script>                                               
</body>
</html>
