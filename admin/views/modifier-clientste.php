<?php

include "../../config.php";
$db=config::getConnexion();

if (isset($_GET['edit']))
{
$identifiant = $_GET['edit'];

    
    $emps=$db->query("SELECT * FROM  clientste WHERE identifiant='$identifiant'");
           while ($row = $emps->fetch())
            {
            
            $email = $row['email'];
            $motdepasse =$row['motdepasse'];
            $adresse = $row['adresse'];
            $telephone= $row['telephone'];
            $nom= $row['nomste'];
            $prenom= $row['matfis'];
}
if (isset($_POST['email'])&&isset($_POST['motdepasse'])&&isset($_POST['adresse'])&&isset($_POST['telephone'])&&isset($_POST['nom'])&&isset($_POST['prenom']))
{   
 $abcd=$db->prepare("UPDATE  clientste SET email=:email,motdepasse=:motdepasse,nomste=:nom,prenom=:matfis,adresse=:adresse,telephone=:telephone WHERE identifiant='$identifiant' ");
 $abcd->bindValue(":email",$_POST['email']);
 $abcd->bindValue(":motdepasse",$_POST['motdepasse']);
 $abcd->bindValue(":nom",$_POST['nom']);
 $abcd->bindValue(":prenom",$_POST['prenom']);
 $abcd->bindValue(":adresse",$_POST['adresse']);
 $abcd->bindValue(":telephone",$_POST['telephone']);
 $abcd->execute();
    header('location: tables-clientsste.php');
}
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
    <title> Modifier un  Client ste </title>
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
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"> Modifier clientste </strong>
                            </div>
                            <div class="card-body">
<form action="modifier-client.php?edit=<?php echo $identifiant; ?>" method="POST" name="clientf" class="form-horizontal">
                                                    
            <div class="row form-group">
                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email </label></div>
                <div class="col-12 col-md-9"><input type="email" id="email" name="email" placeholder=" foulenbenfoulen@gmail.com" onblur="verifMail(this)" value="<?php echo $email ?>" class="form-control"><small class="help-block form-text"> </small></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="password-input" class=" form-control-label">Mot de passe </label></div>
                <div class="col-12 col-md-9"><input type="password" id="motdepasse" value="<?php echo $motdepasse ?>" name="motdepasse" placeholder="Mot de passe " onblur="verifPassword(this)" class="form-control"><small class="help-block form-text"></small> </div>
            </div>
                
                <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">Nom</label></div>
                <div class="col-12 col-md-9"><input type="text" id="nom" value="<?php echo $nom ?>" name="nom" placeholder="nom" class="form-control"><small class="form-text text-muted"></small></div>
                <div class="col-12 col-md-9">
                  
                </div>
            </div>
                
                    <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">Matricule</label></div>
                <div class="col-12 col-md-9"><input type="text" id="prenom" name="prenom" value="<?php echo $prenom ?>"  placeholder="prenom" class="form-control"><small class="form-text text-muted"></small></div>
                <div class="col-12 col-md-9">
                  
                </div>
            </div>
                
                <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">Adresse</label></div>
                <div class="col-12 col-md-9"><input type="text" id="adresse" value="<?php echo $adresse ?>" name="adresse" onblur="verifAdresse(this)" placeholder="adresse" class="form-control"><small class="form-text text-muted"></small></div>
                <div class="col-12 col-md-9">
                  
                </div>
            </div>

                <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">Telephone</label></div>
                <div class="col-12 col-md-9"><input type="text" id="telephone" value="<?php echo $telephone ?>" name="telephone" placeholder="numéro" class="form-control"><small class="form-text text-muted"></small></div>
                <div class="col-12 col-md-9">
                  
                </div>
            </div>
                
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Modifier
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
        </form>
    </div>



        <?php backDown(); ?>
                                                                                                      
</body>
</html>