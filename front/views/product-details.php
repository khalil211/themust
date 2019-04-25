<?php
include '../../config.php';
include 'menus.php';
testConnexion();
$db=config::getConnexion();
$idd=$_GET['idd'];
$query=$db->prepare('select * from produit p inner join categorie c where p.categorie = c.id_cat and id=:idd');
$query->bindValue(':idd',$idd);
$query->execute();
$result=$query->fetch();

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
    <script type ="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


    <!-- Main Wrapper Start -->
    <?php frontUP(); ?>
        <!-- Header Area End -->

        <!-- Breadcumb area Start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Détails du produit</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.php">Acceuil</a></li>
                            <li><a href="shop.php">Achats</a></li>
                            <li class="current"><a href="product-details.php">Détails du produit</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcumb area End -->

        <!-- Main Content Wrapper Start -->
        <div class="main-content-wrapper">
            <div class="single-products-area section-padding section-md-padding">
                <div class="container">
                    <!-- Single Product Start -->
                    <section class="mirora-single-product pb--80 pb-md--60">
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Tab Content Start -->
                                <div class="tab-content product-details-thumb-large" id="myTabContent-3">
                                    <div class="tab-pane fade show active" id="product-large-one">
                                        <div class="product-details-img easyzoom">
                                            <a class="popup-btn" href="../../admin/views/images/<?php echo $result['img'];?>">
                                                <img src="../../admin/views/images/<?php echo $result['img'];?>" alt="product">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="product-large-two">
                                        <div class="product-details-img easyzoom">
                                            <a class="popup-btn" href="../../admin/views/images/<?php echo $result['img'];?>">
                                                <img src="../../admin/views/images/<?php echo $result['img'];?>" alt="product">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="product-large-three">
                                        <div class="product-details-img easyzoom">
                                        
                                                <img src="../../admin/views/images/<?php echo $result['img'];?>" alt="product">
                                               
                                            
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="product-large-four" >
                                        <div class="product-details-img easyzoom" >
                                           
                                                <img src="../../admin/views/images/<?php echo $result['img'];?>" alt="product" >
                                        
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="product-large-five">
                                        <div class="product-details-img easyzoom">
                                          
                                                <img src="../../admin/views/images/<?php echo $result['img'];?>" alt="product">
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab Content End -->
                                
                                <!-- Product Thumbnail Carousel Start -->

                                <!-- Product Thumbnail Carousel End -->
                            </div>
                             
                            <div class="col-lg-6">
                                <!-- Single Product Content Start -->
                                <div class="product-details-content"> 
                                    <div class="product-details-top">
                                        <h2 class="product-details-name" ><?php echo $result['nom'];?></h2>
                                        <div class="ratings-wrap">
                                         <label class="form__label d-block" >Notation</label>
                                         <br>

