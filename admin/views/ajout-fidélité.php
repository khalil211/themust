<!doctype html>
<html class="no-js" lang="en">
<?php include "../core/fideC.php";
$db=config::getConnexion();
$result=$db->query('select * from commande ');

 ?>
<?php 

if (isset($_POST['n'])) {
    $ID = $_POST['n'];
    $emps=$db->query('select * from  commande  WHERE idclient  LIKE "%'.$ID.'%" ');
    foreach($emps as $row){
        $s=$row['nbproduit'];
        $b=$s*10;
    

    
}
}

 ?>


<?php

if (isset($_POST['n'])&&isset($_POST['liste'])&&isset($_POST['d1'])&&isset($_POST['d2']))
{
    if (!empty($_POST['n'])&&!empty($_POST['liste'])&&!empty($_POST['d1'])&&!empty($_POST['d2']))
    {
    $e=new employe($_POST['n'],$_POST['liste'],$_POST['d1'],$_POST['d2'],$b);
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
 <form name="pub" method="post" action="ajout-fidélité.php" >

     <div class="card-header">
        
         </div>
          <div class="card-header">
              <strong> Ajouter une carte fidélité</strong> Détails
             
            </div>
             
                                                    <div class="card-body card-block">
                                                     

                                                                    <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">ID_client </label></div>
                                                                <div class="col-12 col-md-9"> <td><select id="n"  name="n" class="form-control">
                                                                     <option value ="-1" class="non" selected disabled>Sélectionner</option>
                                                                    <?php foreach($result as $row){ ?>
                                                
                                                <option name="n"><?php echo $row['idclient'] ; ?></option>
                                               
                                                <?php } ?>

                                                
                                            </select>
                                            </td><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">sexe </label></div>
                                                                <div class="col-12 col-md-9"> <td><select id="liste"  name="liste" class="form-control">
                                                 <option value ="-1" class="non" selected disabled>Sélectionner</option>
                                                <option >Homme</option>
                                                <option >Femme</option>
                                            </select>
                                            </td><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div>
                                                        
                                                        
                                                               <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label"> Date de naissance</label></div>
                                                                <div class="col-12 col-md-9"><input type="date" id="d1" name="d1" class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div> 
                                                           
                                                                     
                                                                 
                                                             <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Date de création </label></div>
                                                                <div class="col-12 col-md-9"><input type="date" id="d2" name="d2" value="<?php echo date('Y-m-d');  ?>" class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div>

                                                            
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
