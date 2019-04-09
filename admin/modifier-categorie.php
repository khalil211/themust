<?php
include "../config.php";
$db=config::getConnexion();
$id_cat = $_GET['edit'];
$emps=$db->query("SELECT * FROM  categorie WHERE id_cat=$id_cat");
           while ($row = $emps->fetch()) {
            $id_cat= $row['id_cat'];
            $nom_cat = $row['nom_cat'];
            $descr_cat = $row['descr_cat'];


        }
?>

<!doctype html>
<html class="no-js" lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="form-prod.js"></script>
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <script type="text/javascript" src="formulaire-produit.js"></script>
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
<?php
    backUp();
    ?>
                
     <form name="categorie" method="POST" action="edit_cat.php">
        <div class="card-header">
        
         </div>
          <div class="card-header">
              <strong> Mofifier une catégorie</strong> Détails
            </div>
                                                    <div class="card-body card-block">
                                                               
                                                            

                                                         <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nom de la catégorie </label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="nom_cat" name="nom_cat" class="form-control" required><small class="form-text text-muted" ></small> <span id="nom_manquant"></span> </div>
                                                            </div>
                                                        <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Descrption de la catégorie </label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="descr_cat" name="descr_cat"  class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9" >
                                                                  
                                                                </div>
                                                    </div>
                            <input type="hidden" name="ide"  value="<?php echo $id_cat;?>" >
                            <div class="card-footer">
                                   <td>  <button type="submit" class="btn btn-primary btn-sm">
                                                 <i class="fa fa-dot-circle-o" ></i> Enregistrer
                            </button> </td>
                                                         
                                                </td>  

                                                   
                                                </div>


                                                             
                                                        </form>
                                                    </div>
                                                    <?php backDown(); ?>
</body>
</html>