<?php
include 'session-valeurs.php';

        $inserer = $con->prepare('INSERT INTO commentaires(titre,email,commentaire)VALUES(:titre, :email, :commentaire)');
        $inserer->execute(array(
         'titre'=>$_SESSION['titre'],
         'email'=>$_SESSION['email'],
         'commentaire'=>$_POST['cmt']));
        header('location: liste_petitions.php');
      ?>
?>