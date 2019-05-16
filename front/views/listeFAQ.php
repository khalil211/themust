<?php
include "../../admin/entities/faq.php";
include 'menus.php';

testConnexion();
$db=config::getConnexion();

	$result=$db->query('SELECT * FROM faq');
$x=0;
?>
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:54:11 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/img/icon.png">

    <!-- Title -->
    <title>FAQ</title>

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
    <!-- Main Wrapper Start -->
    <div class="wrapper bg--shaft">
        <!-- Breadcumb area Start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">FAQ</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.php">Accueil</a></li>
                            <li class="current"><a href="listeFAQ.php">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcumb area End -->

        <!-- Main Content Wrapper Start -->
        <div class="main-content-wrapper">
            <div class="faq-area pt--40 pb--70 pt-md--30 pb-md--50">
                <div class="container">
                    <div class="row pb--40">
                        <div class="col-12">
                            <div class="faq-heading">
                                <h2 class="mb--20">Voici les questions fréquemment posées, vous pouvez trouver la réponse vous-même</h2>
                                
                            </div>
                        </div>
                    </div>
					
                    <div class="row">
                        <div class="col-12">
                            <div id="accordion" class="accordion">
							 <?php while ($row = $result->fetch()) { 
							
                                    ?>
									<div class="card accordion__single">
	                                    <div class="card-header accordion__header" id="headingNine">
	                                        <a class="btn btn-link accordion__link collapsed" data-toggle="collapse" data-target="#c<?php echo $row['id']; ?>" aria-expanded="true" aria-controls="collapseNine">
	                                          <?php echo $row['question']; ?>
	                                        </a>
	                                    </div>
	                                    <div id="c<?php echo $row['id']; ?>" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
	                                        <div class="card-body accordion__body">
	                                            <?php echo $row['reponse']; ?>
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
        <!-- Main Content Wrapper Start -->


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
    <?php frontDown(); ?>

</body>


<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:54:11 GMT -->
</html>