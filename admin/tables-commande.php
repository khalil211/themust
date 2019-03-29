<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Listes des commandes</title>
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
	include 'commande/commande.php';
	backUp();
	?>
	<div class="content mt-3">
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Liste des commandes</strong>
                            </div>
                            <?php
                            $commande=new commande(0,-1);
                            $n=10;
                            if (isset($_GET['n']))
                            {
                                if ($_GET['n']==25||$_GET['n']==50||$_GET['n']==-1)
                                    $n=$_GET['n'];
                            }
                            $t=1;
                            if (isset($_GET['t']))
                            {
                                if ($_GET['t']>0&&$_GET['t']<13)
                                    $t=$_GET['t'];
                            }
                            $nbTotal=$commande->nombre();
                            $nbPageTotal=intdiv($nbTotal,$n);
                            if (($nbTotal%10)!=0)
                                $nbPageTotal++;
                            $p=1;
                            if (isset($_GET['p']))
                            {
                                if ($_GET['p']>0 && $_GET['p']<=$nbPageTotal)
                                    $p=$_GET['p'];
                            }
                            ?>
                            <script type="text/javascript">console.log(<?php echo '"'.$nbTotal.'  '.$nbPageTotal.'  '.$p.'   "' ?>)</script>
                            <div class="card-body">
                                <div id="bootstrap-data-table-export_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="bootstrap-data-table-export_length">
                                                <label>Afficher
                                                    <select id="nbelt" name="bootstrap-data-table-export_length" aria-controls="bootstrap-data-table-export" class="custom-select custom-select-sm form-control form-control-sm">
                                                        <option <?php if($n==10) echo 'selected'; ?> value="10">10</option>
                                                        <option <?php if($n==25) echo 'selected'; ?> value="25">25</option>
                                                        <option <?php if($n==50) echo 'selected'; ?> value="50">50</option>
                                                        <option <?php if($n==-1) echo 'selected'; ?> value="-1">Toutes</option>
                                                    </select> commandes
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table-export_info">
                                    <thead>
                                        <tr role="row">
                                            <th id="idcommande" <?php if ($t==1)echo 'class="sorting_asc"';elseif($t==7)echo 'class="sorting_desc"';else echo 'class="sorting"'; ?> tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px;">
                                                ID
                                            </th>
                                            <th id="idclient" <?php if ($t==2)echo 'class="sorting_asc"';elseif($t==8)echo 'class="sorting_desc"';else echo 'class="sorting"'; ?> tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px;">
                                                ID Client
                                            </th>
                                            <th id="nbproduit" <?php if ($t==3)echo 'class="sorting_asc"';elseif($t==9)echo 'class="sorting_desc"';else echo 'class="sorting"'; ?> tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px;">
                                                NB Produit
                                            </th>
                                            <th id="prixtotal" <?php if ($t==4)echo 'class="sorting_asc"';elseif($t==10)echo 'class="sorting_desc"';else echo 'class="sorting"'; ?> tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 50px;">
                                                Prix total
                                            </th>
                                            <th id="etat" <?php if ($t==5)echo 'class="sorting_asc"';elseif($t==11)echo 'class="sorting_desc"';else echo 'class="sorting"'; ?> tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 50px;">
                                                Etat
                                            </th>
                                            <th id="datecommande" <?php if ($t==6)echo 'class="sorting_asc"';elseif($t==12)echo 'class="sorting_desc"';else echo 'class="sorting"'; ?> tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 150px;">
                                                Date
                                            </th>
                                            <th tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 200px;">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $liste=$commande->afficher($t,$n,$p);
                                        $i=0;
                                        foreach ($liste as $element)
                                        {
                                            ?>
                                            <tr role="row" <?php echo (($i%2)==0)?'class="odd"':'class="even"'; ?> >
                                                <td><?php echo $element['numero'] ?></td>
                                                <td><?php echo $element['idclient'] ?></td>
                                                <td><?php echo $element['nbproduit'] ?></td>
                                                <td><?php echo $element['prixtotal'] ?></td>
                                                <td> <?php if ($element['etat']==1) echo 'Passée'; else echo 'En attente'; ?> </td>
                                                <td><?php echo $element['datecommande'] ?></td>
                                                <td>
                                                    <button type="button" onclick="document.location='commande/modifier-commande.php?n='+<?php echo $element['numero']; ?>+'&e='+<?php echo $element['etat']; ?>" class="btn btn-success"><i class="fa fa-magic"></i>  Modifier état</button>
                                                    <button type="button" onclick="document.location='commande/supprimer-commande.php?n='+<?php echo $element['numero']; ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i>  Supprimer</button>
                                                </td>
                                            </tr>
                                            <?php
                                            $i++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div><?php if ($nbTotal<($p*$n)) $ma=$nbTotal;else $ma=$p*$n;echo 'Commandes '.((($p-1)*$n)+1).' à '.$ma.' de '.$nbTotal.' affichées'; ?></div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="bootstrap-data-table-export_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item">
                                            <a <?php if ($p>1)echo 'href="tables-commande.php?t='.$t.'&n='.$n.'&p='.($p-1).'"'; ?> class="page-link">Précédent</a>
                                        </li>
                                        <?php
                                        for ($i=1;$i<$nbPageTotal+1;$i++)
                                        {
                                            ?>
                                            <li <?php if ($p==$i)echo 'class="paginate_button page-item active"'; else echo 'class="paginate_button page-item"'; ?>>
                                                <a <?php echo 'href="tables-commande.php?t='.$t.'&n='.$n.'&p='.$i.'"' ?> class="page-link"><?php echo $i ?></a>
                                            </li>
                                            <?php
                                        }
                                        ?>
                                        <li class="paginate_button page-item">
                                            <a <?php if ($p<$nbPageTotal)echo 'href="tables-commande.php?t='.$t.'&n='.$n.'&p='.($p+1).'"'; ?> class="page-link">Suivant</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div>
    </div><!-- .content -->
	<?php
	backDown();
	?>
    <script type="text/javascript">
        let idcommande=document.getElementById("idcommande");
        idcommande.addEventListener("click",function (e)
        {
            window.location=<?php if ($t==1)echo "'tables-commande.php?t=7'"; else echo "'tables-commande.php?t=1'"; ?>;
            e.stopPropagation();
        });
        let idclient=document.getElementById("idclient");
        idclient.addEventListener("click",function (e)
        {
            window.location=<?php if ($t==2)echo "'tables-commande.php?t=8'"; else echo "'tables-commande.php?t=2'"; ?>;
            e.stopPropagation();
        });
        let nbproduit=document.getElementById("nbproduit");
        nbproduit.addEventListener("click",function (e)
        {
            window.location=<?php if ($t==3)echo "'tables-commande.php?t=9'"; else echo "'tables-commande.php?t=3'"; ?>;
            e.stopPropagation();
        });
        let prixtotal=document.getElementById("prixtotal");
        prixtotal.addEventListener("click",function (e)
        {
            window.location=<?php if ($t==4)echo "'tables-commande.php?t=10'"; else echo "'tables-commande.php?t=4'"; ?>;
            e.stopPropagation();
        });
        let etat=document.getElementById("etat");
        etat.addEventListener("click",function (e)
        {
            window.location=<?php if ($t==5)echo "'tables-commande.php?t=11'"; else echo "'tables-commande.php?t=5'"; ?>;
            e.stopPropagation();
        });
        let datecommande=document.getElementById("datecommande");
        datecommande.addEventListener("click",function (e)
        {
            window.location=<?php if ($t==6)echo "'tables-commande.php?t=12'"; else echo "'tables-commande.php?t=6'"; ?>;
            e.stopPropagation();
        });
    </script>
    <script type="text/javascript" src="commande/afficher-commande.js"></script>
</body>
</html>