<?php
include "../config.php";
$db=config::getConnexion();
$ID = $_GET['edit'];
$emps=$db->query("SELECT * FROM  blog WHERE idblog=$ID");
           while ($row = $emps->fetch()) {
           
            $description = $row['description'];
            $type = $row['type'];
            $date = $row['date'];
            $image = $row['image'];
            

        }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Modifier Blog</title>
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
	
	backUP();
	?>
     <form method="POST" action="views/modifier-blog.php?edit=<?php echo $row['idblog']; ?>" name="blogg" id="blogg">
	        <div class="card-header">
            <strong> Ajout Blog</strong>
        </div>
        <div class="card-body card-block">
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Description</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="description" placeholder="<?php echo $description;?>" name="description" placeholder="Description" class="form-control"><small class="form-text text-muted"></small></div>
                </div>
               
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Date</label></div>
                    <div class="col-12 col-md-9"><input type="date" id="date" value="<?php echo $date;?>" name="date" class="form-control"><small class="form-text text-muted"></small></div>
                </div>
               
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Etat</label></div>
                    <p>
       Veuillez indiquer la type du blog :<br />
       <input type="radio" name="type" value="Blog Image Post" id="type" /> <label for="Blog Image Post">Blog Image Post</label><br />
       <input type="radio" name="type" value="Blog Gallery Post" id="type" /> <label for="Blog Gallery Post">Blog Gallery Post</label><br />
       <input type="radio" name="type" value="Blog Audio Post" id="type" /> <label for="Blog Audio Post">Blog Audio Post</label><br />
       <input type="radio" name="type" value="Blog video Post" id="type" /> <label for="Blog video Post">Blog Video Post</label>
   </p>
                </div>
                <div class="row form-group">
                     <div class="col col-md-3"><label class=" form-control-label">Image du blog  </label></div>
                     <div class="col-12 col-md-9"><input type="file" id="image" placeholder="<?php echo $image;?>" name="image"  class="form-control"><small class="form-text text-muted"></small></div>
                     <div class="col-12 col-md-9">
                                                                  
                 </div>

        </div>
        <input type="hidden" name="ide"  value="<?php echo $ID;?>" >
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>
    </form>
	<?php
	backDown();
	?>
    <script type="text/javascript">
        document.getElementById("blogg").addEventListener("submit",function (e){
    let teste=true;
    let idb, type,description,date;
    idb=blogg.idblog.value;
    type=blogg.idblog.value;
    description=blogg.description.value;
    date=blogg.date.value;
    if(document.forms["blogg"]["type"].value=="" && document.forms["blogg"]["description"].value=="" && document.forms["blogg"]["date"].value=="" && document.forms["blogg"]["idblog"].value=="" )
{
    alert("Veuillez remplir tout les champs! ");
}
    if (idb.length < 1 || idb.length >4 )
    {
        teste=false;
        alert("ID ne doit pas deppaser 4 carachter");
    }
    else if (description.length < 10 || description.length > 200 ) 
    {
        teste=false;
        alert("Veuillez ecrire plus que 10 carachter dans le champ description.");
    }
     else if (teste===false)
     {
    alert("Verifiez vos informations.");

     }
     else
     {
        alert("Ajout avec succès.")
     }
    if(!teste)
        e.preventDefault();
});
    </script>
</body>
</html>