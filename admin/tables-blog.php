<?php
include "entities/blog.php";
include "../config.php";

$db=config::getConnexion();
if (isset($_GET['r']))
    $result=$db->query('SELECT * FROM blog where type LIKE \'%'.$_GET['r'].'%\'');
else
    $result=$db->query('SELECT * FROM blog');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Listes des Blogs</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php

	backUp();
	?>
	<div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"> Listes des Blog </strong>
                        </div>
                        <div class="card-body">
                             <div class="col-sm-12 col-md-6">
                                            <div id="bootstrap-data-table-export_filter" class="dataTables_filter">
                                                <label>
                                                    Recherche:<input <?php if (isset($_GET['r']))echo 'value="'.$_GET['r'].'"'; ?> type="search" class="form-control form-control-sm" placeholder="Type du Blog" id="recherche">
                                                </label>
                                            </div>
                                        </div>
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        
                                        <th> ID Blog </th>
                                        <th> Description </th>
                                        <th> Type </th>
                                        <th> Date </th>
                                        <th> image </th>
                                        <th> action </th>
                                        
                                    </tr>
                                </thead>
                               <tbody>
                                   <?php while ($row = $result->fetch()) { 
                                    ?>
                                              <tr>

                                       
                                            <td><?php echo $row['idblog']; ?></td>
                                            <td><?php echo $row['description']; ?></td>
                                            <td><?php echo $row['type']; ?></td>
                                            <td><?php echo $row['date']; ?></td>
                                            <td><?php echo $row['image']; ?></td>
                                            <td><button class="btn btn-outline-success" type="button" class="btn btn-danger" onclick="window.location='edit-blog.php?edit='+<?php echo $row['idblog']; ?>">Modifier</button>
                                            </br>
                                            <button class="btn btn-outline-danger" type="button" onclick="window.location='views/supprimer-blog.php?del='+<?php echo $row['idblog']; ?>">Supprimer</button></td>
                                        
                                        </tr>
                                               
                                        
                                        <?php
                                        }
                                        ?>
			                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
	<?php
	backDown();
	?>
     <script type="text/javascript">
    let recherche=document.getElementById("recherche");
        recherche.addEventListener("keydown",function (e)
        {
            if (e.keyCode==13)
                document.location="tables-blog.php?r="+recherche.value;
            e.stopPropagation(); 
        });
    </script>
     <script type="text/javascript" src="views/afficher-blog.js"></script>
</body>
</html>