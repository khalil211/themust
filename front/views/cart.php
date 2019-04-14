<?php
include 'menus.php';
testConnexion();
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/img/icon.png">

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

    <?php 
    include '../../config.php';
    frontUp();
    ?>
        <!-- Breadcumb area Start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Panier</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.php">Accueil</a></li>
                            <li class="current"><a href="cart.php">Panier</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcumb area End -->

        <!-- Main content wrapper start -->

        <div class="main-content-wrapper">
            <div class="cart-area pt--40 pb--80 pt-md--30 pb-md--60">
                <div class="container">
                    <div class="cart-wrapper bg--2 mb--80 mb-md--60">
                        <div class="row">
                            <div class="col-12">
                                <!-- Cart Area Start -->
                                <form action="../core/modifier-panier.php" method="post" id="formp" class="form cart-form">
                                    <div class="cart-table table-content table-responsive">
                                        <table class="table mb--30">
                                            <thead>
                                                <tr>
                                                    <th>Supprimer</th>
                                                    <th>Image</th>
                                                    <th>Produit</th>
                                                    <th>Prix unitaire</th>
                                                    <th>Quantite</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $panier=new panier(0);
                                                $panierC=new panierC;
                                                if (isset($_SESSION['idclient']))
                                                {
                                                    $panier->setId($_SESSION['idclient']);
                                                    $panier=$panierC->afficher($panier);
                                                }
                                                $produits=$panier->getProduits();
                                                foreach($produits as $p)
                                                {
                                                    ?>
                                                    <tr>
                                                        <td><a class="delete" href="cart.php?delpp=<?php echo $p->getIdProduit(); ?>"><i class="fa fa-times"></i></a></td>
                                                        <td>
                                                            <a href="product-details.html">
                                                                <img src="../../admin/views/images/<?php echo $p->getImage();?>" alt="product">
                                                            </a>
                                                        </td>
                                                        <td class="wide-column">
                                                            <h3><a href="product-details.php?idd=<?php echo $p->getIdProduit(); ?>"><?php echo $p->getNom(); ?></a></h3>
                                                        </td>
                                                        <td class="cart-product-price"><strong><?php echo $p->getPrixUnitaire(); ?></strong></td>
                                                        <td>
                                                            <div class="quantity">
                                                                <input type="number" class="quantity-input" name="<?php echo $p->getIdProduit(); ?>" value="<?php echo $p->getQuantite(); ?>">
                                                            </div>
                                                        </td>
                                                        <td class="cart-product-price"><strong><?php echo $p->getPrixUnitaire()*$p->getQuantite(); ?></strong></td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 text-md-right">
                                            <div class="cart-btn-group">
                                                <button type="submit" class="btn btn-medium btn-style-3">Mettre à jour</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- Cart Area End --> 
                            </div>
                        </div>
                    </div>
                    <div class="cart-page-total-wrapper">
                        <div class="row justify-content-end">
                            <div class="col-xl-6 col-lg-8 col-md-10">
                                <div class="cart-page-total bg--dark-3">
                                    <h2>Total commande</h2>
                                    <div class="cart-calculator-table table-content table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr class="cart-total">
                                                    <th>TOTAL</th>
                                                    <td><span class="price-ammount"><?php echo $panier->getPrixTotal(); ?></span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <a href="../core/passer-commande.php" class="btn btn-medium btn-style-3">Passer la commande</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
        <?php frontDown(); ?>
</body>


<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:53:21 GMT -->
</html>