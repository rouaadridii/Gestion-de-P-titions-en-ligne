<?php
include 'session-valeurs.php';

$query = $con->query("UPDATE petitions SET nbp=nbp+1
	                 WHERE titre='{$_SESSION['titre']}'");
header('location: liste_petitions.php');
?>