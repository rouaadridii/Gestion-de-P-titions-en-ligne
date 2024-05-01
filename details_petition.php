<?php
include 'session-valeurs.php';

$_SESSION['titre']= $_POST['tit'];

$query = $con->query("SELECT nom,prenom,titre,email,description,role,nbp,nbc FROM petitions WHERE titre='{$_POST['tit']}'");
if($query === false){
   die('Erreur SQL');}
   $personnes = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style_details.css">
	<link rel="shortcut icon" href="http://127.0.0.1/projet_pweb/images-projet/logo.ico"/>
	<title>Détails pétition</title>
</head>
<body>
    <style type="text/css">
        ul{
            text-align: center;
            margin-top: 30px;
            margin-bottom: 50px;
            margin-left: 370px;
            width: 600px;
            height: 35   0px;
           border-radius:50px;
           background-color: lightgray;
           color: black;
        }

        li{
            margin-top: 10px;
            font-family: 'Merriweather', serif;
        } 
    </style>
	
		<!----------------BARRE DE NAVIGATION------------->
     <?php include 'header2.php'; ?>
     <a class="retour" href="liste_petitions.php"><img src="http://127.0.0.1/projet_pweb/images-projet/retour.png"></a>

     <!----------------Details------------->
       
        <ul>

          <?php
     	   foreach($personnes as $personne){
     	    ?>
     	    
            <li>
     		 Titre: &nbsp&nbsp <?php echo $personne['titre'] ;?><br><br>
            </li>

     		<li>
            Editeur: &nbsp&nbsp<?php echo $personne['nom'] ; ?>
            <?php echo $personne['prenom'] ;?>
            <br><br>   
            </li>

     		<li>
             Email: &nbsp&nbsp<?php echo $personne['email'] ; ?><br><br>
            </li>

     		<li>
             Description: &nbsp&nbsp<?php echo $personne['description'] ;?><br><br>
            </li>

            <li>
             profession: &nbsp&nbsp<?php echo $personne['role'] ;?><br><br>
            </li>

            <li>
             Nombre de vote pour:&nbsp&nbsp <?php echo $personne['nbp'] ;?><br><br>
             
            </li>

            <li>
             Nombre de vote contre: &nbsp&nbsp<?php echo $personne['nbc'] ;?><br><br>
            </li>
            <li>But: 500 personnes</li>
         <?php } ?>

         <div style="display: flex; margin-left: 200px;">

         <form method="POST" action="majp.php">
            <input type="submit" name="btn" value="Pour" style="text-align: center;
                   width: 100px;
                   background-color: #48b7b6;
                   border-radius: 20px;
                   color: #404040;
                   padding: 2px;
                   font-size: 18px;
                   cursor: pointer;
                   margin: 3px 0;
                   font-family: 'Merriweather', serif;">
        </form>
        <form method="POST" action="majc.php">
            <input type="submit" name="btn2" value="contre" style="text-align: center;
                    width: 100px;
                    background-color: #48b7b6;
                    border-radius: 20px;
                    color: #404040;
                    padding: 2px;
                    font-size: 18px;
                    cursor: pointer;
                    margin: 3px 0;
                    font-family: 'Merriweather', serif;">
        </form>
        </div>

        </ul>

        
        <!-----------AFFICHAGE ESPACE COMMENTAIRE--->
        <h2 style="margin-left: 20px;margin-bottom: 13px;color: #123857;">Espace Commentaires</h2>
       <?php $com = $con->query("SELECT  email,commentaire FROM commentaires WHERE titre='{$_POST['tit']}'");
     if($com === false){
       die('Erreur SQL');}
      $af = $com->fetchAll(PDO::FETCH_ASSOC);?>
        <table style="margin-left: 40px;margin-bottom: 25px;color: black; font-weight: bold;">
            <?php
           foreach($af as $af){
            ?>
            <tr>
                <td>Utilisateur: &nbsp</td>
                <td><?php echo $af['email'] ;?>&nbsp&nbsp&nbsp&nbsp</td>
                <td><?php echo $af['commentaire'] ;?></td>
            </tr>

             <?php } ?>   
        </table>


        <!-----------ESPACE COMMENTAIRE--->
      <form method="POST" action="ajout_commentaire.php" >
        <div style="margin-left: 40px;">
         <input style="border:0px;color: black;" type="text" value="<?php echo $_SESSION['email']; ?>" disabled>
         <input style="border:0px;" placeholder="Votre commentaire" type="text" name="cmt" id="cmt" >
         <input type="submit" name="aj" id="aj" value="Ajouter" style="text-align: center;
                    width: 90px;
                    border-radius: 20px;
                    color: #404040;
                    padding: 2px;
                    font-size: 14px;
                    cursor: pointer;
                    border-color: #48b7b6;
                    margin: 3px 0;
                    font-family: 'Merriweather', serif;">
        </div>
          
      </form>




     <!----------------footer---------->
     <footer id="contact">
    
    <div class="footer-content">
        <h3>Institut supérieur de gestion</h3>
        <p>41, Rue de la Liberté, Cité Bouchoucha 2000 Le Bardo,Tunis -TUNISIE</p>
        <p style="margin-left:1000px;margin-bottom:5px;">&copy; 2022, Copyrighted</p>
    </div>

  </footer> 
</body>
</html>