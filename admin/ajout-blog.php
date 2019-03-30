<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ajouter commande</title>
    <meta name="description" content="The Must - Gammarth center">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php
	include "../config.php";
	backUP();
	?>
	        <div class="card-header">
            <strong> Ajout Blog</strong>
        </div>
        <div class="card-body card-block">
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal" name="commandef">
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">ID Blog</label></div>
                    <div class="col-12 col-md-9"><input type="number" id="idb" name="idb" placeholder="ID Blog" class="form-control"><small class="form-text text-muted"></small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Description</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="description" name="description" placeholder="Description" class="form-control"><small class="form-text text-muted"></small></div>
                </div>
               
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Date</label></div>
                    <div class="col-12 col-md-9"><input type="date" id="text-input" name="date" class="form-control"><small class="form-text text-muted"></small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Etat</label></div>
                    <p>
       Veuillez indiquer la type du blog :<br />
       <input type="radio" name="type" value="Blog Image Post" id="Blog Image Post" /> <label for="Blog Image Post">Blog Image Post</label><br />
       <input type="radio" name="type" value="Blog Gallery Post" id="Blog Gallery Post" /> <label for="Blog Gallery Post">Blog Gallery Post</label><br />
       <input type="radio" name="type" value="Blog Audio Post" id="Blog Audio Post" /> <label for="Blog Audio Post">Blog Audio Post</label><br />
       <input type="radio" name="type" value="Blog video Post" id="Blog video Post" /> <label for="Blog video Post">Blog Video Post</label>
   </p>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm" id="confirmer">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>
	<?php
	backDown();
	?>
</body>
</html>