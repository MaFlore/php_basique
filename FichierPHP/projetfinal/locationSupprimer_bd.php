<?php 
    include_once 'crudLocation.class.php';
    $a = new crudLocation();
    $idLocation = $_GET['idLocation'];

    $a->delete('laucation',"idLocation='$idLocation'");
    header('Location: /FICHIERPHP/projetfinal/liste_location.php');
?>