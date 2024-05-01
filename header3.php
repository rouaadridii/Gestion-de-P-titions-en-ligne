<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav>
    <img class="logo" src="http://127.0.0.1/projet_pweb/images-projet/logo-blanc.svg" alt="Institut supérieur de gestion">  
    <div class="onglets">
            <a href=""></a>
            <a href=""></a>
            <a href="profile_membre.php">Créer pétition</a>
            <a href="profile_membre.php">
            <?php echo $_SESSION['email']; ?></a>
            <a href="#contact">Contact</a>
            <a href="session-end.php"><img src="http://127.0.0.1/projet_pweb/images-projet/se-deconnecter.png"></a>    
        </div>
  </nav>   

<style type="text/css">
  nav{
    
    width: 100%;
    display: flex;/*aligner tous les elements*/
    flex-direction: wrap;
    align-items: center;
    justify-content: center;
    font-family: 'Merriweather', serif;
    background-color:#123857;
}

nav .onglets{
    margin-top: 3px;
    margin-left: 350px;
    white-space: nowrap; /*empeche le retour en ligne*/
}

nav .onglets a{
    text-align: center;
    text-decoration: none;
    color:#dfdfdf;
    margin-right: 20px; 
    font-size:25px;
    cursor: pointer;
}

.logo{
    width:250px;
    position: left; 
}  
</style> 
</body>
</html>