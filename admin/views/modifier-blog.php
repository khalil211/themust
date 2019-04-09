<?php

include "../../config.php";

 $idblog=$_POST['ide'];
 $description=$_POST['description'];
 $type=$_POST['type'];
 $date=$_POST['date'];
 $image=$_POST['image'];
$db=config::getConnexion();
$result=$db->prepare("UPDATE blog SET `description`='$description' , `type`='$type' , `date`='$date' , `image`='$image' 
	WHERE `blog`.`idblog`='$idblog'");
$result->execute();
header('location: tables-blog.php');

  ?>