<?php
session_start();
if (isset($_SESSION['idclient']))
{
	$_SESSION['idclient']='';
	$_SESSION['mdpclient']='';
	unset($_SESSION['idclient']);
	unset($_SESSION['mdpclient']);
}
if (isset($_COOKIE['idclient']))
{
	unset($_COOKIE['idclient']);
	unset($_COOKIE['mdpclient']);
	setcookie("idclient", "", time()-3600);
	setcookie("mdpclient", "", time()-3600);
}
session_destroy();
header('Location: index.php');
?>