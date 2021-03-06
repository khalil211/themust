<?php
include "../entities/faq.php";


if (isset($_POST['question'])&&isset($_POST['reponse']))
{

    	$e=new faq($_POST['question'],$_POST['reponse']);
        $e->ajouter();
}    
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endiff]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Ajout FAQ </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets\js\inscription.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
  <?php
    backUp();
    ?>
<div class="content mt-3">
<form action="ajout-faq.php" method="post" name="faq" class="form-horizontal">
                                                
                                                        
                                                             
                                                                                                                      <div class="row form-group">
                                                                <div class="col col-md-3"><label for="password-input" class=" form-control-label">Question </label></div>
                                                                <div class="col-12 col-md-9"><textarea id="question" name="question" rows="5" cols="40"></textarea> </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="password-input" class=" form-control-label">Réponse </label></div>
                                                                <div class="col-12 col-md-9"><textarea id="reponse" name="reponse" rows="5" cols="40"></textarea> </div>
                                                            </div>

                                                                
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Ajouter
                                                        </button>
                                                        <button type="reset" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-ban"></i> Reset
                                                        </button>
                                                        </form>
                                                    </div>
<?php
    backDown();
    ?>     				                                                                                      
</body>
</html>