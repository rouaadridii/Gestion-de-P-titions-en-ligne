<?php

try{
$con=new PDO('mysql:host=localhost;dbname=membres','root','');
}catch(Exception $e)
{
	die('erreur'.$e->getMessage());
}

$nom = $_POST['nom'];
$pn = $_POST['pn'];
$role = $_POST['genre'];
$em = $_POST['email'];
$mdp = $_POST['mdp'];

$verif = $con->prepare('SELECT email FROM utilisateurs WHERE email=?');
$verif->execute(array($em));
$data = $verif->fetch();
$row = $verif->rowcount();

if ($row == 0) {
/*utilisateur non exsistant*/
 	$inserer = $con->prepare('INSERT INTO utilisateurs(nom,prenom,email,mdp,role)VALUES(:nom, :prenom, :email, :mdp, :role)');
 	$inserer->execute(array(
 		'nom'=>$nom,
 	    'prenom'=>$pn,
 	    'email'=>$em,
 	    'mdp'=>$mdp,
 	    'role'=>$role  ));
 	header('location: connexion.php');
 }
 /*exsistant*/
else{
	header('location: inscription.php');
}

?>

