<?php  
include "../../config.php";
$db=config::getConnexion();

$emps=$db->query("DELETE FROM publicite WHERE fin<=CURDATE()");
?>
<?php  

$result=$db->query('select * from publicite ORDER BY DEBUT');
if (!empty($_GET['searchh'])) {
    $search=htmlspecialchars($_GET['searchh']);
    $result=$db->query('select * from publicite WHERE nom LIKE "%'.$search.'%" OR nom LIKE "%'.$search.'%" OR cat LIKE "%'.$search.'%"  OR debut LIKE "%'.$search.'%" or fin LIKE "%'.$search.'%" ');
}

?>



<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
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
    <!-- Left Panel -->

    <?php backUp() ?>
<form action="tables-pub.php">
    

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"> Listes des publicités </strong>
                                <input type="checkbox" style="background-color: #FF0000" name="">
                                 <input type="text" name="searchh" id="searchh"> <button><i class="fa fa-check"></i></button> <button><i class="fa fa-rotate-left"></i></button>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th> Image </th>
                                            <th> Catégorie </th>
                                            <th> Nom du produit Produit </th>
                                            <th> Date début </th>
                                            <th> Date fin   </th>
                                            <th> Description</th>
                                            <th> Nombre de vues</th>
                                            <th> Action </th>

                                        </tr>
                                    </thead>
                                   <tbody>
                                    <?php while ($row = $result->fetch()) { ?>
                                        <tr>

                                            <td> <img src="images/<?php echo $row['image']; ?>" height=100px></td>
                                            <td> <?php echo $row['cat']; ?></td>
                                            <td><?php echo $row['nom']; ?></td>

                                            <td><?php echo $row['debut']; ?></td>
                                            <td><?php echo $row['fin']; ?></td>
                                            <td><?php echo $row['description']; ?></td>
                                            <td><?php echo $row['nb_vues']; ?></td>
                                             <td>
                            
                            <!--a href="#" class="btn btn-primary btn-xs" onclick="verifForm()" type="submit" Value="Ajouter"><i class="fa fa-folder"></i> ajotuer</a> -->
                            <a href="ediit.php?edit=<?php echo $row['ID']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                           <!--<a href="delete.php?del=<?php echo $row['ID']; ?>" class="btn btn-info btn-xs"><i class="fa fa-trash-o">Delete</a>-->
                                <a href="delete.php?del=<?php echo $row['ID'];?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                                        </tr>
                                    <?php } ?>

                                        </form>
                                       
                                </table>
                                  <?php
                                    $resu=$db->query("SELECT ID FROM publicite");
$row = $resu->fetchAll(); ?>  
<td> nombre de publicité : <?php echo (count($row));  ?></td> 

                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->




</body>

</html>
