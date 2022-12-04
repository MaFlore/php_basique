<?php
include_once('../models/crud_voyageur.class.php');
$a = new crud_voyageur();
$idVoyageur=$_GET['idVoyageur'];
try{
    $bdd = new PDO('mysql:host=localhost; dbname=projet;','root','');
    
}catch(Exception $e)
{
    echo "Erreur";
}
$reponse=$bdd->prepare('SELECT *  FROM voyageur WHERE idVoyageur=:idVoyageur');
$reponse->execute([':idVoyageur'=> $idVoyageur]);
$vol = $reponse->fetch(PDO::FETCH_OBJ);
    

if (isset($_POST['Modifier'])) {
    $idVoyageur=$_GET['idVoyageur'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $numVol = $_POST['numVol'];
    $nombreBagage = $_POST['nombreBagage'];

    $a->update('voyageur',['nom'=>$nom,'prenom'=>$prenom,'numVol'=>$numVol,'nombreBagage'=>$nombreBagage,'idVoyageur'=>$idVoyageur],"idVoyageur='$idVoyageur'");
    if ($a == true) {
        header('Location: /views/acceuil.php');
    }
}
?>
