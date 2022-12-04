<?php 
    include_once '../models/crud_voyageur.class.php';
    $a = new crud_voyageur();
    $idVoyageur = $_GET['idVoyageur'];

    $a->delete('voyageur',"idVoyageur='$idVoyageur'");
    header('Location: /views/acceuil.php');
?>