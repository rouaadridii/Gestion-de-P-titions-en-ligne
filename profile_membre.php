<?php
 session_start();
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="http://127.0.0.1/projet_pweb/images-projet/logo.ico"/>
	<link rel="stylesheet" type="text/css" href="membre.css">
	<title>Profile</title>
</head>
<body>
<script language="javascript" src="projet.js"></script>
	<!----------------BARRE DE NAVIGATION---------------->
     <?php include 'header2.php';?>  

    <!----------------PROFILE MEMBRE--------------------->	
    <div class="box">

        <div class="side-card">

        	<img src="http://127.0.0.1/projet_pweb/images-projet/member.png">

        	<div class="mini-menu">
        		<p>
        			<?php echo $_SESSION['email']; ?>	
        		</p>

        		
        		  <a href="liste_petitions.php">Consulter pétition</a><br><br>
        		  <a href="#creation">Créer pétition</a><br><br>
        		  <a href="modif_mdp.php">Modifier mot de passe</a><br><br>
        		  <a href="session-end.php">Se déconnecter</a>
        		 

        	</div>
    	
         </div>

        <div class="main-card">
        	
        	<h1>Détails</h1>

        	<p>Email : &nbsp&nbsp <?php echo $_SESSION['email'];?></p>
        	<hr>

        	<div class="mot">

        	 <div class="mm">Mot de passe : &nbsp&nbsp </div>
        	 <div class="ps"><?php echo $_SESSION['mdp'];?> &nbsp&nbsp&nbsp&nbsp </div><a href="modif_mdp.php" style="text-decoration: none; color: rgb(0, 0, 0,0.5);">modifier mot de passe</a>
        	
             </div>

             <hr>
        </div>

     </div>

    <div class="main-card2" id="creation">
        <h1 style="color: #202020;
                   margin-left: 30px;
                   margin-top:30px;
                   font-weight: bold;
                   font-size: 50px;
                   margin-bottom: 30px;">Créer Pétition</h1>

        <form class="fm" method="POST" action="inserer_peti.php" onsubmit="return verif3()" style="background: #123857;
                                padding: 3rem;
                                height: 250px;
                                width: 1000px;
                                margin-left: 160px;
                                border-radius: 20px;
                                box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, .2);">
            <p style="color: #400000; font-weight: bold; font-size: 18px; margin-bottom: 4px;" name="erreur" id="erreur"></p>

            <div style="display: flex;flex-direction: wrap;">
              <p style="margin-right: 20px;
                        margin-left: 80px;
                        font-family: 'Merriweather', serif;
                        font-size: 20px;
                        color: white;">Titre :</p>

              <input  type="text" name="titre" id="titre" placeholder="titre de la pétition" style="border: none;
                   background: lightgray;
                   width: 200px;
                   margin-left: 68px;
                   border-radius: 50px;
                   color: black;
                  ">
             </div>

             <div style="display: flex;flex-direction: wrap;">
              <p style="margin-right: 20px;
                        margin-left: 80px;
                        margin-top: 30px;
                        font-family: 'Merriweather', serif;
                        font-size: 20px;
                        color: white;">Déscription :</p>

              <textarea id="des" name="des" rows="4" cols="50" style="border: none;
                   background: lightgray;
                   width: 400px;
                   height: 65px;
                   margin-top: 30px;
                   border-radius: 50px;
                   color: black;">
                  
              </textarea>

             </div>

             <input type="submit" name="ajout" value="Ajouter" style="border: none;
                   background: #48b7b6;
                   width: 150px;
                   height: 25px;
                   margin-top: 5px;
                   margin-left: 710px;
                   border-radius: 50px;
                   color: #404040;
                   font-weight: bold;
                   font-family: 'Merriweather', serif;
                   cursor: pointer;">
    
         </form>

     </div>

	<!----------------footer---------------->
   <footer id="contact">
    
    <div class="footer-content">
        <h3>Institut supérieur de gestion</h3>
        <p>41, Rue de la Liberté, Cité Bouchoucha 2000 Le Bardo,Tunis -TUNISIE</p>
        <ul class="socials">
            <li><a href="https://www.facebook.com/isgtunis.officiel/"><img src="http://127.0.0.1/projet_pweb/images-projet/facebook.png"></a></li>
            <li><a href="https://www.linkedin.com/school/institutsupérieurdegestiondetunis/?originalSubdomain=fr"><img src="http://127.0.0.1/projet_pweb/images-projet/linkedin.png"></li>
            <li><a href="mailto:Direction@isg.rnu.tn"><img src="http://127.0.0.1/projet_pweb/images-projet//gm.png"></a></li>
        </ul>
        <p style="margin-left:1000px;margin-bottom:5px;">&copy; 2022, Copyrighted</p>
    </div>

  </footer>    

</body>
</html>
