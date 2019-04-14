<!doctype html>
<html class="no-js" lang="en">
<?php
include "../../config.php";
$db=config::getConnexion();
$id = $_GET['edit'];
$emps=$db->query("SELECT * FROM  produit WHERE id=$id");
           while ($row = $emps->fetch()) {
            $id= $row['id'];
            $img = $row['img'];
            $nom = $row['nom'];
            $descr = $row['descr'];
            $quantite = $row['quantite'];
            $prix = $row['prix'];
            $categorie = $row['categorie'];
$result=$db->query('select * from categorie ');
        }
?>


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
                
     <form name="prod" method="POST" action="editprod.php">
        <div class="card-header">
        
         </div>
          <div class="card-header">
              <strong> Modifier un produit</strong> Détails
            </div>
                                                    <div class="card-body card-block">
                                                               
                                                              <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Image du produit</label></div>
                                                                <div class="col-12 col-md-9"><input type="file" id="img" name="img" class="form-control" required><small class="form-text text-muted" ></small> </div>
                                                            </div>

                                                     
                                                         <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nom du produit</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="nom" name="nom" value="<?php echo $nom;?>" class="form-control"><small class="form-text text-muted" required></small></div>
                                                            </div>
                                                        <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Descrption du produit</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="descr" name="descr" value="<?php echo $descr;?>"  class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9" required>
                                                                  
                                                                </div>
                                                            </div>    

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Quantité du produit </label> </div>
                                                                <div class="col-12 col-md-9"><input type="number" id="quantite" name="quantite" value="<?php echo $quantite;?>"  class="form-control"  required><small class="help-block form-text" > </small> <span id="quantite_manquante"></span></div>
                                                            </div>
                                                          <div class="row form-group">
                                                                <div class="col col-md-3"><label for="password-input" class=" form-control-label">Prix TND du produit </label></div>
                                                                <div class="col-12 col-md-9"><input type="number" id="prix" name="prix" value="<?php echo $prix;?>"  class="form-control"><small class="help-block form-text" ></small> <span id="prix_manquant"  required></span></div>
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
                            <input type="hidden" name="ide"  value="<?php echo $id;?>" >
							<div class="card-footer">
                                   <td>  <button type="submit" class="btn btn-primary btn-sm" onclick="myFunction()">
                                                 <i class="fa fa-dot-circle-o" ></i> Enregistrer
                            </button> </td>
                                                 		 
                                                </td>  

                                                   
                                                </div>


                                                             
                                                        </form>
                                                    </div>
                                                    <?php backDown(); ?>
</body>
</html>