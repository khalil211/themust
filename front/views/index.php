<?php
include "../../config.php";
include 'menus.php';
testConnexion();
$db=config::getConnexion();

$emps=$db->query("DELETE FROM publicite WHERE fin<=CURDATE()");
?>
<?php  
$result=$db->query('select * from publicite');
$resultat=$db->query('SELECT * FROM produit');
?>


<!DOCTYPE html>
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
                       
                    <div class="single-slider content-v-center" style="background-image: url(../../admin/views/images/<?php echo $row['image']; ?>" >
                        
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content">
                                        <h5 data-animation="rollIn" data-duration=".8s" data-delay=".5s">promotion</h5>
                                        <h1 data-animation="fadeInDown" data-duration=".8s" data-delay=".2s"><?php echo $row['cat']; ?></h1>
                                        <p class="mb--30 mb-sm--20" data-animation="fadeInDown" data-duration=".8s" data-delay=".2s"><?php echo $row['description']; ?> </p>
                                        <p class="mb--50 mb-sm--20" data-animation="fadeInDown" data-duration=".8s" data-delay=".2s">Starting At <strong>prix</strong></p>
                                        <div class="slide-btn-group" data-animation="fadeInUp" data-duration="1s" data-delay=".3s">
                                             <a href="shop.php?del=<?php echo $row['ID'];?>" class="btn btn-bordered btn-style-1">Achetez maintenant </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <?php } ?>
                </div>
            </div>
                   

            <!-- Slider area End -->

            <!-- Promo Box area Start -->

            <div class="promo-box-area border-bottom ptb--80 ptb-md--60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-sm--30">
                            <div class="promo promo-1">
                                <a href="shop.php" class="promo__box">
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
                                <a href="shop.php" class="promo__box">
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
                                <a href="shop.php" class="promo__box">
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
                                    <a class="product-tab__link nav-link" id="nav-onsale-tab" data-toggle="tab" href="#nav-onsale" role="tab" aria-selected="false">Promotions</a>
                                </li>
                            </ul>
                            
                            <div class="tab-content product-tab__content" id="product-tabContent">

                                <div class="tab-pane fade show active" id="nav-featured" role="tabpanel">

                                    <div class="product-carousel js-product-carousel">
 <?php
                                            foreach ($resultat as $key ) {
                                                     $note=$key['note'];
                                                           $nb_note=$key['nb_note'];
                                                                if(($note/$nb_note>3)&&($note/$nb_note<6)&&($nb_note!=0)){
                                                                    ?>
                                        <div class="product-carousel-group">
                                            
                                          <div class="mirora-product">
                                           
                                                <div class="product-img">

                                                    <img src="../../admin/views/images/<?php echo ''.$key['img'];?>" alt="Product" class="primary-image" />
                                                    <img src="../../admin/views/images/<?php echo $key['img'];?>" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                        </span>
                                                            <a href="product-details.php?idd=<?php echo $key['id']; ?>" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Détails</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span></span>
                                           <h4><a href="product-details.php?idd=<?php echo $key['id']; ?>"> Nom</a> <?php echo $key['nom'];?></h4>
                                                    <div class="product-price-wrapper">
                                                       <span class="money">prix</span> <?php echo $key['prix'];?>
                                                        <span class="product-price-old">
                                                            <span class="money"></span>
                                                        </span>
                                                    </div>
                                                    <h5>
                                                        <?php echo "note"."  ".$note/$nb_note;?></h5>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                

                                                    <p>
                                                       <?php echo $key['descr'];?>
                                                    </p>
                                                    <br>
                                                    <div class="product-action">
                                                      
                                                        <a class="add_cart cart-item action-cart" href="cart.php?addpp=<?php echo $key['id']; ?>" title="wishlist"><span>Ajouter au panier</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>

                                                    </div>
                                                </div>
                                              
                                            </div>
                                            


                        </div>

                            <?php }}?>                
                           </div>
  
                </div>
                                <div class="tab-pane fade" id="nav-onsale" role="tabpanel">
                <?php 
                $promo=$db->query('SELECT p.id id,p.img img,p.nom nom,p.descr descr,p.prix prix,pr.pourcentage pourcentage  FROM produit p INNER JOIN promotions pr on p.id=pr.idproduit');
                ?>
                                    <div class="product-carousel js-product-carousel">
                                        <?php
                                        foreach($promo as $prom)
                                        {
                                            ?>
                                            <div class="product-carousel-group">
                                                <div class="mirora-product">
                                                    <div class="product-img">
                                                        <img src="../../admin/views/images/<?php echo $prom['img'];?>" alt="Product" class="primary-image" />
                                                        <img src="../../admin/views/images/<?php echo $prom['img'];?>" alt="Product" class="secondary-image" />
                                                        <div class="product-img-overlay">
                                                            <span class="product-label discount">
                                                                <?php echo $prom['pourcentage']; ?>%
                                                            </span>
                                                            <a href="product-details.php?idd=<?php echo $key['id']; ?>" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Détails</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content text-center">
                                                        <span></span>
                                                        <h4><a href="product-details.html"><?php echo $prom['nom']; ?></a></h4>
                                                        <a href="nombredevues.php? nom=<?PHP echo $row['nom']; ?>"><i class="ti-plus"></i></a>
                                                        <div class="product-price-wrapper">
                                                            <span class="money"><?php echo $prom['prix']*(1-($prom['pourcentage']/100)); ?></span>
                                                            <span class="product-price-old">
                                                                <span class="money"><?php echo $prom['prix']; ?></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="mirora_product_action text-center position-absolute">
                                                        <p>
                                                          <?php echo $prom['descr']; ?>
                                                        </p>
                                                        <img src="eye-512" height="20" width="20"> <?php  echo $row['nbr_vue']; ?>
                                                        <div class="product-action">
                                                            <a class="add_cart cart-item action-cart" href="cart.php?addpp=<?php echo $key['id']; ?>" title="wishlist"><span>Ajouter au panier</span></a>
                                                        </div>
                                                    </div>

                                                </div>
                                                </div>
                                                                        <?php
                                        }
                                    ?>
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
                    <h5 class="banner__label"></h5>
                    <h2 class="banner__name"></h2>
                    <p class="banner__text mb--50 mb-md--20"></p>
                    <a href="shop.html" class="btn btn-bordered btn-style-1">Achetez maintenant</a>
                </div>
            </section>      

          

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
                                        <span class="promo__name">produit de luxe 2019</span>
                                        <span class="promo__price"></span>
                                        <span class="promo__link"></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="promo">
                                <a href="shop.html" class="promo__box promo__box-2">
                                    <img src="assets/img/banner/img2-bottom-mirora1.jpg" alt="Product Category">
                                    <span class="promo__content promo__content-2">
                                        <span class="promo__label"></span>
                                        <span class="promo__name"></span>
                                        <span class="promo__price"></span>
                                        <span class="promo__link"></span>
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