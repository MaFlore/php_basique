<?php

include_once('../models/crud_voyageur.class.php');
$a = new crud_voyageur();

            
if (isset($_POST['Ajouter'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $numVol = $_POST['numVol'];
    $nombreBagage = $_POST['nombreBagage'];


    $a->insert('voyageur',['nom'=>$nom,'prenom'=>$prenom,'numVol'=>$numVol,'nombreBagage'=>$nombreBagage]);
    if ($a == true) {
        header('Location: /views/acceuil.php');
    }
}
?>