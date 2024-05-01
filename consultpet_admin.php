<?php
    try{
$con=new PDO('mysql:host=localhost;dbname=membres','root','');
}catch(Exception $e)
{
  die('erreur'.$e->getMessage());
}
$query = $con->query("SELECT * FROM petitions ORDER BY nbp DESC");
if($query === false){
   die('Erreur SQL');}
   $petitions = $query->fetchAll(PDO::FETCH_ASSOC);

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

	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Merriweather:ital@1&family=Montserrat:wght@200&display=swap');
	</style>

	<a href="dashboard.php"><img src="http://127.0.0.1/projet_pweb/images-projet/retour.png" style="margin-left: 15px; margin-top: 30px;"></a>

	<form method="POST" action="filtrage.php">
		<div style="display: flex;flex-direction: wrap;">
		<input type="text" name="chercher_titre" id="chercher" placeholder="Chercher Pétition" style="margin-left: 1030px;
		                              border-radius: 20px;
		                              border-color: #123758;">
		<input type="submit" name="cher" value="" style="                         margin-left: 10px;
		                             border-radius: 10px;
		                             border-color: #123758;
		                             width: 30px;
		                             background-image: url('http://127.0.0.1/projet_pweb/images-projet/chercher.png');
		                             background-repeat: no-repeat;
		                             ">
		</div>

	</form>

	<div style="display: flex;flex-direction: wrap;">
	<ul>

		<?php
     	   foreach($petitions as $petitions){
     	    ?>
		<form action="eff_peti_admin.php" method="POST"><div style="background-color: #2d7272;
		            border-radius: 30px;
		            margin-left: 350px;
		            box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, .8);
		            list-style: none;
		            text-align: center;
		            color: lightgray;
		            width: 500px;">
			<li>Titre : <input style="background: none; border:0px;color: lightgray;font-size: 15px;" type="text" name="t" id="t" value="<?php echo $petitions['titre'] ; ?>"></li>
			<li>Description : <?php echo $petitions['description'] ; ?></li>
			<li>Email : <?php echo $petitions['email'] ; ?></li>
			<li> Role : <?php echo $petitions['role'] ; ?></li>
			<li>Nombre pour : <?php echo $petitions['nbp'] ; ?> </li>
			<li>Nombre contre : <?php echo $petitions['nbc'] ; ?> </li>
			<li><input type="submit" name="sup" value="X" style="margin-bottom: 15px;black ;border-radius: 20px;border-color: #123758; text-align: center;
             width: 10%;
             background: none;
             cursor: pointer;
             margin-left: 300px;
             margin-right: 5px;
             margin-bottom: 10px;
             font-size: 15px;
             color: red;"><font color="#123758">Effacer Pétition</font></li>
		</div></form>	
		<br>
		
		<?php } ?>
	</ul>

	
</div>


</body>
</html>
