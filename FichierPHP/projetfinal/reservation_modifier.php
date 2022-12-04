<?php
try{
    $bdd = new PDO('mysql:host=localhost; dbname=projetfinal;','root','');
    
}catch(Exception $e)
{
    echo "Erreur";
}
$idReservation=$_GET['idReservation'];

$reponse=$bdd->prepare('SELECT *  FROM reservation WHERE idReservation=:idReservation');
$reponse->execute([':idReservation'=> $idReservation]);
$input= $reponse->fetch(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Modifier Reservation</title>
    <link rel="stylesheet" href="style2.css">
    
 
</head>
<body>

    <div class="signup-box">
        <h1>Modifier Reservation</h1>
        <hr>
        <form method="post" action="reservationModifier_bd.php?idReservation=<?= $input->idReservation?>">
            <label for="dateReservation">Date Reservation</label>
            <input type="date" name="dateReservation" value="<?= $input->dateReservation?>"/>
            <label for="client">Client</label>
            <input type="text" name="client" value="<?= $input->client?>"/>
            <label for="specification">Spécification</label>
            <input type="text" name="specification" value="<?= $input->specification?>"/>
            <label for="dateDebut">Date de début</label>
            <input type="date" name="dateDebut" value="<?= $input->dateDebut?>"/>
            <label for="dateFin">Date de fin</label>
            <input type="date" name="dateFin" value="<?= $input->dateFin?>"/>
            <label for="delais">Delais Reservation</label>
            <input type="number" name="delais" value="<?= $input->delais?>"/>
            <label for="etat">Etat</label>
            <input type="text" name="etat" value="<?= $input->etat?>"/>
    
            <input style="width: 315px; height: 35px; margin-top: 20px; border: none; background-color: #49c1a2; color: white; font-size: 18px;" type="submit" name="Update" value="Update"/>
        </form>
    </div>

    <p><a href="liste_reservation.php">Revenir en arrière</a></p>
</body>
</html>