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
<body class="bod" style="background-color: darkcyan;">
<center>
<?php

try{
    $bdd = new PDO('mysql:host=localhost; dbname=projetfinal;','root','');
    
}catch(Exception $e)
{
    echo "Erreur";
}
?>

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

        </tr>
        <?php
        $reponse=$bdd->query("SELECT * FROM laucation");
        
        while($element=$reponse->fetch()){

        
    ?>
    <tr>
        <td ><?php echo $element['idLocation']?></td>
        <td ><?php echo $element['client']?></td>
        <td ><?php echo $element['tarif']?></td>
        <td ><?php echo $element['utilisation']?></td>
        <td ><?php echo $element['numSerie']?></td>
        <td ><?php echo $element['dateLocation']?></td>
        <td ><?php echo $element['nombreJour']?></td>
        <td ><?php echo $element['etat']?></td>
        <td ><?php echo $element['facture']?></td>
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
    <button onclick="window.print();" class="btn btn-primary" id="print-btn">Imprimer la liste des locations</button>
</div>
</center>

</body>
</html>