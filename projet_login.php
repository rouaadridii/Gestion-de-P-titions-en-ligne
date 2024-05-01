<?php 

try{
$con=new PDO('mysql:host=localhost;dbname=membres','root','');
}catch(Exception $e)
{
	die('erreur'.$e->getMessage());
}

if (isset($_POST['email']) && isset($_POST['mdp'])) {
	$mail= htmlspecialchars($_POST['email']);
	$pass= htmlspecialchars($_POST['mdp']);
	

	$verif= $con->prepare('SELECT email,mdp FROM utilisateurs WHERE email=?');
	$verif->execute(array($mail));
	$data = $verif->fetch();
	$row = $verif->rowcount();

	if ($row==1) {
	   if ($data['mdp']==$pass) {
	   		header('location: profile_membre.php');
	   		session_start();
 	        $_SESSION['email']=$mail;
 	        $_SESSION['mdp']=$pass;
 	        
	   	}
	   /*mdp incorecte*/	
		else  {
		    	header('location: connexion.php');
		    }    
	}

}


if (($_POST['email']== 'admin') && ($_POST['mdp']== 'admin')) {
header('location: dashboard.php');
session_start();
$_SESSION['admin']=$_POST['email'];}


?>