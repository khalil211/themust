<?php

function testConnexion()
{
	session_start();
	$end=false;
	if (isset($_SESSION['idclient'])&&isset($_SESSION['mdpclient']))
		$end=true;
	if (isset($_COOKIE['idclient'])&&isset($_COOKIE['mdpclient']))
	{
		$_SESSION['idclient']=$_COOKIE['idclient'];
		$_SESSION['mdpclient']=$_COOKIE['mdpclient'];
		$end=true;
	}
	if (!isset($_SESSION['produitpanier']))
		$_SESSION['produitpanier']=array();
	return $end;
}

function frontUp()
{
	?>
	    <!-- Main Wrapper Start -->
    <div class="wrapper bg--shaft">
	    <!-- Header Area Start -->
	    <header class="header headery-style-1">
	        <div class="header-top header-top-1">
	            <div class="container">
	                <div class="row no-gutters align-items-center">
	                    <div class="col-lg-8 d-flex align-items-center flex-column flex-lg-row">
	                        <ul class="social social-round mr--20">
	                            <li class="social__item">
	                                <a href="twitter.com" class="social__link">
	                                <i class="fa fa-twitter"></i>
	                                </a>
	                            </li>
	                            <li class="social__item">
	                                <a href="plus.google.com" class="social__link">
	                                <i class="fa fa-google-plus"></i>
	                                </a>
	                            </li>
	                            <li class="social__item">
	                                <a href="https://www.facebook.com/MontresTheMust" class="social__link">
	                                <i class="fa fa-facebook"></i>
	                                </a>
	                            </li>
	                            <li class="social__item">
	                                <a href="youtube.com" class="social__link">
	                                <i class="fa fa-youtube"></i>
	                                </a>
	                            </li>
	                            <li class="social__item">
	                                <a href="instagram.com" class="social__link">
	                                <i class="fa fa-instagram"></i>
	                                </a>
	                            </li>
	                        </ul>
	                        <p class="header-text">The Must<span>“Montres & Accessoires ”</span></p>
	                    </div>
	                    <div class="col-lg-4">
	                        <div class="header-top-nav d-flex justify-content-lg-end justify-content-center">
	                            <div class="language-selector header-top-nav__item">
	                                <div class="dropdown header-top__dropdown">
	                                    <a class="dropdown-toggle" id="languageID" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                        FR
	                                        <i class="fa fa-angle-down"></i>
	                                    </a>
	                                    <div class="dropdown-menu" aria-labelledby="languageID">
	                                        <a class="dropdown-item" href="#"><img src="assets/img/header/2.jpg" alt="Français"> Français</a>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="currency-selector header-top-nav__item">
	                                <div class="dropdown header-top__dropdown">
	                                    
	                                    <a class="dropdown-toggle" id="currencyID" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                        TND
	                                        <i class="fa fa-angle-down"></i>
	                                    </a>
	                                    <div class="dropdown-menu" aria-labelledby="currencyID">
	                                        <a class="dropdown-item" href="#">TND</a>
	                                       
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="user-info header-top-nav__item">
	                                <div class="dropdown header-top__dropdown">
	                                    <a class="dropdown-toggle" id="userID" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php if (isset($_SESSION['idclient']))echo $_SESSION['idclient'];else echo 'Mon Compte'; ?>
	                                        <i class="fa fa-angle-down"></i>
	                                    </a>
	                                    <div class="dropdown-menu" aria-labelledby="userID">
											<?php 
											if (isset($_SESSION['idclient']))
											{
												?>
												<a class="dropdown-item" href="moncompte.php" >Mon compte</a>
												<?php
											}
											?>
	                                        <a class="dropdown-item" <?php if (isset($_SESSION['idclient']))echo 'href="deconnexion.php"';else echo 'href="login-register.php"'; ?> >
	                                        	<?php if (isset($_SESSION['idclient'])) 
	                                        	{
	                                        	echo "Déconnexion";
	                                        	}
	                                        	else
	                                        	{
	                                        	echo "Inscription/Connexion ";	
	                                        	}

	                                        	?>
	                                        
	                                    	</a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="header-middle header-top-1">
	            <div class="container">
	                <div class="row no-gutters align-items-center">
	                    <div class="col-md-5 col-sm-6 order-lg-1 order-2">
	                        <div class="contact-info">
	                            <img src="assets/img/icons/icon_phone.png" alt="Phone Icon">
<<<<<<< HEAD
	                            <p>Contactez-nous: (+216)xx xxx xxx</p>
=======
	                            <p>Call us <br> téléphone: (+216) 20 208 124</p>
>>>>>>> origin/master
	                        </div>
	                    </div>
	                    <div class="col-lg-2 col-12 order-lg-2 order-1 text-center">
	                        <a href="index.php" class="logo-box mb-md--30">
	                            <p>place of our logo</p>
	                        </a>
	                    </div>
	                    <div class="col-lg-5 col-md-7 col-sm-6 order-lg-3 order-3">
	                        <div class="header-toolbar">
	                            <div class="search-form-wrapper search-hide">
	                                <form action="#" class="search-form">
	                                    <input type="text" name="search" id="search" class="search-form__input" placeholder="Search entire store here..">
	                                    <button type="submit" class="search-form__submit">
	                                        <i class="icon_search"></i>
	                                    </button>
	                                </form>
	                            </div>
	                            <ul class="header-toolbar-icons">
	                                <li class="search-box">
	                                    <a href="#" class="bordered-icon search-btn" aria-expanded="false"><i class="icon_search"></i></a>
	                                </li>
	                                <li class="wishlist-icon">
	                                    <a href="wishlist.html" class="bordered-icon"><i class="fa fa-heart"></i></a>
	                                </li>
	                                <?php
	                                include '../entities/produitpanier.php';
									include '../entities/panier.php';
									include '../core/panierC.php';
									if(basename($_SERVER['PHP_SELF'])=='cart.php')
									{
										if (isset($_GET['addpp']))
									    {
									        if (isset($_GET['nbpp'])&&$_GET['nbpp']>1)
									            $nb=$_GET['nbpp'];
									        else
									            $nb=1;
									        $panier=new panierC;
									        if (isset($_SESSION['idclient']))
									        	$panier->ajouterProduit($_SESSION['idclient'],$_GET['addpp'],$nb);
									    	else
									        	$panier->ajouterProduit(-1,$_GET['addpp'],$nb);
									    }
									    elseif (isset($_GET['delpp']))
									    {
									    	if (isset($_SESSION['idclient']))
									    	{
										    	$panier=new panierC;
										        $panier->supprimerProduit($_GET['delpp']);
									    	}
									    	else
									    		unset($_SESSION['produitpanier'][$_GET['delpp']]);
									    }
									}
									$panier=new panier(0);
									$panierC=new panierC;
									if (isset($_SESSION['idclient']))
									{
										$panier->setId($_SESSION['idclient']);
										$panier=$panierC->afficher($panier);
										$produits=$panier->getProduits();
									}
									else
									{
										$nbtot=0;
										foreach ($_SESSION['produitpanier'] as $p => $q)
										{
											$nbtot+=$q;
										}
									}
	                                ?>
	                                <li class="mini-cart-icon">
	                                    <div class="mini-cart mini-cart--1">
	                                        <a class="mini-cart__dropdown-toggle bordered-icon" id="cartDropdown">
	                                            <span class="mini-cart__count"><?php if(isset($_SESSION['idclient'])) echo $panier->getNbProduit(); else echo $nbtot; ?></span>
	                                            <i class="icon_cart_alt mini-cart__icon"></i>
	                                            <i class="fa fa-angle-down"></i>
	                                        </a>
	                                        <div class="mini-cart__dropdown-menu">
	                                            <div class="mini-cart__content" id="miniCart">
	                                            	<?php
	                                            	if (isset($_SESSION['idclient']))
	                                            	{
		                                            	foreach ($produits as $p)
		                                            	{
		                                            		?>
			                                                <div class="mini-cart__item">
			                                                    <div class="mini-cart__item--single">
			                                                        <div class="mini-cart__item--image">
			                                                            <img src="../../admin/views/images/<?php echo $p->getImage();?>" alt="product">
			                                                        </div>
			                                                        <div class="mini-cart__item--content">
			                                                            <h4 class="mini-cart__item--name"><a href="product-details.html"><?php echo $p->getNom(); ?></a> </h4>
			                                                            <p class="mini-cart__item--quantity">x<?php echo $p->getQuantite(); ?></p>
			                                                            <p class="mini-cart__item--price"><?php echo $p->getPrixUnitaire(); ?></p>
			                                                        </div>
			                                                    </div>
			                                                </div>
		                                                	<?php
		                                            	}
	                                            	}
	                                            	else
	                                            	{
	                                            		$prixtot=0;
	                                            		foreach ($_SESSION['produitpanier'] as $idp => $nbp)
		                                            	{
		                                            		$p=$panierC->getProduit($idp);
		                                            		$prixtot+=$nbp*$p['prix'];
		                                            		?>
			                                                <div class="mini-cart__item">
			                                                    <div class="mini-cart__item--single">
			                                                        <div class="mini-cart__item--image">
			                                                            <img src="../../admin/views/images/<?php echo $p['img']; ?>" alt="product">
			                                                        </div>
			                                                        <div class="mini-cart__item--content">
			                                                            <h4 class="mini-cart__item--name"><a href="product-details.html"><?php echo $p['nom']; ?></a> </h4>
			                                                            <p class="mini-cart__item--quantity">x<?php echo $nbp; ?></p>
			                                                            <p class="mini-cart__item--price"><?php echo $p['prix']; ?></p>
			                                                        </div>
			                                                    </div>
			                                                </div>
		                                                	<?php
		                                            	}
	                                            	}
	                                            	?>
	                                                <div class="mini-cart__calculation">
	                                                    <p>
	                                                        <span class="mini-cart__calculation--item">Total :</span>
	                                                        <span class="mini-cart__calculation--ammount"><?php if(isset($_SESSION['idclient'])) echo $panier->getPrixTotal(); else echo $prixtot; ?></span>
	                                                    </p>
	                                                </div>
	                                                <div class="mini-cart__btn">
	                                                    <a href="cart.php" class="btn btn-fullwidth btn-style-1">Voir panier</a>
	                                                </div>  
	                                            </div>
	                                        </div>
	                                    </div>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>  
	                </div>
	            </div>
	        </div>
	        <div class="header-bottom header-top-1 position-relative navigation-wrap fixed-header">
	            <div class="container position-static">
	                <div class="row">
	                    <div class="col-12 position-static text-center">
	                        <nav class="main-navigation">
	                            <ul class="mainmenu">
	                                <li class="mainmenu__item <?php if (basename($_SERVER['PHP_SELF'])=='index.php')echo 'active'; ?>">
	                                    <a href="index.php" class="mainmenu__link">Accueil</a>
	                                </li>
	                                <li class="mainmenu__item <?php if (basename($_SERVER['PHP_SELF'])=='shop.php')echo 'active'; ?>">
	                                    <a href="shop.php" class="mainmenu__link">Produits</a>
	                                    
	                                <li class="mainmenu__item <?php if (basename($_SERVER['PHP_SELF'])=='blog.php')echo 'active'; ?>">
	                                    <a href="blog.php" class="mainmenu__link">Blog</a>
	                                </li>
									<li class="mainmenu__item <?php if (basename($_SERVER['PHP_SELF'])=='listefaq.php')echo 'active'; ?>">
	                                    <a href="listefaq.php" class="mainmenu__link">FAQ</a>
	                                </li>
	                               
	                                <li class="mainmenu__item">
	                                    <a href="about.php" class="mainmenu__link">About Us</a>
	                                </li>
	                                <li class="mainmenu__item">
	                                    <a href="contact.php" class="mainmenu__link">contact Us</a>
	                                </li>
	                            </ul>
	                        </nav>
	                    </div>
	                </div>
	                <div class="row no-gutters">
	                    <div class="col-12">
	                        <div class="mobile-menu"></div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </header>
	    <!-- Header Area End -->
	    <?php
}

