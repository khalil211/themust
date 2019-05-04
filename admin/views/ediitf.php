<!doctype html>
<html class="no-js" lang="en">
<?php
include "../../config.php";
$db=config::getConnexion();
$ID = $_GET['edit'];
$emps=$db->query("SELECT * FROM  fidelite WHERE ID=$ID");
           while ($row = $emps->fetch()) {
            $ID= $row['ID'];
            $nom=$row['ID_client'];
            $sexe=$row['sexe'];
            $date_naissance=$row['date_naissance'];
            $date_creation=$row['date_creation'];
            $points=$row['point'];


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

    <link rel="apple-touch-icon" href="../apple-icon.png">
    <link rel="shortcut icon" href="../favicon.ico">
 <script type="text/javascript " src="../formulaire-pub.js"></script>

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
 <form name="pub" method="post" action="editf.php" >

     <div class="card-header">
        
         </div>
          <div class="card-header">
              <strong> Ajouter une publicité</strong> Détails
            </div>
                                                     <div class="card-body card-block">
                                                     

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label"> nom </label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="n" name="n" value="<?php echo $nom;?>" class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div> 

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">sexe </label></div>
                                                                <div class="col-12 col-md-9"> <td><select id="liste"  name="liste"  value="<?php echo $sexe;?>" class="form-control">
                                                 <option  selected disabled><?php echo $sexe;?></option>
                                                <option >Homme</option>
                                                <option >Femme</option>
                                            </select>
                                            </td><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div>
                                                        
                                                        
                                                               <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label"> Date de naissance</label></div>
                                                                <div class="col-12 col-md-9"><input type="date" id="d1" name="d1"  value="<?php echo $date_naissance;?>" class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div> 
                                                           
                                                                     
                                                                 
                                                             <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Date de création </label></div>
                                                                <div class="col-12 col-md-9"><input type="date" id="d2" name="d2" value="<?php echo $date_creation ;?>" class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div>

                                                            
                                                             <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Nombre de points </label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="np" name="np" value="<?php echo $points;?>" class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div>
                                                      <input type="hidden" name="ide"  value="<?php echo $ID;?>" >
                                                <div class="card-footer">
                                                     <i class="fa fa-folder"></i>
                                                     <input type="submit"class="btn btn-primary btn-xs" value="Ajouter"class="btn btn-primary btn-sm">
                                               
                                                        </button>
                                                        
                                                    
                                                   
                                                </div>


                                                       </table>        
                                                        </form>
                                                    </div>
                                                    <?php backDown(); ?>
                                                             
                                              
</body>

</html>
