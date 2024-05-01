<?php
    try{
$con=new PDO('mysql:host=localhost;dbname=membres','root','');
}catch(Exception $e)
{
  die('erreur'.$e->getMessage());
}
$query = $con->query("SELECT * FROM utilisateurs");
if($query === false){
   die('Erreur SQL');}
   $personnes = $query->fetchAll(PDO::FETCH_ASSOC);

?>
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

	<!------------------------------------->
<center>
	<table border="1" cellspacing="0" style="margin-top: 110px; border-color: #48b7b6;">
		<tr style="color: #48b7b6; text-align: center;">
			<td>ID</td>
			<td>Nom</td>
			<td>Prénom</td>
			<td>Email</td>
			<td>Mot de passe</td>
			<td>Role</td>

		</tr>
		
		<?php
     	   foreach($personnes as $personne){
     	    ?>
     	<form method="POST" action="eff_mem_admin.php"><tr style="color: lightgray; text-align: center;">
     	<td><?php echo $personne['id'] ; ?></td>
     	<td><?php echo $personne['nom'] ; ?></td>
     	<td><?php echo $personne['prenom'] ; ?></td>
     	<td><input style="background: none; border:0px;color: lightgray;font-size: 15px;" type="text" name="m" id="m" value="<?php echo $personne['email'] ; ?>"></td>
     	<td><?php echo $personne['mdp'] ; ?></td>
     	<td><?php echo $personne['role'] ; ?></td>
     	<td><input type="submit" name="sup" value="X" style="margin-bottom: 15px;black ;border-radius: 20px;border-color: #123758; text-align: center;
             width: 100%;
             background: none;
             cursor: pointer;
             font-size: 15px;
             color: red;"></td>
     </tr></form>

     	<?php } ?>
	</table>
</center>

<?php

?>
</body>
</html>