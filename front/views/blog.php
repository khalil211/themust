<?php
include "../../admin/entities/blog.php";
?>
<?php 

include "../../config.php";

$db=config::getConnexion();

if (isset($_GET['r']))

    $result=$db->query('SELECT * FROM blog where type LIKE \'%'.$_GET['r'].'%\'');

else
$result=$db->query('SELECT * FROM blog order by idblog desc');
$archiv=$db->query('SELECT * FROM blog order by date  limit 5');

$I=0;
    



 


include 'menus.php';testConnexion(); 

?>

<!DOCTYPE html>

<html class="no-js" lang="zxx">


<!DOCTYPE html>

<html class="no-js" lang="zxx">

<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2019 12:42:06 GMT -->

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





        <?php frontUp(); ?>

        <!-- Breadcumb area Start -->

        <div class="breadcrumb-area">

            <div class="container">

                <div class="row">

                    <div class="col-12 text-center">

                        <h1 class="page-title">Blog</h1>

                        <ul class="breadcrumb justify-content-center">

                            <li><a href="index.php">Accueil</a></li>

                            <li class="current"><a href="blog.php">Blog</a></li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

        <!-- Breadcumb area End -->



        <!-- Main Wrapper Start -->

        <div class="main-content-wrapper">

            <div class="blog-area pt--40 pb--80 pt-md--30 pb-md--60">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-9 order-lg-2 order-1 mb-md--30">

                            <div class="row">

                                <?php

                                  foreach ($result as $pblog) {

                                    if ($pblog['type']=='Blog Image Post')

                                    {

                                        ?>

                                        <div class="col-lg-6 mb--30">

                                            <article class="post sticky single-post format-image">

                                                <div class="post-media">

                                                    <div class="image">

                                                        <a href="blog-details-image.html">

                                                            <img src="../../admin/views/images/<?php echo $pblog['image']; ?>" alt="blog">

                                                        </a>

                                                    </div>

                                                </div>

                                        

                                        <?php

                                    }

                                    elseif ($pblog['type']=='Blog Audio Post')

                                    {

                                        ?>

                                <div class="col-lg-6 mb--30">

                                    <article class="post single-post format-audio">

                                        <div class="post-media">

                                            <div class="embed-responsive embed-responsive-16by9">

                                               

                                                 <audio

                                                            controls

                                                            src="../../admin/views/images/<?php echo $pblog['image']; ?>">

                                                                Your browser does not support the

                                                                <code>audio</code> element.

                                                        </audio>



                                            </div>

                                        </div>

                                        

                                        <?php

                                    }

                                    elseif ($pblog['type']=='Blog video Post')

                                    {

                                        ?>

                                <div class="col-lg-6 mb--30">

                                    <article class="post single-post format-video">

                                        <div class="post-media">

                                            <div class="embed-responsive embed-responsive-16by9">

                                                <video controls src="../../admin/views/images/<?php echo $pblog['image']; ?>"></video>



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

                                                            

                                                            <span class="post-date"><?php echo $pblog['date']; ?></span>

                                                        </div>

                                                        <h2 class="post-title"><?php echo $pblog['titre']; ?></a></h2>

                                                    </header>

                                                    <div class="post-content">

                                                        <p><?php echo $pblog['description']; ?></p>

                                                    </div>

                                                    <a href="blog-details.php?idd=<?php echo $pblog['idblog']; ?>" class="btn btn-read-more btn-style-2">Continuer a lire</a>

                                                </div>

                                            </article>

                                        </div>

                                      <?php

                                  }



                                ?>

                            </div>

                           
                        </div>

                        <div class="col-lg-3 order-lg-1 order-2">

                            <aside class="blog-sidebar">

                                <!-- Search Widget Start -->

                                <div class="sidebar-widget search-widget">

                                    <h3 class="widget-title">Chercher</h3>

                                    <div class="widget_conent">

                                        

                                            <input <?php if (isset($_GET['r']))echo 'value="'.$_GET['r'].'"'; ?> type="search" class="searchform__input"   id="recherche" placeholder="Chercher...">

                                         
                                        

                                    </div>

                                </div>

                                <!-- Search Widget End -->



                                <!-- Archive Widget Start -->

                                <div class="sidebar-widget archive-widget">

                                    <h3 class="widget-title">Blog Archives</h3>

                                    <div class="widget_conent">

                                        <ul>
                                             <?php

                                  foreach ($archiv as $ar) {

                                

                                        ?>

                                       <li><a href="blog-details.php?idd=<?php echo $ar['idblog']; ?>"><?php echo $ar['titre'] ?></a> <span>(<?php echo $I+1 ?>)</span></li>

                                        

                                        <?php
                                    }
                                        ?>

                                            

                                            

                                        </ul>

                                    </div>

                                </div>

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

        <?php frontDown(); ?>

         <script type="text/javascript">

    let recherche=document.getElementById("recherche");

        recherche.addEventListener("keydown",function (e)

        {

            if (e.keyCode==13)

                document.location="blog.php?r="+recherche.value;

            e.stopPropagation(); 

        });

    </script>



</body>





<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2019 12:42:16 GMT -->

</html>