<!--                                                    <div class="rating">
                                                        <input type="radio" id="5" name="rating" value="5" />
                                                        <label class = "full" for="5" title="Awesome - 5 stars">  
                                                        </label>
                                                       
                                                        <input type="radio" id="4" name="rating" value="4" />
                                                        <label class = "full" for="4" title="Pretty good - 4 stars"> 
                                                        </label>
                                                        
                                                        <input type="radio" id="3" name="rating" value="3" />
                                                        <label class = "full" for="3" title="Meh - 3 stars">    
                                                        </label>
                                                        
                                                        <input type="radio" id="2" name="rating" value="2" />
                                                        <label class = "full" for="2" title="Kinda bad - 2 stars">    
                                                        </label>
                                                       
                                                        <input type="radio" id="1" name="rating" value="1" />
                                                        <label class = "full" for="1" title="Sucks big time - 1 star">    
                                                        </label>
                                                        
                                                    </div>-->

                                                    
                                         
                                        </div>
                                        <ul class="product-details-list list-unstyled">
                                            <li> <div class="product-price-wrapper">
                                            <span class="money" style="font-size: 18px;"> <?php echo $result['prix'];?> DT</span>
                                            
                                        </div></li>
                                          
                                            <li>
                                                   <span class="product-price-old">
                                                <span class="money" style="font-size: 18px;">Quantité <?php echo $result['quantite'];?></span> <br>
                                            </span>
                                            <br>
                                               <?php 
                                               
                                        $id=$result['id'];
                                        $likes=$db->prepare('SELECT id FROM likes WHERE id_produit=?');
                                        $likes->execute(array($id));
                                        $likes=$likes->rowCount();

                                        $dislikes=$db->prepare('SELECT id FROM dislikes WHERE id_produit=?');
                                        $dislikes->execute(array($id));
                                        $dislikes=$dislikes->rowCount();
                                    ?> 
                                                <span  style="font-size: 18px;"> <i class="fa fa-thumbs-up" style="width: 30px; height: 30px;"></i><a href="action.php?t=1&id=<?= $result['id'] ?>">Like </a> <?php echo $likes ;?></span> 
                                                <br>
                                                  <span style="font-size: 18px;"> <i class="fa fa-thumbs-down" style="width: 30px; height: 30px;"></i><a href="action.php?t=2&id=<?= $result['id'] ?>">Dislikes </a> <?php echo $dislikes; ?></span>
                                                </div></li>
                                                <span class="product-price-old">

                                        <li><span class="money" style="font-size: 18px;">Catégorie<br> <?php echo $result['nom_cat'];?></span></li>
                                           
                                        </ul>
                                        <br>
   
