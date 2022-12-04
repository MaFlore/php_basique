<?php
try{
    $bdd = new PDO('mysql:host=localhost; dbname=avion;','root','');
    
}catch(Exception $e)
{
    echo "Erreur";
}

$numClient=$_GET['numClient'];

$reponse=$bdd->prepare('DELETE FROM voler WHERE numClient=:numClient');
$reponse->execute([':numClient'=> $numClient]);

header('Location: /FICHIERPHP/projet/acceuil.php');