<?php
include 'menus.php';
include "../entities/client.php";
include "../../admin/views/PHPMailer-master/PHPMailerAutoload.php";
include "../entities/clientste.php";

testConnexion();
    
	

?>
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:53:11 GMT -->
<head>
    <meta charset="utf-8">
   

    <!-- Title -->
    <title>THE MUST</title>

    <!-- ************************* CSS Files ************************* -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


    <?php frontUp();

    ?>
	

        <!-- Main Wrapper Start -->
        <div class="main-content-wrapper">
            <div class="login-register-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-md--40">
                            <h2 class="heading-secondary mb--30">Changer le mot de passe</h2>
                            <div class="login-reg-box p-4 bg--2">
                                <form class="form" method="post" action="generate.php">
                                    <div class="form__group mb--20">
                                        <label class="form__label" for="username">
                                            Identifiant <span>*</span>
                                        </label>
                                        <input type="text" name="lostid" id="lostid" class="form__input form__input--2">
                                    </div>
                          <p>un email sera envoyer à votre boite</p> 
						  <?php if (isset($_SESSION['error'])) {?> 
						  <p>erreur, il faut saisire un indentifiant correcte</p> 
						  <?php unset($_SESSION['error']);} ?>
                                    <div class="form__group d-flex align-items-center">
                                        <button type="submit" class="btn btn-5 btn-style-1 color-1">reinitialiser</button>
											
                                    </div>
					
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <?php frontDown();?>
		<script src="assets/js/vendor/inscription.js"></script>
		<script>
		var refreshButton = document.querySelector(".refresh-captcha");
refreshButton.onclick = function() {
  document.querySelector(".captcha-image").src = 'captcha.php?' + Date.now();
}
		</script>
</body>


<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:53:11 GMT -->
</html>