<!doctype html>
<html class="no-js" lang="en">
<?php
include "../config.php";
$db=config::getConnexion();
$ID = $_GET['edit'];
$emps=$db->query("SELECT * FROM  publicite WHERE ID=$ID");
           while ($row = $emps->fetch()) {
            $ID= $row['ID'];
            $image = $row['image'];
            $cat = $row['cat'];
            $nom = $row['nom'];
            $debut = $row['debut'];
            $fin = $row['fin'];
            $description = $row['description'];

        }
?>



<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
 <script type="text/javascript " src="formulaire-pub.js"></script>

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
        <!-- Header-->
 <form name="pub" method="post" action="editp.php" >

     <div class="card-header">
        
         </div>
          <div class="card-header">
              <strong> Ajouter une publicité</strong> Détails
            </div>
                                                    <div class="card-body card-block">
                                                     
                                                             
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Image de la publicité  </label></div>
                                                                <div class="col-12 col-md-9"><input type="file" id="img" name="img" value="<?php echo $image;?>" class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div>

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Numéro de la publicité </label></div>
                                                                <div class="col-12 col-md-9"> <td><select id="liste" value="" name="liste" class="form-control">
                                                 <option  class="non" selected disabled>Sélectionner</option>
                                                <option >catégories 1</option>
                                                <option >catégories 2</option>
                                                <option >catégories 3</option>
                                                <option >catégories 4</option>
                                            </select>
                                            </td><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div>
                                                        
                                                        <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label"> Date début </label></div>
                                                                <div class="col-12 col-md-9"><input type="date" id="d1" name="d1" value="<?php echo $debut;?>" class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div> 

                                                         <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label"> Date fin </label></div>
                                                                <div class="col-12 col-md-9"><input type="date" id="d2" name="d2" value="<?php echo $fin;?>" class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div> 

                                                             <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Decription de la publicité </label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="des" name="des"value="<?php echo $description;?>"  class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div>

                                                            
                                                             <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Nom du produit </label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="p1" name="p1" value="<?php echo $nom;?>" class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="ide"  value="<?php echo $ID;?>" >

                                                <div class="card-footer">
                                                     <input type="submit" value="Ajouter"class="btn btn-primary btn-sm">
                                                 <i class="fa fa-dot-circle-o"></i> 
                                                        </button>
                                                        
                                                    
                                                   
                                                </div>


                                                       </table>        
                                                        </form>
                                                    </div>
                                                    <?php backDown(); ?>
                                                             
                                              
</body>

</html>
