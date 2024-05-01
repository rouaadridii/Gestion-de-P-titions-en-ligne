<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="membre.css">
</head>
<body>
	<nav>

    <img class="logo" src="http://127.0.0.1/projet_pweb/images-projet/logo-blanc.svg" alt="Institut supérieur de gestion">	
    <div class="onglets">
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
            <a href="profile_membre.php">
            <?php echo $_SESSION['email']; ?></a>
            <a href="#contact">Contact</a>
            <a href="session-end.php"><img src="http://127.0.0.1/projet_pweb/images-projet/se-deconnecter.png"></a>    
        </div>

  </nav>	
</body>
</html>