<?php if (isset($_SESSION['idclient'])){?>
                                            <label class="product-options mb--20">
          <label class="control-label"><span>Noter le produit</span></label>
                    <form  method="POST" action="noterProduit.php" name="formName">
                      <input type="number" name="NOTER"  required pattern='[0-5]{0,5}'>
                      <input type="hidden" name="refe" value="<?php echo $id;?>">
                    </div>
                    </form>
        <a href="noterProduit.php?refe=<?php echo $id;?>" > <button type="submit" class="form__submit"><span class=" "></span> NOTER</button></a> 

                     
                    </div> 
                 <?php }  ?>                                 
                                    </div> 
                                 

                                    <div class="product-details-bottom">

                                        <div class="product-details-action-wrapper mb--20">
                                                                                </div>  
                                   </div>       
                                </div>
                                <!-- Single Product Content End -->
                            </div>
                        </div>
                    </section>
                    <!-- Single Product End -->  

                    <!-- Single Product Tab Start -->
                    <section class="product-details-tab bg--dark-4 ptb--80 ptb-md--60">
                        <div class="row">
                            <div class="col-12">
                                <ul class="product-details-tab-head nav nav-tab" id="singleProductTab" role="tablist">
                                    <li class="nav-item product-details-tab-item">
                                        <a class="nav-link product-details-tab-link active" id="nav-desc-tab" data-toggle="tab" href="#nav-desc" role="tab" aria-controls="nav-desc" aria-selected="true">Description</a>
                                    </li>

                                </ul>
                                <div class="product-details-tab-content tab-content">
                                    <div class="tab-pane fade show active" id="nav-desc" role="tabpanel" aria-labelledby="nav-desc-tab">
                                        <p class="product-details-description">
                                                <?php 
                                                     echo $result['descr'];
                                                ?>

                                        </p>
                                      
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="nav-details" aria-labelledby="nav-details-tab">
                                        <div class="product-details-additional-info">
                                            <h3>Additional Information</h3>
                                            <div class="table-content table-responsive">
                                                <table class="shop_attributes">
                                                    <tr>
                                                        <th>Color: </th>
                                                        <td><p>Black, Blue, Gold</p></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Size: </th>
                                                        <td><p>XXL, XL, L, M</p></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="nav-review" aria-labelledby="nav-review-tab">
                                        <div class="product-details-review-wrap">
                                            <h2 class="mb--20">2 REVIEWS FOR ALIQUAM LOBORTIS</h2>
                                            <div class="review mb--40">
                                                <div class="review__single">
                                                    <div class="review__meta">
                                                        <p class="review__author">HasTech</p>
                                                        <p class="review__date">October 12, 2014</p>
                                                    </div>
                                                    <div class="review__content">
                                                        <p class="review__text">
                                                            It’s both good and bad. If Nikon had achieved a high-quality wide lens camera with a 1 inch sensor, that would have been a very competitive product. So in that sense, it’s good for us. But actually, from the perspective of driving the 1 inch sensor market, we want to stimulate this market and that means multiple manufacturers.
                                                        </p>
                                                        <div class="ratings">
                                                            <i class="fa fa-star rated"></i>
                                                            <i class="fa fa-star rated"></i>
                                                            <i class="fa fa-star rated"></i>
                                                            <i class="fa fa-star rated"></i>
                                                            <i class="fa fa-star rated"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review__single">
                                                    <div class="review__meta">
                                                        <p class="review__author">HasTech</p>
                                                        <p class="review__date">October 12, 2014</p>
                                                    </div>
                                                    <div class="review__content">
                                                        <p class="review__text">
                                                            It’s both good and bad. If Nikon had achieved a high-quality wide lens camera with a 1 inch sensor, that would have been a very competitive product. So in that sense, it’s good for us. But actually, from the perspective of driving the 1 inch sensor market, we want to stimulate this market and that means multiple manufacturers.
                                                        </p>
                                                        <div class="ratings">
                                                            <i class="fa fa-star rated"></i>
                                                            <i class="fa fa-star rated"></i>
                                                            <i class="fa fa-star rated"></i>
                                                            <i class="fa fa-star rated"></i>
                                                            <i class="fa fa-star rated"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h2 class="mb--20">Add a Review</h2>
                                            <form class="form form--review">
                                                <div class="form__group clearfix mb--20">
                                                    <label class="form__label d-block" >Your Ratings</label>
                                                    <div class="rating">
                                                        <input type="radio" id="star5" name="rating" value="5" />
                                                        <label class = "full" for="star5" title="Awesome - 5 stars">  
                                                        </label>
                                                        <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                                        <label class="half" for="star4half" title="Pretty good - 4.5 stars">
                                                        </label>
                                                        <input type="radio" id="star4" name="rating" value="4" />
                                                        <label class = "full" for="star4" title="Pretty good - 4 stars"> 
                                                        </label>
                                                        <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                                        <label class="half" for="star3half" title="Meh - 3.5 stars">  
                                                        </label>
                                                        <input type="radio" id="star3" name="rating" value="3" />
                                                        <label class = "full" for="star3" title="Meh - 3 stars">    
                                                        </label>
                                                        <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                                        <label class="half" for="star2half" title="Kinda bad - 2.5 stars">    
                                                        </label>
                                                        <input type="radio" id="star2" name="rating" value="2" />
                                                        <label class = "full" for="star2" title="Kinda bad - 2 stars">    
                                                        </label>
                                                        <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                                        <label class="half" for="star1half" title="Meh - 1.5 stars">    
                                                        </label>
                                                        <input type="radio" id="star1" name="rating" value="1" />
                                                        <label class = "full" for="star1" title="Sucks big time - 1 star">    
                                                        </label>
                                                        <input type="radio" id="starhalf" name="rating" value="half" />
                                                        <label class="half" for="starhalf" title="Sucks big time - 0.5 stars">    
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form__group clearfix mb--20">
                                                    <label class="form__label d-block" for="review_name">Name <sup>*</sup></label>
                                                    <input id="review_name" name="review_name" class="form__input">
                                                </div>
                                                <div class="form__group clearfix mb--20">
                                                    <label class="form__label d-block" for="review_email">Email <sup>*</sup></label>
                                                    <input id="review_email" name="review_email" class="form__input">
                                                </div>
                                                <div class="form__group clearfix mb--20">
                                                    <label class="form__label d-block" for="review">Your Review <sup>*</sup></label>
                                                    <textarea id="review" name="review" class="form__input form__input--textarea"></textarea>
                                                    <div class="help-block">
                                                        <span>Note: </span>
                                                        HTML is not translated!
                                                    </div>
                                                </div>
                                                <div class="form__group text-right">
                                                    <button type="submit" class="btn btn-medium btn-style-1">Continue</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Single Product Tab End -->

                    <!-- Related Product Start -->
              <section class="related-products-area pt--80 pb--20 pb-md--15 pt-md--60">
                        <div class="row">
                            <div class="col-12 mb--20">
                                <div class="section-title">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="product-carousel nav-top js-product-carousel-2">
                                <div class="mirora-product">
                                    <div class="product-img">
                                           
                                            </span>
                                            
                                        </div>
                                    </div>
