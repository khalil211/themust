<?php
include 'menus.php';
testConnexion();
include '../../../../../config.php';
$db=config::getConnexion();
$result=$db->query('select * from produit');
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">
<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:53:51 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <!-- Favicons -->
    
    <link rel="apple-touch-icon" href="assets/img/icon.png">

    <!-- Title -->
    <title>The must</title>

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

    <?php frontUp(); ?>
        <!-- Breadcumb area Start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Produits</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.php">Accueil</a></li>
                            <li class="current"><a href="shop.php">Produit</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcumb area End -->

        <!-- Main Content Wrapper Start -->
        <div class="main-content-wrapper">
            <div class="shop-area pt--40 pb--80 pt-md--30 pb-md--60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 order-lg-2 mb-md--30">
                            <div class="row">
                                <div class="col-12">
                                    <!-- Refine Search Start -->
                                    <div class="refine-search mb--30">
                                        <h3>Refine Search</h3>
                                        <ul class="cat-list mb--20">
                                            <li><a href="shop.php">Diamonds (3)</a></li>
                                            <li><a href="shop.php">For Mens's (15)</a></li>
                                            <li><a href="shop.php">For Womens's (16)</a></li>
                                            <li><a href="shop.php">Jewlery (3)</a></li>
                                            <li><a href="shop.php">Watches (13)</a></li>
                                        </ul>
                                        <ul class="cat-list">
                                            <li><a href="shop.php">Product Compare (3)</a></li>
                                        </ul>
                                    </div>
                                    <!-- Refine Search End -->

                                    <!-- Shop Toolbar Start -->
                                    <div class="shop-toolbar">
                                        <div class="product-view-mode" data-default="3">
                                            <a class="grid-2" data-target="gridview-2" data-toggle="tooltip" data-placement="top" title="2">2</a>
                                            <a class="active grid-3" data-target="gridview-3" data-toggle="tooltip" data-placement="top" title="3">3</a>
                                            <a class="grid-4" data-target="gridview-4" data-toggle="tooltip" data-placement="top" title="4">4</a>
                                            <a class="grid-5" data-target="gridview-5" data-toggle="tooltip" data-placement="top" title="5">5</a>
                                            <a class="list" data-target="listview" data-toggle="tooltip" data-placement="top" title="5">List</a>
                                        </div>
                                        <span class="product-pages">Showing 1 to 9 of 11 (2 Pages)</span>
                                        <div class="product-showing">
                                            <label class="select-label">Show:</label>
                                            <select class="short-select nice-select">
                                                <option value="1">9</option>
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="1">5</option>
                                                <option value="1">9</option>
                                            </select>
                                        </div>
                                        <div class="product-short">
                                            <label class="select-label">Short By:</label>
                                            <select class="short-select nice-select">
                                                <option value="1">Relevance</option>
                                                <option value="2">Name, A to Z</option>
                                                <option value="3">Name, Z to A</option>
                                                <option value="4">Price, low to high</option>
                                                <option value="5">Price, high to low</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Shop Toolbar End -->
                                </div>
                            </div>
                            
                            <!-- Main Shop wrapper Start -->
                            <div class="shop-product-wrap grid gridview-3 row no-gutters">
                                <?php
                                        foreach ($result as $key ) {
                                            
                                        ?>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <div class="mirora-product mb-md--10">

                                        <div class="product-img">
                                            <img src="../../../../../admin/images/<?php echo ''.$key['img'];?>" alt="Product" class="primary-image" />
                                            <img src="../../../../../admin/images/<?php echo $key['img'];?>" alt="Product" class="secondary-image" />
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    %
                                                </span>
                                                <a href="#" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Détails</a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <span></span>
                                            <h4><a href="product-details.html">Nom</a> <?php echo $key['nom'];?></h4>
                                            <div class="product-price-wrapper">
                                                <span class="money">prix</span> <?php echo $key['prix'];?>
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
                                             <?php echo $key['descr'];?>
                                            </p>

                                            <div class="product-action">
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="add_cart cart-item action-cart" href="cart.php?addpp=<?php echo $key['id']; ?>" title="wishlist"><span>Ajouter au panier</span></a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#p<?php echo $key['id']; ?>" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="mirora-product-list">
                                        <div class="product-img">
                                            <img src="../../../../../admin/images/<?php// echo $key['img'];?>" alt="Product" class="primary-image" />
                                            <img src="../../../../../admin/images/<?php// echo $key['img'];?>" alt="Product" class="secondary-image" />
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    %
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <span></span>
                                            <h4><a href="product-details.html">nom</a></h4>
                                            <div class="product-rating">
                                                <span>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                            <p class="product-desc">
                                             Description
                                            </p>
                                            <div class="product-price-wrapper">
                                                <span class="money">prix</span>
                                                <span class="product-price-old">
                                                    <span class="money"></span>
                                                </span>
                                            </div>
                                            <div class="product-action">
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>-->
                                </div>
                            <?php } ?>
                            </div>

                            <!-- Main Shop wrapper End -->

                            <!-- Pagination Start -->
                            <div class="pagination-wrap mt--15 mt-md--10">
                                <p class="page-ammount">Showing 1 to 9 of 15 (2 Pages)</p>
                                <ul class="pagination">
                                    <li><a href="#" class="first">|&lt;</a></li>
                                    <li><a href="#" class="prev">&lt;</a></li>
                                    <li><a href="#" class="current">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#" class="next">&gt;</a></li>
                                    <li><a href="#" class="next">&gt;|</a></li>
                                </ul>
                            </div>
                            <!-- Pagination End -->
                        </div>
                        <div class="col-lg-3 order-lg-1">
                            <aside class="shop-sidebar">
                                <div class="search-filter">
                                    <div class="filter-layered">
                                        <h3 class="filter-heading">Layered Navigation</h3>
                                        <ul class="filter-list">
                                            <li><span>Diamonds</span><a href="#"><i class="fa fa-times-circle"></i></a></li>
                                            <li><span>Brown</span><a href="#"><i class="fa fa-times-circle"></i></a></li>
                                            <li><span>Christian Dior</span><a href="#"><i class="fa fa-times-circle"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="filter-price">
                                        <h3 class="filter-heading">Prix</h3>
                                        <ul class="filter-list">
                                            <li>
                                                <div class="filter-input filter-radio">
                                                    <input type="radio" name="pricerange" id="pricerange-1" checked>
                                                    <label for="pricerange-1">entre 2 prix (3)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-radio">
                                                    <input type="radio" name="pricerange" id="pricerange-2">
                                                    <label for="pricerange-2">entre 2 prix (2)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-radio">
                                                    <input type="radio" name="pricerange" id="pricerange-3">
                                                    <label for="pricerange-3">entre 2 prix (6)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-radio">
                                                    <input type="radio" name="pricerange" id="pricerange-4">
                                                    <label for="pricerange-4">entre 2 prix (2)</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="filter-categories">
                                        <h3 class="filter-heading">catégories</h3>
                                        <ul class="filter-list">
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="category1" id="category1" checked>
                                                    <label for="category1">catégorie1</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="category2" id="category2">
                                                    <label for="category2">catégorie2</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="category3" id="category3">
                                                    <label for="category3">catégorie3</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="category4" id="category4">
                                                    <label for="category4">catégorie4</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="category5" id="category5">
                                                    <label for="category5">catégorie5</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="filter-color">
                                        <h3 class="filter-heading">couleur</h3>
                                        <ul class="filter-list">
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="black" id="black">
                                                    <label for="black">noir (3)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="blue" id="blue">
                                                    <label for="blue">bleu (6)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="brown" id="brown">
                                                    <label for="brown">marron (7)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="white" id="white">
                                                    <label for="white">blanc (4)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="red" id="red">
                                                    <label for="red">rouge (1)</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="filter-color">
                                        <h3 class="filter-heading">Manufacturer</h3>
                                        <ul class="filter-list">
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="ferragamo" id="ferragamo">
                                                    <label for="ferragamo">ferragamo (11)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="hermes" id="hermes">
                                                    <label for="hermes">hermes (9)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="louis" id="louis">
                                                    <label for="louis">louis vuitton (11)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="christian" id="christian">
                                                    <label for="christian">Christian Dior (8)</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="banner-static">
                                    <a href="#">
                                        <img src="assets/img/banner/img-sidebar.jpg" alt="Banner">
                                    </a>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        <?php frontDown(); ?>

</body>


<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:53:53 GMT -->
</html>