<?php
include('crudReservation.class.php');
$a = new crudReservation();


if (isset($_POST['Update'])) {
    
    $idReservation=$_GET['idReservation'];
    $dateReservation = $_POST['dateReservation'];
    $client = $_POST['client'];
    $specification = $_POST['specification'];
    $dateDebut = $_POST['dateDebut'];
    $dateFin = $_POST['dateFin'];
    $delais= $_POST['delais'];
    $etat = $_POST['etat'];

    $a->update('reservation',['dateReservation'=>$dateReservation,'client'=>$client,'specification'=>$specification,'dateDebut'=>$dateDebut,'dateFin'=>$dateFin,'delais'=>$delais, 'etat'=>$etat, 'idReservation'=>$idReservation],"idReservation='$idReservation'");
    if($a==true){header('Location: /FICHIERPHP/projetfinal/liste_reservation.php');}
    
}
?>