<!--                                 <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                        <div class="product-price-wrapper">
                                            <span class="money">$550.00</span>
                                            <span class="product-price-old">
                                                <span class="money">$700.00</span>
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
                                          It is a long established fact that a reader will be distracted by the readable content...
                                        </p>
                                        <div class="product-action">
                                            <a class="same-action" href="wishlist.html" title="wishlist">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
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
                                                -7%
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                        <div class="product-price-wrapper">
                                            <span class="money">$550.00</span>
                                            <span class="product-price-old">
                                                <span class="money">$700.00</span>
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
                                          It is a long established fact that a reader will be distracted by the readable content...
                                        </p>
                                        <div class="product-action">
                                            <a class="same-action" href="wishlist.html" title="wishlist">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
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
                                                -7%
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                        <div class="product-price-wrapper">
                                            <span class="money">$550.00</span>
                                            <span class="product-price-old">
                                                <span class="money">$700.00</span>
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
                                          It is a long established fact that a reader will be distracted by the readable content...
                                        </p>
                                        <div class="product-action">
                                            <a class="same-action" href="wishlist.html" title="wishlist">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
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
                                                -7%
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                        <div class="product-price-wrapper">
                                            <span class="money">$550.00</span>
                                            <span class="product-price-old">
                                                <span class="money">$700.00</span>
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
                                          It is a long established fact that a reader will be distracted by the readable content...
                                        </p>
                                        <div class="product-action">
                                            <a class="same-action" href="wishlist.html" title="wishlist">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
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
                                                -7%
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                        <div class="product-price-wrapper">
                                            <span class="money">$550.00</span>
                                            <span class="product-price-old">
                                                <span class="money">$700.00</span>
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
                                          It is a long established fact that a reader will be distracted by the readable content...
                                        </p>
                                        <div class="product-action">
                                            <a class="same-action" href="wishlist.html" title="wishlist">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
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
                                                -7%
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                        <div class="product-price-wrapper">
                                            <span class="money">$550.00</span>
                                            <span class="product-price-old">
                                                <span class="money">$700.00</span>
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
                                          It is a long established fact that a reader will be distracted by the readable content...
                                        </p>
                                        <div class="product-action">
                                            <a class="same-action" href="wishlist.html" title="wishlist">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
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
                                                -7%
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                        <div class="product-price-wrapper">
                                            <span class="money">$550.00</span>
                                            <span class="product-price-old">
                                                <span class="money">$700.00</span>
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
                                          It is a long established fact that a reader will be distracted by the readable content...
                                        </p>
                                        <div class="product-action">
                                            <a class="same-action" href="wishlist.html" title="wishlist">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>-->
                                      
                                
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Related Product End -->
             
        <!-- Main Content Wrapper End -->


        <!-- Footer Start -->
                <?php frontDown(); ?>


</body>


<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:53:21 GMT -->
</html>