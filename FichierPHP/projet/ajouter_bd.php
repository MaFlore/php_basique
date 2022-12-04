<?php

try{
    $bdd = new PDO('mysql:host=localhost; dbname=avion;','root','');
    
}catch(Exception $e)
{
    echo "Erreur";
}
if (isset($_POST['Ajouter'])){
    $nom=$_POST['nom'];                                                                                       
    $prenom=$_POST['prenom'];
    $numVol=$_POST['numVol'];
    $nombeBagage=$_POST['nombeBagage'];

    $reponse=$bdd->prepare('INSERT INTO voler(nom, prenom, numVol, nombeBagage) VALUES(:nom, :prenom, :numVol, :nombeBagage)');
    $reponse->execute(array(
        'nom'=>$nom,
        'prenom'=>$prenom,
        'numVol'=>$numVol,
        'nombeBagage'=>$nombeBagage,
    ));
    header('Location: /FICHIERPHP/projet/acceuil.php');


}
?>
