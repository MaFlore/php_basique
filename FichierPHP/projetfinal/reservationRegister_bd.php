<?php
include ('crudReservation.class.php');
$b = new crudReservation();
if (isset($_POST['Reserver'])) {
    
    $dateReservation = $_POST['dateReservation'];
    $client = $_POST['client'];
    $specification = $_POST['specification'];
    $dateDebut = $_POST['dateDebut'];
    $dateFin = $_POST['dateFins'];
    $delais = $_POST['delais'];
    $etat = $_POST['etat'];

$b->insert('reservation',['dateReservation'=>$dateReservation,'client'=>$client,'specification'=>$specification,'dateDebut'=>$dateDebut, 'dateFin'=>$dateFin, 'delais'=>$delais, 'etat'=>$etat]);
if ($b == true) {
    header('Location: /FICHIERPHP/projetfinal/liste_client.php');
}
}


?>