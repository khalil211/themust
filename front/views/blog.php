<<<<<<< HEAD
<<<<<<< HEAD

<?php

include "../../../../../admin/entities/blog.php";


?>
=======



=======
>>>>>>> 6b0d05f8c55ee0a3e7503f34bd6830290d855e04
<?php 

include "../../../../../config.php";

$db=config::getConnexion();



    $result=$db->query('SELECT * FROM blog');


include 'menus.php';testConnexion(); 

?>

<!DOCTYPE html>

<html class="no-js" lang="zxx">

>>>>>>> fb56ce6c21f4e2cb8e46b0fdaa05737965247fd4
=======
include "../../../../../admin/entities/blog.php";
include 'menus.php';testConnexion(); 
>>>>>>> 6b0d05f8c55ee0a3e7503f34bd6830290d855e04




?>

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

                                                            <img src="../../../../../admin/images/<?php echo $pblog['image']; ?>" alt="blog">

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

                                                            src="../../../../../admin/images/<?php echo $pblog['image']; ?>">

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

                                                <video controls src="../../../../../admin/images/<?php echo $pblog['image']; ?>"></video>



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

                                                        <h2 class="post-title"><a href="blog-details-image.html">Blog Image Post</a></h2>

                                                    </header>

                                                    <div class="post-content">

                                                        <p><?php echo $pblog['description']; ?></p>

                                                    </div>

                                                    <a href="blog-details-image.html" class="btn btn-read-more btn-style-2">Continue Reading</a>

                                                </div>

                                            </article>

                                        </div>

                                      <?php

                                  }



                                ?>

                            </div>

                            <div class="row">

                                <div class="col-12">

                                    <div class="pagination-wrap">

                                        <p class="page-ammount">Showing 1 to 8 of 15 (2 Pages)</p>

                                        <ul class="pagination">

                                            <li><a href="#" class="first">|&lt;</a></li>

                                            <li><a href="#" class="prev">&lt;</a></li>

                                            <li><a href="#" class="current">1</a></li>

                                            <li><a href="#">2</a></li>

                                            <li><a href="#" class="next">&gt;</a></li>

                                            <li><a href="#" class="next">&gt;|</a></li>

                                        </ul>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-3 order-lg-1 order-2">

                            <aside class="blog-sidebar">

                                <!-- Search Widget Start -->

                                <div class="sidebar-widget search-widget">

                                    <h3 class="widget-title">Search</h3>

                                    <div class="widget_conent">

                                        <form action="#" class="searchform">

                                            <input type="text" class="searchform__input" name="search" id="blog_search" placeholder="Search...">

                                            <button class="searchform__submit"><i class="fa fa-search"></i></button>

                                        </form>

                                    </div>

                                </div>

                                <!-- Search Widget End -->



                                <!-- Archive Widget Start -->

                                <div class="sidebar-widget archive-widget">

                                    <h3 class="widget-title">Blog Archives</h3>

                                    <div class="widget_conent">

                                        <ul>

                                            <li><a href="single-blog.html">March 2015</a> <span>(1)</span></li>

                                            <li><a href="single-blog.html">April 2015</a> <span>(5)</span></li>

                                            <li><a href="single-blog.html">May 2015</a> <span>(7)</span></li>

                                            <li><a href="single-blog.html">June 2015</a> <span>(10)</span></li>

                                            <li><a href="single-blog.html">July 2015</a> <span>(15)</span></li>

                                            <li><a href="single-blog.html">August 2015</a> <span>(10)</span></li>

                                            <li><a href="single-blog.html">September 2015</a> <span>(8)</span></li>

                                        </ul>

                                    </div>

                                </div>

                                <!-- Archive Widget Start -->



                                <!-- Recent Post Widget Start -->

                                <div class="sidebar-widget recent-post-widget">

                                    <h3 class="widget-title">Recent Posts</h3>

                                    <div class="widget_conent">

                                        <div class="recent-post-single">

                                            <div class="recent-post-media">

                                                <div class="image">

                                                    <img src="assets/img/blog/post4-370x230.jpg" alt="Blog">

                                                </div>

                                            </div>

                                            <div class="recent-post-content">

                                                <h4><a href="single-blog.html">Gravida luctus lorem accumsan est massa mauris.</a></h4>

                                                <p><a href="single-blog.html">26-10-18</a></p>

                                            </div>

                                        </div>

                                        <div class="recent-post-single">

                                            <div class="recent-post-media">

                                                <div class="image">

                                                    <img src="assets/img/blog/post3-370x230.jpg" alt="Blog">

                                                </div>

                                            </div>

                                            <div class="recent-post-content">

                                                <h4><a href="single-blog.html">Gravida luctus lorem accumsan est massa mauris.</a></h4>

                                                <p><a href="single-blog.html">27-10-18</a></p>

                                            </div>

                                        </div>

                                        <div class="recent-post-single">

                                            <div class="recent-post-media">

                                                <div class="image">

                                                    <img src="assets/img/blog/post2-370x230.jpg" alt="Blog">

                                                </div>

                                            </div>

                                            <div class="recent-post-content">

                                                <h4><a href="single-blog.html">Gravida luctus lorem accumsan est massa mauris.</a></h4>

                                                <p><a href="single-blog.html">28-10-18</a></p>

                                            </div>

                                        </div>

                                        <div class="recent-post-single">

                                            <div class="recent-post-media">

                                                <div class="image">

                                                    <img src="assets/img/blog/post1-370x230.jpg" alt="Blog">

                                                </div>

                                            </div>

                                            <div class="recent-post-content">

                                                <h4><a href="single-blog.html">Gravida luctus lorem accumsan est massa mauris.</a></h4>

                                                <p><a href="single-blog.html">26-10-18</a></p>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <!-- Recent Post Widget End -->



                                <!-- Facebook Like Box Widget Start -->

                                <div class="sidebar-widget widget_fb_like_box">

                                    <h3 class="widget-title">Facebook Like Box</h3>

                                    <div class="fb-page">

                                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fhastech.company%2F&amp;tabs=timeline&amp;width=340&amp;height=500&amp;small_header=false&amp;adapt_container_width=false&amp;hide_cover=false&amp;show_facepile=true&amp;appId" height="280" style="border:none;overflow:hidden"></iframe>

                                    </div>

                                </div>

                                <!-- Facebook Like Box Widget End -->



                                <!-- Twitter Feed Widget Start -->

                                <div class="sidebar-widget twitter-feed-widget">

                                    <h3 class="widget-title">Latest Twitter Feeds</h3>

                                    <ul class="twitter-feed">

                                        <li>

                                            <div class="twitter-feed__avatar">

                                                <img src="assets/img/others/comment-icon.png" alt="avatar">

                                            </div>

                                            <div class="twitter-feed__info">

                                                <div class="twitter-feed__header">

                                                    <a href="#"><strong>Keving Sobo</strong></a>

                                                    <a href="#">@hastech</a>

                                                </div>

                                                <div class="twitter-feed__content">

                                                    <p>Our best WordPress theme for your online store is here https://t.co/BYA8Bn8A6f https://t.co/qtVhWOH5PU </p>

                                                </div>

                                                <div class="twitter-feed__footer">

                                                    <a href="#">Sep 23</a>

                                                    <a href="#">reply</a>

                                                    <a href="#">retweet</a>

                                                    <a href="#">favorite</a>

                                                    <a href="#">2 years ago</a>

                                                </div>

                                            </div>

                                        </li>

                                        <li>

                                            <div class="twitter-feed__avatar">

                                                <img src="assets/img/others/comment-icon.png" alt="avatar">

                                            </div>

                                            <div class="twitter-feed__info">

                                                <div class="twitter-feed__header">

                                                    <a href="#"><strong>Keving Sobo</strong></a>

                                                    <a href="#">@hastech</a>

                                                </div>

                                                <div class="twitter-feed__content">

                                                    <p>Our best WordPress theme for your online store is here https://t.co/BYA8Bn8A6f https://t.co/qtVhWOH5PU </p>

                                                </div>

                                                <div class="twitter-feed__footer">

                                                    <a href="#">Sep 23</a>

                                                    <a href="#">reply</a>

                                                    <a href="#">retweet</a>

                                                    <a href="#">favorite</a>

                                                    <a href="#">2 years ago</a>

                                                </div>

                                            </div>

                                        </li>

                                        <li>

                                            <div class="twitter-feed__avatar">

                                                <img src="assets/img/others/comment-icon.png" alt="avatar">

                                            </div>

                                            <div class="twitter-feed__info">

                                                <div class="twitter-feed__header">

                                                    <a href="#"><strong>Keving Sobo</strong></a>

                                                    <a href="#">@hastech</a>

                                                </div>

                                                <div class="twitter-feed__content">

                                                    <p>Our best WordPress theme for your online store is here https://t.co/BYA8Bn8A6f https://t.co/qtVhWOH5PU </p>

                                                </div>

                                                <div class="twitter-feed__footer">

                                                    <a href="#">Sep 23</a>

                                                    <a href="#">reply</a>

                                                    <a href="#">retweet</a>

                                                    <a href="#">favorite</a>

                                                    <a href="#">2 years ago</a>

                                                </div>

                                            </div>

                                        </li>

                                    </ul>

                                </div>

                                <!-- Twitter Feed Widget End -->



                                <!-- Tags Widget Start -->

                                <div class="sidebar-widget tags-widget">

                                    <h3 class="widget-title">Tags</h3>

                                    <div class="widget_conent">

                                        <div class="tagcloud">

                                            <a href="blog.html">chilled</a>

                                            <a href="blog.html">dark</a>

                                            <a href="blog.html">euro</a>

                                            <a href="blog.html">fashion</a>

                                            <a href="blog.html">food</a>

                                            <a href="blog.html">hardware</a>

                                            <a href="blog.html">hat</a>

                                            <a href="blog.html">hipster</a>

                                            <a href="blog.html">holidays</a>

                                            <a href="blog.html">light</a>

                                        </div>

                                    </div>

                                </div>

                                <!-- Tags Widget End -->

                            </aside>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Main Wrapper End -->

        <?php frontDown(); ?>



</body>





<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2019 12:42:16 GMT -->

</html>