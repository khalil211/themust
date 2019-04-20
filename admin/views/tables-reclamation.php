<?php
include "../../front/entities/reclamation.php";
include "../../config.php";
$db=config::getConnexion();
    $result=$db->query('SELECT * FROM reclamation');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Listes des Reclamations</title>
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
                            <strong class="card-title"> Listes des Reclamation </strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        
                                        <th> Sujet </th>
                                        <th> Email </th>
                                        <th> Description </th>
                                        <th> Date </th>
                                        <th> Etat </th>
                                        <th> Action </th>
                                        
                                    </tr>
                                </thead>
                               <tbody>
                                     <?php while ($row = $result->fetch()) { 
                                    ?>
                                              <tr>

                                       
                                            <td><?php echo $row['sujet']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['description']; ?></td>
                                            <td><?php echo $row['date']; ?></td>
                                            <td><?php echo $row['etat']; ?></td>
                                            <td>
                                                
                                                <button class="btn btn-outline-success" type="button" onclick="window.location='modifier-reclamation.php?del=<?php echo $row['sujet']; ?>'">Modifier</button>
                                            </br>
                                            <button class="btn btn-outline-danger" type="button" onclick="window.location='supprimer-reclamation.php?del=<?php echo $row['sujet']; ?>'">Supprimer</button></td>
                                        
                                        </tr>
                                        
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
</body>
</html>