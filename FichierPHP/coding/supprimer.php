<?php 
    include_once 'Crud_voyageur.class.php';
    $a = new Crud_voyageur();
    $idVoyageur = $_GET['idVoyageur'];

    $a->delete('voyageur',"idVoyageur='$idVoyageur'");
    header('Location: /FICHIERPHP/Coding/acceuil.php');
?>