<!doctype html>
<html class="no-js" lang="zxx">
<?php
include 'menus.php';testConnexion(); 

include '../../config.php';
include "../entities/comment.php";
$idd=$_GET['idd'];
if (isset($_POST['description'])&&isset($_SESSION['idclient']))
{
    
    $c=new comment($_SESSION['idclient'],$_POST['description'],$idd);
    $c->ajouter();
}

$db=config::getConnexion();

$com=$db->prepare('select * from comment where idblog=:idd');
$com->bindValue(':idd',$idd);
$com->execute();


$query=$db->prepare('select * from blog where idblog=:idd');

$query->bindValue(':idd',$idd);
$query->execute();
$result=$query->fetch();

?>

<?php


?>


<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/blog-details-image.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:54:05 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/img/icon.png">

    <!-- Title -->
    <title>Mirora - Watch & Luxury Store Bootstrap 4 Template</title>

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

        

    <?php frontUp();
    if (isset($_POST['identifiant'])&&isset($_POST['email'])&&isset($_POST['motdepasse']))
    {
        if ($_POST['accounttype']=="per")
        {
            $e=new client($_POST['identifiant'],$_POST['email'],$_POST['motdepasse'],"","","",5575);
            if ($e->ajouter())
            {
                $panier=new panier($_POST['identifiant']);
                $panierC=new panierC();
                $panierC->ajouter($panier);
            }
        }   
        else
        {
            $s=new clientste($_POST['identifiant'],$_POST['email'],$_POST['motdepasse'],"","","",5575);
            $s->ajouter();
            if (!preg_match("/[a-zA-Z0-9]{4,22}(STE)$/",$_POST['identifiant']))
                $id=$_POST['identifiant'].'STE';
            $panier=new panier($id);
            $panierC=new panierC();
            $panierC->ajouter($panier);
        }
    }
    ?>
   
        <!-- Header Area Start -->
     
        <!-- Header Area End -->

        <!-- Breadcumb area Start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Blog Details</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><a href="blog-details-image.html">Image Blog Details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcumb area End -->

        <!-- Main Wrapper Start -->
        <div class="main-content-wrapper">
            <div class="single-post-area pt--40 pb--80 pt-md--30 pb-md--60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 order-lg-2 order-1 mb-md--30">
                            <div class="single-post-wrapper">
                                <article class="post post-details mb--30">
                                     <?php
                                             if ($result['type']=='Blog Image Post')

                                    {

                                        ?>

                                       
                                        <div class="post-media">
                                        <div class="image">

                                             <img src="../../admin/views/images/<?php echo $result['image']; ?>" alt="blog">
                                        </div>
                                    </div>

                                        <?php

                                    }

                                    elseif ($result['type']=='Blog Audio Post')

                                    {

                                        ?>

                                <div class="post-media">

                                            <div class="embed-responsive embed-responsive-16by9">

                                               

                                                 <audio

                                                            controls

                                                            src="../../admin/views/images/<?php echo $result['image']; ?>">

                                                                Your browser does not support the

                                                                <code>audio</code> element.

                                                        </audio>



                                            </div>

                                        </div>

                                        

                                        <?php

                                    }

                                    elseif ($result['type']=='Blog video Post')

                                    {

                                        ?>

                               
                               <div class="post-media">

                                            <div class="embed-responsive embed-responsive-16by9">

                                                <video controls src="../../admin/views/images/<?php echo $result['image']; ?>"></video>



                                            </div>

                                        </div>
                                        

                                        <?php

                                    }

                                      ?>
                                    

                                    <div class="post-info">
                                        <header class="entry-header">
                                            <div class="entry-meta">
                                                <span class="post-author">
                                                    <span class="post-by">Post By:</span>
                                                    admin
                                                </span>
                                                
                                                <span class="post-date"><?php echo $result['date'];?></span>
                                            </div>
                                            <h2 class="post-title"><?php echo $result['type'];?></h2>
                                        </header>
                                        <div class="post-content">
                                            <?php echo $result['description'];?>
                                        </div>
                                        
                                        <div class="social__sharing mb--30">
                                            <h3>SHARE THIS POST</h3>
                                            <ul class="social social-round">
                                                <li class="social__item">
                                                     <div id="mImageBox">
                                                       
                                                    <button id="my_image" alt="" src="../../admin/views/images/<?php echo $result['image']; ?>" class="social__link" onclick="fbs_click(this)"><i class="fa fa-facebook"></i></button>
                                                   </div>
                                                   
                                                  

                                             <script>
                                             function fbs_click(TheImg) {
                                                          var u='http://localhost/themust/front/views/blog-details.php?idd=123'
     // t=document.title;
                                                    var t=TheImg.getAttribute('alt');
                                              window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;
                                                      }
                                                     </script>
                                                </li>
                                                <li class="social__item">
                                                    <a href="twitter.com" class="social__link"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="pinterest.com" class="social__link"><i class="fa fa-pinterest"></i></a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="google.plus.com" class="social__link"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="linkedin.com" class="social__link"><i class="fa fa-linkedin"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                   
                                </article>
                                <div class="comment">
                                    <div class="comment-respond">
                                        <h3 class="comment-reply-title">LAISSER UN COMMENTAIRE</h3>
                                <?php
                               
                               foreach ($com as $pcom) {

                                   
                                          ?>
                               
                                    
                                        <ul class="comment-list">
                                            <li>
                                                <div class="single-comment">
                                                    <div class="comment-avatar">
                                                        <img src="assets/img/others/comment-1.jpg" alt="comment">
                                                    </div>
                                                    <div class="comment-info">
                                                        <div style="display: flex; justify-content: space-between;" class="comment-meta">
                                                            <div>
                                                                <h5 class="comment-author"><a href="#"> <?php echo $pcom['idclient']; ?></a></h5>
                                                                <span class="comment-date"><?php echo $pcom['date']; ?></span>
                                                            </div>
                                                            <?php
                                                           if (isset($_SESSION['idclient']))
                                                           {
                                                            if($_SESSION['idclient']==$pcom['idclient'])
                                                            {
                                                                ?>
                                                                <a style="color: gray;" class="delete" href="supprimer-comment.php?del=<?php echo $pcom['ID']; ?>&amp;t=<?php echo $pcom['idblog']; ?>"><i class="fa fa-times"></i></a>
                                                                <?php
                                                            }

                                                           }
                                                            ?>
                                                        </div>
                                                        <div class="comment-content">
                                                            <?php
                                                            $badwords = [ "/(hello)/", "/(fuck)/", "/(hell)/" ];
//"#\((\d+)\)#"
                                           $phrase = $pcom['description'];

                                                       echo preg_replace_callback(
                                                          $badwords,
                                                        function ($matches) {
                                                    return str_repeat('*', strlen($matches[0]));
                                              },
                                                   $phrase
                                                           );
                                                            ?>          
                                                               
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                

                                      <?php

                                    }

                                      ?>
                               
                                        <form class="form comment-form" method="post" action="blog-details.php?idd=<?php echo $_GET['idd']?>">
                                           
                                            <div class="form-row mb--20">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <label class="form__label" for="comment">Comment *</label>
                                                        <textarea name="description" id="description" class="form__input form__input--3 form__input--textarea"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row mb--20">
                                                <div class="col-md-4 mb-sm--20">
                                                   
                                            </div>
                                            <div class="form-row">
                                                <div class="col-12">
                                                    <button type="submit" class="form__submit">Post Comment</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 order-lg-1 order-2">
                            <aside class="blog-sidebar">
                                <!-- Search Widget Start -->
                               
                                <!-- Search Widget End -->

                                <!-- Archive Widget Start -->
                            
                                <!-- Archive Widget Start -->

                                <!-- Recent Post Widget Start -->
                               
                                <!-- Recent Post Widget End -->

                                <!-- Facebook Like Box Widget Start -->
                                
                                <!-- Facebook Like Box Widget End -->

                                <!-- Twitter Feed Widget Start -->
                               
                                <!-- Twitter Feed Widget End -->

                                <!-- Tags Widget Start -->
                                
                                <!-- Tags Widget End -->
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Wrapper End -->

        <!-- Footer Start -->
        <footer class="footer border-top ptb--40 ptb-md--30">
            <div class="container">
                <div class="row mb--40 mb-md--30">
                    <div class="col-lg-4 col-md-6 mb-md--30">
                        <div class="footer-widget">
                            <h3 class="widget-title">About Mirora</h3>
                            <div class="widget-content mb--20">
                                <p>Address: 123 Main Street, Anytown, <br> CA 12345 - USA.</p>
                                <p>Phone: (012) 800 456 789</p>
                                <p>Fax: (012) 800 456 789</p>
                                <p>Email: Contact@plazathemes.com</p>
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
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Gift Certificates</a></li>
                                <li><a href="#">Contact Us</a></li>
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
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <h3 class="widget-title">Custom Products</h3>
                            <div class="widget-product">
                                <div class="product">
                                    <div class="product-img">
                                        <img src="assets/img/products/11-450x450.jpg" alt="products">
                                    </div>
                                    <div class="product-content">
                                        <div class="product-rating">
                                            <span>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <h4 class="product-title">
                                            <a href="product-details.html" tabindex="0">Acer Aspire E 15</a>
                                        </h4>
                                        <div class="product-price-wrapper">
                                            <span class="money">$550.00</span>
                                            <span class="product-price-old">
                                                <span class="money">$700.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img">
                                        <img src="assets/img/products/11-450x450.jpg" alt="products">
                                    </div>
                                    <div class="product-content">
                                        <div class="product-rating">
                                            <span>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <h4 class="product-title">
                                            <a href="product-details.html" tabindex="0">Acer Aspire E 15</a>
                                        </h4>
                                        <div class="product-price-wrapper">
                                            <span class="money">$550.00</span>
                                            <span class="product-price-old">
                                                <span class="money">$700.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb--40 mb-md--30">
                    <div class="col-12">
                        <ul class="footer-menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Online Store</a></li>
                            <li><a href="#">Promotion</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms Of Use</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Contacts</a></li>
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
                                <h3 class="product-title">Acer Aspire E 15</h3>
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
                                    <span class="regular-price">$100.50</span>
                                    <span class="sale-price">$98.98</span>
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
                                            Add To Cart
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


<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/blog-details-image.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:54:10 GMT -->
</html>