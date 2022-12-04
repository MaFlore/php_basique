<html>
<head>
    <meta charset="utf-8"/>
    <title>Liste client</title>
    <link rel="stylesheet" href="style4.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="bod" style="background-color:mediumaquamarine">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="acceuil.php" id="clas2">FLORE AUTHENTIQUE</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="acceuil.php" id="clas2"><span class="glyphicon glyphicon-home"></span></a></li>
      <li class="text-center"><a href="liste_client.php" id="class2" style="font-size: 20px; "><span class="glyphicon glyphicon-th-list"></span> Afficher la liste des clients</a></li>
      <li class="text-center"><a href="liste_location.php" id="class2" style="font-size: 20px; "><span class="glyphicon glyphicon-th-list"></span> Afficher la liste des locations</a>
      <li class="text-center"><a href="liste_reservation.php" id="class2" style="font-size: 20px; "><span class="glyphicon glyphicon-th-list"></span> Afficher la liste des réservations</a>

    </ul>
  </div>
</nav>
<center>
<?php

try{
    $bdd = new PDO('mysql:host=localhost; dbname=projetfinal;','root','');
    
}catch(Exception $e)
{
    echo "Erreur";
}
?>
<div class="text-center">
<a href="reservation_print.php" class="btn btn-primary">Imprimer la liste des réservations</a>
</div>
<h2 class="clas1" style="font-size: 23px;"><u>LISTES DES RESERVATIONS</u></h2>
<a href="acceuil.php" style="color: white;">Revenir en arrière</a>
<hr>
<table border="2px" style="margin-top: 30;">
        <tr >
            <th >ID Reservation</th>
            <th style="text-align: center;">Date Reservation</th>
            <th style="text-align: center;">Client</th>
            <th style="text-align: center;">Specification</th>
            <th style="text-align: center;">Date Debut</th>
            <th style="text-align: center;">Date Fin</th>
            <th style="text-align: center;">Delais</th>
            <th style="text-align: center;">Etat</th>
            <th style="text-align: center;">Actions</th>
        </tr>
        <?php
        $reponse=$bdd->query("SELECT * FROM reservation");
        
        $odre=0;
        while($element=$reponse->fetch()){
          $odre+=1;
        
    ?>
    <tr>
        <td ><?php echo $odre?></td>
        <td ><?php echo $element['dateReservation']?></td>
        <td ><?php echo $element['client']?></td>
        <td ><?php echo $element['specification']?></td>
        <td ><?php echo $element['dateDebut']?></td>
        <td ><?php echo $element['dateFin']?></td>
        <td ><?php echo $element['delais']?></td>
        <td ><?php echo $element['etat']?></td>
        <td ><a href="reservation_modifier.php?idReservation=<?= $element['idReservation']?>" style="color: whitesmoke;">Modifier</a>
        <a href="reservationSupprimer_bd.php?idReservation=<?= $element['idReservation']?>" style="color: whitesmoke;">Supprimer</a>
    </tr>
    <?php } ?>
</table>
<hr>
</center>

<footer class="text-center text-white fixed-bottom">
  <div class="text-center p-3" style="margin-top: 500; font-family:'Times New Roman'">
    © 2021 Copyright - MAFLOREAUTHENTIQUE
  </div>
</footer>
</body>
</html>