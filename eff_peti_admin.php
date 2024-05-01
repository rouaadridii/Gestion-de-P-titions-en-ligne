<?php
    try{
$con=new PDO('mysql:host=localhost;dbname=membres','root','');
}catch(Exception $e)
{
  die('erreur'.$e->getMessage());
}
$ef = $con->query("DELETE FROM petitions WHERE titre='{$_POST['t']}'");
if($ef === false){
   die('Erreur SQL');}
header('location: consultpet_admin.php');	

?>