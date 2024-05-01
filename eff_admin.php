<?php
    try{
$con=new PDO('mysql:host=localhost;dbname=membres','root','');
}catch(Exception $e)
{
  die('erreur'.$e->getMessage());
}
$ef = $con->query("DELETE FROM administrateurs WHERE email='{$_POST['ma']}'");
if($ef === false){
   die('Erreur SQL');}
header('location: dashboard.php');	

?>