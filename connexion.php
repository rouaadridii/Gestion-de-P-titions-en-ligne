<!DOCTYPE html>
<html lang="en" class="cnx">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="http://127.0.0.1/projet_pweb_beta/images-projet/logo.ico"/>
	<title>Connexion</title>
</head>
<body>

  <!--------------------BARRE DE NAVIGATION-------------------->
  <nav>

    <img class="logo" src="http://127.0.0.1/projet_pweb/images-projet/nav_logo.png" alt="Institut supérieur de gestion">	
    <div class="onglets">
            <a href="acceuil.php">Acceuil</a>
            <a href="inscription.php">S'inscrire</a>
            <a href="Connexion.php">Se connecter</a>
            <a href="#contact">Contact</a>
            <img class="tn" src="https://cdn.countryflags.com/thumbs/tunisia/flag-400.png" alt="randonne tunisie">
        </div>

  </nav>	
 
  <!--------------------connexion-------------------->

  <form name="f" method="post" action="projet_login.php">

  	<div class="cnx-box">
      
      
      <h1>Connexion</h1>

      <div class="textbox">
        <img src="http://127.0.0.1/projet_pweb/images-projet/user.png"></img>
        <input type="text" placeholder="Email" name="email" id="email">
      </div>

     <div class="textbox">
       <img src="http://127.0.0.1/projet_pweb/images-projet/lock.png"></img>
       <input type="password" placeholder="Password" name="mdp" id="mdp">
     </div>

      

     <input type="submit" class="btn" value="Se connecter">
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
