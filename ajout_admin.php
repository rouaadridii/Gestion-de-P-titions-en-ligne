<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="http://127.0.0.1/projet_pweb/images-projet/logo.ico"/>
	<title>Admin</title>

</head>
<body style="background:url('http://127.0.0.1/projet_pweb/images-projet/couverture.png');background-size: cover;">
	<a href="dashboard.php"><img src="http://127.0.0.1/projet_pweb/images-projet/retour.png" style="margin-left: 15px; margin-top: 30px;"></a>
	<center>

	<form method="POST" action="">
		<div style="background-color: #48b7b6; margin-top: 250px; border-radius: 20px;
                                box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, .2);
                                width: 320px;">

		<input style=" color:gray;border-radius: 20px;border-color: #48b7b6; margin-top: 15px;" type="text" name="e" id="e" placeholder="ecriver nom d'admin">

		<br><br>

		<input type="text"  name="m" id="m" placeholder="ecriver mdp d'admin" style="color:gray;border-radius: 20px;border-color: #48b7b6;">

		<br><br>

		<input type="submit" name="btns" value="Ajouter" style="margin-bottom: 15px;black ;border-radius: 20px;border-color: #123758; text-align: center;
             width: 30%;
             background: none;
             cursor: pointer;
             font-size: 15px;
             color: white;"></div>
	</form>

    </center>


<?php
    try{
$con=new PDO('mysql:host=localhost;dbname=membres','root','');
}catch(Exception $e)
{
  die('erreur'.$e->getMessage());
}

$inserer = $con->prepare('INSERT INTO administrateurs(email,mdp)VALUES(:email, :mdp)');
  $inserer->execute(array(
      'email'=>$_POST['e'],
      'mdp'=>$_POST['m']));
    ?>

</body>
</html>