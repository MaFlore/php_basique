<?php
include_once('../models/crud_avion.class.php');
$a = new crud_avion();
try{
    $bdd = new PDO('mysql:host=localhost; dbname=projet;','root','');
    
}catch(Exception $e)
{
    echo "Erreur";
}

$idVoyageur=$_GET['idVoyageur'];

$reponse=$bdd->prepare('SELECT *  FROM Voyageur WHERE idVoyageur=:idVoyageur');
$reponse->execute([':idVoyageur'=> $idVoyageur]);
$vol = $reponse->fetch(PDO::FETCH_OBJ);

if (isset($_POST['Prendre'])) {
    $idVoyageur = $_POST['idVoyageur'];
    $nomAvion = $_POST['nomAvion'];
    $nombreVoyageur = $_POST['nombreVoyageur'];


    $a->insert('avion',['idVoyageur'=>$idVoyageur,'nomAvion'=>$nomAvion,'nombreVoyageur'=>$nombreVoyageur]);
    if ($a == true) {
        header('Location: /views/acceuil.php');
    }
}
?>