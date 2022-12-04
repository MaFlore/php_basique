<?php 
    include_once 'Crud_avion.class.php';
    $a = new Crud_avion();
    $idAvion = $_GET['idAvion'];

    $a->delete('avion',"idAvion='$idAvion'");
    header('Location: /FICHIERPHP/Coding/acceuil.php');
?>