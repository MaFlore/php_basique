<?php

try{
    $bdd = new PDO('mysql:host=localhost; dbname=projet;','root','');
    
}catch(Exception $e)
{
    echo "Erreur";
}
if (isset($_POST['Prendre'])){
    $idVoyageur=$_POST['idVoyageur'];
    $nomAvion=$_POST['nomAvion'];                                                                                       
    $nombreVoyageur=$_POST['nombreVoyageur'];
       
    $requete=$bdd->prepare('INSERT INTO Avion(idVoyageur, nomAvion, nombreVoyageur) VALUES(:idVoyageur, :nomAvion, :nombreVoyageur)');
    $requete->execute(array(
        'idVoyageur'=>$idVoyageur,
        'nomAvion'=>$nomAvion,
        'nombreVoyageur'=>$nombreVoyageur,
    ));
    header('Location: /FICHIERPHP/coding/acceuil.php');


}
?>
