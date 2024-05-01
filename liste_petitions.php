<?php
include 'session-valeurs.php';
$query = $con->query("SELECT titre,email FROM petitions WHERE role='{$_SESSION['role']}'");
if($query === false){
   die('Erreur SQL');}
   $personnes = $query->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="petitions.css">
	<link rel="shortcut icon" href="http://127.0.0.1/projet_pweb/images-projet/logo.ico"/>
	<title>Pétitions</title>
</head>
<body>

	<!----------------BARRE DE NAVIGATION-------------- -->
     <?php include 'header3.php'; ?>

     <!----------------AFFICHAGE---------------->
     

          <?php
     	   foreach($personnes as $personne){
     	    ?>
     	    
          <div class="aff">
            <form method="POST" action="details_petition.php">
            <div class="liste">

              <div class="peti">
                <input type="text" name="tit" id="tit"  value="<?php echo $personne['titre'] ; ?>">
              </div>

              <div class="sep"></div>

              <div class="peti">
               <input type="text" name="mm" id="mm" disabled value="<?php echo $personne['email'] ; ?>">
              </div>

              <div></div>

              <div>
               <input type="submit" name="submit" id="vp" class="btn" value="Voir Plus">
              </div>

            </div>
            </form>
          </div>

     	  

     <?php } ?>

     
<?php include 'footer2.php';
?>
</body>
</html>