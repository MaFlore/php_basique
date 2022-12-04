<?php

try{
    $bdd = new PDO('mysql:host=localhost; dbname=camion;','root','');
    echo "Connexion Réussie";
}catch(Exception $e)
{
    echo "Erreur";
}
?>