<?php

include "../config.php";
$db=config::getConnexion();

if (isset($_GET['edit']))
{
$identifiant = $_GET['edit'];
if (isset($_POST['email']))
{
	
	$emps=$db->query("SELECT * FROM  client WHERE identifiant='$identifiant'");
           while ($row = $emps->fetch())
		    {
			
            $email = $_POST['email'];
            $motdepasse =$_POST['motdepasse'];
			$adresse = $_POST['adresse'];
			$telephone= $_POST['telephone'];
			$nom= $_POST['nomc'];
			$prenom= $_POST['prenom'];
 $abcd=$db->prepare("UPDATE  client SET email=:email,motdepasse=:motdepasse,nom=:nom,prenom=:prenom,adresse=:adresse,telephone=:telephone WHERE identifiant='$identifiant' ");
 $abcd->bindValue(":email",$email);
 $abcd->bindValue(":motdepasse",$motdepasse);
 $abcd->bindValue(":nom",$nom);
 $abcd->bindValue(":prenom",$prenom);
 $abcd->bindValue(":adresse",$adresse);
 $abcd->bindValue(":telephone",$telephone);
 $abcd->execute();
	
}
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
    <title> Modifier un  Client </title>
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

<form action="modifier-client.php?edit=<?php echo $identifiant; ?>" method="POST" name="clientf" class="form-horizontal">
                                                    
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email </label></div>
                                                                <div class="col-12 col-md-9"><input type="email" id="email" name="email" placeholder=" foulenbenfoulen@gmail.com" onblur="verifMail(this)" class="form-control"><small class="help-block form-text"> </small></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="password-input" class=" form-control-label">Mot de passe </label></div>
                                                                <div class="col-12 col-md-9"><input type="password" id="motdepasse" name="motdepasse" placeholder="Mot de passe " onblur="verifPassword(this)" class="form-control"><small class="help-block form-text"></small> </div>
                                                            </div>

                                                            <div class="row form-group">
                                                                    <div class="col col-md-3"><label class=" form-control-label">Type du compte</label></div>
                                                                    <div class="col col-md-9">
                                                                        <div class="form-check-inline form-check">
                                                                            <label for="inline-checkbox1" class="form-check-label ">
                                                                                <input type="radio" id="inline-checkbox1" name="accounttype" value="per" class="accounttype" checked="checked"> Personnel 
                                                                            </label>
                                                                            <br>
                                                                            <label for="inline-checkbox2" class="form-check-label ">
                                                                                <input type="radio" id="accounttype" name="accounttype" value="ste" class="form-check-input">STE
                                                                            </label>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
																
																<div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">nom</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="nomc" name="nomc" placeholder="nom" class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div>
																
																	<div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">prenom / mat</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="prenom" name="prenom"  placeholder="prenom" class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div>
																
																<div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">adresse</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="adresse" name="adresse" onblur="verifAdresse(this)" placeholder="adresse" class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div>

																<div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">telephone</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="telephone" name="telephone" placeholder="numéro" class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div>
																
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-ban"></i> Reset
                                                        </button>
                                                        </form>
   				                                                                                      
</body>
</html>