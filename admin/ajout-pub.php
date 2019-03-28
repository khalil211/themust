<!doctype html>
<html class="no-js" lang="en">
<?php
include "pubC.php";
if (isset($_POST['img'])&&isset($_POST['liste'])&&isset($_POST['p1'])&&isset($_POST['d1'])&&isset($_POST['d2'])&&isset($_POST['des']))
{
    if (!empty($_POST['img'])&&!empty($_POST['liste'])&&!empty($_POST['p1'])&&!empty($_POST['d1'])&&!empty($_POST['d2'])&&!empty($_POST['des']))
    {
    $e=new employe($_POST['img'],$_POST['liste'],$_POST['p1'],$_POST['d1'],$_POST['d2'],$_POST['des']);
    $e->ajouter();
}
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
 <form name="pub" method="post" action="ajout-pub.php" >

     <div class="card-header">
        
         </div>
          <div class="card-header">
              <strong> Ajouter une publicité</strong> Détails
             
            </div>
                                                    <div class="card-body card-block">
                                                     

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Image de la publicité  </label></div>
                                                                <div class="col-12 col-md-9"><input type="file"accept="image/x-png, image/gif, image/jpeg" id="img" name="img"  class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div>

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Numéro de la publicité </label></div>
                                                                <div class="col-12 col-md-9"> <td><select id="liste" name="liste" class="form-control">
                                                 <option value ="-1" class="non" selected disabled>Sélectionner</option>
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
                                                                <div class="col-12 col-md-9"><input type="date" id="d1" name="d1" class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div> 

                                                         <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label"> Date fin </label></div>
                                                                <div class="col-12 col-md-9"><input type="date" id="d2" name="d2" class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div> 

                                                             <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Decription de la publicité </label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="des" name="des"  class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div>

                                                            
                                                             <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Nom du produit </label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="p1" name="p1" class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div>

                                                <div class="card-footer">
                                                     <i class="fa fa-folder"></i>
                                                     <input type="submit"class="btn btn-primary btn-xs" value="Ajouter"class="btn btn-primary btn-sm" onclick="verifForm()">
                                               
                                                        </button>
                                                        
                                                    
                                                   
                                                </div>


                                                       </table>        
                                                        </form>
                                                    </div>
                                                    <?php backDown(); ?>
                                                             
                                              
</body>

</html>
