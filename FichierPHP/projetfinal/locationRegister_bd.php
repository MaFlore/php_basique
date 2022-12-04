<?php
include ('crudLocation.class.php');
$a = new crudLocation();
if (isset($_POST['Louer'])) {
    
    $client = $_POST['client'];
    $tarif = $_POST['tarif'];
    $utilisation = $_POST['utilisation'];
    $numSerie = $_POST['numSerie'];
    $dateLocation = $_POST['dateLocation'];
    $nombreJour = $_POST['nombreJour'];
    $etat = $_POST['etat'];
    $facture = $_POST['facture'];


$a->insert('laucation',['client'=>$client,'tarif'=>$tarif,'utilisation'=>$utilisation,'numSerie'=>$numSerie, 'dateLocation'=>$dateLocation, 'nombreJour'=>$nombreJour, 'etat'=>$etat,'facture'=>$facture]);
if ($a == true) {
    header('Location: /FICHIERPHP/projetfinal/liste_client.php');
}
}


?>