<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Accueil</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
 
</head>
<body style="background-image: url('plage.jpeg'); margin: 100px;" >
<center>
<?php

try{
    $bdd = new PDO('mysql:host=localhost; dbname=avion;','root','');
    
}catch(Exception $e)
{
    echo "Erreur";
}
?>
    <h1>INFORMATIONS PASSAGERS</h1>
    <a href="formulaire_ajout.php">Ajouter</a>
    <hr>
    <table border="2px">
        <tr>
            <th style="color: azure;">Numero Client</th>
            <th style="color: azure;">Nom</th>
            <th >Prenom</th>
            <th style="color: azure;">Numero Vol</th>
            <th style="color: azure;">Nombre bagage</th>
            <th style="color: azure;">Actions</th>
        </tr>

   <?php
        $reponse=$bdd->query("SELECT * FROM voler");
        
        while($element=$reponse->fetch()){

        
    ?>
    <tr>
        <td style="color: azure;"><?php echo $element['numClient']?></td>
        <td style="color: azure;"><?php echo $element['nom']?></td>
        <td style="font-weight: bold;"><?php echo $element['prenom']?></td>
        <td style="color: azure;"><?php echo $element['numVol']?></td>
        <td style="color: azure;"><?php echo $element['nombeBagage']?></td>
        <td style="color: azure;"><a href="modifier_bd.php?numClient=<?= $element['numClient']?>">Modifier</a>
        <a href="supprimer.php?numClient=<?= $element['numClient']?>">Supprimer</a></td>
    </tr>
    <?php } ?>
    </table>

</center>
</body>
</html>