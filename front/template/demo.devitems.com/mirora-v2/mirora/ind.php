
<?php  
include "../../../../../config.php";
$db=config::getConnexion();

$emps=$db->query("DELETE FROM publicite WHERE fin<=CURDATE()");
?>
<?php  

$result=$db->query('select * from publicite');

?>

<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:51:16 GMT -->
<head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">  -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <!-- <meta name="description" content="meta description"> -->
    <!-- Favicons -->
    <!-- <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon"> -->
    <!-- <link rel="apple-touch-icon" href="assets/img/icon.png"> -->

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
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


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
                                    <a href="facebook.com" class="social__link">
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
                            <p class="header-text">EEEEEEEE <span>“Watches2019”</span></p>
                        </div>
                        <div class="col-lg-4">
                            <div class="header-top-nav d-flex justify-content-lg-end justify-content-center">
                                <div class="language-selector header-top-nav__item">
                                    <div class="dropdown header-top__dropdown">
                                        <a class="dropdown-toggle" id="languageID" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            EN-GB
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="languageID">
                                            <a class="dropdown-item" href="#"><img src="assets/img/header/1.jpg" alt="English"> English</a>
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
                                            <a class="dropdown-item" href="#">&dinar; TND</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="user-info header-top-nav__item">
                                    <div class="dropdown header-top__dropdown">
                                        <a class="dropdown-toggle" id="userID" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Mon Compte
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="userID">
                                            <a class="dropdown-item" href="login-register.html">Créer un compte</a>
                                            <a class="dropdown-item" href="login-register.html">Connectez-vous</a>
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
                                <p>Contactez-nous: (+216)xx xxx xxx </p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-12 order-lg-2 order-1 text-center">
                            <a href="index.html" class="logo-box mb-md--30">
                                <p>place of our logo</p>
                            </a>
                        </div>
                        <div class="col-lg-5 col-md-7 col-sm-6 order-lg-3 order-3">
                            <div class="header-toolbar">
                                <div class="search-form-wrapper search-hide">
                                    <form action="#" class="search-form">
                                        <input type="text" name="search" id="search" class="search-form__input" placeholder="recherche">
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
                                    <li class="mini-cart-icon">
                                        <div class="mini-cart mini-cart--1">
                                            <a class="mini-cart__dropdown-toggle bordered-icon" id="cartDropdown">
                                                <span class="mini-cart__count">0</span>
                                                <i class="icon_cart_alt mini-cart__icon"></i>
                                                <span class="mini-cart__ammount">0 <i class="fa fa-angle-down"></i></span>
                                            </a>
                                            <div class="mini-cart__dropdown-menu">
                                                <div class="mini-cart__content" id="miniCart">
                                                    <div class="mini-cart__item">
                                                        <div class="mini-cart__item--single">
                                                            <div class="mini-cart__item--image">
                                                                <p>l'ajout de produit se fait ici</p>
                                                            </div>
                                                            <div class="mini-cart__item--content">
                                                                <h4 class="mini-cart__item--name"><a href="product-details.html"> <br>-<small></small></a> </h4>
                                                                <p class="mini-cart__item--quantity"></p>
                                                                <p class="mini-cart__item--price"></p>
                                                            </div>
                                                            <a class="mini-cart__item--remove" href="#"><i class="icon_close"></i></a>
                                                        </div>
                                                    <div class="mini-cart__calculation">
                                                         <p>
                                                            ensemble du produit : le prix total etc </p>
                                                    <div class="mini-cart__btn">
                                                        <a href="cart.html" class="btn btn-fullwidth btn-style-1">Voir panier</a>
                                                        <a href="checkout.html" class="btn btn-fullwidth btn-style-1">Payer</a>
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
                                    <li class="mainmenu__item active ">
                                        <a href="index.html" class="mainmenu__link">Accueil</a>
                                        
                                    </li>

                                    <li class="mainmenu__item ">
                                        <a href="contact.html" class="mainmenu__link">Contact</a>
                                    </li>
                                    <li class="mainmenu__item menu-item-has-children">
                                        <a href="shop.html" class="mainmenu__link">Produits</a>
                                        <ul class="megamenu five-column">
                                            <li>
                                                <a class="megamenu-title" href="#">Shop Grid</a>
                                                <ul>
                                                    <li>
                                                        <a href="shop.html">Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-right-sidebar.html">Right Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-fullwidth.html">Three Column</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-fullwidth-4-column.html">Four Column</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="megamenu-title" href="#">Liste des produits</a>
                                                <ul>
                                                    <li>
                                                        <a href="shop-list-left-sidebar.html">Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-list-right-sidebar.html">Right Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-list.html">Full width</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="megamenu-title" href="#">Single Product</a>
                                                <ul>
                                                    <li>
                                                        <a href="product-details.html">Standard Product</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-variable.html">Variable Product</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-group.html">Group Product</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-affiliate.html">Affiliate Product</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="megamenu-title" href="#">Single Product</a>
                                                <ul>
                                                    <li>
                                                        <a href="product-details.html">Tab Style One</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-tab-style-2.html">Tab Style Two</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-tab-style-3.html">Tab Style Three</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-sticky-left.html">Sticky Left</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-sticky-right.html">Sticky Right</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="megamenu-title" href="#">Single Product</a>
                                                <ul>
                                                    <li>
                                                        <a href="product-details-gallery-left.html">Gallery Left</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-gallery-right.html">Gallery Right</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-slider-box.html">Slider Box</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-slider-full-width.html">Full Width Slider</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mainmenu__item menu-item-has-children has-children">
                                        <a href="blog.html" class="mainmenu__link">Blog</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children has-children">
                                                <a href="#">Blog Grid</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog.html">Left Sidebar</a></li>
                                                    <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                                    <li><a href="blog-3-column.html">Three Column</a></li>
                                                    <li><a href="blog-4-column.html">Four Column</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children has-children">
                                                <a href="#">Blog List</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog-list.html">Full Width</a></li>
                                                    <li><a href="blog-list-left-sidebar.html">left Sidebar</a></li>
                                                    <li><a href="blog-list-right-sidebar.html">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children has-children">
                                                <a href="#">Blog Details</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog-details-image.html">Standard Post</a></li>
                                                    <li><a href="blog-details-image.html">Image Post</a></li>
                                                    <li><a href="blog-details-audio.html">Audio Post</a></li>
                                                    <li><a href="blog-details-video.html">Video Post</a></li>
                                                    <li><a href="blog-details-gallery.html">Gallery Post</a></li>
                                                    <li><a href="blog-details-right-sidebar.html">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mainmenu__item ">
                                        <a href="about.html" class="mainmenu__link">A Propos </a>
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

        <!-- Main Content Wrapper Start -->
        <div class="main-content-wrapper">
            <!-- Slider area Start -->

            <div class="slider-area">
                <div class="homepage-slider">
                    <!-- Single Slide Start -->
                    <?php while ($row = $result->fetch()) { ?>
                       
                    <div class="single-slider content-v-center" style="background-image: url(../../../../../admin/images/<?php echo $row['image']; ?>" >
                        
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content">
                                        <h5 data-animation="rollIn" data-duration=".8s" data-delay=".5s">promotion</h5>
                                        <h1 data-animation="fadeInDown" data-duration=".8s" data-delay=".2s"><?php echo $row['cat']; ?></h1>
                                        <p class="mb--30 mb-sm--20" data-animation="fadeInDown" data-duration=".8s" data-delay=".2s"><?php echo $row['description']; ?> </p>
                                        <p class="mb--50 mb-sm--20" data-animation="fadeInDown" data-duration=".8s" data-delay=".2s">Starting At <strong>prix</strong></p>
                                        <div class="slide-btn-group" data-animation="fadeInUp" data-duration="1s" data-delay=".3s">
                                            <a href="shop.html" class="btn btn-bordered btn-style-1">Achetez maintenant</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- Single Slide End -->

                    <!-- Single Slide Start -->
                    <!-- <div class="single-slider content-v-center" style="background-image: url(assets/img/slider/slider2-mirora1-1920x634.jpg)">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content">
                                        <h5 data-animation="rollIn" data-duration=".8s" data-delay=".5s">promotion</h5>
                                        <h1 data-animation="fadeInDown" data-duration=".8s" data-delay=".2s">nom de la catégorie</h1>
                                        <p class="mb--30 mb-sm--20" data-animation="fadeInDown" data-duration=".8s" data-delay=".2s">description du catégories</p>
                                        <p class="mb--50 mb-sm--20" data-animation="fadeInDown" data-duration=".8s" data-delay=".2s">Starting At <strong>prix</strong></p>
                                        <div class="slide-btn-group" data-animation="fadeInUp" data-duration="1s" data-delay=".3s">
                                            <a href="shop.html" class="btn btn-bordered btn-style-1">Achetez maintenant</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Single Slide End -->

                    <!-- Single Slide Start -->
                    <!--<div class="single-slider content-v-center" style="background-image: url(assets/img/slider/slider2-mirora1-1920x634.jpg)">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content">
                                        <h5 data-animation="rollIn" data-duration=".3s" data-delay=".5s">promotion</h5>
                                        <h1 data-animation="fadeInDown" data-duration=".8s" data-delay=".3s">nom de la catégorie</h1>
                                        <p class="mb--30 mb-sm--20" data-animation="fadeInDown" data-duration=".8s" data-delay=".3s">description du catégorie </p>
                                        <p class="mb--50 mb-sm--20" data-animation="fadeInDown" data-duration=".8s" data-delay=".3s">Starting At <strong>prix</strong></p>
                                        <div class="slide-btn-group" data-animation="fadeInUp" data-duration="1s" data-delay=".3s">
                                            <a href="shop.html" class="btn btn-bordered btn-style-1">Achetez maintenant</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Slide End -->
                </div>
            </div>

            <!-- Slider area End -->

            <!-- Promo Box area Start -->

            <div class="promo-box-area border-bottom ptb--80 ptb-md--60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-sm--30">
                            <div class="promo promo-1">
                                <a href="shop.html" class="promo__box">
                                    <img src="assets/img/banner/img1-top-mirora1.jpg" alt="Product Category">
                                    <span class="promo__content">
                                        <span class="promo__label"></span>
                                        <span class="promo__name"></span>
                                        <span class="promo__price"></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-sm--30">
                            <div class="promo promo-1">
                                <a href="shop.html" class="promo__box">
                                    <img src="assets/img/banner/img2-top-mirora1.jpg" alt="Product Category">
                                    <span class="promo__content">
                                        <span class="promo__label"></span>
                                        <span class="promo__name"></span>
                                        <span class="promo__price"></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="promo promo-1">
                                <a href="shop.html" class="promo__box">
                                    <img src="assets/img/banner/img3-top-mirora1.jpg" alt="Product Category">
                                    <span class="promo__content">
                                        <span class="promo__label"></span>
                                        <span class="promo__name"></span>
                                        <span class="promo__price"></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--40 mt-md--30">
                        
                    </div>
                </div>
            </div>

            <!-- Promo Box area End -->

            <!-- Products Tab area Start -->

            <div class="product-tab pt--80 pb--60 pt-md--60 pb-md--45">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <ul class="nav nav-tabs product-tab__head" id="product-tab" role="tablist">
                                <li class="product-tab__item nav-item active">
                                    <a class="product-tab__link nav-link active" id="nav-featured-tab" data-toggle="tab" href="#nav-featured" role="tab" aria-selected="true">En vedette</a>
                                </li>
                                <li class="product-tab__item nav-item">
                                    <a class="product-tab__link nav-link" id="nav-new-tab" data-toggle="tab" href="#nav-new" role="tab" aria-selected="false">Nouveaux produits</a>
                                </li>
                                <li class="product-tab__item nav-item">
                                    <a class="product-tab__link nav-link" id="nav-bestseller-tab" data-toggle="tab" href="#nav-bestseller" role="tab" aria-selected="false">Meilleures ventes</a>
                                </li>
                                <li class="product-tab__item nav-item">
                                    <a class="product-tab__link nav-link" id="nav-onsale-tab" data-toggle="tab" href="#nav-onsale" role="tab" aria-selected="false">Promotions</a>
                                </li>
                            </ul>
                            <div class="tab-content product-tab__content" id="product-tabContent">
                                <div class="tab-pane fade show active" id="nav-featured" role="tabpanel">
                                    <div class="product-carousel js-product-carousel">
                                        <div class="product-carousel-group">
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/1-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/1-1-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description du produit
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/2-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/2-2-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      Description du produit
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-carousel-group">
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/3-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/3-3-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                     
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/4-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/4-4-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-carousel-group">
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/5-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/5-5-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/6-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/6-6-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                   description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-carousel-group">
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/6-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/6-6-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/7-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/7-7-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-carousel-group">
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/8-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/8-8-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Aajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/9-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/9-9-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-new" role="tabpanel">
                                    <div class="product-carousel js-product-carousel">
                                        <div class="product-carousel-group">
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/10-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/10-10-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/11-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/11-11-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-carousel-group">
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/12-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/12-12-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/14-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/14-14-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-carousel-group">
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/15-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/15-15-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/16-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/16-16-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-carousel-group">
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/17-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/17-17-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/18-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/18-18-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-carousel-group">
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/7-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/7-7-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/8-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/8-8-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-bestseller" role="tabpanel">
                                    <div class="product-carousel js-product-carousel">
                                        <div class="product-carousel-group">
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/9-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/9-9-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/6-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/6-6-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-carousel-group">
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/5-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/5-5-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/4-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/4-4-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-carousel-group">
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/3-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/3-3-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                     description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/3-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/3-3-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-carousel-group">
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/1-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/1-1-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/7-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/2-2-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-carousel-group">
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/8-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/8-8-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/10-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/10-10-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-onsale" role="tabpanel">
                                    <div class="product-carousel js-product-carousel">
                                        <div class="product-carousel-group">
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/11-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/11-11-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/12-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/12-12-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-carousel-group">
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/13-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/13-13-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/14-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/14-14-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-carousel-group">
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/15-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/15-15-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money"></span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/15-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/15-15-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-carousel-group">
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/16-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/16-16-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/16-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/16-16-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span>r</span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-carousel-group">
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/17-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/17-17-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="assets/img/products/18-450x450.jpg" alt="Product" class="primary-image" />
                                                    <img src="assets/img/products/18-18-450x450.jpg" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                                    <h4><a href="product-details.html">Nom</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">prix</span>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      description
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Products Tab area End -->

            <!-- Banner area Start -->

            <section class="banner-area banner-bg-1 ptb--80 ptb-md--60">
                <div class="banner-box text-center">
                    <h5 class="banner__label">solde</h5>
                    <h2 class="banner__name">sous nom</h2>
                    <p class="banner__text mb--50 mb-md--20">quote</p>
                    <a href="shop.html" class="btn btn-bordered btn-style-1">Achetez maintenant</a>
                </div>
            </section>      

            <!-- Banner area End -->

            <!-- Most Viewed Product area Start -->

            <section class="mostviewed-product-area border-bottom pt--80 pb--60 pt-md--60 pb-md--50">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title mb--15">
                                <h2 class="color--white">Mostviewed Products</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="product-carousel nav-top js-product-carousel-2">
                                <div class="mirora-product">
                                    <div class="product-img">
                                        <img src="assets/img/products/2-450x450.jpg" alt="Product" class="primary-image" />
                                        <img src="assets/img/products/2-2-450x450.jpg" alt="Product" class="secondary-image" />
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span></span>
                                        <h4><a href="product-details.html">nom</a></h4>
                                        <div class="product-price-wrapper">
                                            <span class="money">prix</span>
                                            <span class="product-price-old">
                                                <span class="money"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mirora_product_action text-center position-absolute">
                                        <div class="product-rating">
                                            <span>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <p>
                                          description
                                        </p>
                                        <div class="product-action">
                                            <a class="same-action" href="wishlist.html" title="wishlist">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mirora-product">
                                    <div class="product-img">
                                        <img src="assets/img/products/4-450x450.jpg" alt="Product" class="primary-image" />
                                        <img src="assets/img/products/4-4-450x450.jpg" alt="Product" class="secondary-image" />
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span></span>
                                        <h4><a href="product-details.html">Nom</a></h4>
                                        <div class="product-price-wrapper">
                                            <span class="money">prix</span>
                                            <span class="product-price-old">
                                                <span class="money"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mirora_product_action text-center position-absolute">
                                        <div class="product-rating">
                                            <span>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <p>
                                          description
                                        </p>
                                        <div class="product-action">
                                            <a class="same-action" href="wishlist.html" title="wishlist">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mirora-product">
                                    <div class="product-img">
                                        <img src="assets/img/products/6-450x450.jpg" alt="Product" class="primary-image" />
                                        <img src="assets/img/products/6-6-450x450.jpg" alt="Product" class="secondary-image" />
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span></span>
                                        <h4><a href="product-details.html">nom</a></h4>
                                        <div class="product-price-wrapper">
                                            <span class="money">prix</span>
                                            <span class="product-price-old">
                                                <span class="money"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mirora_product_action text-center position-absolute">
                                        <div class="product-rating">
                                            <span>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <p>
                                          description
                                        </p>
                                        <div class="product-action">
                                            <a class="same-action" href="wishlist.html" title="wishlist">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mirora-product">
                                    <div class="product-img">
                                        <img src="assets/img/products/8-450x450.jpg" alt="Product" class="primary-image" />
                                        <img src="assets/img/products/8-8-450x450.jpg" alt="Product" class="secondary-image" />
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span></span>
                                        <h4><a href="product-details.html">nom</a></h4>
                                        <div class="product-price-wrapper">
                                            <span class="money">prix</span>
                                            <span class="product-price-old">
                                                <span class="money"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mirora_product_action text-center position-absolute">
                                        <div class="product-rating">
                                            <span>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <p>
                                         description
                                        </p>
                                        <div class="product-action">
                                            <a class="same-action" href="wishlist.html" title="wishlist">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mirora-product">
                                    <div class="product-img">
                                        <img src="assets/img/products/10-450x450.jpg" alt="Product" class="primary-image" />
                                        <img src="assets/img/products/10-10-450x450.jpg" alt="Product" class="secondary-image" />
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span></span>
                                        <h4><a href="product-details.html">nom5</a></h4>
                                        <div class="product-price-wrapper">
                                            <span class="money">prix</span>
                                            <span class="product-price-old">
                                                <span class="money"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mirora_product_action text-center position-absolute">
                                        <div class="product-rating">
                                            <span>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <p>
                                          description
                                        </p>
                                        <div class="product-action">
                                            <a class="same-action" href="wishlist.html" title="wishlist">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mirora-product">
                                    <div class="product-img">
                                        <img src="assets/img/products/12-450x450.jpg" alt="Product" class="primary-image" />
                                        <img src="assets/img/products/12-12-450x450.jpg" alt="Product" class="secondary-image" />
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span></span>
                                        <h4><a href="product-details.html">nom</a></h4>
                                        <div class="product-price-wrapper">
                                            <span class="money">prix</span>
                                            <span class="product-price-old">
                                                <span class="money"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mirora_product_action text-center position-absolute">
                                        <div class="product-rating">
                                            <span>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <p>
                                          description
                                        </p>
                                        <div class="product-action">
                                            <a class="same-action" href="wishlist.html" title="wishlist">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mirora-product">
                                    <div class="product-img">
                                        <img src="assets/img/products/14-450x450.jpg" alt="Product" class="primary-image" />
                                        <img src="assets/img/products/14-14-450x450.jpg" alt="Product" class="secondary-image" />
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span></span>
                                        <h4><a href="product-details.html">nom</a></h4>
                                        <div class="product-price-wrapper">
                                            <span class="money">prix</span>
                                            <span class="product-price-old">
                                                <span class="money"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mirora_product_action text-center position-absolute">
                                        <div class="product-rating">
                                            <span>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <p>
                                          description
                                        </p>
                                        <div class="product-action">
                                            <a class="same-action" href="wishlist.html" title="wishlist">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>ajouter au panier</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 

            <!-- Most Viewed Product area End -->

            <!-- Blog area Start -->

           

            <!-- Blog area End -->

            <!-- Newsletter area End -->
            
            
            
            <!-- Newsletter area End -->

            <!-- Promo Box area Start -->

            <div class="promo-box-area">
                <div class="container-fluid p-0">
                    <div class="row no-gutters">
                        <div class="col-md-6 mb-sm--20">
                            <div class="promo">
                                <a href="shop.html" class="promo__box promo__box-2">
                                    <img src="assets/img/banner/img1-bottom-mirora1.jpg" alt="Product Category">
                                    <span class="promo__content promo__content-2">
                                        <span class="promo__label">produit 2019</span>
                                        <span class="promo__name">produit de luxe 22019</span>
                                        <span class="promo__price">Men's and Woman's Accessories</span>
                                        <span class="promo__link">Discover Now</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="promo">
                                <a href="shop.html" class="promo__box promo__box-2">
                                    <img src="assets/img/banner/img2-bottom-mirora1.jpg" alt="Product Category">
                                    <span class="promo__content promo__content-2">
                                        <span class="promo__label">Trending Products 2019</span>
                                        <span class="promo__name">nom</span>
                                        <span class="promo__price">prix </span>
                                        <span class="promo__link">Discover Now</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Promo Box area End -->
        </div>
        <!-- Main Content Wrapper Start -->

        <!-- Footer Start -->
        <footer class="footer border-top ptb--40 ptb-md--30">
            <div class="container">
                <div class="row mb--40 mb-md--30">
                    <div class="col-lg-4 col-md-6 mb-md--30">
                        <div class="footer-widget">
                            <h3 class="widget-title">à propos the must</h3>
                            <div class="widget-content mb--20">
                                <p>Address: gammarth <br> tunisie</p>
                                <p>Phone: (0216) xxxxxxxxx</p>
                                <p>Fax: (0716) xxxxxxxx</p>
                                <p>Email: themust@gmail.com</p>
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
                                <li><a href="#">------</a></li>
                                <li><a href="#">Contacter nous</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-sm--30">
                        <div class="footer-widget">
                            <h3 class="widget-title">Extras</h3>
                            <ul class="widget-menu">
                                <li><a href="#">Brands</a></li>
                                <li><a href="#">Gift Certificates</a></li>
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

        <!-- Popup Subscribe Box Start -->

        

        <!-- Popup Subscribe Box End -->

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
                        <div class="col-lg-7 col-md-6">
                            <div class="modal-box product">
                                <h3 class="product-title">nom</h3>
                                <div class="ratings mb--20">
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <ul class="product-detail-list list-unstyled mb--20">
                                    <li>Brand: <a href="#">Apple</a></li>
                                    <li>Product Code: Watches</li>
                                    <li>Reward Points: 600</li>
                                    <li>Availability: In Stock</li>
                                </ul>
                                <div class="product-price border-bottom pb--20 mb--20">
                                    <span class="regular-price">prix</span>
                                    <span class="sale-price"></span>
                                </div>
                                <div class="product-options mb--20">
                                    <h3>Available Options</h3>
                                    <div class="form-group">
                                        <label><sup>*</sup>Color Switch</label>
                                        <select>
                                            <option> --- Please Select --- </option>
                                            <option>Black</option>
                                            <option>Blue</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="product-action-wrapper mb--20">
                                    <div class="product-action-top d-flex align-items-center mb--20">
                                        <div class="quantity">
                                            <span>Qty: </span>
                                            <input type="number" class="quantity-input" name="qty" id="qty" value="1" min="1">
                                        </div>
                                        <button type="button" class="btn btn-medium btn-style-2 add-to-cart">
                                           ajouter au panier
                                        </button>
                                    </div>
                                    <div class="product-action-bottom">
                                        <a href="wishlist.html">+Add to wishlist</a>
                                        <a href="compare.html">+Add to compare</a>
                                    </div>
                                </div>  
                                <p class="product-tags">
                                    Tags: <a href="shop.html">Sport</a>,
                                    <a href="shop.html">Luxury</a>
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

</body>


<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:52:22 GMT -->
</html>