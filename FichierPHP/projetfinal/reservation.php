<?php
    $nom = $_GET['nomClient'];
    $prenom = $_GET['prenomClient'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Reservation</title>
    <link rel="stylesheet" href="style2.css">
    
 
</head>
<body>

    <div class="signup-box">
        <h1>Reservation</h1>
        <hr>
        <form method="post" action="reservationRegister_bd.php">
            <label for="dateReservation">Date Reservation</label>
            <input type="date" name="dateReservation"/>
            <label for="client">Client</label>
            <input type="text" name="client" value="<?=$_GET['nomClient'].' '.$_GET['prenomClient']?>"/>
            <label for="specification">Spécification</label>
            <input type="text" name="specification"/>
            <label for="dateDebut">Date de début</label>
            <input type="date" name="dateDebut"/>
            <label for="dateFin">Date de fin</label>
            <input type="date" name="dateFin"/>
            <label for="delais">Delais Reservation</label>
            <input type="number" name="delais"/>
            <label for="etat">Etat</label>
            <input type="text" name="etat"/>
    
            <input style="width: 315px; height: 35px; margin-top: 20px; border: none; background-color: #49c1a2; color: white; font-size: 18px;" type="submit" name="Reserver" value="Reserver"/>
        </form>
    </div>

    <p><a href="liste_client.php">Revenir en arrière</a></p>
</body>
</html>