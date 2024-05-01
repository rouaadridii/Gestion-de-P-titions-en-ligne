<?php
session_start();
try{
$con=new PDO('mysql:host=localhost;dbname=membres','root','');
}catch(Exception $e)
{
	die('erreur'.$e->getMessage());
}

$verif= $con->prepare('SELECT nom FROM utilisateurs WHERE email=?');
	$verif->execute(array($_SESSION['email']));
	$data = $verif->fetch();
	$row = $verif->rowcount();

	if ($row==1) {
 	        $_SESSION['nom']=$data['nom']; 
	}

$vef= $con->prepare('SELECT prenom FROM utilisateurs WHERE email=?');
	$vef->execute(array($_SESSION['email']));
	$data = $vef->fetch();
	$row = $vef->rowcount();

	if ($row==1) {
 	        $_SESSION['prenom']=$data['prenom']; 
	}

$vf= $con->prepare('SELECT role FROM utilisateurs WHERE email=?');
	$vf->execute(array($_SESSION['email']));
	$data = $vf->fetch();
	$row = $vf->rowcount();

	if ($row==1) {
 	        $_SESSION['role']=$data['role']; 
	}


?>