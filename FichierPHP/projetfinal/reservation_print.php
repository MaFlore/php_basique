<html>
<head>
    <meta charset="utf-8"/>
    <title>Liste client</title>
    <link rel="stylesheet" href="style4.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
</head>
<body class="bod" style="background-color:mediumaquamarine">
<center>
<?php

try{
    $bdd = new PDO('mysql:host=localhost; dbname=projetfinal;','root','');
    
}catch(Exception $e)
{
    echo "Erreur";
}
?>

<h2 class="clas1" style="font-size: 23px;"><u>LISTES DES RESERVATIONS</u></h2>
<table border="2px" style="margin-top: 10;">
        <tr >
            <th >ID Reservation</th>
            <th style="text-align: center;">Date Reservation</th>
            <th style="text-align: center;">Client</th>
            <th style="text-align: center;">Specification</th>
            <th style="text-align: center;">Date Debut</th>
            <th style="text-align: center;">Date Fin</th>
            <th style="text-align: center;">Delais</th>
            <th style="text-align: center;">Etat</th>
        </tr>
        <?php
        $reponse=$bdd->query("SELECT * FROM reservation");
        
        while($element=$reponse->fetch()){

        
    ?>
    <tr>
        <td ><?php echo $element['idReservation']?></td>
        <td ><?php echo $element['dateReservation']?></td>
        <td ><?php echo $element['client']?></td>
        <td ><?php echo $element['specification']?></td>
        <td ><?php echo $element['dateDebut']?></td>
        <td ><?php echo $element['dateFin']?></td>
        <td ><?php echo $element['delais']?></td>
        <td ><?php echo $element['etat']?></td>
    </tr>
    <?php } ?>
</table>
<p style="font-size: 23px; font-family:'Times New Roman';margin-top:30px">  <?php
  $jour = date("d");
  $mois = date("m");
  $annee = date("Y");
  
  echo 'Fait à lomé le : '.$jour.'/'.$mois.'/'.$annee.' '
?></p>
<p  style="font-size: 23px; font-family:'Times New Roman';"><u>Signature</u> :</p>

<br>
<div class="text-center">
    <button onclick="window.print();" class="btn btn-primary" id="print-btn">Imprimer la liste des clients</button>
</div>
</center>

</body>
</html>