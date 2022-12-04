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
<body class="bod" style="background-color: darkcyan;">
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
<a href="location_print.php" class="btn btn-primary">Imprimer la liste des locations</a>
</div>
<h2 class="clas1" style="font-size: 23px;"><u>LISTES DES LOCATIONS</u></h2>

<table border="2px" style="margin-top: 30;">
        <tr>
            <th >ID Location</th>
            <th style="text-align: center;">Client</th>
            <th style="text-align: center;">Tarif</th>
            <th style="text-align: center;">Utilisation</th>
            <th >Numero Série</th>
            <th >Date Location</th>
            <th >Nombre Jour</th>
            <th style="text-align: center;">Etat</th>
            <th style="text-align: center;">Facture</th>
            <th style="text-align: center;">Actions</th>
        </tr>
        <?php
        $reponse=$bdd->query("SELECT * FROM laucation");
        $odre=0;
        while($element=$reponse->fetch()){
          $odre+=1;
        
    ?>
    <tr>
        <td ><?php echo $odre?></td>
        <td ><?php echo $element['client']?></td>
        <td ><?php echo $element['tarif']?></td>
        <td ><?php echo $element['utilisation']?></td>
        <td ><?php echo $element['numSerie']?></td>
        <td ><?php echo $element['dateLocation']?></td>
        <td ><?php echo $element['nombreJour']?></td>
        <td ><?php echo $element['etat']?></td>
        <td ><?php echo $element['facture']?></td>
        <td ><a href="location_modifier.php?idLocation=<?= $element['idLocation']?>" style="color: whitesmoke;">Modifier</a>
        <a href="locationSupprimer_bd.php?idLocation=<?= $element['idLocation']?>" style="color: whitesmoke;">Supprimer</a>
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