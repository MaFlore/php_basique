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
<body class="bod" >
<center>
<?php

try{
    $bdd = new PDO('mysql:host=localhost; dbname=projetfinal;','root','');
    
}catch(Exception $e)
{
    echo "Erreur";
}
?>
<h2 class="clas1" style="font-size: 23px;"><u>LISTES DES CLIENTS</u></h2>
<table border="2px" style="margin-top: 30;">
        <tr>
            <th >ID Client</th>
            <th style="text-align: center;">Nom</th>
            <th style="text-align: center;">Prenom</th>
            <th style="text-align: center;">Adresse</th>
            <th >Ville</th>
            <th >Telephone</th>
            <th >Numero permis</th>
            <th >Numero CNI</th>
            <th style="text-align: center;">Email</th>
        </tr>
        <?php
        $reponse=$bdd->query("SELECT * FROM client");
        
        while($element=$reponse->fetch()){

        
    ?>
    <tr>
        <td ><?php echo $element['idClient']?></td>
        <td ><?php echo $element['nomClient']?></td>
        <td ><?php echo $element['prenomClient']?></td>
        <td ><?php echo $element['adresse']?></td>
        <td ><?php echo $element['ville']?></td>
        <td ><?php echo $element['telephone']?></td>
        <td ><?php echo $element['numPermis']?></td>
        <td ><?php echo $element['numCNI']?></td>
        <td ><?php echo $element['mail']?></td>
    </tr>
    <?php } ?>
</table>
<p style="font-size: 23px; font-family:'Times New Roman';margin-top:30px">  <?php
  $jour = date("d");
  $mois = date("m");
  $annee = date("Y");
  
  echo 'Fait ?? lom?? le : '.$jour.'/'.$mois.'/'.$annee.' '
?></p>
<p  style="font-size: 23px; font-family:'Times New Roman';"><u>Signature</u> :</p>

<br>
<div class="text-center">
    <button onclick="window.print();" class="btn btn-primary" id="print-btn">Imprimer la liste des clients</button>
</div>		
</center>

</body>
</html>