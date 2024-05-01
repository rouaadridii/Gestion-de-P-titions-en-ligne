<?php
include 'session-valeurs.php';
try{
$con=new PDO('mysql:host=localhost;dbname=membres','root','');
}catch(Exception $e)
{
  die('erreur'.$e->getMessage());
}

$titre = $_POST['titre']; 
$des = $_POST['des'];

$verif = $con->prepare('SELECT titre FROM petitions WHERE titre=?');
$verif->execute(array($titre));
$data = $verif->fetch();
$row = $verif->rowcount();

if ($row == 0) {

$inserer = $con->prepare('INSERT INTO petitions(titre,description,email,nom,prenom,role,nbp,nbc)VALUES(:titre, :description, :email, :nom, :prenom,:role, :nbp, :nbc)');
  $inserer->execute(array(
      'titre'=>$titre,
      'description'=>$des,
      'email'=>$_SESSION['email'],
      'nom'=>$_SESSION['nom'],
      'prenom'=>$_SESSION['prenom'], 
      'role'=>$_SESSION['role'],
      'nbp'=>0,
      'nbc'=>0));
      header('location: liste_petitions.php');
    }
    else {
      echo "petition exsistante";
      header('location: profile_membre.php');
  }


?>