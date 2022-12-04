<?php
include('crudLocation.class.php');
$a = new crudLocation();


if (isset($_POST['Update'])) {
    
    $idLocation=$_GET['idLocation'];
    $client = $_POST['client'];
    $tarif = $_POST['tarif'];
    $utilisation = $_POST['utilisation'];
    $numSerie = $_POST['numSerie'];
    $dateLocation = $_POST['dateLocation'];
    $nombreJour= $_POST['nombreJour'];
    $etat = $_POST['etat'];
    $facture = $_POST['facture'];

    $a->update('laucation',['client'=>$client,'tarif'=>$tarif,'utilisation'=>$utilisation,'numSerie'=>$numSerie,'dateLocation'=>$dateLocation,'nombreJour'=>$nombreJour, 'etat'=>$etat, 'facture'=>$facture, 'idLocation'=>$idLocation],"idLocation='$idLocation'");
    if($a==true){header('Location: /FICHIERPHP/projetfinal/liste_location.php');}
    
}
?>