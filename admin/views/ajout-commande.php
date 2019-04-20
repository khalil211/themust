<?php
include "../../config.php";
$db=config::getConnexion();
$client=$db->query('SELECT identifiant FROM client');
$clientste=$db->query('SELECT identifiant FROM clientste');
$produit=$db->query('SELECT id,nom FROM produit');
?>

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

    <link rel="stylesheet" href="vendors/chosen/chosen.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php
	backUP();
	?>
    <div class="card-header">
        <strong> Ajout commande</strong>
    </div>
    <div class="card-body card-block" id="main">
        <?php
        if (isset($_GET['added']))
        {
            if ($_GET['added']=='true')
            {
                ?>
                <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                    <span class="badge badge-pill badge-success">Success</span>
                        La commande a été ajoutée.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <?php
            }
            else
            {
                ?>
                <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                    <span class="badge badge-pill badge-danger">Echec</span>
                    <?php
                    echo '  ';
                    if (!isset($_GET['reason']))
                        echo 'Une erreur inconnue est survenue.';
                    else
                    {
                        if ($_GET['reason']==1)
                            echo 'Un ou plusieurs produit(s) n\'éxiste(nt) pas.';
                        elseif ($_GET['reason']==2)
                            echo 'Le client n\'éxiste pas.';
                    }
                    ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <?php
            }
        }
        ?>
        <form action="ajoutcommande.php" method="post" enctype="multipart/form-data" class="form-horizontal" id="commandef">
            <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label" for="idc">ID Client</label></div>
                <div class="col-12 col-md-9">
                    <div class="card-body" style="width: 250px;">
                      <select data-placeholder="ID Client" name="idc" class="standardSelect" tabindex="-1" style="display: none;">
                        <option value=""></option>
                        <?php
                        foreach($client as $c)
                        {
                            ?>
                            <option value="<?php echo $c['identifiant']; ?>"><?php echo $c['identifiant']; ?></option>
                            <?php
                        }
                        ?>
                        <?php
                        foreach($clientste as $c)
                        {
                            ?>
                            <option value="<?php echo $c['identifiant']; ?>"><?php echo $c['identifiant']; ?></option>
                            <?php
                        }
                        ?>
                      </select>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">Produits</label></div>
                <div class="col-12 col-md-9" id="listep"><button type="button" class="btn btn-success btn-sm" id="ajouterp">Ajouter produit</button><small class="form-text text-muted"></small></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label" for="passee">Passée</label></div>
                <div class="col-12 col-md-9"><label class="switch switch-3d switch-success mr-3"><input type="checkbox" class="switch-input" name="passee"> <span class="switch-label"></span> <span class="switch-handle"></span></label></label><small class="form-text text-muted"></small></div>
            </div>

        </form>
    </div>
    <div class="card-footer">
        <button type="submit" form="commandef" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Ajouter
        </button>
        <button type="reset" form="commandef" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Annuler
        </button>
    </div>
	<?php
	backDown();
	?>
    <script type="text/javascript">
        let optionProduit
        let ajouterp=document.getElementById("ajouterp")
        let nbp=0;
        let idc=document.getElementById("idc"), produits=new Array();
        let alerte="<div class=\"sufee-alert alert with-close alert-danger alert-dismissible fade show\" id=\"alerte\"><span class=\"badge badge-pill badge-danger\">Erreur</span>   Veuillez vérifier les informations fournies.<button type=\"button\" class=\"close\" data-dismiss=\"alert\"aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button></div>";

        /*commandef.addEventListener("submit",function (e)
        {
            let checkP=true;
            for (let i=0;i<produits.length;i++)
            {
                if (produits[i].childNodes[0].value<1 || produits[i].childNodes[1].value<1)
                    checkP=false;
            }
            if (idc.value<1 || !checkP)
            {
                document.getElementById("commandef").insertAdjacentHTML("beforebegin",alerte);
                e.preventDefault();
            }
        });*/

        ajouterp.addEventListener("click",function (e)
        {
            let nouv=document.createElement("div");
            nouv.style.display="flex";
            nouv.style.marginBottom="10px";
            
            let selectProduit=document.createElement("select");
            selectProduit.setAttribute("data-placeholder","Produit");
            selectProduit.setAttribute("name","idp"+nbp);
            selectProduit.setAttribute("class","standardSelect");
            selectProduit.setAttribute("tabindex","-1");
            selectProduit.style.display="none";

            optionProduit=document.createElement("option");
            optionProduit.setAttribute("value","");
            optionProduit.textContent="";
            selectProduit.appendChild(optionProduit);
            <?php
            foreach($produit as $p)
            {
                ?>
                optionProduit=document.createElement("option");
                optionProduit.setAttribute("value","<?php echo $p['id'].' - '.$p['nom'];?>");
                optionProduit.textContent="<?php echo $p['id'].' - '.$p['nom'];?>";
                selectProduit.appendChild(optionProduit);
                <?php
            }
            ?>
            let idp=document.createElement("div");
            idp.setAttribute("class","col col-md-3");
            let div=document.createElement("div");
            div.setAttribute("class","card-body");
            div.appendChild(selectProduit);
            idp.appendChild(div);

            let qte=document.createElement("input");
            qte.setAttribute("class","form-control");
            qte.setAttribute("type","number");
            qte.setAttribute("placeholder","Quantite");
            qte.setAttribute("name","qte"+nbp);
            qte.setAttribute("required","true");
            qte.style.marginRight="10px";
            qte.style.width="115px";
            qte.addEventListener("click",function (e4)
            {
                if (qte.value<1)
                    qte.setAttribute("class","form-control is-invalid");
                else
                    qte.setAttribute("class","form-control");
                e4.stopPropagation();
            });

            let supprimerp=document.createElement("button");
            supprimerp.setAttribute("type","button");
            supprimerp.setAttribute("class","btn btn-danger btn-sm");
            supprimerp.setAttribute("id",nbp+"supprimer");
            supprimerp.innerHTML="<i class=\"fa fa-trash-o\"></i>";
            supprimerp.style.width="40px";
            nouv.appendChild(idp);
            nouv.appendChild(qte);
            nouv.appendChild(supprimerp);
            document.getElementById("listep").insertBefore(nouv,ajouterp);
            produits.push(nouv);
            supprimerp.addEventListener("click",function (e2)
            {
                document.getElementById("listep").removeChild(nouv);
                produits.splice(parseInt(supprimerp.id),1);
                nbp--;
                for (let i=0;i<produits.length;i++)
                {
                    produits[i].childNodes[0].setAttribute("name","idp"+i);//hedhi tetbadel
                    produits[i].childNodes[1].setAttribute("name","qte"+i);
                    produits[i].childNodes[2].setAttribute("id",i);
                }
                e2.stopPropagation();
            });
            nbp++;
            e.stopPropagation();
        });
    </script>
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="vendors/chosen/chosen.jquery.min.js"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });
        });
    </script>
</body>
</html>