<!DOCTYPE html>
<html lang="en" class="inscri">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="http://127.0.0.1/projet_pweb/images-projet/logo.ico"/>
	
	<title>Inscription</title>
</head>
<body>
<script language="javascript" src="projet.js"></script>
  <!--------------------BARRE DE NAVIGATION-------------------->
  <nav>

    <img class="logo" src="http://127.0.0.1/projet_pweb/images-projet/nav_logo.png" alt="Institut supérieur de gestion">	
    <div class="onglets">
            <a href="acceuil.php">Acceuil</a>
            <a href="inscription.php">S'inscrire</a>
            <a href="connexion.php">Se connecter</a>
            <a href="#contact">Contact</a>
            <img class="tn" src="https://cdn.countryflags.com/thumbs/tunisia/flag-400.png" alt="randonne tunisie">
        </div>

  </nav>	
 
  <!--------------------INSCRIPTION-------------------->
 <form name="f" method="POST" action="projet_inscri.php" onsubmit="return verif();">

  	<div class="inscri-box">

      <h1>Inscription</h1>
      <p style="color: #400000; font-weight: bold; font-size: 18px;" name="erreur" id="erreur"></p>


      <div class="textbox">
      	<p>Nom</p>
        <input type="text" placeholder="Username" id="nom" name="nom">
      </div>

     <div class="textbox">
     	<p>Prénom</p>
        <input type="text" placeholder="family name" id="pn" name="pn">
     </div>

     <div class="textbox">
     	<p>Vous êtes</p>
        <input type="radio" name="genre"  id="prof" value="prof">Prof
        <input type="radio" name="genre"  id="etud" value="etud">Etudiant 
        <input type="radio" name="genre"  id="admin" value="admin">administration

     </div>

     <div class="textbox">
      <p>Email</p>
      <input type="email" placeholder="email" id="email" name="email">
     </div>

     <div class="textbox">
      <p>Mot De Passe</p>
      <input type="password" placeholder="password" id="mdp" name="mdp">
     </div>

     <div class="textbox">
      <p>Vérifier Mot De Passe</p>
      <input type="password" placeholder="password" id="mdp2">
     </div>

     <center> 
     <table>
	  <tr>
         <td><input type="reset" class="btn" value="Annuler"></td>
         <td><input type="submit" name="submit" id="inscri" class="btn" value="S'inscrire"></td>
       </tr>
     </table>
     </center>

    </div>

  </form>


<!---------------------FOOTER-------------------->
  <footer id="contact">
  	
  	<div class="footer-content">
  		<h3>Institut supérieur de gestion</h3>
  		
  			<p>Fax: +216 71 588 553   |  direction@isg.rnu.tn</p>
  		
  	    <p style="margin-left:1000px;margin-bottom:5px;">&copy; 2022, Pétition en ligne</p>
  	</div>

  </footer>
</body>
</html>
