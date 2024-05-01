<?php
    try{
$con=new PDO('mysql:host=localhost;dbname=membres','root','');
}catch(Exception $e)
{
  die('erreur'.$e->getMessage());
}
$ef = $con->query("DELETE FROM utilisateurs WHERE email='{$_POST['m']}'");
if($ef === false){
   die('Erreur SQL');}
header('location: affmem_admin.php');	

?>