function frontDown()
{
	?>
	<!-- Footer Start -->
       <footer class="footer border-top ptb--40 ptb-md--30">
            <div class="container">
                <div class="row mb--40 mb-md--30">
                    <div class="col-lg-4 col-md-6 mb-md--30">
                        <div class="footer-widget">
                            <h3 class="widget-title">à propos THE MUST</h3>
                            <div class="widget-content mb--20">
                                <p>Address: gammarth <br> tunisie</p>
                                <p>Phone: (0216) xxxxxxxxx</p>
                                <p>Fax: (0716) xxxxxxxx</p>
                                <p>Email: themust.gammarth@gmail.com</p>
                            </div>
                            <ul class="social social-round">
                                <li class="social__item">
                                    <a class="social__link" href="facebook.com">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a class="social__link" href="twitter.com">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a class="social__link" href="youtube.com">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a class="social__link" href="instagram.com">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a class="social__link" href="plus.google.com">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-md--30">
                        <div class="footer-widget">
                            <h3 class="widget-title">Information</h3>
                            <ul class="widget-menu">
                                <li><a href="#">à propos de nous</a></li>
                                <li><a href="#">Contactez nous</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-sm--30">
                        <div class="footer-widget">
                            <h3 class="widget-title">Extras</h3>
                            <ul class="widget-menu">
                                <li><a href="#">Brands</a></li>
                                
                                <li><a href="#">Affiliate</a></li>
                                <li><a href="#">Specials</a></li>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Returns</a></li>
                            </ul>
                        </div>
                    </div>
                    
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="copyright-text">Copyright &copy; 2018 <a href="#">HasTech</a> .All Right Reserved.</p>
                        <img src="assets/img/others/payment.png" alt="payment">
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- Scroll To Top Start -->    
        <a class="scroll-to-top" href="#"><i class="fa fa-angle-double-up"></i></a>
        <!-- Scroll To Top End -->

        <!-- Modal Start -->
        <div class="modal fade product-modal" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">Close</span>
                </button>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 mb-sm--20">
                            <div class="tab-content product-thumb-large">
                                <div id="thumb1" class="tab-pane active show fade">
                                    <img src="assets/img/products/1-1-600x600.jpg" alt="product thumb">
                                </div>
                                <div id="thumb2" class="tab-pane fade">
                                    <img src="assets/img/products/2-600x600.jpg" alt="product thumb">
                                </div>
                                <div id="thumb3" class="tab-pane fade">
                                    <img src="assets/img/products/10-600x600.jpg" alt="product thumb">
                                </div>
                                <div id="thumb4" class="tab-pane fade">
                                    <img src="assets/img/products/11-600x600.jpg" alt="product thumb">
                                </div>
                                <div id="thumb5" class="tab-pane fade">
                                    <img src="assets/img/products/12-600x600.jpg" alt="product thumb">
                                </div>
                                <div id="thumb6" class="tab-pane fade">
                                    <img src="assets/img/products/13-600x600.jpg" alt="product thumb">
                                </div>
                            </div>
                            <div class="product-thumbnail">
                                <div class="thumb-menu" id="modal-thumbmenu">
                                    <div class="thumb-menu-item">
                                        <a href="#thumb1" data-toggle="tab" class="nav-link active">
                                            <img src="assets/img/products/1-1-450x450.jpg" alt="product thumb">
                                        </a>
                                    </div>
                                    <div class="thumb-menu-item">
                                        <a href="#thumb2" data-toggle="tab" class="nav-link">
                                            <img src="assets/img/products/2-2-450x450.jpg" alt="product thumb">
                                        </a>
                                    </div>
                                    <div class="thumb-menu-item">
                                        <a href="#thumb3" data-toggle="tab" class="nav-link">
                                            <img src="assets/img/products/10-10-450x450.jpg" alt="product thumb">
                                        </a>
                                    </div>
                                    <div class="thumb-menu-item">
                                        <a href="#thumb4" data-toggle="tab" class="nav-link">
                                            <img src="assets/img/products/11-11-450x450.jpg" alt="product thumb">
                                        </a>
                                    </div>
                                    <div class="thumb-menu-item">
                                        <a href="#thumb5" data-toggle="tab" class="nav-link">
                                            <img src="assets/img/products/12-12-450x450.jpg" alt="product thumb">
                                        </a>
                                    </div>
                                    <div class="thumb-menu-item">
                                        <a href="#thumb6" data-toggle="tab" class="nav-link">
                                            <img src="assets/img/products/13-13-450x450.jpg" alt="product thumb">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                                
                                <p class="product-tags">
                                    Tags: <a href="shop.php">Sport</a>,
                                    <a href="shop.php">Luxury</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal End -->
	    </div>
    <!-- Main Wrapper End -->


    <!-- ************************* JS Files ************************* -->

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery.min.js"></script>

    <!-- Bootstrap and Popper Bundle JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- All Plugins Js -->
    <script src="assets/js/plugins.js"></script>
    <!-- Ajax Mail Js -->
    <script src="assets/js/ajax-mail.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <?php
}
?>