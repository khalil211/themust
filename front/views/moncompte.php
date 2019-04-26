<?php
include '../../admin/core/commandeC.php';
include 'menus.php';
testConnexion();
$commandeC=new commandeC;
$db=config::getConnexion();
            if (isset($_POST['nom']) && isset($_POST['prenom']))
            {
            
            $email = $_POST['email'];
            $motdepasse =$_POST['motdepasse'];
            $adresse = $_POST['adresse'];
            $telephone= $_POST['telephone'];
            $nom= $_POST['nom'];
            $prenom= $_POST['prenom'];
 $abcd=$db->prepare('UPDATE  client SET email=:email,motdepasse=:motdepasse,nom=:nom,prenom=:prenom,adresse=:adresse,telephone=:telephone WHERE identifiant=\''.$_SESSION['idclient'].'\'');
 $abcd->bindValue(":email",$email);
 $abcd->bindValue(":motdepasse",$motdepasse);
 $abcd->bindValue(":nom",$nom);
 $abcd->bindValue(":prenom",$prenom);
 $abcd->bindValue(":adresse",$adresse);
 $abcd->bindValue(":telephone",$telephone);
 $abcd->execute();

            }


               if (isset($_POST['nomste']) && isset($_POST['matfis']))
            {
            
            $email = $_POST['email'];
            $motdepasse =$_POST['motdepasse'];
            $adresse = $_POST['adresse'];
            $telephone= $_POST['telephone'];
            $nomste= $_POST['nomste'];
            $matfis= $_POST['matfis'];
 $abcd=$db->prepare('UPDATE  clientste SET email=:email,motdepasse=:motdepasse,nomste=:nomste,matfis=:matfis,adresse=:adresse,telephone=:telephone WHERE identifiant=\''.$_SESSION['idclient'].'\'');
 $abcd->bindValue(":email",$email);
 $abcd->bindValue(":motdepasse",$motdepasse);
 $abcd->bindValue(":nomste",$nomste);
 $abcd->bindValue(":matfis",$matfis);
 $abcd->bindValue(":adresse",$adresse);
 $abcd->bindValue(":telephone",$telephone);
 $abcd->execute();

            }


            if (preg_match('/[a-zA-Z0-9]{4,25}(STE)$/',$_SESSION['idclient']))
            {
                
$result=$db->query('SELECT * FROM clientste WHERE identifiant=\''.$_SESSION['idclient'].'\'');
            }
            else
            {
                             
$result=$db->query('SELECT * FROM client WHERE identifiant=\''.$_SESSION['idclient'].'\'');   
            }
?>

