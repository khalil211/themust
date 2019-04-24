<?php
include 'menus.php';
testConnexion();
include '../../config.php';

$db=config::getConnexion();

		$produitparpage=5;
		$produittotalreq=$db->query('select id from produit ');
		$produittotal= $produittotalreq->rowCount();
		$pagestotales=ceil($produittotal/$produitparpage);

if( isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0)
{
	$_GET['page']=intval($_GET['page']);
	$pagecourante=$_GET['page'];
}
else
{
	$pagecourante=1;
}

$var=isset(($_GET['tri']));


$depart=($pagecourante-1)*$produitparpage;

if ($var){
$choix=$_GET['tri'];}
if ($var==false){
$result=$db->query('SELECT * FROM produit LIMIT '.$depart.','.$produitparpage);
}

elseif ( $choix == "prix1")  {
	
	$result=$db->query('select * from produit order by prix desc');
	}
elseif ($choix== "prix2")
{
	$result=$db->query('select * from produit order by prix asc');
}
elseif ($choix=="nom1") {
	$result=$db->query('SELECT * FROM produit ORDER BY nom DESC');
}
elseif ($choix=="nom2") {
	$result=$db->query('SELECT * FROM produit ORDER BY nom ASC');
}

	
$res=$db->query('select * from categorie');
?>
<?php
if (isset($_GET['del'])) {
    $ID = $_GET['del'];
 $omp=$db->query("UPDATE publicite SET nb_vues=nb_vues+1  WHERE `publicite`.`ID`='$ID'    ");
header('location: shop.php');

}  ?>

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
                                          <div class="product-short">
                                        	<form action ="shop.php" method = "GET">
                                            <label class="select-label">Trier </label>
                                            <select class="short-select nice-select" name="tri">
                                                <option value="1">Choix</option>    
                                                <option value="nom1">Nom de Z à A</option>
                                                <option value="nom2">Nom de A à Z</option>
                                                <option value="prix1">Prix descendant</option>
                                                <option value="prix2">Prix ascendant</option>

                                           </select>  
                                              <button type="submit" class="form__submit" >Ok</button>                                     
                                        </form>                                        	
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
                                            <img src="../../admin/views/images/<?php echo ''.$key['img'];?>" alt="Product" class="primary-image" />
                                            <img src="../../admin/views/images/<?php echo $key['img'];?>" alt="Product" class="secondary-image" />
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    %
                                                </span>

                                                <a href="product-details.php?idd=<?php echo $key['id']; ?>" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Détails</a>

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
                                              
                                                <a class="add_cart cart-item action-cart" href="cart.php?addpp=<?php echo $key['id']; ?>" title="wishlist"><span>Ajouter au panier</span></a> </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            <?php } ?>
                            </div>

                            <!-- Main Shop wrapper End -->

                            <!-- Pagination Start -->
                            <div class="pagination-wrap mt--15 mt-md--10">

                                
                                <?php 
                                for ($i=1;$i<$pagestotales;$i++)
                                {?>
  									<ul class="pagination">
                                 <!-- echo ' <a href="shop.php?page='.$i.'">'.$i.'</a>' ; -->
                                  <li> 
                                  	<?php 
                                  	echo ' <a href="shop.php?page='.$i.'">'.$i.'</a>' ;
                                  	?>
                                  </li>
                                 <?php
                                }
                                ?>

                            </div>
                            <!-- Pagination End -->
                        </div>
                        <div class="col-lg-3 order-lg-1">
                            <aside class="shop-sidebar">
                                <div class="search-filter">

                                    <div class="filter-price">
                                        <h3 class="filter-heading">Prix</h3>
                                        <ul class="filter-list">
                                            <li>
                                                <div class="filter-input filter-radio">
                                                    <input type="radio" name="pricerange" id="pricerange-1" checked>
                                                    <label for="pricerange-1">entre (200) prix (300)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-radio">
                                                    <input type="radio" name="pricerange" id="pricerange-2">
                                                    <label for="pricerange-2">entre (300) prix (600)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-radio">
                                                    <input type="radio" name="pricerange" id="pricerange-3">
                                                    <label for="pricerange-3">Plus de (600)</label>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <div  class="product-action-bottom">
                                         <div class="filter-input filter-radio">
                                        <h3 class="filter-heading">Catégories</h3>
                                        <?php while ($row = $res->fetch()) { 
                                    ?>
                                        <ul>
                                           <li> <i class="fa fa-cube"></i>  <a style="font-size: 18px; color: #959696; " class="filter-input filter-radio" 
                                            href="afficher-categorie.php?idd=<?php echo $row['id_cat']; ?>"" ><?php echo $row['nom_cat'];?> </a>
                                        </li>
        
                                </ul>
                            <?php } ?> 
                            </div>                                           
                                           
                                        </ul>
                                    </div>
                               

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
