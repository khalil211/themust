<?php
include "client.php";
include "clientste.php";
include 'entities/panier.php';
include 'core/panierC.php';

if (isset($_POST['identifiant'])&&isset($_POST['email'])&&isset($_POST['motdepasse']))
{
    if ($_POST['accounttype']=="per")
    {
    	$e=new client($_POST['identifiant'],$_POST['email'],$_POST['motdepasse'],"","","",5575);
        $e->ajouter();
    }	
    else
    {
    	$s=new clientste($_POST['identifiant'],$_POST['email'],$_POST['motdepasse'],"","","",5575);
        $s->ajouter();
    }
    $panier=new panier($_POST['identifiant']);
    $panierC=new panierC();
    $panierC->ajouter($panier);
}  
?>
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:53:11 GMT -->
<head>
    <meta charset="utf-8">
   

    <!-- Title -->
    <title>THE MUST</title>

    <!-- ************************* CSS Files ************************* -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Elegent Icon CSS -->
    <link rel="stylesheet" href="assets/css/elegent-icons.css">

    <!-- All Plugins CSS css -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- style css -->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- modernizr JS
    ============================================ -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
	<script src="assets/js/vendor/inscription.js"></script>
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


    <?php include 'menus.php';frontUp(); ?>
        <!-- Main Wrapper Start -->
        <div class="main-content-wrapper">
            <div class="login-register-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-md--40">
                            <h2 class="heading-secondary mb--30">Login</h2>
                            <div class="login-reg-box p-4 bg--2">
                                <form class="form" action="#">
                                    <div class="form__group mb--20">
                                        <label class="form__label" for="username_email">
                                            email ou identifiant <span>*</span>
                                        </label>
                                        <input type="text" name="username_email" id="username_email" class="form__input form__input--2">
                                    </div>
                                    <div class="form__group mb--20">
                                        <label class="form__label" for="password">
                                            mot de passe <span>*</span>
                                        </label>
                                        <input type="password" name="password" id="password" class="form__input form__input--2">
                                    </div>
                                    <div class="form__group d-flex align-items-center">
                                        <button type="submit" class="btn btn-5 btn-style-1 color-1">Login</button>
                                        <div class="custom-checkbox ml--20">
                                            <input type="checkbox" name="sessionStore" id="sessionStore" class="form__checkbox">
                                            
                                            <label for="sessionStore" class="form__checkbox--label">Remember me</label>
                                        </div>
                                    </div>
                                    <a href="#" class="forgot-pass">vous avez oublié votre mot de passe?</a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h2 class="heading-secondary mb--30">Register</h2>
                            <div class="login-reg-box p-4 bg--2">
                                <form class="form" method="POST" action="login-register.php" name="formf" id="test">
								<div class="form__group mb--20">
                                        <label class="form__label" for="identifiant">
                                            Identifiant <span>*</span>
                                        </label>
                                        <input type="text" name="identifiant" id="identifiant" class="form__input form__input--2" onblur="verifPseudo(this)">
                                    </div>
                                    <div class="form__group mb--20">
                                        <label class="form__label" for="register_email">
                                            Email <span>*</span>
                                        </label>
                                        <input type="text" name="email" id="email" class="form__input form__input--2" onblur="verifMail(this)">
                                    </div>
                                    <div class="form__group mb--20">
                                        <label class="form__label" for="register_password">
                                            Mot de passe <span>*</span>
                                        </label>
                                        <input type="password" name="motdepasse" id="motdepasse" class="form__input form__input--2" onblur="verifPassword(this)">
                                    </div>
									
									<div class="form__group mb--20">
                                        <label class="form__label" for="accounttype">
                                            Type du compte <span>*</span></label>
											<br>
                                        <label><input type="radio" name="accounttype" checked="checked" value="per"> Personnel</label>
    									<label><input type="radio" name="accounttype" value="ste"> STE</label><br>
                                    </div>
									
                                    <div class="form__group">
                                        <button type="submit" form="test" class="btn btn-5 btn-style-2">Inscription</button>
                             
                                        <button type="reset" class="btn btn-5 btn-style-2">reset</button>
                                    </div>
									
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php frontDown();?>
</body>


<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:53:11 GMT -->
</html>