<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:54:10 GMT -->
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


    <?php frontUp(); ?>

        <!-- Breadcumb area Start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">My Account</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><a href="my-account.html">My Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcumb area End -->

        <!-- Main Content wrapper start -->

        <section class="main-content-wrapper">
            <div class="account-wrapper pt--40 pb--80 pt-md--30 pb-md--60">
                <div class="container">
                    <div class="user-dashboard-tab">
                        <div class="row">
                            <div class="col-lg-4 mb-md--30">
                                <div class="user-dashboard-tab__head nav flex-column" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" data-toggle="pill" role="tab" href="#dashboard" aria-controls="dashboard" aria-selected="true">Dashboard</a>

                                    <a class="nav-link" data-toggle="pill" role="tab" href="#addresses" aria-controls="addresses" aria-selected="true">Commandes</a>
                                    <a class="nav-link" data-toggle="pill" role="tab" href="#accountdetails" aria-controls="accountdetails" aria-selected="true">Modifier votre compte</a>
                                    <a class="nav-link" href="deconnexion.php">Deconnexion</a>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="user-dashboard-tab__content tab-content">
                                    <div class="tab-pane fade show active" id="dashboard">
                                        
                                        <?php $row = $result->fetch();  
            if (preg_match('/[a-zA-Z0-9]{4,25}(STE)$/',$_SESSION['idclient']))
            {
?> 
                                       <h1> <?php echo $row['identifiant']; ?> </h1>
                                       <h2> Email : <?php echo $row['email']; ?> </h2>
                                       <h2> Nom STE : <?php echo $row['nomste']; ?> </h2>
                                       <h2> Matricule Fiscale : <?php echo $row['matfis']; ?> </h2>
                                       <h2> Adresse : <?php echo $row['adresse']; ?> </h2>
                                       <h2> telephone : <?php echo $row['telephone']; ?> </h2>
                                        <?php 
                                        }
                                        else
                                        {

                                        ?>

                                            <h1> <?php echo $row['identifiant']; ?> </h1>
                                       <h2> Email : <?php echo $row['email']; ?> </h2>
                                       <h2> Nom  : <?php echo $row['nom']; ?> </h2>
                                       <h2> Prénom : <?php echo $row['prenom']; ?> </h2>
                                       <h2> Adresse : <?php echo $row['adresse']; ?> </h2>
                                       <h2> telephone : <?php echo $row['telephone']; ?> </h2>
                                        <?php
                                        
                                    }
                                        ?>


                                        <p>bonjour <strong><?php echo $_SESSION['idclient'];?></strong> (vous n'est pas <strong><?php echo $_SESSION['idclient'];?></strong>? <a href="deconnexion.php">Log out</a>)</p>
                                        
                                        <p>From your account dashboard. you can easily check & view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">edit your password and account details</a>.</p>
                                    </div>
                                    
                                    
                                    <div class="tab-pane fade" id="addresses">
                                        <?php
                                        $commandes=$db->prepare('SELECT * FROM commande WHERE idclient=:idc');
                                        $commandes->bindValue(':idc',$_SESSION['idclient']);
                                        $commandes->execute();
                                        foreach($commandes as $c)
                                        {
                                            ?>
                                            <div id="<?php echo $c['numero']; ?>a" class="billing-address mb--20">
                                                <h4>Numero: <?php echo $c['numero']; ?></h4>
                                                <p>Nombre de produits: <?php echo $c['nbproduit']; ?></p>
                                                <p>Total: <?php echo $c['prixtotal']; ?></p>
                                                <p>Etat: <?php if ($c['etat']==1)echo 'Passée'; else if($c['etat']==2) echo 'En attente'; else if($c['etat']==0) echo 'Annulée'; ?></p>
                                                <p>Date: <?php echo $c['datecommande']; ?></p>
                                                <a href="moncompte.php#<?php echo $c['numero']; ?>a" data-attr="#<?php echo $c['numero']; ?>" class="btn btn-medium btn-style-1 expand_action">Afficher produits</a>
                                                <div class="address-form bg--2 mt--20 hide-in-default" id="<?php echo $c['numero']; ?>">
                                                    <!-- affichage produits -->
                                                    <?php
                                                    $produits=$commandeC->getProduits($c['numero']);
                                                    if ($produits->rowCount()==0)
                                                        echo '<p>Pas de produits.</p>';
                                                    else
                                                    {
                                                        ?>
                                                        <div style="display: flex;">
                                                            <?php
                                                            foreach ($produits as $p)
                                                            {
                                                                ?>
                                                                <div class="mini-cart__item" style="margin-right: 20px;">
                                                                    <div class="mini-cart__item--single">
                                                                        <div class="mini-cart__item--image">
                                                                            <img src="../../admin/views/images/<?php echo $p['imgprod'];?>" alt="product">
                                                                        </div>
                                                                        <div class="mini-cart__item--content">
                                                                            <h4 style="margin-top: -3px;" class="mini-cart__item--name"><a href="product-details.html"><?php echo $p['nomprod']; ?></a> </h4>
                                                                            <p style="margin-top: -10px;" class="mini-cart__item--quantity">x<?php echo $p['quantiteprod']; ?></p>
                                                                            <p style="margin-top: -10px;" class="mini-cart__item--price"><?php echo $p['prixprod']; ?></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                    <!-- fin affichage produit -->
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="tab-pane fade" id="accountdetails">
                                        <div class="account-form bg--2">
                                            <form action="moncompte.php" method="POST" class="form">


<?php 
            if (preg_match('/[a-zA-Z0-9]{4,25}(STE)$/',$_SESSION['idclient']))
            {
?> 
                                       <div class="form-row mb--20">
                                                    <div class="col-md-6 mb-sm--20">
                                                        <div class="form__group">
                                                            <label for="account_fname" class="form__label">NOM STE :</label>
                                                            <input type="text" name="nomste" id="nomste" value="<?php echo $row['nomste']; ?>" class="form__input form__input--2">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form__group">
                                                            <label for="account_lname" class="form__label"> Matricule fiscale :</label>
                                                            <input type="text" name="matfis" id="matfis" value="<?php echo $row['matfis']; ?>"class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php }
                                        else
                                        {
                                        ?>
                                         <div class="form-row mb--20">
                                                    <div class="col-md-6 mb-sm--20">
                                                        <div class="form__group">
                                                            <label for="nom" class="form__label" >NOM :</label>
                                                            <input type="text" name="nom" id="nom" value="<?php echo $row['nom']; ?>" class="form__input form__input--2">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form__group">
                                                            <label for="account_lname" class="form__label">Prénom</label>
                                                            <input type="text" name="prenom" id="prenom" value="<?php echo $row['prenom']; ?>"class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php 
                                        
                                    }
                                        ?>


                                          

                                                <div class="form-row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label for="email" class="form__label">Email Address</label>
                                                            <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>"class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label for="adresse" class="form__label">Addresse :</label>
                                                            <input type="text" name="adresse" id="adresse" value="<?php echo $row['adresse']; ?>"class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label for="telephone" class="form__label">Telephone :</label>
                                                            <input type="text" name="telephone" id="telephone" value="<?php echo $row['telephone']; ?>"class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="col-12">
                                                        <h4>PASSWORD CHANGE</h4>
                                                    </div>
                                                </div>
                                                <div class="form-row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label for="cur_password" class="form__label">Current Password (leave blank to leave unchanged)</label>
                                                            <input type="password" name="cur_password" id="cur_password" class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                </div>                                             
                                                <div class="form-row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label for="motdepasse" class="form__label">New Password (leave blank to leave unchanged)</label>
                                                            <input type="password" name="motdepasse" id="motdepasse" class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label for="new_password" class="form__label">Confirm Password</label>
                                                            <input type="password" name="confirm_password" id="confirm_password" class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-medium btn-style-2">Save Changes</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>    
            </div>
        </section>

        <!-- Main Content wrapper end -->

        <?php frontDown(); ?>
</body>


<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:54:11 GMT -->
</html>