<?php
    try{
$con=new PDO('mysql:host=localhost;dbname=membres','root','');
}catch(Exception $e)
{
  die('erreur'.$e->getMessage());
}
$query = $con->query("SELECT titre,nbp,nbc FROM petitions");
if($query === false){
   die('Erreur SQL');}
   $st = $query->fetchAll(PDO::FETCH_ASSOC);

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

<!---------------------------------------------->

<div style="margin-left: 70px;color: lightgray;font-family: 'Merriweather', serif;">
	<?php
     	   foreach($st as $st){
     	    ?><?php echo $st['titre'] ;?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php $stp=round((100*$st['nbp'])/500); echo "Pour  ".$stp."%"; ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php $stc=round((100*$st['nbc'])/500); echo "Contre  ".$stc."%"; ?>
	<div style="background-color: white;
	            border-radius: 20px;
	            width: 300px;
	            height: 20px;
	            margin-top: 30px;
	            margin-left: 70px;">
	            <div style="background-color: blue;
	            border-radius: 20px;
	            width: 150px;
	            height: 20px;
	            margin-top: 30px;"></div>

	            </div>
	

<?php } ?>
</div>

</body>


</html>