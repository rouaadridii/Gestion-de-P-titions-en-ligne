<?php
session_start();
$res=$_SESSION['email'];

try{
$con=new PDO('mysql:host=localhost;dbname=membres','root','');
}catch(Exception $e)
{
	die('erreur'.$e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="http://127.0.0.1/projet_pweb/images-projet/logo.ico"/>
	<title>Modification</title>
</head>
<style type="text/css">
	body{
		background-color: rgb(18, 56, 87,0.7);
	}
</style>
<body>
<script language="javascript" src="projet.js"></script>

<a href="profile_membre.php"><img src="http://127.0.0.1/projet_pweb/images-projet/close.png" style="margin-left: 93%; margin-top: 30px;"></a>
	
	<div class="main-card2" id="creation">
        <h1 style="color: #202020;
                   margin-left: 30px;
                   margin-top:40px;
                   font-weight: bold;
                   font-size: 50px;
                   margin-bottom: 57px;
                   ">Modifier Mot de passe</h1>

        <form action="" method="POST" onsubmit="return verif2();" style="background: #123857;
                                padding: 3rem;
                                height: 250px;
                                width: 1000px;
                                margin-left: 160px;
                                border-radius: 20px;
                                box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, .2);">

 <p style="color: #400000; font-weight: bold; font-size: 18px;" name="erreur" id="erreur"></p>

            <div style="display: flex;flex-direction: wrap;">
              <p style="margin-right: 20px;
                        margin-left: 80px;
                        font-family: 'Merriweather', serif;
                        font-size: 20px;
                        color: white;">Nouveau mot de passe :</p>

              <input  type="password" name="mdp2" id="mdp2" placeholder="password" style="border: none;
                   background: lightgray;
                   width: 210px;
                   height: 50px;
                   margin-left: 68px;
                   border-radius: 50px;
                   font-size: 40px;
                  ">
             </div>

             <div style="display: flex;flex-direction: wrap;">
              <p style="margin-right: 20px;
                        margin-left: 80px;
                        margin-top: 30px;
                        font-family: 'Merriweather', serif;
                        font-size: 20px;
                        color: white;">Confirmer nouveau mot de passe :</p>


                <input  type="password" name="mdp3" id="mdp3" placeholder="password" style="border: none;
                   background: lightgray;
                   width: 210px;
                   margin-left: 68px;
                   border-radius: 50px;
                   font-size: 40px;
                   margin-top: 30px;
                  ">

              

             </div>

             <input type="submit" name="ajout" value="Modifier" style="border: none;
                   background: #48b7b6;
                   width: 150px;
                   height: 30px;
                   margin-top: 45px;
                   margin-left: 750px;
                   border-radius: 50px;
                   color: #404040;
                   font-weight: bold;
                   font-family: 'Merriweather', serif;
                   cursor: pointer;">
    
         </form>

     </div>
<?php 
     $nvmdp= $_POST['mdp2'];

      $req = $con->prepare('UPDATE utilisateurs SET mdp = :mdp, email = :email WHERE email = :email');
      $req->execute(array(
      	'mdp'=>$nvmdp,
      	'email'=>$res
      ));
      $_SESSION['mdp']=$nvmdp;	
 ?>
<?php
header('location: profile_membre.php');
?>
</body>
</html>
