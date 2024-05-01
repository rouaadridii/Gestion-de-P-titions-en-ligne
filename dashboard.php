<!--<?php session_start(); 
try{
$con=new PDO('mysql:host=localhost;dbname=membres','root','');
}catch(Exception $e)
{
  die('erreur'.$e->getMessage());
}
$query = $con->query("SELECT email,mdp FROM administrateurs");
if($query === false){
   die('Erreur SQL');}
   $ad = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="http://127.0.0.1/projet_pweb/admin.css">
	<link rel="shortcut icon" href="http://127.0.0.1/projet_pweb/images-projet/logo.ico"/>
	<title>Admin</title>
</head>
<body>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Merriweather:ital@1&family=Montserrat:wght@200&display=swap');
	</style>
	

	<div class="globale">

		<div class="mini-box1" >
			<a href=""><img src="http://127.0.0.1/projet_pweb/images-projet/user.png"></a>
			<a href="" style="color:white;text-decoration: none;font-size: 30px;margin-left: 30px;margin-right: 5px;"><?php echo $_SESSION['admin']; ?> :</a>
			<a href=""style="color:white;text-decoration: none;font-size: 20px;margin-right: 135px;">Administrateur</a>
			<a href="session-end.php"><img src="http://127.0.0.1/projet_pweb/images-projet/se-deconnecter.png"></a> 
		</div>

		<div class="mini-box2" style="font-family: 'Merriweather', serif;
		color: white;
		font-size: 25px;">
			<font style="margin-left: 30px;"><a href="stat.php" style="color:white;text-decoration: none;">Statistiques</a></font>
		</div>

		<div class="mini-box3" style="
		font-family: 'Merriweather', serif;
		color: white;
		font-size: 25px;">
			<center><a href="ajout_admin.php" style="color:white;text-decoration: none;">Ajouter Admin</a></center>
		</div>
		
	</div>

    
    <div class="g">
	<div class="globale2" style="
	font-family: 'Merriweather', serif;
	color: white;
	font-size: 22px;">

		<div class="box">
			<center><a href="affmem_admin.php" style="color:white;text-decoration: none;">Consulter Membres</a></center>
		</div>

		<div class="box">
			<center><a href="consultpet_admin.php" style="color:white;text-decoration: none;">Consulter Pétitions</a></center>
		</div>
	</div>


	<div class="globale3">

		<div  style="background: #123857;
                                padding: 3rem;
                                height: 160px;
                                width: 450px;
                                margin-left: 30px;
                                margin-top: 20px;
                                border-radius: 20px;
                                box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, .2);">
               <center><table border="1" cellspacing="0" style=" border-color: #48b7b6;">
		<tr style="color: #48b7b6; text-align: center;">
			<td>Email</td>
			<td>Mot de passe</td>
		</tr>
		
		<?php
     	   foreach($ad as $ad){
     	    ?>
     	<form method="POST" action="eff_admin.php">
     	<tr style="color: lightgray; text-align: center;">
     	<td><input style="background: none; border:0px;color: lightgray;" value="<?php echo $ad['email'] ; ?>" name="ma" id="ma"></td>
     	<td><?php echo $ad['mdp'] ; ?></td>
     	<td><input type="submit" name="sup" value="X" style="margin-bottom: 15px;black ;border-radius: 20px;border-color: #123758; text-align: center;
             width: 100%;
             background: none;
             cursor: pointer;
             font-size: 15px;
             color: red;"></td>
     </tr></form>

     	<?php } ?>
	</table></center>
			
		</div>

		

		
	</div>

<div style="background: #123857;
            padding: 3rem;
            height: 160px;
            width: 220px;
            margin-left: 30px;
            margin-top: 20px;
            border-radius: 20px;
            box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, .2);">
		<font style="text-align: center; color:#48b7b6;font-size: 23px;margin-top:20px;">+10 Pétitions en ligne <br><br>65% ont atteint leurs objectifs<br><br>35% n'ont pas pu atteindre leurs objectifs</font>
		</div>
</div>

<div style="display: flex;
	flex-direction: wrap;">

	<div  style="background: #123857;
                 padding: 3rem;
                 height: 160px;
                 width: 190px;
                margin-left: 30px;
                margin-top: 20px;
                border-radius: 20px;
                box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, .2);">

        <img src="http://127.0.0.1/projet_pweb/images-projet/Statistiques.png" style="width: 98%;">

                </div>
	

   
   <div  style="background: #123857;
                 padding: 3rem;
                 height: 160px;
                 width: 190px;
                margin-left: 30px;
                margin-top: 20px;
                border-radius: 20px;
                box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, .2);">
                	
        <div style="height: 130px; 
		            width: 130px; 
		            background-color: none;
		            border: 7px solid #48b7b6;
		            border-radius: 50%;
		            margin-left:22px;
		            margin-top: 8px; ">
            <p style="color: white;font-size: 28px; margin-top:30px; margin-left:20px ;">+10 Pétitions</p>
        </div>

                </div>
	


   <div  style="background: #123857;
                 padding: 3rem;
                 height: 160px;
                 width: 190px;
                margin-left: 30px;
                margin-top: 20px;
                border-radius: 20px;
                box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, .2);">
                	
                <div style="height: 130px; 
		            width: 130px; 
		            background-color: none;
		            border: 7px solid #48b7b6;
		            border-right-color: #123758;
		            border-radius: 50%;
		            margin-left:22px;
		            margin-top: 8px; ">
            <p style="color: white;font-size: 28px; margin-top:40px; margin-left:45px ;">65%  <br>+++</p>
        </div>	

                </div>

    <div  style="background: #123857;
                 padding: 3rem;
                 height: 160px;
                 width: 180px;
                margin-left: 30px;
                margin-top: 20px;
                border-radius: 20px;
                box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, .2);">
                	
                 <div style="height: 130px; 
		            width: 130px; 
		            background-color: none;
		            border: 7px solid #48b7b6;
		            border-right-color: #123758;
		            border-bottom-color: #123758;
		            border-radius: 50%;
		            margin-left:22px;
		            margin-top: 8px; ">
            <p style="color: white;font-size: 28px; margin-top:40px; margin-left:45px ;">35%  <br>---</p>
        </div>	

                </div>
	
</div>

</body>
</html>-->

<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="http://127.0.0.1/projet_pweb/images-projet/logo.ico"/>
	<title>Admin</title>
</head>

<body>
	
	<iframe title="dashboard_pweb" width="1140" height="541.25" src="https://app.powerbi.com/reportEmbed?reportId=80bd7243-9489-4813-b2dc-2d7942c4e9d9&autoAuth=true&ctid=dbd6664d-4eb9-46eb-99d8-5c43ba153c61&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLXdlc3QtZXVyb3BlLXJlZGlyZWN0LmFuYWx5c2lzLndpbmRvd3MubmV0LyJ9" frameborder="0" allowFullScreen="true"></iframe>



</body>
</html>