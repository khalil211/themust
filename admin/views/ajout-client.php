<?php
include "../entities/client.php";
include "../entities/clientste.php";
include '../../front/entities/panier.php';
include '../../front/core/panierC.php';

if (isset($_POST['identifiant'])&&isset($_POST['email'])&&isset($_POST['motdepasse']))
{
    if ($_POST['accounttype']=="per")
    {
    	$e=new client($_POST['identifiant'],$_POST['email'],$_POST['motdepasse'],$_POST['nomc'],$_POST['prenom'],$_POST['adresse'],$_POST['telephone']);
        $e->ajouter();
    }	
    else
    {
    	$s=new clientste($_POST['identifiant'],$_POST['email'],$_POST['motdepasse'],$_POST['nomc'],$_POST['prenom'],$_POST['adresse'],$_POST['telephone']);
        $s->ajouter();
    }
    $panier=new panier($_POST['identifiant']);
    $panierC=new panierC();
    $panierC->ajouter($panier);
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
    <title> Ajout Client </title>
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
<form action="ajout-client.php" method="post" name="forminscription" class="form-horizontal">
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Identifiant</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="identifiant" name="identifiant" onblur="verifPseudo(this)" placeholder="Identifiant" class="form-control"><small class="form-text text-muted"></small></div>
                                                                <div class="col-12 col-md-9">
                                                                  
                                                                </div>
                                                            </div>
                                                        
                                                             
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
	
	 <script type="text/javascript">
            let id=document.getElementById("identifiant");
            let email=document.getElementById("email");
            let mdp=document.getElementById("motdepasse")
			let nom=document.getElementById("nomc");
			let prenom=document.getElementById("prenom");
			let adresse=document.getElementById("adresse");
			let telephone=document.getElementById("telephone");
            let forminscription=document.getElementById("forminscription");

            id.addEventListener("input",function(){
               if (id.value.length>2&&id.value.length<25)
                  id.style.border="";
               else
                  id.style.border="solid 2px red";
            });

            email.addEventListener("input",function(){
                let regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
                if (regex.test(email.value))
                   email.style.border="";
                else
                   email.style.border="solid 2px red";
            });

            mdp.addEventListener("input",function(){
               if (mdp.value.length>=6&&mdp.value.length<25)
                  mdp.style.border="";
               else
                  mdp.style.border="solid 2px red";
            });
			
			prenom.addEventListener("input",function(){
               if (prenom.value.length>2&&prenom.value.length<25)
                  prenom.style.border="";
               else
                  prenom.style.border="solid 2px red";
            });
			
			nom.addEventListener("input",function(){
               if (nom.value.length>2&&nom.value.length<25)
                  nom.style.border="";
               else
                  nom.style.border="solid 2px red";
            });
			
			adresse.addEventListener("input",function(){
               if (adresse.value.length>2&&adresse.value.length<25)
                  adresse.style.border="";
               else
                  adresse.style.border="solid 2px red";
            });
			
			telephone.addEventListener("input",function(){
               if (telephone.value.length>7&&telephone.value.length<20)
                  telephone.style.border="";
               else
                  telephone.style.border="solid 2px red";
            });
			
            forminscription.addEventListener("submit",function(e){
               let test=true;
               if (!(id.value.length>2&&id.value.length<25))
                  test=false;
              if (!(mdp.value.length>=6&&mdp.value.length<25))
                  test=false;
              if (!(id.value.length>2&&id.value.length<25))
                  test=false;
              if (!test)
                e.preventDefault();
            });
        </script>
		     				                                                                                      
</body>
</html>