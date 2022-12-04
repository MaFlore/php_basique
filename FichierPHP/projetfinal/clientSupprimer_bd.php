<?php 
    include_once 'crudClient.class.php';
    $a = new crudClient();
    $idClient = $_GET['idClient'];

    $a->delete('client',"idClient='$idClient'");
    header('Location: /FICHIERPHP/projetfinal/liste_client.php');
?>