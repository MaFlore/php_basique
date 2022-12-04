<?php 
    include_once('../models/crud_avion.class.php');
    $a = new crud_avion();
    $idAvion = $_GET['idAvion'];

    $a->delete('avion',"idAvion='$idAvion'");
    header('Location: /views/acceuil.php');
?>