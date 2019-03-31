<?php
include "../../../../../config.php";
include 'menus.php';
testConnexion();
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
    <?php frontUP(); ?>
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
                    
                 Single Slide End -->

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
                    Single Slide End -->
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

        <?php frontDown(); ?>

</body>


<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:52:22 GMT -->
</html>