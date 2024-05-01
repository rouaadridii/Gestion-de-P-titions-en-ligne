<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="http://127.0.0.1/projet_pweb/images-projet/logo.ico"/>
	<title>Pétition ISGT</title>
</head>

<body id="acceuil">

<!--------------------BARRE DE NAVIGATION-------------------->
  <nav>

    <img class="logo" src="http://127.0.0.1/projet_pweb/images-projet/nav_logo.png" alt="Institut supérieur de gestion">	
    <div class="onglets">
            <a href="#ac">Acceuil</a>
            <a href="inscription.php">S'inscrire</a>
            <a href="connexion.php">Se connecter</a>
            <a href="#contact">Contact</a>
            <img class="tn" src="https://cdn.countryflags.com/thumbs/tunisia/flag-400.png" alt="randonne tunisie">
        </div>

  </nav>	

<!---------------------HEADER-------------------->
  <header>

  	<div class="container">
  		<img src="http://127.0.0.1/projet_pweb/images-projet/couverture.png" alt="ISGT">
  	    <div class="titre">
  	    	<h1>Pétition en ligne</h1>
  	    </div>
        <div class="sous-titre">
          <h4>Together for a better change</h4>
        </div>
  	    <div class="des">
  	    	<p>Ce site permet de lancer des pétitions en ligne au sein de l'institut supérieur de gestion ISGT <br>qui ont pour but la collection de plus grand nombre de signatures possibles sur une demande particulière.</p>
  	    </div>
  </header>

<!---------------------DESCRIPTION DETAILLE-------------------->

  <div class="descp" id="descp">
    <h1>Statistiques des pétitions </h1>
  </div>

  <div class="type-descp">

  	<div class="stat">+250<p>Pétitions en ligne</p></div>
  	<div class="outer">
     <div class="inner">
       <div id="number">65%<p>ont atteint leurs objectifs</p></div>
     </div> 
    </div>

    <svg class="s" xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
         <defs>
            <linearGradient id="GradientColor">
               <stop offset="0%" stop-color="#123857" />
               <stop offset="100%" stop-color="#48b7b6" />
            </linearGradient>
         </defs>
         <circle class="c1" cx="80" cy="80" r="70" stroke-linecap="round" />
 </svg>

 <div class="outer">
     <div class="inner">
       <div id="number">35%<p>n'ont pas pu atteindre leurs objectifs</p></div>
     </div> 
    </div>

    <svg class="s2" xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
         <defs>
            <linearGradient id="GradientColor">
               <stop offset="0%" stop-color="#123857" />
               <stop offset="100%" stop-color="#48b7b6" />
            </linearGradient>
         </defs>
         <circle class="c2" cx="80" cy="80" r="70" stroke-linecap="round" />
 </svg>
  	
  </div>



 
<!---------------------FOOTER-------------------->
<?php include 'footer.php' ?>
</body>
</html>