<?php 
    include_once 'crudReservation.class.php';
    $a = new crudReservation();
    $idReservation = $_GET['idReservation'];

    $a->delete('reservation',"idReservation='$idReservation'");
    header('Location: /FICHIERPHP/projetfinal/liste_reservation.php');
?>